<!-- 
    File: user/view/ArtAndCulture.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Art & Culture page.
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

        <!-- Section 2 Art & Culture Programs -->
        <section class="programSection">
            <h2>Art & Culture</h2>
            <img src="../../assets/images/Art.jpg" alt="Art & Culture">

            <b>Summary</b>
            <p>India's cultural fabric is intricately woven with a myriad of religions, languages, traditions, and lifestyles. Despite this diversity, art, and culture have acted as a unifying force, transcending boundaries and fostering a sense of national identity. Festivals like Diwali, Eid, Christmas, and Holi bring people from different communities together, promoting harmony, understanding, and tolerance. Traditional art forms, such as Kathak, Bharatanatyam, Odissi, and Kathakali, showcase the beauty of Indian culture and serve as a common thread that binds the nation.</p>

            <b>India's Cultural Tapestry: Unity Through Diversity</b>
            <p>India's cultural fabric is a rich and intricate mosaic, woven together by a diverse array of religions, languages, traditions, and lifestyles. This vibrant tapestry reflects the country's deep historical roots and the myriad influences that have shaped its society over millennia.</p>
            <p>Despite the vast diversity within India, art and culture have consistently served as powerful unifying forces. They transcend regional and communal boundaries, fostering a shared sense of national identity and belonging.</p>

            <b>Festivals and Celebrations:</b>
            <p>Festivals such as Diwali, Eid, Christmas, and Holi are more than just cultural events; they are occasions that bring people from different communities together. These celebrations foster a spirit of unity, promoting harmony and understanding among diverse groups. Each festival, with its unique customs and traditions, offers an opportunity for people to come together, share in the joy of celebration, and deepen their appreciation for one another's cultural practices.</p>

            <b>Traditional Art Forms:</b>
            <p>India's traditional art forms, including Kathak, Bharatanatyam, Odissi, and Kathakali, are not only expressions of artistic excellence but also serve as vital links in the cultural continuum of the nation. These classical dance forms, each with its distinct style and narrative techniques, showcase the richness of Indian culture and its enduring legacy. They embody the historical, spiritual, and aesthetic values of various regions, contributing to a collective cultural identity.</p>

            <p>Kathak, with its intricate footwork and expressive storytelling, originates from North India, while Bharatanatyam, known for its grace and precision, hails from Tamil Nadu in the South. Odissi, characterized by its fluid movements and sculpturesque poses, comes from Odisha, and Kathakali, with its elaborate costumes and dramatic performances, is rooted in Kerala. Each of these art forms highlights the diversity within Indian culture while also serving as a common thread that binds the nation together.</p>

            <b>Cultural Cohesion:</b>
            <p>Art and culture in India act as a cohesive force, bridging gaps between different communities and fostering a sense of national unity. Through shared experiences in festivals and traditional performances, people from various backgrounds find common ground and celebrate their collective heritage. This shared cultural experience helps to cultivate mutual respect and a deeper understanding of the diverse traditions that coexist within the country.</p>

            <p>In celebrating India's cultural richness, we recognize the power of art and tradition to unite individuals, promote harmony, and create a vibrant, inclusive society. The beauty of India's cultural diversity is not just in its variety but in the way it brings people together, reinforcing the idea that, despite our differences, we are all part of a shared cultural heritage.</p>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#artCulture").removeClass("link-dark").addClass("active");

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