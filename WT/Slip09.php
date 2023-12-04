<!--
Q.1)Write a PHP script for the following: Design a form to accept a string. 
a. Pad the given string with “*” from left and right both the sides. 
b. Remove the leading whitespaces from the given string. 
c. Find the reverse of given string.
-->
    
<html>
<body>
    <form action="name of your php file" method="post">
        Enter string:<input type="text" size="50" name="s1"><br><br>
        <input type="radio" name="op" value="1">pad the given string with*<br>
        <input type="radio" name="op" value="2">remove the leading whitespace<br>
        <input type="radio" name="op" value="3">find rev of string<br>
        <input type="submit" value="submit">
    </form>
</body>    
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $s1=$_POST['s1'];
    $ch=$_POST['op'];
    function pad($str)
    {
        echo "*" . $str . "*";
    }
    function white($str)
    {
        echo "remove leading white space<br> ".ltrim($str);
    }
    fuction rev($str)
    {
        echo "reverse : ".strrev($str);
    }
    switch($ch)
    {  
        case 1:
            pad($s1);
            break;  
        case 2:
            white($s1);
            break;
        case 3:
            rev($str);
            break;               
    }

}
?>