<!DOCTYPE html>
<html>
<?php
  include 'connect.php';
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $PreName = $_POST['PreName'];
  $FristName = $_POST['FristName'];
  $LastName = $_POST['LastName'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];

  $imgfile = $_FILES['image']['tmp_name'];
  $imgname = $_FILES['image']['name'];
  $imgtype = $_FILES['image']['type'];


  if(empty($imgfile))
  {
      ?> <script> alert("กรุณาเลือกรูปภาพ")</script> <?php
      echo "<META http-equiv=refresh content=0;url=index.php?content=Register>";
  }
  $chk_sql = "select * from user where Username = '$Username'";
  $chk_query = mysql_query($chk_sql);
  $chk_result = mysql_num_rows($chk_query);
  if($chk_result<=0)
  {
    $new = explode(".",$imgname);
    $new_name = $_POST['Username'].".".$new[1];
    if(copy($imgfile,"upload/$new_name"))
    {
      $path_files = ($new_name);
      $sql ="insert into user values('','$Username','$Password','$PreName','$FristName','$LastName','$Phone','$Email','$path_files','1')";
      $result = mysql_query($sql) or die ("$sql");
      if($result)
      {
        ?> <script> alert("ลงทะเบียนสำเร็จ")</script><?php
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
    else {?> <script> alert("ไม่สามารถลงทะเบียนได้")</script><?php }
  }
  else
  {
    ?> <script> alert("มีชื่อผู้ใช้นี้แล้ว")</script><?php
    echo "<META http-equiv=refresh content=0;url=index.php?content=Register>";
  }

?>
</html>
