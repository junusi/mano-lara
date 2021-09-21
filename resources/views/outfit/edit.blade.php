@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">EDIT OUTFIT</div>

               <div class="card-body">
                <form method="POST" action="{{route('outfit.update',$outfit)}}">
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="outfit_type" value="{{old('outfit_type',$outfit->type)}}" >
                        <small class="form-text text-muted">Type of the outfit.</small>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="outfit_color" value="{{old('outfit_color',$outfit->color)}}">
                        <small class="form-text text-muted">Outfit color.</small>
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input type="text" class="form-control" name="outfit_size" value="{{old('outfit_size',$outfit->size)}}">
                        <small class="form-text text-muted">Outfit size numerical.</small>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control" name="outfit_about" id="summernote" >{{old('outfit_about',$outfit->about)}}</textarea>
                        <small class="form-text text-muted">About outfit.</small>
                    </div>
                    <div class="form-group">
                        <label>Master</label>
                        <select  class="form-control" name="master_id">
                        @foreach ($masters as $master)
                        <option value="{{$master->id}}"@if(old('master_id',$outfit->master_id) == $master->id )selected @endif>
                            {{$master->name}} {{$master->surname}}
                        </option>
                        @endforeach
                        </select>
                        <small class="form-text text-muted">Select master from the list.</small>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-info">Update Outfit Info</button> 
                    @csrf
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script>
    $(document).ready(function() {
       $('#summernote').summernote();
     });
    </script>
@endsection

@section('title') EDIT OUTFIT @endsection