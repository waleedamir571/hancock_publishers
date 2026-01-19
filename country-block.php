<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Country Not Accessible</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <script type="text/javascript">
        // Function to redirect to the main site
        function redirectToMainSite() {
            window.location.href = "https://hancockpublishers.com";
        }

        // Detect if the page was loaded from a refresh
        if (performance.navigation.type === 1) {
            redirectToMainSite();
        }
    </script>
        <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('assets/img/country-blocked.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .error-container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }
    </style>
</body>
</html>