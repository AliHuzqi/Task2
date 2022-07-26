@extends('layout.master')
@section('content')

    <div class="row">
        <div class="card col-12">

            <div class="card-body">
                <h5 class="card-title">update tag</h5>
               <form method="post" action="{{route('tags.update',$tag->id)}}">
                   @csrf
                   @method('PUT')
                   <div class="mb-3">
                       <label for="name" class="form-label">tag name</label>
                       <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name of the tag" value="{{$tag->name}}" required>

                   </div>
                   <button type="submit" class="btn btn-outline-primary">submit</button>

               </form>
            </div>
        </div>
    </div>
@endsection
