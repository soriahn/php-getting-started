	<a href="index1.php">
	<div id="top_login">
<?
    if(!$userid)
	{
?>
          <a href="./login/login_form.php">�α���</a> | <a href="./member/member_form.php">ȸ������</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) | 
		<a href="./login/logout.php">�α׾ƿ�</a> | <a href="./login/member_form_modify.php">��������</a>
<?
	}
?>
	 </div>
