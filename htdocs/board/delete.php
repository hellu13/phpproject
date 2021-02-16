<?
    include "../include/lib.php";

    $content_idx = $_POST['content_idx'];
    $content_pwd = $_POST['content_pwd'];
    
    $content_idx = mysqli_real_escape_string($connect, $content_idx);
    $content_pwd = mysqli_real_escape_string($connect, $content_pwd);

    $query = "select * from content_table where content_idx='$content_idx' and content_pwd=password('$content_pwd') ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    if(!$data['content_idx']) {
        echo "<script>
                alert(\"비밀번호가 일치하지 않습니다\");
                history.back(1);
            </script> ";
            exit;
    }
    else {
        $query = "delete from content_table where content_idx = '$content_idx' ";
        mysqli_query($connect, $query);
        echo "<script>
	        location.href=\"list.php\";
        </script> ";
    }

?>