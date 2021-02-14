<?
    include "../include/lib.php";

    $content_idx = $_GET['content_idx'];
    $content_idx = mysqli_real_escape_string($connect, $content_idx);

    $query = "delete from content_table where content_idx = '$content_idx' ";

    mysqli_query($connect, $query);

?>
<script>
    location.href="list.php";
</script>