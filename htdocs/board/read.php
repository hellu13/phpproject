<?
    include "../include/lib.php";

	$currentpage = $_GET['page'];
    $content_idx = $_GET['content_idx'];
    $content_idx = mysqli_real_escape_string($connect, $content_idx);

	$cookie = $_COOKIE["content_".$content_idx];
	if(!$cookie) {
		setcookie("content_".$content_idx, time(), time()+86400);
		$query = "update content_table set content_cnt = content_cnt + 1 where content_idx = '$content_idx' ";
		$result = mysqli_query($connect, $query);
	}

    $query = "select * from content_table where content_idx = '$content_idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
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

<!-- 게시글 읽기 부분 -->
<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="card-body">
					<div class="form-group">
						<label for="content_writer_name">작성자</label>
						<input type="text" id="content_writer_name" name="content_writer_name" class="form-control" value="<?=$data['content_writer_name']?>" disabled="disabled"/>
					</div>
					<div class="form-group">
						<label for="content_date">작성날짜</label>
						<input type="text" id="content_date" name="content_date" class="form-control" value="<?=$data['content_date']?>" disabled="disabled"/>
					</div>
					<div class="form-group">
						<label for="content_subject">제목</label>
						<input type="text" id="content_subject" name="content_subject" class="form-control" value="<?=$data['content_subject']?>" disabled="disabled"/>
					</div>
					<div class="form-group">
						<label for="content_text">내용</label>
						<textarea id="content_text" name="content_text" class="form-control" rows="10" style="resize:none" disabled="disabled"><?=$data['content_text']?></textarea>
					</div>
					<? if($data['content_file']) { ?>
					<div class="form-group">
						<label for="content_file">첨부 이미지</label>
						<br>
						<img src="../img/<?=$data['content_file']?>" width="270" height="400"/>						
					</div>
					<? } ?>
					<div class="form-group">
						<div class="text-right">
							<a href="list.php?page=<?=$currentpage?>" class="btn btn-primary">목록보기</a>
							<a href="modify_chk.php?content_idx=<?=$content_idx?>&page=<?=$currentpage?>" class="btn btn-info">수정하기</a>
							<a href="delete_chk.php?content_idx=<?=$content_idx?>" class="btn btn-danger">삭제하기</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<!-- Footer 부분 -->
<?
	include "../include/footer.php";
?>
</body>
</html>
