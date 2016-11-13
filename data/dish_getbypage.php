<?php
    header('Content-Type:application/json;charset=UTF-8');
    @$start=$_REQUEST['start'];
    if(empty($start)){
        $start=0;
    }
    $output=[];
    $count=6;
    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql="SELECT * FROM hs_dish LIMIT $start,$count";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "err";
    }else{

       while(($row=mysqli_fetch_assoc($result))!=null){
            $output[]=$row;
        }
        echo json_encode($output);
    }