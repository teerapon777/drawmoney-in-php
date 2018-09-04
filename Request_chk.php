<!DOCTYPE html>
<html>
<?php
  date_default_timezone_set('asia/bangkok');
  session_start();
  include 'connect.php';
  
  $user_id = $_SESSION['ses_userid'] ;
  $Pj_Name = $_POST['Pj_Name'];
  $money = $_POST['money'];
  $date_draw = date('Y-m-d h:i:sa');
  $Location = $_POST['Location'];
  $Description = $_POST['Description'];


  $sql ="insert into draw_money values('','$user_id','$Pj_Name','$money','$date_draw','$Location','$Description','0')";
  $result = mysql_query($sql) or die ("$sql");
  if($result)
  {
    ?> <script> alert("บันทึกแบบฟอร์มเเล้ว กรุณารอการอนุมัติ")</script><?php
    mysql_close($link);
    echo "<META http-equiv=refresh content=0;url=index.php?content=History>";
  }
  else {?> <script> alert("ไม่สามารถบันทึกแบบฟอร์มได้")</script><?php }
?>
</html>
