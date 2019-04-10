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
          background-repeat: no-repeat;
          background-size: cover;
        }

        #bg1{
            background : #ffffff;
        }
        #bg2{
            background : #FFFFB6;
        }
        #bg4{
            background : #FF0000;
        }
        #bgtb0{
            background : url("./img/unsplash.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #txt1{
            color : #ffffff;
        }
        
        
    </style>

    </head>
    <body>


        <div class="jumbotron jumbotron-fluid text-center mb-0 hero-section" >
            <div class="container">
            <!--  <h1 class="display-4" style="color:violet">ยินดีต้อนรับ</h1> -->
            </div>
        </div>
        
        


        <table>
            <tr height = 80px id=bg3>
                <td width = 1400px></td>
            </tr>
            <table >
                <tr height = 400px id=bg3>
                    <td width = 300px id=bg3></td>
                    <td width = 800px id=bg1>
                    
                        <table id=bgtb>
                            <center> <h1 style="color:#A8A800">เข้าสู่ระบบ</h1> </center>
                                <td width = 50px id=bg1></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td width = 700px id=bg1>
                                            
                                                <form action="actions.php?do=login" method="POST">
                                                    <div class="form-row">   
                                                        <div class="form-group col-md-12">
                                                            <label>Username <sup style="color:#FF0000">*</label>
                                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                        </div>   
                                                    </div> 
                                                    <div class="form-row">     
                                                        <div class="form-group col-12">
                                                            <label>Password <sup style="color:#FF0000">*</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                        </div>
                                                    </div> 
                                                    
                                                        
                                                    <center>
                                                        <button type="submit" class="btn btn-warning btn-block" id=txt1><b>เข้าสู่ระบบ</button>
                                                    </center> 

                                                </form>

                                            </td>  
                                        </tr>
                                        <tr height = 50px ></tr>  
                                            <td>
                                                <center> <a href="./home.php">หน้าหลัก</a> </center>
                                            </td>
                                    </table>
                                </td>
                                <td width = 50px id=bg1></td>
                            </tr>
                            

                        </table>
                    
                    </td> 
                    <td width = 300px id=bg3></td>               
                </tr>
                <table>
                    <tr height = 80px id=bg3>
                        <td width = 1400px></td>
                    </tr>
                </table>
            
            </table>
            
        </table>

        


    

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>