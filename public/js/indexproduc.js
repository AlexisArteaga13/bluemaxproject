$(document).ready(function() {
    // Instrucciones a ejecutar al terminar la carga
    $.get("ajaxproductos",function(response){
        console.log(response);
        var elem = document.querySelector("#ajaxprod");
        for(i=0;i<response.length;i++){
        $("#ajaxprodrg").html(
    "<div class='col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp'>"+
        "<div class='portfolio-wrap'><figure><img src="+"{{asset('../storage/app/"+response[i].imagen+"')}}"+" class='img-fluid' alt=''>"+
            "<a href='img/portfolio/app1.jpg' data-lightbox='portfolio' data-title='App 1' class='link-preview' title='Preview'>"+
            "<i class='ion ion-eye'></i></a>"+
            "<a href='#' class='link-details' title='"+response[i].nombre+"'><i class='ion ion-android-open'></i></a>"+
          "</figure>"+

          "<div class='portfolio-info'>"+
            "<h4><a href='#'>"+response[i].nombre+"</h4>"+
            "<p>"+response[i].descripcion+"</p>"+
          "</div>"+
        "</div>"+
      "</div>")
        }
       /* var numeromax = 0;
        if(response == null){
            numeromax=0;
        }
        else{
            
            for(i=0;i<response.length;i++){
                var anescolar = response[i].CodCurso;
                anescolar = parseInt(anescolar);
                if(numeromax<anescolar){
                    numeromax = anescolar;
                }
            }
        }
        console.log(numeromax);
        $("#cod_curso_crear").val(numeromax+1)*/
    })
  });