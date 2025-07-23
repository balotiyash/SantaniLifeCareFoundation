<!-- 
    File: user/view/JobOrientedEducation.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Job oriented education page.
    Created on: 03/08/2024
    Last Modified: 23/07/2025
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

        <!-- Section 2 Education Program -->
        <section class="programSection">
            <h2>Job Oriented Education</h2>
            <!-- <img src="../../assets/images/Education.png" alt="Books"> -->
            <img src="../../assets/images/WORK INTEGRATED EDUCATION PROGRAM - (WIEP).jpg" alt="Books">

            <b>Summary</b>
            <p>Job-oriented courses are training and academic courses that prepare professionals for a particular career field or role. A traditional academic course may provide an overview of a certain topic or area, but a job-oriented course focuses on the knowledge and skills required for a particular job.</p>

            <b>Key Features of Job-Oriented Courses:</b>
            <ul>
                <li>
                    <b>Specialized Training:</b>
                    <p>Courses are tailored to the requirements of specific professions, providing targeted skills and expertise.</p>
                </li>
                <li>
                    <b>Practical Skills:</b>
                    <p>Emphasis is placed on hands-on training and real-world applications, preparing students for the demands of their chosen field.</p>
                </li>
                <li>
                    <b>Career Preparation:</b>
                    <p>Courses often include industry-specific knowledge, certifications, and practices that enhance employability and career advancement.</p>
                </li>
                <li>
                    <b>Focused Curriculum:</b>
                    <p>Content is curated to cover essential competencies, tools, and techniques pertinent to the job.</p>
                </li>
            </ul>

            <b><i><u>Celebrate the value of job-oriented courses in bridging the gap between education and employment, ensuring that individuals are not only knowledgeable but also job-ready. These courses play a crucial role in fostering career growth and meeting the evolving demands of various industries.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#education").removeClass("link-dark").addClass("active");

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