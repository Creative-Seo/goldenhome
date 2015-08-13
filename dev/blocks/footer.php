<footer><div class="container">
    <div class="row">
      <!-- <img src="/img/logo.png" alt="" width="280"> -->
      <div class="h2">Строительная компания Golden Home</div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><a href="">Строительство</a></li>
          <li><a href="">Проекты домов</a></li>
          <li><a href="">Акции</a></li>
          <li><a href="">Продажа домов</a></li>
          <li><a href="">Продажа участков</a></li>
          <li><a href="">Фото участков</a></li>
        </ul>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
    </div>
</footer>

<?php include($root."blocks/zakaz.php");?>

<!-- build:remove -->
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/js/jquery.lightSlider.min.js"></script>
<script src="/js/lightGallery.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/helpers/jquery.fancybox-thumbs.js"></script> 
<script src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="/js/jquery.nouislider.all.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/dev.proekty-domov.js"></script>
<script src="/js/dev.dizayn.js"></script>
<script src="/js/dev.homepage.js"></script>
<script src="/js/dev.raschet-gazobetona.js"></script>
<script src="/js/floating-labels.js"></script>
<script src="/js/common.js"></script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic";document.getElementsByTagName("head")[0].appendChild(ms);

var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
	
<script>
var scr = {"scripts":[
	{"src" : "/js/scripts.min.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

/build -->

<script>function seach() {return {'action':'http://yandex.ru/sitesearch','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Поиск по http://www.sk-goldenhome.ru/','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2178943,'webopt':false,'websearch':false,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'поиск по сайту','input_placeholderColor':'#000000','input_borderColor':'#FFD300'}}</script>

<style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style>
<script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>

  <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'iTeEwNQYn3';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<?php if (isset($script)) {echo $script;}?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>

