<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
        '/windows nt 10/i'     =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }

    return $os_platform;

};

$user_os = getOS();

?>

<html>

    <head>

        <title>NeutronBrowser - The Safest Browser Around</title>
        <link rel="stylesheet" href="/style.css" type="text/css">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    </head>

    <body style="color: #0b192b; font-family: Lato;">

        <div class="lpHeader">

            <div style="float: left; margin-left: 10%;">

                <span class="lpSiteName">Neutron Browser</span>

            </div>

            <div style="float: right; margin-right: 10%; margin-top: 10px;">

                <span class="lpSiteDesc">The Most Secure Browser Around.</span>

            </div>

        </div>

        <div class="lpMiddle">

            <span class="lpCenterTitle">Your Download Is Ready</span>

            <div class="lpDownloadBox">

                <div class="col-left">

                    <ul class="lpSteps">

                        <li style="font-weight: bold; font-size: 40px; padding-top: 0;">Click Button</li>
                        <img src="/images/chalkarrow.png" style="width: 60px; position: absolute; transform: rotate(-45deg) translate(160px,65px);">
                        <li>Start Install</li>
                        <li>Begin Browsing</li>

                    </ul>

                </div>

                <div class="col-right">

                    <div class="lpButton">

                        <div class="lpButtonText">

                            <img src="/images/download.gif">

                            FREE DOWNLOAD

                        </div>

                        <script>

                            var message = 0;

                            function changeMessage() {

                                if (message === 0) {

                                    $( '.lpButtonText' ).text( "INSTALL NOW" );
                                    $( '.lpButtonText' ).prepend("<img src='/images/download.gif'>");
                                    message = 1;

                                } else {

                                    $( '.lpButtonText' ).text( "FREE DOWNLOAD" );
                                    $( '.lpButtonText' ).prepend("<img src='/images/download.gif'>");
                                    message = 0;

                                }

                                setTimeout(function() {

                                    changeMessage();

                                }, 3000);

                            }

                            setTimeout(function() {

                                changeMessage();

                            }, 3000);

                        </script>

                    </div>

                    <div class="lpButtonDisc">

                        <span>By clicking the button above and installing Neutron Browser,
                            I accept and agree to abide by the <a href="/eula">EULA</a> and <a href="/privacy">Privacy Policy.</a></span>

                    </div>

                </div>

                <div class="lpDlInfo">

                    <span><strong>Install Time:</strong> Approx. 20 Seconds</span>
                    <span style="padding: 10px 0;"><strong>Built For:</strong> <?php echo $user_os ?></span>
                    <span><strong>Language:</strong> English</span>

                </div>

            </div>

            <div class="features">

                <div class="featureBox">

                    <img src="/images/un.png">
                    <span>Stop Companies Tracking</span>

                </div>

                <div class="featureBox">

                    <img src="/images/deux.png">
                    <span>FREE For Life</span>

                </div>

                <div class="featureBox">

                    <img src="/images/trois.png">
                    <span>Chrome Browsing Experience</span>

                </div>

            </div>

        </div>

        <div class="lpBottom">

            <div class="lpFeature">

                <div class="lpFeatureTop">

                    <div class="lpFeatureTopLeft">

                        <h2>Stop Companies Tracking</h2>
                        <span>Lorum Ipsum Dolor Sit Amet...</span>

                    </div>

                    <img src="/images/un.png">

                </div>

                <div class="lpFeatureButtonBox">

                    <div class="lpFeatureButton">FREE DOWNLOAD</div>

                    <div class="lpFeatureSpan">

                        <span>By clicking the button above and installing Neutron Browser,
                            I accept and agree to abide by the <a href="/eula">EULA</a> and <a href="/privacy">Privacy Policy.</a></span>

                    </div>

                </div>

            </div>

            <div class="lpFeature">

                <div class="lpFeatureTop">

                    <img style="float: left; width: 12%; margin: 0;" src="/images/deux.png">

                    <div class="lpFeatureTopRight" style="float: right;">

                        <h2 style="margin: 0; font-size: 30px;">FREE For Life</h2>
                        <span>Lorum Ipsum Dolor Sit Amet...</span>

                    </div>

                </div>

                <div class="lpFeatureButtonBox">

                    <div class="lpFeatureButton" style="float: right;">FREE DOWNLOAD</div>

                    <div class="lpFeatureSpan" style="float: left;">

                        <span>By clicking the button above and installing Neutron Browser,
                            I accept and agree to abide by the <a href="/eula">EULA</a> and <a href="/privacy">Privacy Policy.</a></span>

                    </div>

                </div>

            </div>

            <div class="lpFeature">

                <div class="lpFeatureTop">

                    <div class="lpFeatureTopLeft">

                        <h2>Chrome Browsing Experience</h2>
                        <span>Lorum Ipsum Dolor Sit Amet...</span>

                    </div>

                    <img src="/images/trois.png" style="width: 10%; margin: 20px;">

                </div>

                <div class="lpFeatureButtonBox">

                    <div class="lpFeatureButton">FREE DOWNLOAD</div>

                    <div class="lpFeatureSpan">

                        <span>By clicking the button above and installing Neutron Browser,
                            I accept and agree to abide by the <a href="/eula">EULA</a> and <a href="/privacy">Privacy Policy.</a></span>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>