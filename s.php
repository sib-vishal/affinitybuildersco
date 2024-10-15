<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smooth Scroll with GSAP</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* overflow: hidden;  */
            height: 100vh; /* Set the body height to viewport height */
        }
        #container {
            height: 300vh; /* Allows for scrolling */
            position: relative; /* Needed for the smooth scrolling effect */
        }
        section {
            height: 100vh; /* Each section takes full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: white;
        }
        #section1 { background: #ff7e5f; }
        #section2 { background: #feb47b; }
        #section3 { background: #7e5fff; }
        #nav {
            position: fixed;
            top: 20px;
            left: 20px;
        }
        button {
            margin: 5px;
            padding: 10px;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <div id="nav">
        <button data-target="section1">Section 1</button>
        <button data-target="section2">Section 2</button>
        <button data-target="section3">Section 3</button>
    </div>

    <div id="container">
        <section id="section1">Section 1</section>
        <section id="section2">Section 2</section>
        <section id="section3">Section 3</section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Setup smooth scroll with scrub
        const sections = document.querySelectorAll("section");
        sections.forEach((section, index) => {
            gsap.to(section, {
                scrollTrigger: {
                    trigger: section,
                    start: "top top",
                    end: "bottom top",
                    scrub: 0.5, // Adjust this value for smoothness
                },
                y: "-100%", // Scroll effect
                ease: "none" // No easing for smooth scrolling
            });
        });

        // Smooth scrolling to sections on button click
        const buttons = document.querySelectorAll('button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const targetSection = document.getElementById(targetId);
                
                // Animate scroll to target section
                gsap.to(window, {
                    scrollTo: {
                        y: targetSection.offsetTop,
                        autoKill: false
                    },
                    duration: 1,
                    ease: "power2.inOut"
                });
            });
        });
    </script>
</body>
</html>
