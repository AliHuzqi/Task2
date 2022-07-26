@extends('layout.master')
@section('content')

    <div class="row">
        <div class="card col-12">

            <div class="card-body">
                <h5 class="card-title">create new folder</h5>
               <form method="post" action="{{route('folders.store')}}">
                   @csrf
                   <div class="mb-3">
                       <label for="name" class="form-label">folder name</label>
                       <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name of the folder" required>
                       <div class="form-check form-switch">
                           <br>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1">
                               <label class="form-check-label" for="flexRadioDefault1">
                                   active
                               </label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" >
                               <label class="form-check-label" for="flexRadioDefault2">
                                   enactive
                               </label>
                           </div>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-outline-primary">submit</button>

{{--                   <a href="{{route('folders.view')}}"> submit </a>--}}
               </form>
            </div>
        </div>
    </div>
@endsection
