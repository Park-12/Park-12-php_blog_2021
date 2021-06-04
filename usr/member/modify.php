<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$id = $_SESSION['loginedMemberId'];

$sql = "
SELECT *
FROM `member`
WHERE id = '${id}'
";
$member = DB__getRow($sql);

if ( empty($member) ) {
  jsHistoryBackExit("존재하지 않는 회원입니다.");
}
?>
<?php
$pageTitle = "회원정보 수정, ${id}번 회원";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<hr>
<form action="doModify.php">

<div>
    <span>아이디</span>
    <?=$member['userId']?>
  </div>

  <div>
    <span>비밀번호</span>
    <input placeholder="비밀번호를 입력해주세요." type="password" name="userPw">
  </div>

  <div>
    <span>비밀번호 확인</span>
    <input placeholder="비밀번호를 한번 더 입력해주세요." type="password" name="userPwc">
  </div>

  <div>
    <span>이름</span>
    <input required placeholder="이름을 입력해주세요." type="text" name="name" value="<?=$member['name']?>">
  </div>

  <div>
    <span>닉네임</span>
    <input required placeholder="닉네임을 입력해주세요." type="text" name = "nickname" value="<?=$member['nickname']?>">
  </div>

  <div>
    <span>전화번호</span>
    <input required placeholder="전화번호를 입력해주세요." type="text" name = "cellphone" value="<?=$member['cellphone']?>">
  </div>

  <div>
    <span>이메일</span>
    <input required placeholder="이메일을 입력해주세요." type="email" name = "email" value="<?=$member['email']?>">
  </div>
  
  <div>
    <input type="submit" value = "정보 수정">
    <input onclick="location.href='.../article/list.php'" type = "submit" value = "리스트">
  </div>
</form>
<?php require_once __DIR__ . "/../foot.php"; ?> 