<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Hub - Kolaborasi Pemerintah & Akademisi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #667eea;
            --secondary: #764ba2;
            --accent: #f093fb;
            --light: #f8f9ff;
            --dark: #2d3748;
        }
        
        .fresh-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }
        
        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 24px;
            width: 90%;
            max-width: 600px;
            animation: modalSlideIn 0.3s ease;
        }
        
        @keyframes modalSlideIn {
            from { transform: translateY(-40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
        }
        
        .online-dot {
            width: 12px;
            height: 12px;
            background: #22c55e;
            border-radius: 50%;
            border: 2px solid white;
        }
        
        .chat-bubble {
            max-width: 70%;
            padding: 12px 16px;
            border-radius: 18px;
            margin: 8px 0;
        }
        
        .chat-bubble.user {
            background: var(--light);
            margin-left: auto;
            border-bottom-right-radius: 4px;
        }
        
        .chat-bubble.admin {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            margin-right: auto;
            border-bottom-left-radius: 4px;
        }
        
        .nav-active {
            color: var(--primary);
            font-weight: 600;
            position: relative;
        }
        
        .nav-active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 3px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen font-sans">
    @include('pemerintah.layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('pemerintah.partials.modals')
    
    <script>
        function openSolutionModal(topic) {
            document.getElementById('modalTopic').textContent = 'Untuk program: ' + topic;
            document.getElementById('solutionModal').style.display = 'block';
        }
        
        function openProgramModal() {
            document.getElementById('programModal').style.display = 'block';
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
        
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }
        
        // Form submission handlers
        document.getElementById('solutionForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Solusi berhasil dikirim!');
            closeModal('solutionModal');
        });
        
        document.getElementById('programForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Program berhasil diposting!');
            closeModal('programModal');
        });
    </script>
</body>
</html>