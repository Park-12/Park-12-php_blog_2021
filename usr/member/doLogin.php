<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['userId']) == false ) {
  echo "userId를 입력해주세요.";
  exit;
}

if ( isset($_GET['userPw']) == false ) {
  echo "userPw를 입력해주세요.";
  exit;
}

$userId = $_GET['userId'];
$userPw = $_GET['userPw'];

$sql = "
SELECT *
FROM `member` M
WHERE userId = '${userId}'
";
$member = DB__getRow($sql);

if ( empty($member) ) {
  echo "존재하지 않는 회원입니다.";
  exit;
}

if ( $member['userPw'] != $userPw ) {
  echo "비밀번호가 일치하지 않습니다.";
  exit;
}

$_SESSION['loginedMemberId'] = $member['id'];
?>
<script>
alert('<?=$member['nickname']?>님 환영합니다.');
location.replace('../article/list.php');
</script>