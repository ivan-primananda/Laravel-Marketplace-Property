function startCalc() {
    interval = setInterval("calc()",1);
}

// function calc() {
//     kredit = document.autoSumForm.kredit.value;
//     bunga = document.autoSumForm.bunga.value;
//     tenor = document.autoSumForm.tenor.value;

//     bungabagibulan = (bunga / 100) / 12
//     tenorxbulan = tenor * 12

//     // pembagi = ((1*1)+(1*bungaperbulan))*(1*tenorxbulan);
//     // pembagiA = (1*1)/(1*pembagi);
//     // pembagiB = (1*1)-(1*pembagiA);
//     // pembagiFinal = (1*1)/(1*pembagiB);

//     var cicilanpokok = (1*kredit) / (1*tenorxbulan);
//     var bungaperbulan = (1*kredit) * (1*bungabagibulan);

//     cicilanpokokfix = cicilanpokok.toFixed(0);
//     bungaperbulanfix = bungaperbulan.toFixed(0);

//     document.autoSumForm.angsuran.value = (1*cicilanpokokfix) + (1*bungaperbulanfix);
// }

function hitung() {
    var kredit = document.getElementById("kredit").value;
    var bunga = document.getElementById("bunga").value;
    var tenor = document.getElementById("tenor").value;

    var bungaperbulan = (bunga / 100) / 12
    var tenorperbulan = tenor * 12

    var cicilan = (1*kredit) / (1*tenorperbulan);
    var bungadalambulan = (1*kredit) * (1*bungaperbulan);

    cicilanpokok = cicilan.toFixed(0);
    bungafix = bungadalambulan.toFixed(0);

    var tot = (1*cicilanpokok) + (1*bungafix);
    document.getElementById("totalcicilan").innerHTML = formatRupiah('Rp. ' + cicilanpokok + ',00');
    document.getElementById("totalbunga").innerHTML = formatRupiah('Rp. ' + bungafix + ',00');
    document.getElementById("totalangsuran").innerHTML = formatRupiah('Rp. ' + tot + ',00');
}

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split           = number_string.split(','),
    sisa            = split[0].length % 3,
    rupiah          = split[0].substr(0, sisa),
    ribuan          = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

function stopCalc() {
    clearInterval(interval);
}
