@extends('layouts.main')

@section('content')
<div style="height: 94px;"></div>


<div class="site-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ссылка для подтверждения email была отправлена') }}
                        </div>
                    @endif

                    {{ __('Перед тем как продолжить, проверте ваш email на наличие письма с подтверждающей ссылкой') }}
                    {{ __('Если вы не получили email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('кликните здесь для отправки нового') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
