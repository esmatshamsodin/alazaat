<?php require_once 'db_connect.php';

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>   
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>posts</title>

    <style type="text/css">
    #logos{
        width: 50px;

    }
        .manageUser {
            width: 50%;
            margin: auto;
        }
     

    </style>



</head>

<body>



 

  
<div class="container">
  <li><a href="create.php">Add comments</a></li>

        <?php

            $sql = "SELECT `comments` FROM `posts`";

            $result = $conn->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
       
                       
                                <p class='text-danger'>".$row['comments']."</p>
                          ";

                }

            }
            echo "</div>";

            ?>
</div>
   
    
    
   



</body>
</html>
