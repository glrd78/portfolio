$(document).ready(function () {
    $(".page .welcome_nav a").click(function () {
        page= $(this).attr("href");
        $.ajax({
            url: page,
            cache: false,
            success: function (html) {
                afficher(html)
                console.log(html)
            },
            error:function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus);
                
            }
        });
        return false;
    })
});

function afficher(data){
    $("#app").fadeOut(250, function () {
        $("#app").empty();
        $("#app").append(data);
        $("#app").fadeIn(250);
    });
}