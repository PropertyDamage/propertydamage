var g_gallery;

function open_gallery(trigger_element) {
  var gallery_element = $(trigger_element).children().clone();
  var gallery = $(".templates .popgallery").clone();
  console.log(gallery);
  console.log(gallery_element);
  $(gallery).find(".element").append(gallery_element);
  $("#overlay").append(gallery);
  $("#overlay").css("pointer-events","all");
}

function close_gallery(trigger_element) {
  $(trigger_element).parent().remove();
  $("#overlay").css("pointer-events","none");
}
