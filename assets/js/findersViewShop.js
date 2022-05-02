// function myFunctionComment() {
//   alert("ij");
//     var x = document.getElementById("comment_text");
//     if (x.innerHTML === "Comment") {
//       x.innerHTML = "Comments";
//       x.style.color = "#FF5D31";
//       x.style.fontWeight = "700";
//       $("#comments").show();
//     } else {
//       x.innerHTML = "Comment";
//       x.style.color = "";
//       $("#comments").hide();
//     }
//   }
  $(document).on("click",".comment", function(){
    var stat =  $(this).parent().parent().parent().parent().find('.comments-section-area').attr('status');
    $(this).parent().parent().parent().parent().find('.comments-section-area').show();
    $(this).parent().parent().parent().parent().find('.comments-section-area').attr('status', 'active');
    if(stat == "active"){
      $(this).parent().parent().parent().parent().find('.comments-section-area').hide();
      $(this).parent().parent().parent().parent().find('.comments-section-area').attr('status', '');
    }
});