<link rel="stylesheet" href="/public/css/style_about.css">
<!-- Resource style -->


<div id="wrap">
    <div id="container_wrap">
        <!-- CONTENT [[ -->
        <div class="company-about-wrap">
            <div class="w1100_wrap pt-120">
                <br><br><br><br>
                <p class="company-about-tit">COMPANY</p>
                <h3>새로운 골프문화를 선도하는 골프패스</h3>
                <div class="company-about-txt">
                    <div class=" pt-50">
                        안녕하십니까. 골프패스입니다.<br> 골프는 많은 현대인들의 친구이자 위로입니다. 더 가까운 친구, 더 즐겁고<br> 따뜻한 위로가 되도록 하겠습니다.직원들, 회원들, 골퍼들, 골프장 모두의 새로운<br> 행복을 위하여 항상 노력하는 골프패스가 되겠습니다.<br>
                    </div>
                    <div class="hr_line5 pt-60"></div>
                    <div class="pt-60">
                        CEO 황현철<br> 골프에 대한 흥미와 이해를 증진시켜 골프문화와 산업을 선도하겠다는 포부.<br> 명예와 신의를 중시하는 골프 애호가.<br><br><br><br><br>
                    </div>
                </div>

            </div>
        </div>

        <style>
            #map {
                height: 550px;
                width: 100%;
            }

        </style>

        <div class="company-contact-wrap">

            <!--지도-->
            <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: 37.518978,
                        lng: 127.055894
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }

            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgc7-yrPMHodzq2E6F3Zs9YMN9KEvgYkM&callback=initMap">


            </script>


            <div class="text-con">
                <div class="left-box">
                    <p class="contact-tit">Contact us</p>
                    <dl class="contact-txt">
                        <dt>Phone </dt>
                        <dd><strong>02.6402.8206</strong> <br> 내선 1번 : 회원문의/요청<br> 내선 2번 : 골프장 유지관리, 골프장 신규제휴<br> 내선 3번 : 기타 사업/광고 제휴 및 문의<br>

                            <p class="pt-30">[평일] AM 09: 00 ~ PM 06:00 [토요일/공휴일] 휴무<br> ※ 토요일/공휴일은 게시판을 이용해주세요.</p>
                        </dd>
                        <dt>Email</dt>
                        <dd>help@smartscore.kr</dd>
                        <dt>Website</dt>
                        <dd>http://www.golfpass.net/</dd>
                    </dl>
                </div>
            </div>
            <div class="right_box">
                <p class="contact-tit">Location</p>
                <dl class="contact-txt">
                    <dt>Address</dt>
                    <dd>서울특별시 강남구 삼성로 122길 46 (우)06085</dd>
                    <dt>대중교통 이용시</dt>
                    <dd>
                        <p class="pt-10 mb-10 txt-style">지하철 이용시</p>
                        지하철 7호선 청담역 3번출구에서<br> : 도미노피자 건물을 끼고 우회전하여 골목으로 80m 직진시 골프패스 <br> 지하철 9호선 봉은사역 2번출구에서<br> : 직진 약 580m(영동대로) 이동후 좌회전하여 80m 직진, 우측 내리막길 50m 직진후 좌측 건물

                        <p class="pt-40 mb-10 txt-style">버스 이용시</p>
                        청담역, 경기고교 하차<br> : 301, 401, 2415, 3414, 4419<br> 우리은행청담지점,청담삼익아파트 하차<br> : [간선] 143, 146, 362 [지선] 2413, 3217, 4318 [직행] 9407, 9507, 9607
                    </dd>
                </dl>
            </div>
        </div>
        <!-- CONTENT ]] -->
    </div>
</div>
