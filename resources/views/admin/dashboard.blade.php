@extends('layouts.admin')

@section('title')
الرئيسية
@endsection


@section('contentheaderlink')
<a href="{{ route('admin.dashboard') }}">الرئيسية</a>
@endsection

@section('contentheaderactive')
عرض
@endsection

@section('content')
<div class="row" style="background-image: url({{ asset('assets/admin/img/login-bg.jpg') }}); background-size:cover; background-repeat:no-repeat ; min-height:600px;">

</div>
@endsection