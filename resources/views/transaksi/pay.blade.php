<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="{{ $is_production ? "https://app.midtrans.com/snap/snap.js" : "https://app.sandbox.midtrans.com/snap/snap.js"  }}"
            data-client-key="{{ $client_key }}"></script>
  </head>
  <body>
    <div class="">
        <table>
            <tr>
                <td>Langganan: </td>
                <td>{{ $transaction->subscription->name }}</td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>{{ $transaction->subscription->duration }} Hari</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>{{ $transaction->gross_amount }}</td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button id="pay-button">Bayar</button>
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay("{{ $transaction->snap_token }}");
      });
    </script>
  </body>
</html>