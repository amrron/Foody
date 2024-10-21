<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="bg-[#D9F4FF]">
    <div class="w-full h-dvh flex flex-col justify-between items-center p-5">
        <div class="w-full flex-grow flex justify-center items-center">
            <div class="bg-white p-5 rounded-xl w-full relative">
              <div class="flex flex-col items-center py-5 font-roboto">
                  <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="28.5" cy="28" r="28" fill="#23A26D" fill-opacity="0.12"/>
                    <path d="M27.9998 14.6667C20.6532 14.6667 14.6665 20.6533 14.6665 28C14.6665 35.3467 20.6532 41.3333 27.9998 41.3333C35.3465 41.3333 41.3332 35.3467 41.3332 28C41.3332 20.6533 35.3465 14.6667 27.9998 14.6667ZM34.3732 24.9333L26.8132 32.4933C26.6265 32.68 26.3732 32.7867 26.1065 32.7867C25.8398 32.7867 25.5865 32.68 25.3998 32.4933L21.6265 28.72C21.2398 28.3333 21.2398 27.6933 21.6265 27.3067C22.0132 26.92 22.6532 26.92 23.0398 27.3067L26.1065 30.3733L32.9598 23.52C33.3465 23.1333 33.9865 23.1333 34.3732 23.52C34.7598 23.9067 34.7598 24.5333 34.3732 24.9333Z" fill="#23A26D"/>
                  </svg>                  
                  <h1 class="font-poppins text-2xl mt-5 font-semibold text-center">Pembayaran Berhasil!</h1>
              </div>
              <div class="w-full border-b border-dashed border-[#9FA2AB]"></div>
              <div class="flex justify-between items-center font-roboto mt-3">
                <p class="text-[#707070] teks-sm">No. Transaksi</p>
                <p class="font-medium text-[#1D1B23] teks-sm">{{ $transaction->order_id }}</p>
              </div>
              <div class="flex justify-between items-center font-roboto mt-3">
                <p class="text-[#707070] teks-sm">Tanggal</p>
                <p class="font-medium text-[#1D1B23] teks-sm">{{ $date }}</p>
              </div>
              <div class="flex justify-between items-center font-roboto mt-3">
                <p class="text-[#707070] teks-sm">Waktu</p>
                <p class="font-medium text-[#1D1B23] teks-sm">{{ $time }}</p>
              </div>
              <div class="flex justify-between items-center font-roboto mt-3 mb-3">
                <p class="text-[#707070] teks-sm">Metode Pembayaran</p>
                <p class="font-medium text-[#1D1B23] teks-sm">{{ $transaction->payment_method }}</p>
              </div>
              <div class="w-full border-b border-dashed border-[#9FA2AB]"></div>
              <div class="flex justify-between items-center font-roboto mt-3">
                <p class="text-[#707070] teks-sm">Total</p>
                <p class="font-medium text-[#1D1B23] teks-sm rupiah">{{ $transaction->gross_amount }}</p>
              </div>
          </div>
        </div>
        <button id="close-button" class="rounded-xl w-full p-3 py-4 font-poppins font-medium text-lg text-center text-[#D9F4FF] bg-[#131049]">
            Selesai
        </button>
    </div>
    <script>
      document.getElementById('close-button').addEventListener('click', function() {
        Android.closeActivity();
      })
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