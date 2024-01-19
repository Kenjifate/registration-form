<?php 
    session_start();

    if($_SESSION['uid']){
        $id = $_SESSION['uid'];

        $query = $conn->prepare("SELECT FirstName, LastName FROM form WHERE I.D = $id");
        $query->execute();
        while($data = $query->fetch()){
            $firstname = $data['FirstName'];
            $Lastname = $data['LastName'];

        }

    }else{
        header("Location:Costumer login.php");
        die();
    }
?>