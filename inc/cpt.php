<?php
function mxu_cpt() {

/**
 * Post Type: Parceiros.
 */

$labels = [
    "name" => __( "Parceiros", "mxu" ),
    "singular_name" => __( "Parceiro", "mxu" ),
];

$args = [
    "label" => __( "Parceiros", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "parceiro", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "parceiro", $args );

/**
 * Post Type: Depoimentos.
 */

$labels = [
    "name" => __( "Depoimentos", "mxu" ),
    "singular_name" => __( "Depoimento", "mxu" ),
];

$args = [
    "label" => __( "Depoimentos", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "depoimento", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor" ],
    "show_in_graphql" => false,
];

register_post_type( "depoimento", $args );

/**
 * Post Type: Equipas.
 */

$labels = [
    "name" => __( "Equipas", "mxu" ),
    "singular_name" => __( "Equipa", "mxu" ),
    "menu_name" => __( "Equipa", "mxu" ),
    "all_items" => __( "Todos os Equipas", "mxu" ),
    "add_new" => __( "Adicionar novo", "mxu" ),
    "add_new_item" => __( "Adicionar novo Equipa", "mxu" ),
    "edit_item" => __( "Editar Equipa", "mxu" ),
    "new_item" => __( "Novo Equipa", "mxu" ),
    "view_item" => __( "Ver Equipa", "mxu" ),
    "view_items" => __( "Ver Equipas", "mxu" ),
    "search_items" => __( "Pesquisar Equipas", "mxu" ),
    "not_found" => __( "Nenhum Equipas encontrado", "mxu" ),
    "not_found_in_trash" => __( "Nenhum Equipas encontrado na lixeira", "mxu" ),
    "parent" => __( "Equipa ascendente:", "mxu" ),
    "featured_image" => __( "Imagem destacada para esse Equipa", "mxu" ),
    "set_featured_image" => __( "Definir imagem destacada para esse Equipa", "mxu" ),
    "remove_featured_image" => __( "Remover imagem destacada para esse Equipa", "mxu" ),
    "use_featured_image" => __( "Usar como imagem destacada para esse Equipa", "mxu" ),
    "archives" => __( "Arquivos de Equipa", "mxu" ),
    "insert_into_item" => __( "Inserir no Equipa", "mxu" ),
    "uploaded_to_this_item" => __( "Enviar para esse Equipa", "mxu" ),
    "filter_items_list" => __( "Filtrar lista de Equipas", "mxu" ),
    "items_list_navigation" => __( "Navegação na lista de Equipas", "mxu" ),
    "items_list" => __( "Lista de Equipas", "mxu" ),
    "attributes" => __( "Atributos de Equipas", "mxu" ),
    "name_admin_bar" => __( "Equipa", "mxu" ),
    "item_published" => __( "Equipa publicado", "mxu" ),
    "item_published_privately" => __( "Equipa publicado de forma privada.", "mxu" ),
    "item_reverted_to_draft" => __( "Equipa revertido para rascunho.", "mxu" ),
    "item_scheduled" => __( "Equipa agendado", "mxu" ),
    "item_updated" => __( "Equipa atualizado.", "mxu" ),
    "parent_item_colon" => __( "Equipa ascendente:", "mxu" ),
];

$args = [
    "label" => __( "Equipas", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "equipas", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 12,
    "menu_icon" => "dashicons-groups",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "equipa", $args );



//SIMULADORES   

$labels = [
    "name" => __( "simulador", "mxu" ),
    "singular_name" => __( "simulador", "mxu" ),
    "menu_name" => __( "simulador", "mxu" ),
    "all_items" => __( "Todos os simulador", "mxu" ),
    "add_new" => __( "Adicionar novo", "mxu" ),
    "add_new_item" => __( "Adicionar novo simulador", "mxu" ),
    "edit_item" => __( "Editar simulador", "mxu" ),
    "new_item" => __( "Novo simulador", "mxu" ),
    "view_item" => __( "Ver simulador", "mxu" ),
    "view_items" => __( "Ver simulador", "mxu" ),
    "search_items" => __( "Pesquisar simulador", "mxu" ),
    "not_found" => __( "Nenhum simulador encontrado", "mxu" ),
    "not_found_in_trash" => __( "Nenhum simulador encontrado na lixeira", "mxu" ),
    "parent" => __( "simulador ascendente:", "mxu" ),
    "featured_image" => __( "Imagem destacada para esse simulador", "mxu" ),
    "set_featured_image" => __( "Definir imagem destacada para esse simulador", "mxu" ),
    "remove_featured_image" => __( "Remover imagem destacada para esse simulador", "mxu" ),
    "use_featured_image" => __( "Usar como imagem destacada para esse simulador", "mxu" ),
    "archives" => __( "Arquivos de simulador", "mxu" ),
    "insert_into_item" => __( "Inserir no simulador", "mxu" ),
    "uploaded_to_this_item" => __( "Enviar para esse simulador", "mxu" ),
    "filter_items_list" => __( "Filtrar lista de simuladors", "mxu" ),
    "items_list_navigation" => __( "Navegação na lista de simuladors", "mxu" ),
    "items_list" => __( "Lista de simuladors", "mxu" ),
    "attributes" => __( "Atributos de simuladors", "mxu" ),
    "name_admin_bar" => __( "simulador", "mxu" ),
    "item_published" => __( "simulador publicado", "mxu" ),
    "item_published_privately" => __( "simulador publicado de forma privada.", "mxu" ),
    "item_reverted_to_draft" => __( "simulador revertido para rascunho.", "mxu" ),
    "item_scheduled" => __( "simulador agendado", "mxu" ),
    "item_updated" => __( "simulador atualizado.", "mxu" ),
    "parent_item_colon" => __( "simulador ascendente:", "mxu" ),
];

$args = [
    "label" => __( "simulador", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "simulador", "with_front" => false ],
    "query_var" => true,
    "menu_position" => 12,
    "menu_icon" => "dashicons-editor-table",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "simulador", $args );


//LEASE PLAN 

$labels = [
    "name" => __( "leaseplan", "mxu" ),
    "singular_name" => __( "leaseplan", "mxu" ),
    "menu_name" => __( "leaseplan", "mxu" ),
    "all_items" => __( "Todos os leaseplan", "mxu" ),
    "add_new" => __( "Adicionar novo", "mxu" ),
    "add_new_item" => __( "Adicionar novo leaseplan", "mxu" ),
    "edit_item" => __( "Editar leaseplan", "mxu" ),
    "new_item" => __( "Novo leaseplan", "mxu" ),
    "view_item" => __( "Ver leaseplan", "mxu" ),
    "view_items" => __( "Ver leaseplan", "mxu" ),
    "search_items" => __( "Pesquisar leaseplan", "mxu" ),
    "not_found" => __( "Nenhum leaseplan encontrado", "mxu" ),
    "not_found_in_trash" => __( "Nenhum leaseplan encontrado na lixeira", "mxu" ),
    "parent" => __( "leaseplan ascendente:", "mxu" ),
    "featured_image" => __( "Imagem destacada para esse leaseplan", "mxu" ),
    "set_featured_image" => __( "Definir imagem destacada para esse leaseplan", "mxu" ),
    "remove_featured_image" => __( "Remover imagem destacada para esse leaseplan", "mxu" ),
    "use_featured_image" => __( "Usar como imagem destacada para esse leaseplan", "mxu" ),
    "archives" => __( "Arquivos de leaseplan", "mxu" ),
    "insert_into_item" => __( "Inserir no leaseplan", "mxu" ),
    "uploaded_to_this_item" => __( "Enviar para esse leaseplan", "mxu" ),
    "filter_items_list" => __( "Filtrar lista de leaseplans", "mxu" ),
    "items_list_navigation" => __( "Navegação na lista de leaseplans", "mxu" ),
    "items_list" => __( "Lista de leaseplans", "mxu" ),
    "attributes" => __( "Atributos de leaseplans", "mxu" ),
    "name_admin_bar" => __( "leaseplan", "mxu" ),
    "item_published" => __( "leaseplan publicado", "mxu" ),
    "item_published_privately" => __( "leaseplan publicado de forma privada.", "mxu" ),
    "item_reverted_to_draft" => __( "leaseplan revertido para rascunho.", "mxu" ),
    "item_scheduled" => __( "leaseplan agendado", "mxu" ),
    "item_updated" => __( "leaseplan atualizado.", "mxu" ),
    "parent_item_colon" => __( "leaseplan ascendente:", "mxu" ),
];

$args = [
    "label" => __( "leaseplan", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "leaseplan", "with_front" => false ],
    "query_var" => true,
    "menu_position" => 12,
    "menu_icon" => "dashicons-car",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "leaseplan", $args );



// faqs

$labels = [
    "name" => __( "faq", "mxu" ),
    "singular_name" => __( "faq", "mxu" ),
    "menu_name" => __( "faq", "mxu" ),
    "all_items" => __( "Todos os faq", "mxu" ),
    "add_new" => __( "Adicionar novo", "mxu" ),
    "add_new_item" => __( "Adicionar novo faq", "mxu" ),
    "edit_item" => __( "Editar faq", "mxu" ),
    "new_item" => __( "Novo faq", "mxu" ),
    "view_item" => __( "Ver faq", "mxu" ),
    "view_items" => __( "Ver faq", "mxu" ),
    "search_items" => __( "Pesquisar faq", "mxu" ),
    "not_found" => __( "Nenhum faq encontrado", "mxu" ),
    "not_found_in_trash" => __( "Nenhum faq encontrado na lixeira", "mxu" ),
    "parent" => __( "faq ascendente:", "mxu" ),
    "featured_image" => __( "Imagem destacada para esse faq", "mxu" ),
    "set_featured_image" => __( "Definir imagem destacada para esse faq", "mxu" ),
    "remove_featured_image" => __( "Remover imagem destacada para esse faq", "mxu" ),
    "use_featured_image" => __( "Usar como imagem destacada para esse faq", "mxu" ),
    "archives" => __( "Arquivos de faq", "mxu" ),
    "insert_into_item" => __( "Inserir no faq", "mxu" ),
    "uploaded_to_this_item" => __( "Enviar para esse faq", "mxu" ),
    "filter_items_list" => __( "Filtrar lista de faqs", "mxu" ),
    "items_list_navigation" => __( "Navegação na lista de faqs", "mxu" ),
    "items_list" => __( "Lista de faqs", "mxu" ),
    "attributes" => __( "Atributos de faqs", "mxu" ),
    "name_admin_bar" => __( "faq", "mxu" ),
    "item_published" => __( "faq publicado", "mxu" ),
    "item_published_privately" => __( "faq publicado de forma privada.", "mxu" ),
    "item_reverted_to_draft" => __( "faq revertido para rascunho.", "mxu" ),
    "item_scheduled" => __( "faq agendado", "mxu" ),
    "item_updated" => __( "faq atualizado.", "mxu" ),
    "parent_item_colon" => __( "faq ascendente:", "mxu" ),
];

$args = [
    "label" => __( "faq", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "faq", "with_front" => false ],
    "query_var" => true,
    "menu_position" => 12,
    "menu_icon" => "dashicons-editor-ul",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "faq", $args );
}

// tax faqs

function faqs_taxonomy() {  
    register_taxonomy(  
        'faqs',  					// This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'faq',                    //post type name

        array(  
            'hierarchical' => true,  
            'label' => 'categoria',  	//Display name
            'query_var' => true,
			'has_archive' => true,
            'show_admin_column' => true,
			'rewrite' => array('slug' => 'categoria')
        )  
    );  
}  
add_action( 'init', 'faqs_taxonomy');


// contatos

$labels = [
    "name" => __( "Contactos e localizacao", "mxu" ),
    "singular_name" => __( "contatos", "mxu" ),
    "menu_name" => __( "contatos", "mxu" ),
    "all_items" => __( "Todos os contatos", "mxu" ),
    "add_new" => __( "Adicionar novo", "mxu" ),
    "add_new_item" => __( "Adicionar novo contato", "mxu" ),
    "edit_item" => __( "Editar contato", "mxu" ),
    "new_item" => __( "Novo contato", "mxu" ),
    "view_item" => __( "Ver contato", "mxu" ),
    "view_items" => __( "Ver contato", "mxu" ),
    "search_items" => __( "Pesquisar contato", "mxu" ),
    "not_found" => __( "Nenhum contato encontrado", "mxu" ),
    "not_found_in_trash" => __( "Nenhum contato encontrado na lixeira", "mxu" ),
    "parent" => __( "contato ascendente:", "mxu" ),
    "featured_image" => __( "Imagem destacada para esse contato", "mxu" ),
    "set_featured_image" => __( "Definir imagem destacada para esse contato", "mxu" ),
    "remove_featured_image" => __( "Remover imagem destacada para esse contato", "mxu" ),
    "use_featured_image" => __( "Usar como imagem destacada para esse contato", "mxu" ),
    "archives" => __( "Arquivos de contato", "mxu" ),
    "insert_into_item" => __( "Inserir no contato", "mxu" ),
    "uploaded_to_this_item" => __( "Enviar para esse contato", "mxu" ),
    "filter_items_list" => __( "Filtrar lista de contatos", "mxu" ),
    "items_list_navigation" => __( "Navegação na lista de contatos", "mxu" ),
    "items_list" => __( "Lista de contatos", "mxu" ),
    "attributes" => __( "Atributos de contatos", "mxu" ),
    "name_admin_bar" => __( "contato", "mxu" ),
    "item_published" => __( "contato publicado", "mxu" ),
    "item_published_privately" => __( "contato publicado de forma privada.", "mxu" ),
    "item_reverted_to_draft" => __( "contato revertido para rascunho.", "mxu" ),
    "item_scheduled" => __( "contato agendado", "mxu" ),
    "item_updated" => __( "contato atualizado.", "mxu" ),
    "parent_item_colon" => __( "contato ascendente:", "mxu" ),
];

$args = [
    "label" => __( "contato", "mxu" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "contatos-localizacoes", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 12,
    "menu_icon" => "dashicons-admin-site",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => false,
];

register_post_type( "contato", $args );


// tax contatos

function contato_taxonomy() {  
    register_taxonomy(  
        'localidade',  					// This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'contato',                    //post type name

        array(  
            'hierarchical' => true,  
            'label' => 'localidade',  	//Display name
            'query_var' => true,
			'has_archive' => true,
            'show_admin_column' => true,
			'rewrite' => array('slug' => 'localidade')
        )  
    );  
}  
add_action( 'init', 'contato_taxonomy');



//addTax Location
function agencia_taxonomy() {  
    register_taxonomy(  
        'agencia',  					// This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'equipa',                    //post type name
        
        array(  
            'hierarchical' => true,  
            'label' => 'Agencia',  	//Display name
            'query_var' => true,
			'has_archive' => true,
            'show_admin_column' => true,
			'rewrite' => array('slug' => 'agencia')
        )  
    ); 
    register_taxonomy(  
        'team',  					// This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'equipa',                    //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'team',  	//Display name
            'query_var' => true,
			'has_archive' => true,
            'show_admin_column' => true,
			'rewrite' => array('slug' => 'team')
        )  
        
    ); 
     
}  
add_action( 'init', 'agencia_taxonomy');

/*
*
* Add Featured Image Column to Admin Area and Quick Edit menu
* Source: https://rudrastyh.com/wordpress/quick-edit-featured-image.html
*
*/

/*
 * This action hook allows to add a new empty column
 */
add_filter('manage_equipa_posts_columns', 'misha_featured_image_column');
function misha_featured_image_column( $column_array ) {

    // I want to add my column at the beginning, so I use array_slice()
    // in other cases $column_array['featured_image'] = 'Featured Image' will be enough
    $column_array = array_slice( $column_array, 0, 1, true )
    + array('featured_image' => '') // our new column for featured images
    + array_slice( $column_array, 1, NULL, true );

    return $column_array;
}

/*
 * This hook will fill our column with data
 */
add_action('manage_equipa_custom_column', 'misha_render_the_column', 10, 2);
function misha_render_the_column( $column_name, $post_id  ) {


        // if there is no featured image for this post, print the placeholder
        if( has_post_thumbnail( $post_id ) ) {

            // I know about get_the_post_thumbnail() function but we need data-id attribute here


            $thumb_id = get_post_thumbnail_id( $post_id,'full' );
            echo '<img data-id="' . $thumb_id . '" src="' . wp_get_attachment_url( $thumb_id ) . '" />';

        } else {

            // data-id should be "-1" I will explain below
            echo '<img data-id="-1" src="' . get_stylesheet_directory_uri() . '/assets/logo.png" />';

        }

    

}

add_action( 'admin_head', 'misha_custom_css' );
function misha_custom_css(){

    echo '<style>
        #featured_image{
            width:120px;
        }
        td.featured_image.column-featured_image img{
            max-width: 100%;
            height: auto;
        }

        /* some styles to make Quick Edit meny beautiful */
        #misha_featured_image .title{margin-top:10px;display:block;}
        #misha_featured_image a.misha_upload_featured_image{
            display:inline-block;
            margin:10px 0 0;
        }
        #misha_featured_image img{
            display:block;
            max-width:200px !important;
            height:auto;
        }
        #misha_featured_image .misha_remove_featured_image{
            display:none;
        }
    </style>';

}

add_action( 'admin_enqueue_scripts', 'misha_include_myuploadscript' );
function misha_include_myuploadscript() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
}

add_action('quick_edit_custom_box',  'misha_add_featured_image_quick_edit', 10, 2);
function misha_add_featured_image_quick_edit( $column_name, $post_type ) {

    // add it only if we have featured image column
    if ($column_name != 'featured_image') return;

    // we add #misha_featured_image to use it in JavaScript in CSS
    echo '<fieldset id="misha_featured_image" class="inline-edit-col-left">
        <div class="inline-edit-col">
            <span class="title">Featured Image</span>
            <div>
                <a href="#" class="misha_upload_featured_image">Set featured image</a>
                <input type="hidden" name="_thumbnail_id" value="" />
                <a href="#" class="misha_remove_featured_image">Remove Featured Image</a>
            </div>
        </div></fieldset>';

        // please look at _thumbnail_id as a name attribute - I use it to skip save_post action

}

add_action('admin_footer', 'misha_quick_edit_js_update');
function misha_quick_edit_js_update() {

    global $current_screen;

    // add this JS function only if we are on all posts page
    if (($current_screen->id != 'edit-post') || ($current_screen->post_type != 'post'))
        return;

        ?><script>
        jQuery(function($){

            $('body').on('click', '.misha_upload_featured_image', function(e){
                e.preventDefault();
                var button = $(this),
                 custom_uploader = wp.media({
                    title: 'Set featured image',
                    library : { type : 'image' },
                    button: { text: 'Set featured image' },
                }).on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $(button).html('<img src="' + attachment.url + '" />').next().val(attachment.id).parent().next().show();
                }).open();
            });

            $('body').on('click', '.misha_remove_featured_image', function(){
                $(this).hide().prev().val('-1').prev().html('Set featured Image');
                return false;
            });

            var $wp_inline_edit = inlineEditPost.edit;
            inlineEditPost.edit = function( id ) {
                $wp_inline_edit.apply( this, arguments );
                var $post_id = 0;
                if ( typeof( id ) == 'object' ) { 
                    $post_id = parseInt( this.getId( id ) );
                }

                if ( $post_id > 0 ) {
                    var $edit_row = $( '#edit-' + $post_id ),
                            $post_row = $( '#post-' + $post_id ),
                            $featured_image = $( '.column-featured_image', $post_row ).html(),
                            $featured_image_id = $( '.column-featured_image', $post_row ).find('img').attr('data-id');


                    if( $featured_image_id != -1 ) {

                        $( ':input[name="_thumbnail_id"]', $edit_row ).val( $featured_image_id ); // ID
                        $( '.misha_upload_featured_image', $edit_row ).html( $featured_image ); // image HTML
                        $( '.misha_remove_featured_image', $edit_row ).show(); // the remove link

                    }
                }
        }
    });
    </script>
<?php
}




add_action( 'init', 'mxu_cpt' );
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'partners', 9999, 60, false );
}

add_filter( 'meta_content', 'wptexturize' );
add_filter( 'meta_content', 'convert_smilies' );
add_filter( 'meta_content', 'convert_chars' );
add_filter( 'meta_content', 'wpautop' );
add_filter( 'meta_content', 'shortcode_unautop' );
add_filter( 'meta_content', 'prepend_attachment' );


/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/

 add_filter('wp_nav_menu_items', 'add_admin_link', 20, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary' ){
        $logoI = '<li style="z-index:9999" class="position-fixed w-100  d-md-none menu-item menu-item-type-custom menu-item-object-custom menu-item-13 nav-item bg-white"><a class="nav-link" title="Credimax Home" href="'.site_url() .'"><img style="width:150px;" src="' . get_template_directory_uri( ) . '/assets/Logo_DARK.png"></a><button class="navbar-toggler x ToogleX text-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        X
    </button></li>';
        $menuN = $logoI . $items;
        return $menuN;
    }else{
        return $items;
    }
} 

add_filter('wp_nav_menu_items', 'add_admin_link_holder', 10, 2);
function add_admin_link_holder($items, $args){
    if( $args->theme_location == 'primary' ){
        $items.= '<li class="border-0 d-md-none menu-item menu-item-type-custom menu-item-object-custom nav-item pl-3 pr-3"><a class="btn btn-light  btn-block mt-5 mb-3" href="http://localhost/Maxfinancev2/simuladores/">Ver Simuladores</a></li>'; 
        $items.= '<li class="border-0 d-md-none menu-item menu-item-type-custom menu-item-object-custom nav-item pl-3 pr-3"><a class="btn btn-outline-dark btn-block mb-5" data-toggle="modal" data-target="#exampleModal" >Login</a></li>';

        $items.= '<div class="d-md-none shadow" style="position: fixed; background:#fff; bottom:0; width:100%; height:100px;"></div>';
        return $items;
        }else{
            return $items;
        }
} 