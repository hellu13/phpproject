<?
    include "../include/lib.php";

    $content_writer_name = $_POST['content_writer_name'];
    $content_subject = $_POST['content_subject'];
    $content_text = $_POST['content_text'];
    $content_pwd = $_POST['content_pwd'];
    $content_date = date("Y-m-d H:i:s");
    $content_writer_ip = $_SERVER["REMOTE_ADDR"];

    $content_writer_name = mysqli_real_escape_string($connect, $content_writer_name);
    $content_subject = mysqli_real_escape_string($connect, $content_subject);
    $content_text = mysqli_real_escape_string($connect, $content_text);
    $content_pwd = mysqli_real_escape_string($connect, $content_pwd);
    
    $query = "insert into content_table(content_subject, content_text, content_writer_name, content_writer_ip, content_date, content_pwd) 
        values('$content_subject', '$content_text', '$content_writer_name', '$content_writer_ip', '$content_date', password('$content_pwd'))" ;
    
    mysqli_query($connect, $query);
?>
<script>
	location.href="list.php"
</script>
