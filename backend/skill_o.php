<table>
    <tr>
        <td>技能圖片</td>
        <td>標題</td>
        <td>介紹文字</td>
        <td>顯示</td>
        <td>刪除</td>
    </tr>
    <?php
    $rows = $Skill_o->all();
    foreach ($rows as $row) {
    ?><tr>
            <td><img src="img/<?= $row['img']; ?>" style="height: 300px;"></td>
            <td><input type="text" name="title[]" value="<?= $row['title']; ?>"></td>
            <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
            </td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
    <?php
    }
    ?>
</table>