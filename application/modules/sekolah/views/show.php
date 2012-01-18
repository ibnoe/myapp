<!DOCTYPE html>
<html >
    <head>
        <link rel="stylesheet" href="<?php echo base_url()?>stylesheets/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
        <link type="text/css" href="<?php echo base_url()?>stylesheets/ui.jqgrid.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url()?>stylesheets/jquery.searchFilter.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() ?>stylesheets/css.css" type="text/css"  media="screen" /></link>
				<script src="<?php echo base_url() ?>javascripts/jquery.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url() ?>javascripts/jquery-ui.min.js" type="text/javascript"></script>
				<script type="text/javascript" src="<?php echo base_url(); ?>javascripts/jqgrid/js/i18n/grid.locale-en.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascripts/jqgrid/jquery.jqGrid.min.js"></script>
        <title>Daftar SMA SMK se Jawa Timur</title>
    </head>
    <body>
        <?php
            $ci =& get_instance();
            $base_url = base_url();
        ?>

        <script type="text/javascript">
              $(document).ready(function () {
                $("#list1").jqGrid({
                   url:'<?php echo $base_url.'index.php/sekolah/loadDataGrid'?>',     //another controller function for generating data
                    mtype : "POST",             //Ajax request type. It also could be GET
                    datatype: "json",            //supported formats XML, JSON or Arrray
                    colNames:["NPSN","NSS","Nama","Jenjang","Status","Kota","Kecamatan","Desa","Alamat","NIP Kepala Sekolah","Nama Kepala Sekolah","Status"],       //Grid column headings
                    colModel:[
                        {name:"npsn",index:"npsn", width:20, align:"left"},
                        {name:"nss",index:"nss", width:30, align:"left"},
                        {name:"nama",index:"nama", width:60, align:"left"},
                        {name:"jenjang",index:"jenjang", width:45, align:"left"},
                        {name:"status",index:"status", width:30, align:"left"},
                        {name:"kota",index:"kota", width:20, align:"left"},
                        {name:"kecamatan",index:"kecamatan", width:20, align:"left"},
                        {name:"desa",index:"desa", width:20, align:"left"},
                        {name:"alamat",index:"alamat", width:40, align:"left"},
                        {name:"nip_ks",index:"nip_ks", width:25, align:"left"},
                        {name:"nama_ks",index:"nama_ks", width:40, align:"left"},
                        {name:"update_status",index:"update_status", width:10, align:"left"}
                    ],
                    rownumbers:true,
                    rowNum:50,
                    width: 1000,
                    height: "auto",
                    rowList:[50,100,150,],
                    pager:"#pager1",
                    sortname: "id",
                    viewrecords: true,
                    rownumbers: true,
                    gridview: true,
                    caption:"Daftar SMA / SMK se-Jawa Timur"
                }).navGrid("#pager1",{edit:false,add:false,del:false}, {}, {}, {}, {multipleSearch:true});
            });
        </script>
				<div id="content">

	        <table id="list1"></table> <!--Grid table-->
	        <div id="pager1"></div>  <!--pagination div-->
        </div>
    </body>
</html>