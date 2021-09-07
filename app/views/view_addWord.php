<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить новое слово</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="word">
        <input type="text" name="word" id="word">
    </label>
    <label for="translation">
        <input type="text" name="translation" id="translation">
    </label>
    <label for="cat-id">
        <input type="text" name="cat-id" id="cat-id">
    </label>
    <input type="submit" name="submit" value="Добавить новое слово">
</form>
</body>
</html>
