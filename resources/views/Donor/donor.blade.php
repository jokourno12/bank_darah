@extends('header')

@section('title','Donor')


@section('content')
<div class="col-6 offset-md-3 mt-5" id="form-container">
    <h1 class="text-black offset-md-5">Donor Darah</h1>
    @foreach ($data as $item)
        <form action="/donorform" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $item->id }}">
            <h2 class="text-black offset-md-5">{{ $item->namaRS }}</h2>
            @include('Donor/donorform')

        </form>
    @endforeach
</div>
@endsection
