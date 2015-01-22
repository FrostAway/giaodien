
$(document).ready(function () {
    var ul = $('#slide .slide-image ul'), img = $('#slide .slide-image ul li img');
    var itemw = 403, size = img.size();
    var num = 0;
    var slarea = $('#slide');
    var baritem = $('#slide .slide-bar ul li a');
    var bar = $('#slide .slide-bar ul li');
    var loop;
    function slide() {
        if (num === size - 1) {
            ul.animate({'margin-top': '0px'}, 700, function () {
            });
            num = 0;
        } else {
            ul.animate({'margin-top': '-=' + itemw + 'px'}, 700, function () {
            });
            num = num + 1;
        }
        currbar(num);
    }
    function currbar(nb) {
        bar.removeClass('active');
        bar.eq(nb).addClass('active');
    }

    function startSlide() {
        loop = setInterval(slide, 3000);
    }
    function stopSlide() {
        clearInterval(loop);
    }
    startSlide();

    slarea.mouseenter(function () {
        stopSlide();
    });
    slarea.mouseleave(function () {
        startSlide();
    });

    baritem.click(function () {
        var id = parseInt($(this).attr('data-id'));
        num = id + 1;
        currbar(id);
        ul.animate({'margin-top': -id*itemw+'px'}, 700, function(){});
        return false;
    });    
});

