$(document).ready(function() {
    $("#hitung").submit(function(e){
        e.preventDefault();

        var bb = $('#berat_badan').val();
        var tb = $('#tinggi_badan').val(); 
        var bmi = (bb / Math.pow((tb/100), 2)).toFixed(2);
        var kategori = "";

        if (bmi < 19) {
            kategori = "Berat badan kurang"
        }
        else if (bmi < 25) {
            kategori = "Berat badan Normal"
        }
        else if (bmi < 30) {
            kategori = "Kelebihan berat badan"
        }
        else if (bmi < 35) {
            kategori = "Obesitas tingkat 1"
        }
        else if (bmi < 35) {
            kategori = "Obesitas tingkat 2"
        }
        else {
            kategori = "Obesitas tingkat 3"
        }

        console.log(bmi);
        $("#hasil_bmi").text(bmi);
        $('#kategori_bmi').text(kategori);

        var $smallModal =  document.getElementById('small-modal');
        const smallModal = new Modal($smallModal);

        smallModal.show();
    });
})