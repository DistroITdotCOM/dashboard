<?php if (!empty($notification)) { ?>
    <script>
        $(function() {
            message = ['bottom-right', 'info', '<?= $notification ?>'];
            $('.' + message[0]).notify({
                message: {
                    text: message[2]
                },
                type: message[1],
                fadeOut: {
                    enabled: true,
                    delay: 10000
                }
            }).show();
        });
    </script>
<?php } ?>
<div class='notifications bottom-right'></div>