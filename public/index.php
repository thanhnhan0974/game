<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo env('APP_NAME', 'Game')?></title>
</head>
<body>
    <div class="root">
        <?php
            component('sidebar/index.php');
        ?>
    </div>
</body>
</html>