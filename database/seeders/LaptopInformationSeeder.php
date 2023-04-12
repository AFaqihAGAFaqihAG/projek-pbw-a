<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LaptopInformation;

class LaptopInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LaptopInformation::create([
            'brand' => "ASUS",
            'model' => "ASUS TUF Gaming F15",
            'price' => 11,799,000,
            'processor' => "Intel Core i5-10300H Quad Core up to 4.5 GHz (8MB Cache)",
            'ram' => "8GB DDR4 SO-DIMM 3200MHz",
            'storage' => "512 GB PCIe NVMe M.2 SSD",
            'display_size' => "IPS LCD, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz",
            'port' => "USB 3.2 Type C, USB 3.2 Type A, HDMI, Audio Jack, RJ45",
            'operating_system' => "Windows 10 Home",
            'weight' => "2.3 kg",
            'description' => "ASUS TUF Gaming F15 merupakan salah satu laptop gaming murah terbaik di tahun 2023. Laptop gaming ini bisa memainkan game dengan handal berkat prosesor Intel Core generasi ke-10 terbaru dan VGA NVIDIA GeForce GTX 16. Anda bisa memainkan game dengan cepat dan lancar. Ditambah lagi, dengan layar IPS Full HD dengan Refresh Rate 144Hz membuat visual lebih mulus.",
            'image_path' => "L1.png"
        ]);
        LaptopInformation::create([
            'brand' => "MSI",
            'model' => "MSI GF63 Thin 11SC",
            'price' => 11,999,000,
            'processor' => "Intel Core i7-11800H Octa Core up to 4.6 GHz (24MB Cache)",
            'ram' => "8GB DDR4-3200",
            'storage' => "512 GB PCIe NVMe SSD",
            'display_size' => "IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz",
            'port' => "USB 3.2 Type C, USB 3.2 Type A, HDMI, RJ45, Audio Jack",
            'operating_system' => "Windows 10 Home",
            'weight' => "1.86 kg",
            'description' => "MSI GF63 Thin merupakan laptop gaming terbaik karena sudah didukung prosesor Intel Core generasi ke-11. 8 Core CPU miliknya punya performa hingga 40% lebih tinggi dibanding pendahulunya. Grafiknya lancar berkat GeForce GTX 16 terbaru dengan arsitektur NVIDIA Turing. Berdasarkan tes 3DMark Time Spy Benchmark (DX12), kinerja VGA ini 33% lebih tinggi dibanding GTX 10.",
            'image_path' => "L2.png"
        ]);
        LaptopInformation::create([
            'brand' => "Lenovo",
            'model' => "Lenovo IdeaPad Gaming 3",
            'price' => 12,199,000,
            'processor' => "AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)",
            'ram' => "8GB DDR4-3200",
            'storage' => "D512 GB PCIe NVMe M.2 SSD",
            'display_size' => "IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 165Hz",
            'port' => "USB 3.2 Type C, USB 3.2 Type A, HDMI, RJ45, Audio Jack",
            'operating_system' => "Windows 11 Home",
            'weight' => "2.25 kg",
            'description' => "Laptop gaming murah terbaik di tahun 2023 berikutnya adalah Lenovo IdeaPad Gaming 3. Laptop ini punya kinerja yang kompetitif berkat prosesor AMD Ryzen 5 seri 5000, NVIDIA GeForce RTX 30, memori DDR4, dan SSD. Layar Full HD dengan Refresh Rate 165Hz membuat visual grafik tetap jernih dan bebas screen tearing. Laptop ini punya HDMI supaya bisa dihubungkan ke monitor eksternal.",
            'image_path' => "L3.png"
        ]);
        LaptopInformation::create([
            'brand' => "HP",
            'model' => "HP Pavilion Gaming 15",
            'price' => 12,299,000,
            'processor' => "AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)",
            'ram' => "16GB DDR4",
            'storage' => "512 GB NVMe SSD",
            'display_size' => "IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz",
            'port' => "USB 3.2 Type C, USB Type A, HDMI, Audio Jack",
            'operating_system' => "Windows 10 Home",
            'weight' => "1.98 kg",
            'description' => "Laptop HP Pavilion Gaming 15 merupakan laptop gaming murah yang bagus di tahun 2023. Laptop ini ditenagai prosesor AMD Ryzen dan NVIDIA GeForce GTX 16 untuk memenuhi kebutuhan gaming dan multitasking. Anda bisa rasakan pengalaman grafis lebih baik berkat dukungan arsitektur NVIDIA Turing yang bisa memainkan game lebih cepat.",
            'image_path' => "L4.png"
        ]);
        LaptopInformation::create([
            'brand' => "MSI",
            'model' => "MSI Bravo 15 B5DD",
            'price' => 13,999,000,
            'processor' => "AMD Ryzen 7 5800H Quad Core up to 4.4 GHz (16MB Cache)",
            'ram' => "8GB DDR4",
            'storage' => "512 GB SSD",
            'display_size' => "IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz",
            'port' => "USB 3.2 Type C, USB Type A, HDMI, Audio Jack",
            'operating_system' => "Windows 11 Home",
            'weight' => "2.35 kg",
            'description' => "Laptop MSI Bravo 15 B5DD menggabungkan prosesor AMD Ryzen 7 seri 5000 terbaru dan kartu grafik diskrit AMD Radeon RX 5500M. Laptop gaming murah terbaru 2022 ini memungkinkan Anda main game dan desain grafik lebih lancar. Teknologi Cooler Boost 5 dapat memaksimalkan performa maksimal dari CPU dan VGA sambil jaga kinerjanya tetap stabil.",
            'image_path' => "L5.png"
        ]);
        LaptopInformation::create([
            'brand' => "Dell",
            'model' => "Dell Gaming G15",
            'price' => 16,500,000,
            'processor' => "AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)",
            'ram' => "8GB DDR4",
            'storage' => "256 GB NVMe PCIe SSD",
            'display_size' => "IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 120Hz",
            'port' => "USB 3.2 Type C, USB 3.2 Type A, HDMI, Audio Jack",
            'operating_system' => "Windows 10 Home",
            'weight' => "2.45 kg",
            'description' => "Dell Gaming G15 adalah laptop gaming murah dengan performa kuat untuk gaming sambil live streaming. Laptop ini ditenagai prosesor AMD Ryzen 5 seri 5000 dan VGA NVIDIA GeForce RTX 3050 yang mampu menjajal game PC yang berat. Desain termalnya terinspirasi dari produk Alienware yang menggabungkan pasokan udara ganda di atas dan bawah keyboard. Udara panas kemudian dikeluarkan dari ventilasi di samping dan belakang.",
            'image_path' => "L6.png"
        ]);
    }
}
