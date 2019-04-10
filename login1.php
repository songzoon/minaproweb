<?php
    include 'stye.css';
    include 'nav-before.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        
        <table id=bg1 align="center">
            <tr> 
                <td width="1400px" height="640px" >
                    <div class="container">
                        <table align="center">
                            <tr >
                                <td height="100%"width="500px" style="color:rgb(255, 255, 255)" >
                                    <center><h1 id=font-Kaushan><b>LOGIN</h1></center><br>
                                    <form action="actions.php?do=login" method="POST">
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label >Username <sup style="color:#FF0000">*</label>
                                                <input type="text" name="person_username" class="form-control" placeholder="Username" required>
                                            </div>   
                                        </div> 
                                        <div class="form-row">     
                                            <div class="form-group col-12">
                                                <label>Password <sup style="color:#FF0000">*</label>
                                                <input type="password" name="person_password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <center>
                                            <button type="submit" class="btn btn-warning btn-block" id=font-Pattaya style="color:#FFFFFF">เข้าสู่ระบบ</button>
                                        </center> 
                                    </form>
                                    <br>
                                    <hr width="100%" align="left" size="ขนาด (100%)" noshade >
                                    <br>
                                    <a href="register1.php" class="btn btn-outline-warning btn-block " role="button" color="#FFFF00" id=font-Pattaya  onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#fed136';">&nbsp;สมัครสมาชิก&nbsp;</a>   
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="100%" height="50px"></td>
            </tr>
            <tr align="center">
              
              <td><p style="color:rgb(255, 255, 255)" id=bg2>Copyright © Your Website 2019 &nbsp;&nbsp; Version 1.0.2</p></td>
            </tr>
        </table>


        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>