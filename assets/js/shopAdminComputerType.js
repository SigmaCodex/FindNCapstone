 // QUERY FOR TOGGLE ONLINE or OFFLINE SHOP STATUS

 $(document).ready(function(){
    if ($('#offline-regular').prop('checked')) 
       {
        $(".offline-regular").text("Activated");
       }
    else 
    {
        $(".offline-regular").text("Deactivated");
    }
 });
 $(document).ready(function(){
    if ($('#offline-vip').prop('checked')) 
       {
        $(".offline-vip").text("Activated");
       }
    else 
    {
        $(".offline-vip").text("Deactivated");
    }
 });
    
 $(document).ready(function(){
    if ($('#offline-super').prop('checked')) 
       {
        $(".offline-super").text("Activated");
       }
    else 
    {
        $(".offline-super").text("Deactivated");
    }
 });
    
    
$('#offline-regular').on('change',function(){
        if(this.checked){
            $(".offline-regular").text("Activated");
        }
        else{
            $(".offline-regular").text("Deactivated");
        }
});
$('#offline-vip').on('change',function(){
    if(this.checked){
        $(".offline-vip").text("Activated");
    }
        else{
        $(".offline-vip").text("Deactivated");
        }
});
$('#offline-super').on('change',function(){
if(this.checked){
    $(".offline-super").text("Activated");
}
    else{
    $(".offline-super").text("Deactivated");
    }
});


