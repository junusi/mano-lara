@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">MASTERS LIST</div>
               <div class="card-body">
                <ul class="list-group">   
                @foreach ($masters as $master)
                <li class="list-group-item">
                    <div class="list-block">
                        <div class="list-block__content">
                            <span>{{$master->name}} {{$master->surname}}</span>
                             @if($master->getOutfit->count())
                             <small>Works on {{$master->getOutfit->count()}} outfits </small>
                             @else
                             <small>Curently has no outfits</small>
                             @endif
                        </div> 
                        <div class="list-block__buttons"> 
                            <a href="{{route('master.edit',[$master])}}" class="btn btn-info">EDIT</a>         
                            <form method="POST" action="{{route('master.destroy', $master)}}">
                                <button type="submit" class="btn btn-danger">DELETE</button>
                                @csrf
                            </form>   
                        </div>
                  </div>
              </li>
@endforeach
               </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') MASTERS LIST @endsection
