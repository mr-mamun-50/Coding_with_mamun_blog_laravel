<aside class="col-lg-4 sidebar-home">
    <!-- Search -->
    <div class="widget">
        <h4 class="widget-title"><span>Search</span></h4>
        <form action="#!" class="widget-search">
            <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
            <i class="ti-search"></i>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
    </div>

    <!-- about me -->
    <div class="widget widget-about">
        <h4 class="widget-title">Hi, I am Mamun!</h4>
        <img class="img-fluid" src="{{ asset('usr_assets/images/author.jpg') }}" alt="Themefisher">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel in in donec iaculis tempus odio
            nunc laoreet . Libero ullamcorper.</p>
        <ul class="mb-3 list-inline social-icons">

            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

        </ul>
        <a href="about-me.html" class="mb-2 btn btn-primary">About me</a>
    </div>


    <!-- recent post -->
    <div class="widget">
        <h4 class="widget-title">Recent Post</h4>

        @for ($i = 0; $i < 3; $i++)
            <!-- post-item -->
            <article class="widget-card">
                <div class="d-flex">
                    <img class="card-img-sm" src="{{ asset('post_thumbnails/' . $recentPost[$i]->thumbnail) }}">
                    <div class="ml-3">
                        <h5><a class="post-title"
                                href="{{ route('single_post_view', $recentPost[$i]->id) }}">{{ $recentPost[$i]->title }}</a>
                        </h5>
                        <ul class="mb-0 card-meta list-inline">
                            <li class="mb-0 list-inline-item">
                                <i class="ti-calendar"></i> {{ $recentPost[$i]->created_at->format('d M Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        @endfor

    </div>

    <!-- categories -->
    <div class="widget widget-categories">
        <h4 class="widget-title"><span>Categories</span></h4>
        <ul class="list-unstyled widget-list">
            @foreach ($categories as $category)
                {{-- get posts count --}}
                @php
                    $postCount = DB::table('posts')
                        ->where('category_id', $category->id)
                        ->count();
                @endphp

                <li><a href="{{ route('filter_by_category', $category->id) }}" class="d-flex">{{ $category->name }}
                        <small class="ml-auto">({{ $postCount }})</small></a>
                </li>
            @endforeach
        </ul>
    </div>


</aside>
