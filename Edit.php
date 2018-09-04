<?php
  include 'connect.php';
  $id = $_GET['id'];
  $sql = "SELECT * from user where Userid='$id'";
  $QUERY = mysql_query($sql);
  $Rs = mysql_fetch_array($QUERY);
  $Userid	= $Rs['Userid'];
  $Username	= $Rs['Username'];
  $Password	= $Rs['Password'];
  $PreName	= $Rs['PreName'];
  $FristName= $Rs['FristName'];
  $LastName	= $Rs['LastName'];
  $Phone	= $Rs['Phone'];
  $Email	= $Rs['Email'];
  $img	= $Rs['Image'];

?>
<div class="container">
  <h1 class="mt-4 mb-3">แก้ไขข้อมูล
  </h1>
  <div class="row ">
    <div class="col-lg-8 mb-4">
      <br>
      <form action="index.php?content=Edit_chk&&id=<?php echo $Userid;?>" method="post" enctype="multipart/form-data" >
        <div class="control-group form-group">
          <div class="control-group form-group">
            <div class="controls">
              <label>รหัสผ่าน</label>
              <input type="Password" value="<?php echo $Password; ?>" class="form-control"name="Password" id="Password" required data-validation-required-message="Please enter your Password.">
              <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group ">
          <div class="controls">
            <label>คำนำหน้า</label>
            <select name="PreName" id="PreName" class="form-control">
         <?php if($PreName=='นาย')
         {
           ?>
           <option>นาย</option>
           <option>นาง</option>
           <option>นางสาว</option>
           <?php
         }
            if($PreName=='นาง'){
              ?>
              <option>นาง</option>
              <option>นาย</option>
              <option>นางสาว</option>
              <?php
            }
            if($PreName=='นางสาว')
            {
              ?>
              <option>นางสาว</option>
              <option>นาง</option>
              <option>นาย</option>

              <?php
            }
             ?>

       </select>
            <p class="help-block"></p>
          </div>
      </div><div class="control-group form-group">
        <div class="controls">
          <label>ชื่อ</label>
          <input type="text" class="form-control" value="<?php echo $FristName; ?>" name="FristName" id="FristName" required data-validation-required-message="Please enter your FristName.">
          <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>นามสกุล</label>
        <input type="text" class="form-control" value="<?php echo $LastName; ?>" name="LastName" id="LastName" required data-validation-required-message="Please enter your LastName.">
        <p class="help-block"></p>
      </div>
  </div>
  <div class="control-group form-group">
    <div class="controls">
      <label>เบอร์โทรติดต่อ</label>
      <input type="text" class="form-control" value="<?php echo $Phone; ?>" name="Phone" id="Phone" required data-validation-required-message="Please enter your Phone.">
      <p class="help-block"></p>
    </div>
</div>
<div class="control-group form-group">
  <div class="controls">
    <label>E-Mail</label>
    <input type="email" class="form-control" value="<?php echo $Email; ?>" name="Email" id="Email" required data-validation-required-message="Please enter your Email.">
    <p class="help-block"></p>
  </div>
</div>
<div class="control-group form-group">
  <div class="controls">
    <label>รูปภาพ</label>
    <br><br><img src="upload/<?php echo $img; ?>"width="100"><br><br>
    <input type="file" class="form-control"name="Image" id="Image" >
    <p class="help-block"></p>
  </div>
</div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">ยืนยัน</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
