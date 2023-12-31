<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.scss">
    <link rel="stylesheet" href="style.css">
    <title>MP3</title>
</head>
<body>
    <div class="container">
        <?php
            include_once 'ajuda.php';

            if (isset($_GET['page'])){
                if (file_exists("pages/{$_GET['page']}.php")){
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/404.php';
                }
            } else {
                    include_once 'pages/album.php';
            }
        ?>
        <script src="script.js"></script>
    </div>
</body>
</html>