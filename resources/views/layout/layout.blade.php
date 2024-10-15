<!DOCTYPE html>
<html lang="EN">

@include('layout.head')

<body>
	{{-- tu includujem nav bar --}}
	@include('inc.nav')

    <div class="container py-4">
		{{-- tu extendujeme content --}}
		@yield('content')	
    </div>
</body>

@include('layout.footer')

</html>
