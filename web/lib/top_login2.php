   
	<div id="top_login">
<?
    if(!$userid)
	{
?>
          <a href="/src/09/login/login_form.php">�α���</a> | <a href="/src/09/member/member_form.php">ȸ������</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) | 
		<a href="/src/09/login/logout.php">�α׾ƿ�</a> | <a href="/src/09/login/member_form_modify.php">��������</a>
<?
	}
?>
	 </div>
