# Changelog

## 5.0.5 (29.09.2026)

- Lizenzbedingungen liegen dem Paket jetzt bei: `LIZENZ-de.txt` als maßgebliche Fassung und `LICENSE-en.txt` als englische Übersetzung. Bisher enthielt das Paket keinerlei Lizenztext.
- Neue `CREDITS.txt` weist alle Bestandteile Dritter nach – Schriften, Icons, das `count-up.js` und die Demo-Bilder. Die vollständigen Lizenztexte liegen im Ordner `licenses/`, weil sowohl die SIL Open Font License als auch die Apache License 2.0 die Mitlieferung des Textes verlangen.
- Lizenzangabe in der `composer.json` von `LGPL-3.0-or-later` auf `proprietary` geändert. Die bisherige Angabe widersprach den Lizenzbedingungen. Das Theme-Bundle `erdmannfreunde/lasr-theme-bundle` bleibt davon unberührt und weiterhin LGPL.
- `trumps/_documentation.scss` aufgeräumt: `.color-palette` und die ungenutzten `.bg-*`-Klassen entfernt. `.bg-dark` bleibt, die Meta-Navigation der Demo nutzt sie.

## 5.0.4 (23.09.2026)

- Das Logo der Demo kommt jetzt aus dem Theme (`assets/lasr-theme/img/logo.svg`) statt aus `files/demo`. Damit lässt es sich über den Theme Editor ersetzen.
- Theme Toolbox 4.2 wird ausdrücklich verlangt. Bisher stand dort ^4.0, obwohl die Presets und Design-Tokens von LASR 5 den Live-Editor ab 4.2 voraussetzen.
- Demo-Inhalte aktualisiert: Impressum nennt Adobe Stock als Bildquelle, die Link-Elemente und der Copyright-Hinweis verweisen auf flow-contao-themes.de.
- Dokumentation im Demo-Inhalt überarbeitet: veraltete Angaben zu `files/theme` und die Seite „Variablen“ sind entfallen. Diese Themen stehen jetzt in der zentralen Dokumentation unter docs.flow-contao-themes.de.

## 5.0.3 (07.09.2026)

- Hauptnavigation: Dropdowns lassen sich auf Windows-Hybridgeräten (z. B. Surface) jetzt auch per Maus öffnen, wenn der Touchscreen als primäres Eingabegerät gemeldet wird (Danke Micha!)
- Hauptnavigation: Nach einer Touch-Geste wird der erste Mausklick auf einen Menüpunkt mit Untermenü nicht mehr verschluckt
- Hauptnavigation: Ein per Touch geöffnetes Dropdown schließt jetzt auch beim Klick außerhalb der Navigation
- Hinweis: Wer eine eigene `_navs.scss` oder `navigation.js` im Custom-Verzeichnis liegen hat, erhält die Korrekturen nicht automatisch — die Theme Toolbox löst Custom-Dateien vor den Theme-Originalen auf

## 5.0.2 (23.07.2026)

- Border-Radius für das Medien-Video korrigiert
- Pfad zum Checkbox-Icon in Formularen korrigiert

## 5.0.1 (22.07.2026)

- LASR unterstützt nun den neuen Live-Theme-Editor im Frontend und hat 4 Presets dabei
- kleinere Anpassungen, u.a. für Card, Kontakt und Portfolio, um Änderungen beim Border und Border-Radius via Live-Theme-Editor dirtekt sichtbar zu machen
- card--minimal in der Dokumentation ergänzt

## 5.0.0 (06.05.2026)

Die neue Version 5.0 bringt neben einer verbesserten Unterstützung für Contao 5.7 (z.B. Twig-Templates) eine völlig neue Theme Struktur und Arbeitsweise über die Theme Toolbox mit.

### Neue Theme-Struktur

- Assets wie SCSS, Bilder, JS und Fonts liegen nicht mehr unter `files/theme`, sondern unter `layout/lasr-theme`
- Dadurch lassen sich Assets nicht mehr über die Dateiverwaltung bearbeiten, sondern über den Theme-Editor der Theme Toolbox oder einen eigenen Code-Editor
- JS-Dateien (`accessibility.js`, `count-up.js`, `navigation.js`, `portfolio-filter-animation.js`) werden nun unkomprimiert ausgeliefert, damit sie sich über den Theme-Editor anpassen lassen
- Theme-Updates lassen sich jetzt direkt über das Backend der Theme Toolbox hochladen

### Templates

- Modul- und News-Templates wurden auf das neue Twig-Format umgestellt (`mod_article.html.twig`, `news_latest.html.twig`, `news_simple.html.twig`)
- News-Templates geben jetzt automatisch Schema.org-/JSON-LD-Daten aus

### Styling

- Aufräumarbeiten in den SCSS-Dateien (u. a. Entfernen nicht mehr benötigter Vendor-Prefixes)
