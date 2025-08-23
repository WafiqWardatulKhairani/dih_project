@extends('pemerintah.layouts.app')

@section('content')
    <!-- Main content -->
    <main class="container mx-auto px-6 py-10 flex-grow">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-8 border-b border-purple-300 pb-2 max-w-max">Daftar Program</h2>

        <!-- Program List -->
        <section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Single program card -->
            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Aktif</span>
                    <span class="ml-2 bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">UMKM</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Pemberdayaan UMKM Lokal</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Meningkatkan kapasitas dan akses pasar usaha mikro, kecil dan menengah di daerah melalui pelatihan dan pendampingan digital marketing.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas Koperasi" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">Dinas Koperasi</span>
                    </div>
                    <span class="text-xs text-gray-400">15 Maret 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Pemberdayaan UMKM')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>

            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Prioritas</span>
                    <span class="ml-2 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Energi</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Solusi Energi Terbarukan Desa</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Implementasi panel surya dan kincir angin di desa terpencil untuk mendukung kebutuhan listrik berkelanjutan dan ramah lingkungan.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas ESDM" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">Dinas ESDM</span>
                    </div>
                    <span class="text-xs text-gray-400">3 April 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Energi Terbarukan')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>

            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Baru</span>
                    <span class="ml-2 bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-medium">Teknologi</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Digitalisasi Layanan Publik</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Pengembangan aplikasi dan platform online untuk mempermudah pelayanan administrasi pemerintah daerah kepada masyarakat.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas Kominfo" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">Dinas Kominfo</span>
                    </div>
                    <span class="text-xs text-gray-400">21 Februari 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Digitalisasi Layanan')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>

            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Aktif</span>
                    <span class="ml-2 bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-medium">Pendidikan</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Pendidikan STEM Sekolah Menengah</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Meningkatkan minat dan kemampuan siswa SMA dalam sains, teknologi, teknik dan matematika melalui workshop dan lomba inovasi.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas Pendidikan" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">Dinas Pendidikan</span>
                    </div>
                    <span class="text-xs text-gray-400">28 Maret 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Pendidikan STEM')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>

            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Prioritas</span>
                    <span class="ml-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Lingkungan</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pengelolaan Sampah Terpadu</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Membangun sistem pengolahan dan daur ulang sampah di kawasan perkotaan dengan partisipasi aktif masyarakat.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas Lingkungan Hidup" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">DLH</span>
                    </div>
                    <span class="text-xs text-gray-400">10 April 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Pengelolaan Sampah')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>

            <article class="card-hover p-6 shadow-xl flex flex-col">
                <div class="flex items-center mb-4">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Implementasi</span>
                    <span class="ml-2 bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-medium">Pertanian</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Inovasi Pertanian Berkelanjutan</h3>
                <p class="text-gray-600 flex-grow text-sm leading-relaxed">Penggunaan teknologi modern dan metode pertanian ramah lingkungan untuk meningkatkan hasil panen dan kesejahteraan petani.</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar Dinas Pertanian" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-xs text-gray-500">Dinas Pertanian</span>
                    </div>
                    <span class="text-xs text-gray-400">7 April 2024</span>
                </div>
                <div class="flex space-x-2 mt-4">
                    <button class="btn-primary flex-1 py-2 text-sm">
                        <i class="fas fa-comment-dots mr-2"></i>Join Chat
                    </button>
                    <button onclick="openSolutionModal('Pertanian Berkelanjutan')" class="btn-secondary py-2 px-4 text-sm">
                        <i class="fas fa-lightbulb mr-2"></i>Solusi
                    </button>
                </div>
            </article>
        </section>

        <!-- Pagination -->
        <nav aria-label="Pagination" class="flex justify-center mt-12 space-x-4">
            <button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full hover:bg-purple-200 transition disabled:opacity-50" disabled>
                <i class="fas fa-chevron-left mr-2"></i>Prev
            </button>
            <button class="px-4 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition">1</button>
            <button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full hover:bg-purple-200 transition">2</button>
            <button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full hover:bg-purple-200 transition">3</button>
            <button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full hover:bg-purple-200 transition">
                Next<i class="fas fa-chevron-right ml-2"></i>
            </button>
        </nav>
    </main>
    @include('pemerintah.partials.footer')
@endsection