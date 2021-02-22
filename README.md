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
    + 파일 업로드 처리 
    > 주요 코드  
    
    [write.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/write.php) / [write_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/write_pro.php)  
    > 구현 화면  
    
    <img width="540" alt="첨부1" src="https://user-images.githubusercontent.com/46749717/108591094-2d811180-73aa-11eb-839c-0c8aaeb2fdf7.png">  
    
    
  + 글 읽기  
    > 주요 코드  
    
    [read.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/read.php)  
  
    > 구현 화면  
    
    <img width="540" alt="첨부2" src="https://user-images.githubusercontent.com/46749717/108591098-2e19a800-73aa-11eb-8f22-4f63fdc01471.png">  
  
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
    + 조회수 출력 - 특정 글 조회시 해당 글에 대한 유효시간을 가진 쿠키값을 생성하여 쿠키값이 존재할 시 조회수 증가를 제한
    + 페이징 처리
    ```
    페이징 구현 
    > 전체 페이지 개수 = 전체 글 개수 / 페이지당 글의 개수 ( 나머지 발생시 전체 페이지 개수 1 증가)
    > 페이지 버튼 최소값 = {(현재 페이지 번호 - 1) / 페이지 당 글의 개수} * 페이지당 글의 개수 + 1
    > 페이지 버튼 최대값 = 페이지 버튼 최소값 + 페이지당 글의 개수 - 1 ( 페이지 버튼 최대값이 전체 페이지 개수보다 클 경우, 페이지 버튼 최대값 = 전체 페이지 개수)
    > 이전 페이지 = 페이지 버튼 최소값 - 1
    > 다음 페이지 = 페이지 버튼 최대값 + 1 (전체 페이지개수보다 다음 페이지가 클 경우, 다음 페이지 = 전체 페이지 개수)
    ```
    
    > 주요 코드  
    
    [list.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/list.php) / [read.php](https://github.com/hellu13/phpproject/blob/main/htdocs/board/read.php)  
    
    
    > 구현 화면  
    
    <img width="540" alt="페이징" src="https://user-images.githubusercontent.com/46749717/108706869-9905e300-7552-11eb-859d-ca36afed6e49.png">

  
      
+ 회원 관리
  + 회원 가입
    + 비밀번호와 비밀번호 확인 값이 다를 경우 경고창 출력
    + ajax 비동기 방식으로 아이디 중복 확인 검사
  + 로그인/로그아웃
    + 로그인 성공 시 사용자 정보 세션 영역에 저장
    + 로그인 여부에 따른 로그인/로그아웃 버튼 선택적 출력  
        
    > 주요 코드  
    
    [login.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/login.php) / [login_pro.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/login_pro.php) / [logout.php](https://github.com/hellu13/phpproject/blob/main/htdocs/user/logout.php)  
    
   
    
    
 
