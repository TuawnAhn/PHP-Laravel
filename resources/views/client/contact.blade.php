@extends('layouts.client')
@section('title', 'Liên hệ')

@section('content')
    <!-- Breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="item-breadcrumb">
                    <a href="{{ route('clients.home') }}" class="text">Home</a>
                </li>
                <li class="item-breadcrumb dot">
                    <span></span>
                </li>
                <li class="item-breadcrumb">
                    <span class="text">Liên Hệ</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Title Page -->
    <section class="s-title-page">
        <div class="container">
            <h4 class="s-title letter-0 text-center">
                Liên Hệ
            </h4>
        </div>
    </section>
    <!-- /Title Page -->

    <!-- Contact -->
    <section class="s-contact flat-spacing-25">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="wg-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.878488998395!2d105.74724547503065!3d21.037240480613424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ba4f8db2c1%3A0x3799e47c4a68e3cf!2zQ2FvIMSR4bq3bmcgRlBUIFBvbHl0ZWNobmljLCBUcuG7i25oIFbEg24gQsO0LCBOYW0gVMawIGLhuq1tLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1svi!2s!4v1644395091752!5m2!1svi!2s"
                            class="map" style="border:none;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-left">
                        <div class="title fw-medium display-md-2">
                            Liên hệ với chúng tôi
                        </div>
                        <p class="sub-title text-main">
                            Bạn có câu hỏi? Vui lòng liên hệ với chúng tôi qua các kênh hỗ trợ dưới đây.
                        </p>
                        <ul class="contact-list">
                            <li>
                                <p>
                                    Địa chỉ:
                                    <a class="link"
                                        href="https://www.google.com/maps?q=FPT+Polytechnic+Trịnh+Văn+Bô,+Nam+Từ+Liêm,+Hà+Nội"
                                        target="_blank">
                                        Cao đẳng FPT Polytechnic, Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Số điện thoại:
                                    <a class="link" href="tel:02473008988">
                                        024 7300 8988
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Email:
                                    <a class="link" href="mailto:caodang@fpt.edu.vn">
                                        caodang@fpt.edu.vn
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Giờ làm việc:
                                    <span class="text-main">
                                        8:00 - 17:30, Thứ 2 - Thứ 7
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <ul class="tf-social-icon style-large ">
                            <li>
                                <a href="https://www.facebook.com/caodangfpt" class="social-item social-facebook">
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
                                <a href="https://www.snapchat.com/" class="social-item social-snapchat">
                                    <i class="icon icon-snapchat"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-right">
                        <div class="title fw-medium display-md-2">
                            Gửi liên hệ
                        </div>
                        <p class="sub-title text-main">
                            Vui lòng gửi các thắc mắc chung qua biểu mẫu bên dưới, chúng tôi sẽ phản hồi sớm nhất có thể.
                        </p>
                        <div class="form-contact-wrap">
                            <form action="{{ route('clients.contact.store') }}" method="POST" class="form-default">
                                @csrf
                                <div class="wrap">
                                    <div class="cols">
                                        <fieldset>
                                            <label for="username">Tên của bạn*</label>
                                            <input id="username" class="radius-8" type="text" name="username" required>
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                        <fieldset>
                                            <label for="email">Email*</label>
                                            <input id="email" class="radius-8" type="email" name="email" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="cols">
                                        <fieldset>
                                            <label for="phone">Số điện thoại (không bắt buộc)</label>
                                            <input id="phone" class="radius-8" type="text" name="phone">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="cols">
                                        <fieldset class="textarea">
                                            <label for="mess">Nội dung*</label>
                                            <textarea id="mess" class="radius-8" name="mess" required></textarea>
                                            @error('mess')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="button-submit">
                                        <button class="tf-btn animate-btn" type="submit">
                                            Gửi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- /Contact -->
@endsection
