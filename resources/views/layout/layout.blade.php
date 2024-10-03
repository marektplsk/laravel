<!DOCTYPE html>
<html lang="en">

@include('layout.header') <!-- Adjust path if necessary -->

<body>
    {{-- Include Navbar --}}
    @include('_template.nav') <!-- Ensure this is correct, adjust path if necessary -->

    <div class="container py-4">
        {{-- Content area for dashboard --}}
        @yield('content')
    </div>

    @include('layout.footer') <!-- Adjust path if necessary -->
</body>

</html>
