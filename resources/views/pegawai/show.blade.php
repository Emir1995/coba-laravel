@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
        <h1>Tampilkan Data Pegawai</h1>

        <div class="jumbotron text-center">
            <h2>{{ $pegawai->nama }}</h2>
                <strong>Email :</strong>{{ $pegawai->email }}
                <strong>Level :</strong>{{ $pegawai->level }}
        </div>
        </div>
    </div>

    @stop