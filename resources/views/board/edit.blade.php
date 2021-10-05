@extends('layouts.app1')
@include('board.menu')

<div class="containerboardedit">
<form action="@route('board.update', [$board->id])" method='post'>
        @csrf
        @method('PUT')
<div class="card" style="width: 18rem;">


    <div class="card-body">

        <h5 class="card-title"><input type="text" name="title" value="{{$board->title}}"> </h5>
      <div>  <input type="color" name="title" value="{{$board->img}}"></div>
      <br>
        <input class="btn btn-primary" type="submit" value="Valider">

    </div>
  </div>
</form>



<style>
.card{
    margin-left:37.5%;
}
.containerboardedit{
    margin-top: 5%;
    }
</style>

