<script>
$(function(){

	// Popular Post Search
	$(".popularPostSearchInput").on("keyup", function() {
	    var value = $(this).val();
	    $this = $(this);
	    $(".widget_hildes_posts_thumb article.item").each(function(index, val) {
	    	$(this).toggle($(this).attr('data-title').toLowerCase().indexOf(value) > -1);
	    });
	});



});//onload

</script>