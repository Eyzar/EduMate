@extends('layout.mainLayout')
@section('title', 'homePage')
@section('content')

{{-- @if (Auth::check())
    @include('layout.mainLayout')
@endif
     --}}

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
   </div>
 @endif
@endsection