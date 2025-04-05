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
                            <a href="#" class="type-life">
                                Lifestyle
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="entry_title display-sm fw-medium">
                    5 Timeless Wardrobe Essentials Every Woman Should Own
                </p>
                <ul class="entry-meta">
                    <li class="entry_author">
                        <div class="avatar">
                            <img src="{{ asset('client/images/avatar/blog-author-1.jpg') }}"
                                data-src="{{ asset('client/images/avatar/blog-author-1.jpg') }}" alt="avatar"
                                class="lazyload">
                        </div>
                        <p class="entry_name text-md">
                            Post by <span class="fw-medium"> Vineta </span>
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
                </ul>
            </div>
            <div class="content">
                <div class="entry_image">
                    <img src="{{ asset('client/images/blog/blog-single-1.jpg') }}"
                        data-src="{{ asset('client/images/blog/blog-single-1.jpg') }}" alt="" class="lazyload">
                </div>
                <p class="text">
                    Pellentesque dapibus hendrerit tortor. Nam ipsum risus, rutrum vitae, vestibulum eu,
                    molestie vel, lacus. Sed libero. Phasellus tempus. Etiam feugiat lorem non metus.
                    Morbi mattis ullamcorper velit. Donec sodales sagittis magna. Curabitur a felis in
                    nunc fringilla tristique. Quisque malesuada placerat nisl. Phasellus gravida semper
                    nisi.
                </p>
                <p class="text">
                    Curabitur blandit mollis lacus. Phasellus nec sem in justo pellentesque facilisis.
                    Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce ac felis
                    sit amet ligula pharetra condimentum. Integer tincidunt.
                </p>
                <p class="text">Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna.
                    Pellentesque commodo eros a enim. Etiam sit amet orci eget eros faucibus tincidunt.
                    Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.In hac
                    habitasse platea dictumst. Etiam ultricies nisi vel augue. Pellentesque egestas,
                    neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo
                    non est. Quisque rutrum. Duis leo.</p>
                <div class="block-quote">
                    <p>“Pellentesque dapibus hendrerit tortor. Nam ipsum risus, rutrum vitae, vestibulum
                        eu, molestie vel, lacus. Sed libero. Phasellus tempus. Etiam feugiat lorem non
                        metus Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna.
                        Pellentesque commodo eros a enim. Etiam sit amet orci eget eros faucibus
                        tincidunt.”</p>
                </div>
                <p class="text">
                    Curabitur blandit mollis lacus. Phasellus nec sem in justo pellentesque facilisis.
                    Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce ac felis
                    sit amet ligula pharetra condimentum. Integer tincidunt.
                </p>
                <div class="group-image">
                    <div class="entry_image">
                        <img src="{{ asset('client/images/blog/blog-single-2.jpg') }}"
                            data-src="{{ asset('client/images/blog/blog-single-2.jpg') }}" alt="" class="lazyload">
                    </div>
                    <div class="entry_image">
                        <img src="{{ asset('client/images/blog/blog-single-3.jpg') }}"
                            data-src="{{ asset('client/images/blog/blog-single-3.jpg') }}" alt="" class="lazyload">
                    </div>
                </div>
                <p class="text">
                    Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Pellentesque
                    commodo eros a enim. Etiam sit amet orci eget eros faucibus tincidunt. Vestibulum
                    purus quam, scelerisque ut, mollis sed, nonummy id, metus.In hac habitasse platea
                    dictumst. Etiam ultricies nisi vel augue. Pellentesque egestas, neque sit amet
                    convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque
                    rutrum. Duis leo.
                </p>
                <div class="bot">
                    <div class="entry-tag">
                        <p>
                            Tags:
                        </p>
                        <ul class="style-list">
                            <li>
                                <a href="#">
                                    Lifestyle
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Fashion
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="entry-social">
                        <p>
                            Share:
                        </p>
                        <ul class="tf-social-icon style-large ">
                            <li>
                                <a href="https://www.facebook.com/" class="social-item social-facebook">
                                    <i class="icon icon-fb"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="social-item social-instagram">
                                    <i class="icon icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/" class="social-item social-x">
                                    <i class="icon icon-x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                        class="icon icon-snapchat"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="related-post">
                    <a href="#" class="post prev">
                        <div class="icon">
                            <i class="icon-arr-left"></i>
                        </div>
                        <div class="text-wrap-left">
                            <p>PREVIOUS POST</p>
                            <p class="name-post">5 Timeless Wardrobe Essentials Every Woman Should Own
                            </p>
                        </div>
                    </a>
                    <a href="#" class="post next">
                        <div class="text-wrap-right">
                            <p>NEXT POST</p>
                            <p class="name-post">10 Must-Have Accessories for Every Season</p>
                        </div>
                        <div class="icon">
                            <i class="icon-arr-right2"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="leave-comment-wrap">
                <p class="title">
                    Leave a comment
                </p>
                <form action="#" class="form-default">
                    <div class="wrap">
                        <div class="cols">
                            <fieldset>
                                <label for="username">Your name*</label>
                                <input id="username" type="text" name="username" required>
                            </fieldset>
                            <fieldset>
                                <label for="email">Your email*</label>
                                <input id="email" type="email" name="email" required>
                            </fieldset>
                        </div>
                        <div class="cols">
                            <fieldset class="textarea">
                                <label for="mess">Your comment*</label>
                                <textarea id="mess" required></textarea>
                            </fieldset>
                        </div>
                        <p class="notice">
                            Please note, your email won’t be published.
                        </p>
                        <div class="button-submit">
                            <button class="tf-btn text-sm animate-btn text-transform-none" type="submit">Post
                                comment
                            </button>
                        </div>
                    </div>
                </form>
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
                                    <a href="blog-single.html" class="img-style">
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
                                                Post by <span class="fw-medium"> {{ $post->author }} </span>
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
