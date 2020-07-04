$(document).ready(()=>
{   var count = 0;
    $("#add").click(()=>
    {  
        
        var text = $("#name").val();
        if($("#name").val()=="")
        {
            alert("please enter");
        }
        else
        {
            count++;
            $("#goal").append('<br><input style="border:black" class="task" name="task'+count+'" value='+text+'  ><br>');
            $("#name").val(" ");
            $("#delete").css("display","block");
            $("#submit").css("display","block");
            
            
        }
        $('#delete').click(function()
        {
            location.reload(true);
        })

    })
})