<script type="text/javascript">
    window.askdelete = function (id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: "@lang('app_messages.local_delete_title')",
            text: "@lang('app_messages.local_delete_txt')",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: "@lang('app_messages.local_delete_no')",
            confirmButtonText: "@lang('app_messages.local_delete_yes')",
            reverseButtons: false
        }).then((result) => {
            if (result.value) {
                $('#deleteform' + id).submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    position: 'tcenter',
                    type: 'error',
                    title: "@lang('app_messages.local_msg_delete_cancel')",
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    }

</script>
