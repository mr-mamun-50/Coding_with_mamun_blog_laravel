@extends('layouts.app')

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
                        <div class="content">
                            <p>{{ $post->description }}</p>
                        </div>
                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="pt-5 mt-4 mb-5 border-top">
                        <h3 class="mb-4">Comments</h3>

                        <div class="pb-4 mb-4 media d-block d-sm-flex">
                            <a class="mb-3 mr-2 d-inline-block mb-md-0" href="#">
                                <img src="images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                            </a>
                            <div class="media-body">
                                <a href="#!" class="mb-3 h4 d-inline-block">Alexender Grahambel</a>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                    condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>

                                <span class="mr-3 text-black-800 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex">
                            <div class="mb-3 mr-2 d-inline-block mb-md-0" href="#">
                                <img class="mr-3" src="images/post/arrow.png" alt="">
                                <a href="#!"><img src="images/post/user-02.jpg" class="mr-3 rounded-circle"
                                        alt=""></a>
                            </div>
                            <div class="media-body">
                                <a href="#!" class="mb-3 h4 d-inline-block">Nadia Sultana Tisa</a>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                    condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>

                                <span class="mr-3 text-black-800 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-4">Leave a Reply</h3>
                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="shadow-none form-control" name="comment" rows="7" required></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="shadow-none form-control" type="text" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="shadow-none form-control" type="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="shadow-none form-control" type="url" placeholder="Website">
                                    <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Comment Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
