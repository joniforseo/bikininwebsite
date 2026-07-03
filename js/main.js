document.addEventListener('DOMContentLoaded', () => {
    // FAQ Infinite Slider Clone
    const faqTrack = document.getElementById('faqSlider');
    if (faqTrack) {
        // Clone all slides to allow smooth infinite scrolling
        const slides = Array.from(faqTrack.children);
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            faqTrack.appendChild(clone);
        });
    }

    // Testimonial Infinite Slider Clone
    const testiTrack = document.getElementById('testiSlider');
    if (testiTrack) {
        // Clone all slides to allow smooth infinite scrolling
        const slides = Array.from(testiTrack.children);
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            testiTrack.appendChild(clone);
        });
    }

    // Form Submission (Simulated)
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = contactForm.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = 'Mengirim...';
            
            setTimeout(() => {
                btn.innerText = 'Pesan Terkirim!';
                btn.style.backgroundColor = '#10b981';
                contactForm.reset();
                
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.style.backgroundColor = '';
                }, 3000);
            }, 1500);
        });
    }

    // Scroll Animation for Navbar
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.style.boxShadow = '0 4px 6px -1px rgba(0,0,0,0.05)';
        } else {
            nav.style.boxShadow = 'none';
        }
    });
});
