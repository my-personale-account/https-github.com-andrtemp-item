document.addEventListener('DOMContentLoaded', function(){

    const canvas = document.getElementById("my_image");
    canvas.width  = 700;
    canvas.height = 900;
    const context = canvas.getContext("2d");

    document.getElementById('preview').onclick = function (e) {
        const type = document.getElementById("type").value,
            material = document.getElementById("material").value,
            d = parseFloat(document.getElementById("diameter").value),
            height = document.getElementById("height").value,
            D = parseFloat(document.getElementById("out_diameter").value),
            number_circle = parseInt(document.getElementById("number_circle").value),
            surface = document.getElementById("surface").value,
            direction = document.getElementById("direction").value;
        const n = number_circle - 2,  G = material === '12Х18Н10Т' ? 68670 : 78480, C = (G * Math.pow(d,4)) / (8 * D * Math.pow(3,n));
        let term = '';
        let deviation = 'пределные отклонения по ГОСТ 16118-75';
        if(material === '60C2А' || material === '51ХФА'){
            if(d < 14.0){
                term = 'HRC 47,5…53,5';
            } else {
                term = 'HRC  44…51,5';
            }
        }
        if(material === '12Х18Р10Т'){
            deviation = 'пределные отклонения по ГОСТ P 507553-95';
        }
        const w = 700 , h = 900;
        const imageObj = new Image();
        imageObj.crossOrigin = "Anonymous";
        imageObj.onload = function(){
            context.drawImage(imageObj, 0, 0, w, h);
            context.font = "15px Arial";
            context.fillStyle = "black";
            context.fillText('1. Направление навивки пружины : ' + direction, 170, 500);
            context.fillText('2. Число рабочих витков : ' + n, 170, 515);
            context.fillText('3. Число полный витков : ' + number_circle , 170, 530);
            context.fillText('4. Жесткость : ' + C , 170, 545);
            context.fillText('5. Термообработка : ' + term , 170, 560);
            context.fillText('6. *Размеры и параметры для справок : ' + d + ' X ' + D + ' X ' + height + ' X ' + number_circle , 170, 575);
            context.fillText('7. Остальные технические пребования и отклонения по ГОСТ : ' , 170, 590);
            context.fillText(deviation, 170, 605);
            context.fillText('8. Покрытие : ' + surface, 170, 620);
            context.fillText(material + ' - ' + d , 290, 750);
            context.fillText('ПРУЖИНА', 290, 800);
            context.fillText('СЖАТИЯ', 290, 815);
        };
        imageObj.src = "assets/template.jpg";
        return false;
    };


    document.getElementById('submit').onclick = function (e) {
        const formData = new FormData(),
            image = canvas.toDataURL('image/jpg'),
            contact = document.querySelector('[data-value="contact_info"]').value,
            mail = document.querySelector('[data-value="mail"]').value;

        formData.append('image', image);
        formData.append('mail', mail);
        formData.append('contact', contact);

        const request = new XMLHttpRequest();
        request.open('POST', '/send-form');
        request.send(formData);
        alert('Отправлено успешно на email : ' + mail);
        return false;
    };
});