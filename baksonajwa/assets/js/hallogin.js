$(function() {
	$("input[type='password']").each(function() {
		let $this = $(this);
		$this.css({
			paddingRight: 60
		});
		$this.on("keyup", function() {
			$("#passeye-toggle").val($(this).val());
		});
		$("#passeye-toggle").on("click", function() {
			if($this.hasClass("show")) {
				$this.attr('type', 'password');
				$this.removeClass("show");
				$(this).removeClass("btn-outline-primary");
			}else{
				$this.attr('type', 'text');
				$this.val($("#passeye-toggle").val());				
				$this.addClass("show");
				$(this).addClass("btn-outline-secondary");
			}
		});
	});
});