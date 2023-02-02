<div class="row">
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

                    <h3> Cetak Laporan Lahiran </h3>
                    <link rel="stylesheet" type="text/css" href="<?= base_url('NiceAdmin/') ?> assets/css/style.css">
                    <link rel="stylesheet" type="text/css" href="<?= base_url('NiceAdmin/') ?> assets/css/style.css">
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
                                            <a href="<?= base_url('lahiran/cetak_laporan')?>" class="btn btn-primary">Print View</a>
                                            <button class="btn btn-warning" name="cetak" fdprocessedid="iff7bd"><i class="fa fa-print"></i> Print</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                    <hr class="line-title">
                    <form name="formcari" id="formcari" action="cetak" method="get" target="_blank">
                        <fieldset class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>CETAK PERPERIODE</b></td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%">Berdasarkan :</td>

                                        <td>
                                            <select class="form-control selectpicker" data-live-search="true" name="Berdasarkan" id="Berdasarkan" fdprocessedid="83532b">
                                                <option name="berdasarkan" value="">tanggal</option>
                                            </select>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td style="width:40%">Dari Tanggal :</td>
                                        <td><input type="date" name="tanggal1"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td style="width:40%">Sampai Tanggal :</td>

                                        <td><input type="date" name="tanggal2"></td>
                                    </tr>


                                    <tr>
                                        <td></td>

                                        <td>
                                            <button class="btn btn-info" name="preview" fdprocessedid="4evdsa"><i class="fa fa-info"></i> Print Preview</button>
                                            <button class="btn btn-warning" name="cetak" fdprocessedid="rp4y6p"><i class="fa fa-print"></i> Print</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>



                </div>
            </div>
        </div>
        <!--panel-body-->
    </div>
</div>