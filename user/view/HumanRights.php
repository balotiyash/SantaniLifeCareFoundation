<!-- 
    File: user/view/HumanRights.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Human Rights page.
    Created on: 03/08/2024
    Last Modified: 25/11/2024
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

        <!-- Section 2 HumanRights Program -->
        <section class="programSection">
            <h2>Human Rights</h2>
            <img src="../../assets/images/HumanRights.jpg" alt="Human Rights">

            <b>Summary</b>
            <p>Human rights are rights inherent to all human beings, regardless of race, sex, nationality, ethnicity, language, religion, or any other status. Human rights include the right to life and liberty, freedom from slavery and torture, freedom of opinion and expression, the right to work and education, and many more.</p>

            <b>Celebrate Human Rights: Upholding Dignity for All</b>
            <p>Human rights are fundamental and inherent to every person, irrespective of race, sex, nationality, ethnicity, language, religion, or any other status. They embody the essential principles of dignity, equality, and respect for all individuals.</p>

            <b>Key Aspects of Human Rights:</b>
            <ul>
                <li>
                    <b>Right to Life and Liberty:</b>
                    <p>The fundamental right to live freely and securely, free from arbitrary detention or deprivation of life.</p>
                </li>
                <li>
                    <b>Freedom from Slavery and Torture:</b>
                    <p>The prohibition of any form of slavery, forced labor, or torture, ensuring the protection of personal integrity.</p>
                </li>
                <li>
                    <b>Freedom of Opinion and Expression:</b>
                    <p>The right to hold and express one's views and opinions without fear of censorship or retaliation.</p>
                </li>
                <li>
                    <b>Right to Work and Education:</b>
                    <p>The opportunity to pursue employment and education, enabling personal and professional growth.</p>
                </li>
                <li>
                    <b>Equality and Non-Discrimination:</b>
                    <p>The guarantee of equal rights and protection for all individuals, regardless of background or identity.</p>
                </li>
            </ul>

            <b>Join Us in Celebrating Human Rights</b>
            <p>By celebrating human rights, we reaffirm our commitment to creating a world where everyone enjoys these fundamental freedoms and protections. Let's work together to ensure that human rights are respected and upheld, fostering a global community where dignity and equality are cherished for all.</p>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#humanRight").removeClass("link-dark").addClass("active");

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