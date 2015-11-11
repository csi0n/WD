<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>微店</title>
    <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/frozen.css">
    <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/custom.css">
    <script src="__PUBLIC__/Plugin/style/js/zepto.min.js"></script>
    <script src="__PUBLIC__/Plugin/style/js/frozen.js"></script>

</head>

<body>
    <header class="ui-header ui-header-positive ui-border-b">
        <?php echo ($back_html); ?>
        <h1><?php echo ($title); ?></h1>
    </header>

<section class="ui-container">
    <ul class="ui-list ui-list-pure ui-border-tb">
        <li class="ui-border-t">
            <section class="ui-container me-head-ico">
                <div class="ui-avatar-lg">
                    <span style="background-image:url(http://placeholder.qiniudn.com/140x140)"></span>
                </div>
               <p>csi0n</p>
            </section>
        </li>
        <li class="ui-border-t margin-top">
        
                <ul class="ui-tiled">
                    <li>
                        <div>待付款</div><i>1</i></li>
                    <li>
                        <div>代发货</div><i>2</i></li>
                    <li>
                        <div>已发货</div><i>3</i></li>
                        <li>
                        <div>已完成</div><i>3</i></li>
                </ul>
            </div>
        </li>
        <li class="ui-border-t">
            <div class="ui-arrowlink">全部订单</div>
        </li>
    </ul>
</section>
<footer class="ui-footer ui-footer-btn">
    <ul class="ui-tiled ui-border-t">
        <li data-href="<?php echo U('User/Index/Index');?>" class="ui-border-r">
            <div>首页</div>
        </li>
        <li data-href="<?php echo U('User/Good/Index');?>" class="ui-border-r">
            <div>购物车</div>
        </li>
        <li data-href="<?php echo U('User/Me/Index');?>">
            <div>我的</div>
        </li>
    </ul>
</footer>
<script>
        $('.ui-list li,.ui-tiled li').click(function(){
            if($(this).data('href')){
                location.href= $(this).data('href');
            }
        });
        $('.ui-header .ui-btn').click(function(){
            location.href= 'index.html';
        });
        </script>
</body>
</html>