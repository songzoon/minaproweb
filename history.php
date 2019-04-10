<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
    header('Location: login1.php');
    die();
    }
?>

<?php 
    include 'conn_db.php';
    include 'stye.css';
    include 'nav.php';
    $count=0;
    

        $stm = $db_con->prepare("SELECT history_login.history_id, history_login.ip_address, history_login.date_time, Person.person_username
        FROM history_login,Person 
        WHERE history_login.login_by = Person.person_id
        AND person_id = :id
        ORDER BY date_time DESC");

        $id = $_SESSION['login_id'];
        $stm->bindParam(':id',$id);
    
    $stm->execute();
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
        
            <tr > 
                <td width="1400px" height="640px" align="center">
                    <br>
                      <label id=font-Pattaya>ประวัติการเข้าสู่ระบบ</label><br><br>
                    <table align="center">
                        <tr >
                            <td height="100%"width="100%" style="color:rgb(255, 255, 255)" align="center" >
                                
                                

                                <table style = "width:100%"  class="table"> <!-- ตาราง -->
                                
                                    <thead class="thead-dark">
                                        <tr align="center" >    <!-- แถว -->
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>#</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>IP</th>   <!-- คอลัม -->
                                            <th width="300px" style="color:rgb(255, 255, 255)"><B>Time</th>
                                            <th width="100px" style="color:rgb(255, 255, 255)"><B>User</th>
                                        </tr>
                                    </thead>
                                        <?php while ($rows = $stm->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        <tr style="color:rgb(255, 255, 255)" >
                                            <td  > <center> <?php echo $count+=1; ?> </center></td>
                                            <td  style ="width:50px"> <center> <?php echo $rows['ip_address']; ?>        </center> </td>
                                            <td  style ="width:100px"> <center> <?php echo $rows['date_time']; ?>      </center> </td>
                                            <td > <center> <?php echo $rows['person_username']; ?>  </center> </td>
                                        
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