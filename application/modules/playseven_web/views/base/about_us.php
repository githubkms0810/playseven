<style>
    p{
        font-size: 18px;
    }
#wrap {
    min-width: 1100px;
}

#container_wrap {
    position: relative;
    width: 100%;
    text-align: center;
}

.company-about-wrap {
    display: block;
    background: #fafafa
}

.company-about-wrap h3 {
    font-size: 47px;
    color: #5b5b5b;
    letter-spacing: -4px
}

w1100_wrap .pt-120 {
    padding-top: 120px;
}

.pt-120 {
    padding-top: 120px
}

.mb-10 {
    margin-bottom: 10px;
}

.company-about-tit {
    font-size: 25px;
    color: #5b5b5b
}

.company-about-txt {
    font-size: 21px;
    color: #5b5b5b
}

.company-about-txt p {
    font-size: 38px;
    color: #35bcd5;
    padding-top: 100px
}

.company-about-txt img {
    padding: 0px 0 50px 0px
}

.pt-50 {
    padding-top: 50px;
}

.hr_line5 {
    width: 50px;
    border-bottom: 2px solid #35bcd5;
    margin: auto
}

.pt-60 {
    padding-top: 60px;
}

.pt-10 {
    padding-top: 10px;
}


/**about**/

.pt-120 {
    padding-top: 120px
}

.pt-130 {
    padding-top: 130px
}

.company-about-wrap {
    display: block;
    background: #fafafa
}

.company-about-wrap h3 {
    font-size: 47px;
    color: #5b5b5b;
    letter-spacing: -4px
}

.company-about-tit {
    font-size: 25px;
    color: #5b5b5b
}

.company-about-txt {
    font-size: 21px;
    color: #5b5b5b
}

.company-about-txt p {
    font-size: 38px;
    color: #35bcd5;
    padding-top: 100px
}

.company-about-txt img {
    padding: 0px 0 50px 0px
}

.hr_line5 {
    width: 50px;
    border-bottom: 2px solid #35bcd5;
    margin: auto
}

/*contackt us*/

.company-contact-wrap {
    position: relative;
    overflow: hidden;
    color: #5b5b5b
}

.company-contact-wrap .text-con {
    position: relative;
    float: left;
    background: #fafafa;
    width: 50%;
}

/**�쇱そ �띿뒪��**/

.company-contact-wrap .left-box {
    width: 550px;
    float: right;
    text-align: left;
    padding: 100px 0px 150px 0px
}

.company-contact-wrap .contact-tit {
    font-size: 25px;
    color: #5b5b5b;
    padding-bottom: 30px
}

.company-contact-wrap .contact-txt dt {
    font-size: 18px;
    font-weight: bold;
    padding-top: 30px
}

.company-contact-wrap .contact-txt dd {
    font-size: 18px;
    padding: 5px 0px
}

/**�ㅻⅨ履� �띿뒪��**/

.company-contact-wrap .right_box {
    text-align: left;
    padding: 100px 0px 90px 90px;
    overflow: hidden
}

.contact-txt .txt-style {
    font-weight: 500
}

.pt-30 {
    padding-top: 30px;
}


</style>
<div id="wrap">
        <div id="container_wrap">
            <!-- CONTENT [[ -->
            <div class="company-about-wrap">
                <div class="w1100_wrap pt-120">
                    <br><br><br><br><p class="company-about-tit">COMPANY</p>
                    <h3>새로운 골프문화를 선도하는 스마트스코어</h3>
                    <div class="company-about-txt">
                        <div class=" pt-50">
                            안녕하십니까. 스마트스코어입니다.<br> 골프는 많은 현대인들의 친구이자 위로입니다. 더 가까운 친구, 더 즐겁고<br> 따뜻한 위로가 되도록 하겠습니다.직원들, 회원들, 골퍼들, 골프장 모두의 새로운<br> 행복을 위하여 항상 노력하는 스마트스코어가 되겠습니다.<br>
                        </div>
                        <div class="hr_line5 pt-60"></div>
                        <div class="pt-60">
                            CEO 정성훈<br> 골프에 대한 흥미와 이해를 증진시켜 골프문화와 산업을 선도하겠다는 포부.<br> 명예와 신의를 중시하는 골프 애호가.<br><br><br><br><br>
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
                            <dd>http://www.smartscore.kr/</dd>
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
                            지하철 7호선 청담역 3번출구에서<br> : 도미노피자 건물을 끼고 우회전하여 골목으로 80m 직진시 스마트스코어 <br> 지하철 9호선 봉은사역 2번출구에서<br> : 직진 약 580m(영동대로) 이동후 좌회전하여 80m 직진, 우측 내리막길 50m 직진후 좌측 건물

                            <p class="pt-40 mb-10 txt-style">버스 이용시</p>
                            청담역, 경기고교 하차<br> : 301, 401, 2415, 3414, 4419<br> 우리은행청담지점,청담삼익아파트 하차<br> : [간선] 143, 146, 362 [지선] 2413, 3217, 4318 [직행] 9407, 9507, 9607
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- CONTENT ]] -->
        </div>
    </div>