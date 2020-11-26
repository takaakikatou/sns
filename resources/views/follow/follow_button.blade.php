@if(Auth::check())

    @if (Auth::id() != $user->id)

        @if (Auth::user()->is_following($user->id))
        
            {!! Form::open(['route' => ['unfollow', $user->id], 'method' => 'delete']) !!}
                {!! Form::submit('followed', ['class' => "btn-border btn-click button btn btn-danger mt-1"]) !!}
            {!! Form::close() !!}
            
        @else
        
            {!! Form::open(['route' => ['follow', $user->id]]) !!}
                {!! Form::submit('follow', ['class' => "btn-border button btn btn-primary mt-1"]) !!}
            {!! Form::close() !!}
            
        @endif
    
    @endif

@endif