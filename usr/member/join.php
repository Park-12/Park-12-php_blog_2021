<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "회원가입";

?>
<?php require_once __DIR__ . "/../head.php"; ?>
<hr>
<form action="doJoin.php">
  <div>
    <span>아이디</span>
    <input required placeholder="아이디를 입력해주세요." type="text" name = "userId">
  </div>

  <div>
    <span>비밀번호</span>
    <input required placeholder="비밀번호를 입력해주세요." type="password" name = "userPw">
  </div>

  <div>
    <span>비밀번호 확인</span>
    <input required placeholder="비밀번호를 한번 더 입력해주세요." type="password" name = "userPwc">
  </div>

  <div>
    <span>이름</span>
    <input required placeholder="이름을 입력해주세요." type="text" name = "name">
  </div>

  <div>
    <span>닉네임</span>
    <input required placeholder="닉네임을 입력해주세요." type="text" name = "nickname">
  </div>

  <div>
    <span>전화번호</span>
    <input required placeholder="전화번호를 입력해주세요." type="text" name = "cellphone">
  </div>

  <div>
    <span>이메일</span>
    <input required placeholder="이메일을 입력해주세요." type="email" name = "email">
  </div>

  <div>
    <input type="submit" value = "회원가입">
  </div>
</form>
<?php require_once __DIR__ . "/../foot.php"; ?> 