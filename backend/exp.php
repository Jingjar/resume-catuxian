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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exp" onclick="change_modal(`backend/exp_i.php?table=exp_i&exp_t=<?= $row['title']; ?>`)">
                    編輯
                </button>
                <!-- Modal -->
            </td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

        </tr>
    <?php
    }
    ?>
</table>
<script>
    function change_modal(url) {
        $.get(url, function(data) {
            $('#box').html(data);
        });
        $("#modal_title").html("編輯工作內容");
    }
    $("#click").click(() => {
        $("#modal_title").html("新增經歷");
        $.get('modal/exp.php', function(data) {
            $('#box').html(data);
        });
    });
</script>