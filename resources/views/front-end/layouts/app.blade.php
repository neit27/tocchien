<!DOCTYPE html>
<html lang="en">
    @include('front-end.layouts.header')
<body>
    <div>
        @include('front-end.layouts.brand')

        @include('front-end.layouts.nav-bar')

        @include('front-end.layouts.top-news')

        @yield('content')

        @include('front-end.layouts.footer')

        @include('front-end.layouts.script')
    </div>
</body>
</html>