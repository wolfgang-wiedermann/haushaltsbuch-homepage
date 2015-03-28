<section id="docker">
<div class="container">
<!-- Information zur Installation des HTML5-Haushaltsbuchs -->
<div class="starter-template">
    <h1>Installationsanleitung f&uuml;r Docker-Container</h1>
    <p class="lead">Installieren Sie Ihr HTML5-Haushaltsbuch als Docker-Container.</p>
    <p>
    <ul>
        <li>Einfache und vollautomatische Installation</li>
        <li>Vollständige Isolation, Ihre lokale Installation wird nicht verändert</li>
        <li>Schnelles und einfaches Testen</li>
    </ul>
    </p>
    <p class="lead">Installationsanleitung</p>
    <ol>
    <li>
    Installieren Sie Docker auf Ihrem Rechner. Folgen Sie dazu der Anleitung unter 
    <a href="https://docs.docker.com/installation/">https://docs.docker.com/installation/</a>.
    </li>
    <li>
    Danach geht es ganz einfach weiter: Laden Sie das Installationspaket für das HTML5-Haushaltsbuch
    mit Docker von <a href="https://github.com/wolfgang-wiedermann/html5-hhb-docker/archive/master.zip">https://github.com/wolfgang-wiedermann/html5-hhb-docker/</a> 
    und Entpacken sie die ZIP-Datei. 
    </li>
    <li>
    Wechseln Sie mit der Shell, mit der Sie Docker verwenden können in das Verzeichnis, in das Sie die ZIP-Datei
    entpackt haben.
    </li>
    <li>
    <code># ./build.sh</code><br/>
    <code># ./run.sh</code>
    </li>
    <li>
    Zum Stoppen des Containers verwenden Sie:<br/>
    <code># docker stop html5-hhb</code><br/>
    Zum erneuten Starten des Containers verwenden Sie:<br/>
    <code># docker start html5-hhb</code> oder<br/>
    <code># ./start.sh</code>
    </li>
    </ol>
    <p class="lead">Ausprobieren</p>
    Um das im Docker-Container installierte Haushaltsbuch zu testen geben Sie in Ihrem Browser 
    die IP-Adresse des Rechners, auf dem Sie den Docker-Container installiert haben (im Standardfall, wenn
    Sie auf Ihrem lokalen Rechner Installiert haben 127.0.0.1) als Bestandteil der folgenden URL in Ihren 
    Browser ein. <br/>
    <br/>
    <code>http://[IP-Adresse]:8080/fibu/html/</code><br/>
    <br/>
    Danach werden Sie nach einem Benutzernamen und einem Passwort gefragt. Verwenden Sie hier die Kombination 
    aus <b>test</b> und <b>test1234</b>
    <p class="lead">Vorbedingungen</p>
    <p>
    Diese Installationsanleitung wurde derzeit ausschließlich mit Ubuntu 14.04 und der darin mittels
    <code># apt-get install docker.io</code> installierbaren Docker-Version 1.0.1 getestet. Insbesondere das
    Dockerfile sollte allerdings auch mit anderen Installationsumgebungen funktionieren.
    </p>
</div>
</div>
</section>
<!-- Installation des Haushaltsbuch Ende -->

