$(document).ready(function(){
    $("#history").click(function(){
        $("#history-barang").toggle();
    })
})

// ============================== barang sekarnag ==================
var total = $("#total").val();
var sawi = $("#sawi").val();
$(document).ready(function(){
    $('#submit').click(function(){
        $.ajax({
            method:"POST",
            url: "tambah-barang",
            dataType: "json",
        data: {
            total:total,
            sawi:sawi
        },
            success:function(res){
                console.log(res);
            }
        });
    });
})

$(document).delegate('#dlt-brg', 'click', function(){
    var barang = $(this).data("id");
    console.log(barang);
    Swal.fire({
        title:"are you oke bruh?",
        text:"data tidak bisa dikembalikan lagi",
        icon:"warning",
        confirmButtonText:"Yes",
        showCancelButton:true,
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire("Processing...", "", "", {
                showCancelButton: false,
                showConfirmButton: false,
            });
            $.ajax({
                url:"/delete",
                type:"POST",
                dataType:"json",
                data:{
                    id:barang,
                },
                success:function(res){
                    if(res.status=="ok") {
                        Swal.fire({
                            title: "Delete Success",
                            icon:"success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer:2000,
                        }).then(function(){
                            location.reload(null, false);
                        });
                    }else{
                        Swal.fire({
                            title: "Delete Failed!",
                            icon:"error",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer:2000,
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                      title: "Query Error!",
                      text: textStatus,
                      icon: "error",
                      showCancelButton: false,
                      showConfirmButton: false,
                      timer: 2000,
                    });
                },
            })
        }
    })
});

$(document).ready(function(){
    $("#barang").click(function(){
        $(".tmpl").toggle();
    })
})

$(document).ready(function(){
    $("#insert-stock").click(function(){
        $("#form").toggle();
    })
})