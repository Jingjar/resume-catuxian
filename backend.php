<?php
include_once "base.php";
$do = isset($_GET['do']) ? $_GET['do'] : "img";
$file = "backend/" . $do . ".php";
// echo $do;
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
<a href="?do=exp">經歷</a>
<a href="?do=exp_e">學歷</a>
<a href="?do=skill_f">前端技能</a>
<a href="?do=skill_b">後端技能</a>
<a href="?do=skill_g">美編技能</a>
<a href="?do=skill_o">其他技能</a>
<a href="?do=works">作品集</a>
<a href="?do=contact">聯絡我</a>
<!-- Button trigger modal -->
<?php
    if($do!='contact'){
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exp">
    <?= $addstr[$do]; ?>
</button>
<?php        
    }
?>

<!-- Modal -->
<div class="modal fade" id="exp" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"><?= $addstr[$do]; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="box">
                <?php
                include_once "modal/{$do}.php";
                ?>
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
    <div>
    <input type="hidden" value="<?=$do;?>" name="table">
        <button type="submit">送出</button>
        <button type="reset">重設</button>
    </div>
</form>
        <a href="api/logout.php">登出</a>
    </div>
</body>

</html>