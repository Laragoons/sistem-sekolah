<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header Start -->
     <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a class="font-bold" href="/students">Sistem Sekolah</a>
            <a class="py-2 px-4 bg-white text-blue-500 rounded-lg" href="/students/create">+ Tambah Siswa</a>
        </div>
     </header>
    <!-- Header End -->

    <!-- Main Start -->
        <main class="grow container mx-auto">
            <div class="mt-8 space-y-4">
                <!-- Card Header Start -->
                    <div class="bg-white shadow p-4 rounded-lg">
                        <h1 class="font-bold text-2xl">Daftar Siswa</h1>
                        <p>Menampilkan daftar siswa yang terdaftar</p>
                    </div>
                <!-- Card Header End -->

                <!-- Card Content Start -->
                <div class="bg-white rounded-lg shadow">
                    <table class="w-full">
                        <thead class="bg-gray-200 ">
                            <tr>
                                <th class="px-4 py-2 text-left">No</th>
                                <th class="px-4 py-2 text-left">Nama</th>
                                <th class="px-4 py-2 text-left">Kelas</th>
                                <th class="px-4 py-2 text-left">NIS</th>
                                <th class="px-4 py-2 text-left">No Telepon</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 text-left">1</td>
                                <td class="px-4 py-2 text-left">Andi</td>
                                <td class="px-4 py-2 text-left">11 TKJ 1</td>
                                <td class="px-4 py-2 text-left">1234</td>
                                <td class="px-4 py-2 text-left">08123456789</td>
                                <td class="px-4 py-2">
                                    <div class="flex justify-center items-center gap-4">
                                        <a href="" class="text-green-500">Detail</a>
                                        <a href="" class="text-yellow-500">Edit</a>
                                        <a href="" class="text-red-500">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 <!-- Card Content End -->
             </div>
        </main>
    <!-- Main End -->

    <!-- Footer Start -->
      <footer class="bg-gray-800 text-white p-4 text-center">
        2026 - SMK Kristen Immanuel Pontianak - Sistem Sekolah
      </footer>
    <!-- Footer End -->

</body>
</html>