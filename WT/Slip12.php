<!--
Q.1)Write a PHP script having 3 textboxes. The first textbox should be for 
accepting name of the student, second for accepting name of college and third for 
accepting a proper greeting message. Write a function for accepting all the three 
parameters and generating a proper greeting message.
-->    
<html>
<body>
    <form action="name of your php file" method="post">
        Enter student name:<input type="text" name="sname"><br><br>
        Enter college name:<input type="text" name="cname"><br><br>
        Enter message:<input type="text" name="message"><br><br>
        <input type="submit" value="submit">
    </form>   
</body>    
</html>

<?php
$sname=$_POST['sname'];
$cname=$_POST['cname'];
$messag=$_POST['message'];

function fun($sname="",$cname="",$messag="")
{
if(empty($sname) && empty($cname) && empty($messag))
{
    echo "HELLOW!!";
}
else if(empty($sname))
{
    echo "hellow from $cname";
}
else if(empty($cname))
{
    echo "hellow  $sname";
}
else
{
    echo "$messag $sname from $cname";
}
}
fun($sname,$cname,$messag);
?>