jQuery(document).ready(function($) {
  //archive-filter
  var aegFilter = {};
  aegFilter.addFilter = function(slug) {
    $('.page-content').removeClass('show-all');
    $('#archive-filter-button-' + slug).addClass('active');
    $('.page-article.' + slug).addClass('active');
  }

  aegFilter.removeFilter = function(slug) {
    if ( $('.archive-filter-button.active').length ) {
      $('.page-content').addClass('show-all');
    }

    $('#archive-filter-button-' + slug).removeClass('active');
    $('.page-article.' + slug).removeClass('active');

  }

  aegFilter.init = function() {
    $('.archive-filter-button').each(function() {
      var slug = $(this).data('slug');
      var tagCount = $('.page-article.' + slug).size();
      if ( tagCount == 0 ) {
        $(this).addClass('empty');
      }
    });
  }
  
  $('.archive-filter-button').click(function() {
    var slug = $(this).data('slug');

    if ( $(this).hasClass('active') ) {
      aegFilter.removeFilter(slug);
    } else {
      aegFilter.addFilter(slug);
    }
  });

  //on page load
  aegFilter.init();

});
