<!DOCTYPE html>
<html lang="zxx">
 @include('theme.app.head')
    <section class="topbar plr-100 bg-black">
    @include('theme.app.header')
    @include('theme.app.aside')
    <div class="container-fluid">
        <div class="container-fluid">
    <div class="main-responsive-nav">
                @yield('content')
            </div>
        </div>
        @include('theme.app.footer')
    </div>
    @include('theme.app.js')

</section>
</html>

