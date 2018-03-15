<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="jquery.js"></script>
        <link rel="shortcut icon" href="image.gif">
        <script>
            $(document).ready(function() {
                $('#followers').hide();
                $('#following').hide();
                $('#follow1').click(function() {
                    $('#followers').toggle(500);
                    $('#following').hide();
                });
                $('#follow2').click(function() {
                    $('#following').toggle(500);
                    $('#followers').hide();
                });
            });
        </script>
    <html>
        <body>
            <?php
            session_start();
            if( !isset($_SESSION['user']) ) {
          header("Location: index.php");
          exit;
         }

        

            
            ?>
        </body>
    </html>