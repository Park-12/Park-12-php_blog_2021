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

// mysqli_real_escape_string 해킹 방어 방법
//$loginId = mysqli_real_escape_string($dbConn, $_GET['loginId']);
//$loginPw = mysqli_real_escape_string($dbConn, $_GET['loginPw']);

$userId = $_GET['userId'];
$userPw = $_GET['userPw'];

$sql = "
SELECT *
FROM `member` AS M
WHERE M.userId = ?
AND M.userPw = ?
";

$stmt = $dbConn->prepare($sql);
$stmt ->bind_param('ss', $userId, $userPw);
$stmt ->execute();
$result = $stmt->get_result();
$member = $result->fetch_assoc();

if ( empty($member) ) {
  jsHistoryBackExit("일치하는 회원이 존재하지 않습니다.");
}

if ( $member['delStatus'] == 1 ) {
  jsHistoryBackExit("일치하는 회원이 존재하지 않습니다.");
}

$_SESSION['loginedMemberId'] = $member['id'];

jsLocationReplaceExit("../article/list.php", "{$member['nickname']}님 환영합니다.");
