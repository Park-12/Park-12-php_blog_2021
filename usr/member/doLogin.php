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

$sql = DB__secSql();
$sql->add("SELECT *");
$sql->add("FROM `member` AS M");
$sql->add("WHERE M.userId = ?", $userId);
$sql->add("AND M.userPw = ?", $userPw);

$member = DB__getRow2($sql);

if ( empty($member) ) {
  jsHistoryBackExit("일치하는 회원이 존재하지 않습니다.");
}

if ( $member['delStatus'] == 1 ) {
  jsHistoryBackExit("일치하는 회원이 존재하지 않습니다.");
}

$_SESSION['loginedMemberId'] = $member['id'];

jsLocationReplaceExit("../article/list.php", "{$member['nickname']}님 환영합니다.");
