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
    <div class="ui-slider">
        <ul class="ui-slider-content">
            <li><span style="background-image:url(__PUBLIC__/Uploads/<?php echo ($good["image"]); ?>)"></span></li>
        </ul>
    </div>
    <script>
    (function() {
        var slider = new fz.Scroll('.ui-slider', {
            role: 'slider',
            indicator: true,
            autoplay: true,
            interval: 3000
        });
        slider.on('beforeScrollStart', function(from, to) {
            console.log(from, to);
        });

        slider.on('scrollEnd', function(cruPage) {
            console.log(curPage);
        });

    })();
    </script>
    <ul class="ui-list ui-list-pure ui-border-tb">
        <li class="ui-border-t">
            <h4><?php echo ($good["name"]); ?></h4>
            <div class="ui-whitespace">
                <p class="ui-txt-warning">RMB:<?php echo ($good["price"]); ?> 元</p>
            </div>
        </li>
        <li class="ui-border-t">
            <p><span>运费: </span><span class="date"> 免运费</span></p>
        </li>
    </ul>
    <div class="ui-whitespace">
        <p class="ui-txt-default"><?php echo ($good["detail"]); ?></p>
    </div>
    <footer class="ui-footer ui-footer-btn">
        <div class="ui-footer ui-footer-stable ui-btn-group ui-border-t">
            <button class="c_button btn-purchase-immediately">立即购买</button>
            <button class="c_button btn-join-shopping-cart">加入购物车</button>
        </div>
    </footer>
</section>