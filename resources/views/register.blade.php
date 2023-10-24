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

    <style>
        .selected {
            border-width: 3px;
            border-color: rgb(107 114 128);
        }
    </style>
</head>

<body>
    <div class="flex">   
        <div class="w-2/5 mx-auto ml-12">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-[62px] h-[62px] mt-8" alt="Logo-Berbinar">
            <h2 class="text-primary mt-24 text-4xl font-semibold">How do you want to <br>use Berbinar Psikotes?</h2>
            <p class=" mt-2">Kami akan mempersonalisasi akunmu dalam menggunakan <br> website Berbinar Psikotes.</p>
            <div class="flex mt-8">
                <div class="option">
                    <button onclick="selectOption('company')" id="companyButton" class="option-button w-36 h-36 items-center rounded-xl bg-slate-200 mr-6 hover:bg-slate-400"><img src="{{ asset('assets/images/Perusahaan.png') }}" alt="Perusahaan"></button> 
                    <button onclick="selectOption('individu')" id="individuButton" class="option-button w-36 h-36 items-center rounded-xl bg-slate-200 hover:bg-slate-400"><img src="{{ asset('assets/images/Individu.png') }}" alt="Individu"></button> 
                </div>
            </div>
            <div class="mt-14">
                <button id="startBtn" onclick="redirect()" class="px-16 py-3 text-white bg-primary rounded-3xl">Start</button>
            </div>
            <p class="mt-24 mb-10 text-gray-400 text-center -ml-12">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
        </div>
        <div class="flex w-3/5 bg-primary">
            <img src="{{ asset('assets/images/ilustrasi_register.png') }}" alt="Ilustrasi-Test" class="m-auto w-[900px]">
        </div>
    </div>

    <script>
        let selectedOption = "";

        function selectOption(option) {
            if (selectedOption) {
                document.getElementById(selectedOption + 'Button').classList.remove('selected');
            }
            selectedOption = option;
            document.getElementById(option + 'Button').classList.add('selected');
            document.getElementById('mulaiButton').classList.remove('hidden');
        }

    function redirect() {
        if (selectedOption === 'company') {
            window.location.href = "/company";
        } else if (selectedOption === 'individu') {
            window.location.href = "/individu";
        }
    }
    </script>
</body>
</html>