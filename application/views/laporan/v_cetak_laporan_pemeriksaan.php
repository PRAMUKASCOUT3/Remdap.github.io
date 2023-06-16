<div class="card">
    <div class="col-lg-12 ">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="panel-heading-title pull-left">
                    <h6></h6>
                </div>
                <!--panel-heading-title-->
                <div class="panel-heading-buttons pull-right">
                    <div class="bs-example">
                        <ul class="clearfix">
                            <a href="">
                                <li class="btn btn-defult remove"><i class="fa fa-times"></i></li>
                            </a>

                        </ul>
                    </div>
                </div>
                <!--panel-heading-buttons-->
            </div>
            <!--panel-->
            <style>
                .line-title {
                    border: 2;
                    border-style: inset;
                    border-top: 1px solid #000;
                }
            </style>
            <div class="card-body">
                <div class="dataTableWrapper">

                    <h3> Cetak Laporan Pasien Umum</h3>
                    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?> NiceAdmin/assets/css/style.css">
                    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?> NiceAdmin/assets/css/style.css">
                    <hr class="line-title">
                    <form name="formcari" id="formcari" action="cetak" method="get" target="_blank">
                        <fieldset class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>CETAK KESELURUHAN</b></td>

                                        <td></td>
                                    </tr>


                                    <tr>
                                        <td style="width:40%"></td>

                                        <td>
                                            <a href="<?= base_url('pemeriksaan/cetak_laporan')?>" class="btn btn-primary">Print View</a>
                                            <a href="<?= base_url('pemeriksaan/print_laporan')?>" class="btn btn-warning">Print</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                    
				
            </tbody>
            </table>
            </fieldset>




				</div>
			</div>
		</div>
		<!--panel-body-->
	</div>
</div>