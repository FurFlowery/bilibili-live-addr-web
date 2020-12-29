# bilibili-live-addr-web
在线获取B站直播间真实播放地址

## 介绍

在线通过房间号或用户UID获取直播间的播放流，可在PotPlay，VLC等支持在线FLV播放的播放器中直接播放，画质为原画

测试环境：Nginx1.19 + PHP 7.3

演示地址：https://tools.dxmc.net/tools/bililive/

代码写的比较烂别在意

## 更新日志

2020-12-29 增加模拟Referer和user-agent来从B站API获取信息，防止被API拒绝连接

2020-03-04 增加H5在线播放

2020-02-22 第一版

## 关于

如有问题，请提Issues

幻时博客：https://www.dxmc.net