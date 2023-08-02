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

// 왼쪽메뉴 로드
fetch("/stakeclone/_casino_left.html")
    .then((response) => response.text())
    .then((htmlData) => {
        const left = document.querySelector(".left_sidebar");
        left.innerHTML = htmlData;

        leftMenuHandle();
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
        $(".content").append(html);
    })
    .catch((error) => {
        console.log(error);
    });

// 메뉴 스크립트 모음
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

const rightClick = () => {
    const rightSidebar = document.querySelector(".right-sidebar");
    rightSidebar.classList.toggle("on");
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
//   셀렉트 옵션여부 box 활성화
//=======================================================
function handleDangerArea() {
    const siteSelect = document.querySelector(".site_select");
    const dangerArea = document.querySelector(".danger_area");

    if (siteSelect.selectedIndex === 0) {
        // .site_select의 첫 번째 옵션을 선택한 경우
        dangerArea.classList.add("box_disabled");
    } else {
        // .site_select의 첫 번째 옵션을 제외한 다른 옵션을 선택한 경우
        dangerArea.classList.remove("box_disabled");
    }
}
