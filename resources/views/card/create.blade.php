
    <div class="containercards">
    <form action="@route('card.store')" method="post" class="form">
        @csrf

        <div class="card">
            <div class="titleCard">
                <h3>Ajouter une liste</h3>
            </div>
            <br>
                <div class="titleCard">
                    <input type="text" name="title" placeholder="ajouter un titre">
                </div>
                <br>
                <div class="form-submit">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus-square fa-2x"></i></button>
                </div>
                <input  type="hidden" value="{{$board->id}}" name="board_id">
        </div>


    </form>
</div>


<style>

    .card{
        width: 15%;
        padding: 15px;
    }

    .titleCard{
        color: #3490dc;
    }
    .containercards{
    margin-top: 5%;
    margin-left: 5%;
    margin-bottom: 2.5%;
    }
</style>
