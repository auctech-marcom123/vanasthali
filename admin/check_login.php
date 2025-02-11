<?php
session_start();

if(isset($_POST['Submit']))
{
    include '../db_con.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
  
$sel_que="select * from add_user where email ='$email' and password ='$password' and TYPE ='ADMIN'";
   $res=mysqli_query($con, $sel_que);
   $row=mysqli_fetch_array($res);

 if(mysqli_num_rows($res)>0){
   echo $_SESSION['login_status']=true;
   echo $_SESSION['firstname']=$row['firstname'];
    //$_SESSION['email']=$row['email'];
   $_SESSION['id']=$row['user_id'];
   
    header('location:dashboard.php');
 }
 else{

    ?>

<script>
    alert('Email or Password is incorrect!');
    window.location='login.php';
</script>

<?php
 }
 }
else
{
   
}
?>