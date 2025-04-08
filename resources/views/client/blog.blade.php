@extends('layouts.client')

@section('title', 'Bài viết')

@section('content')
    <!-- Blog Single -->
    <section class="s-blog-single line-bottom-container">
        <div class="container">
            <div class="heading blog-post-item">
                <div class="entry-tag">
                    <ul class="style-list">
                        <li>
                            <a class="type-bag">
                                Post
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="entry_title display-sm fw-medium">
                    {{ $latestPost->title }}
                </p>
                <ul class="entry-meta">
                    <li class="entry_author">
                        <div class="avatar">
                            <img src="{{ asset('client/images/avatar/blog-author-1.jpg') }}" alt="avatar"
                                class="lazyload">
                        </div>
                        <p class="entry_name text-md">
                            Post by <span class="fw-medium"> {{ Auth::user()->name }}</span>
                        </p>
                    </li>
                    <li class="br-line"></li>
                    <li class="entry_date">
                        <p class="text-md">{{ $latestPost->created_at->format('M d, Y') }}</p>
                    </li>
                    <li class="br-line"></li>
                    <li class="entry_comment">
                        <p class="text-md">{{ $latestPost->comments_count ?? 0 }} comments</p>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="entry_image">
                    <img src="{{ asset('storage/' . $latestPost->image) }}"data-src="{{ asset('storage/' . $latestPost->image) }}"
                        alt="" class="lazyload">
                </div>
                {{-- <p class="text">
                    {!! nl2br(e(Str::limit($latestPost->content, 300))) !!}
                </p> --}}
                <div class="block-quote">
                    <p>“ {!! nl2br(e(Str::limit($latestPost->content, 300))) !!}”</p>
                </div>

                {{-- ... giữ nguyên các đoạn còn lại như blockquote, related-post, comment form ... --}}
            </div>
        </div>
    </section>

    <!-- /Blog Single -->

    <!-- Latest Tip -->
    <section class="flat-spacing-25">
        <div class="container">
            <div class="flat-title mb_2 wow fadeInUp">
                <h4 class="title">Bài viết mới nhất</h4>
            </div>
            <div dir="ltr" class="swiper tf-swiper"
                data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 12,
                            "speed": 800,
                            "observer": true,
                            "observeParents": true,
                            "slidesPerGroup": 1,
                            "navigation": {
                                "clickable": true,
                                "nextEl": ".nav-next-new",
                                "prevEl": ".nav-prev-new"
                            },
                            "pagination": { "el": ".sw-pagination-new", "clickable": true },
                            "breakpoints": {
                            "577": { "slidesPerView": 2, "spaceBetween": 12, "slidesPerGroup": 2 },
                            "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 4}
                            }
                        }'>
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="blog-post-item hover-img">
                                <div class="entry_image">
                                    <a href="{{ route('clients.showPost', $post->id) }}" class="img-style">
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            data-src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="lazyload">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="entry-tag">
                                        <ul class="style-list">
                                            <li>
                                                <a class="type-bag">
                                                    Post
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="blog-single.html" class="entry_title d-block text-xl fw-medium link">
                                        {{ $post->title }}
                                    </a>
                                    <ul class="entry-meta">
                                        <li class="entry_author">
                                            <div class="avatar">
                                                <img src="{{ asset('client/images/avatar/blog-author-4.jpg') }}"
                                                    data-src="{{ asset('client/images/avatar/blog-author-4.jpg') }}"
                                                    alt="avatar" class="lazyload">
                                            </div>
                                            <p class="entry_name text-md">
                                                Post by <span class="fw-medium"> {{ Auth::user()->name }} </span>
                                            </p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li class="entry_date">
                                            <p class="text-md">
                                                Sep 19 2025
                                            </p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li class="entry_comment">
                                            <p class="text-md">
                                                3 comments
                                            </p>
                                        </li>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex d-xl-none sw-dot-default sw-pagination-new justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Latest Tip -->
@endsection
