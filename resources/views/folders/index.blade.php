@extends('layout.master')
@section('content')

    <nav class="navbar bg-light">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button"><a href="{{route('folders.index')}}"> Folder section</a></button>
            <button class="btn btn-sm btn-outline-secondary" type="button"><a href="{{route('file.create')}}"> File section</a></button>
        </form>
    </nav>

    <div class="row">
        <div class="card col-12">
            <div class="card-body">
                <a href="{{route('folders.create')}}" class="btn btn-primary">Create new folder</a>
                <a href="{{route('file.create')}}" class="btn btn-primary">Create new file</a>
{{--                <a href="{{route('folders.search')}}" class="btn btn-primary">search</a>--}}

            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-12">
            <div class="card-body">
                {{--                {{$folders}}--}}
                <h5 class="card-title">Table Of Folder</h5>
                @csrf
                <div class="mb-3">
                    <div >
                        <table class="table table-striped"><br>
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">folder Name</th>
                                <th scope="col">status</th>
                                <th scope="col">operations</th>
                                <th scope="col">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($folders as $folder)

                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$folder->name}}</td>
                                    <td>
                                    @if($folder->status == 1)
                                        <p class="btn btn-success">Active</p>
                                        @else
                                            <p class="btn btn-danger">enActive</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('folders.edit',$folder->id)}}" class="btn btn-primary">edit</a>
                                        <form method="post" action="{{route('folders.delete',$folder->id)}}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger " value="Delete folder">
                                        </form>
                                    </td>
                                    <td><a href="{{route('folders.show',$folder->id)}}" class="btn btn-success"> Show </a> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>


@endsection

