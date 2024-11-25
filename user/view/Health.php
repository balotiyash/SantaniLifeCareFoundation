<!-- 
    File: user/view/Health.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Health page.
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

        <!-- Section 2 Yoga Program -->
        <section class="programSection">
            <h2>Health</h2>
            <img src="../../assets/images/Yoga.jpeg" alt="Yoga">

            <b>Summary</b>
            <p>Health is a state of complete physical, mental, and social well-being. Generating small centers of Yoga, meditation and Fitness center at affordable price. Yoga practice can help to decrease physiological stress and arousal in the body. Meditation combined with a regular yoga practice can lower blood pressure and heart rate, reduce inflammation in the body and aid in reducing chronic pain issues. Regular exercise can reduce the risk of chronic diseases and promote overall health. Secondly, it helps to improve mental health by reducing stress and anxiety levels. Thirdly, it can help you to build a healthier mind and healthier community.</p>

            <b>Celebrate Health: A Holistic Approach to Well-Being</b>
            <p>At our centers, we believe that true health is a state of complete physical, mental, and social well-being. Our mission is to create accessible spaces where everyone can nurture their body, mind, and spirit.</p>

            <b>Yoga and Meditation</b>
            <p>Engage in practices that go beyond the physical. Yoga and meditation help decrease physiological stress and arousal, lower blood pressure and heart rate, and reduce inflammation. These practices are also known to alleviate chronic pain, making them valuable tools for enhancing overall well-being.</p>

            <b>Fitness for All</b>
            <p>Regular exercise is crucial in reducing the risk of chronic diseases and promoting overall health. Our fitness programs cater to all levels, providing a supportive environment where everyone can work towards their personal health goals.</p>

            <b>Community and Mental Health</b>
            <p>Beyond physical benefits, our centers aim to foster a sense of community. By reducing stress and anxiety, these practices contribute to better mental health, creating a healthier, happier community.</p>

            <b><i><u>Join us in celebrating health and well-being. Whether you're looking to start a new fitness journey, deepen your yoga practice, or find peace through meditation, our affordable centers are here to support you.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#health").removeClass("link-dark").addClass("active");

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