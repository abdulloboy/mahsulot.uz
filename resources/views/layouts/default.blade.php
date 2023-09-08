<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="d-flex justify-content-start m-3">
        <a href="{{ route('products.index') }}" class="btn btn-info">
            {{ __('Products') }}
        </a>
    </div>

    @if (Auth::user()->is_admin)
        <div class="d-flex justify-content-start m-3">
            <a href="/api/history" class="btn btn-info">
                {{ __('Product history') }}
            </a>
        </div>
    @endif

    <div class="d-flex justify-content-start m-3">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a :href="route('logout')"
                onclick="event.preventDefault();
                        this.closest('form').submit();"
                class="btn btn-info">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
