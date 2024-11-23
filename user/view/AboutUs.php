<!-- 
    File: user/view/AboutUs.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the About Us page.
    Created on: 01/08/2024
    Last Modified: 23/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../style/AboutUsStyle.css">
    <link rel="stylesheet" href="../style/mobile/AboutUsMx  obile.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <main>
        <!-- Section 1 Banner -->
        <section id="bannerSection">
            <div class="banner-inner">
                <div class="banner-images">
                    <div class="banner-image" style="background-image: url('../../assets/images/BannerImage4.jpeg');"></div>

                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF02.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF01.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF04.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF03.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF05.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF07.jpg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF08.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('../../assets/images/SLCF09.jpg');"></div>

                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner7.png');"></div> -->
                    <div class="banner-image" style="background-image: url('../../assets/images/Banner5.jpg');"></div>
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner1.jpg');"></div> -->
                    <div class="banner-image" style="background-image: url('../../assets/images/Banner2.jpg');"></div>
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage5.jpeg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner4.png');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner3.jpg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage3.jpeg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner6.jpg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage4.jpeg');"></div> -->
                </div>
                <div class="banner-text glass">
                    <h1>Santani Life Care Foundation</h1>
                    <p>Alone we can do so little, Together we can do so much.</p>
                </div>
            </div>
        </section>

        <!-- Section 2 About -->
        <section id="aboutUsSection" class="infoDiv">
            <h3 class="headingText">About Us</h3>

            <p><big><b>Santani Life Care Foundation</b></big> is a non-profit organization founded in 2023 and based in Mumbai Central, Mumbai. Our mission is to enhance the quality of life by addressing key areas crucial for individual and societal well-being. We operate across a diverse range of sectors, including <i>health, traditional AYUSH medicine, job-oriented education, employment, technology, human rights, women's empowerment, art & culture, and animal protection.</i></p>

            <p>Our <big>health</big> initiatives focus on establishing <i>affordable yoga, meditation, and fitness centers</i>, promoting holistic health by integrating physical and mental wellness practices. We also provide accessible healthcare services through small clinics staffed with qualified professionals, ensuring that quality medical care is available to everyone. In promoting traditional <big>AYUSH</big> medicine, we work to raise global awareness and credibility by hosting international conferences and creating information hubs abroad.</p>

            <p>We offer <i>job-oriented education</i> to equip individuals with the skills necessary for specific careers, fostering employability and economic independence. Our projects in <big>employment and technology</big> aim to create new job opportunities and support the development and adoption of innovative solutions. We champion human rights by advocating for equality and justice, and we support specially abled individuals through inclusive programs that remove barriers to participation in all aspects of life.</p>

            <p>Additionally, we <big>empower women</big> by providing them with the resources and opportunities to engage fully in society. Our <big>cultural initiatives</big> celebrate India's rich heritage, using <i>art and culture</i> to bridge communities and promote national unity. Finally, we are committed to <big>animal protection</big>, working to ensure the welfare of <i>stray animals and pets</i> through dedicated support centers.</p>

            <p>Through these comprehensive efforts, <b>Santani Life Care Foundation</b> aspires to build a healthier, more equitable society characterized by innovation, inclusivity, and community-driven progress.</p>
        </section>

        <!-- Section 3 About Founder -->
        <!-- <section id="founderSection" class="infoDiv">
            <h3 class="headingText">About Founder</h3>
            <div>
                <img src="../../assets/images/Santosh S..jpeg" alt="Santosh S.">

                <span>
                    <h1>Mr. Santosh Suryawanshi</h1>
                    <h5>Founder of Santani Life Care Foundation</h5>
                    <p></p>
                </span>
            </div>
        </section> -->

        <!-- Section 4 Vision & Mission -->
        <section id="vissionSection">
            <!-- Vision -->
            <div>
                <h3 class="headingText">Our Vision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fugit facere numquam ad eum aperiam debitis, eos nemo et ratione odit necessitatibus fugiat maxime cum minima eius voluptatem consequuntur voluptates!</p>
            </div>

            <!-- Mission -->
            <div>
                <h3 class="headingText">Our Mission</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fugit facere numquam ad eum aperiam debitis, eos nemo et ratione odit necessitatibus fugiat maxime cum minima eius voluptatem consequuntur voluptates!</p>
            </div>
        </section>

        <!-- Section Documentations: Bootstrap Styling -->
        <?php include_once "DocumentationSection.html" ?>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>
</body>

</html>