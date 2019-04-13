$(document).ready(function() {

	/*
	 * Xử lý sự kiện trên slidebar ở trang admin.
	 */
		// cursor: pointer;
	$(".item-parent-title").click(function(event) {
		$(this).parent().find('.item-child').toggle();
	});

	/*
	 * Hàm filter trên bảng ở trang admin.
	 */
	$("#searchTable").on("keyup", function(){
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
      		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    	});
	});

	$("div.alert").delay(3000).slideUp();

});

function verifyDelete(msg) {
	if(window.confirm(msg)) {
		return true;
	}
	return false;
}