@extends('admin.layouts.app')
@section('header')
    Dashboard
@endsection
@section('content')
    <main class="w-full p-6 text-[30px] text-center">
        <p>Welcome to Admin Dashboard</p>
        <div class="flex items-center justify-center pt-20">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" >
        </div>
    </main>
@endsection

