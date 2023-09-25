<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Berbinar Psikotest</title>
</head>

<body>
    <!--========== INTRODUCTION ==========-->
    <section class="intro_container">
            <div class="flex flex-col items-center">
                <h2 class="intro_title md:w-full w-[90%] text-center font-semibold text-6xl mb-8 leading-tight ">Free Tes <br> Psikotes Berbinar</h2>
                <p class="intro_description md:w-[70%] w-[85%] text-justify">Tes ini merupakan model dari tes lima dimensi kepribadian yang dapat mengungkapkan potensi karir yang sesuai dengan kepribadian Anda. Tes Lima Dimensi Kepribadian secara luas dianggap sebagai cara paling kuat untuk menggambarkan perbedaan kepribadian yang Anda miliki. Ini adalah dasar penelitian kepribadian paling modern. <br><br> Tes Lima Dimensi Kepribadian adalah salah satu alat tes untuk mengungkap kepribadian berdasarkan teori Big Five Personality yang dikemukakan oleh seorang psikolog terkenal, yaitu Lewis Goldberg. Dalam teori sifat kepribadian "The Big Five Personality Traits Model" tersebut terdiri dari lima dimensi kunci diantaranya seperti, Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).</p>    
                <div class="flex gap-4 mt-8">
                    <button class="button_white px-14 py-3 font-semibold showModal">Mulai Tes</button>
                    <a href="#" class="button_bg px-8 py-3 font-semibold">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </section>

    <!--========== POP UP ==========-->
    <section>
        <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-3xl shadow-lg w-2/5">
                <div class="border-b px-6 py-6">
                    <h1 class="text-sky-700 text-center">Instruksi Pengisian</h1>
                    <p class="text-center">Perhatikan dengan seksama instruksi pengisian berikut untuk mengisi free tes psikotes berbinar</p>
                </div>
                <div class="p-6">
                    <p class="text-justify">Pada tes ini, setiap nomor berisikan satu pernyataan beserta lima pilihan skor jawaban. Tugas Anda adalah menentukan skor kesesuaian setiap pernyataan dengan keadaan diri Kamu yang sebenarnya. Tiap pilihan skor kesesuaian yang Anda pilih memiliki kriterianya masing-masing.</p>
                    <p><br>Keterangan Skor:
                        <br>1: Sangat tidak sesuai
                        <br>2: Tidak sesuai
                        <br>3: Ragu-ragu
                        <br>4: Sesuai
                        <br>5: Sangat sesuai</p>
                </div>
                <div class="flex gap-4 justify-center items-center w-100 border-t p-3">
                    <a href="#" class="button_primary px-14 py-3 font-semibold showModal">Mulai</a>
                    <button class="button_white px-14 py-3 font-semibold border-2 border-slate-400 closeModal">Kembali</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.showModal');
        const closeModal = document.querySelector('.closeModal');

        showModal.addEventListener('click', function(){
            modal.classList.remove('hidden')
        });

        closeModal.addEventListener('click', function(){
            modal.classList.add('hidden')
        });
    </script>
</body>
</html>