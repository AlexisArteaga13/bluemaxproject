$('#modalEditarEscuela').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var nombre = button.data('mynombre') 
    var direccion = button.data('mydireccion') 
    var correo = button.data('correo') 
    //var eslogan = button.data('eslogan') 
    var telefono = button.data('telefono') 
   // var urlvideo = button.data('urlvideo') 
   // var urlicono = button.data('urlicono') 
    //var urlmapa = button.data('urlmapa') 
    var id = button.data('id') 
    var modal = $(this)
   //console.log(idescuela);
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #direccion').val(direccion);
    modal.find('.modal-body #correo').val(correo);
    modal.find('.modal-body #telefono').val(telefono);
    modal.find('.modal-body #id').val(id);
    //modal.find('.modal-body #urlvideo').val(urlvideo);
    //modal.find('.modal-body #icono').val(urlicono);
   // modal.find('.modal-body #urlmapa').val(urlmapa);
   // modal.find('.modal-body #eslogan').val(eslogan);
})