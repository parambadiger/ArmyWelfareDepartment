<?php
session_start();
require 'connect.php';
if(isset($_SESSION['username'])>0)
{
    $n=$_SESSION['username'];
    $seeker=$_GET['seeker'];
    $q="UPDATE `seeker` SET `approve`='yes' where `SeekerId`='$seeker'";
    $r=mysql_query($q);
    if($r)
    {
        load('seekers.php');
    }
    else
    {
        echo mysql_error();
    }
}
else
{
    load('adminlogin.php');
}
    
?>