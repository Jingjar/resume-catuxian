<table class="mx-auto">
    <thead>
        <td>文字</td>
        <td>顯示</td>
        <td>刪除</td>
    </thead>
    <tbody>
        <?php
        $rows = $About->all();
        foreach ($rows as $row) {
        ?><tr>
                <td><textarea name="about[]" id="" cols="30" rows="10"><?= $row['about']; ?></textarea></td>
                <!-- <td><input type="textar" name="about[]" value=""></td> -->
                <td><input type="radio" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                </td>
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>