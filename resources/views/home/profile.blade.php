@extends('layouts.template')

@section('content')
<div class="bgimage bg-profile">
  <div class="profile">
    <div class="profile-contents">
      <div class="profiles-mycontent">
        <img class="profile_myimage" src="../../uploads/{{ $user->profile_image}}" width="160px" height="160px">
        <div class="profile-text">
          <p class="profile-myname">{{ $user->name }}</p>
          <p class="profile-mymessage">{{ $user->profile }}</p>
          <a class="profile-edit" href="/home/profile/edit/{{ $user->id }}">EDIT</a>
        </div>
      </div>
    </div>
  </div>
  <h3 id="btm">PROFILE</h3>
</div>
@endsection
