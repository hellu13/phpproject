<?
    // 데이터 베이스 연결
    error_reporting(1);
    ini_set("display_errors", 1);

    $connect = mysqli_connect("localhost", "scott", "admin1234", "scott");
    
    if(mysqli_connect_error()) {
        echo "mysql 접속중 오류가 발생했습니다";
        echo mysqli_connect_error();
    }

    