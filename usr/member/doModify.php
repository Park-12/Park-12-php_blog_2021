<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_GET['id'], 0);
$title = getStrValueOr($_GET['title'], 0);
$body = getStrValueOr($_GET['body'], 0);

if ( $id == 0 ) {
  jsHistoryBackExit("번호를 입력해주세요.");
}

if ( !$userId ) {
  jsHistoryBackExit("아이디를 입력해주세요.");
}

if ( !$userPw ) {
  jsHistoryBackExit("비밀번호를 입력해주세요.");
}

if ( !$userPwc ) {
  jsHistoryBackExit("비밀번호를 한번 더 입력해주세요.");
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
SET regDate = NOW(),
updateDate = NOW(),
userId = '$userId',
userPw = '$userPw',
userPwc = '$userPwc',
`name` = '$name',
nickname = '$nickname',
cellphone = '$cellphone',
email = '$email'
WHERE id = '$id';
";
DB__modify($sql);

?>
<script>
alert('<?=$nickname?>님의 회원정보가 수정되었습니다.');
location.replace('../article/list.php');
</script>