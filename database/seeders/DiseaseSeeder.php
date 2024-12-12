<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $datas = [
            [
                'name' => 'HIV/AIDS',
                'description' => 'Penyakit infeksi kronis yang disebabkan oleh virus HIV yang melemahkan sistem kekebalan tubuh.',
                'symptoms' => 'Demam berkepanjangan, pembengkakan kelenjar getah bening, kelelahan, penurunan berat badan drastis.',
                'treatment' => 'Antiretroviral therapy (ART), perawatan suportif.',
                'cause' => 'Infeksi virus HIV melalui kontak dengan cairan tubuh yang terinfeksi.',
                'photo' => 'hivv.jpg',
                'category_id' => '1',
            ],
            [
                'name' => 'Demam Berdarah Dengue (DBD)',
                'description' => 'Penyakit tropis yang disebabkan oleh infeksi virus dengue melalui gigitan nyamuk Aedes aegypti.',
                'symptoms' => 'Demam tinggi, nyeri otot dan sendi, ruam kulit, pendarahan ringan.',
                'treatment' => 'Perawatan simptomatik, cairan intravena, istirahat.',
                'cause' => 'Infeksi virus dengue.',
                'photo' => 'dbd.jpg',
                'category_id' => '1',
            ],
            [
                'name' => 'Tuberkulosis',
                'description' => 'Penyakit infeksi bakteri yang menyerang paru-paru, tetapi dapat menyebar ke bagian tubuh lainnya.',
                'symptoms' => 'Batuk lebih dari dua minggu, penurunan berat badan, demam, berkeringat di malam hari.',
                'treatment' => 'Antibiotik jangka panjang seperti isoniazid dan rifampisin.',
                'cause' => 'Infeksi bakteri *Mycobacterium tuberculosis*.',
                'photo' => 'tuber.jpg',
                'category_id' => '1',
            ],

            // Chronic Diseases
            [
                'name' => 'Hipertensi',
                'description' => 'Penyakit kronis dengan tekanan darah tinggi secara persisten.',
                'symptoms' => 'Sering tanpa gejala, sakit kepala, sesak napas, pusing.',
                'treatment' => 'Pengendalian pola makan, olahraga, obat antihipertensi.',
                'cause' => 'Faktor genetik, gaya hidup tidak sehat seperti konsumsi garam berlebih.',
                'photo' => 'hiper.jpg',
                'category_id' => '2',
            ],
            [
                'name' => 'Osteoartritis',
                'description' => 'Gangguan sendi degeneratif yang menyebabkan kerusakan pada tulang rawan.',
                'symptoms' => 'Nyeri sendi, kaku di pagi hari, pembengkakan sendi.',
                'treatment' => 'Fisioterapi, obat antiinflamasi, operasi jika diperlukan.',
                'cause' => 'Penuaan, cedera, faktor genetik.',
                'photo' =>'osetor.jpg',
                'category_id' => '2',
            ],
            [
                'name' => 'Diabetes Tipe 2',
                'description' => 'Penyakit kronis yang memengaruhi cara tubuh mengolah gula darah (glukosa).',
                'symptoms' => 'Rasa haus berlebihan, sering buang air kecil, luka yang sulit sembuh, kelelahan.',
                'treatment' => 'Diet sehat, olahraga, obat-obatan seperti metformin, insulin jika diperlukan.',
                'cause' => 'Faktor genetik dan gaya hidup, seperti obesitas dan kurang aktivitas fisik.',
                'photo' =>'diabet.jpg',
                'category_id' => '2',
            ],


            // Mental Health Disorders
            [
                'name' => 'Gangguan Kecemasan Umum',
                'description' => 'Gangguan mental yang menyebabkan rasa khawatir dan cemas berlebihan terhadap aktivitas sehari-hari.',
                'symptoms' => 'Cemas berlebihan, sulit berkonsentrasi, gangguan tidur, ketegangan otot.',
                'treatment' => 'Terapi perilaku kognitif (CBT), obat antiansietas.',
                'cause' => 'Faktor genetik, stres kronis, ketidakseimbangan kimia otak.',
                'photo' =>'ganggu.jpg',
                'category_id' => '3',
            ],
            [
                'name' => 'Bipolar Disorder',
                'description' => 'Gangguan mental yang ditandai dengan perubahan suasana hati ekstrem antara mania dan depresi.',
                'symptoms' => 'Episode mania (energi tinggi, impulsif) dan depresi (kehilangan energi, putus asa).',
                'treatment' => 'Obat penstabil suasana hati, psikoterapi.',
                'cause' => 'Faktor genetik, ketidakseimbangan kimia otak.',
                'photo' => 'bipo.jpg',
                'category_id' => '3',
            ],
            [
                'name' => 'Skizofrenia',
                'description' => 'Gangguan mental kronis yang memengaruhi cara seseorang berpikir, merasakan, dan berperilaku.',
                'symptoms' => 'Halusinasi, delusi, bicara tidak teratur, penarikan diri dari lingkungan sosial.',
                'treatment' => 'Terapi psikologis, antipsikotik, dukungan keluarga.',
                'cause' => 'Faktor genetik, ketidakseimbangan kimia otak, trauma.',
                'photo' =>'skizo.jpg',
                'category_id' => '3',
            ],

            // Genetic Disorders
            [
                'name' => 'Hemofilia',
                'description' => 'Kelainan genetik yang menyebabkan darah sulit membeku.',
                'symptoms' => 'Pendarahan berkepanjangan, memar berlebihan, nyeri pada sendi.',
                'treatment' => 'Terapi pengganti faktor pembekuan darah.',
                'cause' => 'Mutasi genetik yang memengaruhi protein pembekuan darah.',
                'photo' =>'hemo.jpg',
                'category_id' => '4',
            ],
            [
                'name' => 'Sindrom Down',
                'description' => 'Kelainan genetik yang disebabkan oleh tambahan kromosom ke-21.',
                'symptoms' => 'Ciri khas wajah, keterlambatan perkembangan, gangguan intelektual.',
                'treatment' => 'Terapi okupasi, terapi wicara, dukungan pendidikan.',
                'cause' => 'Kopi ekstra kromosom 21.',
                'photo' =>'sd.jpg.',
                'category_id' => '4',
            ],
            [
                'name' => 'Thalassemia',
                'description' => 'Kelainan genetik yang menyebabkan produksi hemoglobin abnormal atau kurang.',
                'symptoms' => 'Kelelahan, kulit pucat, pembesaran limpa, anemia.',
                'treatment' => 'Transfusi darah, terapi kelasi besi, transplantasi sumsum tulang.',
                'cause' => 'Mutasi genetik yang memengaruhi produksi hemoglobin.',
                'photo' =>'thala.jpg',
                'category_id' => '4',
            ],




            // Autoimmune Diseases
            [
                'name' => 'Artritis Reumatoid',
                'description' => 'Penyakit autoimun yang menyebabkan peradangan kronis pada sendi.',
                'symptoms' => 'Nyeri sendi, pembengkakan, kekakuan terutama di pagi hari.',
                'treatment' => 'Obat antiinflamasi nonsteroid (OAINS), imunosupresan, fisioterapi.',
                'cause' => 'Sistem kekebalan menyerang jaringan sendi.',
                'photo' => 'artt.jpg',
                'category_id' => '5',
            ],
            [
                'name' => 'Penyakit Celiac',
                'description' => 'Gangguan autoimun yang menyebabkan reaksi terhadap gluten.',
                'symptoms' => 'Diare, kembung, nyeri perut, anemia.',
                'treatment' => 'Diet bebas gluten.',
                'cause' => 'Sistem imun menyerang lapisan usus kecil saat terpapar gluten.',
                'photo' => 'celiac.jpg.',
                'category_id' => '5',
            ],
            [
                'name' => 'Lupus Eritematosus Sistemik',
                'description' => 'Penyakit autoimun kronis yang dapat memengaruhi berbagai organ tubuh.',
                'symptoms' => 'Ruam kulit berbentuk kupu-kupu, nyeri sendi, kelelahan, demam.',
                'treatment' => 'Kortikosteroid, obat imunosupresan, perawatan gejala.',
                'cause' => 'Sistem kekebalan menyerang jaringan tubuh sendiri, penyebab pasti belum diketahui.',
                'photo' =>'lupus.jpg',
                'category_id' => '5',
            ],




            // Cardiovascular Diseases
            [
                'name' => 'Stroke',
                'description' => 'Gangguan aliran darah ke otak yang menyebabkan kerusakan jaringan otak.',
                'symptoms' => 'Kelemahan atau lumpuh pada satu sisi tubuh, kesulitan bicara, kebingungan.',
                'treatment' => 'Pengobatan segera dengan obat trombolitik, rehabilitasi.',
                'cause' => 'Penyumbatan atau pecahnya pembuluh darah di otak.',
                'photo' => 'stroke.jpg',
                'category_id' => '6',
            ],
            [
                'name' => 'Aritmia',
                'description' => 'Gangguan irama jantung yang dapat membuat jantung berdetak terlalu cepat, terlalu lambat, atau tidak teratur.',
                'symptoms' => 'Palpitasi, pusing, sesak napas, kelelahan.',
                'treatment' => 'Obat-obatan, alat pacu jantung, ablasi.',
                'cause' => 'Gangguan pada sinyal listrik jantung.',
                'photo' => 'arit.jpg',
                'category_id' => '6',
            ],
            [
                'name' => 'Penyakit Jantung Koroner',
                'description' => 'Kondisi di mana pembuluh darah arteri koroner menyempit atau tersumbat.',
                'symptoms' => 'Nyeri dada (angina), sesak napas, kelelahan.',
                'treatment' => 'Perubahan gaya hidup, obat-obatan, prosedur seperti angioplasti atau bypass.',
                'cause' => 'Penumpukan plak (aterosklerosis) akibat kolesterol tinggi, tekanan darah tinggi, merokok.',
                'photo' => 'koroner.jpg.',
                'category_id' => '6',
            ],
        ];
        DB::table('diseases')->insert($datas);
    }
}
