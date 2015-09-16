
<div class="row">
    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Info Rekening
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <!--<h3>Default Tab</h3>-->
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <li class="active">
                            <a href="#tab_15_1" data-toggle="tab">
                                Pinjaman </a>
                        </li>
                        <li>
                            <a href="#tab_15_2" data-toggle="tab">
                                Simpanan </a>
                        </li>
                        <li>
                            <a href="#tab_15_3" data-toggle="tab">
                                Simpanan Berjangka </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_15_1">
                            <p>
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead >
                                <tr>
                                    <th width='10%'>No Rekening</th>
                                    <th width='20%' align='center'>Jenis Pinj</th>
                                    <th width='10%' align='center'>Suku Bunga</th>
                                    <th width='15%' align='center'>Jangka Waktu</th>
                                    <th width='15%' align='center'>Jatuh Tempo</th>
                                    <th width='15%' align='center'>BD Pokok</th>
                                    <th width='15%' align='center'>BD Jasa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($infoPinj as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row->norek; ?></td>
                                        <td><?php echo $row->DESKRIPSI_JENIS_KREDIT; ?></td>
                                        <td class="kanan"><?php echo number_format($row->SUKU_BUNGA_PER_TAHUN,2); ?></td>
                                        <td class="kanan"><?php echo number_format($row->BI_JANGKA_WAKTU,2); ?></td>
                                        <td class="kanan">
                                            <?php
                                            echo date('d-m-Y', strtotime($row->TGL_JATUH_TEMPO));
                                            ?></td>
                                        <td class="kanan"><?php echo number_format($row->POKOKAKHIR,2); ?></td>
                                        <td class="kanan"><?php echo number_format($row->BUNGAAKHIR,2); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_15_2">
                            <p>
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead >
                                <tr>
                                    <th width='20%' >Norekening</th>
                                    <th width='40%' >Jenis Simpanan</th>
                                    <th width='20%' >Tanggal Registrasi</th>
                                    <th width='20%' >Saldo Akhir</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($infoTab as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row->norek; ?></td>
                                        <td><?php echo $row->DESKRIPSI_JENIS_TABUNGAN; ?></td>
                                        <td class="kanan">
                                            <?php
                                            echo date('d-m-Y', strtotime($row->TGL_REGISTRASI));
                                            ?>
                                        </td>
                                        <td class="kanan"><?php echo number_format($row->SALDOAKHIR,2); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_15_3">
                            <table class='table table-striped table-bordered table-advance table-hover' id="">
                                <thead >
                                <tr>
                                    <th width='20%' >Norekening</th>
                                    <th width='20%' >Jenis Simp. Berjangka</th>
                                    <th width='15%' >Tanggal Registrasi</th>
                                    <th width='15%' >Tanggal Jatuh Tempo</th>
                                    <th width='10%' >Suku Bunga</th>
                                    <th width='20%' >Saldo Akhir</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($infoDep as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row->norek; ?></td>
                                        <td><?php echo $row->DESKRIPSI_JENIS_DEPOSITO; ?></td>
                                        <td class="kanan">
                                            <?php
                                            echo date('d-m-Y', strtotime($row->TGL_REGISTRASI));
                                            ?>
                                        </td>
                                        <td class="kanan">
                                            <?php
                                            echo date('d-m-Y', strtotime($row->TGL_JT));
                                            ?>
                                        </td>
                                        <td class="kanan">
                                            <?php
                                            echo number_format($row->SUKU_BUNGA,2);
                                            ?>
                                        </td>
                                        <td class="kanan"><?php echo number_format($row->SALDOAKHIR,2); ?></td>
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


    $(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    });

</script>


<!-- END JAVASCRIPTS -->