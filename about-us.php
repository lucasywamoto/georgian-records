<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Home | Georgian Records</title>
	<meta name="author" content="Georgian Records, Inc.">
	<meta name="description" content="Georgian Records' Player Promotional Website">
	<link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/global-nav.php";
		?>
    </header>
    <main>
        <div class="banner-about-us" style="height: 100%;">
            <p>At Georgian Records, we are a group of music enthusiasts who share a passion for the vintage sound of LPs. Our story began when five friends – Leonardo, Lucas, Marcos, Megumi and Renata - met during an exciting Computer Programming Course. Inspired by our mutual love for music, we decided to combine our skills and create a company that could provide music lovers with the authentic experience of vinyl records, recapturing the charm and sonic richness lost in the digital age.</p>
        </div>
        <section style="background-color: #e3cdbd; padding-bottom: 32px;">
            <div>
                <h1>Meet the team</h1>
            </div>
            <div class="profile">
                <div class="profile-info">
                    <img src="imgs/Lucas.jpg" alt="Lucas">
                    <h3>Lucas</h3>
                    <p style="text-align: center; margin-top: 0;">Creative Director</p>
                </div>
                <div class="about-text">
                    <p>Lucas, our Creative Director, brings a unique perspective with his Brazilian-Japanese heritage. With a background in Graphic Design and current studies in Computer Programming in Canada, he masterfully blends artistic vision with technical expertise. Though his love for vinyl developed later in life, he now cherishes his own turntable and brings his creative talents to every aspect of Georgian Records' visual identity.</p>
                </div>
            </div>
            <div class="profile" style="margin-top: 32px;">
                <div class="profile-info">
                    <img src="imgs/Leonardo.jpg" alt="Leonardo">
                    <h3>Leonardo</h3>
                    <p style="text-align: center;">Marketing Director</p>
                </div>
                <div class="about-text">
                    <p>Leonardo is our Marketing Director from Brazil. As an English professor turned programming enthusiast, he brings a unique blend of communication skills and technical knowledge to Georgian Records. His deep appreciation for music stems from his Brazilian heritage and childhood experiences with his family's LP collection. At Georgian Records, he combines his passion for music with programming expertise to enhance the customer experience.</p>
                </div>
            </div>
            <div class="profile" style="margin-top: 32px;">
                <div class="profile-info">
                    <img src="imgs/Renata.jpg" alt="Renata">
                    <h3>Renata</h3>
                    <p style="text-align: center; margin-top: 0;">Managing Director</p>
                </div>
                <div class="about-text">
                    <p>Renata, our founder and Managing Director, moved from Brazil to Canada to study Computer Programming. Her vision for Georgian Records was inspired by childhood memories of her family's turntable and her late grandfather's love for vinyl records. She leads the company with a mission to combine vintage charm with modern technology, bringing the magic of vinyl to a new generation.</p>
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