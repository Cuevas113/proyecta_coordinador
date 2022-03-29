$("#selectALL").on("click", function() {
  $(".frente1").prop("checked", this.checked);
});

// if all checkbox are selected, check the selectall checkbox and viceversa
$(".frente1").on("click", function() {
  if ($(".frente1").length == $(".frente1:checked").length) {
    $("#selectALL").prop("checked", true);
  } else {
    $("#selectALL").prop("checked", false);
  }
});

$("#selectALL2").on("click", function() {
  $(".frente2").prop("checked", this.checked);
});

// if all checkbox are selected, check the selectall checkbox and viceversa
$(".frente2").on("click", function() {
  if ($(".frente2").length == $(".frente2:checked").length) {
    $("#selectALL2").prop("checked", true);
  } else {
    $("#selectALL2").prop("checked", false);
  }
});

$("#selectALL3").on("click", function() {
  $(".frente2").prop("checked", this.checked);
});

// if all checkbox are selected, check the selectall checkbox and viceversa
$(".frente2").on("click", function() {
  if ($(".frente2").length == $(".frente2:checked").length) {
    $("#selectALL3").prop("checked", true);
  } else {
    $("#selectALL3").prop("checked", false);
  }
});
