<div class="modal fade modal-slide-in-right" id="modal-delete-{{ $cat->id }}"
     tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
     <form class="" action="{{ route('cat.destroy',$cat->id) }}" method="post">
         @csrf
         @method('delete')
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">x</span>
               </button>
               <h4 class="modal-title" id="">Eliminar Registro del Gatit@ ??? T_T</h4>
             </div>
             <div class="modal-body">
               <p>Confirme si desea Eliminar el gatito:
                   <strong>{{ $cat->name }}</strong>,
                   con el identificador: <strong>{{ $cat->id }}</strong>
               </p>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">
                   Cerrar
               </button>
               <button type="submit" class="btn btn-danger">
                   Confirmar
               </button>
             </div>
           </div>
         </div>
     </form>
</div>
