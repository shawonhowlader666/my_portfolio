import './bootstrap';
import Alpine from 'alpinejs';

import intersect from '@alpinejs/intersect';

window.Alpine = Alpine;

Alpine.plugin(intersect);
Alpine.start();

import Lenis from 'lenis'

// Initialize Lenis
const lenis = new Lenis({
    autoRaf: true,
});

// Scroll Animation Logic
// Scroll Animation Logic
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const handleIntersect = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;

                // If it's a group, animate all children simultaneously
                if (el.classList.contains('scroll-trigger-group')) {
                    const children = el.querySelectorAll('[class*="scroll-animate"]');
                    children.forEach(child => {
                        child.classList.remove('opacity-0');
                        if (child.classList.contains('scroll-animate-left')) {
                            child.classList.add('animate-slide-in-left');
                        } else if (child.classList.contains('scroll-animate-right')) {
                            child.classList.add('animate-slide-in-right');
                        } else {
                            child.classList.add('animate-fade-in-up');
                        }
                    });
                    observer.unobserve(el);
                    return;
                }

                // Normal single element animation
                el.classList.remove('opacity-0');
                if (el.dataset.animate === 'left') {
                    el.classList.add('animate-slide-in-left');
                } else if (el.dataset.animate === 'right') {
                    el.classList.add('animate-slide-in-right');
                } else {
                    el.classList.add('animate-fade-in-up');
                }
                observer.unobserve(el);
            }
        });
    };

    const observer = new IntersectionObserver(handleIntersect, observerOptions);

    // Observe Groups
    document.querySelectorAll('.scroll-trigger-group').forEach(el => {
        observer.observe(el);
        // Initialize children opacity
        el.querySelectorAll('[class*="scroll-animate"]').forEach(child => {
            child.classList.add('opacity-0');
        });
    });

    // Observe Standalone Elements (Not in a group)
    document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right').forEach(el => {
        if (!el.closest('.scroll-trigger-group')) {
            el.classList.add('opacity-0');
            observer.observe(el);
            if (el.classList.contains('scroll-animate-left')) el.dataset.animate = 'left';
            else if (el.classList.contains('scroll-animate-right')) el.dataset.animate = 'right';
            else el.dataset.animate = 'up';
        }
    });
});
