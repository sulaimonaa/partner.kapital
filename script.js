// login function
function fpax() {
  document.getElementById('forgetpax').submit()
}

function rpax() {
  document.getElementById('regacct').submit()
}

function prev() {
  window.history.back()
}


function copyLinkFunc() {
  // Get the text field
  var copyText = document.getElementById("copyLink");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
}

$(document).ready(function () {
  $('#m-icon').click(function () {
    $('.top-menu').toggle()
  })

  $('#datepicker').datepicker({
    dateFormat: 'dd-M-yy',
  })
  
  $('#datepicker_1').datepicker({
    dateFormat: 'dd-M-yy',
  })
  $('#datepicker_2').datepicker({
    dateFormat: 'dd-M-yy',
  })
  $('#datepicker_3').datepicker({
    dateFormat: 'dd-M-yy',
  })
  $('#datepicker_4').datepicker({
    dateFormat: 'dd-M-yy',
  })
  $('#datepicker_5').datepicker({
    dateFormat: 'dd-M-yy',
  })
  
  // datatable
  $('#csv-push').DataTable({searching: false})
})
