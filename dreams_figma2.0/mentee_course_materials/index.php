<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['name'])){
      $name=$_SESSION['name'];
    }
    else{
      header("Location: ../login/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="inde.css">
</head>
<body>
        <div class="header pd-0">
          <img src="Dreams B.png" width="130px" height="130px" />
          <h1 class="title ps-3 pt-4">DREAMS</h1>
          <h2 class="logout"><button type="button" onclick = "location.href ='../mentee_home/index.php';">Back</button></h2>
      </div>
    <div class="col">
        <h1>Course Materials</h1>
    </div>
    <a class="item1"  href="../mentee_video/menteevideopage.html">
            <svg width="128" height="144" viewBox="0 0 128 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_404_79)">
                <rect width="128" height="144" rx="4" fill="url(#paint0_linear_404_79)"/>
                <g clip-path="url(#clip1_404_79)">
                <path d="M42.125 78.25C42.125 73.5112 45.98 69.6562 50.7188 69.6562H77.2812C79.4352 69.6562 81.1875 67.9039 81.1875 65.75V43.7188C81.1875 37.257 75.9305 32 69.4688 32H58.5312C52.0695 32 46.8125 37.257 46.8125 43.7188V50.125H64C65.2946 50.125 66.3438 51.1742 66.3438 52.4688C66.3438 53.7633 65.2946 54.8125 64 54.8125H35.7188C29.257 54.8125 24 60.0695 24 66.5312V77.4688C24 83.9305 29.257 89.1875 35.7188 89.1875H42.125V78.25ZM58.5312 43.875C57.2367 43.875 56.1875 42.8258 56.1875 41.5312C56.1875 40.2367 57.2367 39.1875 58.5312 39.1875C59.8258 39.1875 60.875 40.2367 60.875 41.5312C60.875 42.8258 59.8258 43.875 58.5312 43.875Z" fill="white"/>
                <path d="M92.2812 54.8125H85.875V65.75C85.875 70.4888 82.02 74.3438 77.2812 74.3438H50.7188C48.5648 74.3438 46.8125 76.0961 46.8125 78.25V100.281C46.8125 106.743 52.0695 112 58.5312 112H69.4688C75.9305 112 81.1875 106.743 81.1875 100.281V93.875H64C62.7054 93.875 61.6562 92.8258 61.6562 91.5312C61.6562 90.2367 62.7054 89.1875 64 89.1875H92.2812C98.743 89.1875 104 83.9305 104 77.4688V66.5312C104 60.0695 98.743 54.8125 92.2812 54.8125ZM69.4688 100.125C70.7633 100.125 71.8125 101.174 71.8125 102.469C71.8125 103.763 70.7633 104.812 69.4688 104.812C68.1742 104.812 67.125 103.763 67.125 102.469C67.125 101.174 68.1742 100.125 69.4688 100.125Z" fill="white"/>
                </g>
                </g>
                <defs>
                <linearGradient id="paint0_linear_404_79" x1="128" y1="144" x2="-45.5" y2="-171" gradientUnits="userSpaceOnUse">
                <stop stop-color="#50C94D"/>
                <stop offset="1" stop-color="#FFB199"/>
                </linearGradient>
                <clipPath id="clip0_404_79">
                <rect width="128" height="144" fill="white"/>
                </clipPath>
                <clipPath id="clip1_404_79">
                <rect width="80" height="80" fill="white" transform="translate(24 32)"/>
                </clipPath>
                </defs>
                </svg>
            <h1>Year 1</h1>
            <h2>Personal Development (16 Lessons)</h2>
            <h3>Personal development is a journey, not a destination.</h3>                
    </a><br><br>
    <a class="item1"  href="../mentee_video/menteevideopage2.html">
            <svg width="128" height="144" viewBox="0 0 128 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_404_79)">
                <rect width="128" height="144" rx="4" fill="url(#paint0_linear_404_79)"/>
                <g clip-path="url(#clip1_404_79)">
                <path d="M42.125 78.25C42.125 73.5112 45.98 69.6562 50.7188 69.6562H77.2812C79.4352 69.6562 81.1875 67.9039 81.1875 65.75V43.7188C81.1875 37.257 75.9305 32 69.4688 32H58.5312C52.0695 32 46.8125 37.257 46.8125 43.7188V50.125H64C65.2946 50.125 66.3438 51.1742 66.3438 52.4688C66.3438 53.7633 65.2946 54.8125 64 54.8125H35.7188C29.257 54.8125 24 60.0695 24 66.5312V77.4688C24 83.9305 29.257 89.1875 35.7188 89.1875H42.125V78.25ZM58.5312 43.875C57.2367 43.875 56.1875 42.8258 56.1875 41.5312C56.1875 40.2367 57.2367 39.1875 58.5312 39.1875C59.8258 39.1875 60.875 40.2367 60.875 41.5312C60.875 42.8258 59.8258 43.875 58.5312 43.875Z" fill="white"/>
                <path d="M92.2812 54.8125H85.875V65.75C85.875 70.4888 82.02 74.3438 77.2812 74.3438H50.7188C48.5648 74.3438 46.8125 76.0961 46.8125 78.25V100.281C46.8125 106.743 52.0695 112 58.5312 112H69.4688C75.9305 112 81.1875 106.743 81.1875 100.281V93.875H64C62.7054 93.875 61.6562 92.8258 61.6562 91.5312C61.6562 90.2367 62.7054 89.1875 64 89.1875H92.2812C98.743 89.1875 104 83.9305 104 77.4688V66.5312C104 60.0695 98.743 54.8125 92.2812 54.8125ZM69.4688 100.125C70.7633 100.125 71.8125 101.174 71.8125 102.469C71.8125 103.763 70.7633 104.812 69.4688 104.812C68.1742 104.812 67.125 103.763 67.125 102.469C67.125 101.174 68.1742 100.125 69.4688 100.125Z" fill="white"/>
                </g>
                </g>
                <defs>
                <linearGradient id="paint0_linear_404_79" x1="128" y1="144" x2="-45.5" y2="-171" gradientUnits="userSpaceOnUse">
                <stop stop-color="#50C94D"/>
                <stop offset="1" stop-color="#FFB199"/>
                </linearGradient>
                <clipPath id="clip0_404_79">
                <rect width="128" height="144" fill="white"/>
                </clipPath>
                <clipPath id="clip1_404_79">
                <rect width="80" height="80" fill="white" transform="translate(24 32)"/>
                </clipPath>
                </defs>
                </svg>
            <h1>Year 2</h1>
            <h2>Interpersonal Development (14 Lessons)</h2>
            <h3>Building effective social relationships and relating well to others requires individuals to be empathetic.</h3>
    </a><br><br>
    <a class="item1"  href="../mentee_video/menteevideopage3.html">
            <svg width="128" height="144" viewBox="0 0 128 144" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_404_79)">
                <rect width="128" height="144" rx="4" fill="url(#paint0_linear_404_79)"/>
                <g clip-path="url(#clip1_404_79)">
                <path d="M42.125 78.25C42.125 73.5112 45.98 69.6562 50.7188 69.6562H77.2812C79.4352 69.6562 81.1875 67.9039 81.1875 65.75V43.7188C81.1875 37.257 75.9305 32 69.4688 32H58.5312C52.0695 32 46.8125 37.257 46.8125 43.7188V50.125H64C65.2946 50.125 66.3438 51.1742 66.3438 52.4688C66.3438 53.7633 65.2946 54.8125 64 54.8125H35.7188C29.257 54.8125 24 60.0695 24 66.5312V77.4688C24 83.9305 29.257 89.1875 35.7188 89.1875H42.125V78.25ZM58.5312 43.875C57.2367 43.875 56.1875 42.8258 56.1875 41.5312C56.1875 40.2367 57.2367 39.1875 58.5312 39.1875C59.8258 39.1875 60.875 40.2367 60.875 41.5312C60.875 42.8258 59.8258 43.875 58.5312 43.875Z" fill="white"/>
                <path d="M92.2812 54.8125H85.875V65.75C85.875 70.4888 82.02 74.3438 77.2812 74.3438H50.7188C48.5648 74.3438 46.8125 76.0961 46.8125 78.25V100.281C46.8125 106.743 52.0695 112 58.5312 112H69.4688C75.9305 112 81.1875 106.743 81.1875 100.281V93.875H64C62.7054 93.875 61.6562 92.8258 61.6562 91.5312C61.6562 90.2367 62.7054 89.1875 64 89.1875H92.2812C98.743 89.1875 104 83.9305 104 77.4688V66.5312C104 60.0695 98.743 54.8125 92.2812 54.8125ZM69.4688 100.125C70.7633 100.125 71.8125 101.174 71.8125 102.469C71.8125 103.763 70.7633 104.812 69.4688 104.812C68.1742 104.812 67.125 103.763 67.125 102.469C67.125 101.174 68.1742 100.125 69.4688 100.125Z" fill="white"/>
                </g>
                </g>
                <defs>
                <linearGradient id="paint0_linear_404_79" x1="128" y1="144" x2="-45.5" y2="-171" gradientUnits="userSpaceOnUse">
                <stop stop-color="#50C94D"/>
                <stop offset="1" stop-color="#FFB199"/>
                </linearGradient>
                <clipPath id="clip0_404_79">
                <rect width="128" height="144" fill="white"/>
                </clipPath>
                <clipPath id="clip1_404_79">
                <rect width="80" height="80" fill="white" transform="translate(24 32)"/>
                </clipPath>
                </defs>
                </svg>
            <h1>Year 3</h1>
            <h2>Leadership Skills Development (20 Lessons)</h2>
            <h3>Leadership Skills That Can Advance Your Career. Take the Initiative. Think Critically. Listen Effectively. Motivate Others.</h3>
    </a><br><br>
</body>
</html