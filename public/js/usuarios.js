$('#modalEditarUser').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
  
    var nombre = button.data('mynombre') 
    var apellido = button.data('myapellido') 

    var correo = button.data('correo') 


    var pass =button.data('pass')
   
    var iduser= button.data('idusuario') 
    var modal = $(this)
    console.log(iduser);
   
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #apellido').val(apellido);
   
    
  
    modal.find('.modal-body #correo').val(correo);

    modal.find('.modal-body #password').val(pass);
    modal.find('.modal-body #idusers').val(iduser);
})