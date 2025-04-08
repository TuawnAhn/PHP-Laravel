@extends('layouts.client')

@section('title', 'Chi tiết bài viết')

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
                    {{ $post->title }}
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
                        <p class="text-md">
                            {{ $post->created_at->format('M d, Y') }}
                        </p>
                    </li>
                </ul>
            </div>
            <div class="content">
                @if ($post->image)
                    <div class="entry_image">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="lazyload">
                    </div>
                @endif
                <div class="block-quote">
                    <p>“ {!! nl2br(e($post->content)) !!}”</p>
                </div>

                <div class="bot">
                    <div class="entry-tag">
                        <p>Tags:</p>
                        <ul class="style-list">
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                    <div class="entry-social">
                        <p>Share:</p>
                        <ul class="tf-social-icon style-large">
                            <li><a href="#" class="social-item social-facebook"><i class="icon icon-fb"></i></a></li>
                            <li><a href="#" class="social-item social-instagram"><i
                                        class="icon icon-instagram"></i></a></li>
                            <li><a href="#" class="social-item social-x"><i class="icon icon-x"></i></a></li>
                            <li><a href="#" class="social-item social-snapchat"><i class="icon icon-snapchat"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="leave-comment-wrap">
                    <p class="title">Leave a comment</p>
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
                            <p class="notice">Please note, your email won’t be published.</p>
                            <div class="button-submit">
                                <button class="tf-btn text-sm animate-btn text-transform-none" type="submit">
                                    Post comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Single -->
@endsection
