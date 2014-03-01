STHLM e-sport
=============

Logik för temat:
---------------

### Post Types ###

Vi använder två post types:

* Posts (artiklar)
* Events

Events har ett par custom fields, som datum och tid, plats och annat specifikt för evenemang.


### Kategorier ###

Vi har ett gäng kategorier. Först och främst **spel-kategori** för filtret:

* E-sport	*(slug="esport") [default]*
* StarCraft *(slug="starcraft")*
* LoL		*(slug="lol")*
* Dota2 	*(slug="dota")*

*En post kan tillhöra flera av dessa (men minst en)*

Vi har sedan kategorier för **artikeltyp**:

* Artikel
* Notis
* Ledare

etc

*En post bör endast tillhöra en av dessa. Redaktörerna kan hitta på egna efter behag. Den enda som särbehandlas är Notiserna som har eget flöde och styling.*

Sedan har vi en **specialkategori**:

* Featured *(slug="featured")*

*Denna kategori kan sättas på artiklar (som inte är notiser). Det senaste inlägget med denna kategori visas överst på förstasidan.*


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

De måste sorteras efter nästa kommande event-datum, och inte efter senaste postade inlägg.

Event-datum är ett Custom Field (slug="_date") som sparas i Unix-timestamp-format. Event-tid är ett Custom Field (slug="_time") som sparas i formatet HH:MM (t.ex. 23:15).

Alla som kör temat borde installera pluginet "**Advanced Custom Fields**" och sätta upp dessa fält:

	Fältgrupp = "Event fields"

	== DATUM ==
	Fältetikett:  	  Event-datum
	Fältnamn:	      _date
	Fälttyp:	      Datumväljare
	Obligatorisk:	  Ja
	Lagringsformat:   yymmdd
	Visningsformat:   d/m -y

	== TID ==
	Fältetikett:  	  Event-tid
	Fältnamn:	  	  _time
	Fälttyp:	  	  Text
	Obligatorisk:	  Nej
	Max antal tecken: 5

	Regler:			  Visa detta fält när inläggstyp är lika med event

### Streamare ###

Listorna med streamare från community och proffs sorteras inte efter vald spel-kategori i nuläget.

Den skulle kunna filtreras efter valda spel-kategorier, men det är inte prioriterat i nuläget.

Streamare läggs till med hjälp av en custom meny, och pluginet Live Stream Badger. Varje menyalternativ ska vara en länk till twitch-URLen. Lägger man till klasserna "starcraft", "lol" eller "dota" (enligt [denna](http://sevenspark.com/how-to/how-to-add-a-custom-class-to-a-wordpress-menu-item)) så färgas ikonen korrekt.