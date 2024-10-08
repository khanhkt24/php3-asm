<h1>Bài đăng thuộc tag: {{ $tag->name }}</h1>

<ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</ul>
