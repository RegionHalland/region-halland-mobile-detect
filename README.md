# Kontrollera vilken enhet användaren surfar med

## Hur man använder Region Hallands plugin "region-halland-mobile-detect"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-mobile-detect".


## Användningsområde

Denna plugin returnerar en sträng med aktuell enhet, dvs 'tablet', 'phone' eller 'computer'


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell på:
```sh
A) Gnu.org (https://www.gnu.org/licenses/gpl-3.0.html)
B) Wikipedia (https://sv.wikipedia.org/wiki/GNU_General_Public_License)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-mobile-detect.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-mobile-detect.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-mobile-detect": "1.0.0"
},
```


## Visa vilken "device type" användaren surfar med via "Blade"

```sh
@php($deviceType = get_region_halland_device_type())

@if($deviceType == "phone")
  <spam>Denna text visas bara för en telefon</spam>
@endif

@if($deviceType == "tablet")
  <spam>Denna text visas bara för en surfplatta</spam>
@endif

@if($deviceType == "computer")
  <spam>Denna text visas bara för en dator</spam>
@endif
```


## Versionhistorik

### 1.2.0
- Uppdaterat readme med nya länkar

### 1.1.0
- Lagt till information om licensmodell

### 1.0.0
- Första version
- Version 2.8.33 av PHP-klassen Mobile_Detect (http://mobiledetect.net) 