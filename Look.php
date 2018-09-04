<div class="container">
  <br><br>
  <h2>คำขอเบิก</h2>
  
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

  <table class="table">
    <thead>
      <tr>
        <th>ชื่อเรื่อง</th>
        <th>จำนวนเงิน</th>
        <th>สถานที่</th>
        <th>วันที่ขอเบิก</th>
        <th>ผู้ขอเบิก</th>
      </tr>
    </thead>
    <?php
    session_start();
	include 'connect.php';
	$SQL="SELECT * FROM draw_money where Status = '0'";
	$QUERY=mysql_db_query($db,$SQL) or die ("error sql");
  $row=mysql_num_rows($QUERY);
	$i=1;
	while($i<=$row)
	{
    $Rs = mysql_fetch_array($QUERY);
    $Pj_ID = $Rs['Pj_ID'];
    $User_ID = $Rs['User_ID'];
    $pj_name	= $Rs['Pj_Name'];
    $money	= $Rs['money'];
    $Location	= $Rs['Location'];
    $date_draw	= $Rs['date_draw'];

    $SQLuser="SELECT * FROM user where Userid = '$User_ID'";
    $QUERYuser=mysql_db_query($db,$SQLuser) or die ("error sql");
    $rowuser=mysql_num_rows($QUERYuser);
    $Rss = mysql_fetch_array($QUERYuser);
    $PreName = $Rss['PreName'];
    $FristName = $Rss['FristName'];
    $LastName = $Rss['LastName'];
    ?>
    <tbody>
      <tr>
        <td><?php echo $pj_name;?></td>
        <td><?php echo number_format($money);?></td>
        <td><?php echo $Location;?></td>
        <td><?php echo $date_draw;?></td>
        <td><?php echo $PreName."&nbsp;".$FristName."&nbsp;&nbsp;&nbsp;".$LastName;?></td>
        <td><a href="index.php?content=Detailreq&&id=<?php echo $Pj_ID; ?>&&uid=<?php echo $User_ID; ?>"><img src="image/detail11.png" width="100" height="55"></a></td>
      </tr>
    </tbody>
    <?php
			$i++;
		}?>
  </table>
</div>
