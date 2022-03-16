<!DOCTYPE html>
<html>
<head>
	<title>Hello Welcome to FindN</title>
    <link rel="stylesheet" type="text/css" href="assets/admin/css/computertype.css">
</head>
<body>
<div class="df-content-wrapper">
    <div class="df-overlay"></div>
    <div class="df-content">

        <section class="container df-main">
            <a href="#" id="df-contact" class="df-contact">Add Computer Type</a>
            <div class="df-modal">
                <div class="df-modal-overlay"></div>
                <div class="df-modal-content">
                    <h2>Add Computer Type</h2>
                    <input id="compshop_id" value="1" type="text">
                    <form class="df-form">
                        <div class="df-input-box">
                            <input id="comp_name" type="sujet" name="sujet" placeholder="Computer Type Name" required>
                            <label for="email"></label>
                        </div>
                        <label></label>
                        <div class="df-input-box">
                            <input id="comp_total" type="sujet" name="sujet" placeholder="Total Units" required>
                            <label for="sujet"></label>
                        </div>

                        <div class="df-input-box">
                            <input id="comp_rate" type="sujet" name="sujet" placeholder="Rate" required></input>
                            <label for="message"></label>
                        </div>
                        <div class="df-input-box">
                            <input id="comp_specs" type="sujet" name="sujet" placeholder="Specs" required>
                            <label for="sujet"></label>
                        </div>
                        <div class="df-input-box">
                            <label>Computer Image Upload: </label>
                            <input id="comp_img" type="file" accept="image/*" />
                            <label for="sujet"></label>
                        </div>
                        <input id="idbtn" value="ADD TYPE" />
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="assets/js/ctype.js"></script>
<script>
      // inserting computer type
  $(document).on("click", '#idbtn', function() {
    var shopID = $('#compshop_id').val();
    var name = $('#comp_name').val();
    var total = $('#comp_total').val();
    var rate = $('#comp_rate').val();
    var specs = $('#comp_specs').val();
    var cimage = $('#comp_img').val();
    $.ajax({
          url: "addComputerType/"+shopID,
          type: "POST",
          data:{comp_name:name,comp_total:total,comp_rate:rate,comp_specs:specs,comp_img:cimage},
          beforeSend : function()
          {
          alert("processing");
          },
          success: function(data)
          {
             alert(data);   
          }
         });
 });
</script>
</body>
</html>