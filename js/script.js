var compteurImg=1;
var total=10;

function sliderauto() {
    var image = document.getElementById("logo");
    compteurImg = compteurImg +1
        console.log(compteurImg)
        image.src = "../img/circuit" + compteurImg + ".jpg";

        if (compteurImg >= total) {
            compteurImg = 0;
        }

}

window.setInterval(sliderauto,3000);