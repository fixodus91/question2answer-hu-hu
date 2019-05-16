<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
    'a_commented_body'    => "A(z) ^site_title kérdésre adott válaszodra új hozzászólás érkezett tőle: ^c_handle:\n\n^open^c_content^close\n\nEz volt a válaszod:\n\n^open^c_context^close\n\nVálaszolhatsz a hozzászólásra:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'a_commented_subject' => 'Új hozzászólás érkezett a ^site_title válaszodra',

    'a_followed_body'    => "A ^site_title kérdésre adott válaszodhoz új kapcsolódó kérdést tett fel ^q_handle:\n\n^open^q_content^close\n\nEz volt a válaszod:\n\n^open^a_content^close\n\nAz új kérdés megválaszolásához kattints az alábbi linkre:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'a_followed_subject' => 'A ^site_title válaszodhoz új kapcsolódó kérdés érkezett',

    'a_selected_body'    => "Gratulálunk! A ^site_title kérdésre adott válaszodat ^s_handle legjobb válasznak jelölte:\n\n^open^a_content^close\n\nEz volt a kérdés:\n\n^open^q_title^close\n\nA válaszod megtekintéséhez kattints az alábbi linkre:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'a_selected_subject' => 'A ^site_title válaszod kiválasztásra került!',

    'c_commented_body'    => "^c_handle új hozzászólást írt a te ^site_title  hozzászólásod után:\n\n^open^c_content^close\n\nA beszélgetés a következő:\n\n^open^c_context^close\n\nÚjabb hozzászólás írásával válaszolhatsz:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'c_commented_subject' => 'A ^site_title hozzászólásod hozzáadásra került',

    'confirm_body'    => "Az alábbi gombra kattintva erősítsd meg email címed a ^site_title számára.\n\n^url\n\nMegerősítő kód: ^code\n\nKöszönettel,\n^site_title",
    'confirm_subject' => '^site_title - Email cím megerősítése',

    'feedback_body'    => "Hozzászólások:\n^message\n\nNév:\n^name\n\nEmail:\n^email\n\nElőző oldal:\n^previous \n\nFelhasználó:\n^url\n\nIP cím:\n^ip\n\nBöngésző\n^browser",
    'feedback_subject' => '^ visszajelzés',

    'flagged_body'    => "Egy ^p_handle általi poszt ^flags kapott:\n\n^open^c_context^close\n\nA poszt megtekintéséhez kattints az alábbi linkre:\n\n^url\n\nAz összes jelentett poszt áttekintéséhez kattints az alábbi linkre:\n\n^a_url\n\nKöszönettel,\n\n^site_title",
    'flagged_subject' => 'Jelentett poszt a(z) ^site_title oldalon',

    'moderate_body'    => "\"^p_handle\" posztjának elfogadásra van szüksége: \n\n^open^p_context^close\n\nA poszt elfogadásához vagy elutasításához kattints az alábbi linkre:\n\n^url\n\nAz összes elfogadásra váró poszt megtekintéséhez kattints az alábbi linkre:\n\n^a_url\n\nKöszönettel,\n\n^site_title",
    'moderate_subject' => '^site_title moderáció',

    'new_password_body'    => "Az új ^site_title jelszavadat lent megtalálod.\n\nJelszó: ^password\n\nBejelentkezésed után ajánlott ezen jelszó azonnali megváltoztatása.\n\nKöszönettel,\n^site_title\n^url",
    'new_password_subject' => '^site_title - Az új jelszavad',

    'private_message_body'    => "^f_handle privát üzenetet küldött a(z) ^site_title oldalon:\n\n^open^c_content^close\n\n^moreKöszönettel,\n\n^site_title\n\nA privát üzenetküldés letiltásához látogass el a profilodra:\n^a_url",
    'private_message_info'    => "Bővebb információ ^f_handle felhasználóról:\n\n^url\n\n",
    'private_message_reply'   => "Az alábbi gombra kattintva válaszolhatsz ^ f_handle felhasználónak privát üzenetben:\n\n^url\n\n",
    'private_message_subject' => '^f_handle üzenetet küldött a(z) ^site_title oldalon',

    'q_answered_body'    => "A ^site_title oldalon feltett kérdésedre ^a_handle válaszolt:\n\n^open^c_content^close\n\nA kérdésed:\n\n^open^q_title^close\n\nHa tetszik ez a válasz, kiválaszthatod azt a legjobbnak:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'q_answered_subject' => 'Válasz érkezett a(z) ^site_title kérdésedre',

    'q_commented_body'    => "Új hozzászólást tett a ^c_handle a ^site_title kérdésedre:\n\n^open^c_content^close\n\nA kérdésed:\n\n^open^c_context^close\n\nSaját hozzászólásod hozzáadásal válaszolhatsz:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'q_commented_subject' => 'Új hozzászólás érkezett a(z) ^site_title kérdésedre',

    'q_posted_body'    => "^q_handle új kérdést tett fel:\n\n^open^q_title\n\n^q_content^close\n\nKattints ide a kérdés megtekintéséhez:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'q_posted_subject' => 'Új kérdés érkezett a(z) ^site_title oldalra',

    'remoderate_body'    => "Egy ^p_handle által szerkesztett poszt újra elfogadásra vár:\n\n^open^p_context^close\n\nKattints az alábbi linkre a szerkesztett üzenet elfogadásához vagy elrejtéséhez:\n\n^url\n\nAz összes elfogadásra váró poszt megtekintéséhez kattints az alábbi linkre:\n\n^a_url\n\nKöszönettel,\n\n^site_title",
    'remoderate_subject' => '^site_title moderáció',

    'reset_body'    => "A(z) ^site_title jelszó visszaállításahoz kattints az alábbi linkre:\n\n^url\n\nAlternatív megoldásként írd be az alábbi kódot a megadott mezőbe.\n\nKód: ^code\n\nHa nem te kérted a jelszó visszaállítását, kérjük hagyd figyelmen kívül ezt az üzenetet.\n\nKöszönettel,\n^site_title",
    'reset_subject' => '^site_title - Elfelejtett jelszó visszaállítása',

    'to_handle_prefix' => "^,\n\n",

    'u_registered_body'    => "Új felhasználó regisztrált: ^u_handle.\n\nA felhasználói profil megtekintéséhez kattints az alábbi linkre:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'u_registered_subject' => '^site_title egy új regisztrált felhasználóval rendelkezik',
    'u_to_approve_body'    => "Egy új felhasználó ^u_handle néven regisztrált.\n\nA felhasználó elfogadásához kattints az alábbi linkre:\n\n^url\n\nAz összes elfogadásra váró felhasználó megtekintéséhez kattints az alábbi linkre:\n\n^a_url\n\nKöszönettel,\n\n^site_title",

    'u_approved_body'    => "Itt láthatod az új felhasználói profilodat:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'u_approved_subject' => 'A(z) ^site_title felhasználó elfogadásra került',

    'wall_post_body'    => "^f_handle posztolt a felhasználói faladra a(z) ^site_title oldalon:\n\n^open^post^close\n\nItt válaszolhatsz a posztra:\n\n^url\n\nKöszönettel,\n\n^site_title",
    'wall_post_subject' => '^site_title fali poszt',

    'welcome_body'    => "Köszönjük, hogy regisztráltál a ^site_title oldalra.\n\n^custom^confirmBejelentkezési adataid a következők:\n\nFelhasználói név: ^handle\nEmail: ^email\n\nKérjük, tartsd ezeket az információkat biztonságban.\n\nKöszönettel,\n\n^site_title\n^url",
    'welcome_confirm' => "Kérjük az email címed megerősítéséhez kattints az alábbi linkre.\n\n^url\n\n",
    'welcome_subject' => 'Üdvözölünk a ^site_title oldalon!',
);
