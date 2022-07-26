@extends('layout.master')
@section('content')


    <div class="row">
        <div class="card col-12">
            <div class="row">
                <div class="card col-12">
                    <div class="card-body">
                        <a href="{{route('folders.index')}}" class="btn btn-primary">Folders</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div style="padding-left: 20px">
        <h5 class="card-title">Content of {{$folder->name}}</h5>
        @csrf
        <div class="mb-3">
            <div >
                <table class="table table-success table-striped">
                    <br>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">File Name</th>
                        <th scope="col">File extension </th>

                        <th scope="col">File tags</th>
                        <th scope="col">operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)

                        <tr>
                            <th scope="row">{{$file->id}}</th>
                            <td><a target="_blank" href="{{ url($file->file_link) }}" > {{$file->name}} </a> </td>
                            <td>{{$file->extension}}</td>
{{--                            <td>{{$file->file_link}}</td>--}}
                            <td>
                            @foreach($file->FileTags as $file_tags)

                                {{$file_tags->tag->name}},

                                @endforeach

                            </td>
                            <td>
                                <a href="{{route('file.edit',$file->id)}}" class="btn btn-primary">edit</a>
                                <form method="post" action="{{route('file.delete',$file->id)}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger " value="delete">
                                    </form>
                            </td>
{{--                            <td>--}}
{{--                                <a href="{{route('folders.edit',$folder->id)}}" class="btn btn-primary">edit</a>--}}
{{--                                <form method="post" action="{{route('folders.delete',$folder->id)}}">--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}
{{--                                    <input type="submit" class="btn btn-danger " value="Delete folder">--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                            <td><a href="{{route('folders.show',$folder->id)}}" class="btn btn-success"> Show </a> </td>--}}
                        </tr>
                    @endforeach
                    @php
                        $i=1;
                    @endphp

{{--                        <tr>--}}
{{--                            <th scope="row">{{$i++}}</th>--}}
{{--                            <td>{{$folder->show}}</td>--}}
{{--                            <td>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
                    </tbody>
                </table>
    </div>
        </div>


@endsection
