<style>
    .blabla{
display: flex;
flex-direction: row;
flex-wrap: wrap;
width: 100%;
justify-content: space-around;
text-align: center;
}
</style>




@extends('layouts.app1')
@include('board.menu')
<body style="background-color: {{$board->img}}" >
@include('card.create', ['board' => $board])


<div class="blabla">
@include('card.index')
</div>









</body>



