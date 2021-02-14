<?
    include "../include/lib.php";

    $content_idx = $_POST['content_idx'];
    $content_subject = $_POST['content_subject'];
    $content_text = $_POST['content_text'];

    $content_subject = mysqli_real_escape_string($connect, $content_subject);
    $content_text = mysqli_real_escape_string($connect, $content_text);
    
    $query = "update content_table 
            set content_subject = '$content_subject', content_text = '$content_text'
            where content_idx = '$content_idx' ";
    
    mysqli_query($connect, $query);
?>
<script>
	location.href="read.php?content_idx=<?=$content_idx?>";
</script>
