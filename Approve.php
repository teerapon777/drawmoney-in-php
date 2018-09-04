<!DOCTYPE html>
<html>
<?php
  date_default_timezone_set('asia/bangkok');
  session_start();
  include 'connect.php';
  $Pj_id = $_GET['id'];
  $Userid = $_GET['userid'];
  $Status = $_POST['Status'];
  $Date_approve = date('Y-m-d h:i:sa');


  $sql ="insert into approve values('','$Pj_id','$Userid','$Status','$Date_approve')";
  $result = mysql_query($sql) or die ("$sql");
  if($result)
  {
    $sql1 ="UPDATE draw_money SET Status = '1' WHERE Pj_ID = '$Pj_id'";
    $result1 = mysql_query($sql1) or die ("$sql1");
    if($result1)
    {
      ?> <script> alert("ส่งผลการอนุมัติเรียบร้อย")</script><?php
      mysql_close($link);
      echo "<META http-equiv=refresh content=0;url=index.php?content=History_approve>";
    }
  }
  else {?> <script> alert("ไม่สามารถส่งผลการอนุมัติได้")</script><?php }
?>
</html>
