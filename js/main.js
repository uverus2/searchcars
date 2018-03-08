window.onload = function() {

    var cliking = document.getElementById("clickButton").addEventListener("click", click);


};

function click() {

    var x = document.getElementById("myDIV");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

};