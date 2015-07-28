<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Styled Bootstrap Switch</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="switch">
    <input type="checkbox" name="switch" checked>
    <div class="on-switch button-on active">ON</div>
    <div class="on-switch button-off">OFF</div>
</div>
<script>
    $("[name='switch']").bootstrapSwitch().on('switchChange.bootstrapSwitch', function() {
        $(".on-switch").toggleClass("active")
    });
</script>
</body>
</html>