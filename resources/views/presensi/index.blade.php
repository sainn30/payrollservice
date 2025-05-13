<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Absensi</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body>
            <div class="max-w-3xl mx-auto p-4">
                <h2 class="text-2xl font-bold mb-4">Presensi Hari ini</h2>

                @if (session('success'))
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="flex flex-wrap gap-4 mb-6">
                    <form action="{{ route('presensi.store') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-semibold">
                            Masuk
                        </button>
                    </form>

                    <form action="{{ route('presensi.keluar') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded font-semibold">
                            keluar
                        </button>
                    </form>
                </div>

                <h3 class="text-xl font-semibold mb-2">Riwayat Presensi</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gray-200 text-left">
                                <td class="px-4 py-2">Tanggal</td>
                                <td class="px-4 py-2">Jam Masuk</td>
                                <td class="px-4 py-2">Jam Keluar</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($presensis as $presensi)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="px-4 py-2">{{ $presensi->tanggal }}</td>
                                    <td class="px-4 py-2">{{ $presensi->jam_masuk }}</td>
                                    <td class="px-4 py-2">{{ $presensi->jam_keluar }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>