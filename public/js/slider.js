/* 이미지 슬라이더(.jhs-slider)가 한 페이지에 여러개일 수 있다. */
$('h1.sliders-count').empty().append('총 슬라이더 개수는' + $('.jhs-slider').length + '개 입니다.').css('color', 'red');

/* each => .jhs-slider 에 해당하는 엘리먼트 하나하나 작업하겠습니다. */
$('.jhs-slider').each(function(index, node) {
    /* 이 함수는 총 3번 실행됩니다. */
    
    /* 개별 슬라이더 */
    var $slider = $(node);
    /* 슬라이더 안의 슬라이드 들 */
    var $slides = $slider.find('div.slides');
    /* 처음 슬라이더 */
    var $firstSlide = $slides.find(' > div:first-child');
    /* 마지막 슬라이더 */
    var $lastSlide = $slides.find(' > div:last-child');
    
    /* 좌측 버튼 */
    var $leftBtn = $slider.find('.side-bar').eq(0);
    /* 우측 버튼 */
    var $rightBtn = $slider.find('.side-bar.right');
    
    $leftBtn.on('click', function() {
        var $activeSlide = $slider.find('div.active');
        var $postSlide = null;
        
        if ( $activeSlide.prev().length == 0 )
        {
            $postSlide = $lastSlide;
        }
        else {
            $postSlide = $activeSlide.prev();
        }
        
        $activeSlide.removeClass('active');
        $postSlide.addClass('active');
    });
    
    $rightBtn.on('click', function() {
        var $activeSlide = $slider.find('div.active');
        var $postSlide = null;
        
        if ( $activeSlide.next().length == 0 )
        {
            $postSlide = $firstSlide;
        }
        else {
            $postSlide = $activeSlide.next();
        }
        
        $activeSlide.removeClass('active');
        $postSlide.addClass('active');
    });
    
    $slider.on('mouseover', function() {
        if ( $slider.data('autoplay') == "Y" ) {
            $slider.data('autoplay-available', 'N');
        }
    });
    
    $slider.on('mouseout', function() {
        if ( $slider.data('autoplay') == "Y" ) {
            $slider.data('autoplay-available', 'Y');
        }
    });
    
    $slider.mouseout();
    
    setInterval(function() {
        if ( $slider.data('autoplay-available') == 'Y' ) {
            $rightBtn.click();
        }
    }, 3000);
});