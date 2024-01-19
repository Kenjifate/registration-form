<?php 
    include_once("connection.php");

if(isset($_POST['signin'])) {

    $email = $_POST['email'];
    $password = sha1($_POST['pword']);

    session_start();

    $statement = $conn->prepare("SELECT id FROM form WHERE Email = :email AND Password = :pword");
    $statement->bindParam(":email", $email);
    $statement->bindParam(":pword", $password);
    $statement->execute();

    $count = $statement->rowCount();

    if($count > 0){
            while($data = $statement->fetch()){
                $id = $data['id'];
                
                $_SESSION['I.D'] = $id;

                header("Location:homepage.php");
                exit();
            }   
            }else{
                echo "<script>alert('Sorry, Wrong Email or Password!')</script>";
                echo "<script>window.open('Costumer login.php','_self')</script>"; 
            }
}
?>
