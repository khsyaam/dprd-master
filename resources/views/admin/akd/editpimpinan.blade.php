@extends('admin.layouts.master')
@section('title', 'Dashboard - Pimpinan')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pimpinan DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('pimpinan.index')}}">Pimpinan</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('pimpinan.edit',$pimpinan->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="title">Nama</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                            value="{{ $pimpinan->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" id="customFile" name="cover_image">
                                            <label for="customFile"></label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control editormce" name="description" id="description" rows="3"
                                                resize="none" placeholder="{{ $pimpinan->description }}"></textarea>
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
