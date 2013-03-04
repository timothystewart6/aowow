<?php

if (!defined('AOWOW_REVISION'))
    die('illegal access');


$lang = array(
    // page variables
    'main' => array(
        'link'          => "Enlace",
        'signIn'        => "Iniciar sesión",
        'jsError'       => "Por favor, asegúrese de que ha habilitado javascript.",
        'searchButton'  => "búsqueda",
        'language'      => "lengua",
        'numSQL'        => "Número de consultas de MySQL",
        'timeSQL'       => "El tiempo para las consultas de MySQL",
        'noJScript'     => "<b>Este sitio hace uso intenso de JavaScript.</b><br />Por favor <a href=\"https://www.google.com/support/adsense/bin/answer.py?answer=12654\" target=\"_blank\">habilita JavaScript</a> en tu navegador.",
        'profiles'      => "Tus personajes",    // translate.google :x
        'links'         => "Enlaces",
        'pageNotFound'  => "Este %s no existe.",
        'both'          => "Ambos",
        'gender'        => "Género",
        'sex'           => [null, 'Hombre', 'Mujer'],
        'quickFacts'    => "Notas rápidas",
        'screenshots'   => "Capturas de pantalla",
        'videos'        => "Videos",
        'side'          => "Lado",
        'related'       => "Información relacionada",
        'contribute'    => "Contribuir",
        // 'replyingTo'    => "The answer to a comment from",
        'submit'        => "Enviar",
        'cancel'        => "Cancelar",
        'rewards'       => "Recompensas",
        'gains'         => "Ganancias",
        'login'         => "[Login]",
        'forum'         => "[Forum]",
        'days'          => "dias",
        'hours'         => "horas",
        'minutes'       => "minutos",
        'seconds'       => "segundos",
        'millisecs'     => "[milliseconds]",
        'daysAbbr'      => "",  // ???
        'hoursAbbr'     => "h",
        'minutesAbbr'   => "min",
        'secondsAbbr'   => "seg",
        'millisecsAbbr' => "[ms]",
        'name'          => "Nombre",

        'disabled'      => "[Disabled]",
        'disabledHint'  => "[Cannot be attained or completed]",
        'serverside'    => "[Serverside]",
        'serversideHint' => "[These informations are not in the Client and have been provided by sniffing and/or guessing.]",
    ),
    'search' => array(
        'search'        => "Búsqueda",
        'foundResult'   => "Resultados de busqueda para",
        'noResult'      => "Ningún resultado para",
        'tryAgain'      => "Por favor, introduzca otras palabras claves o verifique el término ingresado.",
    ),
    'game' => array(
        'alliance'      => "Alianza",
        'horde'         => "Horda",
        'class'         => "clase",
        'classes'       => "Clases",
        'races'         => "Razas",
        'title'         => "título",
        'titles'        => "Títulos",
        'eventShort'    => "Evento",
        'event'         => "Suceso mundial ",
        'events'        => "Eventos del mundo",
        'cooldown'      => "%s cooldown",
        'cooldown'      => "%s de reutilización",
        'requires'      => "Requiere",
        'reqLevel'      => "Necesitas ser de nivel %s",
        'reqLevelHlm'   => "Necesitas ser de nivel %s",
        'valueDelim'    => " - ",
        'resistances'   => array(null, 'Resistencia a lo Sagrado', 'v', 'Resistencia a la Naturaleza', 'Resistencia a la Escarcha', 'Resistencia a las Sombras', 'Resistencia a lo Arcano'),
        'sc'       => array("Física", "Sagrado", "Fuego", "Naturaleza", "Escarcha", "Sombras", "Arcano"),
        'di'            => array(null, "Magia", "Maldición", "Enfermedad", "Veneno", "Sigilo", "Invisibilidad", null, null, "Enfurecer"),
        'cl'            => array("UNK_CL0", "Guerrero", "Paladín", "Cazador", "Pícaro", "Sacerdote", "Caballero de la Muerte", "Chamán", "Mago", "Brujo", 'UNK_CL10', "Druida"),
        'ra'            => array(-2 => "Horda", -1 => "Alianza", "Ambos", "Humano", "Orco", "Enano", "Elfo de la noche", "No-muerto", "Tauren", "Gnomo", "Trol  ", 'UNK_RA9', "Blood Elf", "Elfo de sangre"),
        'rep'           => array("Odiado", "Hostil", "Adverso", "Neutral", "Amistoso", "Honorable", "Reverenciado", "Exaltado"),
        'st'            => array(
            null,               "Forma felina",                 "Árbol de vida",                "Forma de viaje",               "Forma acuática",
            "Forma de oso",     null,                           null,                           "Forma de oso temible",         null,
            null,               null,                           null,                           "Danza de las Sombras",         null,
            null,               "Lobo fantasmal",               "Actitud de batalla",           "Actitud defensiva",            "Actitud rabiosa",
            null,               null,                           "Metamorfosis",                  null,                           null,
            null,               null,                           "Forma de vuelo presto",         "Forma de las Sombras",        "Forma de vuelo",
            "Sigilo",           "Forma de lechúcico lunar",     "Espíritu redentor"
        ),
        'pvpRank'       => array(
            null,                                       "Private / Scout",                      "Corporal / Grunt",
            "Sergeant / Sergeant",                      "Master Sergeant / Senior Sergeant",    "Sergeant Major / First Sergeant",
            "Knight / Stone Guard",                     "Knight-Lieutenant / Blood Guard",      "Knight-Captain / Legionnare",
            "Knight-Champion / Centurion",              "Lieutenant Commander / Champion",      "Commander / Lieutenant General",
            "Marshal / General",                        "Field Marshal / Warlord",              "Grand Marshal / High Warlord"
        ),
    ),
    'filter' => array(
        'extSearch'     => "Extender búsqueda",
        'onlyAlliance'  => "Alianza solamente",
        'onlyHorde'     => "Horda solamente",
        'addFilter'     => "Añadir otro filtro",
        'match'         => "Aplicar",
        'allFilter'     => "Todos los filtros",
        'oneFilter'     => "Por lo menos uno",
        'applyFilter'   => "Aplicar filtro",
        'resetForm'     => "Reiniciar formulario",
        'refineSearch'  => "Sugerencia: Refina tu búsqueda llendo a una <a href=\"javascript:;\" id=\"fi_subcat\">subcategoría</a>.",
    ),
    'error'  => [],
    'account'  => [],
    'talent'  => array(
        'talentCalc'    => "Calculadora de talentos",
        'petCalc'       => "Calculadora de mascotas",
        'chooseClass'   => "Escoge una clase",
        'chooseFamily'  => "Escoge una familia de mascota",
    ),
    'maps' => array(
        'maps'          => "Mapas",
        'linkToThisMap' => "Enlazar con esta mapa",
        'clear'         => "Borrar",
        'EasternKingdoms' => "Reinos del Este",
        'Kalimdor'      => "Kalimdor",
        'Outland'       => "Terrallende",
        'Northrend'     => "Rasganorte",
        'Instances'     => "Instancias",
        'Dungeons'      => "Mazmorras",
        'Raids'         => "Bandas",
        'More'          => "Más",
        'Battlegrounds' => "Campos de batalla",
        'Miscellaneous' => "Miscelánea",
        'Azeroth'       => "Azeroth",
        'CosmicMap'     => "Mapa cósmico",
    ),
    'achievement' => array(
        'achievements'  => "logros",
        'criteria'      => "Requisitos",
        'achievement'   => "logro",
        'points'        => "Puntos",
        'series'        => "Serie",
        'outOf'         => "de",
        'criteriaType'  => "Criterium Type-Id:",
        'itemReward'    => "Recibirás:",
        'titleReward'   => "Deberías obtener el título \"<a href=\"?title=%d\">%s</a>\"",
        'slain'         => "matado",
    ),
    'compare' => array(
        'compare'       => "Herramienta de comparación de objetos",
    ),
    'zone' => array(
        'zone'          => "Zone",
        'zonePartOf'    => "Cette zone fait partie de la zone",
    ),
    'title' => array(
        'cat'           => array(
            'General',      'Jugador contra Jugador',    'Reputación',       'Mazmorras y bandas',     'Misiones',       'Profesiones',      'Eventos del mundo'
        )
    ),
    'spell' => array(
        'remaining'     => "%s restantes",
        'untilCanceled' => "hasta que se cancela",
        'castIn'        => "Hechizo de %s seg",
        'instantPhys'   => "Instante",
        'instantMagic'  => "Hechizo instantáneo",
        'channeled'     => "Canalizado",
        'range'         => "Alcance de %s m",
        'meleeRange'    => "Alcance de ataques cuerpo a cuerpo",
        'reagents'      => "Componentes",
        'tools'         => "Herramientas",
        'home'          => "&lt;Posada&gt;",
        'pctCostOf'     => "del %s base",
        'costPerSec'    => ", mas %s por segundo",
        'costPerLevel'  => ", mas %s por nivel",
        'powerTypes'    => array(   // heat => spell 70174
            -2 => "Salud",   -1 => null,   "Maná",     "Ira",     "Enfoque",    "Energía",      "[Happiness]",      "Runa",    "Poder rúnico",
            'AMMOSLOT' => "[Ammo]",        'STEAM' => "[Steam Pressure]",       'WRATH' => "[Wrath]",               'PYRITE' => "[Pyrite]",
            'HEAT' => "[Heat]",            'OOZE' => "[Ooze]",                  'BLOOD_POWER' => "[Blood Power]" // spellname of 72370
        )
    ),
    'item' => array(
        'armor'         => "armadura",
        'block'         => "bloqueo",
        'charges'       => "cargas",
        'expend'        => "[expendable]",  // drop this shit
        'locked'        => "Cerrado",
        'ratingString'  => "%s&nbsp;@&nbsp;L%s",
        'heroic'        => "Heroico",
        'unique'        => "Único",
        'uniqueEquipped'=> "Único-Equipado",
        'startQuest'    => "Este objeto inicia una misión",
        'bagSlotString' => "%s de %d casillas",
        'dps'           => "daño por segundo",
        'dps2'          => "daño por segundo",
        'addsDps'       => "Añade",
        'fap'           => "poder de ataque feral",
        'durability'    => "Durabilidad",
        'duration'      => "Duración",
        'realTime'      => "tiempo real",
        'conjured'      => "Objeto mágico",
        'damagePhys'    => "%s Daño",
        'damageMagic'   => "%s %s Daño",
        'speed'         => "Velocidad",
        'sellPrice'     => "Precio de venta",
        'itemLevel'     => "Nivel de objeto",
        'randEnchant'   => "&lt;Encantamiento aleatorio&gt",
        'readClick'     => "&lt;Click derecho para leer&gt",
        'set'           => "Conjunto",
        'socketBonus'   => "Bono de ranura",
        'socket'        => array(
            "Ranura meta",          "Ranura roja",      "Ranura amarilla",          "Ranura azul",            -1 => "Ranura prismática  "
        ),
        'trigger'       => array (
            "Uso: ",                "Equipar: ",        "Probabilidad al acertar: ", null,                      null,
            null,                   null
        ),
        'bonding'       => array (
            "Se liga a la cuenta",                      "Se liga al recogerlo",                                 "Se liga al equiparlo",
            "Se liga al usarlo",                        "[ligados al alma]", /* google :( */                    "Objeto de misión"
        ),
        "bagFamily"     => array(
            "Bolsa",                "Carcaj",           "Bolsa de municiones",      "Bolsa de almas",             "Bolsa de peletería",
            "Bolsa de inscripción", "Bolsa de hierbas", "Bolsa de encantamiento",   "Bolsa de ingeniería",        "Llave",
            "Bolsa de gemas",       "Bolsa de minería"
        ),
        'inventoryType' => array(
            null,                   "Cabeza",           "Cuello",                   "Hombro",                       "Camisa",
            "Pecho",                "Cintura",          "Piernas",                  "Pies",                         "Muñeca",
            "Manos",                "Dedo",             "Abalorio",                 "Una mano",                     "Escudo",
            "A distancia",          "Espalda",          "Dos manos",                "Bolsa",                        "Tabardo",
            "Pecho",                "Mano derecha",     "Mano izquierda",           "Sostener con la mano izquierda", "Proyectiles",
            "Arrojadiza",           "A distancia",      "Carcaj",                   "Reliquia"
        ),
        'armorSubclass' => array(
            "Misceláneo",           "Tela",             "Cuero",                    "Malla",                        "Placas",
            null,                   "Escudo",           "Tratado",                  "Ídolo",                        "Tótem",
            "Sigilo"
        ),
        'weaponSubClass' => array(
            "Hacha",                "Hacha",            "Arco",                     "Arma de fuego",                "Maza",
            "Maza",                 "Arma de asta",     "Espada",                   "Espada",                       null,
            "Bastón",               null,               null,                       "Arma de puño",                 "Misceláneo",
            "Daga",                 "Arrojadizas",      null,                       "Ballesta",                     "Varita",
            "Caña de pescar"
        ),
        'projectileSubClass' => array(
            null,                   null,               "Flecha",                   "Bala",                         null
        ),
        'statType'  => array(
            "Aumenta tu maná %d p.",
            "Aumenta tu salud %d p.",
            null,
            "agilidad",
            "fuerza",
            "intelecto",
            "espíritu",
            "aguante",
            null, null, null, null,
            "Aumenta tu índice de defensa %d p.",
            "Aumenta tu índice de esquivar %d p.",
            "Aumenta tu índice de parada %d p.",
            "Aumenta tu índice de bloqueo con escudo %d p.",
            "Mejora tu índice de golpe cuerpo a cuerpo %d p.",
            "Mejora tu índice de golpe a distancia %d p.",
            "Mejora tu índice de golpe con hechizos %d p.",
            "Mejora tu índice de golpe crítico cuerpo a cuerpo %d p. ",
            "Mejora tu índice de golpe crítico a distancia %d p.",
            "Mejora tu índice de golpe crítico con hechizos %d p.",
            "Mejora tu índice de evasión de golpes cuerpo a cuerpo %d p.",
            "Mejora tu índice de evasión de golpes a distancia %d p.",
            "Mejora tu índice de evasión de golpes con hechizos %d p.",
            "Mejora tu índice de evasión de golpe crítico cuerpo a cuerpo %d p.",
            "Mejora tu índice de evasión de golpe crítico a distancia %d p.",
            "Mejora tu índice de evasión de golpe crítico con hechizos %d p.",
            "Mejora tu índice de celeridad cuerpo a cuerpo %d p.",
            "Mejora tu índice de celeridad a distancia %d p.",
            "Mejora tu índice de celeridad con hechizos %d p.",
            "Aumenta tu índice de golpe %d p.",
            "Aumenta tu índice de golpe crítico %d p.",
            "Mejora tu índice de evasión %d p.",
            "Mejora tu índice de evasión de golpes críticos %d p.",
            "Aumenta tu índice de temple %d p.",
            "Aumenta tu índice de celeridad %d p.",
            "Aumenta tu índice de pericia %d p.",
            "Aumenta el poder de ataque %d p.",
            "Aumenta el poder de ataque a distancia %d p.",
            "Aumenta en %d p. el poder de ataque bajo formas felinas, de oso, de oso temible y de lechúcico lunar.",
            "Aumenta el daño infligido con hechizos y efectos mágicos hasta %d p.",
            "Aumenta la sanación hecha con hechizos y efectos mágicos hasta %d p.",
            "Restaura %d p. de maná cada 5 s.",
            "Aumenta tu índice de penetración de armadura %d p.",
            "Aumenta el poder con hechizos %d p.",
            "Restaura %d p. de salud cada 5 s.",
            "Aumenta la penetración de hechizos %d p.",
            "Aumenta el valor de bloqueo de tu escudo %d p.",
            "Estadística no utilizada #%d (%d)",
        )
    )
);

?>
