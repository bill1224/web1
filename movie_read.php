<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>영화 정보</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<div>
		<nav id="topMenu"	>
			<ul>
				<li><a class="menuLink" href="/page/main.php">Logo</a></li>
				<li><a class="menuLink" href="/member/logout.php">북마크</a></li>
				<li><a class="menuLink" href="/member/mypage.php">마이페이지</a></li>
				<li><a class="menuLink" href="/member/logout.php">로그아웃</a></li>
			</ul>
		</nav>
	</div>
	
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		/* 조회수 필요 시 사용
		$hit = mysqli_fetch_array(mq("select * from movie_info where m_idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update movie_info set hit = '".$hit."' where m_idx = '".$bno."'");*/
		$sql = mq("select * from movie_info where m_idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$movie_info = $sql->fetch_array();
	?>
	
	<h1>영화 정보</h1>
	<br>
	
		<div id="movie_read">
			<div>
				영화 제목: <?php echo $movie_info['m_name']; ?>
				</div>
				<br>
				<div>
				주연: <?php echo $movie_info['m_lead_role']; ?>
				</div>
				<br>
				<div>
				개봉 날짜: <?php echo $movie_info['m_Opening_date']; ?>
				</div>
				<br>
				<div>
				대표 OST: <?php echo $movie_info['m_OST']; ?>
				</div>
				<br>
				<div>
				관람가: <?php echo $movie_info['m_r_age']; ?>
				</div>
				<br>
				<div>
				수상 내역: <?php echo $movie_info['m_awards']; ?>
				</div>
				<br>
				<div>
				장르: <?php echo $movie_info['m_genre']; ?>
				</div>
				<br>
				<div>
				줄거리: <?php echo $movie_info['m_summay']; ?>
				</div>
				<br>
				<div>
				러닝타임: <?php echo $movie_info['m_r_time']; ?>
				</div>
				<br>
				<div>
				다운로드 링크: <?php echo $movie_info['m_link']; ?>
				</div>
				<br>
				<div>
				제작국가: <?php echo $movie_info['m_country']; ?>
				</div>
				<br>
				<div>
				감독: <?php echo $movie_info['m_director']; ?>
				</div>
				<br>
				<div>
				이미지: <img src="http://localhost/img/poster/<?php echo $movie_info['m_lo_image_link']; ?>">
				</div>
				<br>
				<div>
				기타: <?php echo $movie_info['etc']; ?>
				</div>
		</div>
		
		<!-- 목록, 수정, 삭제 -->
		<div id="bo_ser">
			<ul>
				<li><a href="/page_admin/movie_list.php">[목록으로]</a></li>
				<li><a href="/page_admin/movie_modify.php?idx=<?php echo $movie_info['m_idx']; ?>">[수정]</a></li>
				<li><a href="/page_admin/movie_delete.php?idx=<?php echo $movie_info['m_idx']; ?>">[삭제]</a></li>
			</ul>
		</div>
		
    </body>
</html>