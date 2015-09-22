<div class="row">
    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Simulasi Pinjaman
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                </div>
            </div>
            <div class="portlet-body">


                <?php

                if (($typePinj == 3) || ($typePinj == 4) || ($typePinj == 5)) {
                    ?>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">No Anggota</div>
                        <div class="col-md-2"><?php echo $nasabahID; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-2"><?php echo $nama; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Jangka waktu</div>
                        <div class="col-md-2"><?php echo $jmlAngs; ?> bulan</div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Type pinjaman</div>
                        <div class="col-md-2">
                            <?php
                            if ($typePinj == 1) {
                                $typePinjaman = 'Terencana';
                            } elseif ($typePinj == 2) {
                                $typePinjaman = 'Cadangan';
                            } elseif ($typePinj == 3) {
                                $typePinjaman = 'Produktif';
                            } elseif ($typePinj == 4) {
                                $typePinjaman = 'Renovasi';
                            } elseif ($typePinj == 5) {
                                $typePinjaman = 'Motor';
                            }
                            echo $typePinjaman;
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead>
                                <tr>
                                    <th width='10%'>Angs Ke</th>
                                    <!--<th width='20%' >Tanggal</th>-->
                                    <th width='45%'>Pokok</th>
                                    <th width='45%'>Jasa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i = 1; $i <= $jmlAngs; $i++) {
                                    ?>
                                    <tr>
                                        <td class="kanan"><?php echo $i; ?></td>
                                        <!--<td><?php //echo $i; ?></td>-->
                                        <td class="kanan">
                                            <?php
                                            echo number_format($angsPokok, 2);
                                            ?>
                                        </td>
                                        <td class="kanan">
                                            <?php
                                            echo number_format($angsBunga, 2);
                                            ?>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                } elseif ($typePinj == 1) {
                    ?>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">No Anggota</div>
                        <div class="col-md-2"><?php echo $nasabahID; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-2"><?php echo $nama; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Jangka waktu</div>
                        <div class="col-md-2"><?php echo $jmlAngs; ?> bulan</div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Type pinjaman</div>
                        <div class="col-md-2">
                            <?php
                            if ($typePinj == 1) {
                                $typePinjaman = 'Terencana';
                            } elseif ($typePinj == 2) {
                                $typePinjaman = 'Cadangan';
                            } elseif ($typePinj == 3) {
                                $typePinjaman = 'Produktif';
                            } elseif ($typePinj == 4) {
                                $typePinjaman = 'Renovasi';
                            } elseif ($typePinj == 5) {
                                $typePinjaman = 'Motor';
                            }
                            echo $typePinjaman;
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead>
                                <tr>
                                    <th width='10%'>Angs Ke</th>
                                    <!--<th width='20%' >Tanggal</th>-->
                                    <th width='45%'>Pokok</th>
                                    <th width='45%'>Jasa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < $jmlAngs; $i++) {
                                    ?>
                                    <tr>
                                        <td class="kanan"><?php echo $j; ?></td>
                                        <!--<td><?php //echo $i; ?></td>-->
                                        <td class="kanan">
                                            <?php
                                            echo number_format($angsPokok, 2);
                                            ?>
                                        </td>
                                        <td class="kanan">
                                            <?php
                                            echo number_format(round($angsBunga[$i]), 2);
                                            ?>
                                        </td>

                                    </tr>
                                    <?php
                                    $j++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">


                        </div>

                    </div>

                <?php
                } elseif ($typePinj == 2) {
                    ?>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">No Anggota</div>
                        <div class="col-md-2"><?php echo $nasabahID; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-2"><?php echo $nama; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Jangka waktu</div>
                        <div class="col-md-2"><?php echo $jmlAngs; ?> hari</div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">Type pinjaman</div>
                        <div class="col-md-2">
                            <?php
                            if ($typePinj == 1) {
                                $typePinjaman = 'Terencana';
                            } elseif ($typePinj == 2) {
                                $typePinjaman = 'Cadangan';
                            } elseif ($typePinj == 3) {
                                $typePinjaman = 'Produktif';
                            } elseif ($typePinj == 4) {
                                $typePinjaman = 'Renovasi';
                            } elseif ($typePinj == 5) {
                                $typePinjaman = 'Motor';
                            }
                            echo $typePinjaman;
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead>
                                <tr>
                                    <th width='10%'>Angs Ke</th>
                                    <!--<th width='20%' >Tanggal</th>-->
                                    <th width='45%'>Pokok</th>
                                    <th width='45%'>Jasa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $j = 1;
                                ?>
                                <tr>
                                    <td class="kanan"><?php echo $j; ?></td>
                                    <!--<td><?php //echo $i; ?></td>-->
                                    <td class="kanan">
                                        <?php
                                        echo number_format($angsPokok, 2);
                                        ?>
                                    </td>
                                    <td class="kanan">
                                        <?php
                                        echo number_format(round($angsBunga), 2);
                                        ?>
                                    </td>

                                </tr>
                                <?php

                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php
                }
                ?>


            </div>
        </div>

    </div>
</div>

<!-- END PAGE CONTENT-->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('metronic/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<script src="<?php echo base_url('metronic/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery-migrate.min.js'); ?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('metronic/global/plugins/jquery-ui/jquery-ui.min.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap/js/bootstrap.min.js'); ?>"
        type="text/javascript"></script>
<script
    src="<?php echo base_url('metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>"
    type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery.cokie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/uniform/jquery.uniform.min.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"
        type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url('metronic/global/plugins/select2/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('metronic/admin/pages/scripts/components-pickers.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>"
        type="text/javascript"></script>

<script src="<?php echo base_url('metronic/admin/pages/scripts/ui-general.js'); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END CORE PLUGINS -->
<script src="<?php echo base_url('metronic/global/scripts/metronic.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/layout.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/demo.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/scripts/php_number_format.js') ?>"></script>
<script>

    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        ComponentsPickers.init();

    });
    // MENU OPEN
    $(".menu_root").removeClass('start active open');
    $("#menu_root_1").addClass('start active open');
    // END MENU OPEN

    $(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    });

</script>


<!-- END JAVASCRIPTS -->