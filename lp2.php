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
$user_os_img = "";

if (strpos($user_os, "Windows") !== false) {

    $user_os_img = "/images/windows.png";

} else if (strpos($user_os, "roid") !== false) {

    $user_os_img = "/images/android.png";

} else {

    $user_os_img = "/images/apple.png";

};

$dlink = "";

if (strpos($user_os, "Windows") !== false) {

    $dlink = "https://storage.googleapis.com/neutron-browser/windows/0.0.2/saferbrowser_installer.exe";

} else {

    $dlink = "https://storage.googleapis.com/neutron-browser/mac/0.0.2/Safer%20Browser.dmg";

};

?>

<html>

    <head>

        <title>Safer Browser - The Safest Browser Around</title>
        <link rel="stylesheet" href="/style.css" type="text/css">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    </head>

    <body class="lp2Body">

        <div class="lp2Header">

            <span style="margin: 0 auto">Instant Browser Security</span>

        </div>

        <div class="lp2TopText">

            <h2><span>ALL-IN-ONE</span> SECURE BROWSER FOR YOUR PC</h2>

        </div>

        <div class="lp2Download">

            <div class="lp2ColLeft">

                <div class="lp2SysInfo">

                    <img src="<?php echo $user_os_img ?>">

                    <div class="lp2SysInfoText">

                        <span style="font-weight: bold; font-size: 18px;">System Information:</span>
                        <span>You are currently running <?php echo $user_os ?></span>
                        <span>Safer Browser is compatible with your operating system</span>

                    </div>

                </div>

                <div class="lp2DownloadBox">

                    <a class="lp2Button" href="<?php echo $dlink ?>" download="SaferBrowser">

                        <div class="lp2ButtonText">

                            <img src="/images/download.gif">

                            START DOWNLOAD

                        </div>

                    </a>

                    <div class="lp2DownloadInfo">

                        <span><strong>Download Time:</strong> Around 20 seconds</span>
                        <span><strong>Manufacturer:</strong> Safer Browser</span>
                        <span><strong>Designed For:</strong> Windows</span>

                    </div>

                </div>

            </div>

            <div class="lp2ColRight">

                <div class="lp2Review">

                    <div class="fivestar"></div>

                    <div class="lp2ReviewInfo">

                        <span style="font-weight: bold; padding: 6px 0; display: block;">Sean, GB - United Kingdom</span>
                        <span>26 May 2017</span>

                    </div>

                    <span class="lp2ReviewComment">Safer Browser has been an absolute god send recently. You just cannot trust what companies are doing online, you need to protect yourself!</span>

                </div>

            </div>

        </div>

        <div class="lp2StripText">

            <h2 style="margin-top: 0; margin-bottom: 0;">INSTALL SAFER BROWSER TO KEEP <span>YOUR SEARCHES</span></h2>
            <h2 style="margin-top: -26px; margin-bottom: 0;"><span>PRIVATE</span> AND <span>YOUR BROWSING SECURE</span></h2>

        </div>

        <div class="lp2Ticks">

            <div class="lp2TickBox">

                <div class="lp2TickBoxImg">

                    <img src="/images/check.png">

                </div>

                <div class="lp2TickBoxText">Clean, uninterrupted ad-free experience</div>

            </div>

            <div class="lp2TickBox" style="margin-left: 88px;">

                <div class="lp2TickBoxImg">

                    <img src="/images/check.png">

                </div>

                <div class="lp2TickBoxText">Stops big companies tracking you online</div>

            </div>

            <div class="lp2TickBox">

                <div class="lp2TickBoxImg">

                    <img src="/images/check.png">

                </div>

                <div class="lp2TickBoxText">Clear your browsing and cookie history in an instant</div>

            </div>

            <div class="lp2TickBox" style="margin-left: 88px;">

                <div class="lp2TickBoxImg">

                    <img src="/images/check.png">

                </div>

                <div class="lp2TickBoxText">Encrypted browser communication for your safety</div>

            </div>

        </div>

        <div class="lp2StripText">

            <h2 style="margin-top: 0; margin-bottom: 0; margin-right: 22px; text-align: right;">WITHOUT SAFER BROWSER <span>YOUR ONLINE ACTIVITY</span></h2>
            <h2 style="margin-top: -26px; margin-bottom: 0; margin-right: 22px; text-align: right;">CAN BE <span>TRACKED BY BIG COMPANIES</span></h2>

        </div>

        <div class="lp2BottomDownload">

            <div class="lp2BottomWindowsCompat">

                <img style="width: 200px;" src="/images/windowscompat.png">

            </div>

            <div class="lp2BottomInfo">

                <span style="display: block"><strong>Install Time:</strong> Approx. 20 Seconds</span>
                <span style="display: block;"><strong>Built For:</strong> <?php echo $user_os ?></span>
                <span><strong>Language:</strong> English</span>

            </div>

            <a class="lp2Button" style="width: 400px; float: right; margin-top: 30px; margin-right: 50px;" href="<?php echo $dlink ?>" download="SaferBrowser">

                <div class="lp2ButtonText">

                    <img src="/images/download.gif">

                    FREE INSTALL

                </div>

            </a>

        </div>

        <div class="lp2Footer">

            <div class="lp2FooterDisc">

                <span>By clicking the button above and installing Safer Browser, I accept and agree to abide by the <a href="/eula">EULA</a> and <a href="/privacy">Privacy Policy.</a></span>

            </div>

        </div>

    </body>

</html>