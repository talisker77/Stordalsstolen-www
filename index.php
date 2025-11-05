<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stordalsstølen 43 - Velkommen</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 700px;
            width: 100%;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2.5em;
            font-weight: 700;
        }
        .subtitle {
            color: #7f8c8d;
            margin-bottom: 50px;
            font-size: 1.2em;
        }
        .language-selector {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        .language-selector a {
            padding: 15px 30px;
            text-decoration: none;
            color: #667eea;
            border: 2px solid #667eea;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 1.1em;
            display: inline-block;
        }
        .language-selector a:hover {
            background-color: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .welcome-message {
            font-size: 1.3em;
            color: #34495e;
            line-height: 1.8;
            margin-top: 30px;
        }
        .location {
            color: #95a5a6;
            margin-top: 20px;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stordalsstølen 43</h1>
        <div class="subtitle">Privat hytte i Høyanger Kommune</div>
        
        <div class="language-selector">
            <a href="no.php">Norsk</a>
            <a href="en.php">English</a>
            <a href="de.php">Deutsch</a>
        </div>
        
        <div class="welcome-message">
            Velkommen til vår private hytte i det rolige, landlige området Stordalstølen, Høyanger Kommune, Norge.
        </div>
        <div class="location">
            Stordalsstølen 43, Høyanger, Norge
        </div>
    </div>
</body>
</html>
