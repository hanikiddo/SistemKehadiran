<?php
$error=''; //mesej error

if(isset($_POST['submit']))
{
 
    if(empty($_POST['user']) || empty($_POST['pass']))
    {
        $error = "Username or Password is Invalid";
    }
    else{
        
         $user=$_POST['user'];
         $pass=$_POST['pass'];
        
        //connection pangkalan data
         $conn = mysqli_connect("localhost", "root", "");
        
         $db = mysqli_select_db($conn, "sistemkehadiran");
        
         $query = mysqli_query($conn, "SELECT * FROM user WHERE pass='".$pass."' AND user='".$user."'");

         $rows = mysqli_num_rows($query);
         
         if($rows == 1)
         {
            header("Location: index.php"); 
         }
         else
         {
            $error = "Username of Password is Invalid";
         }
         
        mysqli_close($conn);
    }
}
 
?>