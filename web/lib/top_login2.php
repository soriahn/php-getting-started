   
	<div id="top_login">
<?
    if(!$userid)
	{
?>
          <a href="/src/09/login/login_form.php">로그인</a> | <a href="/src/09/member/member_form.php">회원가입</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) | 
		<a href="/src/09/login/logout.php">로그아웃</a> | <a href="/src/09/login/member_form_modify.php">정보수정</a>
<?
	}
?>
	 </div>
