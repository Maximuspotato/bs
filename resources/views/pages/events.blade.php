@extends('layout')

@section('content')
<x-hero-card :page='$page'/>
<x-events-card :page='$page'/>
@endsection