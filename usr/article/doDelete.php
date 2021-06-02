<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

if ( isset($_GET['id']) == false ) {
  echo "id을 입력해주세요.";
  exit;
}

$id = intval($_GET['id']);

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