<!-- 
    File: index.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the index page.
    Created on: 28/07/2024
    Last Modified: 27/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "shared/view/HeadMetaData.html" ?>

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tempStyle.css">
    <link rel="stylesheet" href="user/style/OurProgramsStyle.css">
    <link rel="stylesheet" href="user/style/TeamLeadersStyle.css">
    <link rel="stylesheet" href="mobile.css">

    <!-- Script -->
    <script src="main.js"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include_once "shared/view/Navbar.html" ?>

    <!-- Main Content Area -->
    <main>
        <!-- Section 0 -->
        <section id="freeCampSection">
            <img src="assets/images/Free Camp Compressed.jpg" alt="Free Medical Camp on 1st December 2024" onclick="window.location.href = 'assets/images/Free Camp.jpg'">
            <i class="fa-solid fa-circle-xmark" onclick="document.getElementById('freeCampSection').style.display = 'none';"></i>
        </section>

        <!-- Section 1 Introduction -->
        <section id="bannerSection">
            <div class="banner-inner">
                <div class="banner-images">
                    <!-- Ambulance -->
                    <!--<div class="banner-image" style="background-image: url('assets/images/BannerImage4.jpeg');"></div>-->
                    <div class="banner-image" style="background-image: url('assets/images/HealthCare.jpg');"></div>

                    <!-- Wellness Polyclinic & Day Care Center -->
                    <div class="banner-image" style="background-image: url('assets/images/SLCF02.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF01.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF04.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF03.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF05.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF07.jpg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF08.jpeg');"></div>
                    <div class="banner-image" style="background-image: url('assets/images/SLCF09.jpg');"></div>

                    <div class="banner-image" style="background-image: url('assets/images/Women.jpg');"></div>

                    <!-- Other Images can be used as required -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner7.png');"></div> -->
                    <!--<div class="banner-image" style="background-image: url('assets/images/Banner5.jpg');"></div>-->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner1.jpg');"></div> -->
                    <!--<div class="banner-image" style="background-image: url('assets/images/Banner2.jpg');"></div>-->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage5.jpeg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner4.png');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner3.jpg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage3.jpeg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/Banner6.jpg');"></div> -->
                    <!-- <div class="banner-image" style="background-image: url('../../assets/images/BannerImage4.jpeg');"></div> -->
                </div>

                <!-- Intro -->
                <div class="banner-text glass">
                    <h1>Santani Life Care Foundation</h1>
                    <p>Alone we can do so little, Together we can do so much.</p>
                </div>
            </div>
        </section>

        <!-- Section 0 -->
        <section id="freeCampSection2">
            <h1>Free Mega Medical Camp Organised on <br>1st December 2024</h1>            

            <img src="assets/images/Free Camp Compressed.jpg" alt="Free Medical Camp on 1st December 2024" onclick="window.location.href = 'assets/images/Free Camp.jpg'">

            <br>
            <h3>Location: <a href="https://maps.app.goo.gl/srWsym7B7far3GrM9">Shop no. 9B & 9C, First Floor, Kashinath Building, Above Wellness Forever, Maulana Azad Road, Jacob Circle, Saath Rasta, Mumbai - 400 011</a></h3>
            <br>
            <div>
                <ul>
                    <li><h5><a href="tel:9372077340">93720 77340</a></h5></li>
                    <li><h5><a href="tel:877978568">87797 85686</a></h5></li>
                    <li><h5><a href="mailto:aiims.foundation24@gmail.com">aiims.foundation24@gmail.com</a></h5></li>
                    <li><h5><a href="https://santanilifecare.in"> Santani Life Care Foundation</a></h5></li>
                </ul>
            </div>
        </section>

        <!-- Section 2 About -->
        <section id="aboutSection">
            <img src="assets/images/Logo2.jpeg" alt="Santani Life Care Foundation" id="aboutImg">
            <div>
                <p><b>Santani Life Care Foundation</b> is a charitable non-profit organization established in 2024, headquartered in Mumbai Central, Mumbai. We are dedicated to promoting well-being across various sectors including health, traditional AYUSH medicine, job-oriented education, employment, technology, human rights, women's empowerment, art & culture, and animal protection. Our initiatives include affordable yoga and fitness centers, accessible healthcare services, global promotion of traditional Indian medicine, job-oriented training programs, and inclusive projects for the specially abled and women. We aim to foster a healthier, more equitable society through innovation, inclusivity, and community empowerment.</p>

                <button class="knowMoreBtn" onclick="window.location.href = 'user/view/AboutUs.php'">Know More About Us <i class=" fa-solid fa-chevron-right"></i></button>
            </div>
        </section>

        <!-- Section 3 Programs -->
        <?php include_once "user/view/OurPrograms.html" ?>

        <!-- Section 4 Founder -->
        <!-- <section id="aboutFounder">
            <div>
                <h1>Mr. Santosh Suryawanshi</h1>
                <h5>Founder of Santani Life Care Foundation</h5>
                <p></p>
            </div>
            <img src="assets/images/Santosh S..jpeg" alt="Santosh S.">
        </section> -->

        <!-- Section 5 Team Leaders -->
        <?php include_once "user/view/TeamLeadersTable.html" ?>

        <!-- Section 6 Our Work -->
        <section id="ourWorkSection">
            <h2>Our Work</h2>
            <div id="ourWorkDiv">
                <div class="ourWork">
                    <p class="countTxt">1050+</p>
                    <p>Patients are Cured</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">1525+</p>
                    <p>Persons Trained in the field of Health Care & Technical Skills</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">265+</p>
                    <p>Persons Placed for Jobs</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">13+</p>
                    <p>Seminars Conducted on Traditional Medicine of AYUSH</p>
                </div>
            </div>
        </section>

        <!-- Section 7 Certificates -->
        <section id="certificateSection">
            <h2>Certificate & Accreditations</h2>
            <img src="assets/images/NGO Darpan Certificate (17)_page-0001.jpg" alt="NGO Darpan Certificate">
            <button class="knowMoreBtn" onclick="window.location.href = 'user/view/AboutUs.php#docsSection'">Our Documentations <i class="fa-solid fa-chevron-right"></i></button>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "shared/view/Footer.html" ?>
</body>

</html>