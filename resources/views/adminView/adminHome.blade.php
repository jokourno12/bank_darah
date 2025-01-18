@extends('header')

@section('title','Home')

@section('css')
    <style>
        .btn{
            font-weight: 500;
        }

        table{
            width:  80% !important;
            margin: 30px auto;
        }
    </style>
@endsection

@section('content')

<div>
    <div class="col-6 offset-md-3 mt-5" id="title-container">
        <h1 class="text-black offset-md-4">List Rumah Sakit</h1>
    </div>
    <table class="table table-secondary table-striped justify mt-5 ">
        <thead>
            <tr>

                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kontak</th>
                <th scope="col">Stok A</th>
                <th scope="col">Stok B</th>
                <th scope="col">Stok AB</th>
                <th scope="col">Stok O</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody id="table-body">

            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->namaRS}}</th>
                    {{-- <td >{{ $item->productName}}</td> --}}
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->kontak }}</td>
                    <td>{{ $item->stokA }}</td>
                    <td>{{ $item->stokB }}</td>
                    <td>{{ $item->stokAB }}</td>
                    <td>{{ $item->stokO }}</td>
                    <td>
                        <a class="btn btn-warning" href="edit/{{ $item->id }}">Edit Stock</a>
                    </td>



                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
