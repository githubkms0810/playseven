<link rel="stylesheet" href="/public/css/style_about.css">
<!-- Resource style -->


<div id="wrap">
    <div id="container_wrap">
        <!-- CONTENT [[ -->
        <div class="company-about-wrap" style="display:none;">
            <div class="w1100_wrap pt-120">
                <br><br><br><br>
                <p class="company-about-tit">COMPANY</p>
                <h3>Golf Passes Leading the New Golf Culture</h3>
                <div class="company-about-txt">
                    <div class=" pt-50">
                        Hello. Golf passes.<br> Golf is a friend and back of many modern people. Closer friends, more enjoyable<br>Let's be warm and comfortable. It's a great place to stay for our employees, members, golfers,<br>I will be a golf pass that will always strive for happiness.<br>
                    </div>
                    <div class="hr_line5 pt-60"></div>
                    <div class="pt-60">
                        CEO Hwang Hyun-chul<br> Aspiration to lead the golf culture and industry by promoting interest and understanding of golf.<br> Golf lover with honor and honor.<br><br><br><br><br>
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
                        lat: 37.558613,
                        lng: 126.837683
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 15,
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
                        <dd><strong>02.6959.5454</strong>

                            <p class="pt-30">[Weekdays] AM 09: 30 ~ PM 06:30 [Saturday / Holidays] Closed<br> ※ Please use the bulletin board on Saturdays / holidays.</p> 
                        </dd>
                        <dt>Email</dt>
                        <dd>sbin910@playseven.co.kr</dd>
                        <dt>Website</dt>
                        <dd>http://www.playseven.co.kr</dd>
                        <dd>http://www.golfpass.net</dd>
                    </dl>
                </div>
            </div>
            <div class="right_box">
                <p class="contact-tit">Location</p>
                <dl class="contact-txt">
                    <dt>Address</dt>
                    <dd>227, Gonghang-daero, Gangseo-gu, Seoul, Korea</dd>
                    <dt>When using public transportation</dt>
                    <dd>
                        <p class="pt-10 mb-10 txt-style">When using the subway</p>
                        Subway Line 5, Balsan Station Exit 9<br> : Straight ahead, the blue door on the eleventh floor of the Alpha Library building.<br><br>

                        <p class="pt-40 mb-10 txt-style">When using the bus</p>
                        Get off at Magogong Sagari<br> : 60, 60-3, 88, 1002, 601, 605, N26, 6629, 2000, 3000, 6000, 6003, 6008
                    </dd>
                </dl>
            </div>
        </div>
        <!-- CONTENT ]] -->
    </div>
</div>
