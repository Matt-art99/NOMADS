gsap.registerPlugin(TextPlugin, ScrollTrigger);
        // Navbar Animation
        gsap.from('.navbar', {duration: 1.2, y: -100, opacity: 0, ease: 'bounce'});

        // Header Animation
        gsap.from('header h1', {duration: 1, x: 70, opacity: 0, delay: 0.5, ease: 'back'})
        gsap.from('header p', {duration: 1, x: -70, delay: 1, opacity: 0, ease: 'back'});
        gsap.from('header .btn-get-started', {duration : 0.7, y : 100, opacity : 0, rotateY: 360});
        gsap.to('header .btn-get-started', {duration : .6, delay: 0.7, text: 'Get Started'});
        
        // Statistic Animation
        gsap.from('.section-stats', {duration: 1.2, delay: 0.7, y: 100, opacity: 0, ease: 'bounce'});

        // Popular Header Animation
        let popularHeading = gsap.timeline({
            scrollTrigger:{
                trigger: '.popular-heading',
            }
        });
        popularHeading.from('.popular-heading', {y:200, opacity: 0, duration: 2, ease: 'elastic'});

        // Popular Content Animation
        let popularContent = gsap.timeline({
            scrollTrigger:{
                trigger:'.card-travel',
            }
        });

        const cardTravel = document.querySelectorAll('.card-travel').forEach((card, i) => {
            popularContent.from(card, {y: 300, duration: 0.7, opacity:0, ease: 'expo.out'})
        });

        // Networks Animation
        let networks = gsap.timeline({
            scrollTrigger:{
                trigger: '.networks',
            }
        });

        let networksImg = gsap.timeline({
            scrollTrigger:{
                trigger: '.section-networks .row img',
            }
        });
        networks.from('.networks', {rotateX:360, opacity: 0, duration: 2, ease: 'power3.out'});
        networks.from('.section-networks .row img', {rotateY:360, opacity: 0, duration: 2, ease: 'power3.out'});

        // Testimonial Header Animation
        let testimonialHeading = gsap.timeline({
            scrollTrigger:{
                trigger: '.testimonial-heading',
            }
        });
        testimonialHeading.from('.testimonial-heading', {y:200, opacity: 0, duration: 2, ease: 'elastic'});

        // Testimonial Content Animation
        let testimonialContent = gsap.timeline({
            scrollTrigger:{
                trigger:'.card-testimonial',
            }
        });

        const cardTestimonial = document.querySelectorAll('.card-testimonial').forEach((card, i) => {
            testimonialContent.from(card, {y: 300, duration: 0.7, opacity:0, ease: 'expo.out'})
            testimonialContent.from(card, {rotateY: 360, duration: 0.7, delay: 0.1})
        });
