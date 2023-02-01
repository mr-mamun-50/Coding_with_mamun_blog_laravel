@extends('layouts.app')

@section('mainSection')
    @include('layouts.banner')
    {{-- @include('layouts.trending') --}}


    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5 col-lg-8 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>

                    @foreach ($posts as $post)
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

                    {{-- pagination --}}
                    <div class="mt-5">
                        {{ $posts->links('pagination::bootstrap-5') }}
                    </div>


                </div>

                {{-- rightbar --}}
                @include('layouts.rightbar')

            </div>
        </div>
    </section>
@endsection
