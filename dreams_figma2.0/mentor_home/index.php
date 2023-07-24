<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location: ../login/index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bad.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Abhaya+Libre|Abril+Fatface|Aclonica|Acme|Actor|Inter|Adamina|Advent+Pro|Aguafina+Script|Akaya+Kanadaka|Akaya+Telivigala|Akronim|Aladin|Alata|Alatsi|Aldrich|Alef|Alegreya|Alegreya+SC|Alegreya+Sans|Alegreya+Sans+SC|Aleo|Alex+Brush|Alfa+Slab+One|Alice|Alike|Alike+Angular|Allan|Allerta|Allerta+Stencil|Allura|Almarai|Almendra|Almendra+Display|Almendra+SC|Amarante|Amaranth|Amatic+SC|Amethysta|Amiko|Amiri|Amita|Anaheim|Andada|Andika|Andika+New+Basic|Angkor|Annie+Use+Your+Telescope|Anonymous+Pro|Antic|Antic+Didone|Antic+Slab|Anton|Antonio|Arapey|Arbutus|Arbutus+Slab|Architects+Daughter|Archivo|Archivo+Black|Archivo+Narrow|Aref+Ruqaa|Arima+Madurai|Arimo|Arizonia|Armata|Arsenal|Artifika|Arvo|Arya|Asap|Asap+Condensed|Asar|Asset|Assistant|Astloch|Asul|Athiti|Atma|Atomic+Age|Aubrey|Audiowide|Autour+One|Average|Average+Sans|Averia+Gruesa+Libre|Averia+Libre|Averia+Sans+Libre|Averia+Serif+Libre|B612|B612+Mono|Bad+Script|Bahiana|Bahianita|Bai+Jamjuree|Ballet|Baloo+2|Baloo+Bhai+2|Baloo+Bhaina+2|Baloo+Chettan+2|Baloo+Da+2|Baloo+Paaji+2|Baloo+Tamma+2|Baloo+Tammudu+2|Baloo+Thambi+2|Balsamiq+Sans|Balthazar|Bangers|Barlow|Barlow+Condensed|Barlow+Semi+Condensed|Barriecito|Barrio|Basic|Baskervville|Battambang|Baumans|Bayon|Be+Vietnam|Bebas+Neue|Belgrano|Bellefair|Belleza|Bellota|Bellota+Text|BenchNine|Benne|Bentham|Berkshire+Swash|Beth+Ellen|Bevan|Big+Shoulders+Display|Big+Shoulders+Inline+Display|Big+Shoulders+Inline+Text|Big+Shoulders+Stencil+Display|Big+Shoulders+Stencil+Text|Big+Shoulders+Text|Bigelow+Rules|Bigshot+One|Bilbo|Bilbo+Swash+Caps|BioRhyme|BioRhyme+Expanded|Biryani|Bitter|Black+And+White+Picture|Black+Han+Sans|Black+Ops+One|Blinker|Bodoni+Moda|Bokor|Bonbon|Boogaloo|Bowlby+One|Bowlby+One+SC|Brawler|Bree+Serif|Brygada+1918|Bubblegum+Sans|Bubbler+One|Buda|Buenard|Bungee|Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade|Butcherman|Butterfly+Kids|Cabin|Cabin+Condensed|Cabin+Sketch|Caesar+Dressing|Cagliostro|Cairo|Caladea|Calistoga|Calligraffitti|Cambay|Cambo|Candal|Cantarell|Cantata+One|Cantora+One|Capriola|Cardo|Carme|Carrois+Gothic|Carrois+Gothic+SC|Carter+One|Castoro|Catamaran|Caudex|Caveat|Caveat+Brush|Cedarville+Cursive|Ceviche+One|Chakra+Petch|Changa|Changa+One|Chango|Charm|Charmonman|Chathura|Chau+Philomene+One|Chela+One|Chelsea+Market|Chenla|Cherry+Cream+Soda|Cherry+Swash|Chewy|Chicle|Chilanka|Chivo|Chonburi|Cinzel|Cinzel+Decorative|Clicker+Script|Coda|Coda+Caption|Codystar|Coiny|Combo|Comfortaa|Comic+Neue|Coming+Soon|Commissioner|Concert+One|Condiment|Content|Contrail+One|Convergence|Cookie|Copse|Corben|Cormorant|Cormorant+Garamond|Cormorant+Infant|Cormorant+SC|Cormorant+Unicase|Cormorant+Upright|Courgette|Courier+Prime|Cousine|Coustard|Covered+By+Your+Grace|Crafty+Girls|Creepster|Crete+Round|Crimson+Pro|Crimson+Text|Croissant+One|Crushed|Cuprum|Cute+Font|Cutive|Cutive+Mono|DM+Mono|DM+Sans|DM+Serif+Display|DM+Serif+Text|Damion|Dancing+Script|Dangrek|Darker+Grotesque|David+Libre|Dawning+of+a+New+Day|Days+One|Dekko|Dela+Gothic+One|Delius|Delius+Swash+Caps|Delius+Unicase|Della+Respira|Denk+One|Devonshire|Dhurjati|Didact+Gothic|Diplomata|Diplomata+SC|Do+Hyeon|Dokdo|Domine|Donegal+One|Doppio+One|Dorsa|Dosis|DotGothic16|Dr+Sugiyama|Duru+Sans|Dynalight|EB+Garamond|Eagle+Lake|East+Sea+Dokdo|Eater|Economica|Eczar|El+Messiri|Electrolize|Elsie|Elsie+Swash+Caps|Emblema+One|Emilys+Candy|Encode+Sans|Encode+Sans+Condensed|Encode+Sans+Expanded|Encode+Sans+Semi+Condensed|Encode+Sans+Semi+Expanded|Engagement|Englebert|Enriqueta|Epilogue|Erica+One|Esteban|Euphoria+Script|Ewert|Exo|Exo+2|Expletus+Sans|Fahkwang|Fanwood+Text|Farro|Farsan|Fascinate|Fascinate+Inline|Faster+One|Fasthand|Fauna+One|Faustina|Federant|Federo|Felipa|Fenix|Finger+Paint|Fira+Code|Fira+Mono|Fira+Sans|Fira+Sans+Condensed|Fira+Sans+Extra+Condensed|Fjalla+One|Fjord+One|Flamenco|Flavors|Fondamento|Fontdiner+Swanky|Forum|Francois+One|Frank+Ruhl+Libre|Fraunces|Freckle+Face|Fredericka+the+Great|Fredoka+One|Freehand|Fresca|Frijole|Fruktur|Fugaz+One|GFS+Didot|GFS+Neohellenic|Gabriela|Gaegu|Gafata|Galada|Galdeano|Galindo|Gamja+Flower|Gayathri|Gelasio|Gentium+Basic|Gentium+Book+Basic|Geo|Geostar|Geostar+Fill|Germania+One|Gidugu|Gilda+Display|Girassol|Give+You+Glory|Glass+Antiqua|Glegoo|Gloria+Hallelujah|Goblin+One|Gochi+Hand|Goldman|Gorditas|Gothic+A1|Gotu|Goudy+Bookletter+1911|Graduate|Grand+Hotel|Grandstander|Gravitas+One|Great+Vibes|Grenze|Grenze+Gotisch|Griffy|Gruppo|Gudea|Gugi|Gupter|Gurajada|Habibi|Hachi+Maru+Pop|Halant|Hammersmith+One|Hanalei|Hanalei+Fill|Handlee|Hanuman|Happy+Monkey|Harmattan|Headland+One|Heebo|Henny+Penny|Hepta+Slab|Herr+Von+Muellerhoff|Hi+Melody|Hind|Hind+Guntur|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Holtwood+One+SC|Homemade+Apple|Homenaje|IBM+Plex+Mono|IBM+Plex+Sans|IBM+Plex+Sans+Condensed|IBM+Plex+Serif|IM+Fell+DW+Pica|IM+Fell+DW+Pica+SC|IM+Fell+Double+Pica|IM+Fell+Double+Pica+SC|IM+Fell+English|IM+Fell+English+SC|IM+Fell+French+Canon|IM+Fell+French+Canon+SC|IM+Fell+Great+Primer|IM+Fell+Great+Primer+SC|Ibarra+Real+Nova|Iceberg|Iceland|Imbue|Imprima|Inconsolata|Inder|Indie+Flower|Inika|Inknut+Antiqua|Inria+Sans|Inria+Serif|Inter|Irish+Grover|Istok+Web|Italiana|Italianno|Itim|Jacques+Francois|Jacques+Francois+Shadow|Jaldi|JetBrains+Mono|Jim+Nightshade|Jockey+One|Jolly+Lodger|Jomhuria|Jomolhari|Josefin+Sans|Josefin+Slab|Jost|Joti+One|Jua|Judson|Julee|Julius+Sans+One|Junge|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|K2D|Kadwa|Kalam|Kameron|Kanit|Kantumruy|Karantina|Karla|Karma|Katibeh|Kaushan+Script|Kavivanar|Kavoon|Kdam+Thmor|Keania+One|Kelly+Slab|Kenia|Khand|Khmer|Khula|Kirang+Haerang|Kite+One|Kiwi+Maru|Knewave|KoHo|Kodchasan|Kosugi|Kosugi+Maru|Kotta+One|Koulen|Kranky|Kreon|Kristi|Krona+One|Krub|Kufam|Kulim+Park|Kumar+One|Kumar+One+Outline|Kumbh+Sans|Kurale|La+Belle+Aurore|Lacquer|Laila|Lakki+Reddy|Lalezar|Lancelot|Langar|Lateef|Lato|League+Script|Leckerli+One|Ledger|Lekton|Lemon|Lemonada|Lexend|Lexend+Deca|Lexend+Exa|Lexend+Giga|Lexend+Mega|Lexend+Peta|Lexend+Tera|Lexend+Zetta|Libre+Barcode+128|Libre+Barcode+128+Text|Libre+Barcode+39|Libre+Barcode+39+Extended|Libre+Barcode+39+Extended+Text|Libre+Barcode+39+Text|Libre+Barcode+EAN13+Text|Libre+Baskerville|Libre+Caslon+Display|Libre+Caslon+Text|Libre+Franklin|Life+Savers|Lilita+One|Lily+Script+One|Limelight|Linden+Hill|Literata|Liu+Jian+Mao+Cao|Livvic|Lobster|Lobster+Two|Londrina+Outline|Londrina+Shadow|Londrina+Sketch|Londrina+Solid|Long+Cang|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Lovers+Quarrel|Luckiest+Guy|Lusitana|Lustria|M+PLUS+1p|M+PLUS+Rounded+1c|Ma+Shan+Zheng|Macondo|Macondo+Swash+Caps|Mada|Magra|Maiden+Orange|Maitree|Major+Mono+Display|Mako|Mali|Mallanna|Mandali|Manjari|Manrope|Mansalva|Manuale|Marcellus|Marcellus+SC|Marck+Script|Margarine|Markazi+Text|Marko+One|Marmelad|Martel|Martel+Sans|Marvel|Mate|Mate+SC|Maven+Pro|McLaren|Meddon|MedievalSharp|Medula+One|Meera+Inimai|Megrim|Meie+Script|Merienda|Merienda+One|Merriweather|Merriweather+Sans|Metal|Metal+Mania|Metamorphous|Metrophobic|Michroma|Milonga|Miltonian|Miltonian+Tattoo|Mina|Miniver|Miriam+Libre|Mirza|Miss+Fajardose|Mitr|Modak|Modern+Antiqua|Mogra|Molengo|Molle|Monda|Monofett|Monoton|Monsieur+La+Doulaise|Montaga|Montez|Montserrat|Montserrat+Alternates|Montserrat+Subrayada|Moul|Moulpali|Mountains+of+Christmas|Mouse+Memoirs|Mr+Bedfort|Mr+Dafoe|Mr+De+Haviland|Mrs+Saint+Delafield|Mrs+Sheppards|Mukta|Mukta+Mahee|Mukta+Malar|Mukta+Vaani|Mulish|MuseoModerno|Mystery+Quest|NTR|Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script|Nerko+One|Neucha|Neuton|New+Rocker|New+Tegomin|News+Cycle|Newsreader|Niconne|Niramit|Nixie+One|Nobile|Nokora|Norican|Nosifer|Notable|Nothing+You+Could+Do|Noticia+Text|Noto+Sans|Noto+Sans+HK|Noto+Sans+JP|Noto+Sans+KR|Noto+Sans+SC|Noto+Sans+TC|Noto+Serif|Noto+Serif+JP|Noto+Serif+KR|Noto+Serif+SC|Noto+Serif+TC|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Numans|Nunito|Nunito+Sans|Odibee+Sans|Odor+Mean+Chey|Offside|Oi|Old+Standard+TT|Oldenburg|Oleo+Script|Oleo+Script+Swash+Caps|Open+Sans|Open+Sans+Condensed|Oranienbaum|Orbitron|Oregano|Orelega+One|Orienta|Original+Surfer|Oswald|Over+the+Rainbow|Overlock|Overlock+SC|Overpass|Overpass+Mono|Ovo|Oxanium|Oxygen|Oxygen+Mono|PT+Mono|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|PT+Serif+Caption|Pacifico|Padauk|Palanquin|Palanquin+Dark|Pangolin|Paprika|Parisienne|Passero+One|Passion+One|Pathway+Gothic+One|Patrick+Hand|Patrick+Hand+SC|Pattaya|Patua+One|Pavanam|Paytone+One|Peddana|Peralta|Permanent+Marker|Petit+Formal+Script|Petrona|Philosopher|Piazzolla|Piedra|Pinyon+Script|Pirata+One|Plaster|Play|Playball|Playfair+Display|Playfair+Display+SC|Podkova|Poiret+One|Poller+One|Poly|Pompiere|Pontano+Sans|Poor+Story|Poppins|Port+Lligat+Sans|Port+Lligat+Slab|Potta+One|Pragati+Narrow|Prata|Preahvihear|Press+Start+2P|Pridi|Princess+Sofia|Prociono|Prompt|Prosto+One|Proza+Libre|Public+Sans|Puritan|Purple+Purse|Quando|Quantico|Quattrocento|Quattrocento+Sans|Questrial|Quicksand|Quintessential|Qwigley|Racing+Sans+One|Radley|Rajdhani|Rakkas|Raleway|Raleway+Dots|Ramabhadra|Ramaraja|Rambla|Rammetto+One|Ranchers|Rancho|Ranga|Rasa|Rationale|Ravi+Prakash|Recursive|Red+Hat+Display|Red+Hat+Text|Red+Rose|Redressed|Reem+Kufi|Reenie+Beanie|Reggae+One|Revalia|Rhodium+Libre|Ribeye|Ribeye+Marrow|Righteous|Risque|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Rochester|Rock+Salt|RocknRoll+One|Rokkitt|Romanesco|Ropa+Sans|Rosario|Rosarivo|Rouge+Script|Rowdies|Rozha+One|Rubik|Rubik+Mono+One|Ruda|Rufina|Ruge+Boogie|Ruluko|Rum+Raisin|Ruslan+Display|Russo+One|Ruthie|Rye|Sacramento|Sahitya|Sail|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Saira+Stencil+One|Salsa|Sanchez|Sancreek|Sansita|Sansita+Swashed|Sarabun|Sarala|Sarina|Sarpanch|Satisfy|Sawarabi+Gothic|Sawarabi+Mincho|Scada|Scheherazade|Schoolbell|Scope+One|Seaweed+Script|Secular+One|Sedgwick+Ave|Sedgwick+Ave+Display|Sen|Sevillana|Seymour+One|Shadows+Into+Light|Shadows+Into+Light+Two|Shanti|Share|Share+Tech|Share+Tech+Mono|Shippori+Mincho|Shippori+Mincho+B1|Shojumaru|Short+Stack|Shrikhand|Siemreap|Sigmar+One|Signika|Signika+Negative|Simonetta|Single+Day|Sintony|Sirin+Stencil|Six+Caps|Skranji|Slabo+13px|Slabo+27px|Slackey|Smokum|Smythe|Sniglet|Snippet|Snowburst+One|Sofadi+One|Sofia|Solway|Song+Myung|Sonsie+One|Sora|Sorts+Mill+Goudy|Source+Code+Pro|Source+Sans+Pro|Source+Serif+Pro|Space+Grotesk|Space+Mono|Spartan|Special+Elite|Spectral|Spectral+SC|Spicy+Rice|Spinnaker|Spirax|Squada+One|Sree+Krushnadevaraya|Sriracha|Srisakdi|Staatliches|Stalemate|Stalinist+One|Stardos+Stencil|Stick|Stint+Ultra+Condensed|Stint+Ultra+Expanded|Stoke|Strait|Stylish|Sue+Ellen+Francisco|Suez+One|Sulphur+Point|Sumana|Sunflower|Sunshiney|Supermercado+One|Sura|Suranna|Suravaram|Suwannaphum|Swanky+and+Moo+Moo|Syncopate|Syne|Syne+Mono|Syne+Tactile|Tajawal|Tangerine|Taprom|Tauri|Taviraj|Teko|Telex|Tenali+Ramakrishna|Tenor+Sans|Text+Me+One|Texturina|Thasadith|The+Girl+Next+Door|Tienne|Tillana|Timmana|Tinos|Titan+One|Titillium+Web|Tomorrow|Trade+Winds|Train+One|Trirong|Trispace|Trocchi|Trochut|Truculenta|Trykker|Tulpen+One|Turret+Road|Ubuntu|Ubuntu+Condensed|Ubuntu+Mono|Ultra|Uncial+Antiqua|Underdog|Unica+One|UnifrakturCook|UnifrakturMaguntia|Unkempt|Unlock|Unna|VT323|Vampiro+One|Varela|Varela+Round|Varta|Vast+Shadow|Vesper+Libre|Viaoda+Libre|Vibes|Vibur|Vidaloka|Viga|Voces|Volkhov|Vollkorn|Vollkorn+SC|Voltaire|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Warnes|Wellfleet|Wendy+One|Wire+One|Work+Sans|Xanh+Mono|Yanone+Kaffeesatz|Yantramanav|Yatra+One|Yellowtail|Yeon+Sung|Yeseva+One|Yesteryear|Yrsa|Yusei+Magic|ZCOOL+KuaiLe|ZCOOL+QingKe+HuangYou|ZCOOL+XiaoWei|Zen+Dots|Zeyada|Zhi+Mang+Xing|Zilla+Slab|Zilla+Slab+Highlight"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ind.css">
    
</head>
<body>
    <div class="header pd-0">
        <img src="Dreams B.png" width="130px" height="130px">
        <h1 class="title ps-3 pt-4">DREAMS</h1>
        <a href="/dreams_figma2.0/dreams_figma2.0/mentee_home/logout.php" class="logout">Logout</a>
        <div class="col">
            <div class="blah">
                <div class="badge">
                    <p class="title" style="color:black;">fhj<br>Desire group christ school</p>
                </div>
            </div>
            <div class="item1">
                <a href="../chat2/index.php">
                    <svg width="82" height="89" viewBox="0 0 82 89" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="82" height="89" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_110_9" transform="matrix(0.01 0 0 0.00921348 0 0.0393258)"/>
                        </pattern>
                        <image id="image0_110_9" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEElEQVR4nO3cMUoDQRiG4U/Tx0tIsLe1WMHGJhYBwS6VF7Cw3dLrmEqwCPYidqYRbyDkAhtZWCx1E3edb+d/H5hOEjMvkz+JWSUAAAAAAAAgXyeSboMuS6WkTdBliSBmCGKGIGYIMpAgn5IeM1jPuQz1pfJQEMRLQRAvBUG8FATxUhDESxEhyCboKgmi5BEIovQbTxCl32yCKP0GE0TpNzVUkBtJZxms11yC1K/5c7AkiBeCmCGIGYKYIYgZgpghiJlQQSaSrhOtq5Z7EirIPOFHHx8t94QgIggn5AecEHFCvjFDgp+QmaT3ROup5Z6ECjIEBDFDEDMEMUMQMwQxEyrIrMOXsfVt9SFUkHmH78rr2+oDQUSQP12FywkZyHXqPGV1gCDBT8ikwz/J1rfVh1BBhoAgZpIGqb9+f7fl4oSYIYgZgpghiBmCmCHIQIJse9Hn8Rb3OZJ0GuGiz1109UZy2fL+xpLuO7zfXRdBJB1JejOIQRBJU0lrgxDhg+w1/5u9MogQPsjYZF4QRF7zYlBB+vgixbTlvFhIOkj4WLIPMmo+Qf5tXlTNz+2nfjA5B3mR9NDiVNRfuDhP/SByUv7heXvVzBYYBFkwLzyCVMwLnyBrSRc9/z7hlcyL4QVZNJ/qInGQinnhE2TNvPAJsuL9hU+QBfPCI0jFvPAJsmZe+LiUdJj6lwAAAAAAQP/tC+FwYZW2xSPbAAAAAElFTkSuQmCC"/>
                        </defs>
                        </svg>
                    <h4>Chat with mentee</h4>
                </a>
            </div>
            
            <div class="item2">
                <a href="../mentor_mentee_list/index.php">
                <svg width="56" height="53" viewBox="0 0 56 53" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="56" height="53" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_151_22" transform="matrix(0.0105159 0 0 0.0111111 0.0267857 0)"/>
                    </pattern>
                    <image id="image0_151_22" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXElEQVR4nO2c24vVVRTHP3MGckYl0J7SJ+khx8SCHsq85Xh56kVGTewx7UKRQV7QJy9dREcpJeipIFD/BC8pkRYmVA+RlVe8oWdERMEcx6wtW5agB+ac32/v9bucc9YHvjAcfrPPd63zO/u2fvuAYRiGYRiGYRiGYRiG0YhOYAbQDxwFBoC7ogF5rV+u8de2m59ouoE1Yt4l1ACwWv631f2osBC4mCIgV6MLQF8L+4mmA1gP/B8RlBP5NjYDlRbyo4I3sEchIFejPYHBlc2PGp9kEJQTbWoBP2p9oMbX09X52vYp+zkALAOeBUaJJgLLge+U/ajQHTnQuIQ6D3Qp+DkBzEzQzizgpIIfNdbkkGQnWhXp5wdgTIrYxgKHI/2o0JlyXuoiVW0wENXzcyJlkh9N9qlAP2rMzDHJTjQt0M/siDhnBfpRY1sBid4a4McPfLEcDPCjxtECEv1jgJ83FWJ9K8CPGlcLSHQ1wI+fwsUyMcCPGkMFJPpOgJ/RCrGODvCjhitIw5H2+rRk3X7qN7ZEK2OJJp87up366CeL7KPbadbRE+Cn7ebRyxVifSfAjxr9BSR6S4Afv+0Zy6EAP2rMKCDRrwT66Y2I89VAP225e3dSduLS8hRwOtCPKqtzTPTKSD+HUybbJ/lIpB81uqUcX6YKy4U67ZxKuGXaW+dOTuNHlb4caoYLlP0clB25Hplne00C3q4z8IX6UeXjDBO9sQX8qFG25ygqJfOjSocUR8vyZFBHyfyo0xc5QJ5X7gPL5keVLinHV1MEVJUpU1cb+FGnIpViv1T9ScwPiary2ha5ptKGfgzDMAzDMJqEsbID9iHwjZR8jgOXgUHgHnAdOCdbkd8CHwAvAU9k4GcE8DKwQt7riCxErouXQfF2XLx+LdfODnwKNTM6Ze7pjzT8FrnsvSP1v0+B5yM8vQB8BvwcWbH3sfwiRyqmFnX+8Dngc+BaBhs4TvQXsEG2NBsxSa79O0M/vtq+PaGfKPwn+oasolzO2j9M/a9XHs/N24/vZpZq3+UVaTTLu8Ul1DHZ6Fkgfxft509gicay3T9N/0cJAnIl1+/A9JAE+xLPTuC/EgThIuUr4bukgDtf+vOnZXfO1xrHyZgzX67ZLWdf0r6Pz9UXcqQuEVOAsyVIkAuUn7btA94DniGcCdLGXuDfFO9/BpjcqPF5wM0SJMsF6AqwDhiPPv4bsLbOSa1a3QDmDNfYYvn9CtekGgTmki1+0FskfXIjP0NymvcxpsmCwTW5/pEFS9Z0yI15KcGH7xc7DxjV5H2yq5EfyEaSD/756R0NVsRnHg6Q75cgOU5Z/mB9nrzWYGx7l4JWei5jfU/+vAjcqvP8X9POMlyDGUgRLBrGj98t5HYJEuNaXP5mTjw3NBG1E8lXlkSyvom+RE4vpVlimki9JdBTxC/KuDbTR7Uj5hIpRzXzMtyVRD6HvwKv5zrnMQzDMAzDMAzDMAzDMAzDMAzDoJW4D23nY35SxA6qAAAAAElFTkSuQmCC"/>
                    </defs>
                    </svg>                       
                    <h4>Mentee List</h4>
                </a>
            </div>
        
            <div class="item3">
                <a href="../mentor_assignment/index1.php">
                    <svg width="56" height="53" viewBox="0 0 56 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M53.3968 49.5958H24.6027C23.1741 49.5958 21.9995 48.4188 21.9995 46.9872C21.9995 45.5557 23.1741 44.3786 24.6027 44.3786H53.3968C54.8254 44.3786 56 45.5557 56 46.9872C56 48.4506 54.8254 49.5958 53.3968 49.5958Z" fill="#292D32"/>
                        <path d="M53.3968 29.5858H24.6027C23.1741 29.5858 21.9995 28.4088 21.9995 26.9772C21.9995 25.5457 23.1741 24.3686 24.6027 24.3686H53.3968C54.8254 24.3686 56 25.5457 56 26.9772C56 28.4088 54.8254 29.5858 53.3968 29.5858Z" fill="#292D32"/>
                        <path d="M53.3968 9.54322H24.6027C23.1741 9.54322 21.9995 8.36614 21.9995 6.93459C21.9995 5.50304 23.1741 4.32602 24.6027 4.32602H53.3968C54.8254 4.32602 56 5.50304 56 6.93459C56 8.36614 54.8254 9.54322 53.3968 9.54322Z" fill="#292D32"/>
                        <path opacity="0.4" d="M5.49215 13.8701C4.79373 13.8701 4.12705 13.5838 3.65085 13.1066L0.761917 10.2117C-0.253972 9.19372 -0.253972 7.53949 0.761917 6.5215C1.77781 5.50351 3.42863 5.50351 4.44452 6.5215L5.49215 7.5713L12.2859 0.763493C13.3018 -0.254498 14.9526 -0.254498 15.9685 0.763493C16.9844 1.78148 16.9844 3.43572 15.9685 4.45371L7.33345 13.1066C6.82551 13.5838 6.19058 13.8701 5.49215 13.8701Z" fill="#292D32"/>
                        <path opacity="0.4" d="M5.49215 33.9127C4.82548 33.9127 4.1588 33.6582 3.65085 33.1492L0.761917 30.2543C-0.253972 29.2363 -0.253972 27.5821 0.761917 26.5641C1.77781 25.5461 3.42863 25.5461 4.44452 26.5641L5.49215 27.6139L12.2859 20.8061C13.3018 19.7881 14.9526 19.7881 15.9685 20.8061C16.9844 21.8241 16.9844 23.4783 15.9685 24.4963L7.33345 33.1492C6.82551 33.6582 6.15883 33.9127 5.49215 33.9127Z" fill="#292D32"/>
                        <path opacity="0.4" d="M5.49215 53C4.82548 53 4.1588 52.7455 3.65085 52.2366L0.761917 49.3416C-0.253972 48.3237 -0.253972 46.6694 0.761917 45.6514C1.77781 44.6334 3.42863 44.6334 4.44452 45.6514L5.49215 46.7012L12.2859 39.8934C13.3018 38.8754 14.9526 38.8754 15.9685 39.8934C16.9844 40.9114 16.9844 42.5656 15.9685 43.5836L7.33345 52.2366C6.82551 52.7455 6.15883 53 5.49215 53Z" fill="#292D32"/>
                    </svg>                   
                    <h4>Assign Tasks</h4>
                </a>
            </div>
        
            <div class="item4">
                <a href="../mentor_accolades/main.php">
                    <svg width="68" height="70" viewBox="0 0 68 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="68" height="70" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_108_54" transform="matrix(0.01 0 0 0.00971429 0 0.0142857)"/>
                        </pattern>
                        <image id="image0_108_54" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFf0lEQVR4nO2da2hcRRTHfzXxAYnWiKBp8YVgrEIURKtfpARRpH4w2gpSq1aq6Bdb/OCT6gpSfNYHQZH6QEXB+ixiFIVWq2BBrVSUiq3g2wrWV5HY2s3KwAmEsDP33t1zk7mz5wcHwrJ3zsz8d+6dOffMBAzDMAzDMAzDMAzDMAzDMAxjgnnAQmAZcE2H2TJpu+uDGWUusAb4FmiY0ZC+eACYM51CdAF3Av+YCPh+iK5v7pC+KpXZwFsmBHnvCG8Ch5Qlxv7ABhODorfnTcABZQgyYmLQ6rPyYW0xTgXqGU73ANuBTzrMtkvbQ33j+m5QU5A3As52AlcBPXQuPcBy4NdAP63XcnYY8J/HyQ/AMVqOEuBY4EdPX+0F+jScLAmofo6Gg8Q4N9Bfl2o4uMtT+BcahSfKNk+fufVb2zzpKfwZjcIT5TlPnz2hUfg6T+FuGmwUWyK4vmwbE6Q4JkhkmCCRYYJERiUEOV/Kerditg44LzVBrgTGKxycHAeuSEmQ7yPo1Eab9l0qgnRXfHQ0JkVsXVsqLwgSpm5U3D4u0N7oBTkD+COCTm20aL8Dp6ckiOMI4DpgNXB3RWw1cK3UndQE6SRGTJC4MEEi43BJbNhnt6y4OBP42p4hcXEw8Lo91PXolRSes8QG5bMi7Cd50DbLagG3Gr9AXl3vCKxNdsgr2YUFVvBno0CnTHsPAm4Afmph4ehSf1ZKGaXTCYIMZYyGvOYe4AvKrmzKgswCbs+RJlvE3FT3tjIrnaogs4DHS4x/PSY+1ElVkDUlijFh95VR8RQFuSxHZ+4GngUuBgYkobpH/l4kyXC7c5Sjkj6asiBzgb8DHViXtuWJ8B4JPJrxAu5PoF+zAakJ8kLGqLiwhTIvyhgtbqSpkZIgA4EZ1d42p6xDUoZv5nVCbIJcDmxU3r20AVhaoA4PBn7F19M+KwPlu0lENIKEKqphK3LGk3Z6rv9SaQtzd2Arws9a02ANQXwdoWW/5KjDKYHr3aYkLZYG/AzGkgakuRJueO7RWb/wqz3X7pH991ocGniWuH2IUYyQD0sW5IMcdbjfc+1H6LPZ4+veWAQ5ucUoaiNnpPWkHHV42nP9S+jzssfXUzHNsnplhat5Es+iAi+Lnve0Yy36rPX4cnVom1TWIQ952uFer2qz3uPLTbvbJhVBbvG047MSfG31+LpZo/BUBFniaUddOdY0JxDbUgk0piJIf6CjNFbpWYvg8RZSUpvyoseBi3JWjU8Dq2iNs1p6ZZHazIcL9ZSaFvkK1ePWwPTZPfTb5ZFA+SrPj1AjfpuuLAtFZmdsi3CnGrXK8oztDGrRgKGAIydW1agF2lOXNhUJArrvrsp4SeUSKdRwsahdgRiS29BZJXqBrwKd5+w9YH7O3N1NGWVtK+MssXsynL4j76ndTqnTIrHjMiK/YxltcrZFTvAZnpRKOiyfbclx/Zj4UqcvMEpitV2yLWAms07cGb6lMTwNYfSGsrm8q1aeJVrmfMxI+CFWqwMnpizIRAgiz/03FluQuiDIq8i3ExXk34IHHYzLNTMqyATzZQa2NWcWXxUE2Sgnra6Q0Pw3U/YK7pPPXpPvHC3XRCFIszl+X2TW3YIgvnflzpoRrSBVolZQkBAmiAImSGTUbIRUV5DFwKvyysElVkzFblnTJEi/J2HBTfmPmvQ9E2QaBFmcEb/7S1KRXPjdBClRkM+B0QLrnFG5xqa9bZJU6CQFaiZIXNRMkOoKMgbcKFYk0m23rBIE2Tzl36oeD7xvguizKueoaLYRqCvnaHE+jJxcUmBU+JgX2JzTkLWMkZMDmxzw7H7xNxXcANol14w1OXi5lP/wmfrxezVZ3I20uZd8QMoYlTKLnjpnGIZhGIZhUBb/A5GNwTapvk5cAAAAAElFTkSuQmCC"/>
                        </defs>
                        </svg>              
                    <h4>Upload Accolades</h4>
                </a>
            </div>
        
            <div class="item5">
                <a href="../mentor_anouncement/index.html">
                    <svg width="74" height="71" viewBox="0 0 74 71" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="74" height="71" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_151_27" transform="matrix(0.0106607 0 0 0.0111111 0.0202703 0)"/>
                        </pattern>
                        <image id="image0_151_27" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAESElEQVR4nO2cS2hVVxSGv/jCltZHlYRU6MCJE0HTgViCOBGr1VHVgZNiK2jEx8BJEBUfwVfR2ExSWh8tKigIjqUDQxslqCAODb6wItrExJLG1tTokg0rIJLrvffcc85eO9kf/JPcm3v/9SfnsffZe0EkEolEIpFIJBKJREpiHFAHrAH2AKeAy8Ad4CHQC7xU9erP3Gvt+t49+rt1+lkRZSywEDikYT0HJCW5z/oDOAgs0O8aVYwBlgC/AN0pBltMXcBJ4Ev1MGKpARqBuzmGW0julLMbqGYEMV0P338NBPyuBoCfgFoC5mPgANBvINBi+gfYD3xEYCwDHhgIUMrUI+BrAuAT4LyBwKRCnQOmYpQ6Ixc6SUnuiJyHMb4D/jMQjqQsV9O3GKHRQCCSsdxdkzeqgO8NhCA5qUVrzp3RFLKo3C1grmzyVGgH0Kzq8OShIa+QlwODORf3DFg6jJevgL9z9jKo35spM4CnHv6LlhYZHOXtpyvLYbub8brkoaiOErxd9eDrt6xmAbd4KEaAwyV4O+LJ24YshtY9hoNu9uStO+2heounQsTwqWNI7o+c2gXwf4+FSJGr/HIDc9qfphH0Ps+FiN7CLSsQct63d8OpqdKQP8j5uZ4U0VU9VI8C1wz4GdJfwMRKgl5toAgJRKsqCfqcgQIkEJ1OGvJ4Hfr6LkACUU/SRTv1BsxLYPoipBk6CViJRoo/GzAugenHJEFfMWBcApNbP1g2tw0Yl7dUCDGkziRBdxkwLoEF/SRJ0C8MGJfAgnaZlc2AAeMSWNBuHUjZ+HhkJYEH/ThJ0PcNGJfAgr6VJOh2A8YlsKAT3d4dM2BcAgu6NUnQWw0Yl8CCTjQEn2/AuAQWdKJJpbG6l8+3eQkk6MTTpI4LBgqQQIJ2G0oTs8JAARJI0CsrCXqCoTmPQshIeDiLrhTyXYi8x58Y0F5SoNbIZsxC+PY1kObKUp9LwsR40KWsDSyZaQYW0hTCpyd3/ZpCyqyNQfNu0OvJALcjqS3+RzMU8sUsd2nV6JzraD91dOXREWEx8MrzaUQ86qU2dsmFBgMFiydtJGeaDBQtIQ5MyqVqhHUzkBL2g3vZouw4YSAAyVivtbGAV3YaCEIyXj7g+uh5x9rjLklRbkncXIyw3UAgkoHOAJMxhLUn5VKh7uV5j1wONw2EIymoT/uafohBanSUJAGrX/uiutlJs+wwEJRUcKFr1C6TphmXUgPB5zk/1zsOLPI58Mh7I1E/sFnXjnwObNNeIH0pt8Fs0y3W9SF22P2swv2Hl4CZBT7bhTFLd+y6bri/6vs7tZ1lr7baGWrU/ae+9ru+dxfwDTAn9H7RE7RDedI53HUhHba+qNLVOEnOw4esDQAsh9xaZsB9OuNV7dt8SPxQRsA39MHAJN+mQ6SvyDTidZ33mO3baOjs09VKD/VieFanSN3zw3jujUQikUgkEolEIhEC5g3I1aETAO1XbAAAAABJRU5ErkJggg=="/>
                        </defs>
                        </svg>       
                    <h4>Announcements</h4>
                </a>
            </div>
            
            <div class="item6">
                <a href="../mentee_notes/mentee_notes_front/index.php">
                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="70" height="70" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_151_31" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_151_31" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADh0lEQVR4nO2czWoUQRSFv1WydWdGpTNJFgYEN26MC42+g/oKLlRQA271KWKyEVzqA/ifpSIIujH+gATBhcYgmEjirqWgB0KTnq7u6Z46VV0HLoTQM3POR+V23WlS4IfOA6vAR+BvVubnFWDRtbkQNAe8BNKSeg7MuDbrq84AWxaQB/ULWHBt2jf1gc0KkAe1lf0VRFnqRQ3Ig1qz/ZCu68IIkAcVb5AWWi2AtwfcAKaAHnAz+91B196z+aCu61MBPAM5r1sF16478O2ddgrgmZWc11TBtdt0QPnhIm2oTLvIq9fg+3szBNkOF2nNMj05r6UWP09yCKo6XKQ1ai+D3cvK9Od/LX+m1BBUd7hIPSmZIWiU4SL1pNZCGC5ST2pRfbiouo1rs4Zt+6SHoCrDRV5vHIB+Tbkkh6DtAlPDVvJA1x2Avkq5eopDUFEgG00C78cI+R0wMYZcrWhUQ8fGBNtAPjrGXI2rCUOTwLWsfzZ5gzTv9SprFxMOcjUqOUOh5pIzFGouOUOh5pIzFGouOUOh5pIzFGouOUOh5pIzFGouOUOh5pIzlPty6AHwHfgJPKrwpEQul5yhfY/XNgqeAZ7Ew1xyhoAE+DrE22/glG+51AwdKljJB63sOY9y6RkC7liANvXQp1xyhirA/oFHueQM7dPtEtDf8CiXa0P9rOqs7PvCuaQM9bMb30YN2OY1h4e8JoIu2MKZNjCLXRspu9YogqZ4n2wD2wZyBE3xxLe/JfRL9tk26vSKTkomviqtoUydBZ1YQm4KdidBJxUhNwG7c6CTmpAjaA8gd2pFJw4ht5lLylDiGHJbuaQMJQKQ28glZSgRgdx0LilDiRDkJnNJGUrEIDeVS8pQIgi5iVxyhq4AuzUgl3155DqXpKEEeCwEOVjQRvMC7aIToI0+iEAOHvTFIbDH0S46A3qgE7mePW7IwYC+DExb3CB3HUEOBvTbDOC0xdbPBeQgQM87url1DvRdhzuJToH+nLvOtJFL6Ml70GvAl2xlH0dX3oP2RXK55AyFmkvOUKi55AyFmkvOUKi55AyFmmuU49hUdaQg0x/FAwYPOoLYFy0pHjC4YnEEsS8qOyp52fXp52lH6iyO9UwAQtpyPUFAXTioexYRLWT/yJ4GVpvAacQ0E1gbeerwCY+VzmWHWq87Oow7rVk72VP4ZYUbX1RUVFRUVFRUVFRUFOPSf3jotGAAh47UAAAAAElFTkSuQmCC"/>
                        </defs>
                        </svg>
                    <h4>Notes</h4>
                </a>
            </div>
        </div>
        <div class="announcement">
            <svg width="53" height="57" viewBox="0 0 53 57" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="53" height="57" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_105_23" transform="matrix(0.0025 0 0 0.00232456 0 0.174561)"/>
                </pattern>
                 <!--img-->
                </svg>
            <h4>Announcements</h4><br><br><br><br><br>
            <div class="an-card">
                <?php include('./get_announcement.php') ?>
        </div>
</div>
   

</body>
</html>