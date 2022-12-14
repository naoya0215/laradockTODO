<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    @yield('styles')
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
            <div class="my-navbar-control">
                @if (Auth::check())
                    <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
                    ｜
                    <form method="POST" action="{{ route('logout') }}" style="float: right;">
                        @csrf
                        <a href="route('logout')" class="my-navbar-item"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
                    ｜
                    <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
                @endif
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>
