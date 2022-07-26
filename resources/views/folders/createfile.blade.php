@extends('layout.master')
@section('content')

    <div class="card-body" style="padding-left: 20px"><br>
        <h5 class="btn btn-danger">Create new File</h5>
        <form method="post" action="{{route('file.store')}}" enctype="multipart/form-data">
            <br>
            @csrf

            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="File" class="form-control" id="file" name="file[]"  placeholder="Enter the name of the File" multiple  required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Folder</label>
                <select name="folder" class="form-select" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>

                    @foreach($folders as $folder)
                        <option value="{{$folder->id}}"> {{$folder->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="file_tag" class="form-label">File tags</label>
                <select name="file_tag[]" id="file_tag" class="form-select" multiple >

                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}"> {{$tag->name}} </option>
                    @endforeach
                </select>
            </div>



            <a href="{{route('folders.index')}}" class="btn btn-primary">Folders</a>
            <button type="submit" class="btn btn-outline-primary">submit</button>
        </form>
    </div>


    <script>
        $(document).ready(function() {
            $('#file_tag').select2(
                {
                    theme: "bootstrap-5",
                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: true,
                }
            );
        });
    </script>

@endsection
