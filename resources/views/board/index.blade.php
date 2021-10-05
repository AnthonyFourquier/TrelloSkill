@extends('layouts.app1')

@include('board.menu')


<div class="containerboard">
    @foreach ( $boards as $board)

    <div class="containerCard">
        <div class="card" style="width: 18rem;">

            {{-- <img src="{{$board->img}}" class="card-img-top" alt="..."> --}}
            <div class="box"  style="background-color: {{$board->img}} "></div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="{{route('board.delete',[$board->id])}}" method="POST">
                           <a href="@route('board.show',[$board->id])" id="title" >  {{$board->title}}</a>
                    </h5>
                    <div class="btn">
                            <a  style="background-color: {{$board->img}} " href="@route('board.show',[$board->id])" class="btn btn-primary"><i class="fas fa-sign-in-alt fa-2x"></i></a>
                            <a  style="background-color: {{$board->img}} " class="btn btn-primary" href="@route('board.edit',[$board->id])" > <i class="fas fa-edit fa-2x" ></i></a>
                            @csrf
                            @method('DELETE')
                            <button  style="background-color: {{$board->img}} " class="btn btn-primary" type="submit"><i class="far fa-trash-alt fa-2x"></i></button>
                    </div>
                        </form>
                </div>
        </div>
<br><br><br>
    </div>
    <style>
        .containerboard{
            margin-top:10%;
            display: flex;
            flex-direction: row ;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 60%;
            margin-left: 20%;

        }
        #title{
            z-index: 100;
            position: relative;
            bottom: 125px;
            color: white;
            font-weight: bold;
            text-decoration: none;
        }
        .btn {
            z-index: 100;
            position: relative;
            bottom: 12.5px;

        }
        .box{
            height: 200px;
            width: 100%;
        }
            </style>
@endforeach
    <div class="card cardBoard" style="width: 18rem;">

        <div class="card-title title"><h5 class="titleBoard">AJOUTER UN TABLEAU</h5></div>
            <div class="card-body">

                    <form action="@route('board.store')" method="post" class="form">
                        @csrf

                        <div>
                            <input type="text" name="title" placeholder="Inscrire le titre ">
                        </div>
                            <br>
                            <div>
                                <input type="color" name="img" placeholder="Placez l'url du background">
                            </div>
                            <br>
                                <div>
                                    <button class="btn btn-primary"  type="submit"><i class="fas fa-plus-square fa-2x"></i></button>
                                </div>

                    </form>

            </div>
        </div>
    </div>


