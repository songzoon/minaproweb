<?php
    include 'conn_db.php';

    function getIP(){
        // ตรวจสอบ IP กรณีการใช้งาน share internet
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }else{
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    $do_what = $_GET['do'];
    //echo $do_what;

    if ( $do_what == 'insert' ) {
        $stm = $db_con->prepare("INSERT INTO Person (person_name, person_sname, person_rank_id, person_telephone, person_username, person_password) 
                                VALUES(:person_name, :person_sname, :person_rank_id, :person_telephone, :person_username, :person_password)");
        $stm->bindParam("person_name", $_POST['person_name']);        //person_name ตัวแรกเป็นตัวแปลหน้านี้ person_name ตัวที่สองมาจาก form_insert
        $stm->bindParam("person_sname", $_POST['person_sname']);
        $stm->bindParam("person_rank_id", $_POST['person_rank_id']);
        $stm->bindParam("person_telephone", $_POST['person_telephone']);
        $stm->bindParam("person_username", $_POST['person_username']);
        $stm->bindParam("person_password", $_POST['person_password']);
        if ($stm->execute()){
            echo "บันทึกข้อมูลสำเร็จ";
        }else{
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
        }
    }

    if ( $do_what == 'edit' ) {
        $stm = $db_con->prepare("UPDATE member SET name = :name, surname = :surname, 
                                        username = :username, password = :password, 
                                        address = :address, province = :province 
                                WHERE id = :id");
        
        $stm->bindParam("name", $_POST['name']);        //name ตัวแรกเป็นตัวแปลหน้านี้ name ตัวที่สองมาจาก form_insert
        $stm->bindParam("surname", $_POST['surname']);
        $stm->bindParam("username", $_POST['username']);
        $stm->bindParam("password", $_POST['password']);
        $stm->bindParam("address", $_POST['address']);
        $stm->bindParam("province", $_POST['province']);
        $stm->bindParam("id", $_GET['id']);

        if ($stm->execute()){
            echo "แก้ไขข้อมูลสำเร็จ";
            //echo '<meta http-equiv= "refresh" content="0.00000001; url=login.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
        }else{
            echo "เกิดข้อผิดพลาดในการแก้ไขข้อมูล";
        }
    }

    // ------------------------------------------------------------------------------------- //

    if ( $do_what == 'register' ) {
        $stm = $db_con->prepare("INSERT INTO Person (person_name, person_sname, person_rank_id, person_telephone, person_username, person_password) 
                                VALUES(:person_name, :person_sname, 3, :person_telephone, :person_username, :person_password)");
        $stm->bindParam("person_name", $_POST['person_name']);        //person_name ตัวแรกเป็นตัวแปลหน้านี้ person_name ตัวที่สองมาจาก form_insert
        $stm->bindParam("person_sname", $_POST['person_sname']);
        
        $stm->bindParam("person_telephone", $_POST['person_telephone']);
        $stm->bindParam("person_username", $_POST['person_username']);
        $md5 = md5($_POST['person_password']);                              //เข้ารหัส password จากตัวแปลใน form ของ login
        $stm->bindParam("person_password", $md5);
        if ($stm->execute()){
            echo "บันทึกข้อมูลสำเร็จ";
            header('location:./login1.php');
        }else{
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
            header('location:./home1.php');
        }
    }

    if ( $do_what == 'login' ){
        $stm = $db_con->prepare("SELECT * FROM Person WHERE person_username = :person_username AND person_password = :person_password");
        $stm->bindParam(':person_username', $_POST['person_username']);
        $md5 = md5($_POST['person_password']);                              //เข้ารหัส password จากตัวแปลใน form ของ login
        $stm->bindParam(':person_password', $md5);
        $stm->execute();
        $rows = $stm->fetch(PDO::FETCH_ASSOC);
        if ( empty($rows) ){
            echo 'ไม่พบข้อมูล';
            echo '<meta http-equiv= "refresh" content="1; url=login1.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
        }
        else{
            session_start();
            $_SESSION['login_id'] = $rows['person_id'];
            $_SESSION['login_name'] = $rows['person_name'];
            $_SESSION['login_sname'] = $rows['person_sname'];
            $_SESSION['login_username'] = $rows['person_username'];
            $_SESSION['login_rank'] = $rows['person_rank_id'];
            $_SESSION['login_telephone'] = $rows['person_telephone'];
            $_SESSION['login_img'] = $rows['person_img'];

            $stm = $db_con->prepare("INSERT INTO history_login (ip_address, login_by) 
                                VALUES(:ip_address, :login_by)");
        $stm->bindParam("login_by", $_SESSION['login_id']);       
        $ip = getIP();
        $stm->bindParam("ip_address", $ip);
        if ($stm->execute()){
            echo "บันทึกข้อมูลสำเร็จ";
        }else{
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
        }
            
            
            if ( $rows['person_rank_id'] == 1 ){
                header('location:./main.php');
            }else{
                header('location:./main.php');
            }
            
            exit();
            
        }

        
    }


    if ( $do_what == 'edit_img' ) {
        $stm = $db_con->prepare("UPDATE person SET person_img = :person_img
                                WHERE person_id = :person_id");
        
        $stm->bindParam("person_img", $_POST['submit']);        //name ตัวแรกเป็นตัวแปลหน้านี้ name ตัวที่สองมาจาก form_insert
        $stm->bindParam("person_id", $_SESSION['login_id']);

        if ($stm->execute()){
            echo "แก้ไขข้อมูลสำเร็จ";
            echo '<meta http-equiv= "refresh" content="0; url=myprofile.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
        }else{
            echo "เกิดข้อผิดพลาดในการแก้ไขข้อมูล";
        }
    }

    if ( $do_what == 'delete' ) {
        $stm = $db_con->prepare("DELETE FROM Product WHERE product_id = :id");
        $stm->bindParam(':id',$_GET['id']);
        if ($stm->execute()){
            echo "ลบเสร็จสิ้น";
            echo '<meta http-equiv= "refresh" content="0; url=product-actions.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
        }else{
            echo "เกิดข้อผิดพลาดในการลบข้อมูล";
        }
    }

    if ( $do_what == 'insertproduct' ) {
        $stm = $db_con->prepare("INSERT INTO Product (product_name, product_amount, product_type_id, product_unit_id) 
                                VALUES(:product_name, :product_amount, :types_id, :units_id)");

        $stm->bindParam("product_name", $_POST['product_name']);        //product_name ตัวแรกเป็นตัวแปลหน้านี้ product_name ตัวที่สองมาจาก form_insert
        $stm->bindParam("product_amount", $_POST['product_amount']);
        $stm->bindParam("types_id", $_POST['types_id']);
        $stm->bindParam("units_id", $_POST['units_id']);

        if ($stm->execute()){
            echo "บันทึกข้อมูลสำเร็จ";
            echo '<meta http-equiv= "refresh" content="0; url=show-product.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
        }else{
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
        }
    }



    


?>