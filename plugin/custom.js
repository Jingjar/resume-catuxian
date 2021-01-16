$("document").ready(function () {
    $("#navbar a,#top").click(function () {
        const theid = $(this).attr("href");
        const val = $(theid).offset().top-$("#navbar").innerHeight()-10
        $("html").animate(
            { scrollTop: val }, 1000, "swing"
        );
    })
    // $("#myWork").slick({
    //     dots:true,
    //     infinite: true,
    //     slidesToShow: 2,
    // });
})