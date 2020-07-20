<?php
   
  session_start();

    include"db_con.php";
    if(isset($_POST['uname'])&& isset($_POST['password']))
    {
        function validate($data){
            $data=trim($data);
            return $data;
        }
        $uname=validate($_POST['uname']);
        $pass=validate($_POST['password']);
        
 if(empty($uname))
        {
             header("Location:index.php?error=user name is required");
              exit();
            
        }
else if(empty($pass))
            {
               header("Location:index.php?error=password is required");
               exit();     
            }
 else{
       $sql="SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
      $result=mysqli_query($con,$sql);
     
        if(mysqli_fetch_assoc($result))
         
         {
            $_SESSION['User']=$_POST['uname'];
                header("Location: welcome.php");
	              exit();
         }
         
     else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}
else
    {
	header("Location: index.php");
	exit();
}
