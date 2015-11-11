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
        <ul class="ui-slider-content" style="width: 300%">
        <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topvo): $mod = ($i % 2 );++$i;?><li onclick="showDetail(<?php echo ($topvo["id"]); ?>);"><span style="background-image:url(__PUBLIC__/Uploads/<?php echo ($topvo["image"]); ?>)"></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <script type="text/javascript">
    var page_num=1;
    $(window).scroll(function() {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            page_num++;
            $.post("<?php echo U('User/Index/more');?>",{"p":page_num},function(data){
                alert(data);
            })
        }
    });
    </script>
    <script>
    (function() {
        var slider = new fz.Scroll('.ui-slider', {
            role: 'slider',
            indicator: true,
            autoplay: true,
            interval: 3000
        });
        slider.on('beforeScrollStart', function(from, to) {});

        slider.on('scrollEnd', function(cruPage) {});

    })();
    </script>
    <div class="ui-searchbar-wrap ui-border-b">
        <div class="ui-searchbar ui-border-radius">
            <i class="ui-icon-search"></i>
            <div class="ui-searchbar-text">搜索号码（2-10位）</div>
            <div class="ui-searchbar-input">
                <input value="" type="tel" placeholder="搜索号码（2-10位）" autocapitalize="off">
            </div>
            <i class="ui-icon-close"></i>
        </div>
        <button class="ui-searchbar-cancel">取消</button>
    </div>
    <p class="custom-desc">热门商品</p>
    <div class="inner">
        <div class="lists">
            <ul class="ui-grid-trisect ui-border-b">
                <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?><li onclick="showDetail('<?php echo ($goodsvo["id"]); ?>');">
                        <div class="ui-border card-padding">
                            <div class="ui-grid-trisect-img">
                                <span style="background-image:url(__PUBLIC__/Uploads/<?php echo ($goodsvo["image"]); ?>)"></span>
                            </div>
                            <p><?php echo ($goodsvo["name"]); ?>
                                <p class="ui-txt-warning"><?php echo ($goodsvo["price"]); ?>元</p>
                            </p>
                            <p class="ui-txt-highlight">关键词高亮，同em</p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
    $('.ui-searchbar').tap(function() {
        $('.ui-searchbar-wrap').addClass('focus');
        $('.ui-searchbar-input input').focus();
    });
    $('.ui-searchbar-cancel').tap(function() {
        $('.ui-searchbar-wrap').removeClass('focus');
    });
    function showDetail(oObject) {
        window.location = "<?php echo U('User/Detail/Index');?>&id=" + oObject;
    }
    </script>
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