<?php require_once('connect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$SQL="SELECT * FROM draw_money";
$QUERY=mysql_db_query($db,$SQL) or die ("error sql");
$row=mysql_num_rows($QUERY);
?>
<!DOCTYPE html>
  <html lang="en">
      <head>
      <meta charset="utf-8">
      <title>:: Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href="assets/css/bootstrap.css" rel="stylesheet">
      <style type="text/css">
  /* Sticky footer styles
        -------------------------------------------------- */

        html,  body {
  	height: 100%;/* The html and body elements cannot have any padding or margin. */
        }
  /* Wrapper for page content to push down footer */
        #wrap {
  	min-height: 100%;
  	height: auto !important;
  	height: 100%;
  	/* Negative indent footer by it's height */
          margin: 0 auto -60px;
  }
  /* Set the fixed height of the footer here */
        #push,  #footer {
  	height: 60px;
  }
  #footer {
  	background-color: #f5f5f5;
  }

        /* Lastly, apply responsive CSS fixes as necessary */
        @media (max-width: 767px) {
   #footer {
   margin-left: -20px;
   margin-right: -20px;
   padding-left: 20px;
   padding-right: 20px;
  }
  }
  /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        #wrap > .container {
  	padding-top: 60px;
  }
  .container .credit {
  	margin: 20px 0;
  }
  code {
  	font-size: 80%;
  }
  </style>
      <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="assets/ico/favicon.png">

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <body background="images/1180422460.gif">
<script>
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<style type="text/css">
@media print{
	#wrapall{width:100%;}
	#btnprint{display:none;}
	}
</style>
</head>

<body>
<script src="js/bootstrap.min.js"></script>
<table width="100%" border="1" class="table" align="center" >
  
  <tr>
    <td colspan="5" align="center"><strong>** Report by Summary Report **&nbsp;&nbsp;&nbsp;</strong></td>
    <td align="center">
    <button name="btnprint" id="btnprint" class="btn btn-warning" type="button" onClick="window.print()">&nbsp;Print&nbsp;
    </button>
    </td>
  </tr>
  <tr>
    <td width="10%" align="center"><strong>ชื่อผู้แจ้ง</strong></td>
    <td width="9%" align="center"><strong>วันที่แจ้ง</strong></td>
    <td width="11%" align="center"><strong>แผนกที่แจ้ง</strong></td>
    <td width="33%" align="center"><strong>รายละเอียด</strong></td>
    <td width="7%" align="center"><strong>สถานะงาน</strong></td>
    <td width="30%" align="center"><strong>ข้อคิดเห็น</strong></td>
  </tr>
  </thead>
  <?php do { ?>
  <tbody>
    <tr>
      <td align="center"><?php echo $row_SR['name']; ?></td>
      <td align="center"><?php echo $row_SR['datepicker']; ?></td>
      <td><?php echo $row_SR['department']; ?></td>
      <td><?php echo $row_SR['details']; ?></td>
      <td align="center"><?php echo $row_SR['status']; ?></td>
      <td><?php echo $row_SR['comment']; ?></td>
    </tr>
    <?php } while ($row = mysql_fetch_assoc($Rs)); ?>
    </tbody>
</table>
<p>&nbsp;</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>
<?php
mysql_free_result($SR);
?>