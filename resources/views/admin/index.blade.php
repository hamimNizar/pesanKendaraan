@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('halaman Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <a href="" class="btn btn-primary">Kendaraan</a>
            <a href="" class="btn btn-lg btn-info">Order Kendaraan</a>
            <a href="" class="btn btn-primary">Riwayat Kendaraan</a>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">BBM</th>
                <th scope="col">Jadwal service</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">
                        {{ $loop->iteration }}
                    </th>
                    <td>
                        {{ $car->nama }}
                    </td>
                    <td>
                        {{ $car->bbm }}
                        
                    </td>
                    <td>
                        {{ $car->jadwal_service }}
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
