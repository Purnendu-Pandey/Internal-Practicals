<!--
Q.1)Write a PHP script for the following: 
Design a form to accept two strings from the user. 
a. Find whether the small string appears at the start of the large string. 
b. Find the position of the small string in the big string.
-->


<html>
<body>
   <form action="name of your php file" method="post">
    Enrter 1St String:<input type="text"  name="s1"><br><br>
    Enrter 2nd String:<input type="text"  name="s2"><br><br>
    <input type="radio" name="op" value="1">small string appeaar with laege string<br>
    <input type="radio" name="op" value="2">pos of small string in the big string<br>
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

function smlr($s1,$s2)
{
    $pos=strpos($s1,$s2);
    if($pos === 0)
    {
        echo "String $s2 is found at start and its position is :".($pos+1);
    }
    else
        echo "String $s2 is not found at starting position";
    
}
function poss($s1,$s2)
{
    $pos=strpos($s1,$s2);
    if($pos !== false)
    {
        echo "String $s2 is found at pos :".($pos+1);
    }
    else
       echo "String $s2 is not found";
}
switch($ch)
{
    case 1:
        smlr($s1,$s2);
        break;
    case 2:
        poss($s1,$s2);
         break;              
}
}
?>