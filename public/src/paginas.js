compresor.prototype.cambiarPagina = function(nombre,tipo,imagen) {
    const contenido = document.getElementById("contenido");
    arrPalabrasClaves=[];
    cerrarFormLogin();
    switch(nombre){
        case 'categorias':
            categoriaActual=tipo;
            contenido.innerHTML="<div class='container-fluid'><div class='row'><img width='100%' src='"+urlBaseImagen+imagen+"'></div><div class='row mar'><div class='col-md-3'>"+divIzq()+"</div><div class='col-md-9'>"+divDer()+"</div></div></div>";
            divPalabrasClaves();
            multiRangoData();
        break;
        case 'registro':
            imagenTop='img/topRegistroUsuario.jpg';
            contenido.innerHTML="<div class='container-fluid'><div class='row'><img width='100%' src='"+imagenTop+"'></div><div class='row mar2'><div class='col-md-6'>"+divRegistroIzq()+"</div><div class='col-md-6' id='cuadroRegistro'>"+divRegistroDer()+"</div></div></div>";
            nroCedulaRegistro.focus();
        break;
        case 'panel_usuario':
           
            contenido.innerHTML="<div class='topGeneral align-middle' ><span class=''>Mi cuenta</span></div><div class='container-fluid'><div class='row justify-content-md-center'><div class='col-2'>"+divPanelUsuarioIzq()+"</div><div class='col-6'>"+divPanelUsuarioDer()+"<br><br></div></div></div>"; 
        break;
        default:
            contenido.innerHTML=paginaPrincipal();
            listarCombos();
            listar_categorias_movil_4();
            productos_home();
            listar_categorias_movil_menu();
        break;
    }
    
}