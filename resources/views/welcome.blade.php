@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
            <script type="text/javascript">
              window.location = "/admin/home"
            </script>
            @elseif(Auth::user()->hasRole('normal_user'))
            <script type="text/javascript">
              window.location = "/user/home"
            </script>
        @endif
    @endif
    {{-- when not authenticated, redirect to login page --}}
    <script type="text/javascript">
      window.location = "/login"
    </script>
@endsection