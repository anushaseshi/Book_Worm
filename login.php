<?php
/**
 * Created by PhpStorm.
 * User: rohinibandkodige
 * Date: 11/18/15
 * Time: 10:26 PM
 */
session_start();
include 'config.php';
if(!empty($_POST))
{
    $msg="";

    if(empty($_POST['user_name']))
    {
        $msg[]="No User found.";
    }

    if(empty($_POST['password']))
    {
        $msg[]="Password Incorrect!";
    }


    if(!empty($msg))
    {
        echo '<b>Error:-</b><br>';

        foreach($msg as $k)
        {
            echo '<li>'.$k;
        }
    }
    else
    {

        //$conn = mysqli_connect($HOST_NAME,$DB_USER,$DB_PASSWORD)or die("Can't Connect...");
        $conn = mysqli_connect("localhost","root","root","BOOK_WORM")or die("Can't Connect...");
        $user_name = $_POST['user_name'];
        $query = "select * from User where username = '$user_name' ";
        $result = mysqli_query($query,$conn) or die("Invalid Query!");
        $row = mysqli_fetch_assoc($result);

        if(!empty($row))
        {
            if($_POST['password'] == $row['password'])
            {
                $_SESSION=array();
                $_SESSION['u_name']=$row['username'];
                $_SESSION['u_pwd']=$row['password'];
                $_SESSION['status']=true;

                if($_SESSION['u_name']!="admin")
                {
                    header("location:index.php");
                }
                else
                {
                    header("location:admin/index.php");
                }
            }

            else
            {
                echo 'Incorrect Password!';
            }
        }
        else
        {
            echo 'Invalid User!';
        }
    }

}
else
{
    header("location:index.php");
}

?>