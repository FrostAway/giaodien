$(document).ready(function () {
    var boxslide = $('#slide');
    var ul = $('#slide ul'), li = $('#slide ul li'), img = $('slide ul li img');
    var itemh = 500, itemw = 1366;
    var size = $('#slide ul li').size();
    var next = $('#next'), prev = $('#prev');
    var num = 0, interval;

    var full_bar = $('.slide-full-bar'), curr_bar = $('.slide-curr-bar');
   
    function runBar(){
        curr_bar.animate({'width': 100+'%'}, 5300, function(){});
    }
    function resetBar(){
        curr_bar.css('width', '0%');
    }
    function stopBar(){
        curr_bar.stop();
    }
    runBar();
    function slide() {
        num = num + 1;
        resetBar();
        if (num === size) {
            ul.animate({'margin-left': '0px'}, 1000, function () {
            });
            num = 0;
        } else {
            ul.animate({'margin-left': '-=' + itemw + 'px'}, 1000, function () {
            });
        }
        runBar();
        
    }
    interval = setInterval(slide, 6000);
    boxslide.mouseover(function () {
        clearInterval(interval);
        stopBar();
    });
    boxslide.mouseleave(function () {
        interval = setInterval(slide, 6000);
        runBar();
    });
    next.click(function () {
        slide();
        return false;
    });
    prev.click(function () {
        num = num - 1;
        var margin = (1 - size) * itemw;
        if (num === -1) {
            ul.animate({'margin-left': margin + 'px'}, 1000, function () {
            });
            num = size - 1;
        } else {
            ul.animate({'margin-left': '+=' + itemw + 'px'}, 1000, function () {
            });
        }
    });
});


