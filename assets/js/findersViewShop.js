function myFunctionComment() {
    var x = document.getElementById("comment_text");
    if (x.innerHTML === "Comment") {
      x.innerHTML = "Comments";
      x.style.color = "#FF5D31";
      x.style.fontWeight = "700";
      $("#comments").show();
    } else {
      x.innerHTML = "Comment";
      x.style.color = "";
      $("#comments").hide();
    }
  }