<section id="installieren">
<div class="container">
<!-- Information zur Installation des HTML5-Haushaltsbuchs -->
<div class="starter-template">
    <h1>Installationsanleitung</h1>
    <p class="lead">
    Installation unter Windows (mit XAMPP)
    </p>
    <p>
    Eine Installationsanleitung für das HTML5-Haushaltsbuch unter Windows mit <a href="https://www.apachefriends.org/de/index.html">XAMPP</a> wird bald zur Verfügung gestellt.
    </p>
    <p class="lead">
    Installation unter Debian oder Ubuntu
    </p>
    <p>
    Vor der Installation laut folgendem Code-Listing bitte falls nicht bereits vorhanden apache2, php5 und mysql5.x z. B. mittels apt-get installieren.
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
</div>
</div>
</section>
<!-- Installation des Haushaltsbuch Ende -->

