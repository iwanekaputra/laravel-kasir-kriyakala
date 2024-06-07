@include('layouts.partials-admin.header')
{{-- @include('layouts.partials-admin.navbar')
@include('layouts.partials-admin.sidebar') --}}

<!-- Main Content -->
<div class="">
    <section class="section">
        @yield('content')
    </section>
</div>

@include('layouts.partials-admin.footer')
