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