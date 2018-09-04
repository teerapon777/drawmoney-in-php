<div class="container">
  <br><br>
  <h2>ประวัติการขอเบิก</h2>
  <FORM>
<a href="index.php?content=Request"><INPUT TYPE="BUTTON" class="btn btn-primary" VALUE="ยื่นคำขอเบิก" ></a><br>
</FORM>



  <br><form id="form1" name="form1" method="post" action="">
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
        <th>ชื่อโครงการ</th>
        <th>จำนวนเงิน</th>
        <th>สถานที่</th>
        <th>วันที่ขอเบิก</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    <?php
    session_start();
	$txt = $_POST['txt'];
    $id = $_SESSION['ses_userid'];
	include 'connect.php';

	if($txt==null)
	{
		$SQL="SELECT * FROM draw_money where User_ID";
	}
	else
	{
		$SQL="SELECT * FROM draw_money where Pj_Name like '%$txt%'";
	}
	$QUERY=mysql_db_query($db,$SQL) or die ("error sql");
	$row=mysql_num_rows($QUERY);
	$i=1;
	while($i<=$row)
	{
    $Rs = mysql_fetch_array($QUERY);
    $Pj_ID = $Rs['Pj_ID'];
    $pj_name	= $Rs['Pj_Name'];
    $money	= $Rs['money'];
    $Location	= $Rs['Location'];
    $date_draw	= $Rs['date_draw'];
    $Status = $Rs['Status'];
    ?>
    <tbody>
      <tr>
        <td><?php echo $pj_name;?></td>
        <td><?php echo number_format($money);;?></td>
        <td><?php echo $Location;?></td>
        <td><?php echo $date_draw;?></td>
        <td>
          <?php if($Status==1)
          {
            ?><p><font color="#66FF00"><?php echo "ส่งผลอนุมัติแล้ว"; ?></p><?php
          }
          else {
            ?><p><font color="#FF4500"><?php echo "รอผลอนุมัติ"; ?></p><?php
          }
        ?>
        </td>
        <td><a href="index.php?content=Detail&&id=<?php echo $Pj_ID; ?>"><img src="image/detail11.png" width="150" height="55" value="ดูรายละเอียด"></a></td>
      </tr>
    </tbody>
    <?php
			$i++;
		}?>
  </table>
</div>
