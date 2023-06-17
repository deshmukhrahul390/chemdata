<?php
session_start();
include('config.php');
include('functions.php');
	extract($_POST);
	$loginuserid=$_SESSION['id'];

    //insert new Menu
    if(isset($_POST['gradename']) )
{

    $inseruser="INSERT INTO `grademaster`(`GradeName`) VALUES ('$gradename')";


            //echo $ledgerquery;
            if(mysqli_query($con,$inseruser))
            {			

            $output="Done";

            }
            echo $output;
    // }

}



		///delete data
		if(isset($_POST['deleteid']))
		{
				$deleteid=$_POST['deleteid'];
		  $sql="DELETE FROM `grademaster` WHERE Gradeid='$deleteid'";
		  //echo($sql);
		  mysqli_query($con,$sql);

		}



?>