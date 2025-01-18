@extends('header')

@section('title','Edit Stock')


@section('content')
<div class="col-6 offset-md-3 mt-5" id="form-container">
    <h1 class="text-black offset-md-5">Edit Data</h1>
    @foreach ($data as $item)
        <form action="/editform" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $item->id }}">
            @include('adminView/editform')

        </form>
    @endforeach
</div>
@endsection
