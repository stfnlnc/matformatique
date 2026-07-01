import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import "./bootstrap";
import "./modules/toggle_block.js";

gsap.registerPlugin(ScrollTrigger);

const reveals = document.querySelectorAll(".reveal");

reveals.forEach((reveal) => {
    gsap.to(reveal, {
        opacity: 1,
        duration: 1,
        ease: "power2.inOut",
        transform: "translateY(0)",
        scrollTrigger: {
            trigger: reveal,
            start: "top 70%",
            end: "bottom bottom",
            markers: false,
        },
    });
});

const reveals4 = document.querySelectorAll(".reveal-4");

reveals4.forEach((reveal, key) => {
    gsap.to(reveal, {
        opacity: 1,
        duration: 1,
        delay: 0.2 * key,
        ease: "power2.inOut",
        transform: "translateY(0)",
        scrollTrigger: {
            trigger: reveal,
            start: "top 100%",
            end: "bottom bottom",
            markers: false,
        },
    });
});

const reveals5 = document.querySelectorAll(".reveal-5");

reveals5.forEach((reveal, key) => {
    gsap.to(reveal, {
        opacity: 1,
        duration: 0.6,
        delay: 0.2 * key,
        ease: "power2.inOut",
        scrollTrigger: {
            trigger: ".reveal-5-container",
            start: "top 90%",
            end: "bottom bottom",
            markers: false,
        },
    });
});
