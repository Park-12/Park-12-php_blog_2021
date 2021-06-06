<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$userId = $_GET['userId'];
$userPw = $_GET['userPw'];
$userPwc = $_GET['userPwc'];
$name = $_GET['name'];
$nickname = $_GET['nickname'];
$cellphone = $_GET['cellphone'];
$email = $_GET['email'];

$sql = "
INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
userId = '$userId',
userPw = '$userPw',
userPwc = '$userPwc',
`name` = '$name',
nickname = '$nickname',
cellphone = '$cellphone',
email = '$email',
delStatus = 0;
";

$id = DB__insert($sql);

?>
<script>
alert('회원가입이 완료되었습니다.');
location.replace('./login.php');
</script>