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
  <script>
	function check() {
		var id = $("#user_id").val();
		if(id=="") {
			alert("아이디를 입력해주세요");
			$("#user_id").focus();
			return false;
		}
		var pwd = $("#user_pwd").val();
		if(pwd=="") {
			alert("비밀번호를 입력해주세요");
			$("#user_pwd").focus();
			return false;
		}
		return true;
	}
</script>
</head>
<body>

<!-- 상단 메뉴 부분 -->
<?
	include "../include/top_menu.php";
?>

<!-- 로그인 작성 폼 -->
<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="card-body">
					<!-- 로그인 실패시 출력
					<div class="alert alert-danger">
						<h3>로그인 실패</h3>
						<p>아이디 비밀번호를 확인해주세요</p>
					</div>
					-->
					<form action="login_pro.php" onsubmit="return check();" method="post">
						<div class="form-group">
							<label for="user_id">아이디</label>
							<input type="text" id="user_id" name="user_id" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="user_pwd">비밀번호</label>
							<input type="password" id="user_pwd" name="user_pwd" class="form-control"/>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary">로그인</button>
							<a href="join.php" class="btn btn-danger">회원가입</a>
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