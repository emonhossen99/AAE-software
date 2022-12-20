




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

})



   
$(document).ready(function () {
    $("#sub_prod_details").click(function (e) {
        e.preventDefault();
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
        sub_cat_d_si = $("#subimages").val();
        sub_cat_d_ap = $("#afterprice").val()
        sub_cat_d_bp = $("#beforeprice").val()
        sub_cat_d_cl = $("#class").val()

        
        $.ajax({
            type: "POST",
            url: '/subCatDetails',
            data: {
                'cat_id': sel_cat_id,
                'sub_cat_id': sel_sub_cat_id,
                'overview': sub_cat_d_ov,
                'who_learn_course': sub_cat_d_lc,
                'certification': sub_cat_d_cf,
                'who_course_for': sub_cat_d_wc,
                'modules': sub_cat_d_md,
                'highlight': sub_cat_d_hg,
                'topics': sub_cat_d_tp,
                'software': sub_cat_d_st,
                'career': sub_cat_d_co,
                'images': sub_cat_d_si,
                'after_price': sub_cat_d_ap,
                'before_price': sub_cat_d_bp,
                'class': sub_cat_d_cl
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },


            success: function (response) {

                console.log(response);
            }
        });


    })
})
















// $(document).ready(function () {

//     const targetDiv = document.getElementById("main-navbar");
//     const btn = document.getElementById("miniMenu");
//     btn.onclick = function () {
//       if (targetDiv.style.display !== "none") {
//         targetDiv.style.display = "none";
//         targetDiv.style.transition = "0.5s";
//       } else {
//         targetDiv.style.display = "block";
//         targetDiv.style.transition = "0.5s";
//       }
//     };

// })


