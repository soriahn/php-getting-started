<? session_start(); ?>
<meta charset="euc-kr">
<?
	if(!$userid) {
		echo("
		<script>
	     window.alert('�α��� �� �̿��� �ּ���.')
	     history.go(-1)
	   </script>
		");
		exit;
	}

	if(!$content) {
		echo("
	   <script>
	     window.alert('������ �Է��ϼ���.')
	     history.go(-1)
	   </script>
		");
	 exit;
	}

	$regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

	include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);
	$row = mysql_fetch_array($result);

	$name = $row[name];
	$nick = $row[nick];

	$sql = "insert into memo (id, name, nick, content, regist_day) ";
	$sql .= "values('$userid', '$name', '$nick', '$content', '$regist_day')";

	mysql_query($sql, $connect);  // $sql �� ����� ��� ����

	mysql_close();                // DB ���� ����

	echo "
	   <script>
	    location.href = 'memo.php';
	   </script>
	";
?>

  
