<!-- 
    File: user/view/Employment.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Employment page.
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
            <h2>Employment</h2>
            <img src="../../assets/images/Employment.png" alt="" >

            <b>Summary</b>
            <p>To generate Employment by the new ideas and projects related to latest Technology.</p>

            <b>Celebrate Employment: Innovating Through Technology</b>
            <p>Our mission is to generate employment opportunities by harnessing new ideas and projects related to the latest technology. By embracing innovation and cutting-edge advancements, we aim to create a dynamic job market that not only meets current industry needs but also anticipates future demands.</p>

            <b>Key Aspects of Our Employment Initiative:</b>
            <ul>
                <li>
                    <b>Innovation-Driven Projects:</b>
                    <p>Developing and implementing new technological solutions that drive growth and create diverse job opportunities.</p>
                </li>
                <li>
                    <b>Skill Development:</b>
                    <p>Equipping individuals with the skills needed to thrive in technology-driven roles, from software development to digital marketing.</p>
                </li>
                <li>
                    <b>Industry Collaboration:</b>
                    <p>Partnering with technology firms and startups to identify emerging trends and align job creation with industry needs.</p>
                </li>
                <li>
                    <b>Sustainable Growth:</b>
                    <p>Fostering a job market that adapts to technological changes while ensuring long-term career prospects and economic stability.</p>
                </li>
            </ul>

            <b><i><u>Join us in celebrating the power of technology to transform the employment landscape. Together, we can build a future where innovation drives job creation, and new ideas lead to exciting and fulfilling career opportunities.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#employment").removeClass("link-dark").addClass("active");

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