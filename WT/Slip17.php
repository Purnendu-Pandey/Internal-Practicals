<!--
Q.1)Write a menu driven program to perform the following stack and queue related 
operations 
a) Insert an element in queue 
b) Delete an element from queue 
c) Display the contents of queue
-->	
<!DOCTYPE html>
<html>
<head>
<title>Hii</title>
</head>
<body>
    <form action="name of your php file" method="post">
    	   <h1>Choose Any One Option</h1>
           <input type="radio" name="op" value="1">Insert An Element in Queue<br>
           <input type="radio" name="op" value="2">Delete An Element From Queue<br>
           <input type="radio" name="op" value="3">Display The Content Queue<br>
           <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
     $ch=$_POST['op'];
     $a=array(1,2,5,3,6);
     switch($ch)
     {
		case 1:
	     print_r($a);
	     array_unshift($a,10);
	     echo "<br> After Insertion :";
	     print_r($a);
	     break;
		case 2:
	     print_r($a);
	     array_shift($a,10);
	     echo "<br> After Deletion :";
	     print_r($a);
	     break;
		case 3:
	     echo "<br> Content of queue:";
	     print_r($a);
	     break;
	
     }
?>