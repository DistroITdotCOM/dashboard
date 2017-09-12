<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= base_url('res/img/favicon.png') ?>">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <?= $css ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?= $lib ?> 
        <script>
            var site = "<?= base_url() ?>";
            var loading_image_large = "<?= base_url('res/img/loading_large.gif') ?>";
            var loading_image_small = "<?= base_url('res/img/loading.gif') ?>";
        </script>
        <?= $js ?> 
    </head>