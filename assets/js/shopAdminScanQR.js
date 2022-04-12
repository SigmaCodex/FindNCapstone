
// Get the modal
var receipt_img_modal = document.getElementById("receipt-img");

// Get the image and insert it inside the receipt-img-modal - use its "alt" text as a caption
var img = document.getElementById("gcash-receipt");
var img1 = document.getElementById("payment-method-logo");
var modalImg = document.getElementById("img01");


    img.onclick = function(){
        receipt_img_modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    img1.onclick = function(){
        receipt_img_modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-img")[0];

    // When the user clicks on <span> (x), close-img the modal
    span.onclick = function() { 
    receipt_img_modal.style.display = "none";
    }