<?
    include "../include/lib.php";

    $user_name = $_POST['user_name'];
    $user_id = $_POST['user_id'];
    $user_pwd = $_POST['user_pwd'];

    $user_name = mysqli_real_escape_string($connect, $user_name);
    $user_id = mysqli_real_escape_string($connect, $user_id);
    $user_pwd = mysqli_real_escape_string($connect, $user_pwd);

    $query = "insert into user_table(user_name, user_id, user_pwd) 
        values('$user_name', '$user_id', password('$user_pwd'))";
    
    mysqli_query($connect, $query);
?>
<script>
    alert("가입이 완료되었습니다");
    location.href="login.php"
</script>