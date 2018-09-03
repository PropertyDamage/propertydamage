$(document).ready(function() {
  var scribbles = {
    "changes": $(".teslovsnote .section_name.change").length,
    "additions": $(".teslovsnote .section_name.addition").length,
    "deletions": $(".teslovsnote .section_name.removal").length
  };

  console.log(scribbles);
  if (scribbles.changes == 0) {
    $(".teslovsnote .section_title.changes").remove();
  }

  if (scribbles.additions == 0) {
    $(".teslovsnote .section_title.additions").remove();
  }

  if (scribbles.deletions == 0) {
    $(".teslovsnote .section_title.deletions").remove();
  }
  $(".teslovsnote .section_title.additions span").text(scribbles.additions);
  $(".teslovsnote .section_title.changes span").text(scribbles.changes);
  $(".teslovsnote .section_title.deletions span").text(scribbles.deletions);

  var kez = {
    "size": $(".kezeiosnote .section_name").length
  };

  console.log(kez);
  if (kez.size == 0) {
    $(".kezeiosnote .section_title.count").remove();
  }
  $(".kezeiosnote .section_title.count span").text(kez.size);
})
