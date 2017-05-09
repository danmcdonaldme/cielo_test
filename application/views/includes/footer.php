


<script src="<?php echo STATIC_URL; ?>assets/jquery/js/jquery.validate.js"></script>
<script src="<?php echo STATIC_URL; ?>assets/jquery/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo STATIC_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo STATIC_URL; ?>assets/js/header.js"></script>
<script>
    $(document).ready(function() {
        //hide the messages
        setTimeout(function() {
            $(".messages").hide('blind', {}, 500)
        }, 5000);
    });
</script>
</body>
</html>