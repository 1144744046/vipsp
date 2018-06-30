<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "ini.php";
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1"/>
  <title><?php echo $ini['title']?></title>
  <link rel="shortcut icon" href="images/tx.png">
  <meta name="keywords" content="<?php echo $ini['keywords']?>" />
  <meta name="description" content="<?php echo $ini['description']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" />
    <style>

    </style>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="public/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?aee07cbeac5023aca2821ac7bc9ed69b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
 </head>
<body >
  <div class="col-md-14  container" style="float: none;">
      <h3 class="text-muted" style="color:#777; margin-bottom:30px;" align="center">
          <?php echo $ini['title']?>
      </h3>
      <center style="margin-bottom:30px;">
       <span style="color:#FF9735;">
       免费全网VIP视频会员免广告看电影！亲们如果觉得好用，请帮我们传播！ 若播放异常，刷新，更换接口尝试哦！
      </span>
      </center>

	<div class="col-md-14 column">
        <div class="panel panel-default">
            <div id="kj" class="panel-body">
            <iframe src="./public/vip_js/index.htm" id="player" width="100%" height="600px"
                    allowtransparency="true" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>

    <div class="col-md-14 ">
        <form method="get" >
        <div class="col-md-3" style="margin-top: 2px;">
            <div class="input-group" style="width: 100%;">
                <select class="form-control" id="jk">
            <!--        <option value="http://api.baiyug.cn/vip/index.php?url=">1号通用接口</option>-->
                    <option value="http://jqaaa.com/jx.php?url=">2号通用接口</option>
                    <option value="http://2gty.com/apiurl/yun.php?url=">3号通用接口</option>
                </select>
                </div>
            </div>
            <div class="col-md-7" style="margin-top: 2px;">
                <div class="input-group" style="width: 100%;">
                <input class="form-control" type="search" placeholder="输入需要会员的视频播放地址"
                       id="url" value="http://v.youku.com/v_show/id_XMTY1Njc5MTgwOA==.html">
                </div>
            </div>
            <div class="col-md-2" style="margin-top: 2px;">
                <button id="bf" type="button" class="btn btn-block"  onclick="dihejk()">播放</button>
            </div>
        </form>
    </div>
    </div>


  <div class="logos_lists col-md-14 container">
      <dl>
          <dt>
              <a target="_blank" href="http://www.le.com/"><img src="/images/letvlogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://v.qq.com/"><img src="/images/qqlogo.png" width="150" height="35"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.iqiyi.com/"><img src="/images/iqiyi.png" width="110" height="35"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.youku.com/"><img src="/images/youkulogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.tudou.com/"><img src="/images/tudoulogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.mgtv.com/"><img src="/images/hunantvlogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://tv.sohu.com/"><img src="/images/sohulogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <img src="/images/ykcloud.png" width="110" height="35">
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.acfun.tv/"><img src="/images/acfun.png" ></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.bilibili.com/"><img src="/images/bilibili.png" width="190" height="35"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.fun.tv/"><img src="/images/fengxing.gif" width="90" height="35"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.wasu.cn/"><img src="/images/wasulogo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.56.com/"><img src="/images/56logo.png"></a>
          </dt>
      </dl>
      <dl>
          <dt>
              <a target="_blank" href="http://www.yinyuetai.com/"><img src="/images/yinyuetailogo.png"></a>
          </dt>
      </dl>

  </div>




<!-- 代码1：放在页面需要展示的位置  -->
<!-- 如果您配置过sourceid，建议在div标签中配置sourceid、cid(分类id)，没有请忽略  -->
<div id="cyReward" role="cylabs" data-use="reward"></div>
<!--PC和WAP自适应版-->
<div id="SOHUCS" ></div> 
<script type="text/javascript">
    $("#bf").click();
</script>
<?php include "foot.php";?>
</body>
</html>

