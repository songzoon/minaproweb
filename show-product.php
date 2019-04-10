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
    $count=0;
    if (isset($_POST["product_name"])){

        $p_search = $_POST["product_name"];
        $stm = $db_con->prepare("SELECT Product.product_id, Product.product_name, Product.product_amount, PType.p_type_name, unit.unit_name
        FROM Product,PType,unit
        WHERE Product.product_type_id = PType.p_type_id AND Product.product_unit_id = unit.unit_id
        AND Product.product_name LIKE :product_name ");
        
        $p_search2 = '%'.$p_search.'%';
        $stm->bindParam(':product_name',$p_search2);
    }
    else{

        $stm = $db_con->prepare("SELECT Product.product_id, Product.product_name, Product.product_amount, PType.p_type_name, unit.unit_name
        FROM Product,PType,unit
        WHERE Product.product_type_id = PType.p_type_id AND Product.product_unit_id = unit.unit_id");
    }
    $stm->execute();
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
        
            <tr > 
                <td width="1400px" height="640px" align="center">
                      <label id=font-Pattaya>รายการพัสดุ - ครุภัณฑ์</label><br><br>
                    <table align="center">
                        <tr >
                            <td height="100%"width="100%" style="color:rgb(255, 255, 255)" align="center" >
                                
                                <form action="./show-product.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-10"> 
                                            <input type="text" name="product_name" class="form-control" placeholder="ระบุชื่อสินค้า">
                                        </div>
                                        <div class="form-group col-md-2"> 
                                            <button type="submit" class="btn btn-warning btn-block">ค้นหา</button>
                                        </div>
                                    </div>
                                </form>

                                <table style = "width:100%"  class="table"> <!-- ตาราง -->
                                
                                    <thead class="thead-dark">
                                        <tr align="center" >    <!-- แถว -->
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>#</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>รหัสสินค้า</th>   <!-- คอลัม -->
                                            <th width="300px" style="color:rgb(255, 255, 255)"><B>ชื่อสินค้า</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>จำนวน</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>หน่วยนับ</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>ประเภท</th>
                                        </tr>
                                    </thead>
                                        <?php while ($rows = $stm->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        <tr style="color:rgb(255, 255, 255)" >
                                            <td  > <center> <?php echo $count+=1; ?>                </center></td>
                                            <td  style ="width:100px"> <center> <?php echo $rows['product_id']; ?>        </center> </td>
                                            <td > <center> <?php echo $rows['product_name']; ?>     </center> </td>
                                            <td > <center> <?php echo $rows['product_amount']; ?>     </center> </td>
                                            <td > <center> <?php echo $rows['unit_name']; ?>      </center></td>
                                            <td > <center> <?php echo $rows['p_type_name']; ?>      </center> </td>
                                        </tr>

                                        <?php } 
                                            $db_con = null;
                                        ?>
                                    
                                </table>

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