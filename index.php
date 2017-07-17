<html>

	<head>

		<title>SaferBrowser - The Safest Browser Around</title>
		<link rel="stylesheet" href="/style.css" type="text/css">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="/images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/fonts/fonts.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	</head>

	<body>

		<div class="topContent">

			<div class="header">
			
				<div class="logoBox">
				
					<img class="nblogo" src="/images/saferlogo.png" >

				</div>

				<div class="navigationBox">

                    <script>

                        function scrollToFeatures() {

                            $('html, body').animate({ scrollTop: $( '#features' ).offset().top - 60 }, 'slow');
                            return false;

                        }

                        function scrollToTestimonials() {

                            $('html, body').animate({ scrollTop: $( '#testimonial' ).offset().top }, 'slow');
                            return false;

                        }

                    </script>

					<ul class="navigation">

						<li><a onclick="scrollToFeatures()">Features</a></li>
                        <li><a onclick="scrollToTestimonials()">Testimonials</a></li>
						<li><a>Download</a></li>

					</ul>

				</div>

			</div>

			<div class="h1Box">

				<h1>Take Control of your Online</h1>
                <h1 style="margin-top: -60px;">Security & Privacy</h1>

			</div>

            <div class="h2Box">

                <h2>In-Browser Security Management for your Peace of Mind</h2>

            </div>

            <div class="dlBox">

                <a class="dlButton">DOWNLOAD NOW <img src="/images/arrow.png"></a>

            </div>

			<div class="siteBox">

				<img class="siteimg" src="/images/neutronbrowser.png">

			</div>

		</div>

		<div id="features" class="middleContent">

            <div class="secondH1Box">

                <span class="secondH1">Advanced Security & Privacy Features</span>

            </div>

            <div class="undeuxtrois">

                <div class="un">

                    <img src="/images/adblock.png" style="height: 49px; margin-bottom: 25px;">

                    <span class="udtHeader">Adblock</span>

                    <span class="udtDesc">Stop annoying ads disrupting your browsing experience</span>

                </div>

                <div class="deux">

                    <img src="/images/bug.png" style="height: 47px; margin-bottom: 27px;">

                    <span class="udtHeader">Antivirus</span>

                    <span class="udtDesc">Stop viruses and malware from attacking your computer</span>

                </div>

                <div class="trois">

                    <img src="/images/safe.png">

                    <span class="udtHeader">Private Browsing</span>

                    <span class="udtDesc">Launch a new session and browse the internet privately</span>

                </div>

            </div>

            <div class="undeuxtrois">

                <div class="un">

                    <img src="/images/donttrack.png" style="height: 41px; margin-bottom: 33px;">

                    <span class="udtHeader">Do Not Track</span>

                    <span class="udtDesc">Prevent websites, social media and ad networks from tracking</span>

                </div>

                <div class="deux">

                    <img src="/images/cleaner.png" style="height: 49px; margin-bottom: 25px;">

                    <span class="udtHeader">Privacy Cleaner</span>

                    <span class="udtDesc">Clear your browsing and cookie history with one click</span>

                </div>

                <div class="trois">

                    <img src="/images/flash.png">

                    <span class="udtHeader">Flash Control</span>

                    <span class="udtDesc">Optimize speed by controlling when Flash loads in your browser</span>

                </div>

            </div>

		</div>

        <div id="testimonial" class="testimonial">

            <span class="testHead">Testimonials</span>

            <img src="/images/quote.png">

            <div id="quote1">

                <div class="testQuote">

                    <span>For a long time I'd been trying to figure out how adverts were following me around the web, on Facebook and on other sites I went to. Now I can browse in peace thanks to Safer Browser!</span>

                </div>

                <span class="testName">SEAN JONES, LONDON</span>

            </div>

            <div id="quote2" style="display: none">

                <div class="testQuote">

                    <span>Online privacy is something that many people still don't take seriously. By using any other browser, you're allowing big companies to build up a profile of you online, which I didn't want.</span>

                </div>

                <span class="testName">JOHN HAINES, SOUTHAMPTON</span>

            </div>

            <div id="quote3" style="display: none">

                <div class="testQuote">

                    <span>I really love how simple Safer Browser is - it's just like using Chrome, but without the annoying ads which follow you around whilst you're browsing. I can't see myself using another browser from now on!</span>

                </div>

                <span class="testName">JOE BURGESS, PORTSMOUTH</span>

            </div>

            <script>

                var current = 1;

                function change() {

                    $( "#quote" + current.toString() ).fadeOut(500);
                    if ( current === 3 ) { current = 1; } else { current = current + 1; };
                    $( "#quote" + current.toString() ).delay(500).fadeIn(500);

                };

                setInterval(function() { change() }, 10000);

            </script>

        </div>

        <div class="getStarted">

            <span class="getStartedH1">Ready to get Started?</span>

            <span class="getStartedH2">Lorem ipsum dolor sit amet ed posuere consectetur est at lobort</span>

            <div class="dlBox">

                <a class="dlButton">DOWNLOAD NOW <img src="/images/arrow.png"></a>

            </div>

        </div>

        <div class="footer">

            <div class="links1">

                <a href="/about">ABOUT</a>
                <a href="/faqs">FAQS</a>
                <a href="/support">SUPPORT</a>

            </div>

            <div class="links2">

                <a href="/terms">TERMS</a>
                <a href="/privacy">PRIVACY</a>
                <a href="/eula">EULA</a>

            </div>

            <div class="footerRight">

                <img src="/images/greysaferlogo.png">
                <span>© Safer Browser. All Rights Reserved.</span>

            </div>

        </div>

	</body>

</html>