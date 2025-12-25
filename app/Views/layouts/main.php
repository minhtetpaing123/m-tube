<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Mobile-First CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/mobile-fix.css">
    
    <!-- Remove or comment out old CSS -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'M-Tube - Myanmar Video Platform'; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #ff0000;
            --dark: #0f0f0f;
            --gray-dark: #272727;
            --gray: #3f3f3f;
            --light: #f1f1f1;
            --text: #f1f1f1;
            --text-secondary: #aaa;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', 'Pyidaungsu', 'Noto Sans Myanmar', sans-serif;
        }
        
        body {
            background-color: var(--dark);
            color: var(--text);
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <header class="header">
        <div class="header-left">
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a href="<?php echo BASE_URL; ?>" class="logo">
                <i class="fab fa-youtube" style="color: var(--primary);"></i>
                <span>M-Tube</span>
            </a>
        </div>
        
        <div class="search-bar">
            <form action="<?php echo BASE_URL; ?>search" method="GET">
                <input type="text" placeholder="မြန်မာစာ ဗီဒီယိုများ ရှာဖွေရန်..." name="q">
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        
        <div class="header-right">
            <button class="upload-btn" onclick="window.location.href='<?php echo BASE_URL; ?>upload'">
                <i class="fas fa-video"></i> <span>တင်ရန်</span>
            </button>
            <div class="user-menu">
                <button class="user-btn">
                    <i class="fas fa-user-circle"></i>
                </button>
            </div>
        </div>
    </header>
    
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <nav class="sidebar-nav">
                <a href="<?php echo BASE_URL; ?>" class="nav-item active">
                    <i class="fas fa-home"></i> <span>ပင်မစာမျက်နှာ</span>
                </a>
                <a href="<?php echo BASE_URL; ?>trending" class="nav-item">
                    <i class="fas fa-fire"></i> <span>လူကြိုက်များ</span>
                </a>
                <a href="<?php echo BASE_URL; ?>subscriptions" class="nav-item">
                    <i class="fas fa-users"></i> <span>စာရင်းသွင်းထားများ</span>
                </a>
                
                <div class="nav-section">
                    <h4>သင့်အတွက်</h4>
                    <a href="<?php echo BASE_URL; ?>history" class="nav-item">
                        <i class="fas fa-history"></i> <span>သမိုင်းကြောင်း</span>
                    </a>
                    <a href="<?php echo BASE_URL; ?>watch-later" class="nav-item">
                        <i class="fas fa-clock"></i> <span>နောက်မှကြည့်မည်</span>
                    </a>
                </div>
                
                <div class="nav-section">
                    <h4>ကဏ္ဍများ</h4>
                    <a href="<?php echo BASE_URL; ?>category/music" class="nav-item">
                        <i class="fas fa-music"></i> <span>ဂီတ</span>
                    </a>
                    <a href="<?php echo BASE_URL; ?>category/sports" class="nav-item">
                        <i class="fas fa-football-ball"></i> <span>အားကစား</span>
                    </a>
                    <a href="<?php echo BASE_URL; ?>category/gaming" class="nav-item">
                        <i class="fas fa-gamepad"></i> <span>ဂိမ်း</span>
                    </a>
                    <a href="<?php echo BASE_URL; ?>category/news" class="nav-item">
                        <i class="fas fa-newspaper"></i> <span>သတင်း</span>
                    </a>
                </div>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <?php echo $content; ?>
        </main>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <i class="fab fa-youtube" style="color: var(--primary); font-size: 2rem;"></i>
                <span style="font-size: 1.5rem; font-weight: bold;">M-Tube</span>
            </div>
            <p class="footer-tagline">မြန်မာ့ဗီဒီယိုမျှဝေရာ ပလက်ဖောင်း</p>
            <div class="footer-links">
                <a href="<?php echo BASE_URL; ?>about">အကြောင်း</a>
                <a href="<?php echo BASE_URL; ?>contact">ဆက်သွယ်ရန်</a>
                <a href="<?php echo BASE_URL; ?>privacy">ကိုယ်ရေးကိုယ်တာ</a>
                <a href="<?php echo BASE_URL; ?>terms">စည်းကမ်းများ</a>
            </div>
            <p class="copyright">© <?php echo date('Y'); ?> M-Tube. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
        
        // Video card hover effect
        document.querySelectorAll('.video-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>