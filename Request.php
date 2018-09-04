<div class="container">

  <h1 class="mt-4 mb-3">ยื่นคำร้องขอเบิกเงิน
  
  </h1>
  <div class="row ">
    <div class="col-lg-8 mb-4">
      <br>
      <form action="index.php?content=Request_chk" method="post" enctype="multipart/form-data" >
        <div class="control-group form-group">
          <div class="controls">
            <label>เรื่อง</label>
            <input type="text" class="form-control" name="Pj_Name" id="Pj_Name" required data-validation-required-message="Please enter your Project Name.">
            <p class="help-block"></p>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>จำนวนเงิน</label>
              <input type="number" class="form-control"name="money" id="money" required data-validation-required-message="Please enter your money.">
              <p class="help-block"></p>
            </div>
        </div>
        <div class="controls">
          <label>สถานที่</label>
          <input type="text" class="form-control"name="Location" id="Location" required data-validation-required-message="Please enter your Location.">
          <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>รายละอียด</label>
        <textarea rows="10" cols="100" class="form-control" name="Description" id="Description" required data-validation-required-message="Please enter your Description" maxlength="999" style="resize:none"></textarea>
        <p class="help-block"></p>
      </div>
  </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">บันทึก</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
