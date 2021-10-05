
@extends('layouts.app1')
@include('profil.menu')


    <form action="@route('profil.update', $profil->id)" method='post'>
        @csrf
        @method('PUT')
<div class="card" style="width: 18rem;">
    <input class="card-img-top" type="text" name="picture" value="{{$profil->picture}}">

    <div class="card-body">

        <h5 class="card-title"><input type="text" name="lastname" value="{{$profil->lastname}}">
            <input type="text" name="firstname" value="{{$profil->firstname}}">
         </h5>
            <p class="card-text">    <input type="email" name="email" value="{{$profil->email}}"></p>
                <p class="card-text">   <input type="password" name="password" value="{{$profil->password}}"></p>
                    <p class="card-text">   </p>
                        <p class="card-text">   <input type="text" name="job" value="{{$profil->job}}"></p>
                            <p class="card-text">  <input type="text" name="description" value="{{$profil->description}}"></p>
                            <input class="btn btn-primary" type="submit" value="Valider">

    </div>
  </div>
</form>
<style>
.card{
    margin-left:37.5%;
}
</style>

