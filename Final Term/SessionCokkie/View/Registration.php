<?php 
include "../Controller/RegistrationValidation.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Registration Form</title>
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td style='color:red'>*Required Field</td>
                </tr>
                <tr>
                    <td><label for="userName">User Name:</label></td>
                    <td>
                    <input type="text" id="name" name="name"> <?php echo $name?>
                    </td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="pass" name="password"><?php echo $password?></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><input type="submit" id="submit" name="submit"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>