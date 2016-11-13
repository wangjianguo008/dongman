//1、先实现显示隐藏的自动切换
//    1）写一个定时器，每隔3秒执行一个函数
//    2）此函数就是用来切换图片，每一次都切换下一张
//    3）函数中需要判断当前图片是不是最后一张，如果是最后一张，则切换为第一张。
//
//2、实现左右箭头的切换
//3、实现指示器的切换
//4、将显示隐藏变为淡入淡出

if(!$.fn.banner){
    $.fn.banner=function(t){
        if(!t){
            t=3000;
        }
        var number=$(this).find('ul>li').size()-1;//图片的数量
        var cur=0;//当前显示的图片
        var timer=0;//定时器
        var liList=$(this).find('ul>li');
        var aList=$(".indicator a");
        var np=1;
        timer=setInterval(slideNP,t);
//在自动切换的基础上，加上小圆点指示器的变化
//编写上一个、下一个功能
        function slideNP(np){
            if(!np){
                np=1;
            }
            if(np===1){
                if(cur<number){
                    liList.eq(cur).fadeOut();
                    liList.eq(cur+1).fadeIn();
                    aList.removeClass().eq(cur+1).addClass("active");
                    cur+=1;
                }else{
                    liList.eq(cur).fadeOut();
                    liList.eq(0).fadeIn();
                    aList.removeClass().eq(0).addClass("active");
                    cur=0;
                }
            }else if(np===-1){
                if(cur>0){
                    liList.eq(cur).fadeOut();
                    liList.eq(cur-1).fadeIn();
                    aList.removeClass().eq(cur-1).addClass("active");
                    cur-=1;
                }else{
                    liList.eq(cur).fadeOut();
                    liList.eq(number).fadeIn();
                    aList.removeClass().eq(number).addClass("active");
                    cur=number;
                }
            }

        }
        $(this).mouseover(function(){
            clearInterval(timer);
            timer=null;
        })
        $(this).mouseout(function(){
            timer=setInterval(slideNP,t);
        })
        $('.banner .prev').click(function(){
            np=-1;
            slideNP(np);

        })
        $('.banner .next').click(function(){
            np=1;
            slideNP(np);
        })
        $('.indicator>a').click(function(e){
            e.preventDefault();
        })
        $('.indicator>a').mouseover(function(){

            var i=$(this).index();
            var n=$('.indicator a.active').index();
            aList.removeClass().eq(i).addClass("active");
            liList.stop().fadeOut();
            liList.eq(i).stop().fadeIn();
            cur=i;
        })
        return this;
    }
}
$('.banner').banner();








