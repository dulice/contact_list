$(".open").click(function() {
    console.log("open");
    $(".sidebar").animate({marginLeft: "0"});
});

$(".fa-xing").click(function() {
    console.log("close");
     $(".sidebar").animate({marginLeft: "-100%"});
});

$(".full-screen-btn").click(function() {
    $(this).closest(".card").toggleClass("full-screen-mode");
    $(this).toggleClass("feather-minimize-2");
})

function linkClick(url) {
    location.href = url;
}