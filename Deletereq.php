
<html>
<?php
  include 'connect.php';
  $id = $_GET['id'];
  $sql = "delete from draw_money where Pj_ID = '$id'";
  $result = mysql_query($sql) or die ("$sql");
  if($result)
  {
    ?> <script> alert("ลบข้อมูลสำเร็จ")</script><?php
  mysql_close($link);
  echo "<META http-equiv=refresh content=0;url=index.php?content=ManageDraw_money>";
  }
  else{?> <script> alert("ลบข้อมูลไม่สำเร็จ")</script><?php }

?>
</html>
