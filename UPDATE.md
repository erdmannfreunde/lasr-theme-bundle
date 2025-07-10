# UPDATES

## LASR 4.2.1

- Im Seitenlayout „Standard“ wurde der zusätzliche Head-Tag entfernt und stattdessen die SCSS-Datei über „Externe Stylesheets“ wieder eingefügt.

## LASR 4.2.0

Es gibt nun standardmäßig eine CSS-Gestaltung für Radio-Buttons und Checkboxen. Bei den Chekcboxen kann eine zusätzliche Variante für ein „Switch“-Layout genutzt werden, zum Beispiel zur Bestätigung der Datenschutzerklärung. Außerdem gibt es für Textfelder die „Inline“-Variante, bei der das Label bei Fokus des Elements oberhalb steht.

Das Portfolio-Listen-Template wurde angepasst, sodass nur noch ein Link pro Beitrag erstellt wird, was die Tastatur-Navigation erleichtert.

Außerdem funktioniert nun auch die Variante „Bild umfließen“ für das Text-Element (Danke Ronald).

Folgende Dateien wurden angepasst:

### \_variables.scss, \_forms.scss

- Es wurden eine Vielzahl von Custom Properties mit dem Prefix `--forms-` ergänzt. In der `_forms.scss` wurden unter anderem Anweisungen für `.ce_form`, `.widget-radio`, `widget-checkbox` ergänzt.
- Wir empfehlen, die Anweisungen in der `_variables.scss` zu ergänzen und die `_forms.scss` soweit möglich zu ersetzen. Für Checkboxen gibt es ein zusätzliches Icon unter `files/theme/img/icons/checkmark.svg`.

### \_portfolio.scss

- CSS für Bildlinks wurden entfernt
- Mittels Pseudo-Element ::after wurde der gesamte Beitrag klickbar gemacht.
- Es wird empfohlen, die `_portfolio.scss` soweit möglich zu ersetzen.

### \_media.scss

Innerhalb von `.content-text` wurde folgende Anweisung ergänzt, damit der Text das Bild umfließt:

```
&.text--float {
    display: block;

    &.media--left,
    &.media--right {
      figure {
        @include media-query(screen-sm) {
          width: 40%;
        }
      }
    }

    &.media--left {
      figure {
        @include media-query(screen-sm) {
          float: left;
        }
      }
    }

    &.media--right {
      figure {
        @include media-query(screen-sm) {
          float: right;
        }
      }
    }
  }
```

### \_links.scss und \_newsletter.scss

- In der `_links.scss` wurde ein Placeholder `%button--secondary` ergänzt (und auch genutzt), um Links das Aussehen eine Sekundärbuttons geben zu können (per `@extend`).
- Dieser Placeholder wird auch in der `_newsletter.scss` verwendet.
- Die Erweiterung von Klassen mittels `@extend` gilt als veraltet, ist aber noch möglich. Es wird empfohlen, die `_links_.scss` und `_newsletter.scss` soweit möglich zu ersetzen.

## LASR 4.1.1

Ein Fehler im Script verhinderte die Auswahl eines Menüpunkts mit der ENTER-Taste. außerdem wurde eine Variable ergänzt, um die Farbe des Menüs einfacher ändern zu können.

- `theme/js/accessibility.js` wurde optimiert

### \_variables.scss, \_navs.scss

`--nav-main-color` wurde ergänzt, um die Farbe des Hauptmenüs per Variable ändern zu können.

## LASR 4.1.0

Die neue Version hat eine Vielzahl von Neuerungen zur Verbesserungen der Barrierefreiheit bekommen:

### \_variables.scss

- generelle Farbanpassungen,
- neue Variablen zur Auszeichnung von Links:

```
--links-color-visited: color-mix(in srgb, var(--color-highlight), red 40%);
  --links-outline-focus-color: var(--color-brand-primary-darker);
  --links-outline-focus: 2px dotted var(--links-outline-focus-color);
  --links-outline-active: none;
```

### \_shared.scss

- Einblenden und gestalten der Sprungmarken innerhalb von Navigationen zum Überspringen von Navigationselementen:

```
a {
  &.invisible {
    &:focus-visible {
      outline: none;
      clip: unset;
      height: auto;
      width: auto;
      color: var(--color-text-inverted);
      background-color: var(--color-text);
      z-index: 1005;
      position: fixed;
      left: 0;
      top: 0;
      margin: 0;
    }
  }
}
```

### \_navs.scss

```
.nav--main {
  @media (hover) {
    .level_1 {
      > li.submenu {
        &.submenu--active {
          > a,
          > strong {
            &::after {
              transform: rotate(180deg);
            }
          }

          > .level_2 {
            @include media-query(screen-menu) {
              overflow: visible;
              z-index: 1002;
              max-height: 9999px;
              opacity: 100%;
              transition-delay: 0s;
              visibility: visible;
            }
          }
        }
      }
    }

    .level_2 {
      > li.submenu {
        &.submenu--active {
          > a,
          > strong {
            &::after {
              transform: rotate(180deg);
            }
          }

          > .level_3 {
            @include media-query(screen-menu) {
              overflow: visible;
              z-index: 1002;
              max-height: 9999px;
              opacity: 100%;
              transition-delay: 0s;
              visibility: visible;
            }
          }
        }
      }
    }
  }
}

.nav--mobile {
  li {
    &.submenu--active {
      > a,
      > strong {
        &::after {
          transform: rotate(180deg);
        }
      }

      > .level_2,
      > .level_3 {
        max-height: 999px;
      }
    }
  }
}

.nav-toggler__button {
  &:focus-visible {
    outline: var(--links-outline-focus);
  }
}

.nav--meta {
  a,
  strong.active,
  strong.trail {
    &:focus-visible {
      outline-color: var(--nav-meta-color);
    }
  }

  strong.active {
    opacity: 70%;
  }
}
```

### \_accordion.scss, \_card.scss, \_logo.scss, \_portfolio.scss, \_news.scss

Allgemeine Anpassungen, um den Fokus auf Elementen korrekt darzustellen, z.B. Block-Anweisungen für einige Linkflächen:

```
a {
    display: block;
  }
```
