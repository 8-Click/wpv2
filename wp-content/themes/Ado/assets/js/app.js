function showMore(element) {
    const dropdown = element.parentNode.querySelector(".dropdown-submenu");
    dropdown.classList.toggle("show");
    element.classList.toggle("rotated");
}

function contactTheDev() {
    alert(
        `
        Twitter (X): 8click1
        Discord: 8click
        Instagram: rickdegroot0705

        If you want to reach out to the developer try and reach me here!
        `
    );
}
