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

$("#edit-stok").on("show.bs.modal", function (e) {
  var a = $(e.relatedTarget);
  var alias = a.data("alias");
  var stok = a.data("stok");
  var id = a.data("id");
  var modal = $(this);

  $("#myform").attr("action", "/edit/stok/" + id);
  modal.find(".alias").val(alias);
  modal.find(".stok").val(stok);
});

// edit barang
$("#edit-barang").on("show.bs.modal", function (e) {
  var a = $(e.relatedTarget);
  var id = a.data("id");
  var alias = a.data("alias");
  var qty = a.data("qty");
  var satuan = a.data("satuan");
  var created_by = a.data("created_by");
  var deskripsi = a.data("deskripsi");
  var modal = $(this);

  $("#formEdit").attr("action", "/edit/barang/" + id);
  modal.find(".alias").val(alias);
  modal.find(".qty").val(qty);
  modal.find(".satuan").val(satuan);
  modal.find(".created_by").val(created_by);
  modal.find(".deskripsi").val(deskripsi);
});

$("#exampleModal").on("show.bs.modal", function (event) {
  $(e.currentTarget).find('a[name="bookId"]').val(bookId);
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("whatever"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find(".modal-title").text("New message to " + recipient);
  modal.find(".modal-body input").val(recipient);
});

// konfirmasi status sukses pada database pengiriman
$(document).delegate("#status-success", "click", function () {
  var status_id = $(this).data("id");
  // var status = $(this).data("status");
  console.log(status_id);
  Swal.fire({
    title: "Apakah pengiriman sudah selesai?",
    text: "",
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
        url: "/status/pengiriman/" + status_id,
        type: "POST",
        dataType: "json",
        data: {
          id: status_id,
        },
        success: function (res) {
          if (res.status == "ok") {
            Swal.fire({
              title: "Barang Berhasil Dikirimkan",
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

$(document).delegate("#status-canceled", "click", function () {
  var status_id = $(this).data("id");
  var status_alias = $(this).data("alias");
  var status_qty = $(this).data("qty");
  var status_url = $(this).data("url");
  // var status = $(this).data("status");
  console.log(status_id);
  Swal.fire({
    title: "Apakah pengiriman akan dibatalkan?",
    text: "",
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
        url: status_url,
        type: "POST",
        dataType: "json",
        data: {
          id: status_id,
          alias: status_alias,
          qty: status_qty,
        },
        success: function (res) {
          if (res.status == "ok") {
            Swal.fire({
              title: "Barang Barhasil Dibatalkan",
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

// ========================== Rupiah ==================================

var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function (e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value);
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? +rupiah : "";
}

//=========================================================== chart =============================================
