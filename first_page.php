<?php

// Inialize session
session_start();

// Check, if userid session is NOT set then this page will jump to login page
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}
 
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "normalized_database";

$bd = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$qry=mysql_query("SELECT * FROM users WHERE userName='".$_SESSION['userName']."'");
$result=mysql_fetch_assoc($qry);

if(isset($_POST['submit']))
  {
    $content = mysql_real_escape_string($_POST['content']);
    $qry2=mysql_query("INSERT INTO sharepost(userName,content) VALUES('".$_SESSION['userName']."','$content')");
    
  }

$abc=mysql_query("SELECT * FROM sharepost WHERE (userName IN (SELECT friend_userName FROM friends  WHERE userName='".$_SESSION['userName']."') OR userName='".$_SESSION['userName']."') ");
$xyz=mysql_fetch_assoc($abc);

?>




<!DOCTYPE html>
<html>

<head>
<title>Blogspace-Home</title>
<link href="css/first-page-styles.css" media="screen" type="text/css" rel="stylesheet">
</head>


<body>
   
     <div id="header">
        <a href="index.php"><div id="logo">
         <span id="b">b</span>
         <span id="logspace">logspace</span>
        </div></a>
                
        <div id="search">
          <form action="searchresult_php_html.php" method="post">
            <input class="round" type="text" name="firstName" placeholder="First Name">   
            <input class="round" type="text" name="stateName" placeholder="State">
            <input type="submit" name="submit" value="Search">
          </form>
        </div>   
     </div>

<div id="wrapper">           
     <div id="navigation">
        <ul>
         <li><a href="photos.php"><img src="folder-blue-pictures-icon.png" alt="image" height="40px" width="40px"></a></li>
         <li><a href="inbox.php"><img src="message-already-read-icon.png" alt="image" height="40px" width="40px"></a></li>
         <li><a href="wall.php"><img src="Blue-Wall-icon.png" alt="image" height="40px" width="40px"></a></li>
         <li><a href="friendlist.php"><img src="people-icon.png" alt="image" height="40px" width="40px"></a></li>
         <li><a href="logout_php.php"><img src="logout.png" alt="image" height="30px" width="30px"></a></li>
        </ul>
     </div>
 
     <div id="content">
         <?php echo "welcome,{$result['firstName']} {$result['lastName']}" ; ?>

         <center><form action="" method="post" >
            
            <textarea rows="5" cols="30" name="content" ><?php echo $result['firstName'] ; ?> ::
            </textarea>
            <input type="submit" name="submit" value="POST" >
         </form></center>

        <?php do { ?>
          <h4><?php echo $xyz['userName'] ; ?></h4>
          <h6><?php echo $xyz['content'] ; ?></h6>
        <?php }while($xyz=mysql_fetch_assoc($abc)); ?>
    
     </div>

     <div id="fotter">
         <p>fotter</p>     
     </div>
</div>
</body>
</html>    
       
       
              
       