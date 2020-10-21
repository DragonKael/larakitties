<div class="modal fade modal-slide-in-right" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <form class="" action="{{ route('cat.store') }}" method="post">
        @csrf
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close">
                  <span aria-hidden="true">x</span>
              </button>
              <h3 class="modal-title" id="">Agregar Gatit@</h3>
            </div>

            <div class="modal-body">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" id="" placeholder="Nombre...">
              </div>

              <div class="form-group">
                <label for="date_of_birth">Fecha de Nacimiento</label>
                <input type="date" name="date_of_birth" class="form-control" id="" placeholder="">
              </div>

            <div class="form-group">
              <label for="gender">Genero</label>
              <select class="form-control" name="gender">
                  <option value="HEMBRA">HEMBRA</option>
                  <option value="MACHO">MACHO</option>
              </select>
            </div>

            <div class="form-group">
              <label for="photo">Foto</label>
              <input type="text" name="photo" class="form-control" id="" placeholder="Link a la foto...">
            </div>

            <div class="form-group">
              <label for="breed">Raza</label>
              <select class="form-control" name="breed_id">
                  @foreach ($breeds as $breed )
                      <option value="{{ $breed->id }}">{{ $breed->breed }}</option>
                  @endforeach
              </select>
            </div>
        </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cerrar
              </button>
              <button type="submit" class="btn btn-primary">
                  Guardar
              </button>
            </div>
          </div>
        </div>
    </form>
</div>
