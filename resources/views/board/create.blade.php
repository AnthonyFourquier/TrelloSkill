<div class="modal_card">
    <form action="@route('board.store')" method="post" class="form">
        @csrf
        <div class="container">
            <div class="card">
                <div class="title">
                    <input type="text" name="title" placeholder="ajouter un titre">
                </div>
                <div class="form-submit">
                    <input type="submit" value="ajouter un tableau">
                </div>
            </div>
        </div>
    </form>
    </div>

<style>
    .card{
        display:flex;
        flex-direction: column;
        border: 2px solid black;
        width:15%;
    }
    .container{
        display:flex;
        flex-direction: row;
    }
    .cardContainer{
        display: flex;
        flex-direction: column;
    }
    .generalContainer{
        display: flex;
        flex-direction: row;
        width: 30%;
    }
</style>
