<!DOCTYPE html>
<html lang="en">
@include('theme.admin.head')
<div class="main-wrapper">
    @include('theme.admin.aside')
    <div class="page-wrapper">
        @include('theme.admin.header')
        @yield('content')
        @include('theme.admin.footer')
    </div>
</div>

@include('theme.admin.js')

</html>
