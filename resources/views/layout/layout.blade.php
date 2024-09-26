<!DOCTYPE html>
<html lang="EN">

@include('layout.header')

<body>
   
    {{-- tu includujeme nav- navabar--}}
    @include('_template.nav')
 

    <div class="container py-4">
        {{-- tu davame nas container, ktory je v dashboarde--}}

        @yield('content')
    </div>
        @include('layout.footer')
</body>

</html>
