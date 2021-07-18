<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <div>header</div>
    <div><?php
        require_once('MVC/Views/pages/home/'.$data['page'].'.php');
    ?> </div>
    <div>footer</div>

    <script src="./Public/js/jquery-3.6.0.min.js"></script>
    <script src="./Public/jsUser/main.js"></script>
</body>
</html>