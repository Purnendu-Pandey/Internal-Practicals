<!--
Q.1)Write a menu driven program to perform the following operations on 
associative arrays: 
a) Merge the given arrays. 
b) Find the intersection of two arrays. 
-->
<html>
<body>
    <form action="name of your php file" method="post">
        <input type="radio" name="op" value="1">merge the array<br>
        <input type="radio" name="op" value="2">insertion of two arrays<br>
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
            $y=array_merge($arr1,$arr2);
            echo "Merge element<br>";
            print_r($y);
            break;
        case 2:
            print_r(array_intersect($arr1,$arr2));
            break;
    }
}
?>