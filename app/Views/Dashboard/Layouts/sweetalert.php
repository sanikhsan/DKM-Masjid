
<!-- Gagal -->
<script>
    $(function(){
        <?php if(session()->has("error")) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '<?= session("error") ?>'
            })
        <?php } ?>
    });
</script>

<!-- Warning -->
<script>
    $(function(){
        <?php if(session()->has("warning")) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Oops!',
                text: '<?= session("warning") ?>'
            })
        <?php } ?>
    });
</script>

<!-- Sukses -->
<script>
    $(function(){
        <?php if(session()->has("success")) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '<?= session("success") ?>'
            })
        <?php } ?>
    });
</script>

<!-- Info -->
<script>
$(function(){

    <?php if(session()->has("info")) { ?>
        Swal.fire({
            icon: 'info',
            title: 'Pemberitahuan!',
            text: '<?= session("info") ?>'
        })
    <?php } ?>
});
</script>