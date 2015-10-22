<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>YOUTUBE IMAGE LINK</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta name="language" content="en_US" />
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
<div class="video" id="video">
    <a class="intro-video introVid" data-video-block="#video" data-video-id="M7FIvfx5J10" data-video-width="853" data-video-height="480"  data-video-title="Video Name">
        <img src="video.jpg" alt="Your Video Image" />
        <i class="fa fa-play-circle"></i>
    </a>
    <script>
        jQuery('.intro-video').click(function(){
            var data = $(this).data();
            autoPlayVideo(data.videoId, data.videoWidth, data.videoHeight, $(data.videoBlock));
            if (productionMode){
                ga('send', 'event', 'Videos', 'Play', '' + data.videoTitle);
            }
            $(this).hide();
        });
        function autoPlayVideo(vcode, width, height, $element){
            "use strict";
            $element.html('<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&amp;controls=0&amp;showinfo=0&wmode=transparent&origin=https://algomonster.com" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');

        }
    </script>
</div>
</body>
</html>