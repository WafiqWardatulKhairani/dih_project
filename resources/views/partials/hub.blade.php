<section id="hub" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4 relative inline-block">
                <span class="relative z-10">Innovation Hub</span>
                <span class="absolute bottom-0 left-0 w-full h-2 bg-blue-200 opacity-50 -z-0" style="bottom: 5px;"></span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">Platform kolaborasi antara UMKM, pemerintah daerah dan akademisi untuk menciptakan solusi inovatif berbasis penelitian dan kebutuhan nyata.</p>
        </div>
        
        <!-- Baris pertama: 2 card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- OPD Card -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-8 shadow-sm card-hover">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-building text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-blue-800">Untuk OPD</h3>
                <p class="text-gray-600 mb-6">Publikasikan tantangan dan program prioritas Anda, dapatkan solusi berbasis penelitian dari para ahli.</p>
                <a href="{{ route('pemerintah.index') }}" class="text-blue-600 font-medium flex items-center group">
    Pelajari Lebih Lanjut
    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
</a>
            </div>
            
            <!-- Akademisi Card -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-8 shadow-sm card-hover">
                <div class="bg-green-600 text-white w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-graduation-cap text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-green-800">Untuk Akademisi</h3>
                <p class="text-gray-600 mb-6">Temukan masalah nyata sebagai bahan penelitian dan pengabdian masyarakat, bangun kolaborasi dengan OPD dan UMKM.</p>
                <a href="#" class="text-green-600 font-medium flex items-center group">
                    Pelajari Lebih Lanjut
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
        
        <!-- Baris kedua: 2 card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- UMKM Card -->
            <div class="bg-gradient-to-br from-orange-50 to-white rounded-xl p-8 shadow-sm card-hover">
                <div class="bg-orange-600 text-white w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-store text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-orange-800">Untuk UMKM</h3>
                <p class="text-gray-600 mb-6">Ajukan permasalahan bisnis yang dihadapi, dapatkan solusi inovatif dari akademisi dan dukungan kebijakan dari pemerintah.</p>
                <a href="#" class="text-orange-600 font-medium flex items-center group">
                    Pelajari Lebih Lanjut
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            
            <!-- Kolaborasi Card -->
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-8 shadow-sm card-hover">
                <div class="bg-purple-600 text-white w-16 h-16 rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-purple-800">Proses Kolaborasi</h3>
                <p class="text-gray-600 mb-6">Temukan bagaimana kolaborasi antara pemerintah, akademisi, dan UMKM dapat menghasilkan solusi yang berdampak.</p>
                <a href="#" class="text-purple-600 font-medium flex items-center group">
                    Pelajari Lebih Lanjut
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
        
        <!-- How It Works -->
        <div class="bg-gray-50 rounded-2xl p-8 lg:p-12 mb-16">
            <h3 class="text-2xl font-bold text-center mb-12">Bagaimana Platform Ini Bekerja?</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="bg-white w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg pulse">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-2xl">1</div>
                    </div>
                    <h4 class="font-bold mb-2">Identifikasi Masalah</h4>
                    <p class="text-gray-600 text-sm">OPD dan UMKM mendaftarkan masalah atau program prioritas yang membutuhkan solusi inovatif.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="bg-white w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold text-2xl">2</div>
                    </div>
                    <h4 class="font-bold mb-2">Eksplorasi Solusi</h4>
                    <p class="text-gray-600 text-sm">Akademisi mengeksplorasi masalah dan mengajukan proposal solusi berbasis penelitian.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="bg-white w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600 font-bold text-2xl">3</div>
                    </div>
                    <h4 class="font-bold mb-2">Diskusi Kolaboratif</h4>
                    <p class="text-gray-600 text-sm">Terjadi diskusi mendalam antara OPD, akademisi, dan UMKM untuk menyempurnakan solusi.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="text-center">
                    <div class="bg-white w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold text-2xl">4</div>
                    </div>
                    <h4 class="font-bold mb-2">Implementasi</h4>
                    <p class="text-gray-600 text-sm">Solusi diimplementasikan dan dimonitor dampaknya terhadap masyarakat dan dunia usaha.</p>
                </div>
            </div>
        </div>
        
        <!-- Testimonials -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-blue-50 rounded-xl p-8">
                <div class="flex items-start mb-6">
                    <img src="{{ asset('images/testimonial-1.jpeg') }}" alt="Kepala Dinas Kesehatan" class="h-16 w-16 rounded-full object-cover mr-4 border-2 border-white shadow-sm">
                    <div>
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="font-bold text-blue-800">dr. Rina Septiani, M.Kes</h4>
                        <p class="text-sm text-gray-600">Kepala Dinas Kesehatan Kota</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"Kolaborasi dengan tim peneliti melalui platform ini telah membantu kami mengembangkan sistem pemantauan kesehatan digital yang sangat bermanfaat di masa pandemi."</p>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-green-50 rounded-xl p-8">
                <div class="flex items-start mb-6">
                    <img src="{{ asset('images/testimonial-2.jpeg') }}" alt="Dosen Teknik Informatika" class="h-16 w-16 rounded-full object-cover mr-4 border-2 border-white shadow-sm">
                    <div>
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="font-bold text-green-800">Prof. Andi Wijaya, Ph.D</h4>
                        <p class="text-sm text-gray-600">Dosen Teknik Informatika</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"Platform ini memberikan akses langsung ke masalah nyata di masyarakat, membuat penelitian kami lebih relevan dan berdampak nyata bagi pembangunan daerah."</p>
            </div>
        </div>
    </div>
</section>