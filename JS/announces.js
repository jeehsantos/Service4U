
//Function to view the announce
$(document).ready(function(){
    $(document).on('click','.view_data', function(){
        var announce_id = $(this).attr("id");

        //Check if the id "announce_id" has any.
         if(announce_id !== ''){
            var dados = {
                announce_id: announce_id
            };
            $.post('viewAnnounce.php', dados, function(retorna){
                //Load the content to the user
                 $("#viewAnnounceContent").html(retorna);
         
$('#viewAnnounce').modal('show'); 
            });
        } 
    });
});

 