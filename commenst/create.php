
<!DOCTYPE html>

<html>

<head>

    <title>Add comments</title>

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
 

    

</head>

<body>


<fieldset>

       <div class="container">
       <div class="card card-container">
        <h1 class="text-center text-danger">Add comment</h1>
         <p id="profile-name" class="profile-name-card"></p>
            <form action="a_create.php" method="post" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>

 

   

        <table cellspacing="0" cellpadding="0">

           <tr>

                <th>comments</th>

                <td><input type="text" name="comments" placeholder="comments" /></td>

            </tr>     

            

            <tr>

                <td><button class="btn btn-primary" type="submit">Add Comment</button></td>

                <td><a href="homeowner/home1.php"><button class="btn btn-primary" type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

</div>
</div>
</fieldset>
 



 

</body>

</html>