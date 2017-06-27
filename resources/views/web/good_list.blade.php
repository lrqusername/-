<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  href="css/common.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<script src="js/respond.min.js"></script>
<script src="js/css3-mediaqueries.js"  type="text/javascript"></script>
  <![endif]-->
<title>单品大全（产品类表）</title>
</head>
<script type="text/javascript">
$(document).ready(function(){
 $(".q_code ").hover(function(){
			$(this).find(".q_code_layer").addClass("hover").css("display","block");
		},function(){
			$(this).find(".q_code_layer").removeClass("hover").css("display","none");  

		}
	); 
	 $(".diagram").hover(function(){
			$(this).addClass("hover");
		},function(){
			$(this).removeClass("hover");  

		}
	); 
	$(".product").hover(function(){
			$(this).addClass("hover");
			$(this).find(".operating").animate({bottom: "0", }, "fast");
		},function(){
			$(this).removeClass("hover");
			$(this).find(".operating").animate({bottom: "-30",}, "fast");  

		}
	); 
	
$('.pagination').css({
   "margin-left":($(".page_Style").width() - $('.pagination').outerWidth())/2, 
   });
	$(window).resize(function(){ 
  $('.pagination').css({ 
   "margin-left":($(".page_Style").width() - $('.pagination').outerWidth())/2, 
   }); 
}); 
});

</script>
<body>
<div class="Background_color">
<div class="header">
 <div class="header_top">
   <div class="top_info clearfix">
   <div class="logo_style l_f"><a href="#"><img src="images/logo.jpg" /></a></div>
   <div class="Search_style l_f">
   <form>
   <div class="select">
    <select name="" size="1">
      <option value="1">设计精髓</option>
      <option value="2">设计店家</option>
    </select>
    </div>
    <input name="" type="text"  class="add_Search"/>
    <input name="" type="submit"  value="" class="submit_Search"/>
    </form>
   </div>
   <div class="Cart_user r_f">
   <div class="Cart_Quantity "><span class="number">0</span></div>
   <div class="header_operating l_f">
    <span class="header_touxiang"><img src="images/touxiang_03.png" /></span>
    <a href="#">登录</a><a href="@">注册</a>
   </div>
   </div>
 </div>
 <div class="header_menu">
 <!--菜单导航栏-->
 <ul class="menu" id="nav">
   <li class="nLi"><a href="#">网站首页</a></li>
   <li class="nLi"><a href="#">设计精粹</a></li>                
   <li class="nLi Down"><a href="#">场景方案</a><em class="icon_jiantou"></em>
    <ul class="sub">
      <li><a href="#">新闻首页</a></li>
      <li><a href="#">新闻人物</a></li>
      <li><a href="#">新闻电视</a></li>
      <li><a href="#">新闻图片</a></li>
      <li><a href="#">新闻视频</a></li>
      <li><a href="# ">新闻专题</a></li>
    </ul>
   </li>             
   <li class="nLi Down"><a href="#">单品大库</a><em class="icon_jiantou"></em></li>      
   <li class="nLi Down"><a href="#">奇货可享</a><em class="icon_jiantou"></em></li>
   <li class="nLi Down"><a href="#">找找感觉</a><em class="icon_jiantou"></em></li>
 </ul>
 <script>jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:false,trigger:"click"});</script>
 <div class="q_code">
  <a href="" class="q_code_applnk" rel="nofollow"></a>
    <div class="q_code_layer" style="display: none;">
    <a href="" class="qcode_lnk" rel="nofollow">
      <span class="qcode_title">只分享装修干货</span>
    </a>  
    </div>
  </div>
 </div>
 </div>
</div>
<!--产品列表-->

<div class="content_style clearfix">
 <div class="page_Style">
 
  <!--条件筛选-->
  <div class="filter_style clearfix">
   <ul>
    <li><label class="filter_name">风格分类</label>
    <div class="filter_link"><a href="#" class="Select">中式</a><a href="#">美式</a><a href="#">欧式</a><a href="#">现代简约</a></div></li>
    <li><label class="filter_name">区域分类</label>
    <div class="filter_link"><a href="#" >主卧</a><a href="#">客厅</a><a href="#">厨房</a><a href="#">卫生间</a>
    <a href="#">阳台</a><a href="#">次卧</a><a href="#">衣帽间</a><a href="#">书房</a><a href="#">卫生间</a></div>   
     </li>
        <li><label class="filter_name">种类分类</label>
        <div class="filter_link">
        <div class="level_one grade"><a href="#" class="Select">床</a><a href="#">桌椅</a><a href="#">衣柜</a><a href="#">灯具</a></div>
        <div class="level_two grade">
         <a href="#" class="Select">美式</a><a href="#">欧式</a><a href="#">中式</a><a href="#">日式</a>
        </div>
        </div></li>
   </ul>
  </div>
  <!--产品列表-->
   <div class="prodcuts_list clearfix">
     <ul class="prodcuts_style clearfix">
       <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-1.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>  
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-2.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-3.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-4.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li> 
         <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-5.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>  
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-6.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-7.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>
        <li class="product">
       <div class="pic_img textalign"><a href="#"><img src="images/product/p-4.jpg" /></a>
        <div class="operating"><a href="#" class="pic_cart">加入购物车</a><a href="#" class="Collection">收藏</a></div>
       </div>
       <p class="pic_nme"><a href="#">A家家具 床 实木床 1.5米1.8米双人床简约软包皮床卧室家具 床 框架床</a></p>
       <p class="pic_price">￥2310.00</p>
       </li>  
     </ul>
     <div class="pic_page_style clearfix">
      <ul class="page_example pagination">
       <li><li class="first disabled" data-page="1"><a href="javascript:void(0);"> 〈 上一页 </a></li></li>
       <li class="page active" data-page="1"><a href="javascript:void(0);">1</a></li>
       <li class="page" data-page="2"><a href="javascript:void(0);">2</a></li>
       <li class="page" data-page="3"><a href="javascript:void(0);">3</a></li>
       <li class="page" data-page="4"><a href="javascript:void(0);">4</a></li>
       <li class="page" data-page="5"><a href="javascript:void(0);">5</a></li>
       <li class="page" data-page="6"><a href="javascript:void(0);">6</a></li>     
       <li class="page" data-page="7"><a href="javascript:void(0);">7</a></li>
       <li class="page" data-page="8"><a href="javascript:void(0);">8</a></li>
       <li class="page" data-page="9"><a href="javascript:void(0);">9</a></li>
       <li class="page" data-page="10"><a href="javascript:void(0);">10</a></li>
       <li class="page" data-page=""><a href="javascript:void(0);">...</a></li>
       <li class="last" data-page="35"><a href="javascript:void(0);">下一页 〉</a></li>
      </ul>
      </div>
   </div>
 </div>
</div>
</div>
<div class="footer clearfix">
<div class="footer_spacing clearfix">
  <span class="left_link l_f"><a href="#">首页</a>|<a href="#">设计精粹</a>|<a href="#">场景方案</a>|<a href="#">单品大库</a>|<a href="#">奇货可享</a>|<a href="#">找找感觉</a></span>
  <span class="copyright r_f">copyright©南京一家一世界网络科技有限公司 版权所有   苏ICP备16043372号-1</span>
  </div>
</div>
</body>
</html>