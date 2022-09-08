<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=hospital",'root','');
$query = $db->query("select * from user where id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="edit.php">
        <p>username : <input name="username" type="text" value="<?= $data['username'] ?>"></p>
        <p>password : <input name="password" type="password"  value="<?= $data['password'] ?>"></p>
        <div class="form-floating" >
            <select name="role" id="" class="form-select">
                <option value="admin"<?= $data['role'] == '1' ? 'selected' : '' ?>>Admin</option>
                <option value="user"<?= $data['role'] == '2' ? 'selected' : '' ?>>User</option>
            </select>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>