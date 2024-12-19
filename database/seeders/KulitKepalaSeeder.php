<?php

namespace Database\Seeders;

use App\Models\KulitKepala;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KulitKepalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Normal',
                'deskripsi' => 'Rambut dan kulit kepala dalam kondisi sehat, seimbang, dan tidak menunjukkan tanda-tanda masalah seperti kekeringan, minyak berlebih, atau iritasi. Rambut normal cenderung mudah diatur dan tidak membutuhkan perawatan khusus selain perawatan dasar untuk menjaga kesehatannya.',
                'kata' => 'Menurut para ahli, rambut dan kulit kepala yang sehat memiliki keseimbangan alami antara kelembapan dan minyak. Produk perawatan yang ringan, seperti sampo lembut dan kondisioner harian, dapat membantu menjaga kesehatan rambut jenis ini.'
            ],
            [
                'nama' => 'Berminyak',
                'deskripsi' => 'Kulit kepala yang menghasilkan minyak (sebum) secara berlebihan sehingga membuat rambut terlihat lepek, berminyak, dan sulit diatur. Kondisi ini sering disebabkan oleh faktor hormonal, stres, atau penggunaan produk yang tidak sesuai.',
                'kata' => 'Para ahli menyarankan agar rambut berminyak dirawat dengan sampo yang mengandung bahan pengontrol minyak seperti asam salisilat atau zinc. Hindari penggunaan produk berbasis minyak dan jangan terlalu sering menyisir rambut, karena dapat merangsang produksi minyak lebih banyak.'
            ],
            [
                'nama' => 'Kering',
                'deskripsi' => 'Rambut dan kulit kepala kehilangan kelembapan alaminya sehingga terasa kasar, kusam, dan mudah patah. Kulit kepala mungkin terasa kaku atau gatal. Kondisi ini sering dipengaruhi oleh cuaca, penggunaan alat pemanas rambut, atau produk dengan bahan kimia keras.',
                'kata' => 'Menurut para ahli, rambut kering membutuhkan perawatan intensif dengan produk yang melembapkan seperti kondisioner berbasis minyak argan atau shea butter. Hindari penggunaan alat styling panas secara berlebihan dan pastikan untuk selalu menggunakan pelindung panas.'
            ],
            [
                'nama' => 'Sensitif',
                'deskripsi' => 'Kulit kepala sensitif mudah mengalami reaksi terhadap bahan kimia, parfum, atau produk perawatan tertentu. Gejala yang umum termasuk rasa gatal, perih, kemerahan, atau iritasi. Faktor penyebab bisa berupa alergi, stres, atau gangguan kulit tertentu seperti dermatitis.',
                'kata' => 'Ahli dermatologi merekomendasikan penggunaan produk yang dirancang khusus untuk kulit kepala sensitif, seperti sampo bebas pewangi dan bahan kimia keras. Perawatan dengan bahan alami seperti lidah buaya juga dapat membantu menenangkan kulit kepala yang sensitif.'
            ],
            [
                'nama' => 'Ketombe',
                'deskripsi' => 'Ketombe adalah kondisi di mana kulit kepala menghasilkan serpihan putih kecil yang sering disertai dengan rasa gatal. Ketombe bisa disebabkan oleh kulit kepala yang terlalu kering atau infeksi jamur Malassezia. Faktor seperti stres, cuaca dingin, atau produk yang tidak cocok dapat memperburuk kondisi ini.',
                'kata' => 'Menurut penelitian, sampo yang mengandung bahan aktif seperti zinc pyrithione, selenium sulfide, atau ketoconazole efektif dalam mengurangi ketombe. Penting untuk menggunakan produk tersebut secara rutin dan menghindari stres berlebihan yang dapat memperparah gejalanya.'
            ],
            [
                'nama' => 'Mengalami Kerontokan',
                'deskripsi' => 'Kerontokan rambut terjadi ketika rambut rontok lebih dari biasanya, sering kali menyebabkan rambut tampak tipis atau bahkan kebotakan pada area tertentu. Penyebabnya bisa bervariasi, mulai dari stres, pola makan yang buruk, perubahan hormonal, hingga faktor genetik.',
                'kata' => 'Ahli kesehatan rambut mencatat bahwa penggunaan produk perawatan yang mengandung biotin, keratin, dan vitamin B5 dapat membantu menguatkan akar rambut. Konsultasi dengan dermatologis juga dianjurkan untuk memahami penyebab kerontokan secara spesifik dan mendapatkan perawatan yang tepat.'
            ],
        ];

        foreach ($data as $item) {
            KulitKepala::create($item);
        }
    }
}
