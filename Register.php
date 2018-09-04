<div class="container">
  <h1 class="mt-4 mb-3">สมัครสมาชิก
  </h1>
  <div class="row ">
    <div class="col-lg-8 mb-4">
      <br>
      <form action="index.php?content=Register_chk" method="post" enctype="multipart/form-data" >
        <div class="control-group form-group">
          <div class="controls">
            <label>ชื่อผู้ใช้</label>
            <input type="text" class="form-control" name="Username" id="Username" required data-validation-required-message="Please enter your Username.">
            <p class="help-block"></p>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>รหัสผ่าน</label>
              <input type="Password" class="form-control"name="Password" id="Password" required data-validation-required-message="Please enter your Password.">
              <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group ">
          <div class="controls">
            <label>คำนำหน้า</label>
            <select type="text" name="PreName" class="form-control">
              <option>นาย</option>
              <option>นาง</option>
              <option>นางสาว</option>
            </select>
            <p class="help-block"></p>
          </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>ชื่อ</label>
          <input type="text" class="form-control"name="FristName" id="FristName" required data-validation-required-message="Please enter your FristName.">
          <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>นามสกุล</label>
        <input type="text" class="form-control"name="LastName" id="LastName" required data-validation-required-message="Please enter your LastName.">
        <p class="help-block"></p>
      </div>
  </div>
  <div class="control-group form-group">
    <div class="controls">
      <label>เบอร์โทรติดต่อ</label>
      <input type="text" class="form-control"name="Phone" id="Phone" required data-validation-required-message="Please enter your Phone.">
      <p class="help-block"></p>
    </div>
</div>
<div class="control-group form-group">
  <div class="controls">
    <label>E-Mail</label>
    <input type="email" class="form-control"name="Email" id="Email" required data-validation-required-message="Please enter your Email.">
    <p class="help-block"></p>
  </div>
</div>
<div class="control-group form-group">
  <div class="controls">
    <label>รูปภาพ</label>
    <input type="file" class="form-control"name="image" id="image" required data-validation-required-message="Please enter your image.">
    <p class="help-block"></p>
  </div>
</div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">สมัครสมาชิก</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
