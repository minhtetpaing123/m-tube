m-tubereree
🎬 M-Tube — မြန်မာဗီဒီယိုမျှဝေခြင်း ပလက်ဖောင်း

M-Tube သည် PHP (MVC) အခြေပြု မြန်မာအသုံးပြုသူများအတွက် ဒီဇိုင်းလုပ်ထားသော JavaScript တွင် project ကို local server သို့မဟုတ် hosting server ပေါ်တွင် run လုပ်နိုင်ရန် လိုအပ်သော source code နှင့် documentation များ ပါဝင်ပါသည်။

🧰 အသုံးပြုထားသော နည်းပညာများ (Tech Stack)

Backend: PHP (MVC)

Web Server: Apache / Nginx

Database: MySQL / MariaDB

Frontend: HTML, CSS, JavaScript

Version Control: Git & GitHub

📂 Project Structur


m-tube/
├── app/            # Application core (controllers, models, views)
├── config/         # Configuration files
├── public/         # Public entry (index.php, assets)
├── storage/        # User upload files (GitHub မတင်ပါ)
├── tmp/            # Cache / temp files (GitHub မတင်ပါ)
├── setup.php       # Database setup script
├── composer.json   # PHP dependencies
├── .gitignore      # Git ignore rules
└── README.md       # Project documentGitHub
🚀 Project ကို Run လုပ်နည်း (Local)
1️⃣ Repository ကို Clone လုပ်ပါ
git clone https://github.com/minhtetpaing123/m-tube.git
2️⃣ Server root ထဲသို့ ထည့်ပါ

XAMPP: htdocs/m-tube

KSWEB (Android): /storage/emulated/0/htdocs/m-tube

3️⃣ Dependencies Install လုပ်ပါ
composer install

4️⃣ Database ဆောက်ပါ

MySQL database အသစ်တစ်ခု ဖန်တီးပါ
ဥပမာ — m_tube

5️⃣ Database Configuration ပြင်ပါ
config/database.php
(သို့မဟုတ် .env ဖိုင်ကို အသုံးပြုနိုင်ပါသည်)
6️⃣ Setup Script Run လုပ်ပါ

Browser မှာ ဖွင့်ပါ

http://localhost/m-tube/setup.php

7️⃣ Project ကို Run လုပ်ပါ
http://localhost/m-tube/public


✅ Home page ပေါ်လာပါက project ကို အောင်မြင်စွာ run လုပ်ပြီးပါပြီ။
⚠️ အရေးကြီးသော သတိပြုရန်များ

storage/ နှင့် upload file များကို GitHub တွင် မတင်သင့်ပါ

Database password၊ API key များကို repo ထဲ မထည့်ပါနှင့်

.gitignore ကို အမြဲသုံးပါ
🧪 Development အတွက် အကြံပြုချက်များ

Development အချိန်တွင် PHP error display ဖွင့်ထားပါ

.env.example ဖိုင်တစ်ခု ထည့်ပါ

public/ folder ကိုသာ web-accessible ဖြစ်အောင်ထားပါ
📌 အနာဂတ် လုပ်ဆောင်ရန် (Roadmap)

 User Login / Register

 Video Category & Search

 Admin Dashboard

 REST API Support

 CDN ဖြင့် Video Streaming
 📄 License

ဤ project ကို MIT License ဖြင့် open-source အဖြစ် ဖြန့်ချိထားပါသည်။

🤝 ပါဝင်ကူညီနိုင်ပါသည်

Issue များတင်ခြင်း၊ Feature request များ၊ Pull Request များကို ကြိုဆိုပါသည်။

👤 Developer

Min Htet Paing
GitHub: https://github.com/minhtetpaing123





