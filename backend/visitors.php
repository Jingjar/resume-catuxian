訪客留言

<table class="mx-auto">
    <thead>
        <td>姓名</td>
        <td>電子信箱</td>
        <td>Email</td>
        <td>主旨</td>
        <td>訊息</td>
        <td>回復</td>
    </thead>
<?php
$visitors=$Visitors->all();
foreach($visitors as $visitor){
?>
    <tr>
        <td><?=$visitor['name'];?></td>
        <td><?=$visitor['email'];?></td>
        <td><?=$visitor['phone'];?></td>
        <td><?=$visitor['subject'];?></td>
        <td><?=$visitor['message'];?></td>
        <td><input type="checkbox" name="reply[]" value="<?= $visitor['id']; ?>" <?= ($visitor['reply'] == 1) ? "checked" : ""; ?>></td>
        <input type="hidden" name="id[]" value="<?= $visitor['id']; ?>">
    </tr>
<?php
}
?>
</table>