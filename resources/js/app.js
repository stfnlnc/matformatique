import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import "./bootstrap";
import "./modules/toggle_block.js";

gsap.registerPlugin(ScrollTrigger);

let mm = gsap.matchMedia();

const reveals = document.querySelectorAll(".reveal");

mm.add("(min-width: 800px)", () => {
    reveals.forEach((reveal) => {
        gsap.to(reveal, {
            opacity: 1,
            duration: 1,
            ease: "power2.inOut",
            transform: "translateY(0)",
            scrollTrigger: {
                trigger: ".reveal-container",
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
            duration: 0.8,
            delay: 0.2 * key,
            ease: "power2.inOut",
            transform: "translateY(0)",
            scrollTrigger: {
                trigger: reveal,
                start: "-100% 100%",
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
});

const marquees = document.querySelectorAll("animate-marquee");
marquees.forEach((marquee) => {
    marquee.addEventListener("mouseover", () => {
        marquees.forEach((marquee) => {
            marquee.style.anim;
        });
    });
});
