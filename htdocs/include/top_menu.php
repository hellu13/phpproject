<?
  session_start();
  print($_SESSION['user_id']);
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/board/list.php">PHP BOARD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/board/list.php">Home</a></li>
      <li><a href="#">준비중</a></li>
      <li><a href="#">준비중</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <?
      if($_SESSION['user_id']) {
      ?>
      <li><a>Welcome, <?=$_SESSION['user_id']?></a></li>
      <li><a href="/user/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <? } else {?>
        <li><a href="/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?}?>
      <li><a href="/user/join.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>