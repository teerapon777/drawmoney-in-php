<div class="container">
  <br><br>
  <h2>ตรวจสอบผลอนุมัติ</h2>

  <form id="form1" name="form1" method="post" action="">
    <div class="card mb-4">
            <h5 class="card-header">ค้นหา</h5>

            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" value="<?PHP echo $_POST['txt'];?>" name="txt" placeholder="เรื่อง หรือ สถานที่">
                <span class="input-group-btn">
                  <input class="btn btn-secondary" type="submit" name="button" id="button" value="ค้นหา" />
                </span>
              </div>
            </div>
          </div>

  </form>


  <table class="table">
    <thead>
      <tr>
        <th>เรื่อง</th>
        <th>จำนวนเงิน</th>
        <th>สถานที่</th>
        <th>วันที่ขอเบิก</th>
        <th>วันที่อนุมัติ</th>
        <th>ผลอนุมัติ</th>
      </tr>
    </thead>
    <?php
    session_start();
    date_default_timezone_set('asia/bangkok');
    $id = $_SESSION['ses_userid'];
    $txt = $_POST['txt'];
	include 'connect.php';
  $SQLuser="SELECT * FROM approve where User_ID = '$id'";
  $QUERYuser=mysql_db_query($db,$SQLuser) or die ("error sql");
  $rowuser=mysql_num_rows($QUERYuser);

  if($txt == null)
  {
	   $SQL="SELECT * FROM draw_money where User_ID = '$id'";
  }
  else $SQL="SELECT * FROM draw_money where Pj_Name like '%$txt%' or Location like '%$txt%' and User_ID = '$id'";
	$QUERY=mysql_db_query($db,$SQL) or die ("error sql");
	$row=mysql_num_rows($QUERY);
	$i=1;
	while($i<=$row and $i<=$rowuser)
	{
    $Rs = mysql_fetch_array($QUERY);
    $Rss = mysql_fetch_array($QUERYuser);
    $Pj_ID = $Rs['Pj_ID'];
    $pj_name	= $Rs['Pj_Name'];
    $money	= $Rs['money'];
    $Location	= $Rs['Location'];
    $date_draw	= $Rs['date_draw'];
    $Status = $Rss['Status_approve'];
    $date_approve = $Rss['Date_approve'];


    ?>
    <tbody>
      <tr>
        <td><?php echo $pj_name;?></td>
        <td><?php echo number_format($money); ?></td>
        <td><?php echo $Location;?></td>
        <td><?php echo $date_draw;?></td>
        <td><?php echo $date_approve;?></td>
        <td>
          <?php
            if($Status=="อนุมัติ")
            {
              ?> <img src="image/ok.png" width="40" height="40"> <?php
            }
            else
            {
              ?> <img src="image/no.png" width="40" height="40"> <?php
            }
          ?>
        </td>



      </tr>
    </tbody>
    <?php
			$i++;
		}?>
  </table>
</div>
