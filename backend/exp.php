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
    foreach ($rows as $row) {
    ?><tr>
            <td><input type="text" name="title[]" value="<?= $row['title']; ?>"></td>
            <td><input type="date" name="start[]" value="<?= $row['start']; ?>"></td>
            <td><input type="date" name="end[]" value="<?= $row['end']; ?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                編輯 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="Modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">編輯工作內容</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                include_once "modal/exp_items.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

        </tr>
    <?php
    }
    ?>
</table>