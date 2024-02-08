<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['username'])
        && !empty($_POST['server'])
        && !empty($_POST['issue'])
        && !empty($_POST['message'])
    ){
        $username = $_POST["username"];
        $server = $_POST["server"];
        $issue = $_POST["issue"];
        $message = $_POST["message"];


        $to = "bluecollarrust@gmail.com";
        $subject = "BlueCollarRust.com Report Submission";
        $body = "Name: {$username}\n\nServer: {$server}\n\nIssue Type: {$issue}\n\nMessage: {$message}";
        $headers = "From: {$username}";


        if (mail($to, $subject, $body, $headers)) {
            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
            echo "Failed to send message.";
        }
    }
}
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewwport" content="width=device-width, initial-scale=1">
    <title>Report | Blue Collar Rust</title>
    <link rel="stylesheet" href="styles.css" type="text/css" charset="utf-8" />
    <link href="./img/favicon-light.png" rel="icon" media="(prefers-color-scheme: light)">
    <link href="./img/favicon-dark.png" rel="icon" media="(prefers-color-scheme: dark)">
</head>

<body class="mainview">
    <div class="container">
        <div class="header">
            <a class="banner" href="./index.html">
                <img src="./img/bcr-banner.png" alt="Blue Collar Rust banner" />
            </a>
            <a class="banner-short" href="/">
                <img src="./img/bcr-banner-short.png" alt="Blue Collar Rust shortened banner" />
            </a>
            <div class="links">
                <a href="https://bluecollarrust.tebex.io">STORE</a>
                <a href="https://paypal.me/BlueCollarRust?country.x=US&locale.x=en_US">DONATE</a>
                <a href="./servers.html">SERVERS</a>
                <a href="https://discord.gg/Y3kqB49">DISCORD</a>
                <a class="active" href="./report.php">REPORT</a>
            </div>
        </div>
        <div class="page-cont">
            <div class="left-col">
                <div class="headline">
                    <h1>REPORT</h1>
                </div>
                <div class="message">
                    <span style="text-align: center; font-weight: 700; font-size: 16px;">
                        <p>The best place to report a problem is through the Help Desk channel on our Discord server.</p>
                        <div class="widgetbot">
                            <widgetbot server="652038839032086548" channel="1115702748705460374" width="100%" height="400px">
                            </widgetbot>
                            <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
                        </div> 
                        <p><br />However, you can also fill out the form below to report a player's behavior or to report a problem.</p>
                    </span><br />
                    <div class="report-form">
                        <form class="contact-form" method="POST" action="report.php">
                            <div class="form-row form-error" style="display:none;"></div>
                            <div class="form-row">
                              <label for="contact-form-name">Your Username:</label>
                                <input  placeholder="Steam Username" id="contact-form-name" class="form-input" type="text" name="username" required>
                            </div>
                            <div class="form-row">
                                <label for="server">Server:</label>
                                <select name="server" id="server" required>
                                    <option value="">--- Select a server ---</option>
                                    <option value="original">Original PvPvE</option>
                                    <option value="lite">Lite PvE</option>
                                    <option value="brickyard">Brickyard PvP</option>
                                    <option value="reserved">Reserved Sandbox/Build</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="issue">Issue:</label>
                                <select name="issue" id="issue" required>
                                    <option value="">--- Select an option ---</option>
                                    <option value="behavior">Player(s) Behavior</option>
                                    <option value="glitch">Problem / Glitch</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="contact-form-message">Message:</label>
                            <textarea placeholder="Describe the issue" id="contact-form-message" class="form-input" name="message" required></textarea>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="headline">
                    <h1>WIPE SCHEDULE</h1>
                </div>
                <div class="message">
                    <h2>Next Wipe&nbsp;&nbsp;-&nbsp;&nbsp;<span id="nextWipe"></span></h2>
                    <p>&nbsp;<br /><span style="font-weight: 700;">When is the next ...</span></p>
                    <p>Map & BP wipe&nbsp;&nbsp;-&nbsp;&nbsp;<span id="nextFullWipe"></span></p>
                    <p>Map Only wipe &nbsp;&nbsp;-&nbsp;&nbsp;<span id="nextMapWipe"></span></p>
                    <p>One-Week wipe&nbsp;&nbsp;-&nbsp;&nbsp;<span id="nextMiniWipe"></span></p>
                </div>
                <div class="headline">
                    <h1>CONNECTION INFO</h1>
                </div>
                <div class="message">
                    <h2>BCR Original PvPvE</h2>
                    <p>play.BlueCollarRust.com:28115</p>
                    <h2>BCR Lite PvE</h2>
                    <p>play.BlueCollarRust.com:28215</p>
                    <h2>BCR Brickyard PvP</h2>
                    <p>play.BlueCollarRust.com:28315</p>
                    <h2>BCR Reserved Sandbox/Build</h2>
                    <p>play.BlueCollarRust.com:28415</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="left-cont">
                <img src="./img/bcr-banner.png" alt="Blue Collar Rust banner" />
                <p>© 2024 - All rights reserved</p>
            </div>
            <div class="right-cont">
                <p><a href="mailto:bluecollarrust@gmail.com">Contact</a></p>
            </div>
        </div>
    </div>
</body>

<script>

    const monthNames = ["Jan.", "Feb.", "March", "April", "May", "June", "July", "Aug.", "Sept.", "Oct.", "Nov.", "Dec."];

    document.getElementById("nextFullWipe").innerHTML = `${monthNames[getFirstThurs().getMonth()]} ${getFirstThurs().getDate()} at 2 pm (ET)`;
    
    document.getElementById("nextMapWipe").innerHTML = `${monthNames[getThirdThurs().getMonth()]} ${getThirdThurs().getDate()} at 2 pm (ET)`;

    document.getElementById("nextMiniWipe").innerHTML = `${monthNames[getFifthThurs().getMonth()]} ${getFifthThurs().getDate()} at 2 pm (ET)`;

    document.getElementById("nextWipe").innerHTML = `${monthNames[nextWipe().getMonth()]} ${nextWipe().getDate()} at 2 pm (ET)`;

    function getFirstThurs() {
        const today = new Date(Date.now());
        let firstThurs = new Date(today.getFullYear(),today.getMonth(),1,13,0,0,0);
        for (let i=0 ; i<7 ; i++) {
            if (firstThurs.getDay() === 4) break;
            firstThurs.setDate(firstThurs.getDate() + 1)
        }
        if (firstThurs < today) { //if first thursday is in the past, start the check from the first of next month
            firstThurs = new Date(today.getFullYear(),today.getMonth()+1,1,13,0,0,0);
            firstThurs.getMonth()+1;
            for (let i=0 ; i<7 ; i++) {
                if (firstThurs.getDay() === 4) break;
                firstThurs.setDate(firstThurs.getDate() + 1)
            }
        }
        return firstThurs;
    }

    function getThirdThurs() {
        const today = new Date(Date.now());
        let thirdThurs = new Date(today.getFullYear(),today.getMonth(),15,13,0,0,0);
        for (let i=0 ; i<7 ; i++) {
            if (thirdThurs.getDay() === 4) break;
            thirdThurs.setDate(thirdThurs.getDate() + 1)
        }
        if (thirdThurs < today) { //if third thursday is in the past, start the check from the 15th of next month
            thirdThurs = new Date(today.getFullYear(),today.getMonth()+1,15,13,0,0,0);
            thirdThurs.getMonth()+1;
            for (let i=1 ; i<7 ; i++) {
                if (thirdThurs.getDay() === 4) break;
                thirdThurs.setDate(thirdThurs.getDate() + 1)
            }
        }
        return thirdThurs;
    }

    function getFifthThurs() {
        const today = new Date(Date.now());
        let fifthThurs = new Date(today.getFullYear(),today.getMonth(),29,13,0,0,0);
        while (fifthThurs.getDay() !== 4) {
            //if "fifth" thursday is actually the first thursday of the next month (i.e. not a number between 29-31)
            //then the date is now in a new month, so set the date to the 29th of that new month and 
            //repeat until a real fifth thursday has been found.
            if (fifthThurs.getDate() < 29) {
                fifthThurs = new Date(fifthThurs.getFullYear(),fifthThurs.getMonth(),29,13,0,0,0);
            }
            if (fifthThurs.getDay() === 4) {
                break;
            }
            fifthThurs.setDate(fifthThurs.getDate() + 1)
        }
        return fifthThurs;
    }

    function nextWipe() { //compare Thursdays and current day to return soonest upcoming wipe
        const today = new Date(Date.now());
        let day = new Date(today.getFullYear(),today.getMonth(),today.getDate(),13,0,0,0);
        let firstThurs = getFirstThurs();
        let thirdThurs = getThirdThurs();
        let fifthThurs = getFifthThurs();

        for (let i=0 ; i <14 ; i++){
            if (day.getDate() === firstThurs.getDate() && day.getMonth() === firstThurs.getMonth() && day.getYear() === firstThurs.getYear()) return firstThurs;
            
            if (day.getDate() === thirdThurs.getDate() && day.getMonth() === thirdThurs.getMonth() && day.getYear() === thirdThurs.getYear()) return thirdThurs;

            if (day.getDate() === fifthThurs.getDate() && day.getMonth() === fifthThurs.getMonth() && day.getYear() === fifthThurs.getYear()) return fifthThurs;
        
            day.setDate(day.getDate()+1);
        }
    }


    
</script>

</html>