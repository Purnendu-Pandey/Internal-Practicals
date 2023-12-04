<!--
Q.1) Write a script to accept two integers(Use html form having 2 textboxes). [6]
Write a PHP script to, 
a. Find mod of the two numbers. 
b. Find the power of first number raised to the second. 
(Write separate function for each of the above operations.)
-->

<html>
<body>
    <form action="name of your php file" method="post">
        Enter 1 no:<input type="text" textarea="50" name="n1"><br><br>
        Enter 2 no:<input type="text" textarea="50" name="n2"><br><br>
        <input type="submit" value="submit">
    </form>
</body>    
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    
    function mode($a,$b)
    {
        $c=$a%$b;
        echo "MOD=$c<br>";
    }
    function power($a,$b)
    {
        $x=pow($a,$b);
        echo "Power:$x<br>";
    }
    
}
mode($n1,$n2);
power($n1,$n2);
?>