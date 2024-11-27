/** 
 * File: main.js
 * Author: Yash Balotiya
 * Description: This file contains the main JavaScript code for the website. It contains the necessary changes to be made on load. Specifically, working for index.php
 * Created on: 01/08/2024
 * Last Modified: 27/11/2024
*/

// Window on ready
$(document).ready(() => {
    // Necessary changes on load
    // Head Meta Data
    $("#tabLogo").attr("href", "assets/vectors/Tab-Icon.svg");

    let sharedStyles = [];
    for (let i = 1; i <= 3; i++) {
        sharedStyles.push(
            $(`.sharedStyle${i}`).attr("href").substr(6)
        );
        $(`.sharedStyle${i}`).attr("href", sharedStyles[i - 1]);
    }

    // Navbar Logo
    $("#navbarLogo").attr("src", "assets/images/Logo1.png");
    $("#navbarLogo").on("click", () => window.location.href = '');

    // Navbar Links
    $("#aboutUsLink").attr("href", "user/view/AboutUs.php");
    $("#aboutUsBtn").on("click", () => window.location.href = "user/view/AboutUs.php");
    $("#ourWorkLink").attr("href", "user/view/OurWork.php");
    $("#galleryLink").attr("href", "user/view/Gallery.php");
    $("#contactUsLink").attr("href", "user/view/ContactUs.php");
    $("#donateBtn").on("click", () => window.location.href = "user/view/Donate.php");

    // Navbar Links for Mobile
    $("#aboutUsLinkMob").attr("href", "user/view/AboutUs.php");
    $("#ourWorkLinkMob").attr("href", "user/view/OurWork.php");
    $("#galleryLinkMob").attr("href", "user/view/Gallery.php");
    $("#contactUsLinkMob").attr("href", "user/view/ContactUs.php");
    $("#donateLinkMob").attr("href", "user/view/Donate.php");

    // Our Programs
    $('#wellnessImg1').attr("src", "assets/images/Wellness Banner1.jpg");
    const allPrograms = [
        "Health", "HealthCare", "AYUSH", "Livelihoods",
        "JobOrientedEducation", "Employment", "Technology", "HumanRights",
        "SpeciallyAbled", "WomenEmpowerment", "ArtAndCulture", "AnimalProtection"
    ];

    for (let i = 0; i < allPrograms.length; i++) {
        const element = document.getElementsByClassName("ourProgramsChild2")[i];
        if (element) { // Check if element exists to avoid errors
            element.addEventListener("click", () => {
                window.location.href = `user/view/${allPrograms[i]}.php`;
            });
        }
    }

    // Footer
    // Useful Links
    const USEFUL_LINKS = [
        "", "AboutUs", "OurWork", "Gallery", "Reviews", "ContactUs",
        "Donate", "Login", "LeadersList", "VolunteersList"
    ];
    const usefulLinks = document.getElementsByClassName("links");

    for (let i = 0; i < usefulLinks.length; i++) {
        if (i === 0) {
            $(".links").eq(i).attr("href", `${USEFUL_LINKS[i]}`);
        } else {
            $(".links").eq(i).attr("href", `user/view/${USEFUL_LINKS[i]}.php`);
        }
    }

    $("#freeCamp").attr("href", "assets/images/Free Camp.jpg");

    // Dev Footer
    $("#footerLogo").attr("src", "assets/images/Logo3.png");
    $("#algoDevsImg").attr("src", "assets/images/AlgoDevs.png");
    $("#newImage").attr("src", "assets/images/New.png");
});