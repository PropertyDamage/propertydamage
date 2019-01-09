function gottem(ele) {
  console.log(ele);
  var link = $(ele).attr('var');
  $('.post').attr("value", link);
  $('.redirect').submit();
}
