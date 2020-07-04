$(document).ready(()=>
{
    $("#username").focus(()=>{
        $(".u").addClass("userorange");
        $(".u").removeClass("user");
    });
    $("#username").blur(()=>{
        $(".u").addClass("user");
        $(".u").removeClass("userorange");
    });
    $("#password1").focus(()=>{
        $(".pi1").addClass("lockorange");
        $(".pi1").removeClass("lock");
    });
    $("#password1").blur(()=>{
        $(".pi1").addClass("lock");
        $(".pi1").removeClass("lockorange");
    });
    $("#password2").focus(()=>{
        $(".pi2").addClass("lockorange");
        $(".pi2").removeClass("lock");
    });
    $("#password2").blur(()=>{
        $(".pi2").addClass("lock");
        $(".pi2").removeClass("lockorange");
    });
    $(".p1").click(()=>{
        var passfield = $("#password1");
        var passfieldtype = passfield.attr('type');
        if(passfieldtype == 'password')
        {
            passfield.attr('type','text');
            $(".p1").addClass("eyeopen");
            $(".p1").removeClass("eyeclose");
        }
        else
        {
            passfield.attr('type','password');
            $(".p1").addClass("eyeclose");
            $(".p1").removeClass("eyeopen");
        }
        
    });
    $(".p2").click(()=>{

        var passfield = $("#password2");
        var passfieldtype = passfield.attr('type');
        if(passfieldtype == 'password')
        {
            passfield.attr('type','text');
            $(".p2").addClass("eyeopen");
            $(".p2").removeClass("eyeclose");
        }
        else
        {
            passfield.attr('type','password');
            $(".p2").addClass("eyeclose");
            $(".p2").removeClass("eyeopen");
        }
    })
    
})
