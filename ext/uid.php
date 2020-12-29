<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<title>哔哩哔哩直播链接获取 幻时博客</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    if ($_GET){
		$uid = $_GET['uid'];
		if($uid == ""){
            echo "<script>alert('不能为空！');window.history.back();</script>";
        }elseif ($uid>9999999999999999 || $uid<1){
            echo "<script>alert('请输入正确的UID！');window.history.back();</script>";
        }else{
		$rurl = "https://api.live.bilibili.com/room/v1/Room/getRoomInfoOld?mid=";
		$rurlfull = $rurl . $uid;
		$opt=array('http'=>array('header'=>"Referer: https://live.bilibili.com")); 
        $context=stream_context_create($opt);
        ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;http://www.9qc.com)');
        $rjson_string = @file_get_contents($rurlfull,false, $context);
        $rdata = json_decode($rjson_string, true);
		$cid = $rdata['data']['roomid'];
		if($cid == "0"){
            echo "<script>alert('请确认该用户已开通直播间！');window.history.back();</script>";
        }else{
        $lurla = "https://api.live.bilibili.com/room/v1/Room/playUrl?cid=";
        $lurlb = "&qn=0&platform=web";
        $lurlfull = $lurla . $cid . $lurlb;
        ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;http://www.9qc.com)');
        $ljson_string = @file_get_contents($lurlfull,false, $context);
        $ldata = json_decode($ljson_string, true);
		}
		}
	}
?>
<center>
<h1>B站直播播放流在线获取</h1>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th>线路</th>
      <th>地址</th>
      <th>播放</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>主线</td>
      <td><?php echo $ldata['data']['durl'][0]['url']; ?></td>
      <td><a href="play.php?<?php echo $ldata['data']['durl'][0]['url']; ?>"><input type="button" class="btn btn-primary" value="在线播放" /></a></td>
    </tr>
    <tr>
      <td>备线1</td>
      <td><?php echo $ldata['data']['durl'][1]['url']; ?></td>
      <td><a href="play.php?<?php echo $ldata['data']['durl'][1]['url']; ?>"><input type="button" class="btn btn-primary" value="在线播放" /></a></td>
    </tr>
    <tr>
      <td>备线2</td>
      <td><?php echo $ldata['data']['durl'][2]['url']; ?></td>
      <td><a href="play.php?<?php echo $ldata['data']['durl'][2]['url']; ?>"><input type="button" class="btn btn-primary" value="在线播放" /></a></td>
    </tr>
    <tr>
      <td>备线3</td>
      <td><?php echo $ldata['data']['durl'][3]['url']; ?></td>
      <td><a href="play.php?<?php echo $ldata['data']['durl'][3]['url']; ?>"><input type="button" class="btn btn-primary" value="在线播放" /></a></td>
    </tr>
  </tbody>
</table>
</div>
<a href="https://tools.dxmc.net/tools/bililive"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> 返回</button></a>
<br />
<h6><a href="https://www.dxmc.net">版权所有© 2010-2020 幻时博客</a></h6>
</center>
</body>
</html>