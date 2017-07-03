@extends('web.layout.master')

@section('title','用户中心首页')

@section('content')

<body>

<div class="user_lanmu">
 <div class="user_style nav">
  <a href="#" class="user_logo"><img src="{{url('web')}}/images/user_logo_03.png" /></a>
  <div class="navitems">
   <ul class="">
    <li><a href="#">首页</a></li>
    <li><a href="#">账户设置</a></li>
    <li><a href="#">消息</a></li>
   </ul>
  </div>
  <div class="cart_shop">
   <em class="icon_cart"><a href="">我的购物车(0)</a></em>
   
  </div>
 </div>
</div>
<div class="user_style  clearfix">
 <div class="margin_sx">
 <!--左侧栏目列表-->
 <div class="left_mun">
  <div id="menu">
   <dl>
    <dt>我的交易</dt>
    <dd><a href="{{url('/user/detail/order')}}">我的订单</a></dd>
    <dd><a href="#">我的积分</a></dd>
   </dl>
   <dl>
    <dt>VIP专区</dt>
    <dd><a href="#">VIP活动专区</a></dd>
   </dl>
   <dl>
    <dt>我的收藏</dt>
    <dd><a href="#">设计师案例</a></dd>
    <dd><a href="#">场景方案</a></dd>
    <dd><a href="#">单品</a></dd>
    <dd><a href="#">话题</a></dd>
   </dl>
    <dl>
    <dt>我的足迹</dt>
    <dd><a href="#">秀秀记录</a></dd>
    <dd><a href="#">浏览记录</a></dd>
    <dd><a href="#">评论记录</a></dd>
    <dd><a href="#">点赞记录</a></dd>
   </dl>
   <dl>
    <dt>我的邀请</dt>
    <dd><a href="#">已邀请用户</a></dd>
   </dl>
   <dl>
    <dt>设置</dt>
    <dd><a href="#">个人资料</a></dd>
    <dd><a href="#">地址管理</a></dd>
    <dd><a href="#">修改密码</a></dd>
   </dl>
  </div>
 </div>
 <!--右侧内容-->
 <div class="right_content clearfix">
  <div class="user_info">
  <div class="clearfix">
   <div class="user_Avatar"><div class="Avatar_bg"></div><img src="{{url('web')}}/images/touxiang.jpg" width="60" height="60"></div>
   <div class="info_name">
    <span class="user_name">{{ session('username') }} <em class="icon_level"></em> <em class="icon_level_putong"></em> <em class="icon_zhuanye"></em></span>
    <p><img src="{{url('web')}}/images/icon_grade.png" /></p>
   </div>
   <div class="user_integral">
     当前积分:<span class="integral">0<em>分</em></span> 
   </div>
   </div>
   <div class="Order_Status clearfix">
    <ul>
     <li><a href="#">全部订单</a><i class="split_line"></i></li>
     <li><a href="#">代发货<em>1</em></a><i class="split_line"></i></li>
     <li><a href="#">待评价<em>2</em></a><i class="split_line"></i></li>
     <li><a href="#">申请售后</a></li>
    </ul>
   </div>
  </div>
  <div class="vip_img"><a href="#"><img src="{{url('web')}}/images/user_adbg.png"  width="100%"/></a></div>
  <!--我的收藏-->
  <div class="Collection user_Section">
     <div class="title_name">我的收藏</div>
     <ul class="Section_list clearfix">
     <li><a href="#"><img src="{{url('web')}}/images/icon_user_03.png" /><h3>设计师案例</h3></a></li>
      <li><a href="#"><img src="{{url('web')}}/images/icon_user_04.png" /><h3>场景方案</h3></a></li>
       <li><a href="#"><img src="{{url('web')}}/images/icon_user_05.png" /><h3>单品</h3></a></li>
        <li><a href="#"><img src="{{url('web')}}/images/icon_user_06.png" /><h3>话题</h3></a></li>
     </ul>
  </div>
  <!--我的足迹-->
  <div class="Footprint user_Section">
   <div class="title_name">我的足迹</div>
   <ul class="Section_list clearfix">
     <li><a href="#"><img src="{{url('web')}}/images/icon_user_07.png" /><h3>秀秀记录</h3></a></li>
      <li><a href="#"><img src="{{url('web')}}/images/icon_user_09.png" /><h3>浏览记录</h3></a></li>
       <li><a href="#"><img src="{{url('web')}}/images/icon_user_08.png" /><h3>评论记录</h3></a></li>
        <li><a href="#"><img src="{{url('web')}}/images/icon_user_10.png" /><h3>点赞记录</h3></a></li>
     </ul>
   
  </div>
 </div>
 </div>
</div>
@endsection