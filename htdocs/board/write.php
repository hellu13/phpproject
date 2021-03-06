<?
    include "../include/lib.php";
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

<!-- 게시글 작성 폼 -->
<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="card-body">
					<form action="write_pro.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
						<label for="content_writer_name">이름</label>
						<input type="text" id="content_writer_name" name="content_writer_name" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="content_subject">제목</label>
						<input type="text" id="content_subject" name="content_subject" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="content_text">내용</label>
						<textarea id="content_text" name="content_text" class="form-control" rows="10" style="resize:none"></textarea>
					</div>
					<div class="form-group">
						<label for="upload_file">첨부 이미지</label>
						<input type="file" id="upload_file" name="upload_file" class="form-control" accept="image/*"/>
					</div>
					<div class="input-group">
    					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    					<input id="content_pwd" type="password" class="form-control" name="content_pwd" placeholder="Password">
  					</div>
					<br>
					<div class="form-group">
						<div class="text-right">
							<button type="submit" class="btn btn-primary">작성하기</button>
						</div>
					</div>
					
					</form>
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