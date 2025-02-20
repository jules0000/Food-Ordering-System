<!-- /. NAV SIDE  -->
<section class="navbar-side collapse navbar-collapse" id="navbarNav">
    <ul class="nav crunchy-navigation sidebar-menu">

        <!--DASHBOARD-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?>
                href="<?php echo SITEURL;?>"><i class="fa fa-dashboard fa-3x"></i>
                <?php echo get_languageword('dashboard');?> </a>
        </li>


        <!--MENU-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_MENU) echo 'class="active-menu"';?>
                href="<?php echo URL_MENU_INDEX;?>"><i class="fa fa-bars fa-3x"></i>
                <?php echo get_languageword('menu');?> </a>
        </li>
        <!--MENU-->


        <!--ITEMS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ITEMS) echo 'class="active-menu"';?>
                href="<?php echo URL_ITEMS_INDEX;?>"><i class="fa fa-cutlery fa-3x"></i>
                <?php echo get_languageword('items');?> </a>
        </li>
        <!--ITEMS-->


        <!--OPTIONS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_OPTIONS) echo 'class="active-menu"';?>
                href="<?php echo URL_OPTIONS_INDEX;?>"><i class="fa fa-stack-exchange fa-3x"></i>
                <?php echo get_languageword('options');?> </a>
        </li>
        <!--OPTIONS-->



        <!--ITEM TYPES-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu=="item_types") echo 'class="active-menu"';?>
                href="<?php echo URL_ITEM_TYPES_INDEX;?>"><i class="fa fa-stack-exchange fa-3x"></i>
                <?php echo get_languageword('item_types');?> </a>
        </li>
        <!--ITEM TYPES-->

        <!--ADD ONS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADDONS) echo 'class="active-menu"';?>
                href="<?php echo URL_ADDONS_INDEX;?>"><i class="fa fa-plus-circle fa-3x"></i>
                <?php echo get_languageword('addons');?> </a>
        </li>
        <!--ADD ONS-->


        <!--OFFERS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_OFFERS) echo 'class="active-menu"';?>
                href="<?php echo URL_OFFERS_INDEX;?>"><i class="fa fa-bolt fa-3x"></i>
                <?php echo get_languageword('offers');?> </a>
        </li>
        <!--OFFERS-->

        <!--USERS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_USERS) echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-users fa-3x"></i> <?php echo get_languageword('users');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='km_users') echo 'class="active-menu"';?>
                        href="<?php echo URL_USERS_INDEX;?>"> <i class="fa fa-birthday-cake fa-3x"></i>
                        <?php echo get_languageword('kitchen_managers');?> </a>
                </li>
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='dm_users') echo 'class="active-menu"';?>
                        href="<?php echo URL_USERS_DELIVERY_MANAGERS;?>"> <i class="fa fa-id-id-card fa-3x"></i>
                        <?php echo get_languageword('delivery_managers');?> </a></li>
            </ul>
        </li>
        <!--USERS-->

        <!--CUSTOMERS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_CUSTOMERS) echo 'class="active-menu"';?>
                href="<?php echo URL_CUSTOMERS_INDEX;?>"><i class="fa fa-user fa-3x"></i>
                <?php echo get_languageword('customers');?> </a>
        </li>
        <!--CUSTOMERS-->

        <!--ORDERS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ORDERS) echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-list fa-3x"></i> <?php echo get_languageword('orders');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if (isset($actv_submenu) && $actv_submenu=='new') echo 'class="active-menu"';?>
                        href="<?php echo URL_ORDERS_INDEX.'new';?>"> <i class="fa fa-exclamation fa-3x"></i>
                        <?php echo get_languageword('new_orders');?> </a>
                </li>

                <li><a <?php if (isset($actv_submenu) && $actv_submenu=='process') echo 'class="active-menu"';?>
                        href="<?php echo URL_ORDERS_INDEX.'process';?>"> <i class="fa fa-spinner fa-3x"></i>
                        <?php echo get_languageword('under_process_orders');?> </a></li>

                <li><a <?php if (isset($actv_submenu) && $actv_submenu=='out_to_deliver') echo 'class="active-menu"';?>
                        href="<?php echo URL_ORDERS_INDEX.'out_to_deliver';?>"> <i class="fa fa-car fa-3x"></i>
                        <?php echo get_languageword('out_to_deliver_orders');?> </a></li>

                <li><a <?php if (isset($actv_submenu) && $actv_submenu=='delivered') echo 'class="active-menu"';?>
                        href="<?php echo URL_ORDERS_INDEX.'delivered';?>"> <i class="fa fa-check-square fa-3x"></i>
                        <?php echo get_languageword('delivered_orders');?> </a></li>

                <li><a <?php if (isset($actv_submenu) && $actv_submenu=='cancelled') echo 'class="active-menu"';?>
                        href="<?php echo URL_ORDERS_INDEX.'cancelled';?>"> <i class="fa fa-ban fa-3x"></i>
                        <?php echo get_languageword('cancelled_orders');?> </a></li>
            </ul>
        </li>
        <!--ORDERS-->



        <!--Loyality Points-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_LOYALITY_POINTS) echo 'class="active-menu"';?>
                href="#"><i class="fa fa-gift fa-3x"></i> <?php echo get_languageword('loyality_points');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='point_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_POINTS_SETTINGS;?>"> <i class="fa fa-bullhorn fa-3x"></i>
                        <?php echo get_languageword('points_settings');?> </a>
                </li>
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='reward_points') echo 'class="active-menu"';?>
                        href="<?php echo URL_USER_REWARD_POINTS;?>"> <i class="fa fa-bullhorn fa-3x"></i>
                        <?php echo get_languageword('user_reward_points');?> </a></li>
            </ul>
        </li>
        <!--Loyality Points-->

        <!--
                REFERRAL SETTINGS
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_REFERRAL) echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-gift fa-3x"></i> <?php echo get_languageword('referral_settings');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='rsettings') echo 'class="active-menu"';?>
                        href="<?php echo URL_REFERRAL_SETTINGS;?>"> <i class="fa fa-share-square-o fa-3x"></i>
                        <?php echo get_languageword('referral_settings');?>
                    </a></li>
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='rusers') echo 'class="active-menu"';?>
                        href="<?php echo URL_REFERRAL_USERS;?>"> <i class="fa fa-bullhorn fa-3x"></i>
                        <?php echo get_languageword('refferal_users');?> </a>
                </li>
            </ul>
        </li>
        REFERRAL SETTINGS
-->

        <!--Location Master-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_LOCATIONS) echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-map-marker fa-3x"></i> <?php echo get_languageword('location_master');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='cities') echo 'class="active-menu"';?>
                        href="<?php echo URL_LOCATIONS_INDEX;?>"> <i class="fa fa-map-marker fa-3x"></i>
                        <?php echo get_languageword('cities');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='dlocations') echo 'class="active-menu"';?>
                        href="<?php echo URL_DELIVERY_LOCATIONS;?>"> <i class="fa fa-marker fa-3x"></i>
                        <?php echo get_languageword('service_provide_locations');?> </a></li>
            </ul>
        </li>
        <!--Location Master-->

        <!--Master Settings-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_MASTER_SETTINGS) echo 'class="active-menu"';?>
                href="#"><i class="fa fa-cog fa-3x"></i> <?php echo get_languageword('master_settings');?> </a>
            <ul class="sidebar-submenu">
                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='site_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_SITE_SETTINGS;?>"> <i class="fa fa-sliders fa-3x"></i>
                        <?php echo get_languageword('site_settings');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='paypal_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_PAYPAL_SETTINGS;?>"> <i class="fa fa-cc-paypal fa-3x"></i>
                        <?php echo get_languageword('paypal_settings');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='email_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_EMAIL_SETTINGS;?>"> <i class="fa fa-envelope fa-3x"></i>
                        <?php echo get_languageword('email_settings');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='social_networks') echo 'class="active-menu"';?>
                        href="<?php echo URL_SOCIAL_NETWORKS;?>"> <i class="fa fa-facebook fa-3x"></i>
                        <?php echo get_languageword('social_networks');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='seo_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_SEO_SETTINGS;?>"> <i class="fa fa-wrench fa-3x"></i>
                        <?php echo get_languageword('seo_settings');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='email_templates') echo 'class="active-menu"';?>
                        href="<?php echo URL_EMAIL_TEMPLATES;?>"> <i class="fa fa-share fa-3x"></i>
                        <?php echo get_languageword('email_templates');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='sms_gateways') echo 'class="active-menu"';?>
                        href="<?php echo URL_SMS_GATEWAYS;?>"> <i class="fa fa-comment fa-3x"></i>
                        <?php echo get_languageword('sms_gateways');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='sms_templates') echo 'class="active-menu"';?>
                        href="<?php echo URL_SMS_TEMPLATES;?>"> <i class="fa fa-comments fa-3x"></i>
                        <?php echo get_languageword('sms_templates');?> </a>
                </li>

                <!--li><a <?php //if(isset($actv_submenu) && $actv_submenu=='push_notification') echo 'class="active-menu"';?> href="<?php //echo URL_PUSH_NOTIFICATION_SETTINGS;?>"> <?php //echo get_languageword('push_notification_settings');?> </a></li-->

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='pusher_notification') echo 'class="active-menu"';?>
                        href="<?php echo URL_PUSHER_NOTIFICATION_SETTINGS;?>"> <i class="fa fa-bell fa-3x"></i>
                        <?php echo get_languageword('pusher_notification_settings');?> </a></li>

                <!--li><a <?php //if(isset($actv_submenu) && $actv_submenu=='app_settings') echo 'class="active-menu"';?> href="<?php //echo URL_APP_SETTINGS;?>"> <?php //echo get_languageword('app_settings');?> </a></li-->

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='tinify_settings') echo 'class="active-menu"';?>
                        href="<?php echo URL_TINIFY_SETTINGS;?>"> <i class="fa fa-picture-o fa-3x"></i>
                        <?php echo get_languageword('tinify_settings');?> </a>
                </li>


                <li><a <?php if(isset($actv_submenu) && $actv_submenu==ACTIVE_CARDS) echo 'class="active-menu"';?>
                        href="<?php echo URL_CARDS_INDEX;?>"> <i class="fa fa-cc-stripe fa-3x"></i>
                        <?php echo get_languageword('stripe_cards');?> </a></li>

            </ul>
        </li>
        <!--Master Settings-->



        <!--Reports-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_REPORTS) echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-bar-chart fa-3x"></i> <?php echo get_languageword('reports');?> </a>
            <ul class="sidebar-submenu">

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='date_wise') echo 'class="active-menu"';?>
                        href="<?php echo URL_REPORTS_INDEX;?>"> <i class="fa fa-table fa-3x"></i>
                        <?php echo get_languageword('date_wise_reports');?> </a>
                </li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='customer_wise') echo 'class="active-menu"';?>
                        href="<?php echo URL_REPORTS_CLIENT_WISE;?>"> <i class="fa fa-table fa-3x"></i>
                        <?php echo get_languageword('customer_wise_reports');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='location_wise') echo 'class="active-menu"';?>
                        href="<?php echo URL_REPORTS_LOCATION_WISE;?>"> <i class="fa fa-table fa-3x"></i>
                        <?php echo get_languageword('location_wise_reports');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='item_wise') echo 'class="active-menu"';?>
                        href="<?php echo URL_REPORTS_ITEM_WISE;?>"> <i class="fa fa-table fa-3x"></i>
                        <?php echo get_languageword('item_wise_reports');?>
                    </a></li>
            </ul>
        </li>
        <!--Reports-->


        <!--Pages-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_PAGES) echo 'class="active-menu"';?>
                href="<?php echo URL_PAGES_INDEX;?>"><i class="fa fa-paperclip fa-3x"></i>
                <?php echo get_languageword('pages');?> </a>
        </li>
        <!--Pages-->


        <!--FAQS-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu=='faqs_menu') echo 'class="active-menu"';?> href="#"><i
                    class="fa fa-question-circle fa-3x"></i> <?php echo get_languageword('faqs');?> </a>
            <ul class="sidebar-submenu">

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='faqs_categories') echo 'class="active-menu"';?>
                        href="<?php echo URL_FAQS_CATEGORIES_INDEX;?>"> <i class="fa fa-question fa-3x"></i>
                        <?php echo get_languageword('faqs_categories');?> </a></li>

                <li><a <?php if(isset($actv_submenu) && $actv_submenu=='faqs') echo 'class="active-menu"';?>
                        href="<?php echo URL_FAQS_INDEX;?>"> <i class="fa fa-question-circle-o fa-3x"></i>
                        <?php echo get_languageword('faqs');?> </a></li>

            </ul>
        </li>
        <!--FAQS-->


        <!--Logout-->
        <li>
            <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?>
                href="<?php echo URL_AUTH_LOGOUT;?>"><i class="fa fa-sign-out fa-3x"></i>
                <?php echo get_languageword('logout');?> </a>
        </li>
        <!--Logout-->


    </ul>
</section>
<script src="<?php echo JS_ADMIN_SIDEBAR_MENU;?>"></script>
<script>
$.sidebarMenu($('.sidebar-menu'))
</script>