<div class="container">
  <h1 class="mt-4 mb-3">เข้าสู่ระบบ
  </h1>
  <div class="row ">
    <div class="col-lg-8 mb-4">
      <br>
      <form action="index.php?content=login_chk" method="post" name="sentMessage" id="contactForm" novalidate>
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
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">เข้าสู่ระบบ</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
