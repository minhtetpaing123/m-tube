<?php
// Include the main layout
$content = '
<div class="home-page">
    <!-- Categories Bar -->
    <div class="categories-bar">
        <div class="categories-scroll">
            <button class="category-btn active">အားလုံး</button>
            <button class="category-btn">ဂီတ</button>
            <button class="category-btn">သင်ခန်းစာများ</button>
            <button class="category-btn">ဖျော်ဖြေရေး</button>
            <button class="category-btn">လတ်တလော</button>
            <button class="category-btn">ခရီးသွား</button>
            <button class="category-btn">အချက်အပြုတ်</button>
            <button class="category-btn">အားကစား</button>
            <button class="category-btn">သတင်း</button>
            <button class="category-btn">ဂိမ်း</button>
        </div>
    </div>
    
    <!-- Featured Banner -->
    <div class="featured-banner" style="background: linear-gradient(135deg, #667eea, #764ba2); padding: 30px; border-radius: 10px; margin: 20px 0; text-align: center;">
        <h2 style="font-size: 2rem; margin-bottom: 10px;">🎬 M-Tube မှ ကြိုဆိုပါတယ်</h2>
        <p style="font-size: 1.2rem; opacity: 0.9;">မြန်မာဘာသာဗီဒီယိုများ လွတ်လပ်စွာ ကြည့်ရှုမျှဝေနိုင်ပါသည်</p>
        <a href="' . BASE_URL . 'upload" style="display: inline-block; background: white; color: #667eea; padding: 10px 25px; border-radius: 25px; text-decoration: none; font-weight: bold; margin-top: 15px;">ဗီဒီယိုစတင်တင်ရန်</a>
    </div>
    
    <!-- Video Grid -->
    <h3 style="margin: 25px 0 15px 0; font-size: 1.3rem;">အကြံပြုထားသော ဗီဒီယိုများ</h3>
    <div class="video-grid">';

// Loop through videos
foreach ($videos as $video) {
    $content .= '
        <div class="video-card" onclick="window.location.href=\'' . BASE_URL . 'video/watch/' . $video['id'] . '\'">
            <div class="video-thumbnail">
                <img src="' . $video['thumbnail'] . '" alt="' . htmlspecialchars($video['title']) . '">
                <div class="video-duration">' . $video['duration'] . '</div>
            </div>
            <div class="video-info">
                <h4 class="video-title">' . htmlspecialchars($video['title']) . '</h4>
                <div class="video-channel">
                    <div class="channel-avatar">' . substr($video['channel'], 0, 1) . '</div>
                    <span>' . htmlspecialchars($video['channel']) . '</span>
                </div>
                <div class="video-stats">
                    <span><i class="fas fa-eye"></i> ' . $video['views'] . ' ကြည့်ရှု</span>
                    <span>' . $video['time'] . '</span>
                </div>
            </div>
        </div>';
}

$content .= '
    </div>
    
    <!-- Trending Categories -->
    <div style="margin-top: 40px;">
        <h3 style="margin-bottom: 15px; font-size: 1.3rem;">လူကြိုက်များသော ကဏ္ဍများ</h3>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">';
        
foreach ($trending_categories as $category) {
    $content .= '
            <a href="' . BASE_URL . 'category/' . urlencode($category) . '" style="background: var(--gray-dark); padding: 8px 15px; border-radius: 20px; text-decoration: none; color: var(--text); transition: background 0.3s;">
                ' . htmlspecialchars($category) . '
            </a>';
}

$content .= '
        </div>
    </div>
    
    <!-- About M-Tube -->
    <div style="margin-top: 50px; padding: 25px; background: var(--gray-dark); border-radius: 10px; text-align: center;">
        <h3 style="margin-bottom: 15px; color: var(--primary);">M-Tube အကြောင်း</h3>
        <p style="line-height: 1.6; margin-bottom: 15px;">
            M-Tube သည် မြန်မာဘာသာစကားဖြင့် ဗီဒီယိုများကို လွတ်လပ်စွာ မျှဝေနိုင်သော ပလက်ဖောင်းတစ်ခုဖြစ်ပါသည်။ 
            မည်သူမဆို ဗီဒီယိုများကို အခမဲ့တင်ခြင်း၊ ကြည့်ရှုခြင်း၊ မှတ်ချက်ပေးခြင်းများ ပြုလုပ်နိုင်ပါသည်။
        </p>
        <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
            <a href="' . BASE_URL . 'about" style="color: var(--primary); text-decoration: none;">အကြောင်းအရာ</a>
            <a href="' . BASE_URL . 'contact" style="color: var(--primary); text-decoration: none;">ဆက်သွယ်ရန်</a>
            <a href="' . BASE_URL . 'help" style="color: var(--primary); text-decoration: none;">အကူအညီ</a>
        </div>
    </div>
</div>

<style>
.categories-bar {
    overflow-x: auto;
    padding: 15px 0;
    margin-bottom: 10px;
    -webkit-overflow-scrolling: touch;
}

.categories-scroll {
    display: flex;
    gap: 10px;
    padding: 0 5px;
}

.category-btn {
    background: var(--gray-dark);
    border: none;
    color: var(--text);
    padding: 8px 16px;
    border-radius: 20px;
    white-space: nowrap;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.category-btn:hover {
    background: var(--gray);
}

.category-btn.active {
    background: var(--text);
    color: var(--dark);
    font-weight: bold;
}

.featured-banner {
    background-size: cover;
    background-position: center;
}

.channel-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 0.9rem;
}
</style>';

// Pass content to main layout
$data['content'] = $content;
$this->view('layouts/main', $data);
?>