<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="{{ $is_production ? "https://app.midtrans.com/snap/snap.js" : "https://app.sandbox.midtrans.com/snap/snap.js"  }}"
            data-client-key="{{ $client_key }}"></script>
  </head>
  <body>
    <button id="pay-button">Bayar</button>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay("{{ $snap_token }}");
      });
    </script>
  </body>
</html>