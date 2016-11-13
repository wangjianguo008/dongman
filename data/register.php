<?php
header('Content-Type:text/plain;charset=utf-8');

$uname=$_REQUEST['name'];
$upwd=$_REQUEST['pwd'];

$conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
$sql='set names utf8';
mysqli_query($conn,$sql);

$sql="INSERT INTO user VALUES(NULL,'$uname','$upwd','')";
$result=mysqli_query($conn,$sql);

$output = ['code'=>0, 'msg'=>null];
if($result===false){
	echo 'err.$sql';
}else {
	echo "succ";
}

