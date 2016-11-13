<?php
    header('Content-Type:application/json;charset=UTF-8');
    @$lHID=$_REQUEST['lHID'];
    @$lun=$_REQUEST['lun'];
    @$ltime=$_REQUEST['ltime'];
    @$uname=$_REQUEST['uname'];
    $conn=mysqli_connect('127.0.0.1','root','','AngularProject',3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
     $sql="SELECT zname FROM user WHERE uname='$uname'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $zname=$row['zname'];
         $output['zname']=$zname;
        if(!$row){

            $zname=$uname;
        }
    $sql="INSERT INTO lunList VALUES(NULL,'$zname','$lun','img/pop.png','$lHID','$ltime')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
             $output['msg']="err";
    }else{
            $output['msg']='succ';
            $output['oid']=mysqli_insert_id($conn);
            echo json_encode($output);
    }