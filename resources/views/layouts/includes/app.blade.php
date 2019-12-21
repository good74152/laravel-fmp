@include('layouts.includes.header')
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>
@yield('scriptsAfterJs')
@include('layouts.includes.footer')
