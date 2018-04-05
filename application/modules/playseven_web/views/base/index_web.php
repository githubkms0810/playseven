<link rel="stylesheet" type="text/css" href="/public/css/style_web.css" />

<div class="footer_web">
    <div class="footer_content_web">
        <a href="https://www.naver.com/" target="_blank">안녕안녕</a>
    </div>
</div>

<div class="section moveDown" id="section0">

    <div class="webintro_container">
        <div class="webintro">
            <div class="webintro-title">
                나만의 멋진 홈페이지를 만들어보세요
            </div>
            <div class="webintro-content">
                디자인과 색상을 자유롭게 선택하고 원하는 정보만 요약해서 한눈에 보여줄 수 있어요
            </div>
            <div class="webintro-btn">
                <a href="https://www.naver.com/" target="_blank">
                    <div class="webintro-btn_portfolio">
                    </div>
                </a>
                <a href="#">
                    <div class="webintro-btn_movie">
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="section moveDown" id="section1">

    <div class="about_container">
        <div class="about">
            <div class="about-title">
                <img src="/public/images/main-section-1_txt.png">
            </div>
            <div class="about-content">
                <div style="background-image: url(/public/images/Monitor.png); background-repeat: no-repeat; background-position: center; height: 410px; margin: 0 auto;">
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
                            <div>
                                <img src="/public/images/test5.png" />
                            </div>
                            <div>
                                <img src="/public/images/test6.png" />
                            </div>
                        </div>
                        <!--Custom navigation buttons on both sides-->
                        <div id="thumbs">
                            <div class="thumb"><img src="/public/images/navi1.png" /></div>
                            <div class="thumb"><img src="/public/images/navi2.png" /></div>
                            <div class="thumb"><img src="/public/images/navi3.png" /></div>
                            <div class="thumb"><img src="/public/images/navi4.png" /></div>
                            <div class="thumb"><img src="/public/images/navi5.png" /></div>
                            <div class="thumb"><img src="/public/images/navi6.png" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section moveDown" id="section2">
    <div class="features_container" id="golfpass1">
        <div class="features">
            <div class="features-title">
                <img src="/public/images/main-section-2_txt.png">
            </div>
            <div style="background-image: url(/public/images/searchbox.png); background-repeat: no-repeat; margin-top: 30px;">
                <div class="features-content" onclick="window.open('about:blank').location.href='http://golfpass.net'" style="cursor: pointer; width: 356px; height: 50px;">
                    골프패스
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section moveDown" id="section3">
    <div class="portfolio_container">
        <div class="portfolio">
            <div class="portfolio-title">
                <img src="/public/images/main-section-3_txt.png">
            </div>

            <div style="background-image: url(/public/images/submit.png); background-repeat: no-repeat; width: 437px; height: 100px; margin-top: 30px;">
                <input class="telinput" type="text" placeholder="전화번호입력">
                <input class="telsubmit" type="button">
            </div>
        </div>
    </div>
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
