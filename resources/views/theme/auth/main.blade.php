<!DOCTYPE html>
<html lang="zxx">
@include('theme.auth.head')
<section class="topbar plr-100 bg-black">
    @include('theme.auth.header')
    <div class="preloader">
        <div class="lds-ellipsis">
            @yield('content')
        </div>
    </div>
    @include('theme.auth.footer')
    </div>
    @include('theme.auth.js')

</section>

</html>
