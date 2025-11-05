<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stordalsstølen 43 - Visitor Guidebook</title>
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
        <p>Visitor Guidebook for Your Private Cabin</p>
    </div>

    <div class="language-nav">
        <a href="index.php">← Home</a>
        <a href="no.php">Norsk</a>
        <a href="en.php" class="active">English</a>
        <a href="de.php">Deutsch</a>
    </div>

    <div class="container">
        <div class="nav-menu">
            <h2>Navigation</h2>
            <ul>
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#arrival">Arrival and Access</a></li>
                <li><a href="#communication">Communication and Internet</a></li>
                <li><a href="#supplies">Basic Supplies and Inventory</a></li>
                <li><a href="#technical">Technical and Safety</a></li>
                <li><a href="#important">Important Notes and Rules</a></li>
                <li><a href="#stores">Grocery Stores</a></li>
                <li><a href="#support">Support and Enquiries</a></li>
            </ul>
        </div>

        <section id="welcome">
            <h2>Welcome</h2>
            <p>We are very pleased to welcome you to our private cabin in the quiet, rural area of Stordalstølen, Høyanger Municipality, Norway. This guide contains all the necessary information for a smooth and enjoyable stay.</p>
        </section>

        <section id="arrival">
            <h2>1. Arrival and Access</h2>
            <div class="info-box">
                <strong>Exact Address:</strong> Stordalsstølen 43
            </div>
            <p>The path to the cabin, as outlined in the attached image, traverses <strong>technically demanding terrain and requires good, sturdy shoes</strong>.</p>
            <p>For a visual guide on the way to the cottage, please watch this video: <a href="https://youtube.com/shorts/P58DkpILLys?feature=share" target="_blank">https://youtube.com/shorts/P58DkpILLys?feature=share</a></p>
        </section>

        <section id="communication">
            <h2>2. Communication and Internet</h2>
            <div class="info-box">
                <h3>Wi-Fi Access</h3>
                <p><strong>Network Name (SSID):</strong> [Insert Network Name here]</p>
                <p><strong>Password:</strong> [Insert Wi-Fi Password here]</p>
            </div>
            <div class="warning-box">
                <strong>Data Note:</strong> There is <strong>5G mobile phone coverage</strong> available in Stordalen. Please be aware that after <strong>100 GB</strong> of data usage, the internet speed will be reduced.
            </div>
        </section>

        <section id="supplies">
            <h2>3. Basic Supplies and Inventory</h2>
            <p>In the cabin, you will find bed linen and towels for <strong>4 people</strong>, toilet paper, and basic cleaning supplies upon your arrival.</p>
            
            <h3>Kitchen Equipment</h3>
            <p>Dishes, cutlery, pots, pans, <strong>filtered coffee machine</strong>.</p>

            <div class="warning-box">
                <h3>Supplies (Disclaimer)</h3>
                <p>There are <strong>no</strong> spices or other supplies guaranteed. Since our last check, there have been visitors. We therefore recommend bringing your own supplies to ensure you have everything you need.</p>
            </div>

            <h3>Not Available</h3>
            <ul>
                <li><strong>No Kitchen Rolls/Napkins:</strong> There are <strong>no</strong> kitchen rolls or napkins provided.</li>
                <li><strong>No Kettle:</strong> Please use a regular pot on the stove to boil water.</li>
                <li><strong>Kitchen Cloths:</strong> Kitchen towels and cloths are not part of the cleaning service. Please hang them up to dry after use.</li>
            </ul>
        </section>

        <section id="technical">
            <h2>4. Technical and Safety</h2>
            
            <h3>Fusebox / Fuses</h3>
            <div class="info-box">
                <p>The <strong>fusebox overview</strong> and the fuse box itself are located: <strong>[Insert location of fusebox here]</strong>.</p>
            </div>

            <h3>Komfy Cooker Guard</h3>
            <p>Instructions for operating the Komfy cooker top guard (for protection against dry cooking) are provided in the appendix (<strong>Image of Komfy Cooker Top Guard</strong>).</p>

            <h3>Electricity</h3>
            <p>The cabin has standard European electrical plugs.</p>

            <h3>Water</h3>
            <p>The water quality is very good; tap water is safe to drink.</p>
        </section>

        <section id="important">
            <h2>5. Important Notes and Rules</h2>
            
            <h3>Flashlight</h3>
            <p>As it can get very dark at night, we strongly recommend bringing a flashlight.</p>

            <h3>Firewood</h3>
            <p>Wood for the <strong>indoor fireplace</strong> is under the kitchen window. Wood for the <strong>outdoor fireplace</strong> is stored at the back (north end) of the cabin.</p>

            <h3>Waste Disposal</h3>
            <p>Please dispose of all waste in the designated containers located at the car park just off the main road.</p>

            <h3>Hiking/Fishing</h3>
            <p>If you plan on hiking, please bring <strong>hiking boots</strong>. Please be aware that a <strong>fishing license</strong> may be required for fishing in local waters.</p>
        </section>

        <section id="stores">
            <h2>6. Grocery Stores</h2>
            <table>
                <thead>
                    <tr>
                        <th>Store</th>
                        <th>Address</th>
                        <th>Distance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Rema 1000 Ostereidet</strong></td>
                        <td>E39, 5993 Ostereidet</td>
                        <td>Approx. 50 km and a 45-minute drive from Bergen</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Bjordal</strong></td>
                        <td>Sørsidevegen 3210, 5962 Bjordal</td>
                        <td>Approx. 20 km and a 32-minute drive from the cabin</td>
                    </tr>
                    <tr>
                        <td><strong>Joker Haugsvær</strong></td>
                        <td>Sognevegen 2226, 5983 Haugsvær</td>
                        <td>Approx. 21.4 km and a 27-minute drive from the cabin (located directly on E39)</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="support">
            <h2>7. Support and Enquiries</h2>
            <p>Please direct any questions regarding payment and financial matters related to your booking to your booking agent. As the owner of the cottage, I will be happy to assist you with any practical issues or questions you may have concerning the cottage itself.</p>
        </section>

        <section>
            <h2>Appendices</h2>
            <ul>
                <li>Path to the Cabin (Image)</li>
                <li>Image of Komfy Cooker Top Guard</li>
            </ul>
        </section>
    </div>

    <a href="#" class="back-to-top">↑</a>
</body>
</html>

