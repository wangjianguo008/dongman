<?php
    header('Content-Type:application/json;charset=UTF-8');
    @$uname=$_REQUEST['name'];

    $output=[];

    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT uid FROM user WHERE uname='$uname'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $uid=$row['uid'];
    $sql="SELECT * FROM hs_dish WHERE UID=$uid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err";
    }else{

       while(($row=mysqli_fetch_assoc($result))!=null){
            $output[]=$row;
        }
        echo json_encode($output);
    }