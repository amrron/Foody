@php
    $price = $transaction->subscription->price + $addPrice;
    $discountPrice = $transaction->subscription->price;
    $discount = round(($addPrice/$price)*100, 2)
@endphp
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="{{ $is_production ? "https://app.midtrans.com/snap/snap.js" : "https://app.sandbox.midtrans.com/snap/snap.js"  }}"
            data-client-key="{{ $client_key }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        .font-poppins {
          font-family: 'Poppins', sans-serif;
        }
        .font-roboto {
          font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="w-full h-dvh flex flex-col justify-center items-center relative">
        <div class="bg-[#D9F4FF] p-5 rounded-xl w-4/5 relative">
            <h1 class="text-2xl text-[#131049] font-bold font-poppins text-center">FOODY PREMIUM</h1>
            <div class="flex flex-col items-center py-6 font-roboto">
                <p class="text-sm text-[#9FA2AB] font-medium mb-2">Total Pembayaran</p>
                <p class="text-2xl font-bold text-[#1D1B23] rupiah">{{ $transaction->gross_amount }}</p>
            </div>
            <div class="flex justify-between items-center font-roboto mt-3">
              <p class="font-medium text-[#9FA2AB] teks-sm">Paket Langganan</p>
              <p class="font-medium text-[#1D1B23] teks-sm">{{ $transaction->subscription->duration / 30 }} Bulan</p>
            </div>
            <div class="flex justify-between items-center font-roboto mt-3">
              <p class="font-medium text-[#9FA2AB] teks-sm">Durasi</p>
              <p class="font-medium text-[#1D1B23] teks-sm">{{ $transaction->subscription->duration }} Hari</p>
            </div>
            <div class="flex justify-between items-center font-roboto mt-3">
              <p class="font-medium text-[#9FA2AB] teks-sm">Harga</p>
              <p class="font-medium text-[#1D1B23] teks-sm rupiah">{{ $price }}</p>
            </div>
            <div class="flex justify-between items-center font-roboto mt-3 mb-3">
              <p class="font-medium text-[#9FA2AB] teks-sm">Diskon</p>
              <p class="font-medium text-[#1D1B23] teks-sm rupiah">{{ $addPrice }}</p>
            </div>
            
            <div class="w-full border-b border-dashed border-[#9FA2AB]"></div>
            <div class="flex justify-between items-center font-roboto mt-3">
              <p class="font-medium text-[#9FA2AB] teks-sm">Hemat</p>
              <p class="font-medium text-[#1D1B23] teks-sm">{{ $discount }}%</p>
            </div>
            <div class="flex justify-between items-center font-roboto mt-3 mb-4">
              <p class="font-bold text-[#1D1B23] teks-sm">Total</p>
              <p class="font-bold text-[#1251D4] teks-sm rupiah">{{ $transaction->gross_amount }}</p>
            </div>
            <div class="flex justify-between absolute translate-y-[50%] w-full">
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
              <div class="w-5 h-5 bg-white rounded-full"></div>
            </div>
        </div>
        <button id="pay-button" class="absolute bottom-5 rounded-xl w-4/5 p-3 font-poppins text-lg text-center text-[#D9F4FF] bg-[#131049]">
            Pilih Pembayara
        </button>
    </div>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          snap.pay("{{ $transaction->snap_token }}");
        });
    </script>
    <script>
      // Fungsi untuk memformat angka menjadi format Rupiah
      function formatRupiah(angka) {
          return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0,  maximumFractionDigits: 0, }).format(angka);
      }

      // Ambil semua elemen dengan class 'rupiah'
      const elements = document.querySelectorAll('.rupiah');

      // Iterasi setiap elemen dan ubah isinya menjadi format Rupiah
      elements.forEach(function(element) {
          const angka = parseFloat(element.textContent); // Ambil angka dari teks
          if (!isNaN(angka)) {
              element.textContent = formatRupiah(angka); // Ubah menjadi format Rupiah
          }
      });    
    </script>
</body>
</html>