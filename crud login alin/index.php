<?php
$db = new PDO("mysql:host=localhost;dbname=hospital",'root','');
$query = $db->query('select*from user');
?>
<a href="insertform.php">tambah </a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>role</th>
        <th>aksi</th>
    </tr>

<?php
while ($data = $query->fetch()) :?>
    <tr>
    <td><?= $data['id']?></td>
        <td><?= $data['username'] ?></td>
        <td><?= $data['password'] ?></td>
        <td><?= $data['role'] ?></td>
        <td>
        <a href="edit_form.php?id=<?= $data['id']; ?> "> Update
        </a> |
        <a href="delete.php?id= <?= $data['id']; ?>">
         hapus
    </a>
    </td>
    </tr>

<?php endwhile ?>

</table>