/** 
 * File: user/controller/OurWorkScript.js
 * Author: Yash Balotiya
 * Description: This file contains js to handle the onclick events of the OurWork page.
 * Created on: 03/08/2024
 * Last Modified: 25/11/2024
*/

// Window on ready
$(document).ready(() => {
    // Our Programs to handle proper onclick events on the sidebar
    const allPrograms = [
        "OurWork", "Health", "HealthCare", "AYUSH", "Livelihoods",
        "JobOrientedEducation", "Employment", "Technology", "HumanRights",
        "SpeciallyAbled", "WomenEmpowerment", "ArtAndCulture", "AnimalProtection"
    ];

    for (let i = 0; i < allPrograms.length; i++) {
        const mainElement = document.getElementsByClassName("ourProgramsChild2")[i];
        const sideElement = document.getElementsByClassName("nav-link")[i];

        if (mainElement && sideElement) { // Check if element exists to avoid errors
            mainElement.addEventListener("click", () => {
                window.location.href = `${allPrograms[i + 1]}.php`;
            });

            sideElement.addEventListener("click", () => {
                window.location.href = `${allPrograms[i]}.php`;
            });
        }
    }
});