<?php
 require_once("inc/dbcall.php");
  //var dataString = 'name=' + tusername + '&pwd=' + pwd + '&fname=' + fname + '&memail=' + temail
  // + '&tspecialty=' + tspecialty + '&utype=' + $usertype;
$db = new Db();
//get user submitted values
$eUsername = $_POST['eUsername'];
$ePassword = $db->makepwd($_POST['ePassword']);
$orgName = $_POST['orgName'];
$industry = $_POST['industry'];
$type = $_POST['ctype'];//profitability
$empEmail = $_POST['empEmail'];
$phoneNo = $_POST['phoneNo'];
//end of member data
//$sql="INSERT INTO `employer` (`username`, `password`, `orgName`, `industry`,`profitability`, `email`, `phoneNo`)
//VALUES ('$eUsername' ,'$ePassword', '$orgName', '$industry','$type' '$empEmail', '$phoneNo')";

$sql ="INSERT INTO `employer` ( `username`, `password`, `orgName`, `industry`, `profitability`, `email`, `phoneNo`) "
        . "VALUES ('$eUsername', '$ePassword', '$orgName', '$industry', '$type', '$empEmail', '$phoneNo')";

$db->query($sql);
