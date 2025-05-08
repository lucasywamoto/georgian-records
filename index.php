<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Home | Georgian Records</title>
	<meta name="author" content="Georgian Records, Inc.">
	<meta name="description" content="Georgian Records' Player Promotional Website">
	<link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/javascript.js"></script>
</head>
<body>
    <header>
        <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/global-nav.php";
		?>
    </header>
    <main>
        <section class="banner">
            <div style="height: 100%;">
                <h1 style="color: #e3cdbd; font-size: 72px; text-align: left; letter-spacing: 3px;">High-Fidelity<br>Record Player</h1>
            </div>
        </section>
        <section class="two-rows-sec" style="background-color: #e3cdbd;">
            <div>
                <div><img src="imgs/at-lp5x_03.png" alt="record player" style="position: relative; left: -10%; width: 125%;"></div>
                <div class="text-block">
                    <h2>Introducing Record<br>Player Pro,</h2>
                    <p>a high-end turntable designed for audiophiles, featuring premium materials, precise tracking, and advanced vibration isolation. It offers adjustable speeds (33 1/3, 45, 78 RPM), upgradable components, and USB connectivity. With electronic speed control and premium cartridges, it delivers exceptional sound quality and customization — available now at Georgian Records.</p>
                    <a class="button" href="details.php">DETAILS</a>
                </div>
            </div>
        </section>
        <section class="two-rows-sec" style="background-color: #4b4f6c;">
            <div class="full-width">
                <div class="text-block" style="color: #e3cdbd; margin-left: 5%;">
                    <h2>Features</h2>
                    <ul style="padding-left: 0;">
                        <li>Premium build quality with high-end components and belt-drive system for superior sound reproduction.</li>
                        <li>Versatile playback with adjustable speeds (33 1/3, 45, 78 RPM) and customizable components.</li>
                        <li>Advanced features including vibration isolation, electronic speed control, and premium cartridges.</li>
                        <li>Modern connectivity with USB port for digitizing vinyl and multiple grounding options.</li>
                        <li>Elegant design and exceptional craftsmanship for both performance and aesthetics.</li>
                    </ul>
                </div>
                <div class="home-section-2-img">
                    <img src="../imgs/at-lp5x_07.png" alt="" style="width: 100%; height: 100%;" >
                </div>
            </div>
        </section>
        <section class="milestones-section">
            <div>
                <div class="milestone">
                    <img src="imgs/vinyl-record-svgrepo-com.svg" alt="Vinyl" width="100">
                    <h2 class="count first-count">13395</h2>
                    <p>Records Played</p>
                </div>
                <div class="milestone">
                    <img src="imgs/heart-svgrepo-com.svg" alt="Heart" width="100">
                    <h2 class="count second-count">0</h2>
                    <p>Happy Customers</p>
                </div>
                <div class="milestone">
                    <img src="imgs/cup-svgrepo-com.svg" alt="Cup" width="100">
                    <h2 class="count third-count">0</h2>
                    <p>Cups of Coffee</p>
                </div>
            </div> 
        </section>
        <section class="two-rows-sec" style="background-color: #985d6f;">
            <div>
                <div><img src="imgs/pngwing.com.png" alt="record player" class="rotate" style="width: 80%;"></div>
                <div class="text-block" style="color: #e3cdbd;">
                    <h2>Why is it good?</h2>
                    <p>Record Player Pro is a premium professional turntable that delivers exceptional vinyl playback with precision and elegance. Featuring high-quality components, a belt-drive system, adjustable speeds (33 1/3, 45, 78 RPM), and advanced anti-vibration design, it ensures stable, high-fidelity sound. Customizable with detachable parts and premium cartridges (MC or MM), it also offers precise tracking, USB connectivity for digitization, and multiple grounding options for cleaner audio. Available exclusively at Georgian Records, it’s built for audiophiles seeking top-tier performance and craftsmanship.</p>
                    <a class="button" href="reviews.php" style="background-color: #e3cdbd; color: #1b2132;">REVIEWS</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
    <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/footer-nav.php";
		?>
    </footer>
</body>
</html>