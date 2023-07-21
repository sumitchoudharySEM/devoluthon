{{-- push title --}}
@push('title')
    <title>Home Page</title>
@endpush

{{-- push styles --}}
@push('styles')
    <style>

    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script>

    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/layout')
    
    <div>hii</div>
@section('content')
    
@endsection
