{{Session::get('message')}}

<h1>My First Blog</h1>
@foreach ($blogs as $blog)
<h2> <a href="/blog/{{ $blog->id }}">{{ $blog-
>title }}</a>{{ $blog->title }}</h2>
<p>{{ $blog->description }}</p>
<hr>
@endforeach