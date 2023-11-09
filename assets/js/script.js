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