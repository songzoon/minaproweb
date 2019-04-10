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

                    <table align="center">
                        <tr >
                            <td height="100%"width="100%" style="color:rgb(255, 255, 255)" align="center" id=font-Kaushan>
                                <h2>Welcome To Our Website!</h2>
                                <br>
                                <h2 id=fount><B>IT'S NICE TO MEET YOU</h2>
                                <br><br>
                                <a href="login1.php" class="btn btn-warning btn-lg" role="button" id=font-Pattaya style="color:#FFFFFF" >&nbsp;&nbsp;&nbsp;เข้าสู่ระบบ&nbsp;&nbsp;&nbsp;</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="register1.php" class="btn btn-outline-warning btn-lg " role="button" id=font-Pattaya onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#fed136';">&nbsp;สมัครสมาชิก&nbsp;</a>
                                <br><br>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td width="100%" height="30px"></td>
            </tr>
            
            <tr align="center">
              <td  align="center" id=bg2>
                <br>
                <p style="color:rgb(255, 255, 255)" >Copyright © 2019 </p>
                <p style="color:rgb(255, 255, 255)" >Version 1.0.2</p>
              </td>
            </tr>

        </table>
        


        <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
        </div>
      </div>
    </div>
  </section>
 

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>