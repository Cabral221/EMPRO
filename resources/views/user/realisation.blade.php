@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('title',$post->title)

@section('sub-heding',$post->subtitle)

@section('main-content')


@endsection

@section('footersection')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection