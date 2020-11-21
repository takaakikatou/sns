@extends('layouts.template')
@section('title','ユーザー情報')

@section('content')
<div class="bgimages bg-top">
    <div class="container">
        <div class="none">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header">
                            投稿一覧
                        </div>
                        @foreach ($posts as $post)
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $post->created_at }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"></div>
    </div>
    <h3 id="btm">MOVER<br>AND<br>SHAKER'<br>S</h3>
</div>
@endsection