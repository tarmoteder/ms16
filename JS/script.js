    

    window.onload = function () {
        var date = new Date();
        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds()+':'+date.getMilliseconds();
        document.getElementsByTagName('')[0].innerHTML = "Kell JS "+time;
        window.setTimeout(arguments.callee,5);
    }
    
    function tere (){
        document.write("Tere neljapäevast<br>");
    }