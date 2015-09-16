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
                <form role="form" method="post" class="cls_form_scuserprofile"
                      action="<?php echo base_url('simpinj/simulasiPinj'); ?>">
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
                                        <div class="col-md-12">
                                            <label>Type Pinjaman</label>
                                            <select name="optionsRadios" id="id_optionsRadios" class="form-control hitunghari" style="width: 200px;">
                                                <option value="1">Terencana</option>
                                                <option value="2">Cadangan</option>
                                                <option value="3">Produktif</option>
                                                <option value="4">Renovasi</option>
                                                <option value="5">Motor</option>

                                            </select>
                                            <!--
                                            <div class="radio-list">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked> Terencana </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="2"> Cadangan </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="3"> Produktif </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="4"> Renovasi </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="5"> Motor </label>
                                            </div>
                                            -->
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Tanggal Mulai</label>
                                            <input name="tglMulai" id="id_tglMulai"
                                                   class="form-control input-small form-control-inline date-picker hitunghari"
                                                   data-date-format="dd-mm-yyyy" type="text"
                                                   placeholder="dd-mm-yyyy" required
                                                   value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal akhir</label>
                                            <input name="tglAkhir" id="id_tglAkhir"
                                                   class="form-control input-small form-control-inline date-picker hitunghari"
                                                   data-date-format="dd-mm-yyyy" type="text"
                                                   placeholder="dd-mm-yyyy" required
                                                   value="">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Jumlah Pinjaman</label>
                                            <input type="text" class="form-control kanan nomor" placeholder=""
                                                   name="jumlahPinj"
                                                   id="id_jumlahPinj" required=""
                                                >
                                        </div>
                                        <div class="col-md-3">
                                            <label>Jangka waktu </label>
                                            <input type="text" class="form-control kanan nomor input-small"
                                                   name="jmlAngs"
                                                   id="id_jmlAngs" required=""
                                                    placeholder="" readonly
                                                >
                                        </div>
                                        <div class="col-md-2">
                                            <label>&nbsp; </label><br>
                                            <span id="id_ketJkw"></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label>Suku Bunga (%)</label>
                                            <input type="text" class="form-control kanan nomor" placeholder=""
                                                   name="sukuBunga"
                                                   id="id_sukuBunga" required=""
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
                                    <i class="m-icon-swapright m-icon-white"></i> Simulasi
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
    $("#menu_root_1").addClass('start active open');
    // END MENU OPEN
    $(".nomor").focusout(function(){
        if ($(this).val() == '') {
            $(this).val('0');
        }else{
            var angka =$(this).val();
            $(this).val(number_format(angka));
        }
    });
    $('.nomor').keyup(function(){
        var val = $(this).val();
        //val=val.toFixed(2);
        if(isNaN(val)){
            val = val.replace(/[^0-9\.]/g,'');
            if(val.split('.').length>2)
                val =val.replace(/\.+$/,"");
        }
        $(this).val(val);
    });

    $( ".hitunghari" ).change(function() {
        var tglMulai = $('#id_tglMulai').val();
        var tglAkhir = $('#id_tglAkhir').val();


        if((tglMulai !='') && (tglAkhir !='')){
            var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds

            var parts = tglMulai.split('-');
            var firstDate = new Date(parts[2], parts[1]-1, parts[0]);

            var parts = tglAkhir.split('-');
            var secondDate = new Date(parts[2], parts[1]-1, parts[0]);

            if($('#id_optionsRadios').val()==2){
                var jmlHari = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
                $('#id_jmlAngs').val(jmlHari);
                //$( '#id_ketJkw' ).text( '' );
                $( '#id_ketJkw' ).text( 'hari' );
                //alert(jmlHari);
            }else{
                var year1=firstDate.getFullYear();
                var year2=secondDate.getFullYear();
                var month1=firstDate.getMonth();
                var month2=secondDate.getMonth();
                if(month1===0){ //Have to take into account
                    month1++;
                    month2++;
                }
                var numberOfMonths;
                numberOfMonths = (year2 - year1) * 12 + (month2 - month1);
                //alert (numberOfMonths);
                $('#id_jmlAngs').val(numberOfMonths);
                $( '#id_ketJkw' ).text( 'bulan' );
            }
        }

    });

    $(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    });

</script>


<!-- END JAVASCRIPTS -->