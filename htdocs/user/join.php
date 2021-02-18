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
		var name = $("#user_name").val();
		if(name=="") {
			alert("이름을 입력해주세요");
			$("#user_name").focus();
			return false;
		}
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
		var pwd2 = $("#user_pwd2").val();
		if(pwd2=="") {
			alert("비밀번호를 입력해주세요");
			$("#user_pwd2").focus();
			return false;
		}
		if(pwd != pwd2) {
			alert("비밀번호가 같지 않습니다");
			$("#user_pwd2").focus();
			return false;
		}
		var userIdExist = $("#userIdExist").val();
		if(userIdExist!="no") {
			alert("아이디 중복확인을 해주세요");
			document.getElementById("user_id").focus();
			return false;
		}

		return true;
	}
	function checkUserIdExist() {
		
		var user_id = $("#user_id").val();
		
		if(user_id.length == 0) {
			alert("아이디를 입력해주세요");
			$("#user_name").focus();
			return false;
		}
		
		$.ajax({
			url : "checkUserIdExist.php",
			type : "post",
			data:'user_id='+$("#user_id").val(),
			success : function(result) {
				if(result.trim() == "true") {
					alert("사용할 수 있는 아이디입니다")
					$("#userIdExist").val("no")
				}
				else {
					alert("중복된 아이디입니다")
					$("#userIdExist").val("yes")
				}
			}
		})
	}
	
	function resetUserIdExist() {
		$("#userIdExist").val("yes")
	}
  </script>
</head>
<body>

<!-- 상단 메뉴 부분 -->
<?
	include "../include/top_menu.php";
?>

<!-- 회원가입 작성 폼 -->
<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="card-body">
					<form action="join_pro.php" method="post" onsubmit="return check();">
						<input type="hidden" id="userIdExist" name="userIdExist"/>
						<div class="form-group">
							<label for="user_name">이름</label>
							<input type="text" id="user_name" name="user_name" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="user_id">아이디</label>
							<input type="text" id="user_id" name="user_id" class="form-control" onkeypress="resetUserIdExist()"/>
							<div>
								<button type="button" onclick="checkUserIdExist()" class="btn btn-primary" style="float: right">중복확인</button>
							</div>
						</div>
						<div class="form-group">
							<label for="user_pwd">비밀번호</label>
							<input type="password" id="user_pwd" name="user_pwd" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="user_pwd2">비밀번호 확인</label>
							<input type="password" id="user_pwd2" name="user_pwd2" class="form-control"/>
						</div>
						<div class="form-group">
							<div class="text-right">
								<button type="submit" class="btn btn-primary">회원가입</button>
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