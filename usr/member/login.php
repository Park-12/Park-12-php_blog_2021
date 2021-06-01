<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "로그인";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<hr>
<form action="doLogin.php">
  <div>
    <span>아이디</span>
    <input required placeholder="아이디를 입력해주세요." type="text" name = "userId">
  </div>

  <div>
    <span>비밀번호</span>
    <input required placeholder="비밀번호를 입력해주세요." type="password" name = "userPw">
  </div>

  <div>
    <input type="submit" value = "로그인">
  </div>
</form>
<?php require_once __DIR__ . "/../foot.php"; ?> 