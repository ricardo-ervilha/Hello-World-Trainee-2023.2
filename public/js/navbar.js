
function openNav() {

    var x = document.getElementById("navjs");

    if (x.className === "navmobile") {
        x.className += " navjs";
        document.getElementById("threeline").innerHTML = "&#x2715;";
    } else {
        x.className = "navmobile";
        document.getElementById("threeline").innerHTML = "&#x2630;";
    }

}