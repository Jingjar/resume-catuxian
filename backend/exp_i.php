<?php
include_once "../base.php";

?>
<form action="../api/edit_items.php" method="post">
    <table id="li">
        <tr>
            <td>工作內容</td>
            <td>刪除</td>
        </tr>
        <?php
        $exp_items = $Exp_i->all(['title_id' => $_GET['exp_t']]);
        echo $_GET['exp_t'];
        foreach ($exp_items as $exp_item) {
        ?>
            <tr>
                <td><input type="text" name="li[]" value="<?= $exp_item['li']; ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?=$exp_item['id']?>"></td>
                <input type="hidden" name="id[]" value="<?=$exp_item['id']?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="title_id" value="<?=$_GET['exp_t'];?>">
    <input type="submit" value="確認送出">
    <input type="reset" value="重設">
    <button type="button" onclick="moreOp()">新增更多事項</button>
</form>

<script src="../plugin/jquery-3.5.1.min.js"></script>
<script>
    function moreOp() {
        let op = `
        <tr>
            <td><input type="text" name="li[]" value=""></td>
            <td><input type="checkbox" name="del[]"></td>
            <input type="hidden" name="id[]" value="">
        </tr>
        `
        $("#li").append(op)
    }
</script>