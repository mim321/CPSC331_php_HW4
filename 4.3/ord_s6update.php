<body>
<form action="ord_s6update.php">
<input name="updid" value="1003">
<input name="updname" value="chula">
<input type="submit" value="ord_s6update.php">
</form>
<?php
if (!isset($_GET['updid'])) { exit; }
require("ord_s1connect.php");
$sql="update $tb set ";
$sql.="eid='". $_GET['updid'] ."', ";
$sql.="ename='". $_GET['updname'] ."' ";
$sql.="where eid='". $_GET['updid'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=ord_s0index.php'/>";
mysql_close($connect);
?>
</body>