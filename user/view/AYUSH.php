<!-- 
    File: user/view/AYUSH.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Traditional Treatement of AYUSH page.
    Created on: 03/08/2024
    Last Modified: 05/08/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../style/OurProgramsStyle.css">
    <link rel="stylesheet" href="../style/OurWorkStyle.css">
    <link rel="stylesheet" href="../style/mobile/OurWorkMobile.css">
    <link rel="stylesheet" href="../style/mobile/OurWorkMobileMain.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Main content -->
    <main>
        <!-- Section 1 Side bar -->
        <?php include_once "OurWorkSidebar.html" ?>

        <!-- Section 2 All Programs -->
            <section class="programSection">
                <h2 id="Ayush">Traditional Treatment of AYUSH</h2>
            <img src="../../assets/images/Ayush.png" alt="" >

            <b>Summary</b>
            <p>AYUSH is an acronym for Ayurveda, Yoga and Naturopathy, Unani, Siddha and Homeopathy and are the six Indian systems of medicine prevalent and practiced in India and some of the neighboring Asian countries with very few exceptions in some of the developed countries. To generate awareness about AYUSH in international market by providing authentic information about the Indian traditional medicine by conducting international conferences on AYUSH Medicine, selecting the system experts of different countries, and also establishing AYUSH information cells in different countries.</p>

            <b>Celebrate Traditional Healing: The AYUSH Initiative</b>
            <p>AYUSH stands for Ayurveda, Yoga and Naturopathy, Unani, Siddha, and Homeopathy. These six systems represent the rich heritage of Indian traditional medicine, practiced not only in India but also in several neighboring Asian countries and, to a lesser extent, in some developed nations.</p>

            <p>Our mission is to generate global awareness about the benefits of AYUSH. We aim to provide authentic information about these traditional medicine systems by:</p>

            <ol>
                <li>
                    <b>Conducting International Conferences on AYUSH Medicine:</b>
                    <p>Bringing together experts, practitioners, and enthusiasts to share knowledge, research, and practices.</p>
                </li>
                <li>
                    <b>Selecting System Experts from Different Countries:</b>
                    <p>Collaborating with international specialists to exchange insights and enhance understanding.</p>
                </li>
                <li>
                    <b>Establishing AYUSH Information Cells Worldwide:</b>
                    <p>Creating dedicated centers in various countries to disseminate reliable information and promote the adoption of AYUSH practices.</p>
                </li>
            </ol>

            <b><i><u>Join us in celebrating the wisdom of traditional healing systems and promoting their integration into global healthcare practices. Through our efforts, we strive to bring the benefits of AYUSH to a broader international audience, fostering a deeper appreciation for these time-honored practices.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#ayush").removeClass("link-dark").addClass("active");

        // Our Programs
        const allPrograms = [
            "OurWork",
            "Health", "HealthCare", "AYUSH", "Livelihoods",
            "JobOrientedEducation", "Employment", "Technology", "HumanRights",
            "SpeciallyAbled", "WomenEmpowerment", "ArtAndCulture", "AnimalProtection"
        ];

        for (let i = 0; i < allPrograms.length; i++) {
            const sideElement = document.getElementsByClassName("nav-link")[i];

            if (sideElement) { // Check if element exists to avoid errors
                sideElement.addEventListener("click", () => {
                    window.location.href = `${allPrograms[i]}.php`;
                });
            }
        }
    </script>
</body>

</html>