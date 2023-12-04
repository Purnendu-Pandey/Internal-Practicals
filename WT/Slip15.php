<!--
Q.1)Write a PHP script to accept 2 strings from the user, the first string should be a 
sentence and second can be a word. Insert the given small string in the given big 
string at specified position without removing any characters from the big string
-->
<html>
    <body>
        <form action="name of your php file" method="post">
            Enter a sentence (big string):<input type="text" name="bstr"><br><br>
            Enter a word (small string):<input type="text" name="sstr"><br><br>
            <input type="radio" name="op" value="1">insert small<br>
            <input type="submit" value="submit" ><br>

            Enter number:<input type="number" name="num"><br><br>
            Enter posotion:<input type="number" name="pos"><br><br>
        </form>    
    </body>
</html>


<?php
$bstr=$_POST['bstr'];
$sstr=$_POST['sstr'];
$num=$_POST['num'];
$pos=$_POST['pos'];
$ch=$_POST['op'];
if($ch==1)
{
    $res=substr_replace($bstr,$sstr,$pos,0);
    echo "result : $res";
}
?>