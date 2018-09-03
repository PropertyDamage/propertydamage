$(document).ready(function() {
  var windowHeight = $(window).height(),
    gridTop = windowHeight * 0.2,
    gridBottom = windowHeight * 0.8;
  $(window).on('scroll', function() {
    $('.devblog_section .section_name').each(function() {
      var thisTop = $(this).offset().top - $(window).scrollTop();

      if (thisTop > gridTop && (thisTop + $(this).height()) < gridBottom) {
            displayMemberRole(this);
      } else {
            removeMemberRole(this);

      }
    });
    $('.teslovsnote .username').each(function() {
      var thisTop = $(this).offset().top - $(window).scrollTop();

      if (thisTop > gridTop && (thisTop + $(this).height()) < gridBottom) {
            displayMemberRole(this);
      } else {
            removeMemberRole(this);

      }
    });
  });
});
