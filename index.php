<!-- 
    File: index.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the index page.
    Created on: 28/07/2024
    Last Modified: 23/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "shared/view/HeadMetaData.html" ?>

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="user/style/OurProgramsStyle.css">
    <link rel="stylesheet" href="user/style/TeamLeadersStyle.css">
    <link rel="stylesheet" href="mobile.css">

    <!-- Script -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- <script src="shared/controller/jquery-3.7.1.min.js"></script> -->
    <script src="main.js"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include_once "shared/view/Navbar.html" ?>

    <!-- Main Content Area -->
    <main>
        <!-- Section 1 Introduction -->
        <section id="introSection">
            <div id="introChild1">
                <h1>Santani Life Care Foundation</h1>
                <p><b><span class="auto-type"></span></b></p>
                <img src="assets/images/NGOImage1.jpg" alt="NGO Text Image" id="ngoImage1">
            </div>
            
            <img src="./assets/images/Wellness Banner2.jpg" alt="Wellness Banner" id="wellnessBanner2">
        </section>

        <!-- Section 2 About -->
        <section id="aboutSection">
            <!-- <div> -->
            <img src="assets/images/Logo2.jpeg" alt="Santani Life Care Foundation" id="aboutImg">
            <!-- </div> -->
            <div>
                <p><b>Santani Life Care Foundation</b> is a charitable non-profit organization established in 2023, headquartered in Mumbai Central, Mumbai. We are dedicated to promoting well-being across various sectors including health, traditional AYUSH medicine, job-oriented education, employment, technology, human rights, women's empowerment, art & culture, and animal protection. Our initiatives include affordable yoga and fitness centers, accessible healthcare services, global promotion of traditional Indian medicine, job-oriented training programs, and inclusive projects for the specially abled and women. We aim to foster a healthier, more equitable society through innovation, inclusivity, and community empowerment.</p>

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
                    <p class="countTxt">25+</p>
                    <p>Patients are Cured</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">25+</p>
                    <p>Patients are Cured</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">25+</p>
                    <p>Patients are Cured</p>
                </div>

                <div class="ourWork">
                    <p class="countTxt">25+</p>
                    <p>Patients are Cured</p>
                </div>
            </div>
        </section>

        <!-- Section 7 Certificates -->
        <section id="certificateSection">
            <h2>Certificate & Accreditations</h2>
            <img src="assets/images/NGO Darpan Certificate (17)_page-0001.jpg" alt="">
            <button class="knowMoreBtn" onclick="window.location.href = 'user/view/AboutUs.php#docsSection'">Our Documentations <i class="fa-solid fa-chevron-right"></i></button>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "shared/view/Footer.html" ?>
</body>

</html>