<div class="modal fade modal-slide-in-right" id="modal-show-{{ $cat->id }}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        @csrf
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close">
                  <span aria-hidden="true">x</span>
              </button>
              <h3 class="modal-title" id="">
                  <b>
                      Nombre: {{ $cat->name }}
                  </b>
              </h3>
            </div>

            <div class="modal-body">
                <h4>
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            Raza:
                        </div>
                        <div class="col-sm-7">
                            @foreach ($breeds as $breed)
                                @if ($cat->breed_id==$breed->id)
                                    {{ $breed->breed }}
                                @endif
                            @endforeach
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-sm-5 text-right">
                            Fecha de Nacimiento:
                        </div>
                        <div class="col-sm-7">
                            {{ $cat->date_of_birth }}
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-sm-5 text-right">
                            Genero:
                        </div>
                        <div class="col-sm-7">
                            {{ $cat->gender }}
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-sm-5 text-right">
                            Imagen:
                        </div>
                        <div class="col-sm-7">
                            <img src="{{ $cat->photo }}" alt="">
                        </div>
                    </div><br>
                </h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cerrar
              </button>
            </div>
          </div>
        </div>
</div>
