<!--
Q.1) Write a script to accept two integers(Use html form having 2 textboxes). 
Write a PHP script to, 
a. Find the sum of first n numbers (considering first number as n) 
b. Find the factorial of second number. 
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
    
    function summ($a)
    {
        $sum=0;
        for($i=0;$i<=$a;$i++)
            $sum+=$i;
        echo "Sum:$sum<br>";  
    }
    function fact($a)
    {
        $sum=1;
        for($i=1;$i<=$a;$i++)
            $sum*=$i;
        echo "Factorial:$sum<br>" ;   
    }

}
summ($n1);
fact($n2);
?>