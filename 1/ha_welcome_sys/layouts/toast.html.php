<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    .toast,
    .toast * {
        font-family: system-ui !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    function LoadLoginMsg() {
        toastr.options.showMethod = 'fadeIn';
        toastr.options.hideMethod = 'fadeOut';
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.progressBar = true;
        toastr.options.rtl = true;
        toastr.options.closeDuration = 5000;
        toastr.options.timeOut = 5000; // How long the toast will display without user interaction

        toastr.success('<?php echo $msg_show; ?>', 'تبریک')
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