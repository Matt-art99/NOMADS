@extends('layouts.success')
@section('title', 'NOMADS | Transaction Success')
@section('content')
<main>
    <section class="section-success d-flex align-items-enter">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
            <h1>Yay! Success</h1>
            <p>
                We&apos;ve sent sent you email for trip instruction 
                <br>
                please read it as well
            </p>
            <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </section>
</main>
@endsection