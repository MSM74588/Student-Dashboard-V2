
<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
   
   $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      
      header("location: dashboard.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Quando&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <div>
    <div class="wrappergrid">
            <div class="mainleft">
                <div id="container">
                    <div class="internal">
                        <h1 class="title">Sign In.</h1>

                        <div class="grid-container">
                            <form action="/dashboard2.php">
                            <div class="texta commontext">
                                <h1>User ID:</h1>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="User ID" name="username">
                            </div>
                            <div class="textb commontext">
                                <h1>Password</h1>
                            </div>
                            <div class="input">
                                <input type="password" placeholder="Password" name="password">
                            </div>

                            <div class=" submit">
                                <input type="submit" value="Submit">
                            </div>
                            </form>
                            



                        </div>
                   
                    </div>
                </div>

            </div>

            <div class="right">
                <div class="rightcontainer">
                    <div class="subparts">
                         <div class="schoolname">
                            <h1 id="school">DELHI PUBLIC SCHOOL,DURGAPUR</h1>
                        
                        </div>
                        <div class="announcement">
                            <h1 id="anntitle">NOTICE:</h1>
                            <div class="area">
                                
                                <div class="card">
                                    <div class="date">
                                        <h2>17/11/2020</h1>
                                    </div>
                                    <div class="noticetitle">
                                        <h2>Education Is Free Now!</h1>
                                    </div>
                                    <div class="body">
                                        <p>Seriously its free. Don't be skeptical.I know its hard to believe, but its seriously free. Now no empty bank account from now!. (T & C apply)</p>
                                    </div>
                                 </div>

                                 <div class="card">
                                    <div class="date">
                                        <h2>17/11/2020</h1>
                                    </div>
                                    <div class="noticetitle">
                                        <h2>Education Is Free Now!</h1>
                                    </div>
                                    <div class="body">
                                        <p>Seriously its free. Don't be skeptical.I know its hard to believe, but its seriously free. Now no empty bank account from now!. (T & C apply)</p>
                                    </div>
                                 </div>

                                 <div class="card">
                                    <div class="date">
                                        <h2>17/11/2020</h1>
                                    </div>
                                    <div class="noticetitle">
                                        <h2>Education Is Free Now!</h1>
                                    </div>
                                    <div class="body">
                                        <p>Seriously its free. Don't be skeptical.I know its hard to believe, but its seriously free. Now no empty bank account from now!. (T & C apply)</p>
                                    </div>
                                 </div>

                                 <div class="card">
                                    <div class="date">
                                        <h2>17/11/2020</h1>
                                    </div>
                                    <div class="noticetitle">
                                        <h2>Education Is Free Now!</h1>
                                    </div>
                                    <div class="body">
                                        <p>Seriously its free. Don't be skeptical.I know its hard to believe, but its seriously free. Now no empty bank account from now!. (T & C apply)</p>
                                    </div>
                                 </div>

                                 <div class="card">
                                    <div class="date">
                                        <h2>17/11/2020</h1>
                                    </div>
                                    <div class="noticetitle">
                                        <h2>Education Is Free Now!</h1>
                                    </div>
                                    <div class="body">
                                        <p>Seriously its free. Don't be skeptical.I know its hard to believe, but its seriously free. Now no empty bank account from now!. (T & C apply)</p>
                                    </div>
                                 </div>
                            
                            
                            
                            
                            
                            
                            </div>
                                



                        </div>
                        </div>
                 </div>
                </div>
            </div>

        </div>



    </div>
</body>
</html>


