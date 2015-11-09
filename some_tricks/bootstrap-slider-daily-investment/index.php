<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPEED OPTIONS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="calculator">
        <div class="well">
            <div id="myCars" class="carousel slide">
                <div class="carousel-inner" role="tablist">
                    <div class="item active">
                        <div class="row-fluid">
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-1" class="thumbnail car-1 active" aria-controls="car-1" role="tab" data-toggle="tab" >
                                    <span>Opel Astra GTC</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-2" class="thumbnail car-2" aria-controls="car-2" role="tab" data-toggle="tab">
                                    <span>Audi A5 cabrio</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-3" class="thumbnail car-3" aria-controls="car-3" role="tab" data-toggle="tab">
                                    <span>Porsche Boxster</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-4" class="thumbnail car-4" aria-controls="car-4" role="tab" data-toggle="tab">
                                    <span>Chevrolet Camaro</span>
                                </a></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row-fluid">
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-5" class="thumbnail car-5" aria-controls="car-5" role="tab" data-toggle="tab">
                                    <span>Alfa Romeo 4c</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-6" class="thumbnail car-6" aria-controls="car-6" role="tab" data-toggle="tab">
                                    <span>Mercedes SL</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-7" class="thumbnail car-7" aria-controls="car-7" role="tab" data-toggle="tab">
                                    <span>Chevrolet Corvette Stingray</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-8" class="thumbnail car-8" aria-controls="car-8" role="tab" data-toggle="tab">
                                    <span>Mercedes GT AMG</span>
                                </a></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row-fluid">
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-9" class="thumbnail car-9" aria-controls="car-9" role="tab" data-toggle="tab">
                                    <span>Lamborghini huracan</span>
                                </a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3" role="presentation"><a href="#car-10" class="thumbnail car-10" aria-controls="car-10" role="tab" data-toggle="tab">
                                    <span>Porsche 911 Turbo</span></a>
                                </a></div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCars" data-slide="prev" id="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCars" data-slide="next" id="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
            <script>
                $('.thumbnail').click(function() {
                    $(".thumbnail.active").removeClass("active");
                    $(this).addClass("active");
                });
            </script>
        </div>
        <div class="tab-content" id="car-tab">
            <div role="tabpanel" class="tab-pane active" id="car-1">
                <h3>Opel Astra GTC <small>$20 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="12" style="width: 95%;">
                                11 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="250" aria-valuemin="0" aria-valuemax="5000" style="width: 8%;">
                                $250
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-2">
                <h3>Audi A5 cabrio <small>$30 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="12" style="width: 85%;">
                                8 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="500" aria-valuemin="0" aria-valuemax="5000" style="width: 16%;">
                                $500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-3">
                <h3>Porsche Boxster <small>$57 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="12" style="width: 85%;">
                                8 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="1000" aria-valuemin="0" aria-valuemax="5000" style="width:32%;">
                                $1 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-4">
                <h3>Camaro <small>$60 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="12" style="width: 85%;">
                                8 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="1000" aria-valuemin="0" aria-valuemax="5000" style="width: 32%;">
                                $1 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-5">
                <h3>Alfa Romeo 4c <small>$72 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="12" style="width: 60%;">
                                5 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="1500" aria-valuemin="0" aria-valuemax="5000" style="width: 48%;">
                                $1 500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-6">
                <h3>Mercedes SL <small>$120 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="12" style="width: 85%;">
                                8 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="2000" aria-valuemin="0" aria-valuemax="5000" style="width: 64%;">
                                $2 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-7">
                <h3>Chevrolet Corvette Stingray <small>$130 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="12" style="width: 90%;">
                                9 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="2000" aria-valuemin="0" aria-valuemax="5000" style="width:64%;">
                                $2 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-8">
                <h3>Mercedes GT AMG <small>$170 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="12" style="width: 85%;">
                                8 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="3000" aria-valuemin="0" aria-valuemax="5000" style="width:96%;">
                                $3 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-9">
                <h3>lamborghini huracan <small>$200 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="12" style="width: 40%;">
                                5 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="5000" aria-valuemin="0" aria-valuemax="5000" style="width:100%;">
                                $5 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="car-10">
                <h3>Porsche 911 Turbo <small>$250 000</small></h3>
                <div class="calculation">
                    <div class="col-md-1">Time</div>
                    <div class="col-md-11 time-progresses">
                        <div class="progress time-line">
                            <div class="progress-bar month" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="12" style="width: 50%;">
                                11 months
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">Deposit</div>
                    <div class="col-md-11 deposit-progresses">
                        <div class="progress deposit-line">
                            <div class="progress-bar deposit" role="progressbar" aria-valuenow="5000" aria-valuemin="0" aria-valuemax="5000" style="width: 20%;">
                                $5 000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>