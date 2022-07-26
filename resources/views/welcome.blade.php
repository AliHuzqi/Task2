{{--@extends('task2')--}}
{{--@section('content')--}}
{{--    <div class="row justify-content-between"></div>--}}
{{--        <div class="col-md-5" style="padding-left: 50px">--}}
{{--            <h3> Add A folder </h3>--}}
{{--            <form action="#" method="Post" enctype="multipart/form-data">--}}
{{--                @csrf--}}

{{--                <div class="form-group">--}}
{{--                    <lable for="title" class="mt-4"> Product Title: </lable>--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="form-control @error('title') is-invalid @enderror"--}}
{{--                        name="title"--}}
{{--                        placeholder="Enter product title:">--}}
{{--                    <span class="text-danger">--}}
{{--                        @error('title')--}}
{{--                        {{$message}}--}}
{{--                        @enderror--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    <br>--}}

{{--    <div class="form-group" style="padding-left: 50px">--}}
{{--        <lable for="Price" class="mt-4"> Product Price: </lable>--}}
{{--        <input--}}
{{--            type="number"--}}
{{--            step="any"--}}
{{--            min="1"--}}
{{--            class="form-control @error('Price') is-invalid @enderror"--}}
{{--            name="Price"--}}
{{--            placeholder="Enter product Price:">--}}
{{--        <span class="text-danger">--}}
{{--                        @error('Price')--}}
{{--            {{$message}}--}}
{{--            @enderror--}}
{{--                    </span>--}}
{{--    </div>--}}
{{--   --}}

{{--    <div class="form-group" style="padding-left: 50px">--}}
{{--        <lable for="files" class="from-lable mt-4"> Upload Product Images: </lable>--}}
{{--        <input--}}
{{--            type="file"--}}
{{--            name="images[]"--}}
{{--            id=""--}}
{{--            class="form-control"--}}
{{--            accept="image/*"--}}
{{--            multiple>--}}
{{--    </div>--}}
{{--    <br>--}}
{{--    <div class="mt-4" style="padding-left: 50px">--}}
{{--    <button type="submit" class="btn btn-primary"> Save Product </button>--}}
{{--    </div>--}}

{{--@endsection--}}
