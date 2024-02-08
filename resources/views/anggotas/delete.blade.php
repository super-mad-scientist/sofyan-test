@extends('layouts.app', ['title' => 'Delete Anggota'])
@section('content')
    <div class="my-3 mx-auto md:w-1/2 p-10">
        <a href="{{ route('anggota.index') }}" class="inline-block focus:outline-none text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg py-2 px-3 mb-5">← Index Anggota</a>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white border border-gray-200 rounded-lg p-5">
            <h1 class="text-2xl font-bold mb-5 text-center">Delete Anggota</h1>
            <form method="post" action="{{ route('anggota.destroy', ['id' => $anggota->id]) }}">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Nama:</label>
                    {{ $anggota->name }}
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="no_hp">No HP:</label>
                    {{ $anggota->no_hp }}
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="email">Email:</label>
                    {{ $anggota->email }}
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="address">Alamat:</label>
                    {{ $anggota->address }}
                </div>
                <input type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" value="Delete">
            </form>
        </div>
    </div>
@endsection