<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['hause_id']) {

    $hause_id = $_GET['hause_id'];

 

    $sql = "SELECT * FROM posts";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 

?>
<!DOCTYPE html>

<html>
<head>
<title>Homeowners</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +436889600112</li>
        <li><i class="fa fa-envelope-o"></i>admin@admin.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Hauses</a></li>
        <li><a href="#">Owners</a></li>
        <li><a href="#">Renters</a></li>
        <li><a href="#">Admins</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
    
  </div>
</div>
<div class="bgded overlay" style="background-image:url('images/image1.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Homeowners</a></h1>
        <p></p>
      </div>
      </header>
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn btn-primary btn-md" href="logout.php?logout">Sign Out</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
</div>
<section id="comment">
  <form action="actions/a_update.php" method="post">

        <table class="table" style="border-width: 5px;border-color: black;border-style: solid;" cellspacing="0" cellpadding="0">
     

            <tr>

                <th>comment</th>

                <td><input class="form-control" type="text" name="text" placeholder="text" value="<?php echo $data['text'] ?>" /></td>

            </tr>
           <input class="form-control" type="hidden" name="text" value="<?php echo $data['text']?>" />
          <td><button type="submit">Save Changes</button></td>

          <td><a href="home1.php"><button type="button">Back</button></a></td>
          </table>
          </form>
         
</section>
</body>

</html>
 

<?php

}

?>