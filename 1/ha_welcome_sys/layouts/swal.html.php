<style>
    .swal2-modal {
        direction: rtl !important;
        font-family: system-ui !important;
    }

    .swal2-title {
        border: 0 !important;
        font-size: 24px !important;
    }

    .swal2-html-container {
        border: 0 !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function LoadLoginMsg() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '<?php echo $msg_show; ?>',
            showConfirmButton: false,
            timer: 4000
        })
    }
    if (document.readyState === 'ready' || document.readyState === 'complete') {
        LoadLoginMsg()
    } else {
        document.onreadystatechange = function() {
            if (document.readyState == "complete") {
                LoadLoginMsg()
            }
        }
    }
</script>