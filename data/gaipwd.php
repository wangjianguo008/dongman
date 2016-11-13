<?php
    header('Content-Type:text/plain;charset=UTF-8');
    @$uname=$_REQUEST['name'];
     @$pwd=$_REQUEST['pwd'];
    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT uid FROM user WHERE uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $uid=$row['uid'];
    $sql="UPDATE user SET pwd='$pwd' WHERE uid=$uid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err.$sql";
    }else{

        echo "succ";
    }