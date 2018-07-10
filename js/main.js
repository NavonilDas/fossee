var slideIndex = 0;
var flex_stop_anim = false;
var text_index = 0;


function carousel() {
    if (!flex_stop_anim) {
        var i;
        var x = document.getElementsByClassName("flex");
        for (i = 0; i < x.length; i++) {
            x[i].style = "margin-right:-200px;margin-left:200px;visibility:hidden;opacity:0;";
        }
        slideIndex++;
        if (slideIndex > x.length) { slideIndex = 1 }
        x[slideIndex - 1].style = "margin-right:0;margin-left:0;visibility:visible;opacity:1;";
    }
}
function NextFlex() {
    var x = document.getElementsByClassName("flex");
    for (var i = 0; i < x.length; i++) {
        x[i].style = "margin-right:-200px;margin-left:200px;visibility:hidden;opacity:0;";
    }
    slideIndex++;
    if (slideIndex > x.length) { slideIndex = 1 }
    x[slideIndex - 1].style = "margin-right:0;margin-left:0;visibility:visible;opacity:1;";
}
function PrevFlex() {
    var x = document.getElementsByClassName("flex");
    for (var i = 0; i < x.length; i++) {
        x[i].style = "margin-right:-200px;margin-left:200px;visibility:hidden;opacity:0;";
    }
    slideIndex--;
    if (slideIndex < 1) { slideIndex = 1 }
    x[slideIndex - 1].style = "margin-right:0;margin-left:0;visibility:visible;opacity:1;";
}
function changeActivities(el, n) {
    var e;
    document.getElementById('a').style = "display:none;";
    document.getElementById('b').style = "display:none;";
    document.getElementById('c').style = "display:none;";
    document.getElementById('d').style = "display:none;";
    document.getElementById('e').style = "display:none;";
    var rev = document.querySelectorAll('.act-tabs li');
    rev.forEach(function (val, ar) {
        val.classList.remove('active');
    });
    el.classList.add('active');
    if (n == 1) e = 'a';
    if (n == 2) e = 'b';
    if (n == 3) e = 'c';
    if (n == 4) e = 'd';
    if (n == 5) e = 'e';
    document.getElementById(e).style = "display:block;";
}
function changeNews(n, e) {
    if (n == 1) {
        document.getElementsByClassName("newscontent")[0].style = "display:block";
        document.getElementsByClassName("policycontent")[0].style = "display:none";
    } else {
        document.getElementsByClassName("newscontent")[0].style = "display:none";
        document.getElementsByClassName("policycontent")[0].style = "display:block";
    }
    var els = document.querySelectorAll('.tabs ul li');
    for (var i = 0; i < els.length; i++) {
        els[i].classList.remove("active");
    }
    e.classList.add('active');
}

setInterval(carousel, 7000);

setInterval(function () {
    var el = document.querySelector('#sidediv p');
    var ar = [
        "To increase the use of open source software in the curriculum and research",
        "To promote open source software and hardware",
        "To create documentation",
        "To Develop new open source software where required"
    ];
    el.innerText = ar[text_index] + '.';
    text_index++;
    if (text_index > 3) text_index = 0;
}, 5000);

function MouseLeave() {
    flex_stop_anim = false;

}