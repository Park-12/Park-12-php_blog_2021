<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_SESSION['loginedMemberId'], 0);

$sql = "
DELETE FROM `member`
WHERE id = '$id'
";
DB__delete($sql);

?>
<script>
alert('회원 탈퇴되었습니다.');
location.replace('../member/doLogout.php');
</script>