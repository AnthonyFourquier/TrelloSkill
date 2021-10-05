


<!-- Button trigger modal -->


  <!-- Modal -->

  <div class="modal fade" id="Modalcommentcreate-option-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="Modalcommentcreate" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">  <div class="titleCard">
            <h3>Ajouter un commentaire</h3>
        </div></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('comments.store')}}">
                @csrf

                <input type="hidden" value="{{$task->id}}" name="task_id">

                <br>
                <div>
                    <textarea placeholder="Inscrire votre commentaire ... " type="text" id="content" name="content" cols="30" rows="5">{{ old('content') }}</textarea>
                </div>
                <div>
                    <br>
                <button class="btn btn-primary"  type="submit">Valider</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
