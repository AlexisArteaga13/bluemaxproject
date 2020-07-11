$('#modalEditarProducto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
  
    var nombre = button.data('nombre') 
    var descripcion = button.data('descripcion') 
    var categoria = button.data('categoria') 
    var id= button.data('id') 
    var modal = $(this)
    
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #descripcion').val(descripcion);
    modal.find('.modal-body #categoria').val(categoria);

    
    modal.find('.modal-body #id').val(id);
})