<?php
    header('Content-Type:application/json;charset=UTF-8');
    @$hid=$_REQUEST['hid'];

    $output=[];

    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT lid,lname,lun,lpic,lHID,ltime FROM hs_dish,lunList WHERE hid=$hid AND hs_dish.hid=lunList.lHID";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err";
    }else{

       while(($row=mysqli_fetch_assoc($result))!=null){
            $output[]=$row;
        }
        echo json_encode($output);
    }