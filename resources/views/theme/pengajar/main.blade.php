<!DOCTYPE html>
<html lang="en">
@include('theme.pengajar.head')
<div class="main-wrapper">
    @include('theme.pengajar.aside')
    <div class="page-wrapper">
        @include('theme.pengajar.header')
        @yield('content')
        @include('theme.pengajar.footer')
    </div>
</div>

@include('theme.pengajar.js')

</html>
