<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-{{$value->id}}">

    <form action="{{route('encabezados.delete',$value->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Eliminar</h4>

                </div>
                <div class="modal-body">
                    <p>Confirme si desea Eliminar </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>

                </div>
            </div>
        </div>
    </form>
</div>