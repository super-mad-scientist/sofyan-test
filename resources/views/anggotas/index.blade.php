@extends('layouts.app', ['title' => 'Index Anggota'])
@section('content')
    <div class="my-3 mx-auto lg:w-10/12 p-10">
        <h1 class="text-2xl font-bold mb-5 text-center">Index of Anggota</h1>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('anggota.create') }}" class="inline-block focus:outline-none text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg py-2 px-3 mb-5">Add Anggota</a>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-slate-400 bg-white text-sm shadow-sm">
                <thead class="bg-slate-50">
                    <tr>
                    <th class="p-4 border border-slate-300">Nama</th>
                    <th class="p-4 border border-slate-300">No HP</th>
                    <th class="p-4 border border-slate-300">Email</th>
                    <th class="p-4 border border-slate-300">Alamat</th>
                    <th class="p-4 border border-slate-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggotas as $anggota)
                        <tr>
                            <td class="p-4 border border-slate-300">{{ $anggota->name }}</td>
                            <td class="p-4 border border-slate-300">{{ $anggota->no_hp }}</td>
                            <td class="p-4 border border-slate-300">{{ $anggota->email }}</td>
                            <td class="p-4 border border-slate-300">{{ $anggota->address }}</td>
                            <td class="p-4 border border-slate-300">
                                <div class="text-center flex gap-2 justify-center">
                                    <a class="inline-block focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-lg py-2 px-3" href="{{ route('anggota.edit', ['id' => $anggota->id]) }}"><span class="material-symbols-outlined text-base">open_in_new</span></a>
                                    <a class="inline-block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg py-2 px-3" href="{{ route('anggota.delete', ['id' => $anggota->id]) }}"><span class="material-symbols-outlined text-base">delete</span></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection