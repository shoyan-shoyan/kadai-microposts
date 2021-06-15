
@if (count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $favorite)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($favorite->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $favorite->user->name }}

                        posted at
                        {{ $favorite->created_at}}
                    </div>
                    <div>
                        {{ $favorite->content }}
                    </div>
                    <div class="container">
                        <div class="row">
                            <div>
                                {{-- お気に入りボタンのフォーム --}}
                                <?php $micropost = $favorite; ?>
                                @include('post_favorite.favorite_botton')
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $favorites->links() }}
@endif