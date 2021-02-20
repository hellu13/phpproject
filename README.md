# PHP 프로젝트(진행중)  

## 사용 언어
+ HTML, CSS(BootStrap3), JavaScript
+ PHP
  
## 사용 프로그램
+ Visual Studio Code
+ XAMPP(Apache, MySql), phpMyAdmin
   
  
## 현재 진행 사항
+ 화면 구성
  + 상단/하단 메뉴 구성  

+ 자유 게시판
  + 글 작성
    > 주요 코드  
    
    [write.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/write.php) / [write_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/write_pro.php)  
    > 구현 화면  
    
    <img width="540" alt="작성" src="https://user-images.githubusercontent.com/46749717/107932329-c685e600-6fc0-11eb-8f17-d7915cab7d38.png">  
    
    
  + 글 읽기  
    > 주요 코드  
    
    [read.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/read.php)  
  
    > 구현 화면  
    
    <img width="540" alt="읽기" src="https://user-images.githubusercontent.com/46749717/107932335-c8e84000-6fc0-11eb-957b-e5ce921a7e38.png">  
  
  + 글 수정
    + 해당 글 비밀번호 입력 후 수정 페이지 이동  
    
    > 주요 코드  
    
    [modify_chk.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/modify_chk.php) / [modify_chk_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/modify_chk_pro.php) / [modify.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/modify.php) / [modify_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/modify_pro.php)  
    
    > 구현 화면  
    
    <img width="540" alt="수정" src="https://user-images.githubusercontent.com/46749717/107932322-c554b900-6fc0-11eb-9e81-70897d6dca5f.png">  
      
      
  + 글 삭제  
    + 해당 글 비밀번호 입력 후 삭제  
    
    > 주요 코드  
    
    [delete.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/delete.php)  
    
  + 글 목록 출력
    + 인덱스 순으로 게시글 출력  
    
    > 주요 코드  
    
    [list.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/list.php)  
    
    > 구현 화면  
    
    <img width="540" alt="리스트" src="https://user-images.githubusercontent.com/46749717/107932295-bc63e780-6fc0-11eb-9f34-d85e43652941.png">  
      
+ 회원 관리
  + 회원 가입
    + 비밀번호와 비밀번호 확인 값이 다를 경우 경고창 출력
    + ajax 비동기 방식으로 아이디 중복 확인 검사
  + 로그인/로그아웃
    + 로그인 성공 시 사용자 정보 세션 영역에 저장
    + 로그인 여부에 따른 로그인/로그아웃 버튼 선택적 출력  
        
    > 주요 코드  
    
    [login.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/login.php) / [login_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/login_pro.php) / [logout.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/logout.php)  
    
   
    
    
 
