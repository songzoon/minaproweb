<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
    header('Location: login1.php');
    die();
    }
    include 'nav.php';
    include 'stye.css';
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
                            <tr>
                                <td height="50px"></td>
                            </tr>
                            <tr >
                                <td height="100%"width="500px" style="color:rgb(255, 255, 255)" >
                                    <center><h1 id=font-Kaushan>EDIT PRODUCT</h1></center><br>
                                    <form action="actions.php?do=editproduct" method="POST" >
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label >ID :<sup style="color:#FF0000">*</label>
                                                <input type="text" name="product_id" class="form-control" placeholder="ID" required>
                                                        
                                            </div>   
                                        </div> 
                                        <div class="form-row">     
                                            <div class="form-group col-12">
                                                <label>NAME :<sup style="color:#FF0000">*</label>
                                                <input type="text" name="product_name" class="form-control" placeholder="NAME" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label>AMOUNT :</label>
                                                <input type="text" name="product_amount" class="form-control" placeholder="AMOUNT" >
                                            </div>   
                                        </div>
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label>TYPE :<sup style="color:#FF0000">*</label>
                                                <input type="text" name="person_type_id" class="form-control" placeholder="TYPE" required>
                                            </div>   
                                        </div>
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label>UNIT :<sup style="color:#FF0000">*</label>
                                                <input type="text" name="person_unit_id" class="form-control" placeholder="UNIT" required>
                                            </div>   
                                        </div> 
                                                    
                                                        
                                        <center>
                                            <button type="submit" class="btn btn-warning btn-block" id=font-Pattaya style="color:rgb(255, 255, 255)">สมัครสมาชิก</button>
                                            <br>
                                            <button type="reset" class="btn btn-outline-warning btn-block" id=font-Pattaya onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#fed136';">ยกเลิก</button>
                                        </center> 

                                    </form>
                                    
                                    
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="100%" height="50px"></td>
            </tr>
        </table>
        

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
