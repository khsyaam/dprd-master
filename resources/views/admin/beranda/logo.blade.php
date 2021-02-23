@extends('admin.layouts.master')
@section('title', 'Dashboard - Logo')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Uploud logo Beranda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('logo.index')}}">Kelola logo</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('logo.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h6>logo Utama</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Name</label>
                                            <input required type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> Tambahkan Logo</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                                <label class="custom-file-label" for="customFile"></label>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <h6>logo footer</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Name</label>
                                            <input required type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> Tambahkan Logo</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                                <label class="custom-file-label" for="customFile"></label>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section --}}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>logo</h4>
                            </div>
                            @if(count($berandalogo) >= 1)
                            <div class="card-body">
                                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                                    <li class="media">
                                        <?php $i = 1; ?>
                                        @foreach($berandalogo AS $args)
                                        <img alt="image" class="mr-3" width="450" height="450"
                                            src="{{asset('storage/cover_images/'.$args->cover_image)}}">
                                        <div class="media-cta-square">
                                            <a href="{{route('logo.show',$args->name)}}" class="btn btn-outline-primary">Edit</a>
                                            <a href="{{route('logo.delete',$args->name)}}" class="btn btn-outline-danger">Delete</a>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
