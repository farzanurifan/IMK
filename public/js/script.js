window.onload=function(){
  document.getElementById("autoClick").click();
};

n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

function JumlahHarga(){
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
	 
	console.log("Jumlah Harga di update");
	jumlah = document.getElementById("jumlah").value;
	// jumlah = 1;
	harga = document.getElementById("harga").value;
	jumlahharga = jumlah * harga;
	console.log(jumlahharga);
	document.getElementById("jumlahharga").value = (jumlahharga).formatMoney(2, ',', '.');
}

// (function() {

//   var laravel = {
//     initialize: function() {
//       this.methodLinks = $('a[data-method]');
//       this.token = $('a[data-token]');
//       this.registerEvents();
//     },

//     registerEvents: function() {
//       this.methodLinks.on('click', this.handleMethod);
//     },

//     handleMethod: function(e) {
//       var link = $(this);
//       var httpMethod = link.data('method').toUpperCase();
//       var form;

//       // If the data-method attribute is not PUT or DELETE,
//       // then we don't know what to do. Just ignore.
//       if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
//         return;
//       }

//       // Allow user to optionally provide data-confirm="Are you sure?"
//       if ( link.data('confirm') ) {
//         if ( ! laravel.verifyConfirm(link) ) {
//           return false;
//         }
//       }

//       form = laravel.createForm(link);
//       form.submit();

//       e.preventDefault();
//     },

//     verifyConfirm: function(link) {
//       return confirm(link.data('confirm'));
//     },

//     createForm: function(link) {
//       var form =
//       $('<form>', {
//         'method': 'POST',
//         'action': link.attr('href')
//       });

//       var token =
//       $('<input>', {
//         'type': 'hidden',
//         'name': '_token',
//         'value': link.data('token')
//         });

//       var hiddenInput =
//       $('<input>', {
//         'name': '_method',
//         'type': 'hidden',
//         'value': link.data('method')
//       });

//       return form.append(token, hiddenInput)
//                  .appendTo('body');
//     }
//   };

//   laravel.initialize();
// })();
