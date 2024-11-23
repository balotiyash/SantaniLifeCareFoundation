<!-- 
    File: user/view/SpeciallyAbled.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Specially Abled page.
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
            <h2>Specially Abled</h2>
            <img src="../../assets/images/SpeciallyAbled.jpg" alt="" >

            <b>Summary</b>
            <p>The term "special abled" is used as a substitute for physically disabled or handicapped people. We work towards removing the barriers that limit people with disabilities from participating in livelihood activities. Our Aim in bringing together persons with and without disabilities working as one inclusive team.</p>

            <b>Embracing Special Abilities: Fostering Inclusivity and Empowerment</b>
            <p>The term "special abled" is a respectful and empowering alternative to "physically disabled" or "handicapped," reflecting the unique strengths and contributions of individuals with disabilities. Our mission is to break down the barriers that limit their participation in livelihood activities, ensuring that everyone has the opportunity to contribute meaningfully to society.</p>

            <p>We are dedicated to creating an inclusive environment where individuals with and without disabilities work together as one cohesive team. This approach not only enriches our collective efforts but also demonstrates that diverse abilities can complement each other, leading to more innovative and effective solutions.</p>

            <b>Key Aspects of Our Approach:</b>
            <ul>
                <li>
                    <b>Removing Barriers:</b>
                    <p>We focus on identifying and dismantling obstacles that hinder individuals with disabilities from engaging fully in various aspects of work and daily life. This includes addressing physical, systemic, and societal barriers.</p>
                </li>
                <li>
                    <b>Promoting Inclusivity:</b>
                    <p>By fostering an environment where people of all abilities can collaborate, we aim to create a workplace and community where diversity is celebrated and everyone’s contributions are valued.</p>
                </li>
                <li>
                    <b>Empowering Individuals:</b>
                    <p>We support and provide resources for special abled individuals to thrive in their chosen fields, encouraging personal growth and professional development.</p>
                </li>
                <li>
                    <b>Building Understanding:</b>
                    <p>Our initiative includes raising awareness and educating both individuals with disabilities and those without, to foster mutual respect and understanding.</p>
                </li>
            </ul>

            <b><i><u>Through our efforts, we strive to create a world where all individuals, regardless of their abilities, can participate fully and equally in every aspect of life. Together, we can build a more inclusive society where everyone’s potential is recognized and harnessed.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#speciallyAbled").removeClass("link-dark").addClass("active");

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