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



  
 //  $array[] = $arrays;


$elements = array();
$element['firstName'] = 'doug';
$element['lastName'] = 'andrews';
$element['middleName'] = 'deb';
$elements[] = $element;

$element['firstName'] = 'mark';
$element['lastName'] = 'andrews';
$element['middleName'] = 'debie';
$elements[] = $element;

$element['firstName'] = 'liz';
$elememt['lastName'] = 'andrews';
$element['middleName'] = 'friend';
$elements[] = $element;

echo($elements[0]['lastName']);
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

<html><br>

<table border="1">

    <?foreach ($elements as $element) { ?>
    <tr>
    </tr>
    <td>
        <?echo($element['firstName']) ?>
    </td>
    <td>
       <?echo($element['lastName']) ?>
    </td>
    <td>
       <?echo($element['middleName']) ?>
    </td>
    <?}?>
</table>

</html>


<?
//print_r($elements);

//$a =[2,3,4,5];
//array_push($a,-3);

/*$a[4] = 'hello';
$a[33] = 'worlds';
$a['xx'] = 'weird';
//print_r($a); */

//foreach ($a as $key=>$val) {
  //  echo($key . ' => ' . $val);
    //echo('<br>');
//}
//echo($a[2]);

//print_r($a);
//$a = array(2,3,4,5);// same as [2,3,4,5] without the word "array"

/*for($i =0; $i <sizeof($a); $i++) {
   // echo "Ijave counted to $i <br>";
   echo($a[$i]);
   echo("<br>");
}*/






/*$x1 = 'A';
$x2 = 'B';

switch($x1) {
    case 'A': echo('A'); break; //don't forget the break
    case 'B': echo('B'); break;// after each case
    case 'C': echo('C'); break;
}

echo($x1 =='b' ? 'yes' : 'no');//turn area operator takes place of the if statement
*/
 /* if ($x1<$x2) {
    echo('<');
} else{
    echo('>');
} */

/* if ($x1<$x2) {
    echo('<');
} else if ($x1>$x2){
    echo('>');
} else {
    echo('=');
} */

//$favoriteAnimal = "cat";

//echo("my favorite animals are {$favoriteAnimal}s")// curley brackets allows you to put
// an s at the end


//$myvar1 = 'doug';
//$myvar2 = 33;

//$a = '45';
//$b = 'happy birthdasy';

/*$c = "this is a really big string
that I am typing now";

echo($c); */

//echo("Hello class, $b");

/*if (!strpos($b,'h')) {
echo('not found');
}else{
    echo('found');
}// returns 0 in boolean this is false even if it's true

if (strpos($b,'h')=== false) {
    echo('not found');
    }else{
        echo('found'); 
    } */// returns 0 in boolean this is false even if it's true
// is it same value and type?, no so it's true

 //echo(strpos($b,'p')); // gives the first occurence of 'p',
// return values can be a number (number where it is found) or boolean value if it's nnot found

//echo(substr($b,2,1));// first number is the starting position, the second 
// number is how many we want after the starting position.

//echo(substr($b,2)); // gives everything from the starting 
// position to the end of the string

//echo(substr($b,2,-1));//start at 2 and go to 1 number from the end

//echo(substr($b,-2)); // start at the end and give 2 numbers
// going twords the front

//echo(substr($b,-2,-1)); //start at the end and move twords 
// the front, subtract one from the end (should be "da")

//echo('<br>');
//echo(strlen($b)); // length of string
//echo(strtoupper($b)); //uppercases the string
//echo(ucwords($b)); //uppercases the first letter of each word

//if ($b == 45 or $a == 45) 
//{
 //   echo('aa');
//}else 
//{
  //  echo('bb');
//}

//$first_name = 'doug';
//$firstName = 'doug';

//echo('<br>');
//$c =$a.$b;
//echo($c);
//echo($myvar1);
//echo('<br>');
//echo($myvar2);
//echo($first_name);
//echo($firstName);

?>