<?php

$sampleEmails = array(
    "fry@planet-express.com",
    "scruffy@planet-express.com",
    "luke@tatooine.com",
    "leia@alderaan.com",
    "richard@piedpiper.com",
    "erlich@bachmanity.com",
    "moss@reynholm-industries.com",
    "roy@reynholm-industries.com"
);
$placeholderEmailIndex = array_rand($sampleEmails);

$joinSuccess = false;

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        // TODO -- save email address to DB with IP and timestamp
        // REMEMBER: this repo is public... don't store DB credentials here!
    }

    $joinSuccess = true;
}

?><!DOCTYPE html>
<html>
<head>
    <title>Get Started | GitCirrus.io</title>

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <meta name="viewport" content="width=device-width" />

    <link rel="icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body class="regular-content">
    <header>
        <nav>
            <ul>
                <li><a href="./about">About</a></li>
                <li><a href="./blog">Blog</a></li>
                <li><a href="./contact">Contact</a></li>
                <li class="login"><a href="https://admin.gitcirrus.io">Sign In</a></li>
                <li class="join-btn">
                    <a href="./join">Get Started <i class="icon ion-paper-airplane"></i>&nbsp;</a>
                </li>
            </ul>
        </nav>
        <h1><a href="./">GitCirrus<span>.io</span></a></h1>
    </header>

    <div class="main">

        <div class="about">
            <h2>Want to use GitCirrus?</h2>

            <h3>We're currently in closed beta</h3>
            <p>If you're interested in using GitCirrus to host your websites, please enter your email address below to request access to our closed beta. We'll send you an invite as soon as we can!</p>

        </div>
    </div>

    <div class="signup-cta">
        <div class="join-box">

            <?php if ($joinSuccess) { ?>
                <p class="join-success">
                    <i class="icon ion-paper-airplane"></i>
                    <strong>Thanks for requesting access to the GitCirrus closed beta!</strong>
                </p>
                <p>We'll be in touch soon...</p>
            <?php } else { ?>
                <form action="./join" method="POST">
                    <input type="email"
                           name="email"
                           autofocus
                           required
                           autocorrect="off"
                           spellcheck="false"
                           autocapitalize="off"
                           class="signup-textbox"
                           placeholder="<?=$sampleEmails[$placeholderEmailIndex]?>" />
                    <button type="submit" class="signup-button">
                        Request Access
                        <i class="icon icon-airplane ion-paper-airplane"></i>
                    </button>
                </form>

                <p class="extra">We promise never to spam you</p>
            <?php } ?>
        </div>
    </div>

    <footer class="main fixed">
        <div class="container">
            <div class="right">
                <p>GitCirrus is a trading name of JCKD (UK) Ltd.</p>
                <p>Cloud Code icon by IconDots from the Noun Project.</p>
            </div>

            <ul>
                <li class="first"><a href="./terms">Terms</a></li>
                <li><a href="./privacy">Privacy</a></li>
                <li>&bull;</li>
                <li><a href="./about">About</a></li>
                <li><a href="./blog">Blog</a></li>
                <li><a href="./contact">Contact</a></li>
                <!--<li><a href="./api">API</a></li>-->
                <li><a href="https://status.gitcirrus.io">Status</a></li>
            </ul>
        </div>
    </footer>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91320922-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>