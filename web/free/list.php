<? 
	session_start(); 
	$table = "free";
	$ripple = "free_ripple";
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
  
    MIXSETS
  
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
</head>

<?
	include "../lib/dbconn.php";
	$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
?>


<body>


  

		<form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search"> 
		<div id="list_search">
			<div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다.  </div>
			<div id="list_search2"><img src="../img/select_search.gif"></div>
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='nick'>별명</option>
                    <option value='name'>이름</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
		</div>
		</form>
		<div class="clear"></div>

		<div id="list_top_title">
			<ul>
				<li id="list_title1"><img src="../img/list_title1.gif"></li>
				<li id="list_title2"><img src="../img/list_title2.gif"></li>
				<li id="list_title3"><img src="../img/list_title3.gif"></li>
				<li id="list_title4"><img src="../img/list_title4.gif"></li>
				<li id="list_title5"><img src="../img/list_title5.gif"></li>
			</ul>		
		</div>

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);     // 포인터 이동        
      $row = mysql_fetch_array($result); // 하나의 레코드 가져오기	      
      
	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];
      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	  $sql = "select * from $ripple where parent=$item_num";
	  $result2 = mysql_query($sql, $connect);
	  $num_ripple = mysql_num_rows($result2);

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
<?
		if ($num_ripple)
				echo " [$num_ripple]";
?>
				</div>
				<div id="list_item3"><?= $item_nick ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='list.php?table=$table&page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
				</div>
				<div id="button">
					<a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
<? 
	if($userid)
	{
?>
		<a href="write_form.php?table=<?=$table?>"><img src="../img/write.png"></a>
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->		
        </div> <!-- end of list content -->
		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>