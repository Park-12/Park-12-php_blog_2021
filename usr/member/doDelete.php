<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_SESSION['loginedMemberId'], 0);

$sql = "
update `member`
set delStatus = 1
where id = '$id';
";
DB__modify($sql);

?>
<script>
alert('회원 탈퇴되었습니다.');
location.replace('./doLogout.php');
</script>