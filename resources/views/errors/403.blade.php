<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes alarmOn {
            to {
                fill: darkred;
            }
        }
        .alarm {
            animation: alarmOn 0.5s infinite;
        }
    </style>
    <title>Forbidden 403</title>
</head>
<body class="bg-gray-900 text-white font-bungee text-center mt-12">
    <svg xmlns="http://www.w3.org/2000/svg" id="robot-error" viewBox="0 0 260 118.9" class="w-1/2 mx-auto">
        <defs>
            <clipPath id="white-clip">
                <circle id="white-eye" fill="#cacaca" cx="130" cy="65" r="20"/>
            </clipPath>
            <text id="text-s" class="text-8xl" y="106"> 403</text>
        </defs>
        <path class="alarm fill-red-700" d="M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
        <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="black"></use>
        <use xlink:href="#text-s" fill="gray-800"></use>
        <g id="robot">
            <g id="eye-wrap">
                <use xlink:href="#white-eye"></use>
                <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#000" stroke="#2aa7cc" stroke-width="2" stroke-miterlimit="10" cx="130" cy="65" r="11"/>
                <ellipse id="white-eye" fill="gray-800" cx="130" cy="40" rx="18" ry="12"/>
            </g>
            <circle class="fill-gray-800" cx="105" cy="32" r="2.5" id="tornillo"/>
            <use xlink:href="#tornillo" x="50"></use>
            <use xlink:href="#tornillo" x="50" y="60"></use>
            <use xlink:href="#tornillo" y="60"></use>
        </g>
    </svg>
    <h1>Forbidden 403</h1>
    <h2>We are sorry, but you do not have access to this page or resource.</h2>
    <a href="#" class="text-blue-500 no-underline hover:text-white">BACK TO HOME PAGE</a>
    <script>
        var root = document.documentElement;
        var eyef = document.getElementById('eyef');
        var cx = document.getElementById("eyef").getAttribute("cx");
        var cy = document.getElementById("eyef").getAttribute("cy");
        document.addEventListener("mousemove", evt => {
            let x = evt.clientX / innerWidth;
            let y = evt.clientY / innerHeight;
            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);
            cx = 115 + 30 * x;
            cy = 50 + 30 * y;
            eyef.setAttribute("cx", cx);
            eyef.setAttribute("cy", cy);
        });
        document.addEventListener("touchmove", touchHandler => {
            let x = touchHandler.touches[0].clientX / innerWidth;
            let y = touchHandler.touches[0].clientY / innerHeight;
            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);
        });
    </script>
</body>
</html>
