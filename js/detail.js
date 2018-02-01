$(function(){
    $('.miniImg').hover(function(){
        $('.bigImg,.maskS').show()
        var src=$(this).attr('src')
        $('.bigImg').find('img').attr('src',src)
    },function(){
        $('.bigImg,.maskS').hide()
    })
    $('.miniImg').mousemove(function(e){
        event.stopPropagation();
        var oX=e.offsetX,
            oY=e.offsetY;
        // 遮罩，放大镜效果
        if(oX<=100){
            $('.maskS').css({left:0})
            $('.bigImg').find('img').css({left:0})
        }else if(100<oX&&oX<300){
            $('.maskS').css({left:oX-100})
            $('.bigImg').find('img').css({left:-2*oX+200})
        }else if(oX>=300){
            $('.maskS').css({left:200})
            $('.bigImg').find('img').css({left:-400})
        }
        if(oY<=100){
            $('.maskS').css({top:0})
            $('.bigImg').find('img').css({top:0})
        }else if(100<oY&&oY<300){
            $('.maskS').css({top:oY-100})
            $('.bigImg').find('img').css({top:-2*oY+200})
        }else if(oY>=300){
            $('.maskS').css({top:200})
            $('.bigImg').find('img').css({top:-400})
        }
        //  遮罩，放大镜结束
    })
    // 点击更换图片
    $('.sImg').each(function(i){
        $(this).click(function(){
            var src1=$('.sImg').find('img').eq(i).attr('src')
            console.log(src1)
            $('.miniImg').attr('src',src1)
        })
    })
    // 商品数量
    var num = 0;
    $('#less').click(function () {
        if (num > 0) {
            num -= 1;
        }
        $('.amount input').val(num)
    })
    $('#more').click(function () {
        num += 1;
        $('.amount input').val(num)
    })
    console.log(num)
})