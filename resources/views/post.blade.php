@extends("layouts.template")

@section("content")
    <div class="container mt-3">
        <div class="card mb-3"">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }} </h4>
                <p class="card-title">By Adam Mukti in <a href="../categories/{{ $post->category->slug }}">
                        {{ $post->category->name }} </a>
                </p>
                <p class="card-text">{{ $post->body }}</p>
                <a href="../posts" class="card-link">Back</a>
            </div>
        </div>
    </div>
@endsection
