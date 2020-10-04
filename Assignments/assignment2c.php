<?
$arrays = array();
$row = 0;
for ($i = 0; $i<15; $i++) {
    $row++;
    $array[0] = 'row ' . $row . ' col 1';
    $array[1] = 'row ' . $row . ' col 2';
    $array[2] = 'row ' . $row . ' col 3';
    $array[3] = 'row ' . $row . ' col 4';
    $array[4] = 'row ' . $row .  'col 5';
    $arrays[] = $array;
}


?>

<html><br>

<table border="1">
  <?foreach($arrays as $array){ ?>
    <tr>
        <td><?echo($array[0])?></td>
        <td><?echo($array[1])?></td>
        <td><?echo($array[2])?></td>
        <td><?echo($array[3])?></td>
        <td><?echo($array[4])?></td>
        

    </tr>
  <? } ?>
</table>

</html>