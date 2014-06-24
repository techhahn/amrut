$(document).ready(function() {

    $(".alert").delay(2000).slideUp(500);

    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

    var deleteArea = function(id) {
        $.ajax({
            url: 'areas/'+id,
            type: "DELETE",
            data: {/* the id goes here */},
            success: function(data, textStatus, jqXHR) {
                console.log("success");
            }
        });
    }
});