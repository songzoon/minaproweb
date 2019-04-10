<?php
include 'stye.css';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" >
            <div class="container">
                <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="main.php" id=font-Pattaya>&nbsp;ระบบคลังสินค้าออนไลน์</a>
                <button id=nav class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link btn" href="main.php" onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#FFFF00';" style="color:rgb(255, 255, 0)">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li >
                      <div class="dropdown show">
                        <a class="nav-link btn" data-toggle="dropdown" href="#" onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#FFFF00';" style="color:rgb(255, 255, 0)">+ FEATURES &nbsp;&nbsp;</a >
                        <!--เมนูย่อย-->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="nav-link" href="show-product.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';" >&nbsp;&nbsp;&nbsp;- รายการสินค้า</a>
                          <a class="nav-link" href="product-insert.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';" >&nbsp;&nbsp;&nbsp;- เพิ่มสินค้า</a>
                          <a class="nav-link" href="product-actions.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';" >&nbsp;&nbsp;&nbsp;- แก้ไข-ลบสินค้า</a>
                        </div>
                      </div>
                    </li>

                    <li id=tang>
                      <div class="dropdown show">
                          <a class="nav-link btn" data-toggle="dropdown" href="#" onmouseover="this.style.color='#FFFF00';" onmouseout="this.style.color='#FFFFFF';" style="color:rgb(255, 255, 255)">
                          <center><div class="circle size-img-32"><img  src= <?php echo './img/user-img/'.$_SESSION['login_img']?> alt="" width=32px ></div></center>
                          </a>
                          <!--เมนูย่อย-->
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="myprofile.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">My Profile</a>
                            <a class="dropdown-item" href="history.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">History</a>
                            <hr width=80%>
                            <a class="dropdown-item" href="./logout.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">Log Out</a>
                          </div>
                      </div>
                    </li>
                    
                    <li >
                      <div class="dropdown show">
                        <a class="nav-link btn" data-toggle="dropdown" href="#" onmouseover="this.style.color='#FFFF00';" onmouseout="this.style.color='#FFFFFF';" style="color:rgb(255, 255, 255)">
                          <?php echo $_SESSION['login_username'] ?>
                        </a>
                        <!--เมนูย่อย-->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="myprofile.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">My Profile</a>
                          <a class="dropdown-item" href="history.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">History</a>
                          <hr width=80%>
                          <a class="dropdown-item" href="./logout.php" onmouseover="this.id='cheein';" onmouseout="this.id='cheeout';">Log Out</a>
                        </div>
                      </div>
                      
                    </li>
                    
                    
                  </ul>
                </div>
            
        </nav>