<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @if(App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}" />
    @else
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @endif
</head>

<body>
    <div class="container">
        <div class="title">{{ __('Login to the System') }}</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">{{ __('Email Address') }}</span>
                    <input type="text" name="email" id="">
                </div>
                <div class="input-box">
                    <span class="details">{{ __('Password') }}</span>
                    <input type="password" name="password" id="">
                </div>
            </div>
            <div class="button">
                <input type="submit" value="{{ __('Login') }}">
            </div>
        </form>
    </div>
</body>

</html>