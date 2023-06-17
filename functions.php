<?php
include('config.php');

function getusernamebyid($con,$id)
{
    $selectquery = "SELECT * FROM `usermaster` where `userid`='$id'";
    //  echo $selectquery;
   $result = mysqli_query($con, $selectquery);
   $row = mysqli_fetch_assoc($result);
   $legerid=$row['name'];

   echo $legerid;
}


function getchem_mechID($con,$id)
{
    $selectquery = "SELECT * FROM `chem_mechmaster` where `ChemMechId`='$id'";
    //  echo $selectquery;
   $result = mysqli_query($con, $selectquery);
   $row = mysqli_fetch_assoc($result);
   $legerid=$row['Name'];

   return $legerid;
}


function getgradenamebyID($con,$id)
{
    $selectquery = "SELECT * FROM `grademaster` where `Gradeid`='$id'";
      echo $selectquery;
   $result = mysqli_query($con, $selectquery);
   $row = mysqli_fetch_assoc($result);
   $GradeName=$row['GradeName'];

   return $GradeName;
}

?>


