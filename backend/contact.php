<?php $row=$Contact->find(1);?>
<table>
    <tr>
        <td>電子郵件</td>
        <td><input type="text" name="email[]" value="<?= $row['email']; ?>"></td>

    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="phone[]" value="<?= $row['phone']; ?>"></td>
    </tr>
    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
</table>