@extends('admin.layouts.master')
@section('title', 'Dashboard - Logo')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Logo Beranda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('logo.index')}}">Kelola Logo</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('logo.edit',$logo->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h6>Logo</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">title</label>
                                            <input required type="text" class="form-control" id="title" name="title" value="{{ $logo->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> Tambahkan Logo</label>
                                                <label for="customFile"></label>
                                                <input type="file" class="form-control" id="customFile" name="cover_image">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
