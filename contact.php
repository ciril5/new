<?php 
session_start();
include("dbfunctions.php");

$contactname=strip_tags($_POST['name']);
$phonenumber=strip_tags($_POST['phone']);
$email=strip_tags($_POST['email']);
$subject=strip_tags($_POST['course']);
$entry_date=date('Y-m-d');
$db1 	= 	new Database();



$db1->insertdata('contact',array("contactname"=>$contactname,"phone_no"=>$phonenumber,"email" => $email,"course"=>$subject,"entry_date" => $entry_date));
if($db1)
{
    $_SESSION['status']="Thank you";
    header('location:index.php');
}
else{
    echo "something went wrong";

}
//$_SESSION['fl']=1;
?><div style="font-weight:bold; color:#0C0;">Request  submitted successfully</div>