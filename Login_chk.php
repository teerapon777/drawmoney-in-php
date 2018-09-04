<!DOCTYPE html>
<html>
  <head>
<?php
  session_start();
  ob_start();
  include 'connect.php';
  $Username=$_POST['Username'];
  $Password=$_POST['Password'];
  $sql = "select * from user where Username = '$Username' and Password = '$Password' ";
  $query = mysql_query($sql);
  $result = mysql_num_rows($query);
  if($result<=0)
  {
    ?> <script> alert("Username หรือ Password ไม่ถูกต้อง")</script><?php
    echo "<META http-equiv=refresh content=0;url=index.php?content=Login>";
  }
  else {
    $rs = mysql_fetch_array($query);
    $ses_username = $rs['Username'];
    $ses_usertype = $rs['UserType'];
    $ses_userid = $rs['Userid'];
    $_SESSION['ses_username'] = $ses_username;
    $_SESSION['ses_usertype'] = $ses_usertype;
    $_SESSION['ses_userid'] = $ses_userid;
    echo "<META http-equiv=refresh content=0;url=index.php?content=Home>";
  }
?>
</head>
<body>

</body>
</html>
