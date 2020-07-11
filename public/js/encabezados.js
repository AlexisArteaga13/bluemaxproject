$('#modalEditarEncabezado').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
  
    var titulo = button.data('titulo') 
    var descripcion = button.data('descripcion') 

    var posicion = button.data('posicion') 


    
   
    var id= button.data('id') 
    var modal = $(this)
    
    modal.find('.modal-body #titulo').val(titulo);
    modal.find('.modal-body #descripcion').val(descripcion);
   
    
  
    modal.find('.modal-body #posicion').val(posicion);

    
    modal.find('.modal-body #id').val(id);
})