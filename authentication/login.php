<?php
if(isset($_POST['login'])){

	include_once'../config/student_db.php';
 $username=$_POST['username'];
 $password=$_POST['password'];


    if(empty($username) ||  empty($password)  ){
        header ("Location:loginform.php? error = your fields are empty");
        exit();
}
  else{
        $query = "SELECT username from stud where username=?;";
        $stmt= mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $query)){
                header("Location:loginform.php? error =query");
                exit();
}
                  else {
                //use s for string

                mysqli_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
              $result=  mysqli_stmt_store_result ($stmt);
                
                $row=mysqli_fetch_assoc($result);

                if($row){

                	$verifypassword=password_verify(password, $row['password']);
                	if($verifypassword==false)
                	{
                		header("location:loginform.php?error=password for the user didnot match");
                		exit();

                	}
                	else{
                		 session_start();

                		 $_session['username']=$row['username'];
                		 header("location:index.php?message=user loggedin sucessfully.");
                		 exit();
                	}
                	}
                }
            }
        }
        else{
        	header("location:loginform.php?error login first");
        	exit();

        }
        ?>
        }