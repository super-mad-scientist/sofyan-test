@extends('layouts.app', ['title' => 'Add Anggota'])
@section('content')
    <div class="my-3 mx-auto md:w-1/2 p-10">
        <a href="{{ route('anggota.index') }}" class="inline-block focus:outline-none text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg py-2 px-3 mb-5">← Index Anggota</a>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white border border-gray-200 rounded-lg p-5">
            <h1 class="text-2xl font-bold mb-5 text-center">Add Anggota</h1>
            <form method="post" action="{{ route('anggota.store') }}">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Nama</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focuzs:border-blue-500 block w-full p-2.5 @error('name') border-red-500  focus:ring-red-500 focus:border-red-500 @enderror" type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="no_hp">No HP</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('no_hp') border-red-500  focus:ring-red-500 focus:border-red-500 @enderror" type="tel" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" required>
                    @error('no_hp')
                        <div class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="email">Email</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-500  focus:ring-red-500 focus:border-red-500 @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="address">Alamat</label>
                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('address') border-red-500  focus:ring-red-500 focus:border-red-500 @enderror" name="address" id="address">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" value="Submit">
            </form>
        </div>
    </div>
@endsection