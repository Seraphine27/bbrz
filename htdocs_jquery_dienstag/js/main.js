function submitForm(){
    // var firstname = $("#firstname").val();
    // var lastname = $("#lastname").val();
    // var email = $("#email").val();
    // var location = $("#location").val();


    // console.info(firstname);

    var str= $("#contactForm").serialize();

    $.ajax({
        type: "POST",
        url: "test.php",
        data: str,
        success: function (){
            console.info('Form Submitted');
            $("#contactForm").hide();
            $("#result").text("you got scammed");
        },
        error: function(){
            alert('error alert');
        }
    });

}

$(document).ready(function(){
    $("#drop1").click(function(){
        $("#p1").slideToggle();
    });
});

$(document).ready(function(){
    $("#drop2").click(function(){
        $("#p2").slideToggle();
    });
});

$(document).ready(function(){
    $("#drop3").click(function(){
        $("#p3").slideToggle();
    });
});

$(document).ready(function(){
    $("#drop4").click(function(){
        $("#p4").slideToggle();
    });
});
