@extends('layouts.main')

@section('content')
<main>
    <div class=" min-h-screen flex items-center bg-birumuda">
        <div class="flex max-w-7xl mx-auto p-6 lg:p-8 w-full flex-col md:flex-row">
            <div class="flex flex-col justify-center">
                <h2 class="font-semibold text-2xl mb-2 text-biru">FOODY</h2>
                <h1 class="text-5xl font-bold text-biru w-full">Kesehatan Tubuh Membaik</h1>
                <h4 class="text-lg text-biru mb-3 w-full">Solusi Untuk menjaga kesehatan Tubuh Anda</h4>
                <a href="#catatanku" class="w-40 bg-biru text-birumuda hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none text-center">Show More</a>
            </div>
            <div class="w-full">
                <img src="/assets/img/banner1.png" class="w-full" alt="">
            </div>
        </div>
        </div>

        <div class="w-full">
        <svg viewBox="0 0 1535 401" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3_335)">
            <path d="M-69.0002 0H1535.44V72.6208C1535.44 72.6208 1555.3 276.13 1453.32 264.652C1356.87 253.796 1400.67 95.5554 1308.76 101.59C1234.92 106.438 1297.32 357.62 1192.5 323.185C1105.23 294.517 1128.18 173.508 1037.16 181.939C951.961 189.831 989.748 364.019 909.466 395.226C777.113 446.674 860.917 137.087 719.603 147.504C657.424 152.087 639.863 279.66 583.567 279.66C466.107 279.66 552.304 31.0096 442.837 52.9435C348.345 71.8771 452.207 431.645 304.971 372.699C215.92 337.048 256.95 198.883 178.465 181.939C99.9791 164.995 200.152 372.699 55.5728 372.699C53.1308 372.699 15.3773 370.588 12.9999 370.5C-338.774 357.439 -69.0002 0 -69.0002 0Z" fill="#D9F4FF"/>
            </g>
        </svg>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8 min-h-screen flex items-center" id="catatanku">
        <div class="flex w-full flex-col md:flex-row">
            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-bold text-biru w-full mb-4">Pilih waktu makan Anda untuk mencatat pola makan Anda dengan Catatanku</h1>
                <p class="text-base text-biru mb-3">Anda dapat mencatat semua jenis makanan yang  dikonsumsi sepanjang hari. Anda juga dapat dengan cepat menambahkan makanan yang  dimakan</p>
                <a href="#download" class="w-20 bg-birumuda text-biru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none dark:focus:ring-blue-800">Try It</a>
            </div>
            <div class="w-full">
                <img src="/assets/img/catatan_page.png" class="w-full" alt="">
            </div>
        </div>
        </div>

        <div class="py-6 lg:py-8 min-h-screen flex items-center" id="bmi">
        <div class="flex w-full flex-col md:flex-row">
            <div class="max-w-md">
                <img src="/assets/img/record_page.png" class="w-full" alt="">
            </div>
            <div class="flex flex-col w-full justify-center items-center p-6">
                <div class="max-w-2xl flex flex-col items-center">
                    <h1 class="text-5xl text-biru text-center mb-6">Catat dan Pantau BMI Anda dengan Mudah Bersama Foody</h1>
                    <p class="text-biru text-center mb-3">Dengan fitur pencatatan BMI kami, Anda dapat dengan cepat memantau perubahan dalam perjalanan kesehatan Anda. Tidak perlu repot, cukup masukkan data berat dan tinggi tubuh Anda, dan "Foody" akan menghitung BMI Anda secara otomatis. Pantau perkembangan Anda menuju kehidupan sehat yang lebih baik!</p>
                    <a href="#download" class="w-20 bg-birumuda text-biru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none dark:focus:ring-blue-800">Try It</a>
                </div>
            </div>
        </div>
        </div>

        <div class="max-w-7xl mx-auto min-h-screen p-6 lg:p-8 flex items-center" id="makanan">
        <div class="flex w-full flex-col md:flex-row">
            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-bold text-biru text-center md:text-start w-full mb-4">Temukan Data Makanan Dengn Foody AI</h1>
                <p class="text-base text-biru mb-3">Masukan nama makanan, lalu AI akan membantuk mencari data makanan.</p>
                <a href="#download" class="w-20 bg-birumuda text-biru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none dark:focus:ring-blue-800">Try It</a>
            </div>
            <div class="w-full p-5 flex items-center justify-center">
                <img src="/assets/img/target.png" class="h-3/4" alt="">
            </div>
        </div>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8 flex items-center">
        <div class="flex w-full flex-col md:flex-row">
            <div class="lg:w-1/2 w-full flex flex-col justify-between mb-4 lg:mb-0">
                <div class="">
                    <h1 class="text-biru text-5xl font-bold">BMI</h1>
                    <p class="text-biru">Body Massa Index</p>
                </div>
                <div class="flex">
                    <div class="p-10 w-1/2 bg-birumuda rounded-md flex flex-col items-center me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8"/>
                        </svg>
                        <p class="text-biru font-semibold mt-2 text-center">Male</p>  
                    </div>
                    <div class="p-10 w-1/2 bg-ping rounded-md flex flex-col items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5"/>
                        </svg>  
                        <p class="text-biru font-semibold mt-2 text-center">Female</p>  
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 w-full px-0 lg:px-4">
                <div class="p-6 rounded-md" style="background: var(--linear-1, linear-gradient(210deg, #FDCED0 10.95%, #D9F4FF 86.63%))">
                    <h2 class="text-biru text-[36px] text-center mb-6">
                        Hitung BMI Anda
                    </h2>
                    <form class="flex flex-col justify-center" id="hitung" action="">
                        <div class="mb-6">
                            <label for="tinggi_badan" class="block mb-2 text-sm font-medium text-biru">Tinggi badan</label>
                            <input type="number" id="tinggi_badan" class="border border-biru text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 " placeholder="cm" required>
                        </div>
                        <div class="mb-6">
                            <label for="berat_badan" class="block mb-2 text-sm font-medium text-biru">Berat badan</label>
                            <input type="number" id="berat_badan" class="border border-biru text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="kg" required>
                        </div>
                        <button type="submit" class="text-birumuda bg-biru focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Hitung</button>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <div class="p-6 lg:py-8 min-h-screen flex items-center">
        <div class="container-lg w-full mb-5 pt-5 pb-5 flex flex-col items-center">
            <h1 class="text-3xl text-biru font-semibold mb-5 pb-4">Gaya Hidup Sehat</h1>
            <div class="grid grid-cols-1 px-6 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full max-w-screen-lg mx-auto">
                <div class="card m-4 sm:m-6 p-0 border-0">
                    <img src="/assets/img/olahraga.png" alt="" class="w-full h-auto">
                    <div class="card-body flex pb-0 items-center justify-center px-4 pt-4">
                        <h5 class="text-biru text-xl text-center font-semibold">Rutin Berolahraga</h5>
                    </div>
                </div>
                <div class="card m-4 sm:m-6 p-0 border-0">
                    <img src="/assets/img/makansehat.png" alt="" class="w-full h-auto">
                    <div class="card-body flex pb-0 items-center justify-center px-4 pt-4">
                        <h5 class="text-biru text-xl text-center font-semibold">Konsumsi Makanan Sehat</h5>
                    </div>
                </div>
                <div class="card m-4 sm:m-6 p-0 border-0">
                    <img src="/assets/img/istirahat.png" alt="" class="w-full h-auto">
                    <div class="card-body flex pb-0 items-center justify-center px-4 pt-4">
                        <h5 class="text-biru text-xl text-center font-semibold">Istirahat Yang Cukup</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="p-6 lg:py-8 min-h-screen flex items-center">
            <div class="container-lg w-full mb-5 pt-5 pb-5 flex flex-col items-center">
                <h1 class="text-3xl text-biru font-semibold mb-5 pb-4">Paket Langganan</h1>
                <p class="text-sm md:text-base text-biru mt-3 mb-14">Pilih Paket Langganan Foody Premium Nikmati Fitur Ekslusif & dapatkan akses penuh</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-screen-xl mx-auto">
                    <div class="rounded-xl shadow-lg flex flex-col">
                        <div class="p-6 border-b">
                            <svg class="mb-3" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.66678" y="1.66678" width="51.5556" height="51.5556" rx="25.7778" stroke="#0F9BFB" stroke-opacity="0.1" stroke-width="1.77778"/>
                                <rect x="2.55566" y="2.55566" width="49.7778" height="49.7778" rx="24.8889" fill="url(#paint0_radial_4483_1676)"/>
                                <g filter="url(#filter0_d_4483_1676)">
                                <path d="M27.4444 13.2222C27.6588 20.9863 33.9024 27.23 41.6666 27.4444C33.9024 27.6588 27.6588 33.9024 27.4444 41.6666C27.23 33.9024 20.9863 27.6588 13.2222 27.4444C20.9863 27.23 27.23 20.9863 27.4444 13.2222Z" fill="url(#paint1_radial_4483_1676)"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_4483_1676" x="7.88883" y="11.4444" width="39.111" height="39.111" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="3.55556"/>
                                <feGaussianBlur stdDeviation="2.66667"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0038961 0 0 0 0 0.576623 0 0 0 0 0.896104 0 0 0 1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4483_1676"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4483_1676" result="shape"/>
                                </filter>
                                <radialGradient id="paint0_radial_4483_1676" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.4446 41.2223) rotate(90) scale(29.3333)">
                                <stop stop-color="#058BF7"/>
                                <stop offset="1" stop-color="#1AADFE"/>
                                </radialGradient>
                                <radialGradient id="paint1_radial_4483_1676" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.4444 27.4444) rotate(90) scale(47.6991)">
                                <stop stop-color="white"/>
                                <stop offset="1" stop-color="#A5D6FD"/>
                                </radialGradient>
                                </defs>
                            </svg>
                                
                            <p class="font-reguler text-2xl mb-3">Gratis</p>
                            <p class="font-reguler text-4xl mb-3">Rp 0</p>
                            <p class="font-reguler text-sm">Akses dasar untuk pemula</p>
                        </div>
                        <div class="p-6 grow">
                            <div class="flex flex-col">
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>Catatan 3 kali sehari</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>BMI Kalkulator</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>Kandungan Makanan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Tanpa Iklan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4483_1704)">
                                    <path d="M9.5 2.11133C13.371 2.11133 16.5 5.24033 16.5 9.11133C16.5 12.9823 13.371 16.1113 9.5 16.1113C5.629 16.1113 2.5 12.9823 2.5 9.11133C2.5 5.24033 5.629 2.11133 9.5 2.11133ZM12.013 5.61133L9.5 8.12433L6.987 5.61133L6 6.59833L8.513 9.11133L6 11.6243L6.987 12.6113L9.5 10.0983L12.013 12.6113L13 11.6243L10.487 9.11133L13 6.59833L12.013 5.61133Z" fill="#CD224C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_4483_1704">
                                    <rect width="17.7778" height="17.7778" fill="white" transform="translate(0.5 0.111328)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>


                                    <p>AI Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4483_1704)">
                                    <path d="M9.5 2.11133C13.371 2.11133 16.5 5.24033 16.5 9.11133C16.5 12.9823 13.371 16.1113 9.5 16.1113C5.629 16.1113 2.5 12.9823 2.5 9.11133C2.5 5.24033 5.629 2.11133 9.5 2.11133ZM12.013 5.61133L9.5 8.12433L6.987 5.61133L6 6.59833L8.513 9.11133L6 11.6243L6.987 12.6113L9.5 10.0983L12.013 12.6113L13 11.6243L10.487 9.11133L13 6.59833L12.013 5.61133Z" fill="#CD224C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_4483_1704">
                                    <rect width="17.7778" height="17.7778" fill="white" transform="translate(0.5 0.111328)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>


                                    <p>Rekomendasi Makanan AI</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4483_1704)">
                                    <path d="M9.5 2.11133C13.371 2.11133 16.5 5.24033 16.5 9.11133C16.5 12.9823 13.371 16.1113 9.5 16.1113C5.629 16.1113 2.5 12.9823 2.5 9.11133C2.5 5.24033 5.629 2.11133 9.5 2.11133ZM12.013 5.61133L9.5 8.12433L6.987 5.61133L6 6.59833L8.513 9.11133L6 11.6243L6.987 12.6113L9.5 10.0983L12.013 12.6113L13 11.6243L10.487 9.11133L13 6.59833L12.013 5.61133Z" fill="#CD224C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_4483_1704">
                                    <rect width="17.7778" height="17.7778" fill="white" transform="translate(0.5 0.111328)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>


                                    <p>Pengingat Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4483_1704)">
                                    <path d="M9.5 2.11133C13.371 2.11133 16.5 5.24033 16.5 9.11133C16.5 12.9823 13.371 16.1113 9.5 16.1113C5.629 16.1113 2.5 12.9823 2.5 9.11133C2.5 5.24033 5.629 2.11133 9.5 2.11133ZM12.013 5.61133L9.5 8.12433L6.987 5.61133L6 6.59833L8.513 9.11133L6 11.6243L6.987 12.6113L9.5 10.0983L12.013 12.6113L13 11.6243L10.487 9.11133L13 6.59833L12.013 5.61133Z" fill="#CD224C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_4483_1704">
                                    <rect width="17.7778" height="17.7778" fill="white" transform="translate(0.5 0.111328)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>


                                    <p>Laporan PDF</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <button class="w-full text-center text-white bg-biru font-medium rounded-lg text-sm  py-2.5">Pilih Paket</button>
                        </div>
                    </div>
                    <div class="rounded-xl shadow-lg">
                        <div class="p-6 border-b">
                            <svg width="54" class="mb-3" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.22244" y="1.66678" width="51.5554" height="51.5556" rx="25.7777" stroke="#0F9BFB" stroke-opacity="0.1" stroke-width="1.77778"/>
                            <rect x="2.11133" y="2.55566" width="49.7777" height="49.7778" rx="24.8888" fill="url(#paint0_radial_4483_1718)"/>
                            <g filter="url(#filter0_d_4483_1718)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2241 27.2729C27.2241 27.2729 27.9083 22.3382 29.8989 19.3429C30.1047 18.9033 30.389 18.4864 30.7511 18.1145C32.3575 16.4646 34.8876 16.3226 36.4022 17.7973C37.9168 19.2719 37.8425 21.8049 36.2361 23.4548C36.017 23.6798 35.7808 23.8767 35.5323 24.0453C32.6766 26.3678 27.2241 27.2729 27.2241 27.2729ZM26.7893 27.6637C26.7893 27.6637 21.8748 28.4795 18.9337 30.5494C18.4998 30.7669 18.0907 31.0622 17.7285 31.4342C16.1221 33.0841 16.0478 35.617 17.5624 37.0917C19.077 38.5664 21.6071 38.4244 23.2134 36.7745C23.4325 36.5495 23.6231 36.3081 23.785 36.0551C26.0303 33.1384 26.7893 27.6637 26.7893 27.6637ZM18.8983 24.5779C21.8936 26.5686 26.8284 27.2528 26.8284 27.2528C26.8284 27.2528 25.9235 21.801 23.6014 18.9452C23.4327 18.6965 23.2356 18.46 23.0104 18.2408C21.3606 16.6345 18.8276 16.5601 17.3529 18.0747C15.8782 19.5894 16.0203 22.1194 17.6701 23.7258C18.042 24.0879 18.4588 24.3722 18.8983 24.5779ZM27.1715 27.6684C27.1715 27.6684 32.1052 28.3524 35.1007 30.3426C35.5406 30.5484 35.9578 30.8329 36.3301 31.1953C37.9799 32.8017 38.122 35.3317 36.6473 36.8464C35.1726 38.361 32.6396 38.2867 30.9898 36.6803C30.7654 36.4618 30.5689 36.2262 30.4005 35.9785C28.0769 33.1233 27.1715 27.6684 27.1715 27.6684Z" fill="url(#paint1_radial_4483_1718)"/>
                            </g>
                            <ellipse cx="26.9863" cy="27.4646" rx="0.239228" ry="6.04906" fill="url(#paint2_radial_4483_1718)"/>
                            <ellipse cx="26.9524" cy="27.4644" rx="0.239228" ry="6.04906" transform="rotate(-90 26.9524 27.4644)" fill="url(#paint3_radial_4483_1718)"/>
                            <defs>
                            <filter id="filter0_d_4483_1718" x="11.0002" y="15.0001" width="31.9997" height="32.0002" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="3.55556"/>
                            <feGaussianBlur stdDeviation="2.66667"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4483_1718"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4483_1718" result="shape"/>
                            </filter>
                            <radialGradient id="paint0_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0002 41.2223) rotate(90) scale(29.3333 29.3333)">
                            <stop stop-color="#058BF7"/>
                            <stop offset="1" stop-color="#1AADFE"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0001 27.4445) rotate(90) scale(35.7743 35.7742)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#A5D6FD"/>
                            </radialGradient>
                            <radialGradient id="paint2_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9863 27.4646) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint3_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9524 27.4644) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            </defs>
                            </svg>

                                
                            <p class="font-reguler text-2xl mb-3">1 Bulan</p>
                            <div class="flex gap-2 items-center mb-1">
                                <p class="font-reguler text-sm line-through w-auto">Rp 18.000</p>
                                <div class="font-medium text-sm bg-birumuda rounded-full py-1 px-2 w-auto">Diskon 16%</div>
                            </div>
                            <p class="font-reguler text-4xl mb-3">Rp 15.000</p>
                            <p class="font-reguler text-sm">Mulai komitmen sehat</p>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-col">
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Catatan tanpa batas</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>BMI Kalkulator</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>Kandungan Makanan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Tanpa Iklan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>AI Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Rekomendasi Makanan AI</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Pengingat Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Laporan PDF</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <button class="w-full text-center text-white bg-biru font-medium rounded-lg text-sm  py-2.5">Pilih Paket</button>
                        </div>
                    </div>
                    <div class="rounded-xl shadow-lg">
                        <div class="p-6 border-b">
                            <svg width="54" class="mb-3" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.22244" y="1.66678" width="51.5554" height="51.5556" rx="25.7777" stroke="#0F9BFB" stroke-opacity="0.1" stroke-width="1.77778"/>
                            <rect x="2.11133" y="2.55566" width="49.7777" height="49.7778" rx="24.8888" fill="url(#paint0_radial_4483_1718)"/>
                            <g filter="url(#filter0_d_4483_1718)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2241 27.2729C27.2241 27.2729 27.9083 22.3382 29.8989 19.3429C30.1047 18.9033 30.389 18.4864 30.7511 18.1145C32.3575 16.4646 34.8876 16.3226 36.4022 17.7973C37.9168 19.2719 37.8425 21.8049 36.2361 23.4548C36.017 23.6798 35.7808 23.8767 35.5323 24.0453C32.6766 26.3678 27.2241 27.2729 27.2241 27.2729ZM26.7893 27.6637C26.7893 27.6637 21.8748 28.4795 18.9337 30.5494C18.4998 30.7669 18.0907 31.0622 17.7285 31.4342C16.1221 33.0841 16.0478 35.617 17.5624 37.0917C19.077 38.5664 21.6071 38.4244 23.2134 36.7745C23.4325 36.5495 23.6231 36.3081 23.785 36.0551C26.0303 33.1384 26.7893 27.6637 26.7893 27.6637ZM18.8983 24.5779C21.8936 26.5686 26.8284 27.2528 26.8284 27.2528C26.8284 27.2528 25.9235 21.801 23.6014 18.9452C23.4327 18.6965 23.2356 18.46 23.0104 18.2408C21.3606 16.6345 18.8276 16.5601 17.3529 18.0747C15.8782 19.5894 16.0203 22.1194 17.6701 23.7258C18.042 24.0879 18.4588 24.3722 18.8983 24.5779ZM27.1715 27.6684C27.1715 27.6684 32.1052 28.3524 35.1007 30.3426C35.5406 30.5484 35.9578 30.8329 36.3301 31.1953C37.9799 32.8017 38.122 35.3317 36.6473 36.8464C35.1726 38.361 32.6396 38.2867 30.9898 36.6803C30.7654 36.4618 30.5689 36.2262 30.4005 35.9785C28.0769 33.1233 27.1715 27.6684 27.1715 27.6684Z" fill="url(#paint1_radial_4483_1718)"/>
                            </g>
                            <ellipse cx="26.9863" cy="27.4646" rx="0.239228" ry="6.04906" fill="url(#paint2_radial_4483_1718)"/>
                            <ellipse cx="26.9524" cy="27.4644" rx="0.239228" ry="6.04906" transform="rotate(-90 26.9524 27.4644)" fill="url(#paint3_radial_4483_1718)"/>
                            <defs>
                            <filter id="filter0_d_4483_1718" x="11.0002" y="15.0001" width="31.9997" height="32.0002" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="3.55556"/>
                            <feGaussianBlur stdDeviation="2.66667"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4483_1718"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4483_1718" result="shape"/>
                            </filter>
                            <radialGradient id="paint0_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0002 41.2223) rotate(90) scale(29.3333 29.3333)">
                            <stop stop-color="#058BF7"/>
                            <stop offset="1" stop-color="#1AADFE"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0001 27.4445) rotate(90) scale(35.7743 35.7742)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#A5D6FD"/>
                            </radialGradient>
                            <radialGradient id="paint2_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9863 27.4646) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint3_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9524 27.4644) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            </defs>
                            </svg>

                                
                            <p class="font-reguler text-2xl mb-3">3 Bulan</p>
                            <div class="flex gap-2 items-center mb-1">
                                <p class="font-reguler text-sm line-through w-auto">Rp 45.000</p>
                                <div class="font-medium text-sm bg-birumuda rounded-full py-1 px-2 w-auto">Diskon 22%</div>
                            </div>
                            <p class="font-reguler text-4xl mb-3">Rp 35.000</p>
                            <p class="font-reguler text-sm">Lebih hemat, lebih konsisten</p>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-col">
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Catatan tanpa batas</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>BMI Kalkulator</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>Kandungan Makanan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Tanpa Iklan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>AI Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Rekomendasi Makanan AI</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Pengingat Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Laporan PDF</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <button class="w-full text-center text-white bg-biru font-medium rounded-lg text-sm  py-2.5">Pilih Paket</button>
                        </div>
                    </div>
                    <div class="rounded-xl shadow-lg">
                        <div class="p-6 border-b">
                            <svg width="54" class="mb-3" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.22244" y="1.66678" width="51.5554" height="51.5556" rx="25.7777" stroke="#0F9BFB" stroke-opacity="0.1" stroke-width="1.77778"/>
                            <rect x="2.11133" y="2.55566" width="49.7777" height="49.7778" rx="24.8888" fill="url(#paint0_radial_4483_1718)"/>
                            <g filter="url(#filter0_d_4483_1718)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2241 27.2729C27.2241 27.2729 27.9083 22.3382 29.8989 19.3429C30.1047 18.9033 30.389 18.4864 30.7511 18.1145C32.3575 16.4646 34.8876 16.3226 36.4022 17.7973C37.9168 19.2719 37.8425 21.8049 36.2361 23.4548C36.017 23.6798 35.7808 23.8767 35.5323 24.0453C32.6766 26.3678 27.2241 27.2729 27.2241 27.2729ZM26.7893 27.6637C26.7893 27.6637 21.8748 28.4795 18.9337 30.5494C18.4998 30.7669 18.0907 31.0622 17.7285 31.4342C16.1221 33.0841 16.0478 35.617 17.5624 37.0917C19.077 38.5664 21.6071 38.4244 23.2134 36.7745C23.4325 36.5495 23.6231 36.3081 23.785 36.0551C26.0303 33.1384 26.7893 27.6637 26.7893 27.6637ZM18.8983 24.5779C21.8936 26.5686 26.8284 27.2528 26.8284 27.2528C26.8284 27.2528 25.9235 21.801 23.6014 18.9452C23.4327 18.6965 23.2356 18.46 23.0104 18.2408C21.3606 16.6345 18.8276 16.5601 17.3529 18.0747C15.8782 19.5894 16.0203 22.1194 17.6701 23.7258C18.042 24.0879 18.4588 24.3722 18.8983 24.5779ZM27.1715 27.6684C27.1715 27.6684 32.1052 28.3524 35.1007 30.3426C35.5406 30.5484 35.9578 30.8329 36.3301 31.1953C37.9799 32.8017 38.122 35.3317 36.6473 36.8464C35.1726 38.361 32.6396 38.2867 30.9898 36.6803C30.7654 36.4618 30.5689 36.2262 30.4005 35.9785C28.0769 33.1233 27.1715 27.6684 27.1715 27.6684Z" fill="url(#paint1_radial_4483_1718)"/>
                            </g>
                            <ellipse cx="26.9863" cy="27.4646" rx="0.239228" ry="6.04906" fill="url(#paint2_radial_4483_1718)"/>
                            <ellipse cx="26.9524" cy="27.4644" rx="0.239228" ry="6.04906" transform="rotate(-90 26.9524 27.4644)" fill="url(#paint3_radial_4483_1718)"/>
                            <defs>
                            <filter id="filter0_d_4483_1718" x="11.0002" y="15.0001" width="31.9997" height="32.0002" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="3.55556"/>
                            <feGaussianBlur stdDeviation="2.66667"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4483_1718"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4483_1718" result="shape"/>
                            </filter>
                            <radialGradient id="paint0_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0002 41.2223) rotate(90) scale(29.3333 29.3333)">
                            <stop stop-color="#058BF7"/>
                            <stop offset="1" stop-color="#1AADFE"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(27.0001 27.4445) rotate(90) scale(35.7743 35.7742)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#A5D6FD"/>
                            </radialGradient>
                            <radialGradient id="paint2_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9863 27.4646) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint3_radial_4483_1718" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(26.9524 27.4644) rotate(90) scale(6.04906 0.239228)">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            </defs>
                            </svg>

                                
                            <p class="font-reguler text-2xl mb-3">6 Bulan</p>
                            <div class="flex gap-2 items-center mb-1">
                                <p class="font-reguler text-sm line-through w-auto">Rp 90.000</p>
                                <div class="font-medium text-sm bg-birumuda rounded-full py-1 px-2 w-auto">Diskon 33%</div>
                            </div>
                            <p class="font-reguler text-4xl mb-3">Rp 60.000</p>
                            <p class="font-reguler text-sm">Manfaat maksimal, terbaik</p>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-col">
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Catatan tanpa batas</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>BMI Kalkulator</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>
                                    <p>Kandungan Makanan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Tanpa Iklan</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>AI Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Rekomendasi Makanan AI</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Pengingat Nutrisi</p>
                                </div>
                                <div class="flex gap-2 items-start mb-2">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.38897 1.77783C7.96055 1.77783 6.56421 2.20141 5.37652 2.995C4.18883 3.78858 3.26314 4.91654 2.71651 6.23623C2.16988 7.55592 2.02685 9.00807 2.30552 10.409C2.5842 11.81 3.27205 13.0969 4.28209 14.1069C5.29214 15.117 6.57901 15.8048 7.97999 16.0835C9.38096 16.3622 10.8331 16.2191 12.1528 15.6725C13.4725 15.1259 14.6004 14.2002 15.394 13.0125C16.1876 11.8248 16.6112 10.4285 16.6112 9.00005C16.6092 7.08522 15.8476 5.2494 14.4936 3.89541C13.1396 2.54141 11.3038 1.77985 9.38897 1.77783ZM12.5598 7.72644L8.67092 11.6153C8.61932 11.667 8.55805 11.708 8.49061 11.7359C8.42316 11.7639 8.35087 11.7783 8.27786 11.7783C8.20485 11.7783 8.13256 11.7639 8.06512 11.7359C7.99767 11.708 7.9364 11.667 7.88481 11.6153L6.21814 9.94866C6.11389 9.84442 6.05533 9.70303 6.05533 9.55561C6.05533 9.40819 6.11389 9.2668 6.21814 9.16255C6.32238 9.05831 6.46377 8.99974 6.6112 8.99974C6.75862 8.99974 6.90001 9.05831 7.00425 9.16255L8.27786 10.4369L11.7737 6.94033C11.8253 6.88871 11.8866 6.84777 11.954 6.81984C12.0215 6.7919 12.0938 6.77752 12.1668 6.77752C12.2397 6.77752 12.312 6.7919 12.3795 6.81984C12.4469 6.84777 12.5082 6.88871 12.5598 6.94033C12.6114 6.99195 12.6524 7.05323 12.6803 7.12067C12.7082 7.18811 12.7226 7.26039 12.7226 7.33339C12.7226 7.40638 12.7082 7.47867 12.6803 7.54611C12.6524 7.61355 12.6114 7.67483 12.5598 7.72644Z" fill="#33A14D"/>
                                    </svg>

                                    <p>Laporan PDF</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <button class="w-full text-center text-white bg-biru font-medium rounded-lg text-sm  py-2.5">Pilih Paket</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto min-h-screen p-6 lg:p-8 flex items-center" id="download">
        <div class="bg-birumuda rounded-[20px] mt-5 mb-5 p-3">
            <div class="flex flex-col md:flex-row mt-5 mx-2 my-2 rounded-[20px]">
                <div class="md:w-1/2 p-5 flex flex-col justify-center">
                    <h1 class="text-xl text-biru font-medium md:text-3xl break-words">Download Sekarang Juga!</h1>
                    <p class="text-sm md:text-base text-biru mt-3">Dapatkan aplikasi foody untuk perangkat android sekarang juga</p>
                    <div class="flex mt-4">
                        <div class="rounded-md p-2">
                            
                            <svg class="w-16 h-16 text-biru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd"/>
                            </svg>                            
                        </div>
                        <a href="/" class="flex items-center text-biru text-2xl md:text-5xl font-bold">
                            Foody.apk
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="/assets/img/makanan.png" class="" alt="">
                </div>
            </div>
        </div>        
        </div>
</main>

<!-- Small Modal -->
<div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5">
                <h3 class="text-xl font-medium text-gray-900">
                    Hasil BMI
                </h3>
                <button data-modal-target="small-modal" data-modal-toggle="small-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="small-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 ">
                    Nilai BMI and adalah:
                </p>
                <h3 class="text-4xl font-semibold text-biru" id="hasil_bmi">23.45</h3>
                <p class="text-base leading-relaxed text-gray-500 ">
                    Dengan Kategori <span class="font-bold text-biru" id="kategori_bmi"></span>
                </p>
            </div>
            
        </div>
    </div>
</div>
@endsection
@push('scripts')    
<script src="/js/script.js"></script>
@endpush