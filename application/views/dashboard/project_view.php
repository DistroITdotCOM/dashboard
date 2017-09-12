<div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Project</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box ui-draggable ui-droppable">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-table"></i>
                        <span>Proyek</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content no-padding">
                    <table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
                        <thead>
                            <tr>
                                <th>Proyek</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Sisa</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($simpro as $key => $value) {
                                $datetime1 = new DateTime($value->project_start);
                                $datetime2 = new DateTime($value->project_end);
                                $difference = $datetime1->diff($datetime2)->days;
                                if (intval((strtotime($value->project_end) - strtotime(date("y-m-d"))) / (60 * 60 * 24)) > intval($difference * 0.4))
                                    $warna = "success";
                                elseif (intval((strtotime($value->project_end) - strtotime(date("y-m-d"))) / (60 * 60 * 24)) < intval($difference * 0.2))
                                    $warna = "danger";
                                else
                                    $warna = "warning";
                                ?>
                                <tr class="<?= ($key % 15 === 0) ? ++$i : $i; ?> <?= $warna ?>" style="display: none">
                                    <td><?= $value->project_name ?></td>
                                    <td><?= date_convert($value->project_start) ?></td>
                                    <td><?= date_convert($value->project_end) ?></td>
                                    <td><?= intval((strtotime($value->project_end) - strtotime(date("y-m-d"))) / (60 * 60 * 24)) ?> Hari</td>
                                    <td><?= $value->project_persentase . " %" ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        var z = 1;
        function loop() {
            $(".4").hide();
            $("." + (z - 1)).hide();
            $("." + z).slideDown();
            z++;
            if (z === 5) {
                z = 1;
            }
            setTimeout(loop, 5000);
        }
        loop();
        WinMove();
    });
</script>