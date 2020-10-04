<?
$fname='';
if(!empty($_REQUEST['fname'])) 
    {
         $fname = $_REQUEST['fname'];
    }
$lname='';
if(!empty($_REQUEST['lname'])) 
    {
         $lname = $_REQUEST['lname'];
    }

    $x[0]
    $x[1]
?>

<html>
<form action="test2.php" method="post">
    <table border="0" cellspacing="1" cellpadding="1">
        <tr>
            <td>
                enter first name
            </td>
            <td>
                <input value="<?echo($fname);?>" type="text" name="fname" size=30 maxlength=10>
            </td>
        </tr>
        <tr>
            <td>
                last name
            </td>
            <td>
                <input value="<?echo($lname);?>" type="text" name="lname" size=30 maxlength=10>
            </td>
        </tr>
    </table>
    <input type="submit" value="press me">
</form>


</html>