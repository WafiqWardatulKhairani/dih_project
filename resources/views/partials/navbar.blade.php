<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c6a8d143-c76b-4699-bba4-e05baa1cb761.png" alt="Logo GovInnovate" class="h-10">
            <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-green-500 bg-clip-text text-transparent">GovInnovate</span>
        </div>

        <div class="hidden md:flex items-center space-x-8">
            <a href="#home" class="font-medium hover:text-blue-600">Beranda</a>
            <a href="#program" class="font-medium hover:text-blue-600">Program</a>
            <a href="#solusi" class="font-medium hover:text-blue-600">Solusi</a>
            <a href="#hub" class="font-medium text-blue-600">Innovation Hub</a>
            <a href="#tentang" class="font-medium hover:text-blue-600">Tentang</a>
        </div>

        <button id="mobile-menu-toggle" class="md:hidden text-gray-700">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white py-2 px-4 border-t">
        <a href="#home" class="block py-2 font-medium">Beranda</a>
        <a href="#program" class="block py-2 font-medium">Program</a>
        <a href="#solusi" class="block py-2 font-medium">Solusi</a>
        <a href="#hub" class="block py-2 font-medium text-blue-600">Innovation Hub</a>
        <a href="#tentang" class="block py-2 font-medium">Tentang</a>

    </div>
</nav>