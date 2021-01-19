<?php $row=$Job->find(1);?>
<table class="mx-auto">
    <tr>
        <td>希望工作</td>
        <td><input type="text" name="job[]" value="<?= $row['job']; ?>"></td>

    </tr>
    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
</table>