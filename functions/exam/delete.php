<?php 
include("../../functions/mainFunctions/conn.php");
extract($_POST);
$delExam = $conn->query("DELETE FROM exam WHERE id='$id'  ");
if($delExam)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}
echo json_encode($res);
?>