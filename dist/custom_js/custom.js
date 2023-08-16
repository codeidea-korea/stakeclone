//=======================================================
//   left menu
//=======================================================
// html load

// 아이콘 로드
fetch("/stakeclone/_svg_reset.html")
    .then((response) => response.text())
    .then((html) => {
        $("body").prepend(html);
    })
    .catch((error) => {
        console.log(error);
    });

// 왼쪽메뉴 로드 (카지노)
fetch("/stakeclone/_casino_left.html")
    .then((response) => response.text())
    .then((htmlData) => {
        const left = document.querySelector(".left_sidebar");
        left.innerHTML = htmlData;
    })
    .catch((error) => {
        console.log(error);
    });

// 왼쪽메뉴 로드 (메인)
fetch("/stakeclone/_main_left.html")
    .then((response) => response.text())
    .then((htmlData) => {
        const left = document.querySelector(".main_sidebar");
        left.innerHTML = htmlData;
    })
    .catch((error) => {
        console.log(error);
    });

// 왼쪽메뉴 로드 (스포츠)
fetch("/stakeclone/_sports_left.html")
    .then((response) => response.text())
    .then((htmlData) => {
        const left = document.querySelector(".left_sidebar2");
        left.innerHTML = htmlData;

        $(".side-menu.dividend_btn").on("click", function () {
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".side-menu__title .dividend_text").text($(this).text());
        });
    })
    .catch((error) => {
        console.log(error);
    });

// 탑바 로드
fetch("/stakeclone/_top_bar.html")
    .then((response) => response.text())
    .then((html) => {
        $(".content").prepend(html);
    })
    .catch((error) => {
        console.log(error);
    });

// 오른쪽 바 로드
fetch("/stakeclone/_right_bar.html")
    .then((response) => response.text())
    .then((html) => {
        $(".right-sidebar").html(html);
    })
    .catch((error) => {
        console.log(error);
    });

// 푸터 로드
fetch("/stakeclone/_footer.html")
    .then((response) => response.text())
    .then((html) => {
        $(".container_wrap").append(html);

        setTimeout(() => {
            topbarHandle();
            customJquery();
            leftMenuHandle();
        }, 200);
    })
    .catch((error) => {
        console.log(error);
    });

//=======================================================
//   왼쪽메뉴 스크립트
//=======================================================
const leftMenuHandle = () => {
    // fold
    function toggleSideNav() {
        const sideNav = document.querySelector(".side-nav");
        sideNav.classList.toggle("fold");

        const content = document.querySelector(".content");
        content.classList.toggle("fold");

        // fold 클래스 변경 체크 함수 호출
        checkFold();
    }

    const foldBtn = document.querySelector(".fold_btn");
    foldBtn.addEventListener("click", toggleSideNav);

    // fold 클래스 체크 함수
    function checkFold() {
        const sideMenus = document.querySelectorAll(".side-menu");
        const sideNav = document.querySelector(".side-nav");

        if (sideNav.classList.contains("fold")) {
            sideMenus.forEach((menu) => {
                if (menu._tippy != undefined) {
                    menu._tippy.enable();
                }
            });
        } else {
            sideMenus.forEach((menu) => {
                if (menu._tippy != undefined) {
                    menu._tippy.disable();
                }
            });
        }
    }

    // 페이지 로드 시 fold 클래스 변경 체크 함수 호출
    checkFold();

    // 2depth
    $(".side-menu").on("click", function () {
        if ($(this).parent().find("ul").length) {
            if ($(this).parent().find("ul").first()[0].offsetParent !== null) {
                $(this).find(".side-menu__sub-icon").removeClass("transform rotate-90 bg-blue-600");
                $(this).find(".side-menu__sub-icon").addClass("bg-grey-400");
                $(this).removeClass("side-menu--open");
                $(this)
                    .parent()
                    .find("ul")
                    .first()
                    .slideUp(300, function () {
                        $(this).removeClass("side-menu__sub-open");
                    });
            } else {
                $(this).find(".side-menu__sub-icon").addClass("transform rotate-90 bg-blue-600");
                $(this).find(".side-menu__sub-icon").removeClass("bg-grey-400");
                $(this).addClass("side-menu--open");
                $(this)
                    .parent()
                    .find("ul")
                    .first()
                    .slideDown(300, function () {
                        $(this).addClass("side-menu__sub-open");
                    });
            }
        }
    });

    if ($(window).innerWidth() < 1280) {
        $(".side-nav").addClass("fold");
        $(".content").addClass("fold");
    }

    // const sidenavFold = () => {
    //     const wsize = window.innerWidth;
    //     if (wsize < 1280) {
    //         document.querySelector(".side-nav").classList.add("fold");
    //     } else {
    //         return false;
    //     }
    // };

    // window.addEventListener("load", sidenavFold);

    // 모바일 퀵
    $(".mo_quick li").on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
    });
};

//=======================================================
//   탑바 스크립트
//=======================================================
const topbarHandle = () => {
    // 클릭시 화살표 rotate
    const walletBtn = document.querySelector(".wallet_box .dropdown-toggle");
    walletBtn.addEventListener("click", (e) => {
        e.currentTarget.classList.toggle("on");
    });

    document.addEventListener("click", (e) => {
        const wallet = document.querySelector(".wallet_box");
        const walletDrop = document.querySelector(".walletDropdown");
        if (wallet && !wallet.contains(e.target) && walletDrop && !walletDrop.contains(e.target)) {
            walletBtn.classList.remove("on");
        }
    });

    // 지갑 dropdown-menu 리스트 클릭
    const walletItem = document.querySelectorAll(".wallet_search > div");
    const walletClick = (e) => {
        const cash = e.currentTarget.children[0].innerText;
        const svg = e.currentTarget.children[1].children[0].innerHTML;

        const wallet = document.querySelector(".wallet_box button span.wallet_txt");
        wallet.innerHTML = cash + `<svg class="svg-icon ml-1 mr-2">${svg}</svg>`;

        setTimeout(function () {
            var el = document.querySelector(".walletDropdown");
            var dropdown = tailwind.Dropdown.getOrCreateInstance(el);
            dropdown.hide();
            walletBtn.classList.remove("on");
        }, 100);
    };
    walletItem.forEach((item) => {
        item.addEventListener("click", walletClick);
    });

    // search 모달
    $(".search_btn").on("click", function () {
        $("#search_modal .search_modal_bg").show();
        $("#search_modal").fadeIn();
    });

    $(document).on("click", ".search_modal_close , .search_modal_bg", function () {
        $("#search_modal .search_modal_bg").hide();
        $("#search_modal").hide();
        $("#search_modal .result_search_box").hide();
    });
    // search 포커스 시 결과창
    $("#search_modal .search_form input").on("focus", function () {
        $("#search_modal .result_search_box").show();
    });
};

// 메뉴 접었다 펴기
// document.addEventListener("DOMContentLoaded", function () {
//   function toggleSideNav() {
//     const sideNav = document.querySelector(".side-nav");
//     sideNav.classList.toggle("fold");
//   }

//   const foldBtn = document.querySelector(".fold_btn");
//   foldBtn.addEventListener("click", toggleSideNav);
// });

//=======================================================
//   화면 줄어들면 메뉴 접기
//=======================================================
let right_on = "";
const rightClick = (item) => {
    if (item == "close" || right_on == item) {
        $(".right-sidebar").removeClass("on");
        $(".content").removeClass("right_open");
        setTimeout(() => {
            $(`.right-sidebar > div`).hide();
        }, 400);
        right_on = "";
    } else {
        if (item == "menu_right") {
            $(".right-sidebar").addClass("on mo_he_view");
        } else {
            $(".right-sidebar").addClass("on");
            $(".right-sidebar").removeClass("mo_he_view");
        }
        $(".content").addClass("right_open");
        $(`.right-sidebar > div`).hide();
        $(`.right-sidebar .${item}`).show();
        right_on = item;
    }

    if (item == "chatting_right" || item == "batting_right") {
        setTimeout(function () {
            var el = document.querySelector(".chattingDropdown");
            var dropdown = tailwind.Dropdown.getOrCreateInstance(el);
            dropdown.hide();
        }, 100);
    }
};

//=======================================================
//   영역 - 숨기기,열기
//=======================================================
function toggleSections(button) {
    // 해당 버튼이 속한 부모 요소의 클래스명에서 "hidden" 클래스를 toggle하여 보이기/숨기기 처리
    const parentSection = button.closest(".on_off");
    const baseSection = parentSection.querySelector(".base");
    const openSection = parentSection.querySelector(".open");

    baseSection.classList.toggle("hidden");
    openSection.classList.toggle("hidden");
}

//=======================================================
//   공통 - 모달
//=======================================================
const modalOpen = (modal) => {
    const deleteModal = document.getElementById(modal);
    deleteModal.classList.add("show", "overflow-y-auto");
    deleteModal.style.marginTop = "0px";
    deleteModal.style.marginLeft = "0px";
    deleteModal.style.paddingLeft = "0px";
    deleteModal.style.zIndex = "10000";
};

//=======================================================
//   페이지 로딩
//=======================================================
// 페이지 로딩이 시작될 때 실행할 함수
function showLoadingSvg() {
    const loadingContainer = document.getElementById("loadingContainer");
    loadingContainer.style.display = "flex";
}

// 페이지 로딩이 완료된 후 실행할 함수
function hideLoadingSvg() {
    const loadingContainer = document.getElementById("loadingContainer");
    loadingContainer.style.display = "none";
}

// 페이지 로딩 시작 시 showLoadingSvg() 함수 호출
window.addEventListener("load", function () {
    showLoadingSvg(); // 로딩 시작 시 바로 SVG 표시

    // 3초 후에 hideLoadingSvg() 함수 호출
    setTimeout(hideLoadingSvg, 500); // 3초(3000ms)로 설정
});

//=======================================================
//   커스텀 js
//=======================================================
const customJquery = () => {
    // 검색 커스텀
    $(".container_wrap .search_form input").on("focus", function () {
        $(".container_wrap .search_wrap .search_modal_bg").show();
        $(".container_wrap .search_wrap .no_search_box").show();
        $(".container_wrap .search_wrap .search_close").show();
    });
    $(".container_wrap .search_wrap .search_modal_bg , .container_wrap .search_wrap .search_close").on("click", function () {
        $(".container_wrap .search_wrap .no_search_box").hide();
        $(".container_wrap .search_wrap .result_search_box").hide();
        $(".container_wrap .search_wrap .search_modal_bg").hide();
        $(".container_wrap .search_wrap .search_close").hide();
    });

    $(".container_wrap .search_form input").on("keyup", function (e) {
        if (e.target.value.length > 0) {
            $(".container_wrap .search_wrap .result_search_box").show();
        } else {
            $(".container_wrap .search_wrap .result_search_box").hide();
        }
    });

    $(".menu_right .search_form input").on("focus", function () {
        $(".menu_right .search_wrap .search_modal_bg").show();
        $(".menu_right .search_wrap .no_search_box").show();
        $(".menu_right .search_wrap .search_close").show();
    });
    $(".menu_right .search_wrap .search_modal_bg , .menu_right .search_wrap .search_close").on("click", function () {
        $(".menu_right .search_wrap .no_search_box").hide();
        $(".menu_right .search_wrap .result_search_box").hide();
        $(".menu_right .search_wrap .search_modal_bg").hide();
        $(".menu_right .search_wrap .search_close").hide();
    });

    $(".menu_right .search_form input").on("keyup", function (e) {
        if (e.target.value.length > 0) {
            $(".menu_right .search_wrap .result_search_box").show();
        } else {
            $(".menu_right .search_wrap .result_search_box").hide();
        }
    });

    // select 커스텀
    // option_box toggle
    $(".select_custom .select_toggle_btn").on("click", function (e) {
        $(".select_custom .option_box").hide();
        $(".select_custom .select_toggle_btn").removeClass("active");

        $(this).next(".option_box").toggle();
        $(this).toggleClass("active");
    });

    // 바깥 클릭했을때 option 닫기
    $("body").on("click", function (e) {
        if (!$(e.target).closest(".select_custom").length) {
            $(".select_custom .option_box").hide();
            $(".select_custom .select_toggle_btn").removeClass("active");
        }
    });

    // option 클릭했을때 값 변경, option_box 닫기
    $(".select_custom .click_option.option_box button").on("click", function () {
        const value = $(this).find("span").text();

        if ($(this).parents(".option_box").hasClass("language_option")) {
            // 채팅 > 언어 클릭시
            const img = $(this).find("i").html();
            $(this)
                .parents(".select_custom")
                .find(".select_toggle_btn span")
                .html(img + "Stake: " + value);
        } else if ($(this).parents(".option_box").hasClass("img_option")) {
            const svg = $(this).find("svg").html();
            $(this).parents(".select_custom").find(".select_toggle_btn span").text(value);
            $(this).parents(".select_custom").find(".select_toggle_btn .svg_img").html(svg);
        } else {
            $(this).parents(".select_custom").find(".select_toggle_btn span").text(value);
        }

        $(this).addClass("active").siblings().removeClass("active");
        $(this).parents(".option_box").hide();
        $(this).parents(".select_custom").find(".select_toggle_btn").removeClass("active");
    });

    // input check 했을 때,
    $(".select_custom .input_option.option_box input").on("change", function () {
        if ($(this).prop("checked")) {
            $(this).parents("button").addClass("active");
            $(this).parents("button").siblings().addClass("off");
        } else {
            $(this).parents("button").removeClass("active");
        }

        let checked = 0;
        $(this)
            .parents(".option_box")
            .find("button")
            .each(function (index, item) {
                if ($(item).find("input").prop("checked")) {
                    checked += 1;
                }
            });
        if (checked > 0) {
            $(this).parents(".select_custom").find(".select_toggle_btn span i").addClass("on").text(checked);
        } else {
            $(this).parents(".select_custom").find(".select_toggle_btn span i").removeClass("on");
        }
    });

    $(".select_custom .input_option.option_box .clear_btn").on("click", function () {
        $(this).parents(".select_custom").find(".select_toggle_btn").removeClass("active");
        $(this).parents(".select_custom").find(".select_toggle_btn span i").removeClass("on").text("");
        $(this).parents(".select_custom").find(".option_box").hide();
        $(this)
            .parents(".option_box")
            .find("button")
            .each(function (index, item) {
                $(item).removeClass("active off");
                $(item).find("input").prop("checked", false);
            });
    });
};

function toggleHandle(item) {
    const hiddenItems = document.querySelectorAll(`.${item}`);
    hiddenItems.forEach((item) => {
        if (item.classList.contains("hidden")) {
            item.classList.remove("hidden");
        } else {
            item.classList.add("hidden");
        }
    });
}
