$(document).ready(function () {

    $("#sel_cat_id").change(function () {
        var cat_id = $(this).find('option:selected').val();
        if (cat_id == 'zero') {
            console.log(cat_id);
            $('.enable_tag').prop("disabled", true);
        }
        else {
            $('.enable_tag').prop("disabled", false);
            $.ajax({
                url: 'subCatDetails/getsub/' + cat_id,
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#select_sub_details').html(`<option value="">Select Sub Category</option>`);
                    $cat_array = [];
                    for (var i = 0; i < response.length; i++) {
                        $cat_array.push(response[i]['cat_id'], response[i]['sub_cat_name'])
                        $('#select_sub_details').append(`<option value="${response[i]['id']}">${response[i]['sub_cat_name']}</option>`);
                    }
                }
            });
        }

    });

    $("#sub_prod_details").click(function (e) {
        e.preventDefault()
        sel_cat_id = $("#sel_cat_id").val()
        sel_sub_cat_id = $("#select_sub_details").val()
        sub_cat_d_ov = $("#overview").val()
        sub_cat_d_lc = $("#learncourse").val()
        sub_cat_d_cf = $("#certification").val()
        sub_cat_d_wc = $("#whocourse").val()
        sub_cat_d_md = $("#modules").val()
        sub_cat_d_hg = $("#highlight").val()
        sub_cat_d_tp = $("#topics").val()
        sub_cat_d_st = $("#software_taught").val()
        sub_cat_d_co = $("#careeropportunity").val()
        sub_cat_d_si = $("#subimages").val()
        sub_cat_d_ap = $("#afterprice").val()
        sub_cat_d_bp = $("#beforeprice").val()
        console.log(sel_cat_id, sel_sub_cat_id, sub_cat_d_ov, sub_cat_d_lc, sub_cat_d_cf, sub_cat_d_wc, sub_cat_d_md, sub_cat_d_hg, sub_cat_d_tp, sub_cat_d_st, sub_cat_d_co, sub_cat_d_si, sub_cat_d_ap, sub_cat_d_bp)
    })
})


$(document).ready(function () {

    const targetDiv = document.getElementById("main-navbar");
    const btn = document.getElementById("miniMenu");
    btn.onclick = function () {
      if (targetDiv.style.display !== "none") {
        targetDiv.style.display = "none";
        targetDiv.style.transition = "0.5s";
      } else {
        targetDiv.style.display = "block";
        targetDiv.style.transition = "0.5s";
      }
    };

})



