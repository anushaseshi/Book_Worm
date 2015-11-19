<?php
/**
 * Created by PhpStorm.
 * User: rohinibandkodige
 * Date: 11/18/15
 * Time: 11:23 PM
 */
ob_start();
include '/include_files/config.php';
if(!empty($_POST))
{
//    $msg="";
//
//    if($msg!="")
//    {
//        header("location:register.php?error=".$msg);
//    }
//    else
//    {

        $fnm=$_POST['first_name'];
        $lnm=$_POST['last_name'];
        $unm=$_POST['user_name'];
        $pwd=$_POST['password'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $conn = mysqli_connect("localhost","root","root","BOOK_WORM")or die("Can't Connect...");
        //echo "....$HOST_NAME";
        //$conn = mysqli_connect($HOST_NAME,$DB_USER,$DB_PASSWORD,$DB_NAME)or die("Can't Connect...");
        
        $query="insert into user(first_name,Last_Name,Username,Password,Gender,Email_ID) values('$fnm','$lnm','$unm','$pwd','$gender','$email')";
        echo $query;
        if(mysqli_query($conn,$query))
        {
            
            header("Location: index.php");
            
        }
        else
        {
            echo "Registration Failure!";
            header("Location: signup.php");
        }
    }
//}
else
{
    header("Location: index.php");
}
?>