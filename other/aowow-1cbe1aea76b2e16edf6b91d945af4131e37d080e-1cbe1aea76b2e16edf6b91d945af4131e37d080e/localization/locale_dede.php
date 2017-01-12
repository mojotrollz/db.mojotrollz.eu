<?php

if (!defined('AOWOW_REVISION'))
    die('illegal access');

/*
    some translations have yet to be taken from or improved by the use of:
    <path>\World of Warcraft\Data\deDE\patch-deDE-3.MPQ\Interface\FrameXML\GlobalStrings.lua
    like: ITEM_MOD_*, POWER_TYPE_*, ITEM_BIND_*, PVP_RANK_*
*/

$lang = array(
    // page variables
    'timeUnits' => array(
        'sg'            => ["Jahr",  "Monat",  "Woche",  "Tag",   "Stunde",  "Minute",  "Sekunde",  "Millisekunde"],
        'pl'            => ["Jahre", "Monate", "Wochen", "Tage",  "Stunden", "Minuten", "Sekunden", "Millisekunden"],
        'ab'            => ["J.",    "M.",     "W.",     "Tag",   "Std.",    "Min.",    "Sek.",     "Ms."]
    ),
    'main' => array(
        'name'          => "Name",
        'link'          => "Link",
        'signIn'        => "Anmelden / Registrieren",
        'jsError'       => "Stelle bitte sicher, dass JavaScript aktiviert ist.",
        'language'      => "Sprache",
        'feedback'      => "Rückmeldung",
        'numSQL'        => "Anzahl an MySQL-Queries",
        'timeSQL'       => "Zeit für MySQL-Queries",
        'noJScript'     => '<b>Diese Seite macht ausgiebigen Gebrauch von JavaScript.</b><br />Bitte <a href="https://www.google.com/support/adsense/bin/answer.py?answer=12654" target="_blank">aktiviert JavaScript</a> in Eurem Browser.',
        'userProfiles'  => "Deine Charaktere",
        'pageNotFound'  => "Dies %s existiert nicht.",
        'gender'        => "Geschlecht",
        'sex'           => [null, "Mann", "Frau"],
        'players'       => "Spieler",
        'quickFacts'    => "Kurzübersicht",
        'screenshots'   => "Screenshots",
        'videos'        => "Videos",
        'side'          => "Seite",
        'related'       => "Weiterführende Informationen",
        'contribute'    => "Beitragen",
        // 'replyingTo'    => "Antwort zu einem Kommentar von",
        'submit'        => "Absenden",
        'cancel'        => "Abbrechen",
        'rewards'       => "Belohnungen",
        'gains'         => "Belohnungen",
        'login'         => "Login",
        'forum'         => "Forum",
        'n_a'           => "n. v.",
        'siteRep'       => "Ruf",
        'aboutUs'       => "Über Aowow",
        'and'           => " und ",
        'or'            => " oder ",
        'back'          => "Zurück",
        'reputationTip' => "Rufpunkte",
        'byUserTimeAgo' => 'Von <a href="'.HOST_URL.'/?user=%s">%1$s</a> vor %s',

        // filter
        'extSearch'     => "Erweiterte Suche",
        'addFilter'     => "Weiteren Filter hinzufügen",
        'match'         => "Verwendete Filter",
        'allFilter'     => "Alle Filters",
        'oneFilter'     => "Mindestens einer",
        'applyFilter'   => "Filter anwenden",
        'resetForm'     => "Formular zurücksetzen",
        'refineSearch'  => 'Tipp: Präzisiere deine Suche mit Durchsuchen einer <a href="javascript:;" id="fi_subcat">Unterkategorie</a>.',
        'clear'         => "leeren",
        'exactMatch'    => "Exakt passend",
        '_reqLevel'     => "Mindeststufe",

        // infobox
        'unavailable'   => "Nicht für Spieler verfügbar",
        'disabled'      => "Deaktiviert",
        'disabledHint'  => "Kann nicht erhalten oder abgeschlossen werden.",
        'serverside'    => "Serverseitig",
        'serversideHint'=> "Diese Informationen sind nicht im Client enthalten und wurden gesnifft und/oder erraten.",

        // red buttons
        'links'         => "Links",
        'compare'       => "Vergleichen",
        'view3D'        => "3D-Ansicht",
        'findUpgrades'  => "Bessere Gegenstände finden...",

        // miscTools
        'errPageTitle'  => "Seite nicht gefunden",
        'nfPageTitle'   => "Fehler",
        'subscribe'     => "Abonnieren",
        'mostComments'  => ["Gestern", "Vergangene %d Tage"],
        'utilities'     => array(
            "Neueste Ergänzungen",                  "Neueste Artikel",                      "Neueste Kommentare",                   "Neueste Screenshots",                  null,
            "Nicht bewertete Kommentare",           11 => "Neueste Videos",                 12 => "Meiste Kommentare",              13 => "Fehlende Screenshots"
        ),

        // article & infobox
        'englishOnly'   => "Diese Seite ist nur in <b>Englisch</b> verfügbar.",

        // calculators
        'preset'        => "Vorlage",
        'addWeight'     => "Weitere Gewichtung hinzufügen",
        'createWS'      => "Gewichtungsverteilung erstellen",
        'jcGemsOnly'    => "<span%s>JS-exklusive</span> Edelsteine einschließen",
        'cappedHint'    => 'Tipp: <a href="javascript:;" onclick="fi_presetDetails();">Entfernt</a> Gewichtungen für gedeckte Werte wie Trefferwertung.',
        'groupBy'       => "Ordnen nach",
        'gb'            => array(
            ["Nichts", "none"],         ["Platz", "slot"],      ["Stufe", "level"],         ["Quelle", "source"]
        ),
        'compareTool'   => "Gegenstandsvergleichswerkzeug",
        'talentCalc'    => "Talentrechner",
        'petCalc'       => "Begleiterrechner",
        'chooseClass'   => "Wählt eine Klasse",
        'chooseFamily'  => "Wählt eine Tierart",

        // profiler
        'realm'         => "Realm",
        'region'        => "Region",
        'viewCharacter' => "Charakter anzeigen",
        '_cpHead'       => "Charakter-Profiler",
        '_cpHint'       => "Der <b>Charakter-Profiler</b> gibt Euch die Möglichkeit, Euren Charakter zu editieren, bessere Ausrüstung zu finden, Eure Gearscore zu überprüfen, und mehr!",
        '_cpHelp'       => "Um loszulegen, folgt einfach den untenstehenden Schritten. Falls Ihr mehr Informationen benötigt, schaut auf unserer ausführlichen <a href=\"?help=profiler\">Hilfeseite</a> nach.",
        '_cpFooter'     => "Falls Ihr eine genauere Suche möchtet, probiert unsere <a href=\"?profiles\">erweiterten Suchoptionen</a>. Ihr könnt außerdem ein <a href=\"?profile&amp;new\">neues individuelles Profil</a> erstellen.",

        // help
        'help'          => "Hilfe",
        'helpTopics'    => array(
            "Wie man Kommentare schreibt",          "Modellviewer",                         "Screenshots: Tipps & Tricks",          "Gewichtung von Werten",
            "Talentrechner",                        "Gegenstandsvergleich",                 "Profiler",                             "Markup Guide"
        ),

        // search
        'search'        => "Suche",
        'searchButton'  => "Suche",
        'foundResult'   => "Suchergebnisse für",
        'noResult'      => "Keine Ergebnisse für",
        'tryAgain'      => "Bitte versucht es mit anderen Suchbegriffen oder überprüft deren Schreibweise.",
        'ignoredTerms'  => "Die folgenden Wörter wurden in Eurer Suche ignoriert: %s",

        // formating
        'colon'         => ': ',
        'dateFmtShort'  => "d.m.Y",
        'dateFmtLong'   => "d.m.Y \u\m H:i",

        // error
        'intError'      => "Ein interner Fehler ist aufgetreten.",
        'intError2'     => "Ein interner Fehler ist aufgetreten. (%s)",
        'genericError'  => "Ein Fehler trat auf; aktualisiert die Seite und versucht es nochmal. Wenn der Fehler bestehen bleibt, bitte meldet es bei <a href='#contact'>feedback</a>", # LANG.genericerror
        'bannedRating'  => "Ihr wurdet davon gesperrt, Kommentare zu bewerten.", # LANG.tooltip_banned_rating
        'tooManyVotes'  => "Ihr habt die tägliche Grenze für erlaubte Bewertungen erreicht. Kommt morgen mal wieder!", # LANG.tooltip_too_many_votes
    ),
    'screenshot' => array(
        'submission'    => "Screenshot-Einsendung",
        'selectAll'     => "Alles auswählen",
        'cropHint'      => "Ihr könnt Euren Screenshot zuschneiden und beschriften.",
        'displayOn'     => "Hochgeladen für:[br]%s - [%s=%d]",
        'caption'       => "Kurzbeschreibung",
        'charLimit'     => "Optional, bis zu 200 Zeichen",
        'thanks'        => array(
            'contrib' => "Vielen Dank für Euren Beitrag!",
            'goBack'  => '<a href="?%s=%d">Klickt hier</a>, um zu der vorherigen Seite zurückzukehren.',
            'note'    => "Hinweis: Euer Screenshot muss zunächst zugelassen werden, bevor es auf der Seite erscheint. Dies kann bis zu 72 Stunden dauern."
        ),
        'error'         => array(
            'unkFormat'   => "Unbekanntes Bildformat.",
            'tooSmall'    => "Euer Screenshot ist viel zu klein. (&lt; ".CFG_SCREENSHOT_MIN_SIZE."x".CFG_SCREENSHOT_MIN_SIZE.").",
            'selectSS'    => "Wählt bitte den Screenshot aus, den Ihr hochladen möchtet.",
            'notAllowed'  => "Es ist euch nicht erlaubt einen Screenshot hochzuladen!",
        )
    ),
    'game' => array(
        'achievement'   => "Erfolg",
        'achievements'  => "Erfolge",
        'class'         => "Klasse",
        'classes'       => "Klassen",
        'currency'      => "Währung",
        'currencies'    => "Währungen",
        'difficulty'    => "Modus",
        'dispelType'    => "Bannart",
        'duration'      => "Dauer",
        'emote'         => "Emote",
        'emotes'        => "Emotes",
        'enchantment'   => "Verzauberung",
        'enchantments'  => "Verzauberungen",
        'object'        => "Objekt",
        'objects'       => "Objekte",
        'glyphType'     => "Glyphenart",
        'race'          => "Volk",
        'races'         => "Völker",
        'title'         => "Titel",
        'titles'        => "Titel",
        'eventShort'    => "Ereignis",
        'event'         => "Weltereigniss",
        'events'        => "Weltereignisse",
        'faction'       => "Fraktion",
        'factions'      => "Fraktionen",
        'cooldown'      => "%s Abklingzeit",
        'item'          => "Gegenstand",
        'items'         => "Gegenstände",
        'itemset'       => "Ausrüstungsset",
        'itemsets'      => "Ausrüstungssets",
        'mechanic'      => "Auswirkung",
        'mechAbbr'      => "Ausw.",
        'meetingStone'  => "Versammlungsstein",
        'npc'           => "NPC",
        'npcs'          => "NPCs",
        'pet'           => "Begleiter",
        'pets'          => "Begleiter",
        'profile'       => "",
        'profiles'      => "Profile",
        'quest'         => "Quest",
        'quests'        => "Quests",
        'requires'      => "Benötigt %s",
        'requires2'     => "Benötigt",
        'reqLevel'      => "Benötigt Stufe %s",
        'reqLevelHlm'   => "Benötigt Stufe %s",
        'reqSkillLevel' => "Benötigte Fertigkeitsstufe",
        'level'         => "Stufe",
        'school'        => "Magieart",
        'skill'         => "Fertigkeit",
        'skills'        => "Fertigkeiten",
        'spell'         => "Zauber",
        'spells'        => "Zauber",
        'type'          => "Art",
        'valueDelim'    => " - ",                           // " bis "
        'zone'          => "Zone",
        'zones'         => "Gebiete",

        'pvp'           => "PvP",
        'honorPoints'   => "Ehrenpunkte",
        'arenaPoints'   => "Arenapunkte",
        'heroClass'     => "Heldenklasse",
        'resource'      => "Ressource",
        'resources'     => "Ressourcen",
        'role'          => "Rolle",
        'roles'         => "Rollen",
        'specs'         => "Spezialisierungen",
        '_roles'        => ["Heiler", "Nahkampf-DPS", "Distanz-DPS", "Tank"],

        'phases'        => "Phasen",
        'mode'          => "Modus",
        'modes'         => [-1 => "Beliebig", "Normal / Normal 10", "Heroisch / Normal 25", "Heroisch 10", "Heroisch 25"],
        'expansions'    => ["Classic", "The Burning Crusade", "Wrath of the Lich King"],
        'stats'         => ["Stärke", "Beweglichkeit", "Ausdauer", "Intelligenz", "Willenskraft"],
        'sources'       => array(
            "Unbekannt",                    "Hergestellt",                  "Drop",                         "PvP",                          "Quest",                        "Händler",
            "Lehrer",                       "Entdeckung",                   "Einlösung",                    "Talent",                       "Startausrüstung",              "Ereignis",
            "Erfolg",                       null,                           "Schwarzmarkt",                 "Entzaubert",                   "Geangelt",                     "Gesammelt",
            "Gemahlen",                     "Abgebaut",                     "Sondiert",                     "Aus Taschendiebstahl",         "Geborgen",                     "Gehäutet",
            "In-Game-Store"
        ),
        'languages'     => array(
             1 => "Orcisch",                 2 => "Darnassisch",             3 => "Taurisch",                6 => "Zwergisch",               7 => "Gemeinsprache",           8 => "Dämonisch",
             9 => "Titanisch",              10 => "Thalassisch",            11 => "Drachisch",              12 => "Kalimagisch",            13 => "Gnomisch",               14 => "Trollisch",
            33 => "Gossensprache",          35 => "Draeneiisch",            36 => "Zombie",                 37 => "Gnomenbinär",            38 => "Goblinbinär"
        ),
        'gl'            => [null, "Erhebliche", "Geringe"],
        'si'            => [1 => "Allianz", -1 => "Nur für Allianz", 2 => "Horde", -2 => "Nur für Horde", 3 => "Beide"],
        'resistances'   => [null, 'Heiligwiderstand', 'Feuerwiderstand', 'Naturwiderstand', 'Frostwiderstand', 'Schattenwiderstand', 'Arkanwiderstand'],
        'sc'            => ["Körperlich", "Heilig", "Feuer", "Natur", "Frost", "Schatten", "Arkan"],
        'dt'            => [null, "Magie", "Fluch", "Krankheit", "Gift", "Verstohlenheit", "Unsichtbarkeit", null, null, "Wut"],
        'cl'            => [null, "Krieger", "Paladin", "Jäger", "Schurke", "Priester", "Todesritter", "Schamane", "Magier", "Hexenmeister", null, "Druide"],
        'ra'            => [-2 => "Horde", -1 => "Allianz", "Beide", "Mensch", "Orc", "Zwerg", "Nachtelf", "Untoter", "Tauren", "Gnom", "Troll", null, "Blutelf", "Draenei"],
        'rep'           => ["Hasserfüllt", "Feindselig", "Unfreundlich", "Neutral", "Freundlich", "Wohlwollend", "Respektvoll", "Ehrfürchtig"],
        'st'            => array(
            "Vorgabe",                      "Katzengestalt",                "Baum des Lebens",              "Reisegestalt",                 "Wassergestalt",                "Bärengestalt",
            null,                           null,                           "Terrorbärengestalt",           null,                           null,                            null,
            null,                           "Schattentanz",                 null,                           null,                           "Geisterwolf",                  "Kampfhaltung",
            "Verteidigungshaltung",         "Berserkerhaltung",             null,                           null,                           "Metamorphosis",                null,
            null,                           null,                           null,                           "Schnelle Fluggestalt",         "Schattengestalt",              "Fluggestalt",
            "Verstohlenheit",               "Mondkingestalt",               "Geist der Erlösung"
        ),
        'me'            => array(
            null,                           "Bezaubert",                    "Desorientiert",                "Entwaffnet",                   "Abgelenkt",                    "Flüchtend",
            "Ergriffen",                    "Unbeweglich",                  "Befriedet",                    "Schweigend",                   "Schlafend",                    "Verlangsamt",
            "Betäubt",                      "Eingefroren",                  "Handlungsunfähig",             "Blutend",                      "Heilung",                      "Verwandelt",
            "Verbannt",                     "Abgeschirmt",                  "Gefesselt",                    "Reitend",                      "Verführt",                     "Vertrieben",
            "Entsetzt",                     "Unverwundbar",                 "Unterbrochen",                 "Benommen",                     "Entdeckung",                   "Unverwundbar",
            "Kopfnuss",                     "Wütend"
        ),
        'ct'            => array(
            "Nicht kategorisiert",          "Wildtier",                     "Drachkin",                     "Dämon",                        "Elementar",                    "Riese",
            "Untoter",                      "Humanoid",                     "Tier",                         "Mechanisch",                   "Nicht spezifiziert",           "Totem",
            "Haustier",                     "Gaswolke"
        ),
        'fa'            => array(
             1 => "Wolf",                    2 => "Katze",                   3 => "Spinne",                  4 => "Bär",                     5 => "Eber",                    6 => "Krokilisk",
             7 => "Aasvogel",                8 => "Krebs",                   9 => "Gorilla",                11 => "Raptor",                 12 => "Weitschreiter",          20 => "Skorpid",
            21 => "Schildkröte",            24 => "Fledermaus",             25 => "Hyäne",                  26 => "Raubvogel",              27 => "Windnatter",             30 => "Drachenfalke",
            31 => "Felshetzer",             32 => "Sphärenjäger",           33 => "Sporensegler",           34 => "Netherrochen",           35 => "Schlange",               37 => "Motte",
            38 => "Schimäre",               39 => "Teufelssaurier",         41 => "Silithid",               42 => "Wurm",                   43 => "Rhinozeros",             44 => "Wespe",
            45 => "Kernhund",               46 => "Geisterbestie"
        ),
        'pvpRank'       => array(
            null,                                                           "Gefreiter / Späher",                                           "Fußknecht / Grunzer",
            "Landsknecht / Waffenträger",                                   "Feldwebel / Schlachtrufer",                                    "Fähnrich / Rottenmeister",
            "Leutnant / Steingardist",                                      "Hauptmann / Blutgardist",                                      "Kürassier / Zornbringer",
            "Ritter der Allianz / Klinge der Horde",                        "Feldkomandant / Feldherr",                                     "Rittmeister / Sturmreiter",
            "Marschall / Kriegsherr",                                       "Feldmarschall / Kriegsfürst",                                  "Großmarschall / Oberster Kriegsfürst"
        ),
    ),
    'account' => array(
        'title'         => "Aowow-Konto",
        'email'         => "E-Mail-Adresse",
        'continue'      => "Fortsetzen",
        'groups'        => array(
            -1 => "Keine",                  "Tester",                       "Administrator",                "Editor",                       "Moderator",                    "Bürokrat",
            "Entwickler",                   "VIP",                          "Blogger",                      "Premium",                      "Übersetzer",                   "Handelsvertreter",
            "Screenshot-Verwalter",         "Video-Verwalter",              "API-Partner",                  "Ausstehend"
        ),
        // signIn
        'doSignIn'      => "Mit Eurem AoWoW-Konto anmelden",
        'signIn'        => "Anmelden",
        'user'          => "Benutzername",
        'pass'          => "Kennwort",
        'rememberMe'    => "Angemeldet bleiben",
        'forgot'        => "Vergessen",
        'forgotUser'    => "Benutzername",
        'forgotPass'    => "Kennwort",
        'accCreate'     => 'Noch kein Konto? <a href="?account=signup">Jetzt eins erstellen!</a>',

        // recovery
        'recoverUser'   => "Benutzernamenanfrage",
        'recoverPass'   => "Kennwort zurücksetzen: Schritt %s von 2",
        'newPass'       => "Neues Kennwort",

        // creation
        'register'      => "Registrierung: Schritt %s von 2",
        'passConfirm'   => "Kennwort bestätigen",

        // dashboard
        'ipAddress'     => "IP-Adresse",
        'lastIP'        => "Letzte bekannte IP",
        'myAccount'     => "Mein Account",
        'editAccount'   => "Benutze die folgenden Formulare um deine Account-Informationen zu aktualisieren",
        'viewPubDesc'   => 'Die Beschreibung in deinem <a href="?user=%s">öffentlichen Profil</a> ansehen',

        // bans
        'accBanned'     => "Dieses Konto wurde geschlossen",
        'bannedBy'      => "Gebannt durch",
        'ends'          => "Endet am",
        'permanent'     => "Der Bann ist permanent",
        'reason'        => "Grund",
        'noReason'      => "Es wurde kein Grund angegeben.",

        // form-text
        'emailInvalid'  => "Diese E-Mail-Adresse ist ungültig.", // message_emailnotvalid
        'emailNotFound' => "Die E-Mail-Adresse, die Ihr eingegeben habt, ist mit keinem Konto verbunden.<br><br>Falls Ihr die E-Mail-Adresse vergessen habt, mit der Ihr Euer Konto erstellt habt, kontaktiert Ihr bitte ".CFG_CONTACT_EMAIL." für Hilfestellung.",
        'createAccSent' => "Eine Nachricht wurde soeben an <b>%s</b> versandt. Folgt den Anweisungen um euer Konto zu erstellen.",
        'recovUserSent' => "Eine Nachricht wurde soeben an <b>%s</b> versandt. Folgt den Anweisungen um euren Benutzernamen zu erhalten.",
        'recovPassSent' => "Eine Nachricht wurde soeben an <b>%s</b> versandt. Folgt den Anweisungen um euer Kennwort zurückzusetzen.",
        'accActivated'  => 'Euer Konto wurde soeben aktiviert.<br>Ihr könnt euch nun <a href="?account=signin&token=%s">anmelden</a>',
        'userNotFound'  => "Ein Konto mit diesem Namen existiert nicht.",
        'wrongPass'     => "Dieses Kennwort ist ungültig.",
        // 'accInactive'   => "Dieses Konto wurde bisher nicht aktiviert.",
        'loginExceeded' => "Die maximale Anzahl an Anmelde-Versuchen von dieser IP wurde überschritten. Bitte versucht es in %s erneut.",
        'signupExceeded'=> "Die maximale Anzahl an Regustrierungen von dieser IP wurde überschritten. Bitte versucht es in %s erneut.",
        'errNameLength' => "Euer Benutzername muss mindestens 4 Zeichen lang sein.", // message_usernamemin
        'errNameChars'  => "Euer Benutzername kann nur aus Buchstaben und Zahlen bestehen.", // message_usernamenotvalid
        'errPassLength' => "Euer Kennwort muss mindestens 6 Zeichen lang sein.", // message_passwordmin
        'passMismatch'  => "Die eingegebenen Kennworte stimmen nicht überein.",
        'nameInUse'     => "Es existiert bereits ein Konto mit diesem Namen.",
        'mailInUse'     => "Diese E-Mail-Adresse ist bereits mit einem Konto verbunden.",
        'isRecovering'  => "Dieses Konto wird bereits wiederhergestellt. Folgt den Anweisungen in der Nachricht oder wartet %s bis das Token verfällt.",
        'passCheckFail' => "Die Kennwörter stimmen nicht überein.", // message_passwordsdonotmatch
        'newPassDiff'   => "Euer neues Kennwort muss sich von eurem alten Kennwort unterscheiden." // message_newpassdifferent
    ),
    'user' => array(
        'notFound'      => "Der Benutzer \"%s\" wurde nicht gefunden!",
        'removed'       => "(Entfernt)",
        'joinDate'      => "Mitglied seit",
        'lastLogin'     => "Letzter Besuch",
        'userGroups'    => "Rolle",
        'consecVisits'  => "Aufeinanderfolgende Besuche",
        'publicDesc'    => "Öffentliche Beschreibung",
        'profileTitle'  => "Profil von %s",
        'contributions' => "Beiträge",
        'uploads'       => "Hochladevorgänge",
        'comments'      => "Kommentare",
        'screenshots'   => "Screenshots",
        'videos'        => "Videos",
        'posts'         => "Forenbeiträge"
    ),
    'mail' => array(
        'tokenExpires'  => "Das Token wird in %s verfallen.",
        'accConfirm'    => ["Kontobestätigung",     "Willkommen bei ".CFG_NAME_SHORT."!\r\n\r\nKlicke auf den Link um euren Account zu aktivieren.\r\n\r\n".HOST_URL."?account=signup&token=%s\r\n\r\nFalls Ihr diese Mail nicht angefordert habt kann sie einfach ignoriert werden."],
        'recoverUser'   => ["Benutzernamenanfrage", "Folgt diesem Link um euch anzumelden.\r\n\r\n".HOST_URL."?account=signin&token=%s\r\n\r\nFalls Ihr diese Mail nicht angefordert habt kann sie einfach ignoriert werden."],
        'resetPass'     => ["Kennwortreset",        "Folgt diesem Link um euer Kennwort zurückzusetzen.\r\n\r\n".HOST_URL."?account=forgotpassword&token=%s\r\n\r\nFalls Ihr diese Mail nicht angefordert habt kann sie einfach ignoriert werden."]
    ),
    'emote' => array(
        'notFound'      => "Dieses Emote existiert nicht.",
        'self'          => "An Euch selbst",
        'target'        => "An Andere mit Ziel",
        'noTarget'      => "An Andere ohne Ziel",
        'isAnimated'    => "Besitzt eine Animation",
        'aliases'       => "Aliasse",
        'noText'        => "Dieses Emote besitzt keinen Text.",
    ),
    'enchantment' => array(
        'details'       => "Details",
        'activation'    => "Aktivierung",
        'notFound'      => "Diese Verzauberung existiert nicht.",
        'types'         => array(
            1 => "Zauber (Auslösung)",      3 => "Zauber (Anlegen)",        7 => "Zauber (Benutzen)",       8 => "Prismatischer Sockel",
            5 => "Statistik",               2 => "Waffenschaden",           6 => "DPS",                     4 => "Verteidigung"
        )
    ),
    'gameObject' => array(
        'notFound'      => "Dieses Objekt existiert nicht.",
        'cat'           => [0 => "Anderes", 9 => "Bücher", 3 => "Behälter", -5 => "Truhen", 25 => "Fischschwärme", -3 => "Kräuter", -4 => "Erzadern",     -2 => "Quest", -6 => "Werkzeuge"],
        'type'          => [                9 => "Buch",   3 => "Behälter", -5 => "Truhe",  25 => "",              -3 => "Kraut",   -4 => "Erzvorkommen", -2 => "Quest", -6 => ""],
        'unkPosition'   => "Der Standort dieses Objekts ist nicht bekannt.",
        'npcLootPH'     => 'Der Behälter <b>%s</b> beinhaltet die Beute vom Kampf gegen <a href="?npc=%d">%s</a>. Er erscheint nach seinem Tod.',
        'key'           => "Schlüssel",
        'focus'         => "Zauberfokus",
        'focusDesc'     => "Zauber, die diesen Fokus benötigen, können an diesem Objekt gewirkt werden.",
        'trap'          => "Falle",
        'triggeredBy'   => "Ausgelöst durch",
        'capturePoint'  => "Eroberungspunkt",
        'foundIn'       => "Dieses Objekt befindet sich in",
        'restock'       => "Wird alle %s wieder aufgefüllt."
    ),
    'npc' => array(
        'notFound'      => "Dieser NPC existiert nicht.",
        'classification'=> "Einstufung",
        'petFamily'     => "Tierart",
        'react'         => "Reaktion",
        'worth'         => "Wert",
        'unkPosition'   => "Der Aufenthaltsort dieses NPCs ist nicht bekannt.",
        'difficultyPH'  => "Dieser NPC ist ein Platzhalter für einen anderen Modus von",
        'seat'          => "Sitz",
        'accessory'     => "Zusätze",
        'accessoryFor'  => "Dieser NPC ist Zusatz für Fahrzeug",
        'quotes'        => "Zitate",
        'gainsDesc'     => "Nach dem Töten dieses NPCs erhaltet Ihr",
        'repWith'       => "Ruf mit der Fraktion",
        'stopsAt'       => "Endet bei %s",
        'vehicle'       => "Fahrzeug",
        'stats'         => "Werte",
        'melee'         => "Nahkampf",
        'ranged'        => "Fernkampf",
        'armor'         => "Rüstung",
        'foundIn'       => "Dieser NPC befindet sich in",
        'tameable'      => "Zähmbar (%s)",
        'waypoint'      => "Wegpunkt",
        'wait'          => "Wartezeit",
        'respawnIn'     => "Wiedereinstieg in",
        'rank'          => [0 => "Normal", 1 => "Elite", 4 => "Rar", 2 => "Rar Elite", 3 => "Boss"],
        'textRanges'    => [null, "an das Gebiet gesendet", "an die Zone gesendet", "an die Map gesendet", "an die Welt gesendet"],
        'textTypes'     => [null, "schreit", "sagt", "flüstert"],
        'modes'         => array(
            1 => ["Normal", "Heroisch"],
            2 => ["10-Spieler Normal", "25-Spieler Normal", "10-Spieler Heroisch", "25-Spieler Heroisch"]
        ),
        'cat'           => array(
            "Nicht kategorisiert",      "Wildtiere",                "Drachkin",                 "Dämonen",                  "Elementare",               "Riesen",                   "Untote",                   "Humanoide",
            "Tiere",                    "Mechanisch",               "Nicht spezifiziert",       "Totems",                   "Haustiere",                "Gaswolken"
        )
    ),
    'event' => array(
        'notFound'      => "Dieses Weltereignis existiert nicht.",
        'start'         => "Anfang",
        'end'           => "Ende",
        'interval'      => "Intervall",
        'inProgress'    => "Ereignis findet gerade statt",
        'category'      => ["Nicht kategorisiert", "Feiertage", "Wiederkehrend", "Spieler vs. Spieler"]
    ),
    'achievement' => array(
        'notFound'      => "Dieser Erfolg existiert nicht.",
        'criteria'      => "Kriterien",
        'points'        => "Punkte",
        'series'        => "Reihe",
        'outOf'         => "von",
        'criteriaType'  => "Criterium Typ-Id:",
        'itemReward'    => "Ihr bekommt",
        'titleReward'   => 'Euch wird der Titel "<a href="?title=%d">%s</a>" verliehen',
        'slain'         => "getötet",
        'reqNumCrt'     => "Benötigt",
        'rfAvailable'   => "Verfügbar auf Realm: ",
        '_transfer'     => 'Dieser Erfolg wird mit <a href="?achievement=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
    ),
    'chrClass' => array(
        'notFound'      => "Diese Klasse existiert nicht."
    ),
    'race' => array(
        'notFound'      => "Dieses Volk existiert nicht.",
        'racialLeader'  => "Volksanführer",
        'startZone'     => "Startgebiet",
    ),
    'maps' => array(
        'maps'          => "Karten",
        'linkToThisMap' => "Link zu dieser Karte",
        'clear'         => "Zurücksetzen",
        'EasternKingdoms' => "Östliche Königreiche",
        'Kalimdor'      => "Kalimdor",
        'Outland'       => "Scherbenwelt",
        'Northrend'     => "Nordend",
        'Instances'     => "Instanzen",
        'Dungeons'      => "Dungeons",
        'Raids'         => "Schlachtzüge",
        'More'          => "Weitere",
        'Battlegrounds' => "Schlachtfelder",
        'Miscellaneous' => "Diverse",
        'Azeroth'       => "Azeroth",
        'CosmicMap'     => "Kosmische Karte",
    ),
    'zone' => array(
        'notFound'      => "Dieses Gebiet existiert nicht.",
        'attunement'    => ["Einstimmung", "Heroische Einstimmung"],
        'key'           => ["Schlüssel", "Heroischer Schlüssel"],
        'location'      => "Ort",
        'raidFaction'   => "Schlachtzugsfraktion",
        'boss'          => "Endboss",
        'reqLevels'     => "Mindeststufe: [tooltip=instancereqlevel_tip]%d[/tooltip], [tooltip=lfgreqlevel_tip]%d[/tooltip]",
        'zonePartOf'    => "Diese Zone ist Teil von [zone=%d].",
        'autoRez'       => "Automatische Wiederbelebung",
        'city'          => "Stadt",
        'territory'     => "Territorium",
        'instanceType'  => "Instanzart",
        'hcAvailable'   => "Heroischer Modus verfügbar&nbsp;(%d)",
        'numPlayers'    => "Anzahl an Spielern",
        'noMap'         => "Für dieses Gebiet steht keine Karte zur Verfügung.",
        'instanceTypes' => ["Zone",    "Durchgang", "Dungeon",  "Schlachtzug",     "Battleground", "Dungeon", "Arena", "Schlachtzug", "Schlachtzug"],
        'territories'   => ["Allianz", "Horde",     "Umkämpft", "Sicheres Gebiet", "PvP",          "Welt-PvP"],
        'cat'           => array(
            "Östliche Königreiche",     "Kalimdor",                 "Dungeons",                 "Schlachtzüge",             "Unbenutzt",                null,
            "Schlachtfelder",           null,                       "Scherbenwelt",             "Arenen",                   "Nordend"
        )
    ),
    'quest' => array(
        'notFound'      => "Diese Quest existiert nicht.",
        '_transfer'     => 'Dieses Quest wird mit <a href="?quest=%d" class="q1">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
        'questLevel'    => "Stufe %s",
        'requirements'  => "Anforderungen",
        'reqMoney'      => "Benötigtes Geld",
        'money'         => "Geld",
        'additionalReq' => "Zusätzliche Anforderungen um das Quest zu erhalten",
        'reqRepWith'    => 'Eure Reputation mit <a href="?faction=%d">%s</a> %s %s sein',
        'reqRepMin'     => "muss mindestens",
        'reqRepMax'     => "darf höchstens",
        'progress'      => "Fortschritt",
        'provided'      => "Bereitgestellt",
        'providedItem'  => "Bereitgestellter Gegenstand",
        'completion'    => "Abschluss",
        'description'   => "Beschreibung",
        'playerSlain'   => "Spieler getötet",
        'profession'    => "Beruf",
        'timer'         => "Zeitbegrenzung",
        'loremaster'    => "Meister der Lehren",
        'suggestedPl'   => "Empfohlene Spielerzahl",
        'keepsPvpFlag'  => "Hält Euch im PvP",
        'daily'         => 'Täglich',
        'weekly'        => "Wöchentlich",
        'monthly'       => "Monatlich",
        'sharable'      => "Teilbar",
        'notSharable'   => "Nicht teilbar",
        'repeatable'    => "Wiederholbar",
        'reqQ'          => "Benötigt",
        'reqQDesc'      => "Um diese Quest zu erhalten, müsst ihr alle der nachfolgenden Quests abschließen",
        'reqOneQ'       => "Benötigt eins von",
        'reqOneQDesc'   => "Um diese Quest zu erhalten, müsst ihr eines der nachfolgenden Quests abschließen",
        'opensQ'        => "Öffnet Quests",
        'opensQDesc'    => "Es ist notwendig, diese Quest zu beenden, um die nachfolgenden Quests zu erhalten",
        'closesQ'       => "Schließt Quests",
        'closesQDesc'   => "Wenn ihr diese Quest beendet, sind die nachfolgenden Quests nicht mehr verfügbar",
        'enablesQ'      => "Aktiviert",
        'enablesQDesc'  => "Wenn diese Quest aktiv ist, sind die nachfolgenden Quests ebenfalls verfügbar",
        'enabledByQ'    => "Aktiviert durch",
        'enabledByQDesc'=> "Ihr könnt diese Quest nur annehmen, wenn eins der nachfolgenden Quests aktiv ist",
        'gainsDesc'     => "Bei Abschluss dieser Quest erhaltet Ihr",
        'theTitle'      => 'den Titel "%s"',
        'mailDelivery'  => "Ihr werdet diesen Brief%s%s erhalten",
        'mailBy'        => ' von <a href="?npc=%d">%s</a>',
        'mailIn'        => " nach %s",
        'unavailable'   => "Diese Quest wurde als nicht genutzt markiert und kann weder erhalten noch vollendet werden.",
        'experience'    => "Erfahrung",
        'expConvert'    => "(oder %s, wenn auf Stufe %d vollendet)",
        'expConvert2'   => "%s, wenn auf Stufe %d vollendet",
        'chooseItems'   => "Auf Euch wartet eine dieser Belohnungen",
        'receiveItems'  => "Ihr bekommt",
        'receiveAlso'   => "Ihr bekommt außerdem",
        'spellCast'     => "Der folgende Zauber wird auf Euch gewirkt",
        'spellLearn'    => "Ihr erlernt",
        'bonusTalents'  => "Talentpunkte",
        'spellDisplayed'=> ' (<a href="?spell=%d">%s</a> wird angezeigt)',
        'attachment'    => "Anlage",
        'questInfo'     => array(
              0 => "Normal",             1 => "Gruppe",             21 => "Leben",              41 => "PvP",                62 => "Schlachtzug",        81 => "Dungeon",            82 => "Weltereignis",
             83 => "Legendär",          84 => "Eskorte",            85 => "Heroisch",           88 => "Schlachtzug (10)",   89 => "Schlachtzug (25)"
        ),
        'cat'           => array(
            0 => array( "Östliche Königreiche",
                  36 => "Alteracgebirge",                 45 => "Arathihochland",                 46 => "Brennende Steppe",              279 => "Dalarankrater",                  25 => "Der Schwarzfels",
                2257 => "Die Tiefenbahn",                  1 => "Dun Morogh",                     10 => "Dämmerwald",                   1537 => "Eisenschmiede",                  41 => "Gebirgspass der Totenwinde",
                3433 => "Geisterlande",                   47 => "Hinterland",                   3430 => "Immersangwald",                4080 => "Insel von Quel'Danas",           38 => "Loch Modan",
                4298 => "Pestländer: Die Scharlachrote Enklave", 44 => "Rotkammgebirge",          33 => "Schlingendorntal",               51 => "Sengende Schlucht",            3487 => "Silbermond",
                 130 => "Silberwald",                   1519 => "Sturmwind",                      11 => "Sumpfland",                       8 => "Sümpfe des Elends",              85 => "Tirisfal",
                1497 => "Unterstadt",                      4 => "Verwüstete Lande",              267 => "Vorgebirge des Hügellands",      12 => "Wald von Elwynn",                40 => "Westfall",
                  28 => "Westliche Pestländer",            3 => "Ödland",                        139 => "Östliche Pestländer"
            ),
            1 => array( "Kalimdor",
                  16 => "Azshara",                      3524 => "Azurmythosinsel",              3525 => "Blutmythosinsel",                17 => "Brachland",                    1657 => "Darnassus",
                 405 => "Desolace",                     3557 => "Die Exodar",                   1638 => "Donnerfels",                    148 => "Dunkelküste",                    14 => "Durotar",
                  15 => "Düstermarschen",                331 => "Eschental",                     357 => "Feralas",                      1216 => "Holzschlundfeste",              490 => "Krater von Un'Goro",
                 493 => "Mondlichtung",                  215 => "Mulgore",                      1637 => "Orgrimmar",                    1377 => "Silithus",                      406 => "Steinkrallengebirge",
                 440 => "Tanaris",                       400 => "Tausend Nadeln",                141 => "Teldrassil",                    361 => "Teufelswald",                   618 => "Winterquell"
            ),
            8 => array( "Scherbenwelt",
                3483 => "Höllenfeuerhalbinsel",         3518 => "Nagrand",                      3523 => "Nethersturm",                  3520 => "Schattenmondtal",              3522 => "Schergrat",
                3703 => "Shattrath",                    3679 => "Skettis",                      3519 => "Wälder von Terokkar",          3521 => "Zangarmarschen"
            ),
           10 => array( "Nordend",
                3537 => "Boreanische Tundra",           4395 => "Dalaran",                       495 => "Der heulende Fjord",           4742 => "Hrothgar's Landeplatz",          67 => "Die Sturmgipfel",
                  65 => "Drachenöde",                    210 => "Eiskrone",                      394 => "Grizzlyhügel",                 4024 => "Kaltarra",                     3711 => "Sholazarbecken",
                4197 => "Tausendwintersee",               66 => "Zul'Drak"
            ),
            2 => array( "Dungeons",
                4494 => "Ahn'kahet: Das Alte Königreich", 3790 => "Auchenaikrypta",             4277 => "Azjol-Nerub",                   209 => "Burg Schattenfang",             206 => "Burg Utgarde",
                4100 => "Das Ausmerzen von Stratholme", 4228 => "Das Oculus",                    796 => "Das Scharlachrote Kloster",     717 => "Das Verlies",                  3713 => "Der Blutkessel",
                3905 => "Der Echsenkessel",             2437 => "Der Flammenschlund",           4120 => "Der Nexus",                    3716 => "Der Tiefensumpf",              2366 => "Der schwarze Morast",
                3848 => "Die Arkatraz",                 3847 => "Die Botanika",                 3715 => "Die Dampfkammer",              4272 => "Die Hallen der Blitze",        4264 => "Die Hallen des Steins",
                 718 => "Die Höhlen des Wehklagens",    3849 => "Die Mechanar",                 4809 => "Die Seelenschmiede",           3717 => "Die Sklavenunterkünfte",       1581 => "Die Todesminen",
                4415 => "Die Violette Festung",         3714 => "Die zerschmetterten Hallen",   2557 => "Düsterbruch",                  4196 => "Feste Drak'Tharon",            3845 => "Festung der Stürme",
                 721 => "Gnomeregan",                   4813 => "Grube von Saron",              4416 => "Gundrak",                      4820 => "Hallen der Reflexion",         1941 => "Höhlen der Zeit",
                3562 => "Höllenfeuerbollwerk",          3535 => "Höllenfeuerzitadelle",          722 => "Hügel der Klingenhauer",        491 => "Kral der Klingenhauer",        3792 => "Managruft",
                2100 => "Maraudon",                     4723 => "Prüfung des Champions",        3789 => "Schattenlabyrinth",            2057 => "Scholomance",                  1583 => "Schwarzfelsspitze",
                1584 => "Schwarzfelstiefen",            3791 => "Sethekkhallen",                2017 => "Stratholme",                   4131 => "Terrasse der Magister",         719 => "Tiefschwarze Grotte",
                1196 => "Turm Utgarde",                 1337 => "Uldaman",                      1477 => "Versunkener Tempel",           2367 => "Vorgebirge des Alten Hügellands", 1176 => "Zul'Farrak"
            ),
            3 => array( "Schlachtzüge",
                4603 => "Archavon's Kammer",            3842 => "Das Auge",                     4500 => "Das Auge der Ewigkeit",        4493 => "Das Obsidiansanktum",          3959 => "Der Schwarze Tempel",
                4812 => "Eiskronenzitadelle",           2717 => "Geschmolzener Kern",           3923 => "Gruul's Unterschlupf",         3607 => "Höhle des Schlangenschreins",  3606 => "Hyjalgipfel",
                3457 => "Karazhan",                     3836 => "Magtheridons Kammer",          3456 => "Naxxramas",                    2159 => "Onyxias Hort",                 2677 => "Pechschwingenhort",
                4722 => "Prüfung des Kreuzfahrers",     3429 => "Ruinen von Ahn'Qiraj",         4075 => "Sonnenbrunnenplateau",         3428 => "Tempel von Ahn'Qiraj",         4273 => "Ulduar",
                3805 => "Zul'Aman",                     1977 => "Zul'Gurub"
            ),
            4 => array( "Klassen",
                -263 => "Druide",                        -61 => "Hexenmeister",                 -261 => "Jäger",                         -81 => "Krieger",                      -161 => "Magier",
                -141 => "Paladin",                      -262 => "Priester",                      -82 => "Schamane",                     -162 => "Schurke",                      -372 => "Todesritter"
            ),
            5 => array( "Berufe",
                -181 => "Alchemie",                     -101 => "Angeln",                       -324 => "Erste Hilfe",                  -201 => "Ingenieurskunst",              -371 => "Inschriftenkunde",
                -373 => "Juwelenschleifen",             -304 => "Kochkunst",                     -24 => "Kräuterkunde",                 -182 => "Lederverarbeitung",            -121 => "Schmiedekunst",
                -264 => "Schneiderei"
            ),
            6 => array( "Schlachtfelder",
                2597 => "Alteractal",                   3358 => "Arathibecken",                 3820 => "Auge des Sturms",              4710 => "Insel der Eroberung",          3277 => "Kriegshymnenschlucht",
                 -25 => "Schlachtfelder",               4384 => "Strand der Uralten"
            ),
            9 => array( "Weltereignisse",
                -370 => "Braufest",                    -1002 => "Kinderwoche",                  -364 => "Dunkelmond-Jahrmarkt",          -41 => "Tag der Toten",               -1003 => "Schlotternächte",
               -1005 => "Erntedankfest",                -376 => "Liebe liegt in der Luft",      -366 => "Mondfest",                     -369 => "Sonnenwende",                 -1006 => "Neujahr",
                -375 => "Die Pilgerfreuden",            -374 => "Nobelgarten",                 -1001 => "Winterhauch"
            ),
            7 => array( "Verschiedenes",
                -365 => "Krieg von Ahn'Qiraj",         -1010 => "Dungeonfinder",                  -1 => "Episch",                       -344 => "Legendär",                     -367 => "Ruf",
                -368 => "Invasion der Geißel",          -241 => "Turnier"
            ),
           -2 => "Nicht kategorisiert"
       )
    ),
    'title' => array(
        'notFound'      => "Dieser Titel existiert nicht.",
        '_transfer'     => 'Dieser Titel wird mit <a href="?title=%d" class="q1">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
        'cat'           => array(
            "Allgemein",      "Spieler gegen Spieler",    "Ruf",       "Dungeon & Schlachtzug",     "Quests",       "Berufe",      "Weltereignisse"
        )
    ),
    'skill' => array(
        'notFound'      => "Diese Fertigkeit existiert nicht.",
        'cat'           => array(
            -6 => "Haustiere",          -5 => "Reittiere",          -4 => "Völkerfertigkeiten", 5 => "Attribute",           6 => "Waffenfertigkeiten",  7 => "Klassenfertigkeiten", 8 => "Rüstungssachverstand",
             9 => "Nebenberufe",        10 => "Sprachen",           11 => "Berufe"
        )
    ),
    'currency' => array(
        'notFound'      => "Diese Währung existiert nicht.",
        'cap'           => "Obergrenze",
        'cat'           => array(
            1 => "Verschiedenes", 2 => "Spieler gegen Spieler", 4 => "Classic", 21 => "Wrath of the Lich King", 22 => "Dungeon und Schlachtzug", 23 => "Burning Crusade", 41 => "Test", 3 => "Unbenutzt"
        )
    ),
    'pet'      => array(
        'notFound'      => "Diese Tierart existiert nicht.",
        'exotic'        => "Exotisch",
        'cat'           => ["Wildheit", "Hartnäckigkeit", "Gerissenheit"]
    ),
    'faction' => array(
        'notFound'      => "Diese Fraktion existiert nicht.",
        'spillover'     => "Reputationsüberlauf",
        'spilloverDesc' => "Für diese Fraktion erhaltener Ruf wird zusätzlich mit den unten aufgeführten Fraktionen anteilig verrechnet.",
        'maxStanding'   => "Max. Ruf",
        'quartermaster' => "Rüstmeister",
        'customRewRate' => "Abweichende Belohnungsraten",
        '_transfer'     => 'Die Reputation mit dieser Fraktion wird mit dem für <a href="?faction=%d" class="q1">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
        'cat'           => array(
            1118 => ["Classic", 469 => "Allianz", 169 => "Dampfdruckkartell", 67 => "Horde", 891 => "Streitkräfte der Allianz", 892 => "Streitkräfte der Horde"],
            980  => ["The Burning Crusade", 936 => "Shattrath"],
            1097 => ["Wrath of the Lich King", 1052 => "Expedition der Horde", 1117 => "Sholazarbecken", 1037 => "Vorposten der Allianz"],
            0    => "Sonstige"
        )
    ),
    'itemset' => array(
        'notFound'      => "Dieses Ausrüstungsset existiert nicht.",
        '_desc'         => "<b>%s</b> ist das <b>%s</b>. Es enthält %s Teile.",
        '_descTagless'  => "<b>%s</b> ist ein Ausrüstungsset, das %s Teile enthält.",
        '_setBonuses'   => "Setboni",
        '_conveyBonus'  => "Das Tragen mehrerer Gegenstände aus diesem Set gewährt Eurem Charakter Boni.",
        '_pieces'       => "Teile",
        '_unavailable'  => "Dieses Ausrüstungsset ist nicht für Spieler verfügbar.",
        '_tag'          => "Tag",
        'summary'       => "Zusammenfassung",
        'notes'         => array(
            null,                                   "Dungeon-Set 1",                            "Dungeon-Set 2",                                "Tier 1 Raid-Set",
            "Tier 2 Raid-Set",                      "Tier 3 Raid-Set",                          "Level 60 PvP-Set (Rar)",                   "Level 60 PvP-Set (Rar,  alt)",
            "Level 60 PvP-Set (Episch)",            "Set der Ruinen von Ahn'Qiraj",             "Set des Tempels von Ahn'Qiraj",            "Set von Zul'Gurub",
            "Tier 4 Raid-Set",                      "Tier 5 Raid-Set",                          "Dungeon-Set 3",                            "Set des Arathibeckens",
            "Level 70 PvP-Set (Rar)",               "Arena-Set Saison 1",                       "Tier 6 Raid-Set",                          "Arena-Set Saison 2",
            "Arena-Set Saison 3",                   "Level 70 PvP-Set 2 (Rar)",                 "Arena-Set Saison 4",                       "Tier 7 Raid-Set",
            "Arena-Set Saison 5",                   "Tier 8 Raid-Set",                          "Arena-Set Saison 6",                       "Tier 9 Raid-Set",
            "Arena-Set Saison 7",                   "Tier 10 Raid-Set",                         "Arena-Set Saison 8"
        ),
        'types'         => array(
            null,               "Stoff",                "Leder",                "Schwere Rüstung",          "Platte",                   "Dolch",                "Ring",
            "Faustwaffe",       "Einhandaxt",           "Einhandstreitkolben",  "Einhandschwert",           "Schmuck",                  "Amulett"
        )
    ),
    'spell' => array(
        'notFound'      => "Dieser Zauber existiert nicht.",
        '_spellDetails' => "Zauberdetails",
        '_cost'         => "Kosten",
        '_range'        => "Reichweite",
        '_castTime'     => "Zauberzeit",
        '_cooldown'     => "Abklingzeit",
        '_distUnit'     => "Meter",
        '_forms'        => "Gestalten",
        '_aura'         => "Aura",
        '_effect'       => "Effekt",
        '_none'         => "Nichts",
        '_gcd'          => "GCD",
        '_globCD'       => "Globale Abklingzeit",
        '_gcdCategory'  => "GCD-Kategorie",
        '_value'        => "Wert",
        '_radius'       => "Radius",
        '_interval'     => "Interval",
        '_inSlot'       => "im Platz",
        '_collapseAll'  => "Alle einklappen",
        '_expandAll'    => "Alle ausklappen",
        '_transfer'     => 'Dieser Zauber wird mit <a href="?spell=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
        'discovered'    => "Durch Geistesblitz erlernt",
        'ppm'           => "%s Auslösungen pro Minute",
        'procChance'    => "Procchance",
        'starter'       => "Basiszauber",
        'trainingCost'  => "Trainingskosten",
        'remaining'     => "Noch %s",
        'untilCanceled' => "bis Abbruch",
        'castIn'        => "Wirken in %s Sek.",
        'instantPhys'   => "Sofort",
        'instantMagic'  => "Spontanzauber",
        'channeled'     => "Kanalisiert",
        'range'         => "%s Meter Reichweite",
        'meleeRange'    => "Nahkampfreichweite",
        'unlimRange'    => "Unbegrenzte Reichweite",
        'reagents'      => "Reagenzien",
        'tools'         => "Extras",
        'home'          => "&lt;Gasthaus&gt;",
        'pctCostOf'     => "vom Grund%s",
        'costPerSec'    => ", plus %s pro Sekunde",
        'costPerLevel'  => ", plus %s pro Stufe",
        'stackGroup'    => "Stack Gruppierung",
        'linkedWith'    => "Verknüpft mit",
        '_scaling'      => "Skalierung",
        'scaling'       => array(
            'directSP' => "+%.2f%% der Zaubermacht zum direkten Effekt",         'directAP' => "+%.2f%% der Angriffskraft zum direkten Effekt",
            'dotSP'    => "+%.2f%% der Zaubermacht pro Tick",                    'dotAP'    => "+%.2f%% der Angriffskraft pro Tick"
        ),
        'powerRunes'    => ["Frost", "Unheilig", "Blut", "Tod"],
        'powerTypes'    => array(
            // conventional
              -2 => "Gesundheit",          0 => "Mana",                1 => "Wut",                 2 => "Fokus",               3 => "Energie",             4 => "Zufriedenheit",
               5 => "Runen",               6 => "Runenmacht",
            // powerDisplay
              -1 => "Munition",          -41 => "Pyrit",             -61 => "Dampfdruck",       -101 => "Hitze",            -121 => "Schlamm",          -141 => "Blutmacht",
            -142 => "Wrath"
        ),
        'relItems'      => array(
            'base'    => "<small>%s im Zusammenhang mit <b>%s</b> anzeigen</small>",
            'link'    => " oder ",
            'recipes' => '<a href="?items=9.%s">Rezeptgegenstände</a>',
            'crafted' => '<a href="?items&filter=cr=86;crs=%s;crv=0">Hergestellte Gegenstände</a>'
        ),
        'cat'           => array(
              7 => "Klassenfertigkeiten",
            -13 => "Glyphen",
            -11 => ["Sachverstand", 8 => "Rüstung", 6 => "Waffen", 10 => "Sprachen"],
             -4 => "Völkerfertigkeiten",
             -2 => "Talente",
             -6 => "Haustiere",
             -5 => "Reittiere",
             -3 => array(
                "Begleiterfertigkeiten",    782 => "Ghul",              270 => "Allgemein",             213 => "Aasvogel",                  210 => "Bär",                   763 => "Drachenfalke",          211 => "Eber",
                767 => "Felshetzer",        653 => "Fledermaus",        788 => "Geisterbestie",         215 => "Gorilla",                   654 => "Hyäne",                 209 => "Katze",                 787 => "Kernhund",
                214 => "Krebs",             212 => "Krokilisk",         775 => "Motte",                 764 => "Netherrochen",              217 => "Raptor",                655 => "Raubvogel",             786 => "Rhinozeros",
                251 => "Schildkröte",       780 => "Schimäre",          768 => "Schlange",              783 => "Silithid",                  236 => "Skorpid",               766 => "Sphärenjäger",          203 => "Spinne",
                765 => "Sporensegler",      781 => "Teufelssaurier",    218 => "Weitschreiter",         785 => "Wespe",                     656 => "Windnatter",            208 => "Wolf",                  784 => "Wurm",
                204 => "Leerwandler",       205 => "Sukkubus",          189 => "Teufelsjäger",          761 => "Teufelswache",              188 => "Wichtel",
            ),
             -7 => ["Begleitertalente", 410 => "Gerissenheit", 411 => "Wildheit", 409 => "Hartnäckigkeit"],
             11 => array(
                "Berufe",
                171 => "Alchemie",
                164 => ["Schmiedekunst", 9788 => "Rüstungsschmied", 9787 => "Waffenschmied", 17041 => "Axtschmiedemeister", 17040 => "Hammerschmiedemeister", 17039 => "Schwertschmiedemeister"],
                333 => "Verzauberkunst",
                202 => ["Ingenieurskunst", 20219 => "Gnomeningenieurskunst", 20222 => "Gobliningenieurskunst"],
                182 => "Kräuterkunde",
                773 => "Inschriftenkunde",
                755 => "Juwelenschleifen",
                165 => ["Lederverarbeitung", 10656 => "Drachenschuppenlederverarbeitung", 10658 => "Elementarlederverarbeitung", 10660 => "Stammeslederverarbeitung"],
                186 => "Bergbau",
                393 => "Kürschnerei",
                197 => ["Schneiderei", 26798 => "Mondstoffschneiderei", 26801 => "Schattenstoffschneiderei", 26797 => "Zauberfeuerschneiderei"],
            ),
              9 => ["Nebenberufe", 185 => "Kochkunst", 129 => "Erste Hilfe", 356 => "Angeln", 762 => "Reiten"],
             -8 => "NPC-Fähigkeiten",
             -9 => "GM-Fähigkeiten",
              0 => "Nicht kategorisiert"
        ),
        'armorSubClass' => array(
            "Sonstiges",                            "Stoffrüstung",                         "Lederrüstung",                         "Schwere Rüstung",                      "Plattenrüstung",
            null,                                   "Schilde",                              "Buchbände",                            "Götzen",                               "Totems",
            "Siegel"
        ),
        'weaponSubClass' => array(
            15 => "Dolche",                          0 => "Einhandäxte",                     7 => "Einhandschwerter",               4 => "Einhandstreitkolben",            13 => "Faustwaffen",
             6 => "Stangenwaffen",                  10 => "Stäbe",                           1 => "Zweihandäxte",                   8 => "Zweihandschwerter",               5 => "Zweihandstreitkolben",
            18 => "Armbrüste",                       2 => "Bögen",                           3 => "Schusswaffen",                  16 => "Wurfwaffen",                     19 => "Zauberstäbe",
            20 => "Angelruten",                     14 => "Diverse"
        ),
        'subClassMasks' => array(
            0x02A5F3 => "Nahkampfwaffe",            0x0060 => "Schild",                     0x04000C => "Distanzwaffe",             0xA091 => "Einhandnahkampfwaffe"
        ),
        'traitShort'    => array(
            'atkpwr'    => "Angr",                  'rgdatkpwr' => "DAngr",                 'splpwr'    => "ZMacht",                'arcsplpwr' => "ArkM",                  'firsplpwr' => "FeuM",
            'frosplpwr' => "FroM",                  'holsplpwr' => "HeiM",                  'natsplpwr' => "NatM",                  'shasplpwr' => "SchM",                  'splheal'   => "Heil"
        ),
        'spellModOp'    => array(
            "Schaden",                              "Dauer",                                "Bedrohung",                            "Effekt 1",                             "Aufladungen",
            "Reichweite",                           "Radius",                               "kritische Trefferchance",              "Alle Effekte",                         "Zauberzeitverlust",
            "Zauberzeit",                           "Abklingzeit",                          "Effekt 2",                             "Ignoriere Rüstung",                    "Kosten",
            "Kritischer Bonusschaden",              "Chance auf Fehlschlag",                "Sprung-Ziele",                         "Chance auf Auslösung",                 "Intervall",
            "Multiplikator (Schaden)",              "Globale Abklingzeit",                  "Schaden über Zeit",                    "Effekt 3",                             "Multiplikator (Bonus)",
            null,                                   "Auslösungen pro Minute",               "Multiplikator (Betrag)",               "Widerstand gegen Bannung",             "kritischer Bonusschaden2",
            "Kostenrückerstattung bei Fehlschlag"
        ),
        'combatRating'  => array(
            "Waffenfertigkeit",                     "Verteidigungsfertigkeit",              "Ausweichen",                           "Parrieren",                            "Blocken",
            "Nahkampftrefferchance",                "Fernkampftrefferchance",               "Zaubertrefferchance",                  "kritische Nahkampftrefferchance",      "kritische Fernkampftrefferchance",
            "kritische Zaubertrefferchance",        "erhaltene Nahkampftreffer",            "erhaltene Fernkampftreffer",           "erhaltene Zaubertreffer",              "erhaltene kritische Nahkampftreffer",
            "erhaltene kritische Fernkampftreffer", "erhaltene kritische Zaubertreffer",    "Nahkampftempo",                        "Fernkampftempo",                       "Zaubertempo",
            "Waffenfertigkeit Haupthand",           "Waffenfertigkeit Nebenhand",           "Waffenfertigkeit Fernkampf",           "Waffenkunde",                          "Rüstungsdurchschlag"
        ),
        'lockType'      => array(
            null,                                   "Schlossknacken",                       "Kräuterkunde",                         "Bergbau",                              "Falle entschärfen",
            "Öffnen",                               "Schatz (DND)",                         "Verkalkte Elfenedelsteine (DND)",      "Schließen",                            "Falle scharf machen",
            "Schnell öffnen",                       "Schnell schließen",                    "Offenes Tüfteln",                      "Offenes Knien",                        "Offenes Angreifen",
            "Gahz'ridian (DND)",                    "Schlagen",                             "PvP öffnen",                           "PvP schließen",                        "Angeln",
            "Inschriftenkunde",                     "Vom Fahrzeug öffnen"
        ),
        'stealthType'   => ["Allgemein", "Falle"],
        'invisibilityType' => ["Allgemein", 3 => "Falle", 6 => "Trunkenheit"]
    ),
    'item' => array(
        'notFound'      => "Dieser Gegenstand existiert nicht .",
        'armor'         => "%s Rüstung",
        'block'         => "%s Blocken",
        'charges'       => "Aufladungen",
        'locked'        => "Verschlossen",
        'ratingString'  => "%s&nbsp;@&nbsp;L%s",
        'heroic'        => "Heroisch",
        'unique'        => "Einzigartig",
        'uniqueEquipped'=> "Einzigartig anlegbar",
        'startQuest'    => "Dieser Gegenstand startet eine Quest",
        'bagSlotString' => "%d Platz %s",
        'dps'           => "Schaden pro Sekunde",
        'dps2'          => "Schaden pro Sekunde",
        'addsDps'       => "Adds",
        'fap'           => "Angriffskraft in Tiergestalt",
        'durability'    => "Haltbarkeit",
        'realTime'      => "Realzeit",
        'conjured'      => "Herbeigezauberter Gegenstand",
        'damagePhys'    => "%s Schaden",
        'damageMagic'   => "%s %sschaden",
        'speed'         => "Tempo",
        'sellPrice'     => "Verkaufspreis",
        'itemLevel'     => "Gegenstandsstufe",
        'randEnchant'   => "&lt;Zufällige Verzauberung&gt",
        'readClick'     => "&lt;Zum Lesen rechtsklicken&gt",
        'openClick'     => "&lt;Zum Öffnen rechtsklicken&gt",
        'set'           => "Set",
        'partyLoot'     => "Gruppenloot",
        'smartLoot'     => "Intelligente Beuteverteilung",
        'indestructible'=> "Kann nicht zerstört werden",
        'deprecated'    => "Nicht benutzt",
        'useInShape'    => "Benutzbar in Gestaltwandlung",
        'useInArena'    => "Benutzbar in Arenen",
        'refundable'    => "Rückzahlbar",
        'noNeedRoll'    => "Kann nicht für Bedarf werfen",
        'atKeyring'     => "Passt in den Schlüsselbund",
        'worth'         => "Wert",
        'consumable'    => "Verbrauchbar",
        'nonConsumable' => "Nicht verbrauchbar",
        'accountWide'   => "Accountweit",
        'millable'      => "Mahlbar",
        'noEquipCD'     => "Keine Anlegabklingzeit",
        'prospectable'  => "Sondierbar",
        'disenchantable'=> "Kann entzaubert werden",
        'cantDisenchant'=> "Kann nicht entzaubert werden",
        'repairCost'    => "Reparaturkosten",
        'tool'          => "Werkzeug",
        'cost'          => "Preis",
        'content'       => "Inhalt",
        '_transfer'     => 'Dieser Gegenstand wird mit <a href="?item=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> vertauscht, wenn Ihr zur <span class="icon-%s">%s</span> wechselt.',
        '_unavailable'  => "Dieser Gegenstand ist nicht für Spieler verfügbar.",
        '_rndEnchants'  => "Zufällige Verzauberungen",
        '_chance'       => "(Chance von %s%%)",
        'slot'          => "Platz",
        '_quality'      => "Qualität",
        'usableBy'      => "Benutzbar von",
        'buyout'        => "Sofortkaufpreis",
        'each'          => "Stück",
        'tabOther'      => "Anderes",
        'gems'          => "Edelsteine",
        'socketBonus'   => "Sockelbonus",
        'socket'        => array(
            "Metasockel",           "Roter Sockel",     "Gelber Sockel",        "Blauer Sockel",          -1 => "Prismatischer Sockel"
        ),
        'gemColors'     => array(                           // *_GEM
            "Meta",                 "Rot",              "Gelb",                 "Blau"
        ),
        'gemConditions' => array(                           // ENCHANT_CONDITION_* in GlobalStrings.lua; 2 not in use (use as PH)
            2 => ["weniger als %d Edelstein der Kategorie %s", "weniger als %d Edelsteine der Kategorie %s"],
            3 => "mehr Edelsteine der Kategorie %s als Edelsteine der Kategorie %s",
            5 => ["mindestens %d Edelstein der Kategorie %s", "mindestens %d Edelsteine der Kategorie %s"]
        ),
        'reqRating'     => array(                           // ITEM_REQ_ARENA_RATING*
            "Benötigt eine persönliche Arenawertung und Teamwertung von %d.",
            "Benötigt eine persönliche und eine Teamwertung von %d<br>in 3v3- oder 5v5-Turnieren",
            "Benötigt eine persönliche und eine Teamwertung von %d<br>in 5v5-Turnieren"
        ),
        'quality'       => array(
            "Schlecht",             "Verbreitet",       "Selten",               "Rar",
            "Episch",               "Legendär",         "Artefakt",             "Erbstücke",
        ),
        'trigger'       => array(
            "Benutzen: ",           "Anlegen: ",        "Chance bei Treffer: ", "",                             "",
            "",                     ""
        ),
        'bonding'       => array(
            "Accountgebunden",                          "Wird beim Aufheben gebunden",                          "Wird beim Anlegen gebunden",
            "Wird bei Benutzung gebunden",              "Questgegenstand",                                      "Questgegenstand"
        ),
        'bagFamily'     => array(
            "Tasche",               "Köcher",           "Munitionsbeutel",      "Seelentasche",                 "Lederertasche",
            "Schreibertasche",      "Kräutertasche",    "Verzauberertasche",    "Ingenieurstasche",             null, /*Schlüssel*/
            "Edelsteintasche",      "Bergbautasche"
        ),
        'inventoryType' => array(
            null,                   "Kopf",             "Hals",                 "Schulter",                     "Hemd",
            "Brust",                "Taille",           "Beine",                "Füße",                         "Handgelenke",
            "Hände",                "Finger",           "Schmuck",              "Einhändig",                    "Schildhand", /*Schild*/
            "Distanz",              "Rücken",           "Zweihändig",           "Tasche",                       "Wappenrock",
            null, /*Robe*/          "Waffenhand",       "Schildhand",           "In der Schildhand geführt",    "Projektil",
            "Wurfwaffe",            null, /*Ranged2*/   "Köcher",               "Relikt"
        ),
        'armorSubClass' => array(
            "Sonstiges",            "Stoff",            "Leder",                "Schwere Rüstung",              "Platte",
            null,                   "Schild",           "Buchband",             "Götze",                        "Totem",
            "Sigel"
        ),
        'weaponSubClass' => array(
            "Axt",                  "Axt",              "Bogen",                "Schusswaffe",                  "Streitkolben",
            "Streitkolben",         "Stangenwaffe",     "Schwert",              "Schwert",                      null,
            "Stab",                 null,               null,                   "Faustwaffe",                   "Diverse",
            "Dolche",               "Wurfwaffe",        null,                   "Armbrust",                     "Zauberstab",
            "Angelrute"
        ),
        'projectileSubClass' => array(
            null,                   null,               "Pfeil",                "Kugel",                         null
        ),
        'elixirType'    => [null, "Kampf", "Wächter"],
        'cat'           => array(
             2 => "Waffen",                                 // self::$spell['weaponSubClass']
             4 => array("Rüstung", array(
                 1 => "Stoffrüstung",                2 => "Lederrüstung",            3 => "Schwere Rüstung",         4 => "Plattenrüstung",          6 => "Schilde",                 7 => "Buchbände",
                 8 => "Götzen",                      9 => "Totems",                 10 => "Siegel",                 -6 => "Umhänge",                -5 => "Nebenhandgegenstände",   -8 => "Hemden",
                -7 => "Wappenröcke",                -3 => "Amulette",               -2 => "Ringe",                  -4 => "Schmuckstücke",           0 => "Verschiedenes (Rüstung)",
            )),
             1 => array("Behälter", array(
                 0 => "Taschen",                     3 => "Verzauberertaschen",      4 => "Ingenieurstaschen",       5 => "Edelsteintaschen",        2 => "Kräutertaschen",          8 => "Schreibertaschen",
                 7 => "Lederertaschen",              6 => "Bergbautaschen",          1 => "Seelentaschen"
            )),
             0 => array("Verbrauchbar", array(
                -3 => "Gegenstandsverzauberungen (Temporäre)",                       6 => "Gegenstandsverzauberungen (Dauerhafte)",                  2 => ["Elixire", [1 => "Kampfelixire", 2 => "Wächterelixire"]],
                 1 => "Tränke",                      4 => "Schriftrollen",           7 => "Verbände",                0 => "Verbrauchbar",            3 => "Fläschchen",              5 => "Essen & Trinken",
                 8 => "Andere (Verbrauchbar)"
            )),
            16 => array("Glyphen", array(
                 1 => "Kriegerglyphen",              2 => "Paladinglyphen",          3 => "Jägerglyphen",            4 => "Schurkenglyphen",         5 => "Priesterglyphen",         6 => "Todesritterglyphen",
                 7 => "Schamanenglyphen",            8 => "Magierglyphen",           9 => "Hexenmeisterglyphen",    11 => "Druidenglyphen"
            )),
             7 => array("Handwerkswaren", array(
                14 => "Rüstungsverzauberungen",      5 => "Stoff",                   3 => "Geräte",                 10 => "Elementar",              12 => "Verzauberkunst",          2 => "Sprengstoff",
                 9 => "Kräuter",                     4 => "Juwelenschleifen",        6 => "Leder",                  13 => "Materialien",             8 => "Fleisch",                 7 => "Metall & Stein",
                 1 => "Teile",                      15 => "Waffenverzauberungen",   11 => "Andere (Handwerkswaren)"
             )),
             6 => ["Projektile", [                   2 => "Pfeile",                  3 => "Kugeln"          ]],
            11 => ["Köcher",     [                   2 => "Köcher",                  3 => "Munitionsbeutel" ]],
             9 => array("Rezepte", array(
                 0 => "Bücher",                      6 => "Alchemierezepte",         4 => "Schmiedekunstpläne",      5 => "Kochrezepte",             8 => "Verzauberkunstformeln",   3 => "Ingenieurschemata",
                 7 => "Erste Hilfe-Bücher",          9 => "Angelbücher",            11 => "Inschriftenkundetechniken",10 => "Juwelenschleifen-Vorlagen",1 => "Lederverarbeitungsmuster",12 => "Bergbauleitfäden",
                 2 => "Schneidereimuster"
            )),
             3 => array("Edelsteine", array(
                 6 => "Meta-Edelsteine",             0 => "Rote Edelsteine",         1 => "Blaue Edelsteine",        2 => "Gelbe Edelsteine",        3 => "Violette Edelsteine",     4 => "Grüne Edelsteine",
                 5 => "Orange Edelsteine",           8 => "Prismatische Edelsteine", 7 => "Einfache Edelsteine"
            )),
            15 => array("Verschiedenes", array(
                -2 => "Rüstungsmarken",              3 => "Feiertag",                0 => "Plunder",                 1 => "Reagenzien",              5 => "Reittiere",              -7 => "Flugtiere",
                 2 => "Haustiere",                   4 => "Andere (Verschiedenes)"
            )),
            10 => "Währung",
            12 => "Quest",
            13 => "Schlüssel",
        ),
        'statType'      => array(
            "Erhöht Euer Mana um %d.",
            "Erhöht Eure Gesundheit um %d.",
            null,
            "Beweglichkeit",
            "Stärke",
            "Intelligenz",
            "Willenskraft",
            "Ausdauer",
            null, null, null, null,
            "Erhöht die Verteidigungswertung um %d.",
            "Erhöht Eure Ausweichwertung um %d.",
            "Erhöht Eure Parierwertung um %d.",
            "Erhöht Eure Blockwertung um %d.",
            "Erhöht Nahkampftrefferwertung um %d.",
            "Erhöht Fernkampftrefferwertung um %d.",
            "Erhöht Zaubertrefferwertung um %d.",
            "Erhöht kritische Nahkampftrefferwertung um %d.",
            "Erhöht kritische Fernkampftrefferwertung um %d.",
            "Erhöht kritische Zaubertrefferwertung um %d.",
            "Erhöht Vermeidungswertung für Nahkampftreffer um +3.",
            "Erhöht Vermeidungswertung für Distanztreffer um %d.",
            "Erhöht Vermeidungswertung für Zaubertreffer um %d.",
            "Erhöht Vermeidungswertung für kritische Nahkampftreffer um %d.",
            "Erhöht Vermeidungswertung für kritische Distanztreffer um %d.",
            "Erhöht Vermeidungswertung für kritische Zaubertreffer um %d.",
            "Erhöht Nahkampftempowertung um %d.",
            "Erhöht Fernkampftempowertung um %d.",
            "Erhöht Zaubertempowertung um %d.",
            "Erhöht Eure Trefferwertung um %d.",
            "Erhöht Eure kritische Trefferwertung um %d.",
            "Erhöht Vermeidungswertung um %d.",
            "Erhöht Vermeidungswertung für kritische Treffer um %d.",
            "Erhöht Eure Abhärtungswertung um %d.",
            "Erhöht Eure Tempowertung um %d.",
            "Erhöht Waffenkundewertung um %d.",
            "Erhöht Angriffskraft um %d.",
            "Erhöht Distanzangriffskraft um %d.",
            "Erhöht die Angriffskraft in Katzen-, Bären-, Terrorbären- und Mondkingestalt um %d.",
            "Erhöht den von Zaubern und Effekten verursachten Schaden um bis zu %d.",
            "Erhöht die von Zaubern und Effekten verursachte Heilung um bis zu %d.",
            "Stellt alle 5 Sek. %d Mana wieder her.",
            "Erhöht Euren Rüstungsdurchschlagwert um %d.",
            "Erhöht die Zaubermacht um %d.",
            "Stellt alle 5 Sek. %d Gesundheit wieder her.",
            "Erhöht den Zauberdurchschlag um %d.",
            "Erhöht Blockwert um %d.",
            "Unbekannter Bonus #%d (%d)",
        )
    )
);

?>
