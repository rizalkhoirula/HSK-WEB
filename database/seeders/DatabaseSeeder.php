<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Data;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Kategori::create([
            'name' => 'HSK 1',
        ]);

        Kategori::create([
            'name' => 'HSK 2',
        ]);
        Kategori::create([
            'name' => 'HSK 3',
        ]);

        Data::create([
            'name' => 'Buku',
            'name_mandarin' => '书',
            'description' => 'Alat tulis yang terdiri dari kumpulan kertas yang dijilid',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Pensil',
            'name_mandarin' => '铅笔',
            'description' => 'Alat tulis yang terbuat dari kayu dan grafit',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Meja',
            'name_mandarin' => '桌子',
            'description' => 'Tempat untuk menulis atau bekerja',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Kursi',
            'name_mandarin' => '椅子',
            'description' => 'Alat duduk yang terbuat dari kayu atau besi',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Laptop',
            'name_mandarin' => '笔记本电脑',
            'description' => 'Alat elektronik yang digunakan untuk bekerja',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Mouse',
            'name_mandarin' => '鼠标',
            'description' => 'Alat untuk menggerakkan kursor pada komputer',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Keyboard',
            'name_mandarin' => '键盘',
            'description' => 'Alat untuk mengetik pada komputer',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Printer',
            'name_mandarin' => '打印机',
            'description' => 'Alat untuk mencetak dokumen',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Scanner',
            'name_mandarin' => '扫描仪',
            'description' => 'Alat untuk memindai dokumen',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Kamera',
            'name_mandarin' => '相机',
            'description' => 'Alat untuk mengambil gambar',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Handphone',
            'name_mandarin' => '手机',
            'description' => 'Alat komunikasi yang dapat dibawa ke mana saja',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Smartwatch',
            'name_mandarin' => '智能手表',
            'description' => 'Jam tangan pintar yang dapat digunakan untuk berbagai kegiatan',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Earphone',
            'name_mandarin' => '耳机',
            'description' => 'Alat untuk mendengarkan musik',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Speaker',
            'name_mandarin' => '扬声器',
            'description' => 'Alat untuk memutar suara',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Televisi',
            'name_mandarin' => '电视',
            'description' => 'Alat untuk menonton acara televisi',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Kulkas',
            'name_mandarin' => '冰箱',
            'description' => 'Alat untuk menyimpan makanan agar tetap segar',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Kompor',
            'name_mandarin' => '炉子',
            'description' => 'Alat untuk memasak',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Panci',
            'name_mandarin' => '锅',
            'description' => 'Alat untuk memasak',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Sendok',
            'name_mandarin' => '勺子',
            'description' => 'Alat untuk makan',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Garpu',
            'name_mandarin' => '叉子',
            'description' => 'Alat untuk makan',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Gelas',
            'name_mandarin' => '杯子',
            'description' => 'Alat untuk minum',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Piring',
            'name_mandarin' => '盘子',
            'description' => 'Alat untuk makan',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Sikat Gigi',
            'name_mandarin' => '牙刷',
            'description' => 'Alat untuk membersihkan gigi',
            'image' => 'default.jpg',
            'id_kategori' => 1,
        ]);

        Data::create([
            'name' => 'Pasta Gigi',
            'name_mandarin' => '牙膏',
            'description' => 'Alat untuk membersihkan gigi',
            'image' => 'default.jpg',
            'id_kategori' => 3,
        ]);

        Data::create([
            'name' => 'Sabun',
            'name_mandarin' => '肥皂',
            'description' => 'Alat untuk membersihkan tubuh',
            'image' => 'default.jpg',
            'id_kategori' => 3,
        ]);

        Data::create([
            'name' => 'Shampoo',
            'name_mandarin' => '洗发水',
            'description' => 'Alat untuk membersihkan rambut',
            'image' => 'default.jpg',
            'id_kategori' => 3,
        ]);


        Data::create([
            'name' => 'Kucing',
            'name_mandarin' => '猫',
            'description' => 'Hewan peliharaan yang lucu dan menggemaskan',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);

        Data::create([
            'name' => 'Anjing',
            'name_mandarin' => '狗',
            'description' => 'Hewan peliharaan yang setia dan ramah',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);

        Data::create([
            'name' => 'Burung',
            'name_mandarin' => '鸟',
            'description' => 'Hewan yang bisa terbang dan berkicau',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);

        Data::create([
            'name' => 'Ikan',
            'name_mandarin' => '鱼',
            'description' => 'Hewan yang hidup di dalam air',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);

        Data::create([
            'name' => 'Kuda',
            'name_mandarin' => '马',
            'description' => 'Hewan yang bisa berlari dengan cepat',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);

        Data::create([
            'name' => 'Sapi',
            'name_mandarin' => '牛',
            'description' => 'Hewan yang menghasilkan susu dan daging',
            'image' => 'default.jpg',
            'id_kategori' => 2,
        ]);
    }
}
