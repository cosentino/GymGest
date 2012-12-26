$(document).ready(function(){
    if ($.fn.dataTable) {
        
        //$(".table.columnFiltered").dataTable().columnFilter();

        
        $(".table").dataTable({
            sDom: "<'dt_header'<'row-fluid'<'span6'l><'span6'T>>r>t<'dt_footer'<'row-fluid'<'span6'i><'span6'p>>>",
            oTableTools: {
                sSwfPath: "plugins/datatables/TableTools/swf/copy_csv_xls_pdf.swf",
                aButtons: [{
                    sExtends: "copy",
                    sButtonText: '<i class="icol-clipboard-text"></i> Copy'
                }, {
                    sExtends: "csv",
                    sButtonText: '<i class="icol-doc-excel-csv"></i> CSV'
                }, {
                    sExtends: "xls",
                    sButtonText: '<i class="icol-doc-excel-table"></i> Excel'
                }, {
                    sExtends: "pdf",
                    sButtonText: '<i class="icol-doc-pdf"></i> PDF'
                }, {
                    sExtends: "print",
                    sButtonText: '<i class="icol-printer"></i> Print'
                }]
            }
        });
    
    }
});