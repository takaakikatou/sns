@extends('layouts.template')

@section('content')
<div class="bgimage bg-profile">
  <div class="profile">
    <div class="profile-contents">
      <div class="profiles-mycontent">
        @if (empty(Auth::user()->profile_image))
        <img class="profile_myimage" src="{{ asset('image/アイコン.png') }}" width="160px" height="160px">
        @else
        <img class="profile_myimage" src="../../uploads/{{ $user->profile_image}}" width="160px" height="160px">
        @endif
        <div class="profile-text">
          <p class="profile-myname">{{ $user->name }}</p>
          <div class="followers">
            <li class=" {{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('followers',['id'=>$user->id]) }}" class="profile-mymessage btn-link">follower　　{{ $counts["followers"] }}</a></li>
            <li class=" {{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('followings',['id'=>$user->id]) }}" class="btn-link padding-left">follow　{{ $counts["followings"] }}</a></li>
          </div>
          <p class="profile-mymessage">{{ $user->profile }}</p>
          <a class="profile-edit" href="/home/profile/edit/{{ $user->id }}">EDIT</a>
        </div>
      </div>
    </div>
  </div>
  <h3 id="btm">PROFILE</h3>
</div>
@endsection
