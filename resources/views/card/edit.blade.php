
  <!-- Modal -->
  <div class="modal fade" id="exampleModal-option-{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <div class="titleCard">
            <h3>Editer le nom de votre liste</h3>

        </div></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="@route('card.update', $card->id)" method='post'>
                @csrf
                @method('PUT')
                    <br>
                <div>
                    <input type="text" name="title" value="{{$card->title}}">
                </div>
                    <br>
                        <div>
                        <input class="btn btn-primary" type="submit" value="Valider">
                        </div>

           </form>
        </div>

      </div>
    </div>
  </div>



<style>
    .card{

        padding: 15px;
    }

    .titleCard{
        color: #3490dc;
    }
#editcard{
    width: 100%;
}
</style>
