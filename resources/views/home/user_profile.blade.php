@extends('layouts.template')

@section('content')
<div class="bgimages bg-activity">
<div class="profile">
  <div class="profile-contents">
    <div class="profiles-mycontent">
      <img class="profile_image" src="../../uploads/{{ $user->profile_image}}" width="250px" height="250px">
      <div class="profile-text">
        <p class="profile-myname">{{ $user->name }}</p>
        <p class="profile-mymessage">{{ $user->profile }}</p>
      </div>
    </div>
  </div>
  <h3 id="btm">ACTIVITY</h3>
</div>
@endsection
