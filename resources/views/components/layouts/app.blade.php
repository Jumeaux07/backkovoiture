{{-- @include('layouts.head')
@include('layouts.header')
@include('layouts.sidebar')

@yield('content')

@include('layouts.footer') --}}

@livewire('head')
@livewire('header')
@livewire('sidebar')

@yield('content')

@livewire('footer')

