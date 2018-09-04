<!DOCTYPE html>
<?php
      session_start();
      include 'connect.php';


?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>ระบบเบิกเงินไปราชการ</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php?content=Home">ระบบเบิกเงินไปราชการ</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?content=Home">หน้าแรก</a>
            </li>
            <?php if ($_SESSION['ses_username'] == null)
          {?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?content=Register">สมัครสมาชิก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?content=Login">เข้าสู่ระบบ</a>
            </li>
            <?php }
            else {?>
              <?php
                  if($_SESSION['ses_usertype'] == 1)
                  {
                    ?>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=Request">ยื่นคำขอเบิก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=Results">ตรวจสอบผลอนุมัติ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=History">ประวัติขอเบิก</a>
                    </li>
                    <?php
                  }
                  if($_SESSION['ses_usertype'] == 2)
                  {
                    ?>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=Look">ดูคำขอเบิก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=History_approve">ตรวจสอบประวัติการอนุมัติ</a>

                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="index.php?content=HistoryApp">ตรวจสอบประวัติการชอเบิก</a>
                    </li>
                    <?php
                  }
                  if($_SESSION['ses_usertype'] == 3)
                  {
                    ?>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=ManageUser">จัดการบัญชีผู้ใช้</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=ManageDraw_money">จัดการคำขอเบิก</a>
                    </li>
                    <?php
                  }
                  if($_SESSION['ses_usertype'] == 4)
                  {

                    ?>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=History_approve">ตรวจสอบผลอนุมัติ</a>
                    </li>
                    <?php
                  }
              ?>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php
                 $id = $_SESSION['ses_userid'];
                 $sql="SELECT Image FROM user where Userid = '$id'";
                 $db_query=mysql_query($sql);
                 $result = mysql_fetch_array($db_query);
                 $image = $result['Image'];
                 ?><img src="upload/<?php echo $image; ?>"width="25"height="29"><?php echo "&nbsp;&nbsp;&nbsp;".$_SESSION['ses_username'] ; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="index.php?content=Edit&&id=<?php echo $id; ?>">แก้ไขข้อมูล</a>
                <a class="dropdown-item" href="Logout.php">ออกจากระบบ</a>
              </div>
            </li>
              <? }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="">
      <?php
        include 'content.php';
      ?>
    </div>
    <div class="container">
<hr>
      <h1 class="my-4">ระบบงานที่เกี่ยวข้อง</h1>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="image/a1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">ระบบกู้เงิน</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="image/a2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">ระบบซ่อมคอมพิวเตอร์</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="image/a3.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">ระบบขออนุญาตไปราชการ</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="image/a4.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">ระบบใบเสนอราคา</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="py-5 bg-dark ">
      <div class="">
        <p class="m-0 text-center text-white">Computer Science &copy; Kanchanaburi Radchapat University</p>
      </div>
      <!-- /.container -->
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>


</html>
