<?php
require 'header.php';
?>
<!-- Content -->
    <div class="container contents lisitng-grid-layout">
        <div class="row">
            <div class="span12 main-wrap">

                <!-- Main Content -->
                <div class="main">                               
                        <!-- Gallery Container -->
                        <div class="span12 main-wrap" align="center">					                
						              
									    <h1><strong style="color:#FF0000"><u>LOGIN FORM</u></strong></h1></br></br>
                           
                                <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect123_db.php';
    require 'connect.php';
    $errors=array();
    if(empty($_POST['email']))
    {
        $errors[]='Enter Your Email Address';
    }
    else
    {
        $email=$_POST['email'];
    }
    if(empty($_POST['pass1']))
    {
        $errors[]='Enter Password';
    }
    else
    {
       $pass=$_POST['pass1'];
    }
   if(empty($errors))
    {
        $q="SELECT * FROM `seeker` WHERE `EMAIL`='$email' AND `Password`='$pass' AND `approve`='yes'";
        $r=mysqli_query($dbc,$q);
        if($r)
        {
        
        if(mysqli_num_rows($r)!=0)
        {
            $q1="SELECT * FROM `seeker` WHERE `EMAIL`='$email' AND `Password`='$pass' AND `State`='NULL' AND `approve`='yes'";
            $r1=mysqli_query($dbc,$q1);
            $row=mysqli_fetch_array($r1,MYSQLI_ASSOC);
            session_start();
            if(mysqli_num_rows($r1)!=0)
            {
                $_SESSION['seekerid']=$row['SeekerId'];
                load('Seeker1.php');
            }   
            else
            {
                $row2=mysqli_fetch_array($r,MYSQLI_ASSOC);
                $_SESSION['seekerid']=$row2['SeekerId'];
                load('update_seeker.php');
            }
        }
            else
          {
            echo 'Email address and Password Does not Exists.Click here to <a href="seeker.php">Register</a> <br/>OR Wait for admin to give authentication';
         }
        }
          mysqli_close($dbc);
        exit();    
    }
     
    else
    {
        echo '<h1> Error!</h1>
        <p>The following error(s) occured:<br>';
        foreach($errors as $msg)
        {
            echo "-$msg<br>";
        }
        echo 'please try again';
        mysqli_close($dbc);
    }
}

?>
     <form action="seeker.php" method="POST">
    <label>Login E-Mail ID</label>
    <input type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"><br /></br>
    <label>Login Password</label>
    <input type="password" name="pass1" required pattern="(?=^.{10,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password should have UpperCase, LowerCase, Number/SpecialChar and 10 chars"><br/></br>
    <input type="submit" id="submit" class="real-btn">
     <label>Don not have an account?<a href="seekerregister.php"> Sign Up</a></label>
 </form>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>


<?php
require 'footer.php';
?>