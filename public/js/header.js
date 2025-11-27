$(document).ready(function () {
    // باز کردن منوی همبرگری
    $(".ham_icon").click(function (e) { 
        $("#hamber").removeClass("hamber"); 
        $("#hamber").addClass("hamber_dr");
        $(".overlay").fadeIn(); // نمایش لایه کدر
        $("#ex").addClass("ex_dest");
        $("#ex").removeClass("ex");
    });

    // بستن منوی همبرگری
    $("#dest_ham").click(function (e) { 
        $("#hamber").removeClass("hamber_dr"); 
        $("#hamber").addClass("hamber");
        $(".overlay").fadeOut(); 
        $("#ex").addClass("ex");
        $("#ex").removeClass("ex_dest");
    });

    // تغییر به صفحات
    $("#pages").click(function (e) { 
        $("#pages").addClass("c_green");
        $("#pages").removeClass("c_white");
        $("#cat").addClass("c_white");
        $("#cat").removeClass("c_green");
        $("#pages_data").removeClass("main_page_dr");
        $("#pages_data").addClass("main_page");
        $("#cat_data").addClass("categorys_dr");
        $("#cat_data").removeClass("categorys");
    });

    // تغییر به دسته‌بندی‌ها
    $("#cat").click(function (e) { 
        $("#pages").addClass("c_white");
        $("#pages").removeClass("c_green");
        $("#cat").addClass("c_green");
        $("#cat").removeClass("c_white");
        $("#pages_data").removeClass("main_page");
        $("#pages_data").addClass("main_page_dr");
        $("#cat_data").addClass("categorys");
        $("#cat_data").removeClass("categorys_dr");
    });
    

});
