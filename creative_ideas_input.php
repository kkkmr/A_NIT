<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_c=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_c=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_c=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_c=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>Creative Ideas | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo3.png" />
         <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/background_21.jpg) no-repeat center center fixed;
                background-size:cover;
            }
                            

     </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
            <?php
$message="";
$a=mysqli_connect("localhost","root","","a_nit") or die("karthik".mysqli_error($a));
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if($_POST['submit1']=='Submit'){
    $u=mysqli_real_escape_string($a,$_POST['ask_query1']);
    
        $u2="INSERT INTO creative_ideas(info_c,reg_no_c) VALUES('$u','$reg_no_c')";
        if($u4=mysqli_query($a,$u2)){
            {      echo "<script type='text/javascript'>window.location.href = 'creative_ideas.php';</script>";
            //$message="Submitted successfully";
                      // echo '<div class="alert alert-danger">';
                       // echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                           // echo $message; 
                        //  echo '</div>';
                          
                           }
        
    }
}
    if($_POST['submit2']=='Submit'){
    $u1=mysqli_real_escape_string($a,$_POST['ask_query2']);
    
        $u3="INSERT INTO creative_ideas(info_c,reg_no_c) VALUES('$u1','unknown')";
        if($u5=mysqli_query($a,$u3)){
            {      echo "<script type='text/javascript'>window.location.href = 'creative_ideas.php';</script>";
// header('location: index.php');
//            $message="Submitted successfully";
  //                     echo '<div class="alert alert-danger">';
    //                    echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
      //                      echo $message; 
        //                  echo '</div>';
                           }
    
    
    
    
}
}
}
    ?>
        
       
  <form method='post' id="id01" action="creative_ideas_input.php" name="submit1">
    <div class="container">
      <h1 style='color:white;'>Creative ideas</h1>
         <div class="row">
          <div class="row">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query1" rows="7" class="form-control" required>Submit your idea here.</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div class="col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2"> 
         <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit1">
        Submit
    </button>
        <button type="button"  class="btn btn-succes" onclick="document.getElementById('id01').style.display='none'" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>

    
      
  
  <form method='post' action="creative_ideas_input.php" name="submit2" id="id02">
    <div class="container">
      <h1 style='color:white;'>Creative ideas(Anonymous)</h1>
         <div class="row">
          <div class="row">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query2" rows="7" class="form-control" required>Submit your idea here.Your name will not disclosed.(Anonymous)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div class="col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2"> 
          
        <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit2">
        Submit
    </button>
          <button type="button"  class="btn btn-succes" onclick="document.getElementById('id02').style.display='none'" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>
        <br><br>
        
        <?php include "footer.php"; ?>
    </body>
</html>