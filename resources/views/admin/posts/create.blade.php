@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.posts.index')}}" class="btn btn-primary m-4">Torna alla lista</a>

        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" cols="30" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Pubblica Post</button>
        </form>

    </div>
@endsection
