var navbar_showing = false; // check if the nav bar showing
function showNavBar() {
    if (!navbar_showing) {
        document.getElementById("sideNavBar").style.width = "75%"; // set the width to 250px
        setTimeout(function () {
            document.querySelector("#sideNavBar ul").style.visibility = "visible";
        }, 400);
    }
    else {
        document.querySelector("#sideNavBar ul").style.visibility = "hidden";
        document.getElementById("sideNavBar").style.width = "0"; // set the width to 0
    }
    navbar_showing = !navbar_showing; // change the toggle
}
function closeBar() {
    navbar_showing = true;
    showNavBar();
}