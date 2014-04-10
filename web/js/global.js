$(document).ready(function(){
	$lang = $('html').attr('lang');
	
	// Table
	$.extend($.fn.dataTable.defaults, {
		"oLanguage": {
			"sUrl": "/translations/datatables." + $lang + ".txt"
		},
		"sPaginationType": "full_numbers",
		"bPaginate": true,
		"iDisplayLength": 20,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": true,
        "pRocessing":true,	        
        "bStateSave": false,
        "sDom": '<"recherche"f>tp<"clear">'
	});
	
});
