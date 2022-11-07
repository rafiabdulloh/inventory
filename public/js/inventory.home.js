$(document).ready(function () {
  $("#history").click(function () {
    $("#history-barang").fadeToggle();
  });
});

// ============================== barang sekarnag ==================
var total = $("#total").val();
var sawi = $("#sawi").val();
$(document).ready(function () {
  $("#submit").click(function () {
    $.ajax({
      method: "POST",
      url: "tambah-barang",
      dataType: "json",
      data: {
        total: total,
        sawi: sawi,
      },
      success: function (res) {
        console.log(res);
      },
    });
  });
});

$(document).delegate("#dlt-brg", "click", function () {
  var barang = $(this).data("id");
  console.log(barang);
  Swal.fire({
    title: "are you oke bruh?",
    text: "data tidak bisa dikembalikan lagi",
    icon: "warning",
    confirmButtonText: "Yes",
    showCancelButton: true,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Processing...", "", "", {
        showCancelButton: false,
        showConfirmButton: false,
      });
      $.ajax({
        url: "/delete/",
        type: "POST",
        dataType: "json",
        data: {
          id: barang,
        },
        success: function (res) {
          if (res.status == "ok") {
            Swal.fire({
              title: "Delete Success",
              icon: "success",
              showCancelButton: false,
              showConfirmButton: false,
              timer: 2000,
            }).then(function () {
              location.reload(null, false);
            });
          } else {
            Swal.fire({
              title: "Delete Failed!",
              icon: "error",
              showCancelButton: false,
              showConfirmButton: false,
              timer: 2000,
            });
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          Swal.fire({
            title: "Terjadi Kesalahan!",
            text: textStatus,
            icon: "error",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
          });
        },
      });
    }
  });
});

// $(document).ready(function () {
//   $("#barang").click(function () {
//     $(".tmpl").toggle();
//   });
// });

$(document).ready(function () {
  $("#insert-stock").click(function () {
    $("#form").toggle();
  });
});

// =========================================

$("#exampleModal").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("whatever"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find(".modal-title").text("Tambah Stok Barang disini");
  modal.find(".modal-body input").val();
});

// $('#coba').on('shown.bs.coba', function () {
//     $('.modal').trigger('focus')
//   })

//   $(document).ready(function() {
//     $('#table').DataTable( {
//         responsive: true,
//         "pagingType": 10
//     } );
// } );

$('#edit-stok').on('show.bs.modal', function(e) {

  //get data-id attribute of the clicked element
  var a = $(e.relatedTarget) // Button that triggered the modal
  var alias = a.data('alias');
  var stok = a.data('stok');
  var id = a.data('id');
  var modal = $(this);

  $('#myform').attr('action','/edit/stok/'+id)
  modal.find('.alias').val(alias)
  modal.find('.stok').val(stok)

  // var kutip =('"')
  // var update_alias = $("#alias").val();
  // var update_stok = $("#stok").val();
  // let string = "<form action=\"/edit/stok/\" method=\"post\">";
  // let newString = string.replace(/action=\".*\"/, 'action=\"/edit/stok/'+id+kutip,'\"');
  
  
  
  // console.log(string);
  
  
  //populate the textbox
});

// edit barang
$('#edit-barang').on('show.bs.modal', function(e){
  var a = $(e.relatedTarget);
  var id = a.data('id');
  var alias = a.data('alias');
  var qty = a.data('qty');
  var satuan = a.data('satuan');
  var created_by = a.data('created_by');
  var deskripsi = a.data('deskripsi');
  var modal = $(this);

  $('#formEdit').attr('action','/edit/barang/'+id);
  modal.find('.alias').val(alias)
  modal.find('.qty').val(qty)
  modal.find('.satuan').val(satuan)
  modal.find('.created_by').val(created_by)
  modal.find('.deskripsi').val(deskripsi)
});



$('#exampleModal').on('show.bs.modal', function (event) {
  $(e.currentTarget).find('a[name="bookId"]').val(bookId);
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient);
});

