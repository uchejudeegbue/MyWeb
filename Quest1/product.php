<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <title>Quest Online</title>
    <link rel="stylesheet" type="text/css"  href="styles.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="q1style.css">
</head>
<!--start body-->
<body>

<!--start navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top id=my-navbar">
    <!--start container-->
    <div class="container-fluid">
        <!--start navbar-header-->
        <div class="navbar-header">
            <a class="navbar-brand" href=""><img class="quest" src="qlogo.jpg" alt="Q"/><span id="qname">Quest Online</span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!--end navbar-header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About.Us</a></li>
            </ul>
        </div>
    </div>
    <!--end container-->
</nav>
<!--end navbar-->


<!--start jumbotron-->
<div class="row2">
    <div class="container-fluid">

    </div>
</div>

<div class="jumbotron" id="jumbotron1">
    <!--start container-->
    <div class="container-fluid text-center">
        <div class="class1">
            <h2><strong>Share your opinion and get rewarded</strong></h2>

            <ul class="list-unstyled list-inline">
                <li><a href="signup.php"><strong>Sign up / Register</strong></a></li>
                <li><a href="survey.html"><strong>Take Survey</strong></a></li>
                <li><a href="reward.html"><strong>Reward</strong></a></li>
            </ul>

        </div>
    </div>
    <!--end container-->
</div>
<!--end jumbotron-->


<!--start main-->
<main>
    <div id="div1h" class="div1h">
        <h1> <strong>LEN0V0 Product Testing Page</strong></h1>

        <p>
            Click the continue button to proceed now


        </p>
        <?php
        /**
         * Created by PhpStorm.
         * User: UCHE EGBUE BENDAC
         * Date: 2/11/2017
         * Time: 3:53 PM
         */
        ?>

    </div>



</main>
<!--end main-->

<!--start footer-->
<footer class="footer">

    <!--start container-->
    <div class="container">

        <!--start nav-->

        <ul class="list-inline foot-links">
            <li><a href="aboutus.html"><strong>About.Us</strong></a></li>
            <li><a href="termsofuse.html"><strong>Terms.of.Use</strong></a></li>
            <li><a href="privacypolicy.html"><strong>Privacy.Policy</strong></a></li>
            <li><a href="disclaimer.html"><strong>Disclaimer</strong></a></li>
            <li><a href="faq.html"><strong>FAQs</strong></a></li>
            <li><a href="contactus.html"><strong>Contact.Us</strong></a></li>
        </ul>

        <!--end nav-->

    </div>
    <!--end container-->

    <!--start container-->
    <div class="container">

        <ul class="list-inline social-media">
            <li><a href="https://www.facebook.com #" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook-official"></i> </a></li>
            <li><a href="https://www.flickr.com #" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr" style="color:blue"></i></a></li>
            <li><a href="https://www.instagram.com #" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram" style="color:purple"></i></a></li>
            <li><a href="https://www.linkedin.com #" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin-square" style="color: darkcyan"></i></a>
            </li>
            <li><a href="https://www.pinterest.com #" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest-square" style="color:red"></i></a></li>
            <li><a href="https://www.snapchat.com #" data-toggle="tooltip" title="Snapchat"><i class="fa fa-snapchat-square" style="color:yellow"></i></a></li>
            <li><a href="https://www.tumblr.com #" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr-square" style="color: darkslategray"></i></a>
            </li>
            <li><a href="https://www.twitter.com #" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter-square" style="color: deepskyblue"></i></a>
            </li>
            <li><a href="https://www.youtube.com #" data-toggle="tooltip" title="YouTube"><i class="fa fa-youtube-play" style="color:darkred"></i></a></li>
        </ul>

        <!--end nav-->

    </div>
    <!--end container-->

    <div class="divf3">
        <p>&copy Quest Online is a registered trademark under the trade laws No.A149 001 B29 - All rights reserved
            2017</p>
    </div>

    <!--start jquery script-->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!--end j query script-->

</footer>
<!--end footer-->

</body>
<!--end body--></html>
