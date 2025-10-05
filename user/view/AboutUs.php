<!-- 
    File: user/view/AboutUs.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the About Us page.
    Created on: 01/08/2024
    Last Modified: 05/10/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../style/AboutUsStyle.css">
    <link rel="stylesheet" href="../style/mobile/AboutUsMobile.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <main>
        <!-- Section 1 Intro -->
        <section id="introSection">
            <div id="introChild1">
                <h1>Santani Life Care Foundation</h1>
                <p><b><span class="auto-type"></span></b></p>
                <img src="../../assets/images/NGOImage1.jpg" alt="NGO Text Image" id="ngoImage1">
            </div>

            <img src="../../assets/images/Wellness Banner2.jpg" alt="Wellness Banner" id="wellnessBanner2">
        </section>

        <!-- Section 2 About -->
        <section id="aboutUsSection" class="infoDiv">
            <h3 class="headingText">About Us</h3>

            <p><big><b>Santani Life Care Foundation</b></big> is a non-profit organization founded in 2024 and based in Mumbai Central, Mumbai. Our mission is to enhance the quality of life by addressing key areas crucial for individual and societal well-being. We operate across a diverse range of sectors, including <i>health, traditional AYUSH medicine, job-oriented education, employment, technology, human rights, women's empowerment, art & culture, and animal protection.</i></p>

            <p>Our <big>health</big> initiatives focus on establishing <i>affordable yoga, meditation, and fitness centers</i>, promoting holistic health by integrating physical and mental wellness practices. We also provide accessible healthcare services through small clinics staffed with qualified professionals, ensuring that quality medical care is available to everyone. In promoting traditional <big>AYUSH</big> medicine, we work to raise global awareness and credibility by hosting international conferences and creating information hubs abroad.</p>

            <p>We offer <i>job-oriented education</i> to equip individuals with the skills necessary for specific careers, fostering employability and economic independence. Our projects in <big>employment and technology</big> aim to create new job opportunities and support the development and adoption of innovative solutions. We champion human rights by advocating for equality and justice, and we support specially abled individuals through inclusive programs that remove barriers to participation in all aspects of life.</p>

            <p>Additionally, we <big>empower women</big> by providing them with the resources and opportunities to engage fully in society. Our <big>cultural initiatives</big> celebrate India's rich heritage, using <i>art and culture</i> to bridge communities and promote national unity. Finally, we are committed to <big>animal protection</big>, working to ensure the welfare of <i>stray animals and pets</i> through dedicated support centers.</p>

            <p>Through these comprehensive efforts, <b>Santani Life Care Foundation</b> aspires to build a healthier, more equitable society characterized by innovation, inclusivity, and community-driven progress.</p>

            <a href="https://www.canva.com/design/DAGx7O_MU4s/vqf3P65Ybb-kR_6DX-vRIQ/view?utm_content=DAGx7O_MU4s&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hc5a8ac106b" target="_blank">Explore our initiatives.</a>
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
                <p>To promote excellence in field of Health Care, Education and Livelihood to meet the fast growing challenges of the competitive world.</p>
            </div>

            <!-- Mission -->
            <div>
                <h3 class="headingText">Our Mission</h3>
                <ol>
                    <li>To Provide Accurate Diagnosis and Hygienic Health care treatment by professional Doctors at affordable price.</li>
                    <li>To Provide Job Oriented Education to meet the challenges of the competitive world.</li>
                    <li>To Provide Livelihood to all to meet the basic necessities of life.</li>
                </ol>
            </div>
        </section>

        <!-- Section Documentations: Bootstrap Styling -->
        <?php include_once "DocumentationSection.html" ?>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        // Typing Effect
        const typed = new Typed(".auto-type", {
            strings: ["Alone we can do so little,<br>Together we can do so much."],
            typeSpeed: 50,
            backSpeed: 100,
            loop: false
        });
    </script>
</body>

</html>