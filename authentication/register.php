<?php include 'includes/header.php'?>
<?php include 'includes/link.php'?>
<?php



if(isset ($_POST['register'])){

    $username =$_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $passwordrep=$_POST['passwordrep'];


    if(empty($username) || empty($email) || empty($password) || empty($passwordrep) ){
        header ("Location:registerform.php? error = your fields are empty");
        exit();
    }

     elseif((!filter_var($email, FILTER_VALIDATE_EMAIL)) && (!preg_match("/^[a-zA-Z0-9]*%/")))
    {
         header("Location:registerform.php? error= email_and_uername_error");
       exit();
  }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:registerform.php? error= email_error");
        exit();
    }
    elseif( !preg_match("/^[a-zA-Z0-9]*%/"))
    {
        header("Location:registerform.php? error= uername_error");
        exit();

    }

    elseif($password !==$passwordrep){
        header("Location:registerform.php? error =password_didnot_match");

    }
    // prepared statement to check the database for already regiesterd username


    else{
        $query = "SELECT username from stud where username=?;";
        $stmt= mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $query)){
                header("Location:registerform.php? error =query");
                exit();
            }

            else {
                //use s for string

                mysqli_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result ($stmt);


                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck >0){
                    //username is already registered
                    header("Location:registerform.php? error = username_already_exists");
                    exit();
                }
                else{

                    $query="INSERT INTO stud (username,email,password) VALUES (?,?,?);";
                    $stmt=mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$query)){
                        header("Location:registerform.php? error =query");
                        exit();
                    }

                    else{
                        $encpassword= password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$encpassword);
                        mysqli_stmt_execute($stmt);
                        header("Location:index.php? error=something_is_error");
                        exit();
                    }

                }

            }
    }




}

    else {
        header("Location:registerform.php? error =please_submit_this_form_first");
       
    }



?>
<?php include 'includes/footer.php'?>