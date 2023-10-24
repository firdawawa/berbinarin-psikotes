<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

    <title>Berbinar Psikotes</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">   
        <div class="w-2/5 mx-auto text-center">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-[62px] h-[62px] ml-6 mt-8" alt="Logo-Berbinar">
            <h2 class="text-primary text-center mt-24 text-4xl font-semibold">Create Account</h2>
            <p class="text-center mt-2">Kami akan mempersonalisasi akunmu dalam menggunakan <br> website Berbinar Psikotes.</p>
            <div class="mt-10">
                <input type="email" placeholder="Email" class="border-2 h-12 w-[420px] rounded-lg p-4">
                <input type="text" placeholder="Full Name" class="border-2 h-12 w-[420px] rounded-lg p-4 mt-5">
                <input type="password" placeholder="Password" class="border-2 h-12 w-[420px] rounded-lg p-4 mt-5">
            </div>
            <div class="mt-4">Sudah punya akun?  
                <a href="/login" class="text-primary">Masuk Sekarang</a>
            </div>
            <div class="mt-6">
                <a href="#" class="px-10 py-3 text-white bg-primary rounded-3xl">Create Account</a>
            </div>
            <p class="mt-24 mb-8 text-gray-400">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
        </div>
        <div class="flex w-3/5 bg-primary">
            <img src="{{ asset('assets/images/ilustrasi_individu.png') }}" alt="Ilustrasi-Test" class="m-auto w-[940px]">
        </div>
    </div>
</body>
</html>