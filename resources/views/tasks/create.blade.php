
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="Modaltaskscreate-option-{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="Modaltaskscreate" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><div class="titleCard">
            <h3>Ajouter une tache</h3>
        </div></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form_task" action= "{{ route('tasks.store') }}" method="post">
                @csrf
                <input type="hidden" value="{{$card->id}}" name="card_id">
            <div>
                <label for="content">Contenue de la Tache :</label>
            </div>
            <div>
                <input type="texte" id="content" name="content">
            </div>
            <br>
            
            <div>
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>

            </form>
        </div>

      </div>
    </div>
  </div>



<style>

    .containertaskcreate
    {
        display: flex;
        flex-direction: column;
        background-color: white;
        width: 100%;
        padding: 15px;
        box-shadow: 3px 3px 3px black ;

    }

    .titleCard, label{
        color: #3490dc;
    }


</style>

