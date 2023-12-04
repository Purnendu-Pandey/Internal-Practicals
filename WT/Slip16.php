<!--
Q.1)Write a PHP script for the following: 
Design a form to accept two strings from the user. Compare both the string for first 
n characters, also the comparison should not be case sensitive. 
-->
<html>
<body>
   <form action="name of your php file" method="post">
    Enrter 1St String:<input type="text"  name="s1"><br><br>
    Enrter 2nd String:<input type="text"  name="s2"><br><br>
    <input type="radio" name="op" value="1">Compare Both the String<br>
    <input type="submit" value="submit">
</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $ch=$_POST['op'];

function com($s1,$s2)
{
    $pos=strncasecmp($s1,$s2,10);
    if($pos == 0)
    {
        echo "String Equal";
    }
    else
       echo "String  not equal";
}
switch($ch)
{
    case 1:
        com($s1,$s2);
        break;               
}
}
?>