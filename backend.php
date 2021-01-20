<?php
include_once "base.php";
if(empty($_SESSION['login'])){
    to("index.php");
}
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
    <style>
        /*側邊選單*/
        .user {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 20%;
            text-align: center;
            background: #ccc;
        }
        .user a {
            text-align: center;
            color: white;
            display: block;
        }
        .main thead{
            border-bottom: 2px solid #ccc;
        }
        .btn:hover{
            color:white;
            font-weight: 900;
        }
    </style>
</head>

<body>
    <nav class="myNavbar">
        
    </nav>
    <aside class="user bg-dark">
        <img src="img/<?= $Img->find(['sh' => 1])['img']; ?>" class="rounded mx-auto d-none d-md-block rounded-circle my-2 " style="width:150px;height:150px">
        <a class="btn" href="?do=img">我的大頭貼</a>
        <a class="btn" href="?do=about">關於我</a>
        <a class="btn" href="?do=exp">經歷</a>
        <a class="btn" href="?do=exp_e">學歷</a>
        <a class="btn" href="?do=skill">技能</a>
        <a class="btn" href="?do=works">作品集</a>
        <a class="btn" href="?do=job">希望工作</a>
        <a class="btn" href="?do=visitors">訪客留言</a>
        <?php
        
        if ($do != 'job' && $do != 'visitors') {
        ?>
            <button type="button" class="btn btn-info mx-auto" data-toggle="modal" data-target="#exp" id="click">
                <?= $addstr[$do]; ?>
            </button>
        <?php
        }
        ?>
        <a class="btn" href="api/logout.php">登出</a>
    </aside>
    <section class="container mx-auto w-75 text-center mt-2 main">
        <h5 class="font-weight-bold pb-2">嗨!<?=$_SESSION['login'];?></h5>
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
                <div class="mt-3">
                    <input type="hidden" value="<?= $do; ?>" name="table">
                    <button class="btn btn-primary" type="submit">送出</button>
                    <button class="btn btn-primary" type="reset">重設</button>
                </div>
        </form>

        </div>
    </section>
</body>

</html>