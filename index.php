<!DOCTYPE html>
<html>
<head>
    <title>Detectify</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content="images/share.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">

    <link rel="stylesheet"  type="text/css" href="style.css">
    <link rel="stylesheet"  type="text/css" href="/swiperstyle.css">

</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="#">
                <?php require 'logos/logotype.svg'; ?>
            </a>
        </div>

        <div class="nav-items">
            <a href="#">How it works</a>
            <a href="#">About us</a>
            <div class="subnav">
                <p class="subnavbtn">
                    Solutions
                    <?php require 'icons/chevron-down_24_white.svg'; ?>
                </p>
                <div class="subnav-content">
                    <div class="subcats">
                        <div class="subnav-cat cat1">
                            <h4>Sub Category</h4>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                        </div>
                        <div class="subnav-cat cat2">
                            <h4>Sub Category</h4>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                        </div>
                        <div class="subnav-cat cat3">
                            <h4>Sub Category</h4>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                            <a href="#">Navigation Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="users">
            <div class="login">
                <a href="#">Log in</a>
            </div>
            <div class="signup">
                <a href="#">Sign up</a>
            </div>
        </div>

        <div class="mob-open">
            <?php require 'icons/Menu_icon.svg'; ?>
        </div>

        <div class="menu-mob">
    		<div class="mob-wrap">
                <div class="nav-items mob-items">
                    <div class="mob-link">
                        <a href="#">How it works</a>
                    </div>
                    <div class="mob-link">
                        <a href="#">About us</a>
                    </div>
                    <div class="subnav">
                        <p class="subnavbtn">
                            Solutions
                            <?php require 'icons/chevron-down_24_white.svg'; ?>
                        </p>
                        <div class="subnav-content">
                            <div class="subcats">
                                <div class="close-subnav">
                                    <?php require 'icons/back.svg'; ?>
                                </div>
                                <div class="subnav-cat cat1">
                                    <h4>Sub Category</h4>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                </div>
                                <div class="subnav-cat cat2">
                                    <h4>Sub Category</h4>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                </div>
                                <div class="subnav-cat cat3">
                                    <h4>Sub Category</h4>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                    <a href="#">Navigation Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>

            <div class="users mob-users">
                <div class="login">
                    <a href="#">Log in</a>
                </div>
                <div class="signup">
                    <a href="#">Sign up</a>
                </div>
            </div>
    	</div>
    </div>

    <div class="hero">
        <div class="intro">
            <h1>Automated penetration testing powered by ethical hackers</h1>
            <p>One morning, as Gregor Samsa was waking up from anxious dreams, he discovered that in bed he had been changed into a monstrous verminous bug. He lay on his armour-hard back and saw, as he lifted his head up a little.</p>
            <a class="body2 primary-button">Start your journey</a>
        </div>

        <div class="hero-image">
            <div class="portrait">
                <img src="images/employee.png" alt="Gregor Samsa">
            </div>

            <div class="background">
                <?php require 'images/shapes.svg'; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="client-block">
            <div class="clients">
                <div class="client">
                    <p class="allcaps">Trust and ❤️ by:</p>
                </div>
                <div class="client">
                    <img src="logos/spotify-logo.png" alt="Spotify">
                </div>
                <div class="client">
                    <img src="logos/trello-logo.png" alt="Trello">
                </div>
                <div class="client">
                    <img src="logos/sbab-logo.png" alt="SBAB">
                </div>
                <div class="client">
                    <img src="logos/trustly-logo.png" alt="Truslty">
                </div>
            </div>
        </div>

        <div class="secure-block">
            <div class="secure-intro">
                <h2>Secure your web app with non-intrusive and customizable scans.</h2>
                <p>‘What’s happened to me,’ he thought. It was no dream. His room, a proper room for a human being, only somewhat too small, lay quietly between the four well-known walls.</p>
            </div>

            <div class="secure-split">
                <div class="split split-left">
                    <img src="images/tests.png" alt="Detectify">
                </div>

                <div class="split split-right">
                    <h2>Monitor your site with 2000+ web application security tests</h2>
                    <p>No matter how hard he threw himself onto his right side, he always rolled again onto his back. He must have tried it a hundred times, closing his eyes, so that he would not have to see the wriggling legs, and gave up only when he began to feel a light, dull pain in his side which he had never felt before.</p>
                </div>
            </div>
        </div>

        <div class="event-container">
            <div class="event-intro">
                <p class="allcaps">We would  love to chat with you</p>
                <h2>Come hang out with Detectify at the following events.</h2>
            </div>

            <div class="filter-bar">
                <div class="search-bar">
                    <input id="searchFilter" type="text" placeholder="">
                </div>

                <div class="filter-buttons" id="btn-container">
                    <div class="filter-btn active" onclick="filterSelection('all')"><p class="allcaps">All</p></div>
                    <div class="filter-btn" onclick="filterSelection('Online')"><p class="allcaps">Online</p></div>
                    <div class="filter-btn" onclick="filterSelection('Live')"><p class="allcaps">Live</p></div>
                    <div class="dropdown">
                        <div class="drop-btn">
                            <p class="allcaps" id="drop-text">Month</p>
                            <div class="down-arrow">
                                <?php require 'icons/chevron-down_24_white.svg'; ?>
                            </div>
                        </div>
                        <div id="theDropdown" class="dropdown-content">
                            <p onclick="filterSelection('Jan')" class="allcaps option filter-btn">Jan</p>
                            <p onclick="filterSelection('Feb')" class="allcaps option filter-btn">Feb</p>
                            <p onclick="filterSelection('Mar')" class="allcaps option filter-btn">Mar</p>
                            <p onclick="filterSelection('Apr')" class="allcaps option filter-btn">Apr</p>
                            <p onclick="filterSelection('May')" class="allcaps option filter-btn">May</p>
                            <p onclick="filterSelection('Jun')" class="allcaps option filter-btn">Jun</p>
                            <p onclick="filterSelection('Jul')" class="allcaps option filter-btn">Jul</p>
                            <p onclick="filterSelection('Aug')" class="allcaps option filter-btn">Aug</p>
                            <p onclick="filterSelection('Sep')" class="allcaps option filter-btn">Sep</p>
                            <p onclick="filterSelection('Oct')" class="allcaps option filter-btn">Oct</p>
                            <p onclick="filterSelection('Nov')" class="allcaps option filter-btn">Nov</p>
                            <p onclick="filterSelection('Dec')" class="allcaps option filter-btn">Dec</p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="controls">
                <div class="button-prev">
                    <?php require 'icons/prev.svg'; ?>
                </div>
                <div class="button-next">
                    <?php require 'icons/next.svg'; ?>
                </div>
            </div>

            <div id="events" class="swiper-container">

                <div id="events-wrapper" class="swiper-wrapper"></div>

                <div class="no-event-card" id="noEvent">
                    <div class="event-body">
                        <h3>Nope.</h3>
                        <p class="body2 event-text">No matches for that search. Sorry about that.</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>

        <div class="CTA">
            <div class="getyouroffer">
                <p class="allcaps">Go hack yourself</p>
                <h2>Try it out for free</h2>
                <p>Get started in a matter of minutes and scan your site as often as you like for 14 days. No credit card required, <br>no strings attached.</p>

                <a class="body2 primary-button">Start your journey</a>
            </div>
            <?php require 'images/blob.svg'; ?>
        </div>
    </div>

    <footer>
        <div class="footer-cols">
            <div class="footer-col">
                <h4>Solutions</h4>
                <a href="#">Security teams</a>
                <a href="#">Managers</a>
                <a href="#">Small business</a>
                <a href="#">Developers</a>
            </div>

            <div class="footer-col">
                <h4>Resources</h4>
                <a href="#">Blog</a>
                <a href="#">Labs</a>
                <a href="#">API</a>
                <a href="#">Support</a>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <a href="#">About</a>
                <a href="#">Get in touch</a>
                <a href="#">Press & media</a>
                <a href="#">Events</a>
                <a href="#">Media</a>
            </div>

            <div class="footer-col">
                <img src="logos/detectify_logo.png" alt="Detectify Logo">
            </div>
        </div>

        <p class="copyright fineprint">© <?php echo date("Y"); ?> detectify | Go hack yourself.</p>
    </footer>

    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="js/events.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
