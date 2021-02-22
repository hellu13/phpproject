<?
    include "../include/lib.php";
	$page_listcnt = 10; // 한 페이지당 글 개수
	$page_paginationcnt = 10;  // 페이지 버튼 개수
	$currentpage = $_GET['page']; // 현재 페이지 번호
	if(!$currentpage) { $currentpage = 1; }
	$start = ($currentpage - 1) * $page_listcnt;

	$query = "select count(*) as cnt from content_table ";
	$result = mysqli_query($connect, $query);
	$tmp = mysqli_fetch_array($result);
	$contentCnt = $tmp['cnt'];  // 전체 글 개수
	$pageCnt = (int)($contentCnt / $page_listcnt); // 전체 페이지 개수
	if($contentCnt % $page_listcnt > 0) { $pageCnt = $pageCnt + 1; }
	$min = ((int)(($currentpage-1)/$page_listcnt)) * $page_listcnt + 1;
	$max = $min + $page_paginationcnt - 1;
	if($max > $pageCnt) { $max = $pageCnt; }
	$prevPage = $min - 1;
	$nextPage = $max + 1;
	if($nextPage > $pageCnt) { $nextPage = $pageCnt; }


	$query = "select * from content_table order by content_idx desc limit $start, $page_listcnt";
	$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>;
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP 프로젝트</title>
<!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- 상단 메뉴 부분 -->
<?
	include "../include/top_menu.php";
?>

<!-- 게시글 리스트 -->
<div class="container" style="margin-top:100px">
	<div class="card shadow">
		<div class="card-body">
			<h4 class="card-title">자유 게시판</h4>
			<table class="table table-hover" id='board_list'>
				<thead>
					<tr>
						<th class="text-center d-none d-md-table-cell">No</th>
						<th class="w-50">제목</th>
						<th class="text-center d-none d-md-table-cell">작성자</th>
						<th class="text-center d-none d-md-table-cell">작성날짜</th>
						<th class="text-center d-none d-md-table-cell">조회수</th>
					</tr>
				</thead>
				<tbody>
					<? while($data = mysqli_fetch_array($result)) { ?>
					<tr>
					
						<td class="text-center d-none d-md-table-cell"><?=$data['content_idx']?></td>
						<td><a href='read.php?content_idx=<?=$data['content_idx']?>&page=<?=$currentpage?>'><?=$data['content_subject']?></a></td>
						<td class="text-center d-none d-md-table-cell"><?=$data['content_writer_name']?></td>
						<td class="text-center d-none d-md-table-cell"><?=substr($data['content_date'], 0, 10)?></td>
						<td class="text-center d-none d-md-table-cell"><?=$data['content_cnt']?></td>
					</tr>
					<? } ?>
				</tbody>
			</table>
			
			<div class="d-none d-md-block">
				<ul class="pagination justify-content-center">
					<? if($prevPage<=0) {?>
					<li class="page-item disabled">
						<a href="#" class="page-link">이전</a>
					</li>
					<?} else { ?>
					<li class="page-item">
						<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$prevPage?>" class="page-link">이전</a>
					</li>
					<? } ?>
					<? for($i=$min; $i<=$max; $i++) { ?>
					<?if($i==$currentpage) {?>
					<li class="page-item active">
						<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$i?>" class="page-link"><?=$i?></a>
					</li>
					<? } else { ?>
					<li class="page-item">
						<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$i?>" class="page-link"><?=$i?></a>
					</li>
					<? } ?>
					<? } ?>
					<? if($max >= $pageCnt) { ?>
					<li class="page-item disabled">
						<a href="#" class="page-link">다음</a>
					</li>
					<? } else { ?>
					<li class="page-item">
						<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$nextPage?>" class="page-link">다음</a>
					</li>
					<? } ?>
				</ul>
			</div>
			
			<div class="text-right">
				<a href="write.php" class="btn btn-primary">글쓰기</a>
			</div>
			
		</div>
	</div>
</div>

<!-- Footer 부분 -->
<?
	include "../include/footer.php";
?>
</body>
</html>






