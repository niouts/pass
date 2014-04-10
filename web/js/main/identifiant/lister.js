$(document).ready(function() {
	$('.dataTable').dataTable({
		"aoColumnDefs": [
		     {"bSortable": false, "bSearchable": false, "aTargets":[-1]}
		]
	});
	
	
	$('.btnSupprimer').click(function(){
		if (confirm($('#confirmsupp').val())) {
			lancerForm('supp', $(this).attr('rel'));
		}
	});
});

function lancerForm(action, id) 
{
	if (id == undefined) {
		id = 0;
	}
	
	$('#action').val(action);
	$('#id').val(id);
	$('#frmIdentifiants').submit();
}