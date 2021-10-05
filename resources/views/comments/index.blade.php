

@foreach ($task->comments as $comment)
<hr>
<br><br>
 <div draggable="true" ondragstart="drag(event)" id="cardCreated{{$card->id}}" >   {{ $comment->content }}</div>
        <br>

         <div>       <p><i>commentaire ajouté le {{ $comment->date }} </i></p></div>
            <form method="POST" action="{{ route('comments.delete', $comment->id) }}">
          {{--       <a href="{{ route('comments.edit', $comment->id) }}" value="Editer">Editer</a> --}}
                {{-- Liens vers edition du commentaire --}}
                @csrf
                @method('DELETE')
               <div> <button class="btn btn-primary" type="submit" class="deletebtn"><i class="fas fa-trash-restore-alt "></i></button></div>
            </form>

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
