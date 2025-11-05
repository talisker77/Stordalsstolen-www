<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stordalsstølen 43 - Besucher-Handbuch</title>
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
        <p>Besucher-Handbuch für Ihre private Hütte</p>
    </div>

    <div class="language-nav">
        <a href="index.php">← Startseite</a>
        <a href="no.php">Norsk</a>
        <a href="en.php">English</a>
        <a href="de.php" class="active">Deutsch</a>
    </div>

    <div class="container">
        <div class="nav-menu">
            <h2>Navigation</h2>
            <ul>
                <li><a href="#willkommen">Willkommen</a></li>
                <li><a href="#ankunft">Anreise und Zugang</a></li>
                <li><a href="#kommunikation">Kommunikation und Internet</a></li>
                <li><a href="#ausstattung">Grundausstattung und Vorräte</a></li>
                <li><a href="#technik">Technik und Sicherheit</a></li>
                <li><a href="#hinweise">Wichtige Hinweise und Regeln</a></li>
                <li><a href="#einkaufen">Einkaufsmöglichkeiten</a></li>
                <li><a href="#unterstützung">Unterstützung und Anfragen</a></li>
            </ul>
        </div>

        <section id="willkommen">
            <h2>Willkommen</h2>
            <p>Wir freuen uns sehr, Sie in unserer privaten Hütte in der ruhigen, ländlichen Gegend von Stordalstølen, Høyanger Kommune, Norwegen, begrüßen zu dürfen. Dieses Handbuch enthält alle notwendigen Informationen für einen reibungslosen Aufenthalt.</p>
        </section>

        <section id="ankunft">
            <h2>1. Anreise und Zugang</h2>
            <div class="info-box">
                <strong>Genaue Adresse:</strong> Stordalsstølen 43
            </div>
            <p>Der Weg zur Hütte, wie auf dem beigefügten Bild dargestellt, führt durch <strong>technisch anspruchsvolles Gelände und erfordert gutes, festes Schuhwerk</strong>.</p>
            <p>Eine visuelle Wegbeschreibung zur Hütte finden Sie in diesem Video: <a href="https://youtube.com/shorts/P58DkpILLys?feature=share" target="_blank">https://youtube.com/shorts/P58DkpILLys?feature=share</a></p>
        </section>

        <section id="kommunikation">
            <h2>2. Kommunikation und Internet</h2>
            <div class="info-box">
                <h3>WLAN-Zugang</h3>
                <p><strong>Netzwerkname (SSID):</strong> [Hier den Netzwerknamen einfügen]</p>
                <p><strong>Passwort:</strong> [WLAN-Passwort hier einfügen]</p>
            </div>
            <div class="warning-box">
                <strong>Hinweis zur Datennutzung:</strong> In Stordalen ist <strong>5G-Mobilfunkempfang</strong> verfügbar. Bitte beachten Sie, dass die Internetgeschwindigkeit nach einem Datenverbrauch von <strong>100 GB</strong> reduziert wird.
            </div>
        </section>

        <section id="ausstattung">
            <h2>3. Grundausstattung und Vorräte</h2>
            <p>In der Hütte finden Sie bei Ihrer Ankunft Bettwäsche und Handtücher für <strong>4 Personen</strong>, Toilettenpapier und grundlegende Reinigungsmittel.</p>
            
            <h3>Küchenausstattung</h3>
            <p>Geschirr, Besteck, Töpfe, Pfannen, <strong>Filterkaffeemaschine</strong>.</p>

            <div class="warning-box">
                <h3>Vorräte (Disclaimer)</h3>
                <p>Es sind <strong>keine</strong> Gewürze oder andere Vorräte garantiert. Seit unserer letzten Überprüfung gab es Gäste. Wir empfehlen Ihnen daher, Ihre eigenen Vorräte mitzubringen, um sicherzustellen, dass Sie alles Notwendige haben.</p>
            </div>

            <h3>Nicht verfügbar</h3>
            <ul>
                <li><strong>Keine Küchenrollen/Servietten:</strong> Es sind <strong>keine</strong> Küchenrollen oder Servietten vorhanden.</li>
                <li><strong>Kein Wasserkocher:</strong> Verwenden Sie bitte einen normalen Topf auf dem Herd, um Wasser zu kochen.</li>
                <li><strong>Küchentücher:</strong> Küchentücher und Lappen sind nicht Teil der Reinigung. Bitte hängen Sie diese nach Gebrauch zum Trocknen auf.</li>
            </ul>
        </section>

        <section id="technik">
            <h2>4. Technik und Sicherheit</h2>
            
            <h3>Sicherungen / Sicherungskasten</h3>
            <div class="info-box">
                <p>Die <strong>Sicherungsübersicht</strong> und der Sicherungskasten befinden sich: <strong>[Lage des Sicherungskastens hier einfügen]</strong>.</p>
            </div>

            <h3>Komfy Kochfeldschutz</h3>
            <p>Anweisungen zur Bedienung des Komfy Kochfeldschutzes (zum Schutz vor Trockenkochen) finden Sie im Anhang (<strong>Bild des Komfy Kochfeldschutzes</strong>).</p>

            <h3>Strom</h3>
            <p>Die Hütte verfügt über Standard-Eurostecker.</p>

            <h3>Wasser</h3>
            <p>Die Wasserqualität ist sehr gut; das Leitungswasser ist bedenkenlos trinkbar.</p>
        </section>

        <section id="hinweise">
            <h2>5. Wichtige Hinweise und Regeln</h2>
            
            <h3>Taschenlampe</h3>
            <p>Da es nachts sehr dunkel werden kann, empfehlen wir dringend, eine Taschenlampe mitzubringen.</p>

            <h3>Brennholz</h3>
            <p>Holz für den <strong>Innenkamin</strong> befindet sich unter dem Küchenfenster. Holz für die <strong>Feuerstelle im Freien</strong> befindet sich auf der Rückseite (Nordseite) der Hütte.</p>

            <h3>Müllentsorgung</h3>
            <p>Bitte entsorgen Sie alle Abfälle in den dafür vorgesehenen Containern auf dem Parkplatz direkt an der Hauptstraße.</p>

            <h3>Wandern/Angeln</h3>
            <p>Wenn Sie Wandern planen, bringen Sie bitte <strong>Wanderschuhe</strong> mit. Beachten Sie, dass für das Angeln in lokalen Gewässern eine <strong>Angelkarte</strong> erforderlich sein kann.</p>
        </section>

        <section id="einkaufen">
            <h2>6. Einkaufsmöglichkeiten</h2>
            <table>
                <thead>
                    <tr>
                        <th>Geschäft</th>
                        <th>Adresse</th>
                        <th>Entfernung</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Rema 1000 Ostereidet</strong></td>
                        <td>E39, 5993 Ostereidet</td>
                        <td>Ca. 50 km und 45 Autominuten von Bergen entfernt</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Bjordal</strong></td>
                        <td>Sørsidevegen 3210, 5962 Bjordal</td>
                        <td>Ca. 20 km und 32 Autominuten von der Hütte entfernt</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Haugsvær</strong></td>
                        <td>Sognevegen 2226, 5983 Haugsvær</td>
                        <td>Ca. 21,4 km und 27 Autominuten von der Hütte entfernt (direkt an der E39)</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="unterstützung">
            <h2>7. Unterstützung und Anfragen</h2>
            <p>Bitte richten Sie alle Fragen bezüglich Zahlungen und finanziellen Angelegenheiten Ihrer Buchung an Ihren Buchungsagenten. Als Eigentümer des Ferienhauses helfe ich Ihnen gerne bei allen praktischen Fragen oder Problemen, die die Hütte selbst betreffen.</p>
        </section>

        <section>
            <h2>Anhänge</h2>
            <ul>
                <li>Weg zur Hütte (im Bild)</li>
                <li>Bild des Komfy Kochfeldschutzes</li>
            </ul>
        </section>
    </div>

    <a href="#" class="back-to-top">↑</a>
</body>
</html>

