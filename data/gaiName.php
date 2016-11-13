<?php
    header('Content-Type:text/plain;charset=UTF-8');
    @$uname=$_REQUEST['uname'];
     @$zname=$_REQUEST['zname'];
    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT uid FROM user WHERE uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $uid=$row['uid'];
    $sql="UPDATE user SET zname='$zname' WHERE uid=$uid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err";
    }else{

        echo "succ";
    }