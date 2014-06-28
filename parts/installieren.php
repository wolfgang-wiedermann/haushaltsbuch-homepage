<section id="installieren">
<div class="container">
<!-- Information zur Installation des HTML5-Haushaltsbuchs -->
<div class="starter-template">
    <h1>Installationsanleitung</h1>
    <p class="lead">Inhalt</p>
    <p>
    <ul>
      <li>Installation unter Windows (mit XAMPP)</li>
      <li>Installation unter Debian oder Ubuntu mit dem Installations-Assistenten</li>
      <li>Manuelle Installation unter Debian oder Ubuntu</li>
      <li>Installation eines Beispiel-Kontenplans</li>
    </ul>
    </p>
    <p class="lead">
    Installation unter Windows (mit XAMPP)
    </p>
    <p>
    Eine Installationsanleitung für das HTML5-Haushaltsbuch unter Windows mit <a href="https://www.apachefriends.org/de/index.html">XAMPP</a> wird bald zur Verfügung gestellt.
    </p>
    <p>
    Nach der Installation von XAMPP können sie für die  Installation des Haushaltsbuchs entsprechend der folgenden Beschreibung für 
    Linux vorgehen. Beginnen Sie dazu ab dem Entpacken der Installationsdateien (dann ins htdocs-Verzeichnis Ihrer XAMPP-Installation).
    </p>
    <p class="lead">
    Installation unter Debian oder Ubuntu mit dem Installations-Assistenten
    </p>
    <p>
    Für eine geführte Installation mittels Installationsassistent gehen Sie wie folgt vor. In einem ersten Schritt müssen Sie Ihr System
    für die Installation vorbereiten, d.h. die erforderlichen Softwarekomponenten installieren, sofern diese noch nicht auf dem System
    installiert sind.
    </p>
    <p>
    Erforderliche Komponenten sind:
    <ul>
    <li>ein Apache2-Webserver (installierbar via <code>apt-get install apache2</code>)</li>
    <li>ein Mysql-Datenbankserver (installierbar via <code>apt-get install mysql-server</code>)</li>
    <li>PHP5 mit Integration in den Apache Webserver (<code>apt-get install libapache2-mod-php5 php5</code>)</li>
    </ul>
    </p>
<!--
    <p>
    Unter Ubuntu werden .htaccess-Dateien standardmäßig nicht durch den Apache-Webserver ausgewertet. Um diese Funktion zu
    aktivieren ist es erforderlich in der Datei PLATZHALTER den folgenden Eintrag nachzutragen.
    </p>
    <p class="code"><code class="code">
    # cd /etc/apache2/ 
    </code></p>
-->
    <p>
    Zur Vorbereitung der Installation kopieren Sie bitte die Installationsdateien in das Server-Verzeichnis entpacken.
    Abhängig von der verwendeten Debian bzw. Ubuntu-Version liegt das Root-Verzeichnis des Webservers entweder 
    unter <code>/var/www/</code> oder unter <code>/var/www/html/</code>. In diesem Verzeichnis legen Sie ein neues Verzeichnis
    an, in das Sie das HTML5-Haushaltsbuch installieren wollen. In unserem Beispiel verwenden wir hier das Verzeichnis <code>fibu</code>.
    Entpacken Sie die Quelldateien des HTML5-Haushaltsbuch in dieses Verzeichnis.
    </p>
    <p>
    Danach können Sie den Installationsassistenten durch die Eingabe der URL <code>http://localhost/fibu/install.php</code>.
    </p>
    <p>
    <table>
    <tr><td><img src="./img/wizzard_page1.png"/></td>
        <td>Die Einstiegsmaske des Installations-Assistenten. Sie weist auf den Einstieg in die 
            geführte Installation des HTML5-Haushaltsbuch hin und führt noch zu keiner tatsächlichen 
            Installationsoperation.</td></tr>
    <tr><td><img src="./img/wizzard_page2.png"/></td>
        <td>Über diese Maske können bzw. müssen Sie Ihre Datenbankverbindung konfigurieren. Geben Sie dazu den
            von Ihnen gewünschten Datenbanknutzer und das zugehörige Passwort ein. Wenn sich Ihre Datenbank auf dem gleichen
            Rechner befindet, wie Ihr Apache-Webserver, dann sind die Parameter Hostname und Port bereits richtig
            konfiguriert.<br/>
            <br/>
            Beim Parameter Datenbankname geben Sie bitte den Namen der Datenbank an, in die Sie die Daten Ihres Haushaltsbuchs
            speichern wollen. Sollten Sie noch keine entsprechende Datenbank angelegt haben können Sie das wie im folgenden Code-Snippet
            durchführen.<br/>
            <br/>
            <code class="code"># mysql -u BENUTZERNAME -p<br/> 
 mysql> create database fibu;</code> 
            <br/><br/>
            Als Benutzernamen und Passwort verwenden Sie bitte eine Kombination, die den Verbindungsaufbau mit Ihrer
            Datenbank erlaubt.
            </td></tr>
    <tr><td><img src="./img/wizzard_page3.png"/></td>
        <td>In diesem Schritt wird in der durch die vorher angegebenen Verbindungsdaten spezifizierten Datenbank das
        Schema der Datenbank des HTML5-Haushaltsbuchs angelegt. Dieser Schritt kann bei einer leeren Datenbank völlig 
        bedenkenlos ausgeführt werden. (Das ist z. B. dann der Fall, wenn Sie wie im vorherigen Schritt die Datenbank fibu
        erst frisch angelegt haben).</td></tr>
    <tr><td><img src="./img/wizzard_page4.png"/></td>
        <td>In diesem Schritt müssen Sie mindestens einen Benutzer anlegen, mit dem Sie sich später am Haushaltsbuch
        anmelden können. Dabei wird neben dem Benutzer auch der Standard-Mandant mit der ID 1 angelegt. </td></tr>
    <tr><td><img src="./img/wizzard_page5.png"/></td>
        <td>Bitte starten Sie nun über den untenstehenden Button das HTML5-Haushaltsbuch und testen Sie ob alles
        wie erwünscht funktioniert. Das Anlegen von Konten, das Anlegen von Schnellbuchungen und das Erfassen von
        Buchungen. Ist alles in Ordnung gehen Sie wie angegeben vor und löschen Sie die Datei install.php und
        den Ordner /install.</td></tr>
    </table>
    </p>
    <p class="lead">
    Manuelle Installation unter Debian oder Ubuntu
    </p>
    <p>
    Vor der Installation laut folgendem Code-Listing bitte falls nicht bereits vorhanden apache2, php5 und mysql5.x z. B. mittels apt-get installieren.
    </p>
    <p>
    <b>Hinweis:</b> Für die Vereinfachung der Installation wird derzeit ein Installer entwickelt, dieser wird im Rahmen des kommenden Release 0.1.03 ausgeliefert werden.
    Ein verbindlicher Zeitpunkt für die Veröffentlichung von Release 0.1.03 steht noch nicht fest.
    </p>
    <p class="code"><code class="code"># cd /var/www <br/>
    # mkdir fibu <br/>
    # cd fibu <br/>
    # wget https://github.com/wolfgang-wiedermann/php_mobile_accounting/archive/v0.1.02.tar.gz <br/>
    # tar -zxf v0.1.02.tar.gz <br/>
    # cd php_mobile_accounting-0.1.02 <br/>
    # mv * .. <br/>
    # cd .. <br/>
    # rm -r php_mobile_accounting-0.1.02 <br/>
    # cd lib <br/>
    # cp Database.php.template Database.php <br/>
    # vim Database.php <br/>
    // Datenbankverbindung konfigurieren <br/>
    # cd .. <br/>
    # mysql -u BENUTZERNAME -p <br/>
    mysql&gt; create database fibu; <br/>
    mysql&gt; use fibu; <br/>
    mysql&gt; \. sql/create-tables-and-views.sql <br/>
    mysql&gt; insert into fi_user values(0, 'benutzername', 'Benutzerbeschreibung', 1, now()); <br/>
    mysql&gt; insert into fi_mandant values(0, 'Mandantbeschreibung', 1, now()); <br/>
    mysql&gt; quit <br/>
    # htpasswd -c .passwd benutzername <br/>
    # vim .htaccess <br/>
    // Noch den Pfad zur Datei .passwd eintragen <br/>
    </code></p>
    <p class="lead">
    Installation eines Beispiel-Kontenplans mit vorbereiteten Buchungs-Shortcuts
    </p>
    <p>
    Die Installation des Beispiel-Kontenplans setzt ein vollständig installiertes HTML5-Haushaltsbuch (siehe Beispiel für Ubuntu oder Debian) voraus.
    </p>
    <p class="code"><code class="code">
    # wget https://raw.githubusercontent.com/wolfgang-wiedermann/php_mobile_accounting/master/sql/sample_kontenplan_single.sql<br/>
    # mysql -u BENUTZERNAME -p<br/>
    mysql&gt; \. sample_kontenplan_single.sql<br/>
    mysql&gt; quit<br/>
    </code></p>
</div>
</div>
</section>
<!-- Installation des Haushaltsbuch Ende -->

