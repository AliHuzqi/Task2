@extends('layout.master')
@section('content')

    <nav class="navbar bg-light">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button">Folder section</button>
            <button class="btn btn-sm btn-outline-secondary" type="button">File section</button>
        </form>
    </nav>

    <div class="row">
        <div class="card col-12">
            <div class="card-body">
                <a href="{{route('tags.create')}}" class="btn btn-primary">Create new Tag</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-12">
            <div class="card-body">

                @if(Session::has('error'))

                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error')}}

                    </div>
                @endif


                <h5 class="card-title">Table Of Tags</h5>
                @csrf
                <div class="mb-3">
                    <div >
                        <table class="table table-striped"><br>
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">folder Name</th>
                                <th scope="col">operations</th>
                                <th scope="col">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($tags as $tag)

                                <tr>
                                    <th scope="row">{{$tag->id}}</th>
                                    <td>{{$tag->name}}</td>

                                    <td>
                                        <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary">edit</a>
                                        <form method="post" action="{{route('tags.delete',$tag->id)}}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger " value="Delete folder">
                                        </form>
                                    </td>
                                    <td><a href="{{route('tags.show',$tag->id)}}" class="btn btn-success"> Show </a> </td>
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

