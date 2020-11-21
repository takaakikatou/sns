@extends('layouts.template')

@section('content')
<div class="bgimage bg-posting">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <form class="create" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                   <div class="create-position">
                        {{csrf_field()}}
                        <div class="cp_iptxt cp_iptxts">
                            <label>タイトル</label>
                            <input type="text" class="profile-input" placeholder="いまどうしてる？" name="title">
                        </div>
                        <div class="cp_iptxt">
                            <label>内容</label>
                            <textarea class="profile-input create-content" placeholder="" cols="58" rows="5" name="body"></textarea>
                        </div>
                        <div id="attachment">
                        <label><input type="file" name="post_image" class="fileinput">ファイルを添付する</label>
                        </div>
                        <button type="submit" class="lock_on_btn btn_create"><span>投稿</span></button>
                   </div>
                </form>
            </div>
        </div>
    </div>
    <h3 id="btm">POSTING</h3>
</div>
@endsection
