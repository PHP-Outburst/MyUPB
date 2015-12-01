myUPB development branch
====
To be honest this branch is specifically made to create next version from scratch, without composer, lighter and faster than ever

Basic info:  
Technologies in use (or at least planned)  

* MVC model (or something similar)
* PHP 5.6 / 7
    * PDO
        * SQLite  // no extra DB-Server all mus work with Webserver and PHP !
* HTML 5
* CSS 3
* jQuery

Planned functions and things to add:  

* Multilingual from very beggining
* subforums
* groups
* Documentation too (see http://www.phpdoc.org/ )
* shoutbox

Chaos below:  

* Change out the TextBD with SQLite
* Remove some libraries, including TextDB (or reforge it later on that high mountain)
* Securimage with mathematics
* Nuke removing users (when here would have ~1000 unused accounts)
* Better bot prevention
* DST, and automatically set timezone in based on user IP or browser language (or forum settings maybe?)
* WYSYWIG when possible

And total chaos:

* Check version: use HTTP codes and render on client server side rather than using frames, or something simple
* use rel="nofollow" in links
* CSS when possible, skinable when possible (low importance)
* maybe @Nick would be a link to profile? @Clark, on Github for example when someone is mentioned with this tag they receive an email about it
* The same for topics/posts? #13/1
* cookies info
* we should be able to use only few cookies (cokkies_accept, sesson_id, maybe language)

PHP gives codes in ISO_3166 format, maybe take locale, just like now, (en-us) and cut everything after "-"(if exist)? Then $languageTable would hold dynamical list generated from list of folders (not hardcoded) OR check if we have exact language (en-us), and if not use only first part (en) (maybe better considering that some countries have more than one language, I forgot which ones)

Fallback to English if no localisation text given

I still need to think how to manage plural form (I though about including "language equation" in every single directory, something like  
$number==1?"singular":"plural"  
for English and  
$number==1?"singular":($number%10>=2&&$number%10<=4&&($number%100<10||$number%100>=20)?"paucal":"plural")  
for Polish (don't worry, this is probably most complicated formula I've heard of, most of them are way more simple)
