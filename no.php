<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stordalsstølen 43 - Gjestehåndbok</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f7fa;
            color: #2c3e50;
            line-height: 1.6;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }
        .language-nav {
            background-color: white;
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .language-nav a {
            margin: 0 10px;
            padding: 8px 16px;
            text-decoration: none;
            color: #667eea;
            border: 2px solid #667eea;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 600;
        }
        .language-nav a:hover {
            background-color: #667eea;
            color: white;
        }
        .language-nav a.active {
            background-color: #667eea;
            color: white;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .nav-menu {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .nav-menu h2 {
            margin-bottom: 15px;
            color: #667eea;
            font-size: 1.3em;
        }
        .nav-menu ul {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
        }
        .nav-menu a {
            color: #34495e;
            text-decoration: none;
            padding: 8px 12px;
            display: block;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .nav-menu a:hover {
            background-color: #f0f0f0;
            color: #667eea;
        }
        section {
            background-color: white;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        section h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 1.8em;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }
        section h3 {
            color: #2c3e50;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.3em;
        }
        section p {
            margin-bottom: 15px;
        }
        section ul, section ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        section li {
            margin-bottom: 8px;
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .info-box strong {
            color: #667eea;
        }
        .warning-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        table th {
            background-color: #667eea;
            color: white;
            font-weight: 600;
        }
        table tr:hover {
            background-color: #f8f9fa;
        }
        a {
            color: #667eea;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #667eea;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transition: all 0.3s;
        }
        .back-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Stordalsstølen 43</h1>
        <p>Gjestehåndbok for privat hytte</p>
    </div>

    <div class="language-nav">
        <a href="index.php">← Hjem</a>
        <a href="no.php" class="active">Norsk</a>
        <a href="en.php">English</a>
        <a href="de.php">Deutsch</a>
    </div>

    <div class="container">
        <div class="nav-menu">
            <h2>Navigasjon</h2>
            <ul>
                <li><a href="#velkommen">Velkommen</a></li>
                <li><a href="#ankomst">Ankomst og tilgang</a></li>
                <li><a href="#kommunikasjon">Kommunikasjon og internett</a></li>
                <li><a href="#utstyr">Grundutstyr og forsyninger</a></li>
                <li><a href="#teknikk">Teknikk og sikkerhet</a></li>
                <li><a href="#viktig">Viktige opplysninger og regler</a></li>
                <li><a href="#butikker">Butikker</a></li>
                <li><a href="#stotte">Støtte og henvendelser</a></li>
            </ul>
        </div>

        <section id="velkommen">
            <h2>Velkommen</h2>
            <p>Vi er svært glade for å kunne ønske deg velkommen til vår private hytte i det rolige, landlige området Stordalstølen, Høyanger Kommune, Norge. Denne håndboken inneholder all nødvendig informasjon for et smidig og hyggelig opphold.</p>
        </section>

        <section id="ankomst">
            <h2>1. Ankomst og tilgang</h2>
            <div class="info-box">
                <strong>Nøyaktig adresse:</strong> Stordalsstølen 43
            </div>
            <p>Stien til hytta, som vist på vedlagt bilde, går gjennom <strong>teknisk krevende terreng og krever gode, solide sko</strong>.</p>
            <p>En visuell veibeskrivelse til hytta finner du i denne videoen: <a href="https://youtube.com/shorts/P58DkpILLys?feature=share" target="_blank">https://youtube.com/shorts/P58DkpILLys?feature=share</a></p>
        </section>

        <section id="kommunikasjon">
            <h2>2. Kommunikasjon og internett</h2>
            <div class="info-box">
                <h3>WLAN-tilgang</h3>
                <p><strong>Nettverksnavn (SSID):</strong> [Sett inn nettverksnavn her]</p>
                <p><strong>Passord:</strong> [Sett inn WLAN-passord her]</p>
            </div>
            <div class="warning-box">
                <strong>Merknad om databruk:</strong> I Stordalen er det 5G-mobildekning tilgjengelig. Vær oppmerksom på at internethastigheten reduseres etter <strong>100 GB</strong> databruk.
            </div>
        </section>

        <section id="utstyr">
            <h2>3. Grunnutstyr og forsyninger</h2>
            <p>I hytta finner du ved ankomst sengetøy og håndklær for <strong>4 personer</strong>, toalettpapir og grunnleggende rengjøringsutstyr.</p>
            
            <h3>Kjøkkenutstyr</h3>
            <p>Servise, bestikk, gryter, panner, <strong>filterkaffemaskin</strong>.</p>

            <div class="warning-box">
                <h3>Forsyninger (disclaimer)</h3>
                <p>Det er <strong>ikke</strong> garantert krydder eller andre forsyninger. Siden vår siste sjekk har det vært gjester. Vi anbefaler derfor å ta med egne forsyninger for å sikre at du har alt du trenger.</p>
            </div>

            <h3>Mangler</h3>
            <ul>
                <li><strong>Ingen kjøkkenruller/servietter:</strong> Det er <strong>ikke</strong> kjøkkenruller eller servietter tilgjengelig.</li>
                <li><strong>Ingen vannkoker:</strong> Bruk en vanlig gryte på komfyren for å koke vann.</li>
                <li><strong>Kjøkkenkluter:</strong> Kjøkkenkluter og kluter er ikke en del av rengjøringen. Vær så snill å henge dem opp til tørk etter bruk.</li>
            </ul>
        </section>

        <section id="teknikk">
            <h2>4. Teknikk og sikkerhet</h2>
            
            <h3>Sikringer / Sikringsskap</h3>
            <div class="info-box">
                <p><strong>Sikringsoversikten</strong> og sikringsskapet befinner seg: <strong>[Sett inn plassering av sikringsskap her]</strong>.</p>
            </div>

            <h3>Komfy sikring</h3>
            <p>Instruksjoner for bruk av Komfy komfyrsikringen (for beskyttelse mot tørrkoking) finnes i vedlegget (<strong>Bilde av Komfy komfyrsikring</strong>).</p>

            <h3>Strøm</h3>
            <p>Hytta har standard europeiske støpsler.</p>

            <h3>Vann</h3>
            <p>Vannkvaliteten er svært god; drikkevannet er trygt å drikke.</p>
        </section>

        <section id="viktig">
            <h2>5. Viktige opplysninger og regler</h2>
            
            <h3>Lommelykt</h3>
            <p>Ettersom det kan bli veldig mørkt om natten, anbefaler vi på det sterkeste å ta med en lommelykt.</p>

            <h3>Brensel</h3>
            <p>Ved til <strong>innendørs peis</strong> befinner seg under kjøkkenvinduet. Ved til <strong>utendørs bålplass</strong> befinner seg på baksiden (nordsiden) av hytta.</p>

            <h3>Søppel</h3>
            <p>Vennligst kast all avfall i de merkkede containere på parkeringsplassen rett ved hovedveien.</p>

            <h3>Fotturer/Fiske</h3>
            <p>Hvis du planlegger å gå på fottur, ta med <strong>fjellsko</strong>. Vær oppmerksom på at det kan kreves en <strong>fiskekort</strong> for fiske i lokale vann.</p>
        </section>

        <section id="butikker">
            <h2>6. Butikker</h2>
            <table>
                <thead>
                    <tr>
                        <th>Butikk</th>
                        <th>Adresse</th>
                        <th>Avstand</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Rema 1000 Ostereidet</strong></td>
                        <td>E39, 5993 Ostereidet</td>
                        <td>Ca. 50 km og 45 minutters kjøring fra Bergen</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Bjordal</strong></td>
                        <td>Sørsidevegen 3210, 5962 Bjordal</td>
                        <td>Ca. 20 km og 32 minutters kjøring fra hytta</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Haugsvær</strong></td>
                        <td>Sognevegen 2226, 5983 Haugsvær</td>
                        <td>Ca. 21,4 km og 27 minutters kjøring fra hytta (direkte på E39)</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="stotte">
            <h2>7. Støtte og henvendelser</h2>
            <p>Vennligst send alle spørsmål om betalinger og økonomiske forhold vedrørende din booking til din bookingagent. Som eier av hytten hjelper jeg gjerne med alle praktiske spørsmål eller problemer som gjelder hytta selv.</p>
        </section>

        <section>
            <h2>Vedlegg</h2>
            <ul>
                <li>Veien til hytta (i bilde)</li>
                <li>Bilde av Komfy komfyrsikring</li>
            </ul>
        </section>
    </div>

    <a href="#" class="back-to-top">↑</a>
</body>
</html>

