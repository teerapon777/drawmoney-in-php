<html>
<?php
session_start();
include 'connect.php';
$Userid	= $_GET['id'];
$Username	= $_POST['Username'];
$Password	= $_POST['Password'];
$PreName	= $_POST['PreName'];
$FristName= $_POST['FristName'];
$LastName	= $_POST['LastName'];
$Phone	= $_POST['Phone'];
$Email	= $_POST['Email'];
$Status = $_POST['Status'];

if($Status == "ผู้ใช้"){ $UserType = 1; }
if($Status == "ผู้อนุมัติ"){ $UserType = 2; }
if($Status == "ผู้ดูแลระบบ"){ $UserType = 3; }
if($Status == "ผู้จ่ายเงิน"){ $UserType = 4; }
//upload
$imgfile = $_FILES['Image']['tmp_name'];
$imgname = $_FILES['Image']['name'];
$imgtype = $_FILES['Image']['type'];
if(empty($imgfile))
{
  $sql ="UPDATE user SET Password='$Password',PreName='$PreName',FristName='$FristName',LastName='$LastName',Phone ='$Phone',Email = '$Email', UserType = '$UserType' WHERE Userid = '$Userid'";
  $result = mysql_query($sql) or die ("$sql");
  if($result)
  {
  ?> <script> alert("แก้ไขข้อมูลสำเร็จ")</script><?php
  mysql_close($link);
  if($_SESSION['ses_usertype'] == 3)
  {
    echo "<META http-equiv=refresh content=0;url=index.php?content=ManageUser>";
  }
  else
  {
    echo "<META http-equiv=refresh content=0;url=index.php?content=Home>";
  }
  }
}
else
{
  $new = explode(".",$imgname);
  $new_name = $_GET['id'].".".$new[1];
  if(copy($imgfile,"upload/$new_name"))
  {
    $path_files = ($new_name);
    $sql ="UPDATE user SET Password='$Password',PreName='$PreName',FristName='$FristName',LastName='$LastName',Phone ='$Phone',Email = '$Email',Image = '$path_files',UserType = '$UserType' WHERE Userid = '$Userid'";
    $result = mysql_query($sql) or die ("$sql");
    if($result)
    {
      ?> <script> alert("แก้ไขข้อมูลสำเร็จ")</script><?php
      mysql_close($link);
      if($_SESSION['ses_usertype'] == 3)
      {
        echo "<META http-equiv=refresh content=0;url=index.php?content=ManageUser>";
      }
      else
      {
        echo "<META http-equiv=refresh content=0;url=index.php?content=Home>";
      }
    }
  }
}
?>
</html>
