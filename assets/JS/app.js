document.addEventListener('DOMContentLoaded', function(){
    
    let buscador=document.getElementById('buscar');
    buscador.addEventListener('keyup',function(){
        let params={
            data:buscador.value

        };
        console.log(params.data);

    });

    


  











});
