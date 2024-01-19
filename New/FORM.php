<?php 
include_once ("connection.php");

if(isset($_POST['submit'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $mname = htmlentities($_POST['mname']);
    $Birthdate = $_POST['bday'];
    $address = $_POST['ad'];
    $Email = $_POST['email'];
    $Username = htmlentities($_POST['uname']);
    $Password = sha1($_POST['pword']);

   
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid email format!')</script>";
        echo "<script>window.open('New.php','_self')</script>";
        exit();
    }

    
    $checkEmailQuery = $conn->prepare("SELECT COUNT(*) FROM form WHERE Email = :email");
    $checkEmailQuery->bindParam(":email", $Email);
    $checkEmailQuery->execute();
    $emailExists = $checkEmailQuery->fetchColumn();

    if ($emailExists > 0) {
        echo "<script>alert('Email is already in use!')</script>";
        echo "<script>window.open('New.php','_self')</script>";
        exit();
    }

    $imgFile = $_FILES['pic']['name'];
    $imgSize = $_FILES['pic']['size'];
    $temp_name = $_FILES['pic']['tmp_name'];
    $img_ext = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

    $path_directory = "IMG/";

    $validExt = array('jpeg', 'jpg', 'img', 'jfif', 'png', 'gif');

    $newname = rand(1000, 1000000000).".".$img_ext;

    if(in_array($img_ext, $validExt)) {
        if($imgSize < 8000000){
            move_uploaded_file($temp_name, $path_directory.$newname);

            $query = $conn->prepare('INSERT INTO form (FirstName, LastName, MiddleName, Birthday, Address, Email, Username, Password, Picture) 
                    VALUES (:fname, :lname, :mname, :bday, :ad, :email, :uname, :pword, :pic)');
            $query->bindParam(":fname", $fname);
            $query->bindParam(":lname", $lname);
            $query->bindParam(":mname", $mname);
            $query->bindParam(":bday", $Birthdate);
            $query->bindParam(":ad", $address);
            $query->bindParam(":email", $Email);
            $query->bindParam(":uname", $Username);
            $query->bindParam(":pword", $Password);
            $query->bindParam(":pic", $newname);

            try {
                $query->execute();
                echo "<script>alert('Successfully Registered!')</script>";
                echo "<script>window.open('Costumer login.php','_self')</script>"; 
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            echo "<script>alert('Successfully Uploaded!')</script>";
            echo "<script>window.open('Costumer login.php','_self')</script>";
        }else {
            echo "<script>alert('Sorry, file size is too large!')</script>";
            echo "<script>window.open('New.php','_self')</script>";
        } 
    } else {
        echo "<script>alert('Sorry, extension is not valid!')</script>";
        echo "<script>window.open('New.php','_self')</script>";
    }
}
?>
