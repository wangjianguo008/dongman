<?php
header('Content-Type:application/json;charset=utf-8');

$uname=$_REQUEST['name'];
$upwd=$_REQUEST['pwd'];

$conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
$sql='set names utf8';
mysqli_query($conn,$sql);

$sql="select * from user where uname='$uname' and pwd='$upwd'";
$result=mysqli_query($conn,$sql);

$output = ['code'=>0, 'msg'=>null];
if($result===false){
	$output['code'] = 1001;
	$output['msg'] = 'SQL语句错误';
}else {
	$row = mysqli_fetch_assoc($result);
	if($row===null){
		$output['code'] = 1002;
		$output['msg'] = '用户名或密码错误';	
	}else {
		$output['code'] = 1000;
		$output['msg'] = '登录信息验证正确';
	}
}

echo json_encode($output);
