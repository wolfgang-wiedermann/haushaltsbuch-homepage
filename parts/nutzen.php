<section id="nutzen">
<div class="container">
<!-- Erste Schritte mit dem HTML5-Haushaltsbuch -->
<div class="starter-template">
    <h1>Erste Schritte mit dem HTML5-Haushaltsbuch</h1>
    <p class="lead">
    Das HTML5-Haushaltsbuch basiert auf einer für die Nutzung im privaten Haushalt
    stark vereinfachten Form der doppelten Buchführung. Dieser Ansatz versucht einerseits
    die <u>Vorteile der doppelten Buchführung zu nutzen</u> und andererseits eine
    <u>möglichst einfache Form der Erfassung</u> bereit zu stellen.<br/>
    </p>
    <h2>Anmeldung am System</h2>
    <p>
    Um sich am HTML5-Haushaltsbuch anmelden zu können ist ein vollständig installiertes System 
    Voraussetzung. In dieser Einführung gehen wir davon aus, dass diese Voraussetzung erfüllt ist, und Sie gemäß des
    Kapitels Installation vorgegangen sind um das System unter http://localhost/fibu zu installieren. 
    </p>
    <p>
    Im ersten Schritt zur Anmeldung am System geben Sie bitte in der Adressleiste Ihres Browsers den Pfad zu Ihrer 
    Installation, gefolgt von html/ ein. Im Falle unseres Beispiels ist das "https://localhost/fibu/html/".
    </p>
    <img src="./img/erste_schritte_url_eingeben.png" class="img-thumbnail" alt="Erster Schritt: URL eingeben"/>
    <p class="after-image">
    Danach werden Sie von Ihrem Browser (hier Google Chrome) aufgefordert, Ihren Benutzernamen und Ihr Passwort einzugeben.
    </p>
    <img src="./img/erste_schritte_benutzerundpasswort_eingeben.png" class="img-thumbnail" alt="Benutzername und Passwort eingeben"/>
    <p class="after-image">
    Wenn Sie die Installation korrekt durchgeführt und das dabei angegebene Passwort korrekt eingegeben haben sind Sie 
    nun am Haushaltsbuch angemeldet. Das erkennen Sie daran, dass Sie die folgende Maske in Ihrem Browser angezeigt bekommen.
    </p>
    <img src="./img/erste_schritte_erfolgreich_angemeldet.png" class="img-thumbnail" alt="Erfolgreich angemeldet"/>

    <h2>Kontenarten</h2>
    <p>
    Das HTML5-Haushaltsbuch verwendet vier zentrale Kontenarten:
    <ul>
        <li><b>Aktivkonten</b> - Zur Verwaltung von Beständen (Bankkonten, Geldbeutel, Grundstücke, Autos etc.)</li>
        <li><b>Passivkonten</b> - Zur Verwaltung der Eigentumsverhältnisse (Eigenkapital, Darlehen, kurzfristige Verbindlichkeiten)</li>
        <li><b>Aufwandskonten</b> - Zur Kategorisierung von Ausgaben" bzw. Aufwendungen (Tanken, Heizen, Essen, Strom)</li>
        <li><b>Ertragskonten</b> - Zur Kategorisierung von Einkünften (Gehalt, Nebentätigkeiten, Geschenke, eBay-Verkäufe)</li>
    </ul>
    Die Kontenarten Aktiv und Passiv werden in der Bilanz dargestellt. Die Aktivseite der Bilanz zeigt somit welche Vermögensbestandteile
    vorhanden sind. Die Passivseite stellt dar, zu welchen Teilen das Vermögen wem gehört. 
    <h3>Beispiel einer Bilanz</h3>
    <table class="balance" alt="Bilanz als Tabelle">
    <thead>
    <tr><td>Aktiva</td><td>Betrag</td><td class="balance-delimiter">Passiva</td><td>Betrag</td></tr>
    </thead>
    <tbody>
    <tr><td>Gartengrundstück</td><td class="balance-delimited">5.000,-- &euro;</td><td>Eigenkapital</td><td>200.000,-- &euro;</td></tr>
    <tr><td>Hausgrundstück</td><td class="balance-delimited">50.000,-- &euro;</td><td>Grundschulddarlehen</td><td>50.000,-- &euro;</td></tr>
    <tr><td>Haus</td><td class="balance-delimited">250.000,-- &euro;</td><td>Bauspardarlehen</td><td>80.000,-- &euro;</td></tr>
    <tr><td>Auto</td><td class="balance-delimited">8.000,-- &euro;</td></tr>
    <tr><td>Girokonto</td><td class="balance-delimited">10.000,-- &euro;</td></tr>
    <tr><td>Sparbriefe</td><td class="balance-delimited">10.000,-- &euro;</td></tr>
    <tr><td>Geldbeutel</td><td>250,-- &euro;</td><td>Gewinn:</td><td>3.250,-- &euro;</td></tr>
    </tbody>
    </table>
    Die Kontenarten Aufwand und Ertrag hingegen werden in der Gewinn- und Verlustrechnung dargestellt. Sie stellt detailliert dar
    woher das verfügbare Geld kommt und wohin es wieder verschwindet. Die Differenz aus Aufwand und Ertrag gibt in unserem Fall den Gewinn.
    <h3>Beispiel einer Gewinn- und Verlustrechnung</h3>
    <table class="balance" alt="Gewinn- und Verlustrechnung">
    <thead>
    <tr><td>Aufwand</td><td>Betrag</td><td class="balance-delimiter">Ertrag</td><td>Betrag</td></tr>
    </thead>
    <tbody>
    <tr><td>Miete</td><td>400,-- &euro;</td><td>Gehalt</td><td>1.900,-- &euro;</td></tr>
    <tr><td>Lebensmittel</td><td>150,-- &euro;</td></tr>
    <tr><td>Sprit</td><td>100,-- &euro;</td></tr>
    <tr><td>Telefon und Internet</td><td>50,-- &euro;</td></tr>
    <tr><td><b>Gewinn</b></td><td>1.300,-- &euro;</td></tr>
    </tbody>
    </table>
    </p>    

    <h2>Vorgefertigte Kontenpläne</h2>
    <div class="alert alert-success" style="font-size:14pt">
    Wenn Sie die gesamte Flexibilität des HTML5-Haushaltsbuchs nutzen wollen sollten Sie
    sich einen <u>eigenen Kontenplan</u> definieren, der an Ihre persönlichen Gegebenheiten angepasst
    ist. Wie das funktioniert beschreiben wir am Ende dieses Kapitels unter dem Punkt "Eigener Kontenplan".
    </div>

</div>
</div>
</section>
<!-- Ende: Erste Schritte mit dem HTML5-Haushaltsbuch -->

