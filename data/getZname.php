<?php
    header('Content-Type:application/json;charset=UTF-8');
    @$uname=$_REQUEST['uname'];
    $output=[];

    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT zname FROM user WHERE uname='$uname'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err";
    }else{

       while(($row=mysqli_fetch_assoc($result))!=null){
            $output[]=$row;
        }
        echo json_encode($output);
    }