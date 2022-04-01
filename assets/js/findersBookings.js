const tab_btns = document.querySelectorAll("[data-target-tab]");
const tab_contents = document.querySelectorAll(".transaction-form .content");

tab_btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    tab_btns.forEach((btn) => btn.classList.remove("active"));
    tab_contents.forEach((btn) => btn.classList.remove("active"));

    btn.classList.toggle("active");
    document.querySelector(btn.dataset.targetTab).classList.add("active");
  });
});


// Search query

const input = document.querySelector('#search-transaction');

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


