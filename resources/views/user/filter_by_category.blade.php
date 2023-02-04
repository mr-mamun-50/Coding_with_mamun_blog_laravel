@extends('layouts.app')

@section('mainSection')
    <section class="section-sm">
        <div class="py-4"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5 col-lg-8 mb-lg-0">
                    <h1 class="mb-4 h2">Showing items from <mark>{{ $filtered_posts->first()->category_name }}</mark></h1>

                    @foreach ($filtered_posts as $post)
                        <article class="mb-4 card">
                            <div class="post-slider">
                                <img src="{{ asset('post_thumbnails/' . $post->thumbnail) }}" class="card-img-top"
                                    alt="post-thumb">
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title"
                                        href="{{ route('single_post_view', $post->id) }}">{{ $post->title }}</a>
                                </h3>
                                <ul class="card-meta list-inline">

                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ date('d M Y', strtotime($post->created_at)) }}
                                    </li>
                                    <li class="list-inline-item">
                                        Category: <b class="text-primary">{{ $post->category_name }}</b>
                                    </li>
                                </ul>
                                <p class="card-text">{{ $post->subtitle }}</p>
                                <a href="{{ route('single_post_view', $post->id) }}" class="btn btn-outline-primary">Read
                                    More</a>
                            </div>
                        </article>
                    @endforeach

                    <div class="mt-5">
                        {{ $filtered_posts->links('pagination::bootstrap-5') }}
                    </div>
                </div>

                {{-- rightbar --}}
                @include('layouts.rightbar')

            </div>
        </div>
    </section>
@endsection
