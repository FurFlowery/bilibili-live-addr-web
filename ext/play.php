<!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<title>哔哩哔哩直播链接获取 幻时博客</title>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<link href="//lib.baomitu.com/chimee-player/latest/chimee-player.browser.css" rel="stylesheet">
	<script src="//lib.baomitu.com/chimee-player/latest/chimee-player.browser.js"></script>
</header> 
<body>
<div id="wrapper">
<video tabindex="-1"></video>
<script>
new ChimeePlayer({
  wrapper: '#wrapper',
  src: '<?php echo $_SERVER["QUERY_STRING"]; ?>',
  box: 'flv',
  isLive: true,
  autoplay: true,
  controls: true
})
</script>
</div>
</body>
</html>
