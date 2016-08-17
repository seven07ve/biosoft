    <p>{{ $lista[0] }}</p>
    <a href="#" title=""  type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{{ $lista[3] }}">
        {{ $lista[1] }}
    </a>
    <!-- Modal -->
    <div class="modal fade" id="{{ $lista[3] }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title titulo-seccion" id="myModalLabel">{{ $lista[0] }}</h2>
          </div>
          <div class="modal-body text-justify">
            {{ $lista[1] }}
            {{ $lista[2] }}
            <br clear="all">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>