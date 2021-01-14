<table>
    <tr>
        <td>工作經歷</td>
        <td>開始時間</td>
        <td>結束時間</td>
        <td>顯示</td>
        <td>刪除</td>
        <td>修改</td>
    </tr>
    <?php
    $rows = $Exp_t->all();
    foreach ($rows as $key => $row) {
    ?><tr>
            <td><input type="text" name="title[]" value="<?= $row['title']; ?>"></td>
            <td><input type="date" name="start[]" value="<?= $row['start']; ?>"></td>
            <td><input type="date" name="end[]" value="<?= $row['end']; ?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
            <td>
                <a class="btn btn-primary" href="backend/exp_i.php?table=exp_i&exp_t=<?=$row['title'];?>" target="_blank">編輯</a>
            </td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

        </tr>
    <?php
    }
    ?>
</table>
