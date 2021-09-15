<?php 
class Custom_Filter_Widget extends WP_Widget {
public static $languages=
array(
"angielski",
"chiński (mandaryński)",
"francuski",
"hiszpański",
"portugalski",
"niemiecki",
"japoński",
"koreański",
"arabski",
"hindi",
"włoski",
"rosyjski",
"afrikaans",
"aiki (runga)",
"ajnuski",
"akan twi",
"albański",
"alzacki",
"amharski",
"arabski (egipski)",
"arabski (Zatoka)",
"arabski (Lewant)",
"arabski (Maghreb)",
"arabski (współczesny)",
"arabski (sudański)",
"aragoński",
"aramejski",
"argentyński język migowy",
"ormiański",
"arumuński",
"asamski",
"assiniboine (nakoda)",
"australijski język migowy (Auslan)",
"austriacki niemiecki",
"awarski",
"ajmara",
"azerbejdżański",
"azerski",
"bago-kusuntu",
"bagri",
"balijski",
"beludżi",
"bambara (bamanankan)",
"banjar",
"barawana (baré)",
"bari",
"baskijski",
"batak toba",
"bacbijski",
"bawarski",
"bedża",
"belait",
"białoruski",
"bengalski",
"bhodźpuri",
"bislama",
"siksika",
"bośniacki",
"brazylijski język migowy (LIBRAS)",
"bretoński",
"bugijski",
"bułgarski",
"birmański",
"kataloński",
"cebuański",
"chavacano",
"czeczeński",
"czirokeski",
"czewa (cziczewa)",
"sena",
"chiński (kantoński)",
"chiński (hakka)",
"chiński (hokkien)",
"chiński (inny)",
"chiński (szanghajski)",
"chiński (tajwański)",
"chiquitano",
"czoktawski",
"czukocki",
"chuwabu",
"koptyjski",
"kornijski",
"korsykański",
"kri",
"chorwacki",
"crow",
"czeski",
"daakaka",
"dakota",
"duński",
"dari",
"daza",
"dela-oenale",
"dinka",
"domari",
"dothracki",
"doteli",
"drehu",
"holenderski",
"dzongkha",
"erzja",
"esperanto",
"estoński",
"ewe",
"yaunde (fang)",
"farerski",
"fidżyjski",
"filipiński (tagalog)",
"fiński",
"flamandzki",
"fon (fon gbè)",
"fryzyjski",
"friulski",
"ful",
"fur",
"ga",
"irlandzki",
"manx",
"gaelicki szkocki",
"galicyjski",
"gallo",
"garifuna",
"gruziński",
"kikuju",
"grecki",
"grecki (klasyczny)",
"grenlandzki",
"guambiano",
"guarani",
"gudźarati",
"gullah",
"gullah (kreolski afro-seminolski)",
"kreolski haitański",
"hakka",
"hausa",
"hawaiian",
"hawajski kreolski angielski",
"hebrajski",
"hmong",
"hokkien",
"honduraski język migowy (LESHO)",
"węgierski",
"iban",
"islandzki",
"ido",
"ibo",
"indonezyjski",
"inguski",
"inuinnaqtun",
"inuktitut",
"inuvialuktun",
"iszkatecki",
"kreolski jamajski",
"japoński (okinawski)",
"japoński język migowy",
"jawajski",
"tacki żydowski",
"jingpo",
"kalanga",
"kałmucki",
"kannada",
"kanuri",
"kazachski",
"kekczi",
"kenjeje",
"khmerski (kambodżański)",
"khmu",
"khoe mana",
"kicze",
"ruanda-rundi",
"rundi",
"klingoński",
"khoisan (tsoa)",
"konkani",
"kurdyjski",
"kirgiski",
"ladyński",
"ladino (judeohiszpański)",
"lakota",
"laotański",
"łacina",
"łotewski",
"lau",
"limburski",
"litewski",
"litzlitz (naman)",
"lombardzki",
"luganda",
"luo",
"luksemburski",
"masajski",
"macedoński",
"maithili",
"malgaski",
"malajski",
"malajalam",
"malediwski (dhivehi)",
"maltański",
"mamuju",
"mandżurski",
"mandingo (mandinka)",
"manggarai",
"maoryski",
"mapudungun",
"marathi",
"marri ngarr",
"marszalski",
"masalit",
"kreolski Mauritiusa",
"mazatecki",
"mekeo",
"meksykański język migowy (LSM)",
"minangkabau",
"megrelski",
"mirandyjski",
"miyako",
"mnong",
"mon",
"mongolski",
"czarnogórski",
"nahuatl",
"nambya",
"natchez",
"nawaho (diné bizaad)",
"ndebele",
"neapolitański",
"nepalski",
"neverver",
"newarski",
"pidżyn nigeryjski",
"nakanamanga",
"norweski",
"nubijski (midob)",
"nubijski (nobiin)",
"nuer",
"oksytański",
"orija",
"ogiek (akiek)",
"odżibwe",
"okinawski",
"oneida",
"oromo",
"inny",
"palau",
"pa'o",
"papiamento",
"paszto",
"perski",
"polski",
"pendżabski",
"kaszkajski",
"keczua",
"rohingya",
"romski (bałkański)",
"romski (sinti)",
"romski (vlax)",
"rumuński",
"romansz",
"saa",
"lapoński (kildin)",
"lapoński (lule)",
"lapoński (północny)",
"samoański",
"sanskryt",
"sardyński",
"scots",
"sekani",
"sena",
"serbski",
"sfyria",
"szan",
"szerpa",
"shona",
"shona (ndau)",
"szoszoński",
"szumaszti",
"sycylijski",
"język migowy",
"amerykański język migowy (ASL)",
"brytyjski język migowy (BSL)",
"gestuno",
"silbo",
"sindhi",
"syngaleski",
"słowacki",
"słoweński",
"somalijski",
"sotho",
"sundajski",
"suahili",
"suazi",
"szwedzki",
"szwajcarsko-francuski język migowy",
"szwajcarski niemiecki",
"szwajcarsko-niemiecki język migowy",
"syryjski",
"tadżycki",
"tamang",
"berberyjski (tamazight)",
"tamilski",
"tatarski",
"telugu",
"tajski",
"tharu",
"tybetański",
"tigrinia",
"tlingit",
"toki pona",
"tonga",
"tsonga (xitsonga)",
"tswana",
"turecki",
"turkmeński",
"tutong",
"tz’utujil",
"ukraiński",
"urdu",
"ujgurski",
"uzbecki",
"venda",
"wietnamski",
"warajski",
"wayuu",
"walijski",
"wolof",
"huroński",
"xhosa",
"jakucki",
"jidysz",
"yola",
"joruba",
"maya",
"jugosłowiański język migowy",
"zaghawa (beria)",
"zapotecki",
"dżerma",
"zazaki (północny)",
"zhuang",
"zulu"
);
public static $countries=array(
'Wszystkie',    
'Rosja',
'Ukraina',
'Białoruś',
'Inne kraje/regiony',
'Afganistan',
'Albania',
'Algieria',
'Samoa Amerykańskie',
'Andora',
'Angola',
'Anguilla',
'Antigua i Barbuda',
'Argentyna',
'Armenia',
'Aruba',
'Australia',
'Austria',
'Azerbejdżan',
'Bahamy',
'Bahrajn',
'Bangladesz',
'Barbados',
'Belgia',
'Belize',
'Benin',
'Bermudy',
'Bhutan',
'Boliwia',
'Bośnia i Hercegowina',
'Botswana',
'Wyspa Bouveta',
'Brazylia',
'Brytyjskie Terytorium Oceanu Indyjskiego',
'Brunei',
'Bułgaria',
'Burkina Faso',
'Burundi',
'Kambodża',
'Kamerun',
'Kanada',
'Republika Zielonego Przylądka',
'Kajmany',
'Republika Środkowoafrykańska',
'Czad',
'Chile',
'Chiny',
'Wyspa Bożego Narodzenia',
'Wyspy Kokosowe',
'Kolumbia',
'Komory',
'Wyspy Cooka',
'Kostaryka',
'Wybrzeże Kości Słoniowej',
'Chorwacja',
'Kuba',
'Cypr',
'Czechy',
'Demokratyczna Republika Konga',
'Dania',
'Dżibuti',
'Dominika',
'Dominikana',
'Ekwador',
'Egipt',
'Salwador',
'Gwinea Równikowa',
'Erytrea',
'Estonia',
'Etiopia',
'Falklandy',
'Wyspy Owcze',
'Fidżi',
'Finlandia',
'Francja',
'Gabon',
'Gambia',
'Gruzja',
'Niemcy',
'Ghana',
'Gibraltar',
'Grecja',
'Grenlandia',
'Grenada',
'Guam',
'Gwatemala',
'Gwinea',
'Gwinea-Bissau',
'Gujana',
'Haiti',
'Wyspy Heard i McDonalda',
'Honduras',
'Hongkong',
'Węgry',
'Islandia',
'Indie',
'Indonezja',
'Iran',
'Irak',
'Irlandia',
'Izrael',
'Włochy',
'Jamajka',
'Japonia',
'Jordania',
'Kazachstan',
'Kenia',
'Kiribati',
'Korea Północna',
'Korea Południowa',
'Kuwejt',
'Kirgistan',
'Laos',
'Łotwa',
'Liban',
'Lesotho',
'Liberia',
'Libia',
'Liechtenstein',
'Litwa',
'Luksemburg',
'Makau',
'Macedonia Północna',
'Madagaskar',
'Malawi',
'Malezja',
'Malediwy',
'Mali',
'Malta',
'Wyspy Marshalla',
'Mauretania',
'Mauritius',
'Meksyk',
'Mikronezja',
'Mołdawia',
'Monako',
'Mongolia',
'Czarnogóra',
'Montserrat',
'Maroko',
'Mozambik',
'Mjanma',
'Namibia',
'Nauru',
'Nepal',
'Holandia',
'Nowa Zelandia',
'Nikaragua',
'Niger',
'Nigeria',
'Niue',
'Norfolk',
'Mariany Północne',
'Norwegia',
'Oman',
'Pakistan',
'Palau',
'Palestyna',
'Panama',
'Papua Nowa Gwinea',
'Paragwaj',
'Peru',
'Filipiny',
'Pitcairn',
'Polska',
'Portugalia',
'Portoryko',
'Katar',
'Kongo',
'Rumunia',
'Rwanda',
'Wyspa Świętej Heleny',
'Saint Kitts i Nevis',
'Saint Lucia',
'Saint Vincent i Grenadyny',
'Samoa',
'San Marino',
'Wyspy Świętego Tomasza i Książęca',
'Arabia Saudyjska',
'Senegal',
'Serbia',
'Seszele',
'Sierra Leone',
'Singapur',
'Słowacja',
'Słowenia',
'Wyspy Salomona',
'Somalia',
'Republika Południowej Afryki',
'Georgia Południowa i Sandwich Południowy',
'Hiszpania',
'Sri Lanka',
'Sudan',
'Surinam',
'Svalbard i Jan Mayen',
'Eswatini',
'Szwecja',
'Szwajcaria',
'Syria',
'Tajwan',
'Tadżykistan',
'Tanzania',
'Tajlandia',
'Timor Wschodni',
'Togo',
'Tokelau',
'Tonga',
'Trynidad i Tobago',
'Tunezja',
'Turcja',
'Turkmenistan',
'Turks i Caicos',
'Tuvalu',
'Uganda',
'Zjednoczone Emiraty Arabskie',
'Zjednoczone Królestwo',
'Stany Zjednoczone',
'Dalekie Wyspy Mniejsze Stanów Zjednoczonych',
'Urugwaj',
'Uzbekistan',
'Vanuatu',
'Watykan',
'Wenezuela',
'Wietnam',
'Brytyjskie Wyspy Dziewicze',
'Wyspy Dziewicze Stanów Zjednoczonych',
'Sahara Zachodnia',
'Jemen',
'Zambia',
'Zimbabwe',
'Inne');
/**
 * Register widget with WordPress.
 */
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function __construct() {
    parent::__construct(
        'custom_filter_widget', // Base ID
        esc_html__( 'Custom Filter Plugin', 'cfp_domain' ), // Name
        array( 'description' => esc_html__( 'Widget for filtering teachers', 'cfp_domain' ), ) // Args
    );
}

/**
 * Front-end display of widget.
 *
 * @see WP_Widget::widget()
 *
 * @param array $args     Widget arguments.
 * @param array $instance Saved values from database.
 */
public function widget( $args, $instance ) {
    echo $args['before_widget'];

    if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
    }
    $server = $_SERVER['HTTP_HOST'];
    $uri = $server.$_SERVER['REQUEST_URI'];
    $uri=substr($uri, 0, -1);
    $isMobile = self::isMobile();
    if($isMobile == 0)
    {
        $widgetOutput = "<form action='".plugins_url()."/custom-filter-plugin/form-handling.php' class='form-inline' id ='cfp-form' method='post' >";
        $widgetOutput .= "<div class='row' style='width:55%'><div class='col-3'>";
        $widgetOutput .= "<select class='form-control' id='country' name='country'>";
        foreach(self::$countries as $country)
        {
            $widgetOutput .= "<option value='{$country}'>{$country}</option>";
        }
        
        $widgetOutput .= "</select>";
        $widgetOutput .= '</div><div class="col-3">';
        $widgetOutput .= "<select class='form-control' id='language' name='language'>";
        foreach(self::$languages as $language)
        {
            $widgetOutput .= "<option value='{$language}'>{$language}</option>";
        }
        $widgetOutput .= "</select>";
        $widgetOutput .= '</div><div class="col-3">';
        $widgetOutput .= "<select class='form-control' id='type' name='type'>";
        $widgetOutput .= "<option value='Profesjonalny nauczyciel'>Profesjonalny nauczyciel</option>";
        $widgetOutput .= "<option value='Lektor'>Lektor</option>";
        $widgetOutput .= "<option value='both'>Obie opcje</option>";
        $widgetOutput .= "</select>";
        $widgetOutput .= '</div><div class="col-3">';
        $widgetOutput .= "<select class='form-control' id='category' name='category'>";
        $widgetOutput .= 
        '<optgroup label="Ogólna">       
            <option  value="Słuchanie">Słuchanie</option>
            <option  value="Pisownia">Pisownia</option>
            <option  value="Pisanie">Pisanie</option>
            <option  value="Czytanie">Czytanie</option>
            <option  value="Wymowa">Wymowa</option>
        </optgroup>
        <optgroup label="Firma">
            <option  value="Spotkania">Spotkania</option>
            <option  value="Prezentacje">Prezentacje</option>
            <option  value="Rozmowa kwalifikacyjna">Rozmowa kwalifikacyjna</option>
            <option  value="Negocjacje">Negocjacje</option>
            <option  value="Etyka biznesowa">Etyka biznesowa</option>
        </optgroup>          
        <optgroup label="Przygotowania do testów">
            <option value="A1/A2">A1/A2</option>
            <option value="B1/B2">B1/B2</option>
            <option value="C1/C2">C1/C2</option>
        </optgroup> 
        <option  value="Dzieci">Dzieci</option>
        <option  value="Konwencje">Konwencje</option>
        </select>';
        $widgetOutput .= '</div></div><div class="row"><div class="col-5">';
        $widgetOutput .= '<label for="price" class="form-label">Maks. cena: <div id="price-container">500 zł</div></label>
        <input type="range" class="form-range" id="price" name="price" min="5" max="1000">';
        $widgetOutput .= '</div><div class="col-5 align-middle">';
        
        $widgetOutput .='<input type="checkbox" checked data-toggle="toggle" data-onstyle="success" id="native" name="native">
        <label for="native" style="font-size:1.5vh;display: inline">Native speaker</label>';
        $widgetOutput .= '</div><div class="col-2">';
        $widgetOutput .="<button id='submit'  class='btn btn-success form-control'>Wyszukaj</button></div></div>";
        $widgetOutput .= "</form><br><br>";
        $widgetOutput .= "<div id='cfp-content'></div>";
    }
    else
    {
        $widgetOutput = "<form action='".plugins_url()."/custom-filter-plugin/form-handling.php' id ='cfp-form' method='post' >";
        
        $widgetOutput .= "<select class='form-control' id='country' name='country'>";
        foreach(self::$countries as $country)
        {
            $widgetOutput .= "<option value='{$country}'>{$country}</option>";
        }
        
        $widgetOutput .= "</select>";
        
        $widgetOutput .= "<select class='form-control' id='language' name='language'>";
        foreach(self::$languages as $language)
        {
            $widgetOutput .= "<option value='{$language}'>{$language}</option>";
        }
        $widgetOutput .= "</select>";
        
        $widgetOutput .= "<select class='form-control' id='type' name='type'>";
        $widgetOutput .= "<option value='Profesjonalny nauczyciel'>Profesjonalny nauczyciel</option>";
        $widgetOutput .= "<option value='Lektor'>Lektor</option>";
        $widgetOutput .= "<option value='both'>Obie opcje</option>";
        $widgetOutput .= "</select>";
        
        $widgetOutput .= "<select class='form-control' id='category' name='category'>";
        $widgetOutput .= 
        '<optgroup label="Ogólna">       
            <option  value="Słuchanie">Słuchanie</option>
            <option  value="Pisownia">Pisownia</option>
            <option  value="Pisanie">Pisanie</option>
            <option  value="Czytanie">Czytanie</option>
            <option  value="Wymowa">Wymowa</option>
        </optgroup>
        <optgroup label="Firma">
            <option  value="Spotkania">Spotkania</option>
            <option  value="Prezentacje">Prezentacje</option>
            <option  value="Rozmowa kwalifikacyjna">Rozmowa kwalifikacyjna</option>
            <option  value="Negocjacje">Negocjacje</option>
            <option  value="Etyka biznesowa">Etyka biznesowa</option>
        </optgroup>          
        <optgroup label="Przygotowania do testów">
            <option value="A1/A2">A1/A2</option>
            <option value="B1/B2">B1/B2</option>
            <option value="C1/C2">C1/C2</option>
        </optgroup> 
        <option  value="Dzieci">Dzieci</option>
        <option  value="Konwencje">Konwencje</option>
        </select>';
        
        $widgetOutput .= '<label for="price" class="form-label">Maksymalna cena: <div id="price-container">500 zł</div></label>
        <input type="range" class="form-range" id="price" name="price" min="5" max="1000">';
      
        
        $widgetOutput .='<input type="checkbox" checked data-toggle="toggle" data-onstyle="success" id="native" name="native" ><label for="native">Native speaker</label>';
        
        $widgetOutput .="<button id='submit' class='form-control'>Wyszukaj</button>";
        $widgetOutput .= "</form><br><br>";
        $widgetOutput .= "<div id='cfp-content'></div>";
    }
    echo $widgetOutput;
    
    echo $args['after_widget'];
}



/**
 * Back-end widget form.
 *
 * @see WP_Widget::form()
 *
 * @param array $instance Previously saved values from database.
 */
public function form( $instance ) {
}

/**
 * Sanitize widget form values as they are saved.
 *
 * @see WP_Widget::update()
 *
 * @param array $new_instance Values just sent to be saved.
 * @param array $old_instance Previously saved values from database.
 *
 * @return array Updated safe values to be saved.
 */
public function update( $new_instance, $old_instance ) {
}

}
?>
