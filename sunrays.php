<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="sunrays.css">
	<title></title>
</head>
<body>
<div class="container">
  <div class="photo">
    <img src="https://source.unsplash.com/ud3mHXnWM7w/960x640" width="960" height="640" alt="">
  </div>
  <div class="sunrays r1">
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
  </div>
  <div class="sunrays r2">
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
    <div class="light"></div>
  </div>
  <div class="sun"></div>

  <div class="mask"></div>
</div>
<div class="attribution">Photo by <a href="https://unsplash.com/@anthonytran" target="_blank">Anthony Tran</a> on <a href="https://unsplash.com/" target="_blank">Unsplash</a></div>


<div class="buttons">
  <button type="button" id="reset-btn" class="btn">Reset</button>
  <button type="button" id="css-btn" class="btn">CSS</button>
  <button type="button" id="play-btn" class="btn">Play</button>
</div>
<div class="css-code"></div>
<div class="panel">
  <div class="column">
    <div class="rows">
      <p>Sun rays: </p>
      <div id="var-sunrays" class="cb-list"></div>
      <label for="cb-ol"><input type="checkbox" id="cb-ol"> outlines</label>
    </div>
    <div class="rows" id="var-position">
      <p>position:</p>
    </div>
    <div class="rows" id="var-angle">
      <p>angle:</p>
    </div>
    <div class="rows" id="var-perspective">
      <p>perspective:</p>
    </div>
    <div class="rows" id="var-opacity">
      <p>opacity:</p>
    </div>
  </div>
  <div class="column">
    <div class="rows" id="var-sun">
      <p>sun:</p>
    </div>
    <div class="rows" id="var-sun-shadow">
      <p>sun shadow:</p>
      <label for="sun-color">color: <input type="color" id="sun-color" value="#ffffff"></label>
    </div>
    <div class="rows" id="var-light-height">
      <p>light height:</p>
    </div>
    <div class="rows" id="var-light-shadow">
      <p>light shadow:</p>
    </div>
  </div>
  <div class="column">
    <div class="rows" id="var-light-origin">
      <p>transform-origin:</p>
    </div>
    <div class="rows" id="var-light-transform">
      <p>transform:</p>
    </div>
    <div class="rows" id="var-filter">
      <p>filter:</p>
    </div>
    <div class="rows" id="var-mask">
      <p>mask:</p>
    </div>
  </div>
</div>
 <script type="text/javascript" src="sunrays.js"></script>
</body>
</html>