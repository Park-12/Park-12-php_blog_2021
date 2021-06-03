<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_GET['id'], 0);

if ( $id == 0 ) {
  jsHistoryBackExit("번호를 입력해주세요.");
}


$sql = "
DELETE FROM article
WHERE id = '$id'
";
mysqli_query($dbConn, $sql);

?>
<script>
alert('<?=$id?>번 게시물이 삭제되었습니다.');
location.replace('list.php?id=<?=$id?>');
</script>