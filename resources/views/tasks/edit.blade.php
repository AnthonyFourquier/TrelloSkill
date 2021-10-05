

<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="Modaltasksedit-option-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="Modaltasksedit" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <div class="titleCard">
            <h3>Editer le contenu de votre tache</h3>
</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

    <form action="{{ route('tasks.update',$task->id)}}" method='post'>
        @csrf
        @method('PUT')
        <div>
        <input type="text" name="content" value=" {{$task->content}} ">
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
