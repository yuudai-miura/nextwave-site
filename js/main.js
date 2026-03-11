document.addEventListener("DOMContentLoaded", () => {
    // ハンバーガーメニュー
    const hamburger = document.querySelector(".hamburger_btn");
    const nav = document.querySelector(".header_nav");

    if (hamburger && nav) {
        hamburger.addEventListener("click", (e) => {
            e.stopPropagation();
            nav.classList.toggle("open");
        });

        document.addEventListener("click", (e) => {
            if (!nav.classList.contains("open")) return;
            if (nav.contains(e.target) || hamburger.contains(e.target)) return;
            nav.classList.remove("open");
        });

        nav.querySelectorAll("a").forEach((a) => {
            a.addEventListener("click", () => nav.classList.remove("open"));
        });
    }

    // メインビジュアル スライドショー制御
    const slides = document.querySelectorAll(".slider");
    if (slides.length > 0) {
        slides[0].style.opacity = "1";

        if (slides.length > 1) {
            let currentIndex = 0;
            const intervalTime = 2500;

            setInterval(() => {
                slides[currentIndex].style.opacity = "0";
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].style.opacity = "1";
            }, intervalTime);
        }
    }
});