<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle?></title>
</head>
<body>
    <h1><?=$pageTitle?></h1>
    <hr>
    <?php if ( !isset($_SESSION['loginedMemberId']) ) { ?>
    <a href="../member/login.php">로그인</a>
    <?php } ?> 

    <?php if ( isset($_SESSION['loginedMemberId']) ) { ?>
    <a href="../article/write.php">글 작성</a>
    <?php } ?>

    <?php if ( isset($_SESSION['loginedMemberId']) ) { ?>
    <a href="../member/modify.php">회원정보 수정</a>
    <?php } ?>

    <?php if ( isset($_SESSION['loginedMemberId']) ) { ?>
    <a href="../member/doLogout.php">로그아웃</a>
    <?php } ?>

    <?php if ( isset($_SESSION['loginedMemberId']) ) { ?>
        <a href="../member/join.php">회원탈퇴</a>
    <?php } ?>

    <?php if ( !isset($_SESSION['loginedMemberId']) ) { ?>
    <a href="../member/join.php">회원가입</a>
    <?php } ?>