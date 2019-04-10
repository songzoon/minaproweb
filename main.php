<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
    header('Location: login1.php');
    die();
    }

    include 'stye.css';
    include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    </head>
    <body>
    
        <table id=bg1 align="center">
            <tr> 
                <td width="1400px" height="640px" >

                    <table align="center">
                        <tr >
                            <td height="100%"width="100%" style="color:rgb(255, 255, 255)" align="center" id=font-Kaushan>
                              <a href="">
                              
                              </a>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td width="100%" height="30px"></td>
            </tr>

        </table>
        
    

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>