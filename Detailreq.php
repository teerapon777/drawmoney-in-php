<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * from draw_money where Pj_ID ='$id'";
$QUERY = mysql_query($sql);
$Rs = mysql_fetch_array($QUERY);
$Pj_ID = $Rs['Pj_ID'];
$User_ID = $Rs['User_ID'];
$Pj_Name = $Rs['Pj_Name'];
$money = $Rs['money'];
$date_draw= $Rs['date_draw'];
$Location = $Rs['Location'];
$Description = $Rs['Description'];
$SQLuser="SELECT * FROM user where Userid = '$User_ID'";
$QUERYuser=mysql_db_query($db,$SQLuser) or die ("error sql");
$rowuser=mysql_num_rows($QUERYuser);
$Rss = mysql_fetch_array($QUERYuser);
$PreName = $Rss['PreName'];
$FristName = $Rss['FristName'];
$LastName = $Rss['LastName'];
?>

<div class="container">
  <h1 class="mt-4 mb-3">
  </h1>
  <div class="row ">
    <div class="col-lg-8 mb-4">
      <br>
      <form action="index.php?content=Approve&&id=<?php echo $Pj_ID;?>&&userid=<?php echo $User_ID;?>" method="post" enctype="multipart/form-data" >
        <div class="control-group form-group">
          <div class="controls">
            <label>ชื่อโครงการ</label>
            <input disabled="disabled" type="text" class="form-control" value="<?php echo $Pj_Name; ?>" name="Pj_Name" id="Pj_Name">
            <p class="help-block"></p>
          </div>
          <div class="controls">
            <label>ชื่อผู้ขอเบิก</label>
            <input disabled="disabled" type="text" class="form-control" value="<?php echo $PreName."&nbsp;".$FristName."&nbsp;&nbsp;&nbsp;".$LastName;?>" name="Userid" id="Userid">
            <p class="help-block"></p>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>จำนวนเงิน</label>
              <input disabled="disabled" type="text" class="form-control" value="<?php echo $money; ?>" name="money" id="money">
              <p class="help-block"></p>
            </div>
        </div>
        <div class="controls">
          <label>สถานที่</label>
          <input disabled="disabled" type="text" class="form-control" value="<?php echo $Location; ?>"  name="Location" id="Location">
          <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>รายละอียด</label>
        <textarea disabled="disabled" rows="10" cols="100" class="form-control"  value="<?php echo $Description; ?>" name="Description" id="Description" ><?php echo $Description; ?> </textarea>
        <p class="help-block"></p>
      </div>
  </div>
  <div class="control-group form-group ">
    <div class="controls">
      <label>ผลอนุมัติ</label>
      <select type="text" name="Status" class="form-control">
        <option>อนุมัติ</option>
        <option>ไม่อนุมัติ</option>
      </select>
      <p class="help-block"></p>
    </div>
</div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">ส่งแบบฟอร์ม</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
