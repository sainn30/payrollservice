<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Karyawan</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-6 text-center">Manajemen Karyawan</h1>

            {{-- Form tambah karyawan --}}
            <div class="bg-white shadow-md rounded-lg p-6 mb-10">
                <form action="{{ route('datakaryawan.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <div>
                        <label for="nama" class="block font-medium text-sm ">Nama</label>
                        <input type="text" id="nama" name="nama" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                        
                        @error('nama')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="nik" class="block font-medium text-sm ">Nik</label>
                        <input type="text" id="nik" name="nik" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('nik')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block font-medium text-sm ">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('email')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="no_hp" class="block font-medium text-sm ">No Hp</label>
                        <input type="number" id="no_hp" name="no_hp" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('no_hp')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="alamat" class="block font-medium text-sm ">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('alamat')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="jabatan" class="block font-medium text-sm ">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('jabatan')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="tanggal_masuk" class="block font-medium text-sm ">Tanggal Masuk</label>
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('tanggal_masuk')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="gaji_pokok" class="block font-medium text-sm ">Gaji Pokok</label>
                        <input type="text" id="gaji_pokok" name="gaji_pokok" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">

                        @error('gaji_pokok')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-sm ">Status</label>
                        <select name="status" class="mt-1 w-full border-gray-300 rounded-md shadow-sm p-2">
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>

                        @error('status')
                            <div class="mt-2 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Tabel karyawan --}}
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <h1 class="text-3xl font-bold mb-6 text-center p-2">Data karyawan</h1>
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">#</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Nama</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">NIK</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Email</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">No Hp</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Alamat</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Jabatan</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Tgl Masuk</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Gaji Pokok</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Status</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($karyawan as $Karyawans)
                            <tr>
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->nama }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->nik }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->email }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->no_hp }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->alamat }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->jabatan }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->tanggal_masuk }}</td>
                                <td class="px-6 py-4">{{ $Karyawans->gaji_pokok }}</td>
                                <td class="px-6 py-4">
                                    <span class="{{ $Karyawans->status == 'aktif' ? 'bg-green-100 text-green-800 text-xs font-semibold px-3 py-2 rounded-md' : 'bg-red-100 text-red-800 text-xs font-semibold px-3 py-2 rounded-md whitespace-nowrap' }}">
                                        {{ $Karyawans->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('datakaryawan.destroy', $Karyawans->id) }}" method="POST" class="flex space-x-2">
                                        <a href="{{ route('datakaryawan.edit', $Karyawans->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition">
                                            Edit
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg text-sm transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            @if (session('success'))
                Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "{{ session('success') }}",
                });
            elseif (session('error'))
                Swal.fire({
                icon: "error",
                title: "Gagal",
                text: "{{ session('error') }}",
                });
            @endif
        </script>
    </body>
    </html>
</x-app-layout>