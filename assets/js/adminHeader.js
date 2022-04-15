// Query for Sidebar
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
       if ($(this).parent().hasClass("active")){
    
          $(".sidebar-dropdown").removeClass("active");
          $(this).parent().removeClass("active");
       } 
       else {
          $(".sidebar-dropdown").removeClass("active");
          $(this).next(".sidebar-submenu").slideDown(200);
          $(this).parent().addClass("active");
       }
    });
       $("#close-sidebar").click(function() {
       $(".page-wrapper").removeClass("toggled");
       });
       $("#show-sidebar").click(function() {
       $(".page-wrapper").addClass("toggled");
       });
       
    });   
    
    // QUERY FOR TOGGLE ONLINE or OFFLINE SHOP STATUS
    $(document).ready(function(){
       if ($('#offline').prop('checked')) 
          {
          $(".stat-circ").css('color', 'green');
          }
       else 
       {
          $(".stat-circ").css('color', 'red');
       }
    });
    
    $('#offline').on('change',function(){
           if(this.checked){
              $(".user-status-update").text("Online");
              $(".stat-circ").css('color', 'green');
           }
            else{
               $(".user-status-update").text("Offline");
               $(".stat-circ").css('color', 'red');
            }
    });