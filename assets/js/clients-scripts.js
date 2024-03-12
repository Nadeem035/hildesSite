/* eslint-disable */
(function($){

	$(document).ready(function(){
		$(document).on('click', '.js-filter-item > a', function(e){
			e.preventDefault();
      $('.js-filter-item > a').removeClass('active');
      $('#load-more').removeClass('d-none');
      $(this).addClass('active');
      $('.vend-preloader').show();
			let category = $(this).data('category');

			$.ajax({
        type: 'POST',
				url: wp_ajax.ajax_url,
        dataType: 'html',
				data: {
          action: 'filter',
          category: category
        },
				success: function(result) {
          currentPage = 1;
          $('#activated_category_id').val(category);
					$('.js-filter').html(result);
          $('.vend-preloader').hide();
				},
				error: function(result) {
					console.warn(result);
				}
			});
		});

    // load more posts
    let currentPage = 1;
    $("#load-more").on("click", function (e) {
      e.preventDefault();
      currentPage++;
      let cat_id = $('#activated_category_id').val();
      $.ajax({
        type: "POST",
        url: wp_ajax.ajax_url,
        dataType: "json",
        data: {
          action: "vend_load_more",
          term: cat_id ? cat_id : '',
          paged: currentPage,
        },
        success: function (res) {
          if (currentPage >= res.max) {
            $('#load-more').addClass('d-none');
          } else {
            $('#load-more').removeClass('d-none');
          }
          
          if (currentPage >= res.max) {
            $("#load-more").addClass("d-none");
          }
          $(".js-filter").append(res.html);
        },
      });
    });
	});

})(jQuery);