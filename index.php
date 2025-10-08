<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stordalstølen 43</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }
        .language-selector {
            margin-bottom: 30px;
        }
        .language-selector a {
            margin: 0 10px;
            padding: 8px 16px;
            text-decoration: none;
            color: #3498db;
            border: 2px solid #3498db;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .language-selector a:hover {
            background-color: #3498db;
            color: white;
        }
        .language-selector a.active {
            background-color: #2c3e50;
            border-color: #2c3e50;
            color: white;
        }
        .welcome-message {
            font-size: 1.5em;
            color: #34495e;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <?php
    // Get language from URL parameter, default to English
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
    
    // Validate language
    if (!in_array($lang, ['en', 'de', 'no'])) {
        $lang = 'en';
    }
    
    // Welcome messages in different languages
    $messages = [
        'en' => 'Welcome to Stordalstølen 43',
        'de' => 'Willkommen in Stordalstølen 43',
        'no' => 'Velkommen til Stordalstølen 43'
    ];
    
    // Language names
    $languages = [
        'en' => 'English',
        'de' => 'Deutsch',
        'no' => 'Norsk'
    ];
    ?>
    
    <div class="container">
        <h1>Stordalstølen 43</h1>
        
        <div class="language-selector">
            <?php foreach ($languages as $code => $name): ?>
                <a href="?lang=<?php echo $code; ?>" 
                   class="<?php echo ($lang === $code) ? 'active' : ''; ?>">
                    <?php echo $name; ?>
                </a>
            <?php endforeach; ?>
        </div>
        
        <div class="welcome-message">
            <?php echo $messages[$lang]; ?>
        </div>
    </div>
</body>
</html>
