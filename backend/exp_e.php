<table class="mx-auto">
    <thead>
        <td>照片</td>
        <td>學歷</td>
        <td>開始時間</td>
        <td>結束時間</td>
        <td>顯示</td>
        <td>刪除</td>
    </thead>
    <tbody>
    <?php
    $rows = $Exp_e->all();
    foreach ($rows as $row) {
    ?><tr>
            <td><img src="img/<?= $row['img']; ?>" style="width: 150px;"></td>
            <td><input type="text" name="edu[]" value="<?= $row['edu']; ?>"></td>
            <td><input type="date" name="start_e[]" value="<?= $row['start_e']; ?>"></td>
            <td><input type="date" name="end_e[]" value="<?= $row['end_e']; ?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

        </tr>
    <?php
    }
    ?>
    </tbody>
</table>