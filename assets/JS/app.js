document.addEventListener('DOMContentLoaded', function(){
    let xhr = new XMLHttpRequest();
    let buscador=document.getElementById('buscar');
    buscador.addEventListener('keyup',function(){
        let params={
            data:buscador.value

        };
        let paramsString=JSON.stringify(params);
        xhr.open('POST','buscar.php');
        xhr.setRequestHeader("Content-Type","application/json");
        xhr.onreadystatechange= function(){

            if (this.status==200 && this.readyState==4) {
                console.log(this.responseText);
            };
        };

        xhr.send(paramsString);


        

    });

    


  











});
