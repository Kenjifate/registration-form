<?php 
include_once ("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATION FORM</title>
    </head>

    <body>
        <h2>List of Records</h2>
        <a href="New.php">Add Records</a><br>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Birthdate</th>
                <th>Username</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = $conn->prepare("SELECT * FROM form");
                $query->execute();

                while($information = $query->fetch()){
                    $firstname = $information['FirstName'];
                    $lastname = $information['LastName'];
                    $middlename = $information['MiddleName'];
                    $Birthdate = $information['Birthday'];
                    $address = $information['Address'];
                    $Email = $information['Email'];
                    $Username = $information['Username'];
                    $Picture = $information['Picture'];
                
            ?>
            <tr>
                <td><?php echo $FirstName. ".".$MiddleName.".".$LastName; ?></td>
                <td><?php echo $Email; ?></td>
                <td><?php echo $Address; ?></td>
                <td><?php echo $Birthdate; ?></td>
                <td><?php echo $Username; ?></td>
                <td><img src="IMG/"<?php echo $Picture; ?> alt="pfp" width="100"></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </body>
</html>