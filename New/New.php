

<!DOCTYPE html>
    <html>
        <head>
        <title>REGISTRATION FORM</title>
        <link rel="stylesheet" href="css.css">
        </head>
    <body>
        <form action="FORM.php" method="post" enctype="multipart/form-data">
            <h3>REGISTRATION FORM</h3>
        <div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your First Name" required>
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required>
        </div>
        <div>
            <label for="mname">Middle Name</label>
            <input type="text" id="mname" name="mname" placeholder="Enter your Middle Name" required>
        </div>
        <div>
            <label for="bday">Birthdate</label>
            <input type="date" id="bday" name="bday" placeholder="Enter your Birthdate" required>
        </div>
        <div>
            <label for="ad">Adddress</label>
            <input type="text" id="ad" name="ad" placeholder="Enter your Address" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div>
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname" placeholder="Enter your UserName" required>
        </div>
        <div>
            <label for="pword">Password</label>
            <input type="password" id="pword" name="pword" placeholder="Enter Password" required>
        </div>
        <div>
            <label for="pic">Picture</label>
            <input type="file" id="pic" name="pic" accept="image/*" required>
        </div>
        <div>
            <input type="radio" id="check" name="check">
            <label for="check">I hereby accept all terms and conditions</label>
        </div>
        <div>
            <button name="submit">Submit</button>
        </div>
        </form>
    </body>
    </html>