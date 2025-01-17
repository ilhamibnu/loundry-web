@extends('landing.layout.main2')
@section('title', 'Change Password -')
@section('content')
<!-- login-section -->
<section class="login-section layout-radius">
    <div class="inner-container">
        <div class="right-box">
            <div class="form-sec">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Change Password</button>
                        {{-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Register</button> --}}
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="form-box">
                            @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-2">



                                <?php

                            $nomer = 1;

                            ?>

                                @foreach($errors->all() as $error)
                                <li>{{ $nomer++ }}. {{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="/user/change-password" method="POST">
                                @csrf
                                @method('POST')
                                <input hidden name="code" value="{{ $user->code }}" type="text">
                                <div class="form_boxes">
                                    <label>Kata Sandi</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>

                                <div class="form_boxes">
                                    <label>Ulangi Kata Sandi</label>
                                    <input type="password" name="repassword" placeholder="Password" />
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Ubah Kata Sandi<img src="images/arrow.svg" alt="" />
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End login-section -->
@endsection
