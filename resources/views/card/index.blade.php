
@foreach ($board->cards as $card)
<div class="list1">
        <div  ondrop="drop(event)" ondragover="allowDrop(event)"  id="cardDrop">
            <div  draggable="true" ondragstart="drag(event)" id="cardDroped{{$card->id}}">
                <div class="card" id="list">
               <div class="boxbtn">
                    <div class="titlecard"> <h2> {{$card->title}}</h2></div>

                <div>
                    <form action="@route('card.delete', $card->id)" method='post' >

                    <a href="@route('card.edit', $card->id)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-option-{{$card->id}}">
                            <i class="fas fa-edit"></i>
                          </a>


                @csrf
                @method('DELETE')

                    <button class="btn btn-primary" type="submit"><i class="fas fa-trash-restore-alt"></i></button>
                </div>
                </div>
                </form>
                <div>
                    @include('tasks.index')
                </div>
            </div>
            <div>
                @include('card.edit')
            </div>
                <div>
                    <div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltaskscreate-option-{{$card->id}}">
                            <i class="fas fa-plus-square fa-2x"></i>
                          </button>
                    </div>

                  @include('tasks.create', ['card' => $card])
                </div>


            </div>
        </div>
</div>

@endforeach




<script>
//evite que toute la page soit selectionnee
function allowDrop(ev)
{
    ev.preventDefault();
}
//selectionne l'element en fonction son id
function drag(ev)
{
    ev.dataTransfer.setData("text", ev.target.id);
}
//depose l'element dans la zone choisi
function drop(ev)
{
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));

}

</script>

<style>
body{
background-color: {{$board->img}};
}
#list{
display: flex;
flex-direction: column;
width: 100%;
/* background-color: rgba(255,255,255, 0.5) */
}
.list1{
display: flex;
flex-direction: column;
width: 20%;

}
.boxbtn{
    display: flex;
flex-direction: row;
justify-content: space-between;

}

</style>


