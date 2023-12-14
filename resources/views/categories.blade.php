@extends("layouts.template")

@section("content")
    <div class="container mt-3">
        <h2 class="mb-3">Post Categories</h2>
        @foreach ($categories as $category)
            <ul>
                <li>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
