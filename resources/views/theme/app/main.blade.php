<!DOCTYPE html>
<html>
@include('theme.app.head')
<section class="topbar plr-100 bg-black">
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="H" class="letters-loading">
                            H
                        </span>
                        <span data-text-preloader="U" class="letters-loading">
                            U
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
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
