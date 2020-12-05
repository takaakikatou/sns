@extends('layouts.template')

@section('layouts.template')
@section('content')
<div class="bgimages bg-activity">
  <div class="activity-contents">
        <h4>follower</h4>
        <div class="allusers">
          <div class="alluser">
            @foreach ($users as $user)
            <div class="activity-content">
                @if (empty(Auth::user()->profile_image))
                <img class="profile_myimage" src="{{ asset('public/image/アイコン.png') }}" width="60px" height="60px">
                @else
                <img class="profile_image" src="../../uploads/{{ $user->profile_image}}" width="50px" height="50px">
                @endif
                <p class="activity-name">{{ $user->name }} <br> があなたをフォローし始めました。</p>
            </div>
            @endforeach
          </div>
        </div>
  </div>
  <div class="profiles-contents">
        <h4>All User</h4>
        <div class="allusers">
          <div class="alluser">
            @foreach ($alluser as $user)
            <div class="activity-content">
                @if (empty(Auth::user()->profile_image))
                <img class="profile_myimage" src="{{ asset('image/アイコン.png') }}" width="50px" height="50px">
                @else
                <img class="profile_image" src="{{$user->profile_image}}" width="50px" height="50px">
                @endif
                <div class="activity-name">
                  <a class="profile-input" href="/home/user_profile/{{ $user->id }}">{{ $user->name }}</a>
                  @include('follow.follow_button',['user'=>$user])
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
  <h3 id="btm">ACTIVITY</h3>
</div>
@endsection
@endsection