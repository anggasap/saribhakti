<div class="row">
    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Ganti Password
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                </div>
            </div>
            <div>
                	<span id="event_result">
                    <?php
                    if ($this->session->flashdata('success') != '') {
                        echo '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('success') . '
						  </div>';
                    }
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="span12 alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('error') . '
						</div>';
                    }
                    ?>
                    </span>
            </div>
            <div class="portlet-body">
                <form role="form" method="post" class="cls_form_scuserprofile"
                      action="<?php echo base_url('gantipass/ubahpass'); ?>">
                    <div class="row">

                        <div class="form-body">
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label>No. Gaji</label>

                                    <div class="input-icon">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control input-medium" placeholder=""
                                               name="userId"
                                               id="id_userId" required="" value="<?php echo $this->session->userdata('user_id');  ?>"
                                               readonly
                                            >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Nama </label>

                                            <div class="input-icon">
                                                <i class="fa fa-user"></i>
                                                <input type="text" class="form-control input-large" placeholder=""
                                                       name="namaUser"
                                                       id="id_namaUser" required=""
                                                       value="<?php echo $this->session->userdata('nama');  ?>" readonly
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Password baru</label>
                                            <input type="password" class="form-control " placeholder=""
                                                   name="passwd"
                                                   id="id_passwd" required=""
                                                >
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Konfirmasi password baru</label>
                                            <input type="password" class="form-control "
                                                   name="kpasswd"
                                                   id="id_kpasswd" required=""
                                                   placeholder=""
                                                >
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-4">


                            </div>
                        </div>

                    </div>
                    <!--END ROW 1 -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button name="btnSave" class="btn blue" id="id_btnSave">
                                    <i class="m-icon-swapright m-icon-white"></i> Simpan
                                </button>

                                <button id="id_btnBatal" type="reset" class="btn default">
                                    <i class="fa fa-refresh"></i> Batal
                                </button>
                            </div>
                        </div>

                    </div>
                </form>


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
    $("#menu_root_6").addClass('start active open');
    // END MENU OPEN

    $('#id_btnSave').click(function(){
        var passwd = $('#id_passwd').val();
        var kpasswd = $('#id_kpasswd').val();
        if(passwd == kpasswd){
            return true;
        }else{
            alert("Password dan konfirmasi password tidak sama.");
            $('#id_kpasswd').val('');
            $('#id_kpasswd').focus();
            return false;
        }
    });

    $(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    });

</script>


<!-- END JAVASCRIPTS -->