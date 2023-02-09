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

/* __string_template__c0e6700592f89dd9bb3ec39fc49ca2c9ea089fccc8026eaa8cceb7c44b4f7cc0 */
class __TwigTemplate_41be4a8ac662b09846e80fb772e005630baaf35421345fea54f30b67cbca0e26 extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/mips/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/mips/img/app_icon.png\" />

<title>Gestionnaire de modules • mips</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TN';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '879a1f7124631aff4a0d70bf3f44e26f';
    var token_admin_orders = tokenAdminOrders = 'a4d2ba0079aa8e32513e830001e58540';
    var token_admin_customers = 'ef5908c58f618ddda7dbff861279045e';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'b49f4906de6f998d50ba0fc17354921b';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '276363640f0c08f913c633e0ca07b2f1';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE';
    var admin_notification_get_link = '/mips/admin824e9cqfbhx2dmv3erl/index.php/";
        // line 42
        echo "common/notifications?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE';
    var admin_notification_push_link = adminNotificationPushLink = '/mips/admin824e9cqfbhx2dmv3erl/index.php/common/notifications/ack?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/mips/admin824e9cqfbhx2dmv3erl/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/mips/admin824e9cqfbhx2dmv3erl/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mips/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mips/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mips/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mips/admin824e9cqfbhx2dmv3erl/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/mips\\/admin824e9cqfbhx2dmv3erl\\/\";
var baseDir = \"\\/mips\\/\";
var changeFormLanguageUrl = \"\\/mips\\/admin824e9cqfbhx2dmv3erl\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\";
var currency = {\"iso_code\":\"TND\",\"sign\":\"TND\",\"name\":\"Dinar tunisien\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"TND\",\"currencySymbol\":\"TND\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":3,\"minFractionDigits\":3,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"s";
        // line 69
        echo "ymbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/mips/admin824e9cqfbhx2dmv3erl/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/mips/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/mips/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/mips/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/mips/admin824e9cqfbhx2dmv3erl/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/mips/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/mips/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/mips/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/mips/admin824e9cqfbhx2dmv3erl/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/mips/admin824e9cqfbhx2dmv3erl/index.php\"  data-token=\"0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminDashboard&amp;token=2e4713b2685b63e17cc76330c70b1317\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders?token=fc3f233448f839a83f1de3b58014715e\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=a3bbd1618bcaf155d9b6d5a130869f61\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?token=fc3f233448f839a83f1de3b58014715e\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=42439a3d8d6c885766300c7c8081b71f\"
                 data-item=";
        // line 122
        echo "\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/products/new?token=fc3f233448f839a83f1de3b58014715e\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/categories/new?token=fc3f233448f839a83f1de3b58014715e\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"123\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\"
        data-post-link=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminQuickAccesses&token=6d503d23dcd53161be969316c0ce5c72\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminQuickAccesses&token=6d503d23dcd53161be969316c0ce5c72\">
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
      action=\"/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminSearch&amp;token=d5cf68a2137794539f3640aa43ba78a4\"
   ";
        // line 161
        echo "   role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
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
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-s";
        // line 177
        echo "hopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
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
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders?token=fc3f233448f839a83f1de3b58014715e\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=a3bbd1618bcaf155d9b6d5a130869f61\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?token=fc3f233448f839a83f1de3b58014715e\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=42439a3d8d6c885766300c7c8081b71f\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.ph";
        // line 214
        echo "p/sell/catalog/products/new?token=fc3f233448f839a83f1de3b58014715e\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/categories/new?token=fc3f233448f839a83f1de3b58014715e\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"186\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\"
      data-post-link=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminQuickAccesses&token=6d503d23dcd53161be969316c0ce5c72\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminQuickAccesses&token=6d503d23dcd53161be969316c0ce5c72\">
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
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/mips/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification";
        // line 259
        echo " js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
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
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=4a0b8d57c60d75507fc37a19c9026638\"&gt;paniers ";
        // line 309
        echo "abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
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
  <div class=\"rounded-ci";
        // line 358
        echo "rcle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/mips/img/pr/default.jpg\" alt=\"Aziz\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Aziz</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/employees/1/edit?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminLogin&amp;logout=1&amp;token=74aaaef8932ae57e5f6f23c6a324d4b1\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/employees/toggle-navigation?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminDashboard&amp;token=2e4713b2685b63e17cc76330c70b1317\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"";
        // line 405
        echo "link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminDashboard&amp;token=2e4713b2685b63e17cc76330c70b1317\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Commandes
                                </a>
 ";
        // line 441
        echo "                             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders/invoices/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders/credit-slips/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/orders/delivery-slips/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/in";
        // line 471
        echo "dex.php?controller=AdminCarts&amp;token=4a0b8d57c60d75507fc37a19c9026638\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/products?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/products?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" i";
        // line 503
        echo "d=\"subtab-AdminCategories\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/categories?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/monitoring/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminAttributesGroups&amp;token=564233e87e31183647f4fe68cbb36679\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/catalog/brands/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                           ";
        // line 532
        echo "                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/attachments/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCartRules&amp;token=42439a3d8d6c885766300c7c8081b71f\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/stocks/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/in";
        // line 563
        echo "dex.php/sell/customers/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/customers/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/addresses/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                 ";
        // line 594
        echo " 
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCustomerThreads&amp;token=b49f4906de6f998d50ba0fc17354921b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCustomerThreads&amp;token=b49f4906de6f998d50ba0fc17354921b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/sell/customer-service/order-messages/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                              ";
        // line 622
        echo "    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminReturn&amp;token=0d444b0667fc80b52517baf16c4bbb62\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminStats&amp;token=a3bbd1618bcaf155d9b6d5a130869f61\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"l";
        // line 661
        echo "ink-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/design/themes/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\"";
        // line 688
        echo ">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/design/themes/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/design/mail_theme/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/design/cms-pages/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72";
        // line 717
        echo "hpFE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/design/modules/positions/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminImages&amp;token=47efca8da12a99f3f87aa04756d339e7\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/modules/link-widget/list?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
    ";
        // line 751
        echo "              <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCarriers&amp;token=632038ba7b95f163d1e3fdeff56a5434\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminCarriers&amp;token=632038ba7b95f163d1e3fdeff56a5434\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/shipping/preferences/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
            ";
        // line 779
        echo "                            </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/payment/payment_methods?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/payment/payment_methods?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/payment/preferences?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Préférences
 ";
        // line 808
        echo "                               </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/international/localization/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/international/localization/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
    ";
        // line 840
        echo "                            <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/international/zones/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/international/taxes/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/international/translations/settings?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParam";
        // line 876
        echo "eters\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/preferences/preferences?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/preferences/preferences?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/order-preferences/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 905
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/product-preferences/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/customer-preferences/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/contacts/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/shop/seo-urls/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Trafic et SEO
                                </a>
";
        // line 933
        echo "                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminSearchConf&amp;token=6c22446a55ef20c153c88479d2feaad3\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/system-information/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
       ";
        // line 964
        echo "                         <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/system-information/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/performance/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/administration/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/emails/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                  ";
        // line 993
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/import/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/employees/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/sql-requests/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/logs/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Logs
                  ";
        // line 1021
        echo "              </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/webservice-keys/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/feature-flags/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/configure/advanced/security/?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
";
        // line 1051
        echo "          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
 ";
        // line 1109
        echo "     <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/manage?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/alerts?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/improve/modules/updates?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\" id=\"subtab-AdminModulesUpdates\"";
        // line 1128
        echo " class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
       ";
        // line 1151
        echo "           
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/mips/admin824e9cqfbhx2dmv3erl/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=0ubHN7xVeGU-UK7ZyQRUCmtQFAgWmqFTtBUv_72hpFE\"
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
        // line 1177
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
  <a href=\"https://localhost/mips/admin824e9cqfbhx2dmv3erl/index.php?controller=AdminDashboard&amp;token=2e4713b2685b63e17cc76330c70b1317\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1211
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1177
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

    // line 1211
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
        return "__string_template__c0e6700592f89dd9bb3ec39fc49ca2c9ea089fccc8026eaa8cceb7c44b4f7cc0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1378 => 1211,  1357 => 1177,  1346 => 87,  1337 => 1211,  1297 => 1177,  1269 => 1151,  1244 => 1128,  1223 => 1109,  1163 => 1051,  1131 => 1021,  1101 => 993,  1070 => 964,  1037 => 933,  1007 => 905,  976 => 876,  938 => 840,  904 => 808,  873 => 779,  843 => 751,  807 => 717,  776 => 688,  747 => 661,  706 => 622,  676 => 594,  643 => 563,  610 => 532,  579 => 503,  545 => 471,  513 => 441,  475 => 405,  426 => 358,  375 => 309,  323 => 259,  276 => 214,  237 => 177,  219 => 161,  178 => 122,  138 => 87,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c0e6700592f89dd9bb3ec39fc49ca2c9ea089fccc8026eaa8cceb7c44b4f7cc0", "");
    }
}
