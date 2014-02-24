STHLM e-sport
=============

Logik för temat:
---------------


### Filtret ###

När inget filter är valt visas alla inlägg från alla kategorier.

När man sedan klickar på en spel-ikon så **väljs** det spelet, så att alla inlägg från andra spel döljs. Man kan sedan klicka på en till spel-ikon för att inkludera även den spel-kategorin.

Artiklar i kategorin STHLM e-sport (den rosa), går aldrig att filtrera bort.


### Toppbilden ###

Topp-bilden på första sidan är alltid det senaste inlägget i kategorin med ID=2, vilken bör heta "featured", filtrerat efter valda spel-kategorier.

*exempel: om filtret är att bara visa inlägg från SC2 och LoL så visar topp-bilden senaste inlägget som också har kategori "featured" från de spel-kategorierna.*


### Artiklarna ###

Artiklarna visar de senaste artiklarna från de filtrerade spelen (artikeln i topp-bilden visas inte igen).

### Notiserna ###

Notiserna filtreras efter valda spel-kategorier.

Notis-kolumnen består alltid av X antal notisplatser. Notis-platser 1, 2, 3 och 6 är också "widget-areas", och kan bytas ut mot manuella text- eller bild-puffar. Notiserna flyttas då ned så att de alltid är de senaste i ordningen. Antalet platser i kolumnen är dock densamma.

(puffar kan vara egen-reklam eller köpta reklamplatser)

*exempel*

*case 1, "en vanlig dag":*

	[notis_1, notis_2, puff, notis_3, notis_4, puff, notis_5, notis_6]*

*case 2, "cash monies":*

	[puff, puff, puff, notis_1, notis_2, puff, notis_3, notis_4]*

Om detta är för svårt att koda så är det inte superviktigt att antalet notiser reduceras, de manuella puffarna skulle kunna adderas till det totala antalet.

### Event-kolumnen ###

Event-kolumnen visar alltid kommande fysiska events från alla spel-kategorier. Den ser helt enkelt alltid likadan ut.

Den skulle kunna sorteras så att valda spel-kategorier visas överst, men det är inte prioriterat i nuläget.

### Streamare ###

Listorna med streamare från community och proffs sorteras inte efter vald spel-kategori i nuläget.

Den skulle kunna filtreras efter valda spel-kategorier, men det är inte prioriterat i nuläget.