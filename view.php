<?php
require_once "Demo.php";
$t=new Demo;
$res=$t->demo()
?>

<form action="" method="post">
    <table border="1">
        <tr>
            <td>FirstNumber</td>
            <td><input type="text" name="first_number"></td>
        </tr>

        <tr>
            <td>LastNumber</td>
            <td><input type="text" name="last_number"></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="radio" name="check" value="Odd">ODD
                <input type="radio" name="check" value="Even">Even
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td>
                <textarea rows="5" cols="30">
                    <?php
                    echo $res;
                    ?>
                </textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

        </table>

</form>
