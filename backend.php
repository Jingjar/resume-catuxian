<?php
include_once "base.php";
$do = isset($_GET['do']) ? $_GET['do'] : "img";
$file = "backend/" . $do . ".php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>履歷表管理頁面</title>
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bb4944e3f.js" crossorigin="anonymous"></script>
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
</head>

<body>
<a href="?do=img">我的大頭貼</a>
<a href="?do=about">關於我</a>
<a href="?do=exp">學經歷</a>
<a href="?do=skills">技能</a>
<a href="?do=works">作品集</a>
<a href="?do=contact">聯絡我</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
    <?= $addstr[$do]; ?>
</button>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $addstr[$do]; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                include_once "modal/{$do}.php";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<form action="api/edit.php" method="post">
    <?php
    if (file_exists($file)) {
        include $file;
    } else {
        include "backend/img.php";
    }
    ?>
    <div>
        <button type="submit">送出</button>
</form>
        <a href="api/logout.php">登出</a>
    </div>
</body>

</html>