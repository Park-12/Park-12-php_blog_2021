<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_SESSION['loginedMemberId'], 0);
$userId = getStrValueOr($_GET['userId'], "");
$userPw = getStrValueOr($_GET['userPw'], "");
$userPwc = getStrValueOr($_GET['userPwc'], "");
$name = getStrValueOr($_GET['name'], "");
$nickname = getStrValueOr($_GET['nickname'], "");
$cellphone = getStrValueOr($_GET['cellphone'], "");
$email = getStrValueOr($_GET['email'], "");

if ( $userPw ) {
  if ( !$userPwc ) {
    jsHistoryBackExit("비밀번호를 한번 더 입력해주세요.");
  }

  if ( $userPw != $userPwc ) {
    jsHistoryBackExit("비밀번호가 일치하지 않습니다.");
  }
}

if ( !$name ) {
  jsHistoryBackExit("이름을 입력해주세요.");
}

if ( !$nickname ) {
  jsHistoryBackExit("닉네임을 입력해주세요.");
}

if ( !$cellphone ) {
  jsHistoryBackExit("전화번호를 입력해주세요.");
}

if ( !$email ) {
  jsHistoryBackExit("이메일을 입력해주세요.");
}

$sql = "
UPDATE `member`
SET updateDate = NOW(),
";

if ( $userPw ) {
  $sql .= "
  userPw = '$userPw',
  ";
}

$sql .= "
`name` = '$name',
nickname = '$nickname',
cellphone = '$cellphone',
email = '$email'
WHERE id = '$id'
";
DB__modify($sql);

?>
<script>
alert('<?=$nickname?>님의 회원정보가 수정되었습니다.');
location.replace('../article/list.php');
</script>