<script type="text/javascript">

    $(document).ready(function() {
        $('#fullpage').fullpage({
            css3: true,
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
            sectionsColor: ['#000', '#000', '#000', '#000'],
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['Intro', 'Web', 'GolfPass', 'GolfBusiness'],


            onLeave: function(index, nextIndex, direction) {
                if (index <= 3 && direction == 'down') {
                    $('.section').eq(index - 1).removeClass('moveDown').addClass('moveUp');
                } else if (index <= 3 && direction == 'up') {
                    $('.section').eq(index - 1).removeClass('moveUp').addClass('moveDown');
                }
            }
        });
    });

</script>





<div id="fullpage">
    <div class="section moveDown" id="section0">
        <div class="footer">
            <div class="footer_content">
                <div style="height:65px;">
                    <a href="http://golfpass.net/" target="_blank"><img src="/public/images/main-footer.png"></a>
                </div>
            </div>
        </div>
        <div class="slide" id="slide1">

            <div class="intro_container">
                <DIV style="margin: 0 auto; width: 50%;">
                    <div id="light" class="white_content">
                        <!--유투브소스 -->

                        <object width="100%" height="100%">
                            <param name="movie" value="https://youtu.be/XwtX5ABOOww"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <param name="allowscriptaccess" value="always"></param>
                            <iframe src="https://www.youtube.com/embed/XwtX5ABOOww" width="100%" height="100%" allowscriptaccess="always" allow="autoplay; encrypted-media" allowfullscreen="true"></iframe>
                        </object>
                        <div>
                            <button>
                                <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">닫기</a>
                            </button>
                        </div>
                    </div>
                </DIV>
                <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
                    <div id="fade" class="black_overlay"></div>
                </a>

                <div class="intro">
                    <div class="intro-title">
                        <!--<img src="/public/images/main-section-1_txt.png">-->
                    </div>
                    <!--<div class="intro-btn">
                        <!--<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">-->
                        <!--<a href="#">
                            <div class="intro-btn_portfolio">
                            </div>
                        </a>
                    </div>-->

                </div>
            </div>
        </div>
        <!--<div class="slide" id="slide2">
            <div class="intro_video">
                <video autoplay controls id="myvideo">
                        <source  src="/public/video/golfpass.mp4" type="video/mp4">
                         video 요소를 지원하지 않는 브라우저입니다. 동영상은 다운로드 후 볼 수 있습니다.
                    </video>
            </div>
        </div>-->
    </div>
    <div class="section moveDown" id="section1">
        <div class="footer">
            <div class="footer_content">
                <a href="http://golfpass.net/" target="_blank"><img src="/public/images/main-footer.png"></a>
            </div>
        </div>
        <div class="slide" id="slide1">
            <div class="about_container">
                <div class="about">
                    <div class="about-title">
                        <img src="/public/images/main-section-2_txt.png">
                        <div class="about-btn">
                            <a href="/playseven_web/index_web">
                                <div class="about-btn_portfolio">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="about-content">
                        <div style="background-image: url(/public/images/Monitor.png); background-repeat: no-repeat; height: 410px; margin-left:52%; width:617px;">
                            <div id="sliderFrame">
                                <div id="slider">
                                    <div>
                                        <img src="/public/images/test1.png" />
                                    </div>
                                    <div>
                                        <img src="/public/images/test2.png" />
                                    </div>
                                    <div>
                                        <img src="/public/images/test3.png" />
                                    </div>
                                    <div>
                                        <img src="/public/images/test4.png" />
                                    </div>
                                </div>
                                <!--Custom navigation buttons on both sides
                                <div id="thumbs">
                                    <div class="thumb"><img src="/public/images/navi1.png" /></div>
                                    <div class="thumb"><img src="/public/images/navi2.png" /></div>
                                    <div class="thumb"><img src="/public/images/navi3.png" /></div>
                                    <div class="thumb"><img src="/public/images/navi4.png" /></div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section moveDown" id="section2">
        <div class="footer">
            <div class="footer_content">
                <a href="http://golfpass.net/" target="_blank"><img src="/public/images/main-footer.png"></a>
            </div>
        </div>
        <div class="slide" id="slide1">
            <div class="features_container" id="golfpass1">
                
                
                <DIV style="margin: 0 auto; width: 50%;">
                    <div id="light2" class="white_content">
                        <!--유투브소스 -->

                        <object width="100%" height="100%">
                            <param name="movie" value="https://youtu.be/XwtX5ABOOww"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <param name="allowscriptaccess" value="always"></param>
                            <iframe src="https://www.youtube.com/embed/XwtX5ABOOww" width="100%" height="100%" allowscriptaccess="always" allow="autoplay; encrypted-media" allowfullscreen="true"></iframe>
                        </object>
                        <div>
                            <button>
                                <a href="javascript:void(0)" onclick="document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'">닫기</a>
                            </button>
                        </div>
                    </div>
                </DIV>

                <a href="javascript:void(0)" onclick="document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'">
                    <div id="fade2" class="black_overlay"></div>
                </a>



                <div class="features">
                    <div class="features-title">
                        <img src="/public/images/main-section-3_txt.png">
                    </div>
                    <div style="background-image: url(/public/images/searchbox.png); background-repeat: no-repeat; margin-top: 30px;">
                        <div class="features-content" onclick="window.open('about:blank').location.href='http://golfpass.net'" style="cursor: pointer; width: 356px;">
                            GOLFPASS.NET
                        </div>
                    </div>
                    <div class="features-btn">
                        <a href="javascript:void(0)" onclick="document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'">
                            <div class="features-btn_portfolio">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="section moveDown" id="section3">
        <div class="footer">
            <div class="footer_content">
                <a href="http://golfpass.net/" target="_blank"><img src="/public/images/main-footer.png"></a>
            </div>
        </div>
        <div class="slide" id="slide1">
            <div class="portfolio_container">
                <div class="portfolio">
                    <div class="portfolio-title">
                        <img src="/public/images/main-section-4_txt.png">
                    </div>

                    <div class="golf_intro-btn">
                        <a href="/playseven_marketing/index_marketing" target="_blank">
                            <div class="about-btn_portfolio">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>

<script src="js/slider.js"></script>
<script type="text/javascript">
    //The following script is for the group 2 navigation buttons.
    function switchAutoAdvance() {
        imageSlider.switchAuto();
        switchPlayPauseClass();
    }

    function switchPlayPauseClass() {
        var auto = document.getElementById('auto');
        var isAutoPlay = imageSlider.getAuto();
        auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
        auto.title = isAutoPlay ? "Pause" : "Play";
    }
    switchPlayPauseClass();

</script>