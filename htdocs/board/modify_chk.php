<?
    include "../include/lib.php";

    $content_idx = $_GET['content_idx'];
	$currentpage = $_GET['page'];
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
                    <form action="modify_chk_pro.php" method="post">
                    <input type="hidden" name="content_idx" value="<?=$content_idx?>">
					<input type="hidden" name="page" value="<?=$currentpage?>">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="content_pwd" type="password" class="form-control" name="content_pwd" placeholder="Password">
                    </div>
                    <br>
                    <div class="form-group">
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Unlock</button>
						</div>
					</div>
                    </form>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

</body>
</html>