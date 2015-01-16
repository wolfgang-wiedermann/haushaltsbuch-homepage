<section id="update3to4">
<div class="container">
<!-- Information zum Update des HTML5-Haushaltsbuchs von 0.1.03 nach 0.1.04 -->
<div class="starter-template">
    <h1>Update-Anleitung</h1>
    <p class="lead">Aktualisieren von Version 0.1.03 nach 0.1.04</p>
    <p>
    <ul>
      <li><a href="#update3to4_ownserver">Update einer unter Debian oder Ubuntu betriebenen Installation</a></li>
      <li><a href="#update3to4_hosting">Update einer bei einem Web-Hoster betriebenen Installation</a></li>
    </ul>
    </p>
    <p class="lead" id="update3to4_ownserver">
    Update einer auf einem eigenen Debian oder Ubuntu Server betriebenen Installation 
    </p>
    <p>
    Die gesamte Anleitung geht davon aus, dass Sie Ihr Haushaltsbuch unter /var/www/html/fibu installiert haben und den Datenbanknamen fibu verwenden. 
    Sollte das nicht der Fall sein brauchen Sie nur statt dessen Ihren tatsächlichen Installationspfad und Ihren tatsächlichen Datenbanknamen berücksichtigen.
    Ihren Datenbanknamen finden Sie in der Datei /var/www/html/fibu/lib/Database.php.
    </p>
    <h3>Sicher Sie Ihre bestehende Installation</h3>
    <p>
    <ol>
      <li>Verschieben Sie den Inhalt von /var/www/html/fibu nach /var/www/html/fibu_old</li>
      <code>mv /var/www/html/fibu /var/www/html/fibu_old</code>
      <li>Sichern Sie Ihre Datenbankinhalte</li>
      <code>mysqldump -u root -p fibu &gt; ~/backup_vor_update.sql</code>
    </ol>
    </p>
    <h3>Führen Sie den Upgrade aus</h3>
    <p>
    <ol>
      <li>Legen Sie ein neues Verzeichnis /var/www/html/fibu an</li>
      <code>mkdir /var/www/html/fibu</code>
      <li>Laden Sie die Version 0.1.04 des Haushaltsbuchs herunter</li>
      <code>cd /var/www/html/fibu<br>wget https://github.com/wolfgang-wiedermann/php_mobile_accounting/archive/v0.1.04.zip</code>
      <li>Entpacken Sie das geladene Archiv</li>
      <code>unzip v0.1.04.zip<br>rm v0.1.04.zip<br>mv ./php_mobile_accounting-0.1.04/* .<br>rmdir php_mobile_accounting-0.1.04</code>
      <li>Entfernen Sie den für den Update nicht erforderlichen Installer</li>
      <code>rm install.php</code><br>
      <code>rm -r install</code><br>
      <code>rm htaccess.template</code><br>
      <code>rm -r test</code><br>
      <code>rm test.php</code>
      <li>Kopieren Sie Ihre Konfigurationsdateien aus Ihrer Sicherung</li>
      <code>cp /var/www/html/fibu_old/.htaccess .htaccess</code><br>
      <code>cp /var/www/html/fibu_old/.htpasswd .htpasswd</code><br>
      <code>cp /var/www/html/fibu_old/lib/Database.php ./lib/Database.php</code>
      <li>Aktualisieren Sie die Datenbank</li>
      <code>cd /var/www/html/fibu</code><br>
      <code>mysql -u root -p</code><br>
      <code>mysql&gt; use fibu;</code><br>
      <code>mysql&gt; \. ./sql/create_table_hlp_days.sql</code>
    </ol>
    </p>
    <h3>Testen Sie Ihr aktualisiertes Haushaltsbuch</h3>
    <p>
    Öffnen Sie Ihr Haushaltsbuch wie gewohnt im Browser (z. B. unter http://localhost/fibu/html/index.php) und drücken Sie 1 bis 2 mal die F5-Taste.
    Es sollte dann eine Dialogbox erscheinen, die Sie darauf hinweist, dass Ihr Haushaltsbuch aktualisiert worden ist.
    </p>
    <p>
    Im Anschluss daran sollten Sie die verschiedenen Funktionen des Haushaltsbuch durchprobieren. Öffnen Sie die Ergebnisrechnungen, Verlaufsauswertungen etc.
    und führen Sie zum Test eine Buchung mit einem Betrag von 0.00 &euro; durch. Wenn das alles funktioniert haben Sie den Update erfolgreich durchgeführt und
    können die Sicherung unter /var/www/html/fibu_old entfernen.
    </p>
    <p>
    Bitte vergessen Sie nicht, dass Sie nun auf jedem Gerät, auf dem Sie die aktuelle Version des Haushaltsbuchs nach der Aktualisierung zum ersten
    mal Benutzen 1 bis 2 mal die F5-Taste drücken müssen, so dass alle HTML- und Javascript-Dateien im Cache des Browsers aktualisiert werden.
    </p>
    <p class="lead" id="update3to4_hosting">
    Update einer bei einem Web-Hoster betriebenen Installation
    </p>
    <p>
    Für den Fall, dass Sie eine Installation aktualisieren wollen, die auf einem Server betrieben wird, auf dem Sie keinen Shell-Zugriff (z. B. per SSH) haben, müssen Sie einige Update-Schritte mit anderen
    Werkzeugen durchführen. Laden Sie zum Sichern die Daten per ftp oder sftp herunter, führen Sie das Entpacken der zip-Datei auf Ihrem lokalen Rechner aus und laden Sie die benötigten Dateien per
    FTP zum Server hoch. Für die Aktualisierung der Datenbank sollten Sie in einer Hosting-Umgebung das üblicherweise dort angebotene PHPMyAdmin verwenden.
    </p>
</div>
</div>
</section>
<!-- Installation des Haushaltsbuch Ende -->

