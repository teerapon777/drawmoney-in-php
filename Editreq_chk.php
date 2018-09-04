<!DOCTYPE html>
<html>
  <?php
    session_start();
    include 'connect.php';
    $id = $_GET['id'];
    $Pj_Name = $_POST['Pj_Name'];
    $money = $_POST['money'];
    $Location = $_POST['Location'];
    $Description = $_POST['Description'];
    $sql ="UPDATE draw_money SET Pj_Name='$Pj_Name',money='$money',Location='$Location',Description='$Description' WHERE Pj_ID = '$id'";
    $result = mysql_query($sql) or die ("$sql");
    if($result)
    {
    ?> <script> alert("แก้ไขข้อมูลสำเร็จ")</script><?php
    mysql_close($link);
    echo "<META http-equiv=refresh content=0;url=index.php?content=ManageDraw_money>";
    }
    else {
      ?>
      <script> alert("ไม่สามารถแก้ไขข้อมูลได้")</script><?php
      echo "<META http-equiv=refresh content=0;url=index.php?content=ManageDraw_money>";
    }
  ?>
</html>
