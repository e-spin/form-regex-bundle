# Contao form-regex (EN)

With the extension, a new text field is available in the form generator, where a
Individual input check via [Regular Expression (Regex)](https://en.wikipedia.org/wiki/Regular_expression)
and a message is displayed in the event of an error.

# Contao form-regex (DE)

Mit der Erweiterung steht ein neues Textfeld im Formulargenerator zur Verfügung, bei dem eine
individuelle Eingabeprüfung per [Regular Expression (Regex)](https://de.wikipedia.org/wiki/Regul%C3%A4rer_Ausdruck)
erfolgt und im Fehlerfall eine entsprechende Meldung ausgegeben wird.

## Beispiele

Die s. g. "Pattern" für die Regex-Prüfung findet man z. B. auf [https://regexlib.com/](https://regexlib.com/) - ein
Test ist z. B. auf der Webseite [https://regex101.com/](https://regex101.com/) möglich.

* ISBN: `^97(?:8|9)([ -])\d{1,5}\1\d{1,7}\1\d{1,6}\1\d$`
* Integer-Zahlen ohne führende 0: `([1-9]+\d*)`
* Passwort: 2 Großbuchstaben, 2 Kleinbuchstaben, 2 Sonderzeichen, mind. 9 Zeichen, keine Leerzeichen: `^(?=.*[a-z].*[a-z])(?=.*[A-Z].*[A-Z])(?=.*\d.*\d)(?=.*\W.*\W)[a-zA-Z0-9\S]{9,}$`
* E-Mail oder E-Mails als Liste mit Komma: `^((\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*)\s*[,]{0,1}\s*)+$`
