/*
// Hide Header on on scroll down 
var didScroll; 

var lastScrollTop = 0; 
var delta = 1; // 동작의 구현이 시작되는 위치
var navbarHeight = $('#footer1').outerHeight(); // 영향을 받을 요소를 선택

// 스크롤시에 사용자가 스크롤했다는 것을 알림 
$(window).scroll(function(event){ 
    didScroll = true; 
});
// hasScrolled()를 실행하고 didScroll 상태를 재설정 
setInterval(function() { 
    if (didScroll) { 
        hasScrolled(); 
        didScroll = false; 
    } 
}, 10); 

function hasScrolled() { 
    // 동작을 구현
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta 
    if(Math.abs(lastScrollTop - st) <= delta) 
        return; 
    // If they scrolled down and are past the navbar, add class .nav-up. 
    // This is necessary so you never see what is "behind" the navbar. 
    if (st > lastScrollTop && st > navbarHeight){ 
        // Scroll Down 
        $('#footer').removeClass('footer-down').addClass('footer-up');
     } else { 
        // Scroll Up 
        if(st + $(window).height() < $(document).height()) { 
            $('#footer').removeClass('footer-up').addClass('footer-down');
        } 
    } 
    
    lastScrollTop = st; 
}

$(function(){ 
    var lastScrollTop = 0, delta = 15; 
    $(window).scroll(function(event){ 
        var st = $(this).scrollTop(); 
        
        if(Math.abs(lastScrollTop - st) <= delta) 
        return; // 스크롤값을 받아서 리턴한다. 
    if ((st > lastScrollTop) && (lastScrollTop>0)) { 
        $("#footer").css("bottom","0px"); // 스크롤을 내렸을때 #header의 CSS 속성중 bottom 값을 -50px로 변경한다. 
    } else { 
        $("#footer").css("bottom","-130px"); // 스크롤을 올렸을때 #header의 CSS 속성중 bottom 값을 0px로 변경한다. 
    } 
        lastScrollTop = st; 
    }); 
});
*/


var elem = document.getElementById("myvideo");
if (elem.requestFullscreen) {
        elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
          elem.webkitRequestFullscreen();
        }

