<h1>Blog</h1>
<a href="/posts/create">Add post</a>
<hr>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <em>{{ $post->created_at }}</em><br>
    <a href="/posts/{{ $post->id }}">more...</a>
    <hr>
@endforeach