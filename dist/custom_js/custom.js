//=======================================================
//   left menu
//=======================================================

fetch("/_svg_reset.html")
    .then((response) => response.text())
    .then((html) => {
        $("body").prepend(html);
    })
    .catch((error) => {
        console.log(error);
    });

fetch("/_casino_left.html")
    .then((response) => response.text())
    .then((html) => {
        $(".side-nav").html(html);

        leftMenuHandle();
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
const sidenavFold = () => {
    const wsize = window.innerWidth;
    if (wsize < 1280) {
        document.querySelector(".side-nav").classList.add("fold");
    } else {
        return false;
    }
};

window.addEventListener("resize", sidenavFold);
window.addEventListener("load", sidenavFold);

//=======================================================
//   검색 영역 - 초기화
//=======================================================
const formResetHandle = () => {
    const form = document.querySelector("form.search_form");
    form.reset();
};

//=======================================================
//   검색 영역 - 숨기기,열기
//=======================================================
const searchToggleHandle = () => {
    const openBox = document.querySelector(".search_open_box");
    const closeBox = document.querySelector(".search_close_box");
    if (openBox.classList.contains("hidden")) {
        // 열기
        openBox.classList.remove("hidden");
        closeBox.classList.add("hidden");
    } else {
        // 닫기
        openBox.classList.add("hidden");
        closeBox.classList.remove("hidden");
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
