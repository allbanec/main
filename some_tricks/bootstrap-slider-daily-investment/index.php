<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP SLIDER DAILY INVESTMENT</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/5.1.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="content">
        <div class="panel-body">
            <h2>Daily investment amount</h2>
            <p>Here you can set how much you want to invest in every trade</p>
            <div class="panel-body">
                <input type="radio" class="amount" id="percent" checked /> <label>Percent of deposit</label>
                <div class="panel-body calculator">
                    <div class="roller">
                        <input id="slider" data-slider-id='sliderSlider' type="text" data-slider-min="0.1" data-slider-max="100" data-slider-step="20" data-slider-value="20" data-slider-tooltip="hide" data-slider-ticks-labels="['0,1%', '20%', '40%', '60%', '80%', '100%']" />
                        <script>
                            $("#slider").on("slide", function(slideEvt) {
                                $(".slider-handle").text(slideEvt.value + '%');
                            });
                            var $slider = $("#slider").val();
                            $(".slider-handle").text($slider + '%');
                        </script>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/5.1.0/bootstrap-slider.min.js"></script>
<script>
    $("#slider").slider({
        ticks: [0.1, 20, 40, 60, 80, 100],
        ticks_positions: [0.1, 20, 40, 60, 80, 100],
        ticks_labels: ['0,1%', '20%', '40%', '60%', '80%', '100%']
    });
    $("#slider").on("slide", function(slideEvt) {
        $(".slider-handle").text(slideEvt.value + '%');
    });
    var $slider = $("#slider").val();
    $(".slider-handle").text($slider + '%');
</script>
</body>
</html>