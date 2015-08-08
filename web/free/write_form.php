<? 
	session_start(); 
	include "../lib/dbconn.php";

	if ($mode=="modify")
	{
		$sql = "select * from $table where num=$num";
		$result = mysql_query($sql, $connect);
		$row = mysql_fetch_array($result);       
	
		$item_subject     = $row[subject];
		$item_content     = $row[content];
		$item_file_0 = $row[file_name_0];
		$item_file_1 = $row[file_name_1];
		$item_file_2 = $row[file_name_2];

		$copied_file_0 = $row[file_copied_0];
		$copied_file_1 = $row[file_copied_1];
		$copied_file_2 = $row[file_copied_2];
	}
?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://getbootstrap.com/components/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="euc-kr">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

<title>
  
    CONTACT
  
</title>

<!-- Bootstrap core CSS -->

<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Optional Bootstrap Theme -->

  <link href="data:text/css;charset=utf-8," data-href="../dist/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">



<!-- Documentation extras -->

<link href="http://getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">

<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script async="" id="gauges-tracker" data-site-id="4f0dc9fef5a1f55508000013" src="./Components · Bootstrap_files/track.js"></script><script id="twitter-wjs" async="" src="./Components · Bootstrap_files/widgets.js"></script><script async="" src="./Components · Bootstrap_files/azcarbon_2_1_0_HORIZ"></script><script async="" src="./Components · Bootstrap_files/analytics.js"></script><script src="./Components · Bootstrap_files/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon" href="http://getbootstrap.com/apple-touch-icon.png">
<link rel="icon" href="http://getbootstrap.com/favicon.ico">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-146052-10', 'getbootstrap.com');
  ga('send', 'pageview');
</script>

  <script id="_carbonads_projs" type="text/javascript" src="./Components · Bootstrap_files/C6AILKT.json"></script><style>.carbonad{display:block;background:#fdfdfd;background-image:-moz-linear-gradient(top,#f8f8f8,#fdfdfd);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#f8f8f8),color-stop(1,#fdfdfd));border:1px solid #d5d5d5;font-family:Lucida Grande,Arial,Helvetica,sans-serif;font-size:11px;height:118px;line-height:15px;overflow:hidden;width:300px}.carbonad-img{border:none;display:inline;float:left;height:100px;margin:9px;width:130px}.carbonad-text{display:inline;float:left;width:142px;padding-top:13px}.carbonad-text a{color:#000;text-decoration:none;text-transform:none;}.carbonad-tag{float:left;margin-top:9px;text-align:center;width:142px;color:#999}.carbonad-tag a{color:#999;text-decoration:none}</style></head>
  <body data-twttr-rendered="true">
    <a id="skippy" class="sr-only sr-only-focusable" href="http://getbootstrap.com/components/#content"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>

    <!-- Docs master nav -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://localhost/src/09/index1.php" class="navbar-brand">WELCOME</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="http://localhost/src/09/djlist.php">DJ LIST</a>
        </li>
        <li>
          <a href="http://localhost/src/09/festival.php">FESTIVALS</a>
        </li>
        <li class="active">
          <a href="http://localhost/src/09/MIXSETS.php">MIXSETS</a>
        </li>
        <li>
          <a href="http://localhost/src/09/free/list.php">CONTACT</a>
        </li>
        <li>
          <a href="http://localhost/src/09/survey/survey.php">SURVEY</a>
        </li>
       <ul class="nav navbar-nav navbar-right">
	   <li><? include "../lib/top_login2.php"; ?></li>
	  </ul>
    </nav>
  </div>
 
</header>


    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content" tabindex="-1">
      <div class="container">
        <h1>CONTACT</h1>
        <p>자유로운 커뮤니케이션이 가능한 소통 공간입니다.</p>
      </div>
    </div>

<link href="../css/board4.css" rel="stylesheet" type="text/css" media="all">
<script>
  function check_input()
   {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요1");    
          document.board_form.subject.focus();
          return;
      }

      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>

<body>

		<div class="clear"></div>

		<div id="write_form_title">
			<img src="../img/write_form_title.gif">
		</div>
		<div class="clear"></div>
<?
	if($mode=="modify")
	{
?>
		<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
	else
	{
?>
		<form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
?>
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1"><div class="col1"> 별명 </div><div class="col2"><?=$usernick?></div>
<?
	if( $userid && ($mode != "modify"))
	{
?>
				<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
<?
	}
?>			
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> 제목   </div>
			                     <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> 내용   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
			<br><br><br>
			<div id="write_row4"><div class="col1"> 이미지파일1   </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
			<div class="clear"></div>
<? 	if ($mode=="modify" && $item_file_0)
	{
?>
			<div class="delete_ok"><?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div><br>
			<div id="write_row5"><div class="col1"> 이미지파일2  </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($mode=="modify" && $item_file_1)
	{
?>
			<div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div class="clear"></div>
			<div id="write_row6"><div class="col1"> 이미지파일3   </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($mode=="modify" && $item_file_2)
	{
?>
			<div class="delete_ok"><?=$item_file_2?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="2"> 삭제</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>

			<div class="clear"></div>
		</div>

		<div id="write_button"><a href="#"><img src="../img/ok.png" onclick="check_input()"></a>&nbsp;
								<a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="../img/list.png"></a>
		</div>
		</form>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
