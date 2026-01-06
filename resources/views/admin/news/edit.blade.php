@extends('admin.layouts.app')

@section('title', 'Edit Berita')
@section('page-title', 'Edit Berita')

@section('content')
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $news->id }}">

        @include('admin.news._form', ['news' => $news])

    </form>
@endsection
