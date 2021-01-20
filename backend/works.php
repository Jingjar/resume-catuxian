<table class="mx-auto">
    <thead>
        <td>技能圖片</td>
        <td>標題</td>
        <td>介紹文字</td>
        <td>網址</td>
        <td>刪除</td>
    </thead>
    <?php
    $all = $Works->count();
    $div = 3;
    $pages = ceil($all / $div);
    $now = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $start = ($now - 1) * $div;

    $rows = $Works->all(" limit $start,$div");
    foreach ($rows as $row) {
    ?><tr>
            <td><img src="img/<?= $row['img']; ?>" style="height: 150px;"></td>
            <td><input type="text" name="title[]" value="<?= $row['title']; ?>"></td>
            <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
            <td><input type="text" name="href[]" value="<?= $row['href']; ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
            </td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
        </tr>
    <?php
    }
    ?>
</table>
<?php
for ($i = 1; $i <= $pages; $i++) {
    echo "<a href='?do=works&p=$i'>$i</a>";
}
?>