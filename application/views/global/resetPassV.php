<div class="row">
    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Reset Password
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
                      action="<?php echo base_url('resetpass/home'); ?>">
                    <div class="row">

                        <div class="form-body">
                            <div class="col-md-6">

                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-md-6">
                                			<label>No. Gaji</label>
		                                    <div class="input-group">
		                                        <input type="text" class="form-control" placeholder=""
		                                               name="userId"
		                                               id="id_userId" required="" readonly
		                                            >
		                                            <span class="input-group-btn">
		                                                  <a href="#" class="btn green" data-target="#idDivTabelNasabah"
		                                                     data-toggle="modal">
		                                                      <span class="glyphicon glyphicon-search"></span>
		                                                  </a>
		                                                  </span>
		                                    </div>
                                		</div>
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
                                                       readonly
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="form-group">
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

                                </div> -->


                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-6">


                            </div>
                        </div>

                    </div>
                    <!--END ROW 1 -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button name="btnSave" class="btn blue" id="id_btnSave">
                                    <i class="m-icon-swapright m-icon-white"></i> Reset password
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
<!-- /.modal -->
<div id="idDivTabelNasabah" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button id="id_button_close_modal" type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Data Nasabah</h4>
            </div>

            <div class="modal-body">
                <div class="scroller" style="height:400px; ">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="id_Reload" style="display: none;"></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-body">
                                <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelNasabah">
                                    <thead>
                                    <tr>
                                        <th>
                                            Id Nasabah
                                        </th>
                                        <th>
                                            Nama Nasabah
                                        </th>
                                        <!-- <th>
                                            Alamat
                                        </th>
                                        <th>
                                            No ID
                                        </th> -->

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                    <tfoot>


                                    </tfoot>
                                </table>


                            </div>
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- END ROW-->
                </div>
                <!-- END SCROLLER-->
            </div>
            <!-- END MODAL BODY-->

            <div class="modal-footer">

                <button type="button" data-dismiss="modal" class="btn default">Batal</button>
            </div>
        </div>
    </div>
</div>
<!--  END MODAL-->

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
<!-- BEGIN DATATABLE PLUGINS -->
<script src="<?php echo base_url('metronic/global/plugins/select2/select2.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/datatables/media/js/jquery.dataTables.min.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"
        type="text/javascript"></script>
<!-- END DATATABLE PLUGINS -->
<!-- END CORE PLUGINS -->
<script src="<?php echo base_url('metronic/global/scripts/metronic.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/layout.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/demo.js'); ?>" type="text/javascript"></script>
<script>

    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        ComponentsPickers.init();
        TableManaged.init();

    });
    // MENU OPEN
    $(".menu_root").removeClass('start active open');
    $("#menu_root_2").addClass('start active open');
    // END MENU OPEN
	var TableManaged = function () {

    var initTable1 = function () {

        var table = $('#idTabelNasabah');

        // begin first table
        table.dataTable({
            "ajax": "<?php  echo base_url("/resetpass/getNasabahAll"); ?>",
            "columns": [
                { "data": "nasabah_id" },
                { "data": "nama_nasabah" }
                /* { "data": "alamat" },
                { "data": "no_id" } */

            ],
            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.


            "lengthMenu": [
                [5, 10,15, 20, -1],
                [5, 10,15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,
            "pagingType": "bootstrap_full_number",
            "language": {
                "search": "Cari: ",
                "lengthMenu": "  _MENU_ records",
                "paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
            "aaSorting": [[0,'asc']/*, [5,'desc']*/],
            "columnDefs": [{  // set default column settings
                'orderable': true,
                'targets': [0]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
        $('#id_Reload').click(function () {
            table.api().ajax.reload();
        });

        var tableWrapper = jQuery('#example_wrapper');

        table.find('.group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).attr("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });
            jQuery.uniform.update(set);
        });

        table.on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
        });
        table.on('click', 'tbody tr', function () {
            var nasabahId = $(this).find("td").eq(0).html();  
            var namaNasabah = $(this).find("td").eq(1).html();           
            $('#id_userId').val(nasabahId);
            $('#id_namaUser').val(namaNasabah);
            $('#id_button_close_modal').trigger('click');
            $('#id_userId').focus();
            /* $("#btnSimpan").attr("disabled", "disabled");
            $("#btnUbah").removeAttr("disabled");
			$("#btnHapus").removeAttr("disabled"); */

        });

        tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
    }

    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }
            initTable1();
        }
    };

}();
    /* $('#id_btnSave').click(function(){
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
 */
    /* $(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    }); */

</script>


<!-- END JAVASCRIPTS -->