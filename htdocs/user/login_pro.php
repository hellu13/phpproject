<?
    include "../include/lib.php";
    session_start();

    $user_id = $_POST['user_id'];
    $user_pwd = $_POST['user_pwd'];

    $user_id = mysqli_real_escape_string($connect, $user_id);
    $user_pwd = mysqli_real_escape_string($connect, $user_pwd);

    $query = "select * from user_table where user_id='$user_id' and user_pwd=password('$user_pwd') ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    if($data['user_idx']) {
        $_SESSION['user_id'] = $data['user_id'];
        header("Location: /board/list.php");
        die;
    }
    else {
        echo "<script>
        alert(\"아이디 혹은 비밀번호가 일치하지 않습니다\");
        history.back(1);
        </script> ";
    }
?>
