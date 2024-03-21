<?php



$MB_Theme_name='Mes options de thème';

$MB_Theme_slug='MB-theme';



$MB_Add_option= [

	['name' => 'Style générale', 'slug' => 'title_style', 'type' => 'titre'],

	['name' => 'Couleur principale', 'slug' => 'main_color', 'type' => 'color'],

	['name' => 'Couleur secondaire', 'slug' => 'secondary_color', 'type' => 'color'],

	['name' => 'Footer', 'slug' => 'title_footer', 'type' => 'titre'],

	['name' => 'Lien Instagram', 'slug' => 'link_instagram', 'type' => 'text'],

	['name' => 'Lien Facebook', 'slug' => 'link_facebook', 'type' => 'text'],

	['name' => 'Lien Linkedin', 'slug' => 'link_linkedin', 'type' => 'text'],

	['name' => 'Texte copyright', 'slug' => 'text_copyright', 'type' => 'text'],

	['name' => 'Page 404', 'slug' => 'title_404', 'type' => 'titre'],

	['name' => 'Texte page 404', 'slug' => 'text_404', 'type' => 'text'],

];



function MB_ThemeSettingsPage(){

	echo

	'<form class="form-options" method="post" action="options.php">';

		global $MB_Theme_slug;

		global $MB_Add_option;

		settings_fields($MB_Theme_slug);



        for($i=0; $i < count($MB_Add_option); $i++){    

				echo '<div>';

                switch ($MB_Add_option[$i]['type']){

                    case "text":

                        echo

                        '<label for="'.$MB_Add_option[$i]['slug'].'">'.$MB_Add_option[$i]['name'].'</label>'.

                        '<input id="'.$MB_Add_option[$i]['slug'].'" name="'.$MB_Add_option[$i]['slug'].'" type="text" class="large-text" value="'.get_option($MB_Add_option[$i]['slug']).'" placeholder="'.$MB_Add_option[$i]['name'].'" />';

                        break;

                    case "select-oui-non":

                        echo

                        '<label for="'.$MB_Add_option[$i]['slug'].'">'.$MB_Add_option[$i]['name'].'</label>'.

		                '<select id="'.$MB_Add_option[$i]['slug'].'" name="'.$MB_Add_option[$i]['slug'].'">'.

			            '<option value="1"';if(get_option($MB_Add_option[$i]['slug'])=='1'){echo ' selected';}echo '>OUI</option>'.

			            '<option value="0"';if(get_option($MB_Add_option[$i]['slug'])=='0'){echo ' selected';}echo '>NON</option>'.

		                '</select>';

                        break;

					case "color":

						echo
						'<div class="color-options">'.
							'<label for="'.$MB_Add_option[$i]['slug'].'">'.$MB_Add_option[$i]['name'].'</label>'.

							'<input id="'.$MB_Add_option[$i]['slug'].'" name="'.$MB_Add_option[$i]['slug'].'" type="text" class="large-text js-input-color" value="'.get_option($MB_Add_option[$i]['slug']).'" placeholder="'.$MB_Add_option[$i]['name'].'" />';
						echo '</div>';
                        break;

					case "titre":

						echo
						'<h2>'.$MB_Add_option[$i]['name'].'</h2>';
						echo '<hr>';

						break;

                }

				echo '</div>';



        };

		echo

		'<button class="btn-register" type="submit">Enregistrer</button>'.

	'</form>';



}



/* INITIALISATION PAGE OPTION DE THEME */

add_action( 'admin_init','MB_ThemeRegisterSettings');

function MB_ThemeRegisterSettings(){

	global $MB_Theme_slug;

	global $MB_Add_option;



    for($i=0; $i < count($MB_Add_option); $i++){ 

        register_setting($MB_Theme_slug,$MB_Add_option[$i]['slug']);

    };

}



/* ADD MENU ADMIN PAGE OPTION THEME */

add_action('admin_menu','MB_ThemeAdminMenu');

function MB_ThemeAdminMenu(){

	global $MB_Theme_name;

	global $MB_Theme_slug;

	add_theme_page(

		$MB_Theme_name,  // le titre de la page

		$MB_Theme_name,         // le nom de la page dans le menu d'admin

		'administrator',       // le rôle d'utilisateur requis pour voir cette page

		$MB_Theme_slug.'jii',        // un identifiant unique de la page

		'MB_ThemeSettingsPage'// le nom d'une fonction qui affichera la page

	);

}



function MB_root_css(){

	global $MB_Add_option;

	echo

	'<style>'.

		':root {';

			foreach($MB_Add_option as $val){

				if($val['type']=='color'){

					if(get_option($val['slug'])!=''){

						echo '--'.$val['slug'].':'.get_option($val['slug']).';';

					}

				}

			}

	echo

	'}</style>';

}