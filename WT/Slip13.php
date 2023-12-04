<!--
Q.1)Write a PHP script for the following: Design a form to accept a string. 
a. Write a function to find the length of given string using built in functions. 
b. Convert the given string to lowercase and then to Title case
-->
<html>
<body>
    <form action="name of your php file" method="post">
        Enter string:<input type="text" size="50" name="s1"><br><br>
        <input type="radio" name="op" value="1">find the length of given string<br>
        <input type="radio" name="op" value="2">string to lowrrcase then titlecase<br>
        <input type="submit" value="submit">
    </form>
</body>    
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $s1=$_POST['s1'];
    $ch=$_POST['op'];
    function length($str)
    {
        $l=strlen($str);
        $c=0;
        for($i=0;$i<$l;$i++)
        {
            $c++;
        }
        echo "String length=$c<br>";
    }
    function lowercase($str)
    {
        $x=strtolower($str);
        echo "lowercase <br>: $x";
        $y=ucwords($str);
        echo "Title case=$y<br>";
        
    }
    switch($ch)
    {
        case 1:
            length($s1);
            break;
        case 2:
            lowercase($s1);
            break;               
    }
}
?>