@extends('layouts.template')

@section('content')
<div class="bgimage bg-profile">
  <form class="edit-content" action=" /home/profile/update/{{ $user->id }}"method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="cp_iptxt">
    	name<input type="text" placeholder="お名前" name="name" value="{{ $user->name }}">
    	<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
    </div>
    <div class="cp_iptxt">
    	profile<textarea style="border:none;" class="profile-input"cols="58" rows="5" type="text" name="profile" maxLength="140" value="{{ $user->profile }}"></textarea>
    	<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
    </div>
    <div id="attachment">
      image<br><label><input type="file" name="profile_image" placeholder="image" class="fileinput">ファイルを添付する</label>
    	<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
    </div>
    <button type="submit" name="add" class="lock_on_btn">
    <span>transmit</span>
    </button>
  </form>
  <h3 id="btm">PROFILE</h3>
</div>
@endsection