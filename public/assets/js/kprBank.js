function pilihBank() {
	var bank = document.getElementById("bank").value;
	if (bank == "mandiri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (7.58 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("bunga-minimal").innerHTML = '7,58';
		document.getElementById("max-tenor").innerHTML = '20';
		document.getElementById("totalcicilanbank").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("totalbungabank").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("totalangsuranbank").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');

	} else if (bank == "bni") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 30 * 12;
		var minbungabank = (6.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("bunga-minimal").innerHTML = '6,75';
		document.getElementById("max-tenor").innerHTML = '30';
		document.getElementById("totalcicilanbank").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("totalbungabank").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("totalangsuranbank").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bank == "bri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (9.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("bunga-minimal").innerHTML = '9.75';
		document.getElementById("max-tenor").innerHTML = '20';
		document.getElementById("totalcicilanbank").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("totalbungabank").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("totalangsuranbank").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bank == "bca") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (5.62 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("bunga-minimal").innerHTML = '5,62';
		document.getElementById("max-tenor").innerHTML = '20';
		document.getElementById("totalcicilanbank").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("totalbungabank").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("totalangsuranbank").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 25 * 12;
		var minbungabank = (8.88 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("bunga-minimal").innerHTML = '8,88';
		document.getElementById("max-tenor").innerHTML = '25';
		document.getElementById("totalcicilanbank").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("totalbungabank").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("totalangsuranbank").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	}
}

function startCompA() {
    interval = setInterval("compareBankA()",1);
}


function compareBankA() {
	var bankA = document.getElementById("bankA").value;
	if (bankA == "mandiri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (7.58 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimala").innerHTML = '7,58';
		document.getElementById("comparemax-tenora").innerHTML = '20';
		document.getElementById("comparetotalcicilanbanka").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabanka").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbanka").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');

	} else if (bankA == "bni") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 30 * 12;
		var minbungabank = (6.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimala").innerHTML = '6,75';
		document.getElementById("comparemax-tenora").innerHTML = '30';
		document.getElementById("comparetotalcicilanbanka").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabanka").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbanka").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bankA == "bri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (9.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimala").innerHTML = '9.75';
		document.getElementById("comparemax-tenora").innerHTML = '20';
		document.getElementById("comparetotalcicilanbanka").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabanka").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbanka").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bankA == "bca") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (5.62 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimala").innerHTML = '5,62';
		document.getElementById("comparemax-tenora").innerHTML = '20';
		document.getElementById("comparetotalcicilanbanka").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabanka").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbanka").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 25 * 12;
		var minbungabank = (8.88 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimala").innerHTML = '8,88';
		document.getElementById("comparemax-tenora").innerHTML = '25';
		document.getElementById("comparetotalcicilanbanka").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabanka").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbanka").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	}
}

function stopCompA() {
    clearInterval(interval);
}

function startCompB() {
    interval = setInterval("compareBankB()",1);
}


function compareBankB() {
	var bankB = document.getElementById("bankB").value;
	if (bankB == "mandiri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (7.58 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimalb").innerHTML = '7,58';
		document.getElementById("comparemax-tenorb").innerHTML = '20';
		document.getElementById("comparetotalcicilanbankb").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabankb").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbankb").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');

	} else if (bankB == "bni") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 30 * 12;
		var minbungabank = (6.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimalb").innerHTML = '6,75';
		document.getElementById("comparemax-tenorb").innerHTML = '30';
		document.getElementById("comparetotalcicilanbankb").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabankb").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbankb").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bankB == "bri") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (9.75 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimalb").innerHTML = '9.75';
		document.getElementById("comparemax-tenorb").innerHTML = '20';
		document.getElementById("comparetotalcicilanbankb").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabankb").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbankb").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else if (bankB == "bca") {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 20 * 12;
		var minbungabank = (5.62 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimalb").innerHTML = '5,62';
		document.getElementById("comparemax-tenorb").innerHTML = '20';
		document.getElementById("comparetotalcicilanbankb").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabankb").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbankb").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	
	} else {
		var kreditbank = document.getElementById("kredit").value;
		var tenorbank = 25 * 12;
		var minbungabank = (8.88 / 100) / 12;

		var cicilanbank = (1 * kreditbank) / (1 * tenorbank);
		var bungabank = (1 * kreditbank) * (1 * minbungabank);

		cicilanfixbank = cicilanbank.toFixed(0);
    	bungafixbank = bungabank.toFixed(0);

    	var totalbank = (1*cicilanfixbank) + (1*bungafixbank)

		document.getElementById("comparebunga-minimalb").innerHTML = '8,88';
		document.getElementById("comparemax-tenorb").innerHTML = '25';
		document.getElementById("comparetotalcicilanbankb").innerHTML = formatRupiah('Rp. ' + cicilanfixbank + ',00');
		document.getElementById("comparetotalbungabankb").innerHTML = formatRupiah('Rp. ' + bungafixbank + ',00');
		document.getElementById("comparetotalangsuranbankb").innerHTML = formatRupiah('Rp. ' + totalbank + ',00');
	}
}

function stopCompB() {
    clearInterval(interval);
}