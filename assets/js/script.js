$(document).ready(function () {
  $(".variable-width").slick({
    slidesToShow: 1,
    // infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    variableWidth: true,
    swipeToSlide: true,
  });
});


// button tambah kurang stok

$(".btn-number").click(function (e) {
  e.preventDefault();

  fieldName = $(this).attr("data-field");
  type = $(this).attr("data-type");
  var input = $("input[name='" + fieldName + "']");
  var currentVal = parseInt(input.val());
  if (!isNaN(currentVal)) {
    if (type == "minus") {
      if (currentVal > input.attr("min")) {
        input.val(currentVal - 1).change();
      }
      if (parseInt(input.val()) == input.attr("min")) {
        $(this).attr("disabled", true);
      }
    } else if (type == "plus") {
      if (currentVal < input.attr("max")) {
        input.val(currentVal + 1).change();
      }
      if (parseInt(input.val()) == input.attr("max")) {
        $(this).attr("disabled", true);
      }
    }
  } else {
    input.val(0);
  }
});
$(".input-number").focusin(function () {
  $(this).data("oldValue", $(this).val());
});
$(".input-number").change(function () {
  minValue = parseInt($(this).attr("min"));
  maxValue = parseInt($(this).attr("max"));
  valueCurrent = parseInt($(this).val());

  name = $(this).attr("name");
  if (valueCurrent >= minValue) {
    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr(
      "disabled"
    );
  } else {
    alert("Sorry, the minimum value was reached");
    $(this).val($(this).data("oldValue"));
  }
  if (valueCurrent <= maxValue) {
    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr(
      "disabled"
    );
  } else {
    alert("Sorry, the maximum value was reached");
    $(this).val($(this).data("oldValue"));
  }
});
$(".input-number").keydown(function (e) {
  // Allow: backspace, delete, tab, escape, enter and .
  if (
    $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
    // Allow: Ctrl+A
    (e.keyCode == 65 && e.ctrlKey === true) ||
    // Allow: home, end, left, right
    (e.keyCode >= 35 && e.keyCode <= 39)
  ) {
    // let it happen, don't do anything
    return;
  }
  // Ensure that it is a number and stop the keypress
  if (
    (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
    (e.keyCode < 96 || e.keyCode > 105)
  ) {
    e.preventDefault();
  }
});

// button tambah kurang stok


// hide and see password

function seePassword() {
  var x = document.getElementById("pass_field");
  var eye = document.getElementById("hide_pass");
  var eye_slice = document.getElementById("show_pass");
  if (x.type === "password") {
    x.type = "text";
    eye.style.display = "block";
    eye_slice.style.display = "none";
  } else {
    x.type = "password";
    eye.style.display = "none";
    eye_slice.style.display = "block";
  }
};

// hide and see password


// enabled & disabled login button 

function enableLogin() {
  if($('#user_field').val().length >= 10 && $('#pass_field').val().length >= 10) {
     $('#submitButton').removeAttr('disabled');
  } else {
     $('#submitButton').attr('disabled', true);   
  }
};


function enableAktivasi() {
  if($('#userFieldAktivasi').val().length >= 10) {
      $('#submitButtonAktivasi').removeAttr('disabled');
  } else {
      $('#submitButtonAktivasi').attr('disabled', true);   
  }
};

// enabled & disabled login button 


// Preloader

window.onload = function Preloader() {
  setTimeout(() => {
      document.querySelector('#preloader').style.display = "none";
  }, 2000)
};
if (!sessionStorage.getItem('doNotShow')) {
sessionStorage.setItem('doNotShow', true);
Preloader();
} else {
document.querySelector('#preloader').style.display = "none";
}


// Avatar

/*
     * LetterAvatar
     * 
     * Artur Heinze
     * Create Letter avatar based on Initials
     * based on https://gist.github.com/leecrossley/6027780
     */
(function(w, d){


  function LetterAvatar (name, size) {

      name  = name || '';
      size  = size || 60;

      var colours = [
              "#F9C", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", 
              "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"
          ],

          nameSplit = String(name).toUpperCase().split(' '),
          initials, charIndex, colourIndex, canvas, context, dataURI;


      if (nameSplit.length == 1) {
          initials = nameSplit[0] ? nameSplit[0].charAt(0):'?';
      } else {
          initials = nameSplit[0].charAt(0) + nameSplit[1].charAt(0);
      }

      if (w.devicePixelRatio) {
          size = (size * w.devicePixelRatio);
      }
          
      charIndex     = (initials == '?' ? 72 : initials.charCodeAt(0)) - 64;
      colourIndex   = charIndex % 20;
      canvas        = d.createElement('canvas');
      canvas.width  = size;
      canvas.height = size;
      context       = canvas.getContext("2d");
       
      context.fillStyle = colours[0];
      context.fillRect (0, 0, canvas.width, canvas.height);
      context.font = "500 "+Math.round(canvas.width/2)+"px sans-serif";
      context.textAlign = "center";
      context.fillStyle = "#FFF";
      context.fillText(initials, size / 2, size / 1.5);

      dataURI = canvas.toDataURL();
      canvas  = null;

      return dataURI;
  }

  LetterAvatar.transform = function() {

      Array.prototype.forEach.call(d.querySelectorAll('img[avatar]'), function(img, name) {
          name = img.getAttribute('avatar');
          img.src = LetterAvatar(name, img.getAttribute('width'));
          img.removeAttribute('avatar');
          img.setAttribute('alt', name);
      });
  };


  // AMD support
  if (typeof define === 'function' && define.amd) {
      
      define(function () { return LetterAvatar; });
  
  // CommonJS and Node.js module support.
  } else if (typeof exports !== 'undefined') {
      
      // Support Node.js specific `module.exports` (which can be a function)
      if (typeof module != 'undefined' && module.exports) {
          exports = module.exports = LetterAvatar;
      }

      // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
      exports.LetterAvatar = LetterAvatar;

  } else {
      
      window.LetterAvatar = LetterAvatar;

      d.addEventListener('DOMContentLoaded', function(event) {
          LetterAvatar.transform();
      });
  }

})(window, document);


/* Format 3 digit */
var format3Digit = document.getElementById('format-digit');
var formatDigitDisc = document.getElementById('discount-value');
format3Digit.addEventListener('keyup', function(e)
{
    format3Digit.value = formatRupiah(this.value);
});

formatDigitDisc.addEventListener('keyup', function(e)
{
    formatDigitDisc.value = formatRupiah(this.value);
});

/* Fungsi */
function formatRupiah(angka)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split       = number_string.split(','),
        sisa        = split[0].length % 3,
        rupiah      = split[0].substr(0, sisa),
        ribuan      = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return rupiah;
}

function formatRupiahJs(angka)
{
    var number_string = angka.toString().replace(/[^,\d]/g, ''),
        split       = number_string.split(','),
        sisa        = split[0].length % 3,
        rupiah      = split[0].substr(0, sisa),
        ribuan      = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return rupiah;
}

/* Format 3 digit */


/* Show Discount */

$('#checked-discount').on('change', function() { 
  // From the other examples
  if (this.checked) {
    $('#discount-desc').css("display", "none");
    $('#discount-input').css("display", "");
  }else{
    $('#discount-desc').css("display", "");
    $('#discount-input').css("display", "none");
    $('#discount-value').val("");
    changeDiscount();
    getAmount();
  }
});

/* Show Discount */


/* Get Amount */

function changeDiscount(){
  var discount = $('#discount-value').val();
  var valueDiscount = discount.replace('.','');
  var amount = $('#amount').html();
  var amountNoRp = amount.slice(2);
  var amountFormated = amountNoRp.replace('.','');

  var plusDiscount = 0;
  plusDiscount = amountFormated - valueDiscount;

  $('#format-digit').val(formatRupiahJs(plusDiscount));
}


function getAmount(){
  var value = $('#format-digit').val();
  var valueFormated = value.replace('.','');
  var discount = $('#discount-value').val();
  var valueDiscount = discount.replace('.','');
  var qty = $('#total-qty').html();
  var amount = $('#amount').html();
  var amountNoRp = amount.slice(2);
  var amountFormated = amountNoRp.replace('.','');

  var sum_value = 0;
  var amountAll = 0;

  amountAll = amountFormated - valueDiscount;
  sum_value = valueFormated - amountAll;

  if(sum_value >= 0){
    $('#total_value').html('Rp'+formatRupiahJs(sum_value));
    $('#ringkasan-total-harga').html('Rp'+formatRupiahJs(amountFormated));
    $('#ringkasan-total-qty').html(qty);
    $('#ringkasan-total-diskon').html('Rp'+formatRupiahJs(valueDiscount));
    $('#ringkasan-total-dibayar').html('Rp'+formatRupiahJs(valueFormated));
    $('#ringkasan-total-kembalian').html('Rp'+formatRupiahJs(sum_value));
    $('#ringkasan-total-keseluruhan').html('Rp'+formatRupiahJs(amountAll));
    $('#number-total-tagihan').html(formatRupiahJs(amountAll));
  }
}

function getReturValue(){
  
  var qtyRetur = $('#retur-qty').html();
  var amountRetur = $('#retur-amount').html();
  var amountNoRpRetur = amountRetur.slice(2);
  var amountFormatedRetur = amountNoRpRetur.replace('.','');
  var discountRetur = $('#retur-discount').html();
  var valueDiscountRetur = discountRetur.replace('.','');

  var totalAmount = 0;

  totalAmount = amountFormatedRetur - valueDiscountRetur;

  $('#number-total-retur').html(formatRupiahJs(totalAmount));
  $('#ringkasan-retur-qty').html(qtyRetur);
  $('#ringkasan-retur-total').html('Rp'+formatRupiahJs(amountFormatedRetur));
  $('#ringkasan-retur-diskon').html('Rp'+formatRupiahJs(valueDiscountRetur));
  $('#ringkasan-retur-keseluruhan').html('Rp'+formatRupiahJs(totalAmount));
}

// window.onload = function(){
//   document.getElementById("format-digit").value = document.getElementById("amount").innerHTML.slice(2);
//   getAmount();
// }
/* Get Amount */
