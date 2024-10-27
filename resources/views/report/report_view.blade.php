<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/img/LOGO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        table td {
            padding: 7px
        }
    </style>
</head>
<body>


<div class="my-5">
    <svg width="194" height="83" viewBox="0 0 194 83" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M28.6195 22.2892V29.8439H12.8484V38.0051H24.6492V45.3392H12.8484V61H3.4189V22.2892H28.6195ZM51.8832 61.386C48.2437 61.386 44.8983 60.5405 41.847 58.8494C38.8325 57.1583 36.4246 54.8055 34.6232 51.791C32.8586 48.7398 31.9764 45.3209 31.9764 41.5343C31.9764 37.7478 32.8586 34.3473 34.6232 31.3328C36.4246 28.3183 38.8325 25.9655 41.847 24.2744C44.8983 22.5833 48.2437 21.7378 51.8832 21.7378C55.5226 21.7378 58.8496 22.5833 61.8641 24.2744C64.9154 25.9655 67.305 28.3183 69.0328 31.3328C70.7974 34.3473 71.6797 37.7478 71.6797 41.5343C71.6797 45.3209 70.7974 48.7398 69.0328 51.791C67.2682 54.8055 64.8787 57.1583 61.8641 58.8494C58.8496 60.5405 55.5226 61.386 51.8832 61.386ZM51.8832 52.7836C54.9712 52.7836 57.4343 51.7543 59.2724 49.6956C61.1473 47.6369 62.0847 44.9165 62.0847 41.5343C62.0847 38.1154 61.1473 35.395 59.2724 33.3731C57.4343 31.3144 54.9712 30.2851 51.8832 30.2851C48.7584 30.2851 46.2585 31.296 44.3836 33.3179C42.5455 35.3399 41.6265 38.0787 41.6265 41.5343C41.6265 44.9532 42.5455 47.692 44.3836 49.7507C46.2585 51.7726 48.7584 52.7836 51.8832 52.7836ZM95.2333 61.386C91.5938 61.386 88.2484 60.5405 85.1972 58.8494C82.1827 57.1583 79.7747 54.8055 77.9734 51.791C76.2088 48.7398 75.3265 45.3209 75.3265 41.5343C75.3265 37.7478 76.2088 34.3473 77.9734 31.3328C79.7747 28.3183 82.1827 25.9655 85.1972 24.2744C88.2484 22.5833 91.5938 21.7378 95.2333 21.7378C98.8728 21.7378 102.2 22.5833 105.214 24.2744C108.266 25.9655 110.655 28.3183 112.383 31.3328C114.148 34.3473 115.03 37.7478 115.03 41.5343C115.03 45.3209 114.148 48.7398 112.383 51.791C110.618 54.8055 108.229 57.1583 105.214 58.8494C102.2 60.5405 98.8728 61.386 95.2333 61.386ZM95.2333 52.7836C98.3213 52.7836 100.784 51.7543 102.623 49.6956C104.497 47.6369 105.435 44.9165 105.435 41.5343C105.435 38.1154 104.497 35.395 102.623 33.3731C100.784 31.3144 98.3213 30.2851 95.2333 30.2851C92.1085 30.2851 89.6087 31.296 87.7338 33.3179C85.8957 35.3399 84.9766 38.0787 84.9766 41.5343C84.9766 44.9532 85.8957 47.692 87.7338 49.7507C89.6087 51.7726 92.1085 52.7836 95.2333 52.7836ZM134.779 22.2892C138.859 22.2892 142.425 23.098 145.476 24.7156C148.528 26.3331 150.88 28.6124 152.535 31.5534C154.226 34.4576 155.071 37.8213 155.071 41.6446C155.071 45.4311 154.226 48.7949 152.535 51.7359C150.88 54.6769 148.509 56.9561 145.421 58.5737C142.37 60.1912 138.822 61 134.779 61H120.276V22.2892H134.779ZM134.172 52.8388C137.738 52.8388 140.513 51.8646 142.499 49.9162C144.484 47.9677 145.476 45.2106 145.476 41.6446C145.476 38.0787 144.484 35.3031 142.499 33.3179C140.513 31.3328 137.738 30.3402 134.172 30.3402H129.705V52.8388H134.172ZM193.537 22.2892L180.138 48.2067V61H170.708V48.2067L157.308 22.2892H168.006L175.505 38.5014L182.95 22.2892H193.537Z" fill="#131049"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M100.072 35.7402C100.125 35.8141 100.163 35.8977 100.183 35.9862C100.204 36.0747 100.207 36.1663 100.192 36.2559C100.177 36.3455 100.144 36.4313 100.096 36.5083C100.048 36.5854 99.9853 36.6522 99.9113 36.7049L98.4584 37.743C98.2349 37.9024 98.0649 38.1257 97.9709 38.3836C97.8768 38.6415 97.8631 38.9218 97.9314 39.1876L100.243 36.8757C100.307 36.8097 100.383 36.757 100.468 36.7208C100.552 36.6845 100.643 36.6654 100.735 36.6646C100.827 36.6638 100.918 36.6813 101.003 36.7161C101.088 36.7509 101.165 36.8022 101.23 36.8672C101.295 36.9321 101.346 37.0093 101.381 37.0943C101.416 37.1793 101.433 37.2704 101.432 37.3622C101.431 37.454 101.412 37.5448 101.376 37.6291C101.34 37.7135 101.287 37.7898 101.221 37.8536L98.9093 40.1655C99.1751 40.2338 99.4554 40.2201 99.7133 40.126C99.9712 40.0319 100.195 39.862 100.354 39.6385L101.392 38.1856C101.501 38.0415 101.661 37.9456 101.839 37.9182C102.018 37.8908 102.199 37.9342 102.346 38.039C102.493 38.1438 102.593 38.3018 102.625 38.4793C102.657 38.6568 102.618 38.8398 102.517 38.9891L101.48 40.4428C101.082 41 100.49 41.3882 99.8197 41.531C99.15 41.6738 98.451 41.5609 97.8602 41.2146L96.2717 42.8031L99.1465 45.6779C99.2725 45.8084 99.3422 45.983 99.3406 46.1644C99.339 46.3457 99.2663 46.5192 99.1381 46.6474C99.0098 46.7756 98.8364 46.8483 98.6551 46.8499C98.4737 46.8515 98.299 46.7818 98.1686 46.6558L95.2938 43.781L92.419 46.6558C92.3552 46.7218 92.2789 46.7745 92.1945 46.8108C92.1101 46.847 92.0194 46.8661 91.9275 46.8669C91.8357 46.8677 91.7447 46.8502 91.6597 46.8154C91.5747 46.7807 91.4975 46.7293 91.4325 46.6644C91.3676 46.5994 91.3162 46.5222 91.2815 46.4372C91.2467 46.3522 91.2292 46.2612 91.23 46.1694C91.2308 46.0775 91.2499 45.9868 91.2861 45.9024C91.3224 45.818 91.3751 45.7417 91.4411 45.6779L94.3159 42.8031L93.2025 41.6897C92.8823 41.8626 92.4992 41.994 92.0919 42.0417C91.6782 42.0938 91.2581 42.0491 90.8647 41.9111C90.4713 41.7731 90.1153 41.5455 89.8249 41.2464C89.1825 40.6033 88.8152 39.7948 88.724 39.0182C88.6341 38.254 88.8069 37.4352 89.3671 36.8757C89.9266 36.3156 90.7447 36.1427 91.5089 36.2326C92.2855 36.3246 93.0946 36.6918 93.7371 37.3342C94.0362 37.6247 94.2637 37.9806 94.4018 38.374C94.5398 38.7674 94.5845 39.1875 94.5324 39.6012C94.4857 39.9901 94.366 40.3666 94.1797 40.7111L95.2938 41.8245L96.8823 40.2367C96.5362 39.646 96.4234 38.9472 96.5662 38.2775C96.709 37.6079 97.0971 37.0159 97.6541 36.6178L99.1078 35.5797C99.257 35.4731 99.4424 35.4301 99.6233 35.4602C99.8043 35.4903 99.9658 35.591 100.072 35.7402ZM90.0974 38.8564C90.1527 39.3266 90.3816 39.8474 90.8028 40.2678C91.1638 40.6288 91.5628 40.7104 91.9307 40.6676C92.3318 40.6205 92.661 40.4269 92.7896 40.299C92.9183 40.1703 93.1112 39.8412 93.1582 39.44C93.2018 39.0714 93.1202 38.6724 92.7592 38.3121C92.3374 37.8909 91.8173 37.662 91.347 37.6067C90.8643 37.55 90.5179 37.68 90.3443 37.8536C90.1714 38.0272 90.0407 38.373 90.0974 38.8564Z" fill="#131049"/>
        <path d="M50.4731 41.9762V32.4745C50.4731 32.1463 50.5873 31.861 50.8155 31.6327C51.0438 31.4044 51.3291 31.2903 51.6573 31.2903C51.9854 31.2903 52.2707 31.4044 52.499 31.6327C52.7273 31.861 52.8414 32.1463 52.8414 32.4745V39.9075L56.8076 37.6676C57.0929 37.4964 57.3925 37.4536 57.7064 37.5392C58.0203 37.6248 58.2628 37.8245 58.4197 38.1241C58.591 38.4095 58.6195 38.7091 58.5339 39.0229C58.4483 39.3368 58.2628 39.5936 57.9775 39.7505L52.442 42.8464C52.2258 43.0498 51.9397 43.1622 51.643 43.1603C51.4875 43.1629 51.333 43.1339 51.189 43.0751C51.0449 43.0163 50.9143 42.929 50.805 42.8183C50.6956 42.7076 50.6098 42.576 50.5528 42.4312C50.4958 42.2865 50.4687 42.1317 50.4731 41.9762Z" fill="#131049"/>
        <path d="M96.718 60.7801C94.8409 60.8561 92.0107 60.3319 92.0107 60.3319C92.0107 60.3319 90.1735 63.0117 88.7043 64.6456C88.0879 65.3311 81.5786 68.3964 82.5399 71.8723C83.7749 76.3373 93.388 71.7886 96.718 68.567C100.192 65.2058 101.762 59.9958 101.762 59.9958C101.762 59.9958 98.8129 60.6953 96.718 60.7801Z" fill="#131049"/>
        <path d="M36.46 18.7741L42.378 26.0525" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
        <path d="M67.2742 18.7741L61.3562 26.0525" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
        <path d="M51.5479 15.373L52.1744 24.7328" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
        <path d="M79.9943 18.7741L85.9123 26.0525" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
        <path d="M110.809 18.7741L104.891 26.0525" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
        <path d="M95.0822 15.373L95.7087 24.7328" stroke="#131049" stroke-width="3.67321" stroke-linecap="round"/>
    </svg>
    <h4 class="mb-4">Report Catatan Makanan {{ auth()->user()->name }}</h4>
    <table class="table table-bordered" border="1" style="border-collapse: collapse">
        <thead>
            <tr>
                <td class="text-center" style="background-color: #D9F4FF">Tanggal</td>
                <td class="text-center" style="background-color: #D9F4FF">Jam</td>
                <td class="text-center" style="background-color: #D9F4FF">Makanan</td>
                <td class="text-center" style="background-color: #D9F4FF">Jumlah</td>
                <td class="text-center" style="background-color: #D9F4FF">Karbohidrat</td>
                <td class="text-center" style="background-color: #D9F4FF">Protein</td>
                <td class="text-center" style="background-color: #D9F4FF">Garam</td>
                <td class="text-center" style="background-color: #D9F4FF">Gula</td>
                <td class="text-center" style="background-color: #D9F4FF">Lemak</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($catatans as $tanggal => $catatanTanggal)
            <tr>
                <td class="text-center" rowspan="{{ count($catatanTanggal) }}" style="vertical-align: middle">{{ $tanggal }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->waktu_jam }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->nama }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->jumlah }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->karbohidrat * $catatanTanggal[0]->jumlah }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->protein * $catatanTanggal[0]->jumlah }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->garam * $catatanTanggal[0]->jumlah }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->gula * $catatanTanggal[0]->jumlah }}</td>
                <td class="text-center">{{ $catatanTanggal[0]->lemak * $catatanTanggal[0]->jumlah }}</td>
            </tr>
            @foreach ($catatanTanggal->skip(1) as $catatan)
            <tr>
                <td class="text-center">{{ $catatan->waktu_jam }}</td>
                <td class="text-center">{{ $catatan->nama }}</td>
                <td class="text-center">{{ $catatan->jumlah }}</td>
                <td class="text-center">{{ $catatan->karbohidrat * $catatan->jumlah }}</td>
                <td class="text-center">{{ $catatan->protein * $catatan->jumlah }}</td>
                <td class="text-center">{{ $catatan->garam * $catatan->jumlah }}</td>
                <td class="text-center">{{ $catatan->gula * $catatan->jumlah }}</td>
                <td class="text-center">{{ $catatan->lemak * $catatan->jumlah }}</td>
            </tr>
            @endforeach
            @endforeach
            <tr>
                <td class="text-center" colspan="3"><strong>Total</strong></td>
                <td class="text-center"><strong>{{ $total_jumlah}}</strong></td>
                <td class="text-center"><strong>{{ $total_karbohidrat }}</strong></td>
                <td class="text-center"><strong>{{ $total_protein }}</strong></td>
                <td class="text-center"><strong>{{ $total_garam }}</strong></td>
                <td class="text-center"><strong>{{ $total_gula }}</strong></td>
                <td class="text-center"><strong>{{ $total_lemak }}</strong></td>
            </tr>
        </tbody>
    </table>
</div>

</body>