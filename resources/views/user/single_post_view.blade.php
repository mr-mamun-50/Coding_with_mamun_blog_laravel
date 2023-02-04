@extends('layouts.app')

@section('title')
    {{ $post->title }} |
@endsection

@section('mainSection')
    <div class="py-4"></div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5 col-lg-9 mb-lg-0">
                    <article>
                        <div class="mb-4 post-slider">
                            <img src="{{ asset('post_thumbnails/' . $post->thumbnail) }}" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">{{ $post->title }}</h1>
                        <ul class="my-3 card-meta list-inline">
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ date('d M Y', strtotime($post->created_at)) }}
                            </li>
                            <li class="list-inline-item">
                                Category: <b class="text-primary">{{ $post->category_name }}</b>
                            </li>
                        </ul>
                        <h4 class="card-text">{{ $post->subtitle }}</h4>
                        <div class="content">
                            <p>
                                @php
                                    echo $post->description;
                                @endphp
                            </p>
                        </div>
                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="pt-5 mt-4 mb-5 border-top">
                        <h3 class="mb-4">Comments</h3>

                        @foreach ($comments as $comment)
                            <div class="pb-4 mb-4 media d-block d-sm-flex">
                                <a class="mb-3 mr-2 d-inline-block mb-md-0" href="#">
                                    @if ($comment->user_photo)
                                        <img src="{{ asset('images/user_photos/' . $comment->user_photo) }}" alt=""
                                            class="mr-3 rounded-circle" style="height: 30px">
                                    @else
                                        <img src="{{ asset('images/user_photos/user.png') }}" alt=""
                                            class="mr-3 rounded-circle" style="height: 30px">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <a href="#!" class="mb-3 h4 d-inline-block">{{ $comment->user_name }}</a>
                                    <p>
                                        @php
                                            echo $comment->comment;
                                        @endphp
                                    </p>
                                    <small class="mr-3 text-black-600 font-weight-600">
                                        {{ date('d M Y', strtotime($comment->created_at)) }}
                                    </small>
                                </div>
                            </div>
                        @endforeach
                        {{ $comments->links('pagination::bootstrap-5') }}
                    </div>

                    <div>
                        <h3 class="mb-4">Leave a Reply</h3>
                        <form action="{{ route('comment_store', $post->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="shadow-none summernote form-control" name="comment" rows="7" required></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">Comment Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
