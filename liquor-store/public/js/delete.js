$(document).ready(function () {
    $("#user-checkbox").click(function () {
        let check = $("#user-checkbox").is(":checked");
        $('.user-checked').not(this).prop('checked', check);
    })
    $(".user-checked").click(function () {
        let check = $(this).is(":checked");
        let checkAll = $("#user-checkbox").is(":checked");

        if (check === false && checkAll === true) {
            $('#user-checkbox').prop("checked", false)
        }
    })
    $("#user-delete").click(function () {
        let checkbox = $(".user-checked")
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
            url: origin + '/admin/users/delete',
            method: 'POST',
            data: {
                deleteId: deleteId
            },
            success: function (res) {
                if (res.status === 'success') {
                    for (let i = 0; i < deleteId.length; i++) {
                        $('#user-item' + deleteId[i]).remove();
                    }                }
            },
            error: function (error) {

            }
        })

    });
})
