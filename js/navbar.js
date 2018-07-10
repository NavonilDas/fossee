var navbar_showing = false;
// document.documentElement.style.setProperty('--your-variable', '#YOURCOLOR');
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
    navbar_showing = !navbar_showing;
}
function closeBar() {
    navbar_showing = true;
    showNavBar();
}
var body_banner_hidden = false;
function RemoveBanner(){
    if(window.pageYOffset > 175){
        document.documentElement.style.setProperty('--gap', '0px');
        document.getElementById('banner_header').style = "opacity:0;visibility:hidden;";
        body_banner_hidden = true;
    }
    if(body_banner_hidden && window.pageYOffset < 175){
        document.documentElement.style.setProperty('--gap', '175px');
        document.getElementById('banner_header').style = "opacity:1;visibility:visible;";
    }
}