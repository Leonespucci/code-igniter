<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <h1><?= $blog['title']; ?></h1>
    <br>
    <p><?= $blog['content']; ?></p>
    <br>
    <br><br>
    <h5>di buat pada tanggal: <?= $blog['date']; ?></h5>
</body>
</html>