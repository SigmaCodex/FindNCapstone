// see more

$(document).ready(function() {
    $("#toggle").click(function() {

      var elem = $("#toggle").text();
      if (elem == "Show More") {
        //Stuff to do when btn is in the read more state
        $("#toggle").text("Show Less");
        $("#text").slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        $("#toggle").text("Show More");
        $("#text").slideUp();

      }

    });
});

// Click like
function myFunctionLike() {
    var x = document.getElementById("like");
    if (x.innerHTML === "Like") {
      x.innerHTML = "Liked";
      x.style.color = "#FF5D31";
      x.style.fontWeight = "700";
      $("#liked").show();
    } else {
      x.innerHTML = "Like";
      x.style.color = "";
      $("#liked").hide();
    }
  }



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