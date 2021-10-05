
    @foreach ($card->tasks as $task )
    <hr>
    <br>
    <div draggable="true" ondragstart="drag(event)" id="cardCreated{{$card->id}}">
    {{$task->content}}
    </div>
    <br><br>
    <div class="boxbtntask">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltasksedit-option-{{$task->id}}">
        <i class="fas fa-edit"></i>
      </button>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalcommentcreate-option-{{$task->id}}">
            <i class="fas fa-plus-square"></i>
          </button>


    <form action="{{route('tasks.delete',$task->id)}}" method="POST">

     {{--    <a href="{{route('tasks.edit', $task->id)}}">edit</a> --}}
        @csrf

        @method('DELETE')

    <button class="btn btn-primary" type="submit"><i class="fas fa-trash-restore-alt "></i></button></div>


    </form>

<div>
@include('comments.index')
</div>
<div>
@include('comments.create',['task'=>$task])
</div>
<div>
@include('tasks.edit')
</div>
@endforeach

<style>
    .boxbtntask{
    display: flex;
flex-direction: row;
margin-left: 60%;
justify-content: space-around;

}
</style>
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
