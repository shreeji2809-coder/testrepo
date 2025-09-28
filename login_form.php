<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT * FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        foreach ($results as $result) 
        {
            $_SESSION['odmsaid']=$result->ID;
            $_SESSION['login']=$result->username;
            $_SESSION['permission']=$result->AdminName;
            $get=$result->Status;
        }
        $aa= $_SESSION['odmsaid'];
        $sql="SELECT * from tbladmin  where ID=:aa";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':aa',$aa,PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
            foreach($results as $row)
            {            
                if($row->Status=="1")
                { 
                    echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";                  

                } else
                { 
                    echo "<script>
                    alert('Your account was disabled Approach Admin');document.location ='index.php';
                    </script>";
                }
            } 
        } 
    } else{
        echo "<script>alert('Invalid Details');</script>";
    }
}?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <h1 align="center"> Admin Login</h1>
                <br><br>
                <div class ="col-md-6 col-md-offset-3">
                <form role="form" id=""  method="post" enctype="multipart/form-data">  
                    <div class="form-group">
                    <label>User Name: </label>
                        <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                    <label>Password: </label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="text-center mt-4 font-weight-light"> 
                        <a href="forgot_password.php" class="text-secondary"> 
                            Forgot Password
                        </a>
                    </div>
                    <div class="mt-3">
                        <button name="login" class="btn btn-default">Login</button>
                        <button name="login" class="btn btn-default"><a href="userregister.php">Registration </a></button>
                    </div>
                </form>
            </div><!--col md 6 div-->
            </div><!--container div-->
        </div><!--content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
