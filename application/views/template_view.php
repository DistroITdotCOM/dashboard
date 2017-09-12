<?= $header ?>
<body>
    <?php $this->load->view('navbar_view') ?>
    <div id="main" class="container-fluid sidebar-show">
        <div class="row">
            <?php
            $this->load->view('left_view');
            $this->load->view($component, $rs_component);
            $this->load->view('footer_view');
            ?>
        </div>
    </div>
    <?php foreach ($js as $value) { ?>
        <script src="<?= base_url('res/js/' . $value) ?>"></script>
    <?php } ?>
</body>
</html>