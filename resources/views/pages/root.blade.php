@extends('layouts.app')
@section('title', '首页')

@section('content')
	@auth
		<h1>这里是首页，已经登录</h1>
	@else
		<h1>这里是首页，请先登录</h1>
	@endauth
@stop