<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MITsignals main interface</title>
    <meta name="keywords" content="MITsignals main interface" />
    <meta name="description" content="MITsignals main interface" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="timer.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="interface">
    <div class="line dark logo"></div>
    <div class="line timer">
        <img src="color-circle.png" alt="MITsignals Circle Timer" class="circle-timer fa-spin"/>
                    <span>
                        TIME LEFT TO OPEN TRADES
                    </span>
        <ul class="count-down">
            <li class="result-hour"></li>
            <li>:</li>
            <li class="result-minute"></li>
            <li>:</li>
            <li class="result-second"></li>
        </ul>
    </div>
    <div class="line dark head">
        <div class="col-md-4"><span>ASSET</span></div>
        <div class="col-md-4"><span>DIRECTION</span></div>
        <div class="col-md-4"><span>STRENGTH</span></div>
    </div>
    <div class="line index odd">
        <div class="col-md-4"><span class="asset">GBPCHF</span></div>
        <div class="col-md-4"><span class="direction put"></span></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-line">
                    <span class="progress-bar put" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="line index even">
        <div class="col-md-4"><span class="asset">AUDCHF</span></div>
        <div class="col-md-4"><span class="direction put"></span></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-line">
                    <span class="progress-bar put" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="line index odd">
        <div class="col-md-4"><span class="asset">GBPCAD</span></div>
        <div class="col-md-4"><span class="direction call"></span></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-line">
                    <span class="progress-bar call" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="line index even">
        <div class="col-md-4"><span class="asset">GBPJPY</span></div>
        <div class="col-md-4"><span class="direction put"></span></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-line">
                    <span class="progress-bar put" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 24%;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="line index odd">
        <div class="col-md-4"><span class="asset">USDJPY</span></div>
        <div class="col-md-4"><span class="direction call"></span></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-line">
                    <span class="progress-bar call" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="line action">
        <p>Signals generated at 07-14-2015 16:00:00</p>
        <div class="col-md-4">
            <span class="text">VISIT WEB SITE</span>
            <span class="icon"><i class="mit-logo"></i></span>
        </div>
        <div class="col-md-4">
            <span class="text">HOW TO USE SIGNALS</span>
            <span class="icon"><i class="fa fa-question"></i></span>
        </div>
        <div class="col-md-4">
            <span class="text">CONTACTS US</span>
            <span class="icon"><i class="fa fa-envelope"></i></span>
        </div>
    </div>
    <div class="line dark indicator">
        <div class="col-md-6">
            <span class="connection"></span>
            <span class="text">Conected to server</span>
        </div>
        <div class="col-md-6">
            <span class="icon fa fa-check"></span>
            <span class="text">Your copy  verified</span>
        </div>
    </div>
</div>
</body>
</html>