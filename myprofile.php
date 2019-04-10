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
                            <td height="100%"width="100%" style="color:rgb(255, 255, 255)"  >

                                
                                <!--<center><div class="circle size-img-default stack " ><a href="#" ><img  src= <?php echo './img/user-img/'.$_SESSION['login_img']?> alt="" width = "250px"  ></a></div></center>-->
                                <!--<a class="holder_wrap_img" href="#" onmouseover="this.id='cheng-in';" onmouseout="this.id='cheng-out';" style="color:rgb(255, 255, 255)" data-toggle="modal" data-target="#uploadModalLong">เปลี่ยนรูปภาพ</a>-->
                                
                                <div class="dropdown show">
                                <center><div class="circle size-img-default stack " ><a href="#"  data-toggle="modal" data-target="#showModalLong"><img  src= <?php echo './img/user-img/'.$_SESSION['login_img']?> alt="" width = "250px"  ></a></div></center>
                                    <a class="holder_wrap_img " data-toggle="dropdown" href="#" onmouseover="" onmouseout="" style="color:rgb(255, 255, 255)"  align="center" ><img src="./img/icon/Untitled-1.png" alt="" width = "64px" class="img-border circle"></a>
                                    <!--เมนูย่อย-->
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <center>
                                        <a class="dropdown-item" href="<?php echo './img/user-img/'.$_SESSION['login_img']?>" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">ดูรูปภาพ</a>
                                        <a class="dropdown-item" href="#" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';"  data-toggle="modal" data-target="#uploadModalLong">เปลี่ยนรูปภาพ</a>
                                        <a class="dropdown-item" href="<?php echo './img/user-img/'.$_SESSION['login_img']?>" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';"  download = "MyProfile">ดาวน์โหลดรูปภาพ</a>
                                        </center>
                                    </div>
                                </div>
                                
                                <br>
                                <center><h1 class="size-fount "><?php echo $_SESSION['login_username']?></h1></center>
                                
                                <br>
                                <div class="form-row">     
                                    <div class="form-group col-6">
                                        <label >First Name </label>
                                        <input type="text" name="person_name" class="form-control" placeholder="First Name" value = "<?php echo $_SESSION['login_name']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label >Last Name </label>
                                        <input type="text" name="person_sname" class="form-control" placeholder="Last Name" value = "<?php echo $_SESSION['login_sname']?>">
                                    </div>
                                </div>
                                <div class="form-row">     
                                    
                                    <div class="form-group col-12">
                                        <label >Phone No. </label>
                                        <a href="tel:<?php echo $_SESSION['login_telephone']?>" class="btn">
                                        <input type="text" name="person_sname" class="form-control" placeholder="Phone No." value = "<?php echo $_SESSION['login_telephone']?>" disabled>
                                        </a>
                                    </div>
                                </div>  
                              
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td width="100%" height="30px"></td>
            </tr>

        </table>


        <!-- Modal upload img-->
          <div class="modal fade" id="uploadModalLong" tabindex="-1" role="dialog" aria-labelledby="uploadModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  <h5 class="modal-title" id="uploadModalLongTitle">เลือกรูปภาพเพื่ออัพโหลด : </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <form action="myprofile.php" method="post" enctype="multipart/form-data">
                    
                    <input class="btn btn-outline-dark" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-warning" type="submit" value="Upload Image" name="submit">
                </form>
                  
                </div>
                
              </div>
            </div>
          </div>
        <!-- Modal end upload img-->


          <!-- Modal show img-->
          <div class="modal fade" id="showModalLong" tabindex="-1" role="dialog" aria-labelledby="showModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">

                    <div class="container">
                        <img  src= <?php echo './img/user-img/'.$_SESSION['login_img']?> alt=""  >       
                    </div>
         
            </div>
          </div>
          <!-- Modal end show img-->


          <!-- Modal edit profile-->
          <div class="modal fade" id="uploadModalLong" tabindex="-1" role="dialog" aria-labelledby="uploadModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  <h5 class="modal-title" id="uploadModalLongTitle">เลือกรูปภาพเพื่ออัพโหลด : </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <form action="myprofile.php" method="post" enctype="multipart/form-data">
                    
                    <input class="btn btn-outline-dark" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-warning" type="submit" value="Upload Image" name="submit">
                </form>
                  
                </div>
                
              </div>
            </div>
          </div>
        <!-- Modal end upload img-->


        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>


<?php
    include 'conn_db.php';

    //$do_what = $_GET['do'];

    if ( empty($_FILES["fileToUpload"]["name"]) ){
        //echo "โปรดเลือกไฟล์";
    }else{

        $target_dir = "img/user-img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $newName = $_SESSION['login_id'].date('YmdHis').'.'.$imageFileType;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                echo "อัพโหลดไฟล์ : ";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 8000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "img/user-img/".$newName)) {
                //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                echo basename( $_FILES["fileToUpload"]["name"])." เสร็จสิ้น";
               
                  $stm = $db_con->prepare("UPDATE person SET person_img = :person_img
                                          WHERE person_id = :person_id");
                  
                  $stm->bindParam("person_id", $_SESSION['login_id']);
                  $stm->bindParam("person_img", $newName);

                  
                  $_SESSION['login_img'] = $newName;

                  if ($stm->execute()){
                      echo "แก้ไขข้อมูลสำเร็จ";
                      echo '<meta http-equiv= "refresh" content="0; url=myprofile.php"/>'; //เปลี่ยนหน้าไปยัง url ที่กำหนด
                  }else{
                      echo "เกิดข้อผิดพลาดในการแก้ไขข้อมูล";
                  }              

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>