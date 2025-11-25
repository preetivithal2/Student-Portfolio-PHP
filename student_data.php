<?php
@include('db.php');

if(isset($_POST['student']))
{
$name =$_POST['name'];
$email =$_POST['email'];
$batch =$_POST['batch'];
$faculty =$_POST['faculty'];


$query ="INSERT INTO `students`(`name`,`email`,`batch`,`faculty`) VALUES
 (`$name`,`$email`,`$batch`,`$faculty`);";


$res =mysqli_query($conn, $query);

if($res)
{
    echo "successfully inserted";
}
else{
    echo "not register";
}

}
?>