<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ad42b1fb19fd4c5a5b5575774aca3feb */
class __TwigTemplate_c3d7b79d96a188522e8fac235b0f1624 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/shopakimmakako/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/shopakimmakako/img/app_icon.png\" />

<title>Thème et logo > Thème • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'f72aa252384e0ce694b3318fe46eb570';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'd29a9b98a58bdb5f67efd28ce61bd330';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/shopakimmakako/admin/index.php/improve/modules/manage?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0';
    var admin_notification_get_link = '/shopakimmakako/admin/index.php/common/notifications?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0';
    var admin_notification_push_link = adminNotificationPushLink = '/shopakimmakako/admin/index.php/common/notifications/ack?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0';
    var ";
        // line 41
        echo "tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/shopakimmakako/admin/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/shopakimmakako/admin/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopakimmakako/admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopakimmakako/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopakimmakako/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopakimmakako/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/shopakimmakako\\/admin\\/\";
var baseDir = \"\\/shopakimmakako\\/\";
var changeFormLanguageUrl = \"\\/shopakimmakako\\/admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"Franc CFA (BCEAO)\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"";
        // line 66
        echo "groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/shopakimmakako/admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/admin/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopakimmakako/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/shopakimmakako/admin/index.php\"  data-token=\"A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminDashboard&amp;token=e4df1f972cdc1b5ea7418fc6ddc04d70\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e92b16c09d8f8744c0c6f27888cf4c00\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/shopakimmakako/admin/index.php/improve/modules/manage?token=bbceba7dc9f32b6960f870e8351a7daf\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/shopakimmakako/admin/index.php/sell/catalog/categories/new?token=bbceba7dc9f32b6960f870e8351a7daf\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/shopakimmakako/admin/index.php/sell/catalog/products-v2/create?token=bbceba7dc9f32b6960f870e8351a7daf\"
                 data-item=\"New product\"
      >New product</a>
          <a c";
        // line 120
        echo "lass=\"dropdown-item quick-row-link \"
         href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c561ce2c2922886929c654b4a8bf6368\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/shopakimmakako/admin/index.php/sell/orders?token=bbceba7dc9f32b6960f870e8351a7daf\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"61\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"
        data-post-link=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminQuickAccesses&token=b2370ca7c03b0647a14f9df31712951b\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Theme &amp; Logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminQuickAccesses&token=b2370ca7c03b0647a14f9df31712951b\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/shopakimmakako/admin/index.php?controller=AdminSearch&amp;token=6aca5824e5728a11cc891a9952e0b2db\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group";
        // line 159
        echo "\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data";
        // line 174
        echo "-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e92b16c09d8f8744c0c6f27888cf4c00\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/shopakimmakako/admin/index.php/improve/modules/manage?token=bbceba7dc9f32b6960f870e8351a7daf\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/shopakimmakako/admin/index.php/sell/catalog/categories/new?token=bbceba7dc9f32b6960f870e8351a7daf\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/shopakimmakako/admin/index.php/sell/catalog/products-v2/create?token=bbceba7dc9f32b6960f870e8351a7daf\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c561ce2c2922886929c654b4a8bf6368\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhos";
        // line 214
        echo "t/shopakimmakako/admin/index.php/sell/orders?token=bbceba7dc9f32b6960f870e8351a7daf\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/?-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"
      data-post-link=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminQuickAccesses&token=b2370ca7c03b0647a14f9df31712951b\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Theme &amp; Logo - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminQuickAccesses&token=b2370ca7c03b0647a14f9df31712951b\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/shopakimmakako/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdow";
        // line 259
        echo "n\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=8c8ec9f411cd32f60fa2b8ee9ad7ee73\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
  ";
        // line 310
        echo "          <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"h";
        // line 360
        echo "ttp://localhost/shopakimmakako/img/pr/default.jpg\" alt=\"Kossigan Brice\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Kossigan Brice</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/shopakimmakako/admin/index.php/configure/advanced/employees/1/edit?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=6a440a40dad520f086f151bd56da879a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/shopakimmakako/admin/index.php/configure/advanced/employees/toggle-navigation?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminDashboard&amp;token=e4df1f972cdc1b5ea7418fc6ddc04d70\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminDashboard&amp;token=e4df1f972cdc1b5ea7418fc6ddc04d70\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              ";
        // line 404
        echo "</a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/shopakimmakako/admin/index.php/sell/orders/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/orders/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href";
        // line 443
        echo "=\"/shopakimmakako/admin/index.php/sell/orders/invoices/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/orders/credit-slips/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/orders/delivery-slips/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCarts&amp;token=8c8ec9f411cd32f60fa2b8ee9ad7ee73\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
           ";
        // line 475
        echo "                                           
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/shopakimmakako/admin/index.php/sell/catalog/products?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/catalog/products?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/catalog/categories?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
       ";
        // line 506
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/catalog/monitoring/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminAttributesGroups&amp;token=4b161c92c56b9f8778a7258b182dc6ba\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/catalog/brands/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/attachments/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Files
                                </a>
   ";
        // line 534
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCartRules&amp;token=c561ce2c2922886929c654b4a8bf6368\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/stocks/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/shopakimmakako/admin/index.php/sell/customers/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                ";
        // line 566
        echo "                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/customers/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/addresses/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCustomerThreads&amp;token=416c9351fb0c071c7d0b36706a9bfaee\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                               ";
        // line 597
        echo "     <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCustomerThreads&amp;token=416c9351fb0c071c7d0b36706a9bfaee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/shopakimmakako/admin/index.php/sell/customer-service/order-messages/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminReturn&amp;token=70dd90e9b9a190647171a32bacee17f8\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                           ";
        // line 626
        echo "                                   </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminStats&amp;token=e92b16c09d8f8744c0c6f27888cf4c00\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/shopakimmakako/admin/index.php/improve/modules/manage?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down";
        // line 664
        echo "
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/modules/manage?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/shopakimmakako/admin/index.php/improve/design/themes/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                           ";
        // line 694
        echo "   
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/design/themes/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/design/mail_theme/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/design/cms-pages/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/design/modules/positions/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Positions
                                </a>
  ";
        // line 723
        echo "                            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminImages&amp;token=56b2ddfa57b3b2ea8a680240919e1e06\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/shopakimmakako/admin/index.php/modules/link-widget/list?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCarriers&amp;token=b618149f83d711be23bb8fc45a24b97c\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
      ";
        // line 755
        echo "                                                      </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminCarriers&amp;token=b618149f83d711be23bb8fc45a24b97c\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/shipping/preferences/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/shopakimmakako/admin/index.php/improve/payment/payment_methods?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"ma";
        // line 786
        echo "terial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/payment/payment_methods?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/payment/preferences?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/shopakimmakako/admin/index.php/improve/international/localization/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
          ";
        // line 816
        echo "            <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/international/localization/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/international/zones/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/international/taxes/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Taxes
            ";
        // line 845
        echo "                    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/shopakimmakako/admin/index.php/improve/international/translations/settings?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/shopakimmakako/admin/index.php/configure/shop/preferences/preferences?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
            ";
        // line 883
        echo "                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/preferences/preferences?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/order-preferences/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/product-preferences/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/customer-prefere";
        // line 911
        echo "nces/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/contacts/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/shop/seo-urls/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminSearchConf&amp;token=c323c673ad154b4f7382f41effb228ed\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                         ";
        // line 943
        echo "             
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/shopakimmakako/admin/index.php/configure/advanced/system-information/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/system-information/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/performance/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Performance
                                </a>
                              </li>

                                            ";
        // line 972
        echo "                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/administration/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/emails/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/import/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/employees/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Tea";
        // line 1000
        echo "m
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/sql-requests/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/logs/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/webservice-keys/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                     ";
        // line 1030
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/feature-flags/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/shopakimmakako/admin/index.php/configure/advanced/security/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/shopakimmakako/admin/index.php/improve/design/themes/import?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"                  title=\"Ajouter un thème\"                 ";
        // line 1079
        echo "                 >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/shopakimmakako/admin/index.php/improve/design/themes/export?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"                  title=\"Exporter le thème actif\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/shopakimmakako/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.1.7%2526country%253Dfr/Aide?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ";
        // line 1108
        echo "                                                                                                                                                   <li class=\"nav-item\">
                    <a href=\"/shopakimmakako/admin/index.php/improve/design/themes/?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminPsThemeCustoConfiguration&token=05782456d3e05173d959da8cadb34630\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"126\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminPsThemeCustoAdvanced&token=09c47baaeba6750895ac763e301690c7\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"127\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                               ";
        // line 1132
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/shopakimmakako/admin/index.php/improve/design/themes/import?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"              title=\"Ajouter un thème\"            >
              Ajouter un thème
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/shopakimmakako/admin/index.php/improve/design/themes/export?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"              title=\"Exporter le thème actif\"            >
              Exporter le thème actif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floa";
        // line 1153
        echo "ting-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/shopakimmakako/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.1.7%2526country%253Dfr/Aide?_token=A99-G0_komgU9u2bU9eDb6WxVVUKBE2AhcVRHEZ9FK0\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1178
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/shopakimmakako/admin/index.php?controller=AdminDashboard&amp;token=e4df1f972cdc1b5ea7418fc6ddc04d70\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1212
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1178
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ad42b1fb19fd4c5a5b5575774aca3feb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1379 => 1212,  1358 => 1178,  1347 => 83,  1338 => 1212,  1298 => 1178,  1271 => 1153,  1248 => 1132,  1222 => 1108,  1191 => 1079,  1140 => 1030,  1108 => 1000,  1078 => 972,  1047 => 943,  1013 => 911,  983 => 883,  943 => 845,  912 => 816,  880 => 786,  847 => 755,  813 => 723,  782 => 694,  750 => 664,  710 => 626,  679 => 597,  646 => 566,  612 => 534,  582 => 506,  549 => 475,  515 => 443,  474 => 404,  428 => 360,  376 => 310,  323 => 259,  276 => 214,  234 => 174,  217 => 159,  176 => 120,  134 => 83,  115 => 66,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ad42b1fb19fd4c5a5b5575774aca3feb", "");
    }
}
