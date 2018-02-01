<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="../../static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="../../lib/Hui-iconfont/1.0.8/iconfont.min.css" />
    <script src='../../lib/jquery/1.9.1/jquery.js'></script>
    <title>东舟-中建CI</title>
    <link rel="stylesheet" href="../css/cart.css">
    <meta name="keywords" content="中国建筑 品牌CI建设 东舟品牌">
    <meta name="description" content="">
    <!--[if lt IE 9]>
            <script type="text/javascript" src="lib/html5shiv.js"></script>
            <script type="text/javascript" src="lib/respond.min.js"></script>
        <![endif]-->
    <!--[if lt IE 9]>
            <link href="static/h-ui/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    <!--[if IE 6]>
            <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
            <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
</head>

<body>
    <!-- 顶部导航 -->
    <?php include "header.html" ?>
    <!-- 购物车 -->
    <div class="cartBox">
        <div class="cartRow">
            <!-- floatL:right表头反序 -->
            <div class="cartItemDel">操作</div>
            <div class="cartItemSubtotal">小计</div>
            <div class="cartItemNum">数量</div>
            <div class="cartItemUnitPrice">单价</div>
        </div>
        <div class="cartRow">
            <div class="cartItemCheck">
                <input type="checkbox">
            </div>
            <div class="cartItemImg">
                <img src="../img/item2.png" alt="">
            </div>
            <div class="cartItemName">
                中建纸杯
            </div>
            <div class="cartItemUnitPrice">
                300.00
            </div>
            <div class="cartItemNum">
                <div class="less">-</div>
                <div class="num">3</div>
                <div class="add">+</div>
            </div>
            <div class="cartItemSubtotal">900.00</div>
            <div class="cartItemDel"><a href="">删除</a></div>
        </div>
        <div class="cartRow">
                <div class="cartItemCheck">
                    <input type="checkbox">
                </div>
                <div class="cartItemImg">
                    <img src="../img/item2.png" alt="">
                </div>
                <div class="cartItemName">
                    中建纸杯
                </div>
                <div class="cartItemUnitPrice">
                    300.00
                </div>
                <div class="cartItemNum">
                    <div class="less">-</div>
                    <div class="num">3</div>
                    <div class="add">+</div>
                </div>
                <div class="cartItemSubtotal">900.00</div>
                <div class="cartItemDel"><a href="">删除</a></div>
        </div>
        <div class="cartRow">
                <input type="submit" value="去  结  算">
                <div style="color:#f00">$1800</div>
                <div>总价：</div>
                <div>共 6 件产品</div>
                <div style="float:left;margin-left:30px"><input type="checkbox" id="all" style="display:inline-block;margin:1px 10px 0 0"><label for="all">全选</label></div>
        </div>
    </div>
    <!-- 底部 -->
    <?php include "footer.html" ?>

</body>

</html>