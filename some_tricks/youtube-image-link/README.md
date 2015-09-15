# YouTube image link
## YouTube Preview image link

 We don`t like preview of our Youtube video...

  Can we change it?

  Of course!

 We use Jquery and preview image, HTML and CSS(SCSS)

OK!

1. You need to make a link:

    <a class="intro-video" data-video-block="#video" data-video-id="M7FIvfx5J10" data-video-width="853" data-video-height="480"  data-video-title="Your Video Title">
        <img src="../img/video.jpg" alt="Your Video Alt />
        <i class="fa fa-play-circle"></i>
    </a>


There:
 1. data-video-block="#video" - the block where your video will be translate. Use the block id.
 2. data-video-id="M7FIvfx5J10" - is the video id. You can find it in YouTube video settings.
 3. data-video-width="853" - the video width. You can find it in YouTube video settings.
 4. data-video-height="480" - the video height. You can find it in YouTube video settings.
 5. data-video-title="Your Video Title" - the video name. Optional.
 6. image - is a video preview image. Use the same width and height.
 7. i - play icon. Use [Font Awesome icons](http://fontawesome.io/icon/play-circle/). You can use your own icons of course.

After link set up javascript:

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

            };
    </script>

The style use non-active play icon. It will be activate if the image is hovered.

That`s all.