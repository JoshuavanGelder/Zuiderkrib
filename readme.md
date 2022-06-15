# **Documentatie Zuiderkrib**

**Lokaal omgeving opzetten**

Selecteer via de terminal de thema map(Zuiderkrib/wp-content/themes/blossom-chic-child/) en dan kan je de volgende commands uitvoeren.

&quot;npm i&quot;: Om de node-packages te downloaden. Dit hoe je alleen maar te doen bij het opzetten van de website. Dit command zorgt ervoor dat je de andere commands kan uitvoeren. Doe dit niet op de live omgeving!
 &quot;npm run build&quot;: Dit command zet de scss om naar css en minified de css.
 &quot;npm run dev-build&quot;: Dit command zet de scss om naar css.
 &quot;npm run dev/npm run start&quot;: Deze commands zetten de scss om naar css elke keer als je een scss bestand opslaat. Deze commands doen hetzelfde en er hoeft maar 1 van uitgevoerd worden.

**Thema**

Wij hebben het thema &quot;blossom-chic-child&quot; aangemaakt in deze map staan alle changes voor de website. Dit thema is een child theme van &quot;blossom-chic&quot;. Deze staat op &quot;Zuiderkrib/wp-content/themes/blossom-chic-child/&quot;

In het thema staat een file die heet &quot;Zuiderkrib/wp-content/themes/blossom-chic-child/functions.php&quot; hebben we een aantal wijzigingen gedaan. Dit heb ik aangegeven met &quot;// CUSTOM CODE ADDED&quot; of &quot;// CODE CHANGED&quot;

**Styling**

De styling van de website staat in de map &quot;Zuiderkrib/wp-content/themes/blossom-chic-child/scss&quot;. In de map wordt de styling van het thema aangepast en de styling van de plugins.

Dit zijn de bestanden waar styling instaat:
 styles.scss: Hier wordt alle styling voor de front-end geïmporteerd.
 editor.scss: Hier wordt alle styling voor de editor geïmporteerd.
 fonts.scss: Hier worden font-faces aangemaakt.
 blocks/\_index.scss: Hier worden alle files uit de blocks map ingeladen.
 blocks/\_booking.scss: Hier wordt globale styling voor de booking plugin
 blocks/\_copyright.scss: Hier wordt copyright tekst aangepast.
 blocks/\_events.scss: Hier wordt de styling voor de events plugin aangepast.
 blocks/\_header.scss: Hier wordt de styling van de header aangepast.
 blocks/\_media-text.scss: Hier wordt de media-tekst blokken van wordpress aangepast.
 blocks/\_nav.scss: Hier wordt de navigatie styling aangepast.
 blocks/\_product-category.scss: Hier wordt de styling aangepast van de categorie pagina&#39;s.
 blocks/\_quicklinks.scss: Hier wordt de styling van is-style-quicklinks aangepast.
 blocks/\_single-product.scss: Hier wordt de styling van de product pagina&#39;s aangepast.
 blocks/\_typography.scss: Hier wordt de globale typografie van de website aangepast.

**Javascript**

De javascript van het thema staat in de map Zuiderkrib/wp-content/themes/blossom-chic-child/js. Dit zijn de bestanden uit de map:

custom.js: Dit script komt uit het originele thema.

nav.js: Dit zorgt ervoor dat de eerste woorden uit de navigatie balk een class krijgen zodat ze apart gestyled kunnen worden. Deze styling staat in Zuiderkrib/wp-content/themes/blossom-chic-child/scss/blocks/\_nav.scss

product-date.js: Dit zorgt ervoor dat de booking date die tevoorschijn komt nadat je twee data in de kalender heb geselecteerd in de goede volgorde word gezet(d-m-Y).

**Plugins**

Woocommerce: de files uit woocommerce die zijn aangepast staan in &quot;Zuiderkrib/wp-content/themes/blossom-chic-child/woocommerce/&quot;

Rest van de plugins:

BlossomThemes Social Feed

BlossomThemes Toolkit

Duplicator

Event Manager and Tickets Selling Plugin for WooCommerce

Mollie-betalingen voor WooCommerce of WooCommerce Payments

MVV WooCommerce Booking Addon

Page Builder by SiteOrigin

SiteOrigin Widgets Bundle

WPForms Lite