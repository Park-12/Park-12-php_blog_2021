<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$id = getIntValueOr($_GET['id'], 0);
$title = getStrValueOr($_GET['title'], 0);
$body = getStrValueOr($_GET['body'], 0);

if ( $id == 0 ) {
  jsHistoryBackExit("번호를 입력해주세요.");
}

if ( !$title ) {
  jsHistoryBackExit("제목을 입력해주세요.");
}

if ( !$body ) {
  jsHistoryBackExit("내용을 입력해주세요.");
}


$sql = "
UPDATE article
SET regDate = NOW(),
updateDate = NOW(),
title = '${title}',
`body` = '${body}'
WHERE id = '${id}'
";
DB__modify($sql);

?>
<script>
alert('<?=$id?>번 게시물이 수정되었습니다.');
location.replace('detail.php?id=<?=$id?>');
</script>