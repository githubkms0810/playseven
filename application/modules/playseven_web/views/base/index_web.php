
<!-- Style CSS -->
<link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/assets/css/fakeLoader.css">
<link rel="stylesheet" href="/public/assets/css/style.css">
<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


<!--
<div class="footer_web">
    <div class="footer_content_web">
        <a href="https://www.naver.com/" target="_blank">안녕안녕</a>
    </div>
</div>
-->


<section id="banner" class="text-center">
    <div class="container" style="padding: 250px 0;">
        <h1>플레이세븐은 사용자 관찰을 통해 창조적이고 혁신적인 홈페이지를 컨설팅해 드리는 전문가 그룹입니다.</h1>
        <a href="#">문의하기</a>
    </div>
</section>
<section class="demos">
        <div class="container">
            <div class="col-sm-6 text-center">
                <h3>골프패스</h3>
                <div class="demo_box1">
                    <img class="img-responsive" src="/public/assets/images/1.png" alt="Page">
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <h3>코리아 통번역 센터</h3>
                <div class="demo_box2">
                    <img class="img-responsive" src="/public/assets/images/2.png" alt="Page">
                </div>
            </div>
        </div>
    </section>
    <!-- ====JS==== -->
    <script src="/public/assets/js/jquery-3.1.1.min.js"></script>
    <script src="/public/assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
    <script src="/public/assets/js/fakeLoader.min.js"></script>
    <script>
        //Preloader
        $(function() {
            $("#preloader").fakeLoader({
                timeToHide: 1200,
                zIndex: "99999999",
                spinner: "spinner7",
                bgColor: "#fff"
            });
        });
    </script>