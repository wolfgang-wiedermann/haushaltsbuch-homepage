<section id="installieren">
<div class="container">
<!-- Information zur Installation des HTML5-Haushaltsbuchs -->
<div>
    <h1>Technische Informationen zum HTML5-Haushaltsbuch</h1>
    <p>
    <ul>
        <li>Sie wollen immer die aktuellste Version des Haushaltsbuchs einsetzen?</li>
        <li>Sie wollen das Haushaltsbuch durch eigene Masken und Funktionen erweitern?</li>
    </ul>
    Dann sind Sie auf dieser Seite genau richtig.
    </p>
</div>
<div id="aktuellste_version">
    <h1>Immer die aktuellste Version einsetzen.</h1>
    <p>
    <b>Wenn Sie Ihr HTML5-Haushaltsbuch auf einem eigenen Rechner oder eigenen Server betreiben,</b>
    auf dem Sie beliebige Software nachinstallieren können, besteht die Möglichkeit Ihre
    Installation direkt aus der Versionsverwaltung aufzusetzen und zu aktualisieren.
    </p>
    <p>
    Sie müssen dazu das Werkzeug <b>git</b> installieren. Unter Ubuntu oder Debian funktioniert das 
    durch die Eingabe von <code>apt-get install git</code> wenn Sie bereits als Benutzer <b>root</b>
    im System angemeldet sind. Ansonsten <code>sudo apt-get install git</code>.
    </p>
    <p>
    Wechsen Sie danach in das Verzeichnis /var/www und legen Sie dort einen neuen Ordner für Ihre neue
    Installation des Haushaltsbuchs an und wechseln Sie mit cd in diesen Ordner.
    </p>
    <p>
    Danach initialisieren Sie durch den Aufruf von <code>git init</code> die Sourcecode-Verwaltung mit 
    Git für diesen Ordner. Richten Sie jetzt einen Alias für das GitHub-Repository des HTML5-Haushaltsbuchs ein
    (<code>git remote add origin https://github.com/wolfgang-wiedermann/php_mobile_accounting.git</code>) und
    laden Sie die aktuelle Version aus dem stabilen Branch "master" (<code>git pull origin master</code>).
    </p>
    <p>
    Danach rufen Sie mit Ihrem Browser die Datei <b>install.php</b> auf und folgen Sie dem Installations-Wizzard. 
    Sollten Sie Ihr Verzeichnis <b>fibu</b> genannt haben, so wäre der Aufruf <b>http://localhost/fibu/install.php</b>.
    </p>
    <p><b>Nach der erfolgreichen Installation</b> können Sie Ihr Haushaltsbuch wie gewohnt benutzen. Wenn Sie das
    Haushaltsbuch nun auf eine aktuellere Version heben wollen, so geben Sie einfach wieder <code>git pull origin master</code>
    ein und Ihre Installation wird automatisch aktualisiert.
    </p>
    <p>
    Danach sollten Sie alle Funktionen des Haushaltsbuchs kurz durchtesten. Sollte irgendetwas nicht funktionieren müssen Sie
    ggf. die Installation (install.php) nochmals durchlaufen. <b>Achten Sie in diesem Fall bitte darauf</b> nicht Ihre originale
    Datenbank zu verwenden, da install.php diese löschen und neu anlegen würde. Dabei würden alle Buchungen und Konten
    verloren gehen!
    </p>
</div>
<div id="erweitern">
    <h1>Um eigene Masken und Funktionen erweitern.</h1>
    <p>
    Wenn Sie Ihr Haushaltsbuch um eigene Funktionen erweitern wollen setzt das <b>Vorkenntnisse in PHP, Javascript und HTML</b>
    und eine <b>Testinstallation des Haushaltsbuchs</b>, wie unter "Immer die aktuellste Version einestzen" beschrieben voraus.
    Wenn Sie über beides verfügen zeigt Ihnen der folgende Abschnitt, wie Sie eigene Masken und Funktionen integrieren können
    ohne diese beim Update des Systems zu verlieren. 
    </p>
</div>
</div>
</section>
<!-- Installation des Haushaltsbuch Ende -->

