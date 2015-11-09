<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP SLIDER DAILY INVESTMENT</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
    <div class="panel-body">
        <h2>Exact investment amount</h2>
        <p>Here you can set how much you want to invest in every trade</p>
        <div class="panel-body calculator quantities disabled">
            <label>IN DEPOSIT CURRENCY</label>
            <div class="quantity">
                <i class="minus">-</i>
                <i class="plus">+</i>
                <input type="text" value="100"  maxlength="4" id="currency" />
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.minus').click(function () {
            $('.plus').removeClass("disabled");
            var input = $('#currency');
            var znak = input.val();
            var value = parseInt(znak);

            if (value <= 600 && value >= 101){
                var count = value - 100;
            }
            if (value == 100){
                var count = value - 50;
            }
            if (value == 50){
                var count = value - 20;
            }
            if (value == 30){
                var count = value - 10;
                $('.minus').toggleClass("disabled");
            }
            if (value == 20){
                var count = 20;
            }
            count = count < 1 ? 1 : count;
            input.val(count);
            input.change();
            return false;
        });
        $('.plus').click(function () {
            $('.minus').removeClass("disabled");
            var input = $('#currency');
            var znak = input.val();
            var value = parseInt(znak);

            if (value >= 100){
                input.val(value + 100);
            }
            if (value == 50){
                input.val(value + 50);
            }
            if (value == 30){
                input.val(value + 20);
            }
            if (value == 20){
                input.val(value + 10);
            }
            if (value <= 600 && value >= 500){
                $('.plus').toggleClass("disabled");
                $('.max-amount').toggleClass("active");
            }
            input.change();
            return false;
        });
    });
</script>
</body>
</html>