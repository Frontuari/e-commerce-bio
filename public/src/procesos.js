compresor.prototype.procesar = function(data,evento) {
    
    switch(evento){
    case 'web_no_login':
        console.log("data::> ",data);
        var data = JSON.parse(JXG.decompress(data));

        if(data.success==true){
            var datos=data.data;
            for (var [key, value] of Object.entries(datos)) {
                compresor.setLocal(key, value);
            }
            console.log(data);
            compresor.cambiarPagina('inicio');

        }

        break;
        case 'registrarUsuario':
            var data = JSON.parse(data);
            if(data.success){
                alert("Registrado exitosamente!");
            }else{
                alert(data.msj_general);
                return false;
            }
        break;
        case 'loginNuevo':
            var data = JSON.parse(JXG.decompress(data));
            if(data.success){
                var datos=data.data;
                for (var [key, value] of Object.entries(datos)) {
                    compresor.setLocal(key, value);
                }
                console.log(data);
                alert(data.msj_general);
                location.reload();
                return true;
            }else{
                alert(data.msj_general);
                return false;
            }
        break;
        case 'logout':
            alert("Vuelve pronto");
            compresor.delLocal('usuario');
            location.reload();
        break;
        case 'actualizarPerfil':
            var data = JSON.parse(data);
            if(data.success){
                alert("Su perfil ha sido actualizado");
                return false;
            }else{
                alert(data.msj_general);
                return false;
            }
        break;
        
    }

}