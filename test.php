


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

        <style>

        .hero-section{
            background-image: url("./img/header3.jpg");
            background-position: left;
            background-repeat: no-repeat;
            
        }
        body{
          background-image: url("./img/skru.jpg");
          background-position: top;
          background-repeat: repeat;
          background-size: cover;
        }

        #bg1{
            background : #ffffff;
        }
        #bg2{
            background : #FFFFB6;
        }
        #bg3{
            background : #FF0000;
        }
        
        
    </style>

    </head>
    <body>


        <div class="jumbotron jumbotron-fluid text-center mb-0 hero-section" >
            <div class="container">
            <!--  <h1 class="display-4" style="color:violet">ยินดีต้อนรับ</h1> -->
            </div>
        </div>
        

        <?php
        $str = "Guest";
        $edcode = md5($str);
        echo $edcode;
        ?>  

    

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>

