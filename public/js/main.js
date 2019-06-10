document.addEventListener('DOMContentLoaded', function(){

    const canvas = document.getElementById("my_image");
    canvas.width  = 450;
    canvas.height = 900;
    const context = canvas.getContext("2d");
    const imageObj = new Image();
    imageObj.crossOrigin = "Anonymous";
    imageObj.onload = function(){
        context.drawImage(imageObj, 0, 0);
        context.font = "5em Arial";
        context.fillStyle = "wheat";
        context.fillText("My TEXT!", 500, 470);
    };
    imageObj.src = "assets/1.jpg";


    // download_img = function(el) {
    //     const image = canvas.toDataURL("image/jpg");
    //     el.href = image;
    // };


    document.getElementById('preview').onclick = function (e) {
        alert(1);
        return false;
    };
});