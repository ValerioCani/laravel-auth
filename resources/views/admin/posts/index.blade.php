@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary m-4">Crea nuovo Post</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('admin.posts.show', ['post'=>$post->id])}}">Visualizza</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
