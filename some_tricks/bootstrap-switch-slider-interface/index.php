<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH AND SLIDER INTERFACE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/5.1.0/bootstrap-slider.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/5.1.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>BOOTSTRAP SWITCH AND SLIDER INTERFACE</h1>
<div class="interfaces">
    <div class="col-lg-4 col-md-4 col-sm-12 panel safe">
        <div class="module">
            <h3>
                Торговая стратегия
                <b>Сохраняй</b>
            </h3>
            <p>
                <span class="col-xs-9">Размер инвестиций</span>
                <span  class="col-xs-3 money" id="safe-investmentValue">25$</span>
            </p>
            <div class="col-xs-12 investment">
                <input id="safe-investment" class="slider-input"  type="text"  data-slider-tooltip="hide"
                       data-slider-min="25" data-slider-max="200"  data-slider-value="25"  data-slider-step="25" data-slider-ticks="[25, 50, 75, 100, 125, 150, 175, 200]">
                <script>
                    $("#safe-investment").bootstrapSlider().on("slide", function(slideEvt) {
                        $("#safe-investmentValue").text(slideEvt.value + '$');
                    });
                </script>
                <ul class="ticks">
                    <li>25</li>
                    <li>50</li>
                    <li>75</li>
                    <li>100</li>
                    <li>125</li>
                    <li>150</li>
                    <li>175</li>
                    <li>200</li>
                </ul>
            </div>

            <div class="switch">
                <input id="safe" class="social-trading-enabling-checkbox"  data-radio-all-off="true"  type="radio" name="switch">
                <div class="on-switch switcher button-on ">ВКЛ</div>
                <div class="on-switch switcher button-off active">ВЫКЛ</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 panel collect active">
        <div class="module">
            <h3>
                Торговая стратегия
                <b>Пополняй</b>
            </h3>
            <p>
                <span class="col-xs-9">Размер инвестиций</span>
                <span  class="col-xs-3 money" id="collect-investmentValue">50$</span>
            </p>
            <div class="col-xs-12 investment">
                <input id="collect-investment" class="slider-input"  type="text"  data-slider-tooltip="hide"
                       data-slider-min="25" data-slider-max="200"  data-slider-value="50"  data-slider-step="25" data-slider-ticks="[25, 50, 75, 100, 125, 150, 175, 200]">
                <script>
                    $("#collect-investment").bootstrapSlider().on("slide", function(slideEvt) {
                        $("#collect-investmentValue").text(slideEvt.value + '$');
                    });
                </script>
                <ul class="ticks">
                    <li>25</li>
                    <li>50</li>
                    <li>75</li>
                    <li>100</li>
                    <li>125</li>
                    <li>150</li>
                    <li>175</li>
                    <li>200</li>
                </ul>
            </div>
            <div class="switch ">
                <input id="collect" class="social-trading-enabling-checkbox"  data-radio-all-off="true" type="radio" name="switch" checked>
                <div class="on-switch switcher button-on active">ВКЛ</div>
                <div class="on-switch switcher button-off  ">ВЫКЛ</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 panel earn">
        <div class="module">
            <h3>
                Торговая стратегия
                <b>Зарабатывай</b>
            </h3>
            <p>
                <span class="col-xs-9">Размер инвестиций</span>
                <span  class="col-xs-3 money" id="earn-investmentValue">75$</span>
            </p>
            <div class="col-xs-12 investment">
                <input id="earn-investment" class="slider-input"  type="text"  data-slider-tooltip="hide"
                       data-slider-min="25" data-slider-max="200"  data-slider-value="75"  data-slider-step="25" data-slider-ticks="[25, 50, 75, 100, 125, 150, 175, 200]">
                <script>
                    $("#earn-investment").bootstrapSlider().on("slide", function(slideEvt) {
                        $("#earn-investmentValue").text(slideEvt.value + '$');
                    });
                </script>
                <ul class="ticks">
                    <li>25</li>
                    <li>50</li>
                    <li>75</li>
                    <li>100</li>
                    <li>125</li>
                    <li>150</li>
                    <li>175</li>
                    <li>200</li>
                </ul>
            </div>
            <div class="switch ">
                <input id="earn" class="social-trading-enabling-checkbox"  data-radio-all-off="true"  type="radio" name="switch">
                <div class="on-switch switcher button-on">ВКЛ</div>
                <div class="on-switch switcher button-off active">ВЫКЛ</div>
            </div>
        </div>
    </div>
</div> 
<script>
    $("body").addClass("collect");
    $("[name='switch']").bootstrapSwitch().on('switchChange.bootstrapSwitch', function() {
        $(".panel").removeClass("active");
        $(".button-on").removeClass("active");
        $(".button-off").addClass("active");
        $("body").removeClass();
    });
    $(".safe #safe").bootstrapSwitch().on('switchChange.bootstrapSwitch', function() {
        $(".safe .on-switch").toggleClass("active");
        $(".panel.safe").addClass("active");
        $("body").addClass("safe");
    });
    $(".collect #collect").bootstrapSwitch().on('switchChange.bootstrapSwitch', function() {
        $(".collect .on-switch").toggleClass("active");
        $(".panel.collect").addClass("active");
        $("body").addClass("collect");
    });
    $(".earn #earn").bootstrapSwitch().on('switchChange.bootstrapSwitch', function() {
        $(".earn .on-switch").toggleClass("active");
        $(".panel.earn").addClass("active");
        $("body").addClass("earn");
    });
</script>
</body>
</html>