Title: Erstellungshinweise
----
Icon: newsession
----
Text:
*Um diese Anleitung aus der Hauptnavigation zu entfernen, löschen Sie die "05-" aus dem Ordnernamen, die Seite ist dann weiterhin unter dem Link //url/erstellungshinweise erreichbar. Wenn die Anleitung nicht mehr benötigt wird, den Ordner einfach löschen.*

## Allgemeine Hinweise
Insgesamt gibt es 3 Typen von Textdateien, die Inhalte für die Anleitungen aufnehmen. Die Textdateien haben den gleichen Namen wie das dazugehörige Template, das die Inhalte ausgibt

- about.[de/en].md  => /site/templates/about (Seite "Über ARSnova")
- instructions.[de/en].md  => /site/templates/instructions.php (Seiten "Als Student/in nutzen" und "Als Dozent/in nutzen")
- video-instructions.[de/en].md  => /site/templates/video-instructions.php (Seite Video-Einsatzszenarien)

Die Templates "main-navigation.php" und "sub-navigation.php" dienen ihrem Namenszweck.

### Sprachvarianten
Die Textdateien für die jeweilige Sprache müssen zwischen Template-Name und Endung mit der Lokale der jeweiligen Sprache benannt werden: instructions.de.md und instructions.en.md. 

###URL-Key
In den englischen Textdateien kann zusätzlich das Feld URL-Key ausgefüllt werden; dieses dient dazu, die URL der Seite, die ansonsten vom Ordnernamen übernommen wird, zu lokalisieren. Da die URL des Manuals in der eingebetteten Variante jedoch entfällt, ist das auch nicht unbedingt notwendig.

## Textdateien  instructions.[de/en].md
Die Inhalte dieser Textdateien werden standardmäßig als "Carousel"
mit Bild und Erläuterungstext ausgegeben. Die Screenshots zu den Handlungsanweisungen werden daher automatisch eingelesen. Die Dateinamen der Screenshots müssen Sie nach dem folgenden Schema benennen:

**locale_laufendeNummer[-dateiname].extension** (z.B. de_1000-anmelden.png)

Die Anzahl der Bilder und Anzahl der Handlungsschritte sollten übereinstimmen.

Die einzelnen Handlungsschritte werden im Bereich "Instructions" in die beiden Felder "instruction" und "result" eingegeben. Hinter jedem Feld muss jeweils ein ">" Zeichen stehen, der Text startet mit Indent von einem Tab in der nächsten Zeile.

## Textdateien about.[de/en].md und video-instructions.[de/en].md
Diese Dateien haben neben dem Title-Feld nur ein Textfeld, in die Text, Bilder und Videos fortlaufend eingegeben werden.

## Markdown und Kirbytext
Text wird in (link: http://daringfireball.net/projects/markdown/syntax text: Markdown) notiert. (link: http://michelf.com/projects/php-markdown/extra/text: Markdown Extra) ist aktiviert und kann ebenfalls benutzt werden. Zum Einfügen von Links, Bildern etc. kann neben der Markdown-Notation auch Kirbytext benutzt werden.

### Links
Link ohne Linktext:
```
(\link: http://arsnova.eu)
```
Link mit Linktext:

```
(\link: https://arsnova.eu text: ARSnova)
```
Relative Links zu einer bestimmten Seite innerhalb der Website:

```
(\link: als-student-nutzen/als-dozent-nutzen)
(\link: ueber-arsnova)
```
### Bilder
Bild aus dem gleichen Ordner einfügen ohne weitere Optionen:
```
(\image: just-in-time-teaching.png)
```
Optionen:
- title
- alt
- caption
- width
- height etc.

```
(\image: just-in-time-teaching.png alt: Die Umsetzung des Just-in-Time Teaching Konzeptes in ARSnova width: 100% height:auto)
```
Bilder von externen Websites verlinken:
```
(\image: http://flickr.com/beispiel.jpg)
```

### Dateien zum Download
Datei verlinken mit Linktext:
```
(\file:arsnova-brochure.pdf text: Laden Sie die ARSnova-Broschüre herunter)
```
### YouTube Videos
```
(\youtube: https://www.youtube.com/watch?v=T3FTTVFPglw#t=89)
```
Weitere Infos zu Kirbytext: (link: http://getkirby.com/docs/content/text)


