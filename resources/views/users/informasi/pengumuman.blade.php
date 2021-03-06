@extends('users.master')
@section('title', 'Pengumuman - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Pengumuman DPRD</h2>
                <p>Pengumuman DPRD Provinsi Kalimantan.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text11-content">
                        <h4 class="mt-sm-3">Pengumuman DPRD.</h4>
                        @foreach ($informasi as $args)
                        <a href="{{ $args->linktiga }}" target="_blank" class="btn btn-primary">{{ $args->linktiga }}.</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single post -->

@endsection
