document.addEventListener('DOMContentLoaded', function(){
    let xhr = new XMLHttpRequest();
    let buscador=document.getElementById('buscar');
    let resTabla=document.querySelector('.resultados table tbody');

    buscador.addEventListener('keyup',function(){
        let params={
            data:buscador.value

        };
        let paramsString=JSON.stringify(params);
        xhr.open('POST','buscar.php');
        xhr.setRequestHeader("Content-Type","application/json");
        xhr.onreadystatechange= function(){

            if (this.status==200 && this.readyState==4) {
                let res=JSON.parse(this.responseText);
                
                //console.log(res[0]);
                
                    render(res);
               
               
                
            };
        };

        xhr.send(paramsString);


        

    });
    function render(params){
        resTabla.innerHTML='';
        if(params.idRegistro!='null'){
            params.forEach(function(param){
                let fila=`
                <tr>
    
                    <td>${param.nombre}</td>
                    <td>${param.apellido}</td>
                    <td>${param.direccion}</td>
                    <td>${param.telefono}</td>
                    <td>${param.created_at} </td>
                    <td>${param.updated_at} </td>
                    <td>
                        <a id="edit" href="editar.php?id=${param.idRegistro}">Edit</a> 
                        <a id="delete" href="eliminar.php?id=${param.idRegistro}"> Delete</a>                        
    
                    </td>
                </tr>
                    
            
            `;
            resTabla.innerHTML+=fila;
    
            });

        }
        
        

    };

    


  











});
