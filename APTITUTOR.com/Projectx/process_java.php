<?php include 'database.php'?>
<?php session_start();


?>
<?php 


if($_POST)
{
$number=$_POST['number'];
$selected_choice=$_POST['choice'];
$next=$number+1;

$query="SELECT * FROM `advance_java`";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows; 

$query="SELECT * FROM `choices_java` WHERE question_number=$number AND is_correct=1";

$result=$mysqli->query($query) or die($mysqli->error.__LINE__);

$row=$result->fetch_assoc();

$correct_choice=$row['id'];

if($correct_choice==$selected_choice)
{
$query="UPDATE `score` SET scores_1=scores_1+'1' WHERE srno='11'"; 

//runquery
$insert_row=$mysqli->query($query) or die($mysqli->error.__LINE__);
}

if($number==$total)
{
header("Location:final.php");
exit();
}
else{
header("Location:quiz.php?n=".$next);
}
}

?>