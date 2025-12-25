<?php
// m-tube/config/database.php
// M-Tube Database Configuration File
// Created for: minhtetpaing123/m-tube

/**
 * M-Tube Database Configuration
 * ဤဖိုင်ကို သင့် MySQL database အချက်အလက်များနှင့် ကိုက်ညီအောင် ပြင်ဆင်ရန်
 */

return [
    // ============================================
    // DATABASE CONNECTION SETTINGS
    // ============================================
    
    // Database Host (ဆာဗာလိပ်စာ)
    'host' => 'localhost', // ဒီအတိုင်းထားပါ (localhost မဟုတ်လျှင်ပြင်ပါ)
    
    // Database Name (ဒေတာဘေ့စ်အမည်) - သင် သတ်မှတ်ထားသော "jue" ကိုသုံးထားပါသည်
    'database' => 'jue',
    
    // Database Username (အသုံးပြုသူအမည်)
    'username' => 'root', // Default: root (ပြောင်းလဲထားလျှင်ပြင်ပါ)
    
    // Database Password (စကားဝှက်)
    'password' => '', // Default: empty (password ရှိလျှင်ထည့်ပါ)
    
    // Database Port (ပို့နံပါတ်)
    'port' => 3306, // MySQL default port
    
    // ============================================
    // DATABASE CHARACTER SETTINGS
    // ============================================
    
    // Character Set (အက္ခရာစုံသတ်မှတ်ချက်)
    'charset' => 'utf8mb4', // မြန်မာစာအတွက် utf8mb4 ကိုသုံးပါ
    
    // Collation (စာလုံးစီစဥ်နည်း)
    'collation' => 'utf8mb4_unicode_ci',
    
    // ============================================
    // DATABASE CONNECTION OPTIONS
    // ============================================
    
    // PDO Connection Options
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Errors will throw exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // Fetch as objects by default
        PDO::ATTR_EMULATE_PREPARES => false, // Use real prepared statements
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci",
    ],
    
    // ============================================
    // DATABASE TABLE PREFIX (Optional)
    // ============================================
    
    // Table Prefix (စားပွဲအမည်ရှေ့ဆက်စာလုံး)
    'prefix' => 'mt_', // m-tube tables will be: mt_users, mt_videos, etc.
    
    // ============================================
    // TIMEZONE SETTINGS
    // ============================================
    
    // Default Timezone
    'timezone' => 'Asia/Yangon', // Myanmar Timezone
    
    // ============================================
    // DATABASE BACKUP SETTINGS
    // ============================================
    
    // Backup path (ဒေတာဘေ့စ်ကူးယူမှုလမ်းကြောင်း)
    'backup_path' => BASE_PATH . '/database/backups/',
    
    // Backup retention days (ကူးယူမှုဖိုင်များ သိမ်းဆည်းရက်အရေအတွက်)
    'backup_retention_days' => 7,
];