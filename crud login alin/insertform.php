<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="insert.php">
        <p>username<input name="username" type="text"></p>
        <p>password <input name="password" type="password"></p>
        <div>
            <label>role</label>
            <select name="role" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
        </div>
        <button type="submit">OK</button>
    </form>
</body>
</html>