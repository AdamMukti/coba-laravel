@extends("layouts.template")

@section("content")
    <div class="container mt-3">

        <h2>Post Page</h2>
        @foreach ($posts as $post)
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }} </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->excerpt }} </h6>
                    <a href="/posts/{{ $post->slug }}" class="card-link">More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
