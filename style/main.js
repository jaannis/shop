//select all checkboxes
$(document).ready(function() {
  $("#checkAll").click(function() {
    $(".checkbox").prop("checked", this.checked);
  });
});

//for change typeswitcher
function fieldInput(sel) {
  var select = sel.value;
  console.log(select);
  switch (select) {
    case "Size":
      $("#sizeField").show(0);
      $("#dimensionField").hide(0);
      $("#weightField").hide(0);
      break;

    case "Dimensions":
      $("#sizeField").hide(0);
      $("#dimensionField").show(0);
      $("#weightField").hide(0);
      break;

    case "Weight":
      $("#sizeField").hide(0);
      $("#dimensionField").hide(0);
      $("#weightField").show(0);
      break;
  }
}
