<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
    header('Location: login1.php');
    die();
    }
    include 'nav.php';
    include 'stye.css';
?>

<?php 
    include 'conn_db.php';
    
        $stm = $db_con->prepare("SELECT * FROM unit");
        $stm->execute();
        $stm2 = $db_con->prepare("SELECT * FROM PType");
        $stm2->execute();
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
                                <br><br>
                                    <center><h1 id=font-Kaushan>INSERT&nbsp;-&nbsp;PRODUCT</h1></center><br>
                                    <form action="actions.php?do=insertproduct" method="POST" >
                                         
                                        <div class="form-row">     
                                            <div class="form-group col-12">
                                                <label>NAME :<sup style="color:#FF0000">*</label>
                                                <input type="text" name="product_name" class="form-control" placeholder="NAME" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">   
                                            <div class="form-group col-md-12">
                                                <label>AMOUNT :</label>
                                                <input type="text" name="product_amount" class="form-control" placeholder="AMOUNT" required>
                                            </div>   
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sel1">TYPE :</label>
                                                <!--<select id="sel1">-->
                                                <select class="form-control" name="types_id" id="types_id" required>
                                                    <option>--- กรุณาเลือกประเภท ---</option>
                                                    <?php
                                                        while ($rows2 = $stm2->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                    <option value="<?=$rows2['p_type_id']?>"><?=$rows2['p_type_name']?></option>
                                                    <?php } ?>
                                                    </select>
                                                <!--</select>-->   
                                            </div> 
                                            <div class="form-group col-md-6">
                                                <label for="sel1">UNIT :</label>
                                                <!--<select id="sel1">-->
                                                <select class="form-control" name="units_id" id="units_id" required>
                                                    <option>--- กรุณาเลือกหน่วยนับ ---</option>
                                                    <?php
                                                        while ($rows = $stm->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                    <option value="<?=$rows['unit_id']?>"><?=$rows['unit_name']?></option>
                                                    <?php } ?>
                                                    </select>
                                                <!--</select>-->
                                                
                                            </div> 
                                        </div>
                                                    
                                                        
                                        <center>
                                            <br>
                                            <button type="submit" class="btn btn-warning btn-block" id=font-Pattaya style="color:rgb(255, 255, 255)">เพิ่มสินค้า</button>
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
