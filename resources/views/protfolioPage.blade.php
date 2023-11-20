@extends('layout.app')
@section('content')
@include('partials.portfolioHerosection')
@include('partials.descriptionSection')
@endsection

@section('script')
<script src="{{ asset('Frontend/script.js') }}"></script>
@endsection
