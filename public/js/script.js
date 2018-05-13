window.onload=function(){
	document.getElementById("autoClick").click();
};
$(document).ready(function(){
	$('#harga').mask('#.##0', {
		reverse: true
	});
	$('#dis').css("cursor", "not-allowed");
	$('#jumlahharga').css("cursor", "not-allowed");
	
	$('#harga').keyup(function() {  
		updateTotal();
	});
	
	$('#jumlah').change(function() {  
		updateTotal();
	});

	$('#jumlah').keyup(function() {  
		updateTotal();
	});

	Number.prototype.formatMoney = function(c, d, t){
		var n = this, 
		c = isNaN(c = Math.abs(c)) ? 2 : c, 
		d = d == undefined ? "." : d, 
		t = t == undefined ? "," : t, 
		s = n < 0 ? "-" : "", 
		i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
		j = (j = i.length) > 3 ? j % 3 : 0;
	   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	 };
	
	var updateTotal = function () {
		var input1 = $('#harga').val();
		input1 = input1.replace(/\./g,'')
		var input2 = $('#jumlah').val();
		var hasil = input1 * input2;
		document.getElementById("jumlahharga").value = (hasil).formatMoney(2, ',', '.');
	};
	console.log(updateTotal);
});