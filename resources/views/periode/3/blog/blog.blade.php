@extends('periode.3.blog.layouts.app-profile')
@yield('content')
<div id="app">
    <router-view></router-view>
    <sidebar></sidebar>
</div>
<script src="{{ asset('js/app.js') }}"></script>
