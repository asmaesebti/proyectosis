<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>How to Integrate Webcam using JavaScript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="camera.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <div class="webcam">
        <div class="video-outer">
            <video id="video"  autoplay></video>
        </div>

        <div class="webcam-start-stop">
            <a href="#!" class="btn-start" onclick="start()">Start</a>
            <a href="#!" class="btn-stop" onclick="StopWebCam()">Stop</a>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var StopWebCam = function () {
            var stream = video.srcObject;
            var tracks = stream.getTracks();

            for (var i = 0; i < tracks.length; i++) {
                var track = tracks[i];
                track.stop();
            }
            video.srcObject = null;
        }

        var start = function () {
            var video = document.getElementById("video"),
                vendorURL = window.URL || window.webkitURL;

            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    }).catch(function (error) {
                        console.log("Something went wrong");
                    });
            }
        }
        $(function () { start(); });
    </script>
</body>

</html>