@extends('layouts.app1')
@include('profil.menu')


    <div class="card" style="width: 18rem;">
        <img src="{{$profils->picture}}" class="card-img-top" alt="photo profil">
        <div class="card-body">
          <h5 class="card-title">
              {{$profils->lastname}}
            {{$profils->firstname}}</h5>
            <p class="card-text">{{$profils->email}}</p>
            <p class="card-text">{{$profils->job}}</p>
            <p class="card-text">{{$profils->description}}</p>
            <p class="card-text">{{$profils->pasword}}</p>

          <a href="@route('profil.edit',[$profils->id])" class="btn btn-primary"> <i class="fas fa-edit fa-2x"></i></a>
        </div>
      </div>
<style>
    .card{
        margin-left:37.5%;
    }
    </style>

