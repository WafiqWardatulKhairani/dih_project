<!-- Solution Modal -->
<div id="solutionModal" class="modal">
    <div class="modal-content">
        <div class="fresh-gradient text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-semibold">Berikan Solusi</h3>
                <span onclick="closeModal('solutionModal')" class="cursor-pointer text-2xl hover:opacity-80">×</span>
            </div>
            <p class="text-sm opacity-90 mt-1" id="modalTopic">Untuk program: </p>
        </div>
        
        <div class="p-6">
            <form id="solutionForm" action="{{ route('pemerintah.solution.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Nama Lengkap</label>
                    <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Institusi</label>
                    <input type="text" name="institution" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Judul Solusi</label>
                    <input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Deskripsi Solusi</label>
                    <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required></textarea>
                </div>
                
                <div class="flex space-x-3">
                    <button type="button" onclick="closeModal('solutionModal')" class="flex-1 py-3 px-6 border border-gray-300 text-gray-700 rounded-xl font-medium hover:bg-gray-50 transition">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 btn-primary py-3 px-6 font-medium">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Solusi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Program Modal -->
<div id="programModal" class="modal">
    <div class="modal-content">
        <div class="fresh-gradient text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-semibold">Posting Program Baru</h3>
                <span onclick="closeModal('programModal')" class="cursor-pointer text-2xl hover:opacity-80">×</span>
            </div>
            <p class="text-sm opacity-90 mt-1">Bagikan program prioritas daerah Anda</p>
        </div>
        
        <div class="p-6">
            <form id="programForm" action="{{ route('pemerintah.program.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Judul Program</label>
                    <input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Kategori</label>
                    <select name="category" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Lingkungan">Lingkungan</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">OPD Penanggung Jawab</label>
                    <input type="text" name="opd" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Deskripsi Program</label>
                    <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required></textarea>
                </div>
                
                <div class="flex space-x-3">
                    <button type="button" onclick="closeModal('programModal')" class="flex-1 py-3 px-6 border border-gray-300 text-gray-700 rounded-xl font-medium hover:bg-gray-50 transition">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 btn-primary py-3 px-6 font-medium">
                        <i class="fas fa-plus-circle mr-2"></i>Posting Program
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>