$(document).ready(function () {
    $("#product-checkbox").click(function () {
        console.log('rrh')
        let check = $("#product-checkbox").is(":checked");
        $('.product-checked').not(this).prop('checked', check);
    })
    $(".product-checked").click(function () {
        let check = $(this).is(":checked");
        let checkAll = $("#product-checkbox").is(":checked");

        if (check === false && checkAll === true) {
            $('#product-checkbox').prop("checked", false)
        }
    })
    $("#product-delete").click(function () {
        let checkbox = $(".product-checked")
        let deleteId = []
        for (let i = 0; i < checkbox.length; i++) {
            if (checkbox[i].checked) {
                deleteId.push(checkbox[i].value)
            }
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: origin + '/products/delete',
            method: 'POST',
            data: {
                deleteId: deleteId
            },
            success: function (res) {
                if (res.status === 'success') {
                    for (let i = 0; i < deleteId.length; i++) {
                        $('#product-item' + deleteId[i]).remove();
                    }                }
            },
            error: function (error) {

            }
        })

    });
})
