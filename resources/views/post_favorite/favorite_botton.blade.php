{{-- @if (Auth::id() != $user->id) --}}
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入り登録解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavorite', ['class' => "col-xs-3 btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り登録ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "col-xs-3 btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
{{-- @endif --}}