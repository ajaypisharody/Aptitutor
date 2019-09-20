<?php include 'database.php';?>
<?php 
if(isset($_POST['submit']))
{
//get post variables
$question_number=$_POST['question_number'];

//Get the content of the image and then add slashes to it 





$question_text=$_POST['question_text'];
$correct_choice=$_POST['correct_choice'];
$choices=array();
$choices[1]=$_POST['choice1'];

$choices[2]=$_POST['choice2'];
$choices[3]=$_POST['choice3'];
$choices[4]=$_POST['choice4'];

//question query
$query="INSERT INTO `questions_2`(question_number,text,image) VALUES('$question_number','$question_text','')";

//runquery
$insert_row=$mysqli->query($query) or die($mysqli->error.__LINE__);

//validate insert
if($insert_row)
  {
     foreach($choices as $choice => $value )
          {
            if($value!='')
                {
                  if($correct_choice== $choice)
                     {
                      $is_correct=1;
                     }
                   else
                           { 
                            $is_correct=0;
                            }
                   //choice query
                      $query="INSERT INTO `choices_2` (question_number,is_correct,text) VALUES ('$question_number','$is_correct','$value')";

//run query
$insert_row=$mysqli->query($query)or die($mysqli->error.__LINE__);
//validate insert
if($insert_row)
{
continue;
}
else
{
die('error'.$mysqli->errno.''.$mysqli->error);
}

  

        }
  }
  $msg='qusetion has been added';

}
}
$query="SELECT * FROM `questions_2`";
$questions=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$questions->num_rows;
$next=$total+1;
?>

<html>
<head>
<style>
label{
display:inline-block;
width:180px;
}
input[type='text']{
width:97%;
padding:4px;

border:1px solid black;
border-radius:5px;
}
input[type='number']{
width:50px;
padding:4px;

border:1px solid black;
border-radius:5px;
}
</style>

</head>

<body>
<main>
<div class="container">
<h2>Add a question</h2>

<?php 
  if(isset($msg))
  {
    echo '<p>'.$msg.'</p>';
  }
?>
<form method="post" action="add.php">
<p>
<label>question number</label>
<input type="number" value="<?php echo $next;?>" name="question_number"/>
</p>
<p>
<label>question text</label>
<input type="text" name="question_text"/>
</p>
<p>
<label>Graphical question</label>
<input type="file" name="image">

</p>
<p>
<label>Choice 1:</label>
<input type="text" name="choice1"/>
</p>
<p>
<label>Choice 2</label>
<input type="text" name="choice2"/>
</p>
<p>
<label>Choice 3:</label>
<input type="text" name="choice3"/>
</p>
<p>
<label>Choice 4:</label>
<input type="text" name="choice4"/>
</p>
<p>
<label>Correct choice number</label>
<input type="number" name="correct_choice"/>
</p>
<p>
<input type="submit" name="submit" value="Submit"/>
</p>
</form>
</div>
</body>
</html>