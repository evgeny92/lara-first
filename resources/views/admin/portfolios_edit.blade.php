{{-- наследует глобальный шаблон--}}
@extends('layouts.admin')

@section('header')
    @include('admin.header')
@endsection

@section('content')
    @include('admin.content_portfolios_edit')
@endsection