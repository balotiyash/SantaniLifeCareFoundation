<!-- 
    File: user/view/WomenEmpowerment.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Women Empowerment page.
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

        <!-- Section 2 Women Program -->
        <section class="programSection">
            <h2>Women's Empowerment</h2>
            <img src="../../assets/images/Women.jpg" alt="Women">

            <b>Summary</b>
            <p>Empowerment means to have agency over one's life and equal opportunity to participate in society. Women's empowerment, or female empowerment, is the process by which women gain influence and equal opportunity to pursue personal, social and economic endeavors, engaging in all parts of society on the same basis as men.</p>

            <b>Celebrate Empowerment: Fostering Equality and Opportunity</b>
            <p>Empowerment is the essence of having control over one's own life and the equal opportunity to engage fully in society. It embodies the ability to make choices, pursue goals, and participate in various aspects of life with autonomy and fairness.</p>

            <p>Women's empowerment, or female empowerment, is a crucial aspect of this broader concept. It involves the process by which women gain the influence and opportunities necessary to pursue their personal, social, and economic aspirations. This process ensures that women can engage in all facets of society on equal terms with men, without discrimination or disadvantage.</p>

            <b>Key Aspects of Women's Empowerment:</b>
            <ul>
                <li>
                    <b>Influence and Agency:</b>
                    <p>Empowering women means enabling them to have a voice in decisions that affect their lives and communities, and to exercise their rights and freedoms without constraints.</p>
                </li>
                <li>
                    <b>Equal Opportunity:</b>
                    <p>It ensures that women have the same access to opportunities and resources as men, including education, employment, and leadership positions.</p>
                </li>
                <li>
                    <b>Participation:</b>
                    <p>Women are encouraged and supported to take part in all areas of society, from politics and business to education and the arts, on an equal footing with men.</p>
                </li>
                <li>
                    <b>Personal and Economic Endeavors:</b>
                    <p>Women are given the tools and support needed to pursue their personal goals and contribute economically, fostering independence and self-sufficiency.</p>
                </li>
            </ul>

            <b><i><u>By celebrating empowerment, we champion a vision of a world where every individual has the opportunity to achieve their full potential, regardless of gender. This commitment to equality and opportunity helps build a more just and inclusive society for all.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#womenEmpowerment").removeClass("link-dark").addClass("active");

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