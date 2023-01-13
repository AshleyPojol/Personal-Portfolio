/* ============ TOGGLE STYLE HERE ASH ============== */
// This is for the theme switcher in the website.//
const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");
styleSwitcherToggle.addEventListener("click", () => {
    document.querySelector(".style-switcher").classList.toggle("open");
})

// HIDE W/ SCROLLING - this option will hide the themes setting while scrolling.// 
window.addEventListener("scroll", () => {
    if (document.querySelector(".style-switcher").classList.contains("open"))
    {
        document.querySelector(".style-switcher").classList.remove("open");
    }
})

/* FINALLY TOGGLE THEME */
//This will switch the colors of the themes in the website.//
const alternateStyles = document.querySelectorAll(".alternate-style");
function setActiveStyle(color)

//If else option - Lesson 9//
{
    alternateStyles.forEach((style) => {
        if(color === style.getAttribute("title"))
        {
            style.removeAttribute("disabled");
        }
        else
        {
            style.setAttribute("disabled", "true");
        }
    })
}

/* DARK MODE BOI */
//This option will change the light theme in to a dark theme.//
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () => {
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})
window.addEventListener("load", () => {
    if(document.body.classList.contains("dark"))
    {
        dayNight.querySelector("i").classList.add("fa-sun");
    }
    else
    {
        dayNight.querySelector("i").classList.add("fa-moon"); 
    }
})

