<!--
Q.1)Write a menu driven program to perform the following operations on 
associative arrays: 
a) Split an array into chunks 
b) Sort the array by values without changing the keys
-->
<html>
<body>
    <form action="name of your php file" method="post">
        <input type="radio" name="op" value="1">Split array into chunk<br>
        <input type="radio" name="op" value="2">sort array without key<br>
        <input type="submit" value="submit">
    </form>
</body>    
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $ch=$_POST['op'];
    //a=array('a'=>1,'b'=>3);
    $arr1=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>6);
    $arr2=array('x'=>11,'y'=>52,'z'=>33,'p'=>4);
    switch($ch)
    {
        case 1:
            $x=array_chunk($arr1,2);
            echo "Array chunk :<br>";
            print_r($x);
            break;
        case 2:
            asort($arr2);
            echo "Sorting<br>";
            print_r($arr2);
            break;
    }
}
?>