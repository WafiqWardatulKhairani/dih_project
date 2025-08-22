<section id="rooms" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Ruangan Diskusi</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Bergabunglah dalam diskusi kolaboratif dengan pemerintah dan akademisi
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Room List -->
            <div class="space-y-6">
                <!-- Room 1 -->
                <div class="card-hover p-6 border border-gray-200">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium mr-2">Prioritas</span>
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Infrastruktur</span>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Optimalisasi Drainase Perkotaan</h4>
                            <p class="text-gray-600 text-sm">
                                Diskusi solusi inovatif untuk masalah drainase dan penanganan banjir
                            </p>
                        </div>
                        <div class="flex items-center ml-4">
                            <div class="relative">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar admin room" class="w-10 h-10 rounded-full">
                                <div class="online-dot absolute -bottom-1 -right-1"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-users mr-2"></i>
                            <span>23 online</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-comments mr-2"></i>
                            <span>156 pesan</span>
                        </div>
                        <div>Dinas PUPR</div>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button class="btn-primary flex-1 py-2">
                            <i class="fas fa-comment-dots mr-2"></i>Join Chat
                        </button>
                        <button onclick="openSolutionModal('Drainase Perkotaan')" class="btn-secondary py-2 px-4">
                            <i class="fas fa-lightbulb mr-2"></i>Berikan Solusi
                        </button>
                    </div>
                </div>

                <!-- Room 2 -->
                <div class="card-hover p-6 border border-gray-200">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium mr-2">Aktif</span>
                                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">Kesehatan</span>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Digitalisasi Layanan Kesehatan</h4>
                            <p class="text-gray-600 text-sm">
                                Pengembangan sistem digital untuk layanan kesehatan yang lebih baik
                            </p>
                        </div>
                        <div class="flex items-center ml-4">
                            <div class="relative">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar admin room" class="w-10 h-10 rounded-full">
                                <div class="online-dot absolute -bottom-1 -right-1"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-users mr-2"></i>
                            <span>18 online</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-comments mr-2"></i>
                            <span>89 pesan</span>
                        </div>
                        <div>Dinas Kesehatan</div>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button class="btn-primary flex-1 py-2">
                            <i class="fas fa-comment-dots mr-2"></i>Join Chat
                        </button>
                        <button onclick="openSolutionModal('Digitalisasi Kesehatan')" class="btn-secondary py-2 px-4">
                            <i class="fas fa-lightbulb mr-2"></i>Berikan Solusi
                        </button>
                    </div>
                </div>
            </div>

            <!-- Chat Interface -->
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <div class="relative mr-3">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/088523ae-57a4-49a1-bc32-4c3793931f20.png" alt="Avatar admin chat" class="w-12 h-12 rounded-full">
                            <div class="online-dot absolute -bottom-1 -right-1"></div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Optimalisasi Drainase Perkotaan</h4>
                            <p class="text-sm text-gray-600">Dinas PUPR • 23 online</p>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-2 text-gray-400 hover:text-purple-600 transition">
                            <i class="fas fa-info-circle"></i>
                        </button>
                        <button class="p-2 text-gray-400 hover:text-purple-600 transition">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                </div>

                <div class="chat-container bg-gray-50 p-4 rounded-xl mb-4">
                    <div class="space-y-4">
                        <div class="chat-bubble admin">
                            <p class="text-sm">Selamat datang di ruang diskusi Optimalisasi Drainase Perkotaan! Mari berkolaborasi mencari solusi terbaik.</p>
                            <span class="text-xs opacity-70">10:30 • Admin</span>
                        </div>

                        <div class="chat-bubble user">
                            <p class="text-sm">Halo, saya peneliti dari Universitas. Saya punya beberapa ide untuk sistem drainase berkelanjutan.</p>
                            <span class="text-xs opacity-70">10:32 • Prof. Ahmad</span>
                        </div>

                        <div class="chat-bubble admin">
                            <p class="text-sm">Selamat datang Prof! Kami sangat tertarik dengan ide-ide Anda. Bisa dijelaskan lebih detail?</p>
                            <span class="text-xs opacity-70">10:33 • Admin</span>
                        </div>

                        <div class="chat-bubble user">
                            <p class="text-sm">Saya sudah melakukan penelitian tentang material drainase ramah lingkungan. Bisa saya share datanya?</p>
                            <span class="text-xs opacity-70">10:35 • Dr. Sari</span>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <input type="text" placeholder="Ketik pesan..." class="flex-1 border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button class="btn-primary px-6">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>