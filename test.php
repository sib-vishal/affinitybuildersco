<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smooth Fade Up Heading</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        h1 {
            opacity: 0; 
            transform: translateY(30px); 
            font-size: 3rem; 
            transition: transform 0.5s ease-out, opacity 0.5s ease-out; 
        }
    </style>
</head>
<body>
    <h1 id="fade-up-heading">A HEADING</h1>

    <script>
        // GSAP animation
        gsap.to("#fade-up-heading", {
            duration: 1, // Duration of the animation in seconds
            opacity: 1, // Fade in to full opacity
            y: -30, // Move up 30 pixels
            ease: "power2.out", // Easing function for a smooth effect
            onComplete: () => console.log("Animation complete!") // Optional callback
        });
    </script>
</body>
</html>
