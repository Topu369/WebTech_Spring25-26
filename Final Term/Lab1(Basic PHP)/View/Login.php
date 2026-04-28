<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<h1 style='color: blue'>Login Form</h1>"
        ?>
        <form>
            <table>
                <tr>
                <td>
                    <p>User Name:</p>
                </td>
                <td>
                    <input type="text"/>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Password:</p>
                </td>
                <td>
                    <input type="password"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit"/>
                </td>
            </tr>
            </table>
            
        </form>

        <?php
        $var1=10;
        $var2=20;
        echo $var1+$var2;
        echo"<br>";
        echo $var1-$var2;
        echo "<br>";
        echo $var1*$var2;
        echo "<br>";
        echo $var1/$var2;
        echo "<br>";

        $age=20;
        if($age>18)
            {
                echo "You are adult now";
            }else
            {
                echo "You're a teenager";
            }
        ?>
    </body>
</html>