<!doctype html>
<html lang="de">
	<head>
		<title>onemanpublisher Games - Kontakt</title>
		<?php include "ext/head.html" ?>
	</head>
	<body>
		<!--================Header Menu Area =================-->
		<?php include "ext/navbar.html" ?>
		<!--================Header Menu Area =================-->

		<!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="https://onemanpublisher.com">Startseite</a>
							<a href="kontakt">Kontakt</a>
						</div>
						<h2>Kontakt</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
		<!--================ Start Kontakt Area ================-->
		<section class="frequently_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main_title">
							<h2>Kontakt</h2>
							<h1>Kontakt</h1>
						</div>
					</div>
				</div>
				<section class="contact_area section_gap">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="54.760571" 
                    data-lon="9.397872" 
                    data-zoom="15" 
                    data-info="onemanpublisher GbR, Ochsenweg 50, 24941 Flensburg, Deutschland"
                    data-mlat="54.760571"
                    data-mlon="9.397872">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Ochsenweg 50</h6>
                                <p>24941 Flensburg</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@onemanpublisher.com</a></h6>
                                <p>Sag uns deine Anmerkung jederzeit!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder=" Namen">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail Adresse">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Betreff">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Nachricht"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn">Absenden</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
			</div>
		</section>
		<!--================ End Kontakt Area ================-->

		<!--================Footer Area =================-->
		<?php include "ext/footer.html" ?>
		<!--================End Footer Area =================-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<?php include "ext/js.html" ?>
	</body>

</html>