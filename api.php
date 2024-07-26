<?php
$listFilename = 'toto.txt';
$articleFilename = 'article.txt';
$titleFilename = 'title.txt';

function createIndexContent($folderName, $titleContent, $articleContent) {
    return <<<HTML

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US" data-authenticated-account>
<meta name="google-site-verification" content="k19EU-BtwR3w6bGXcZG9N1GnKaGUxTwZPseMD28wsgM" />
<meta name="google-site-verification" content="qkqZQu_FBD_SRPUX0FQN94BEZ14sq2IUmO-ZKAjpCWM" />
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="http://vaccination.uonbi.ac.ke/$folderName">
<meta charset="utf-8" />
<title>$titleContent</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
<link rel="icon" type="image/x-icon" href="https://goodimg.io/images/2024/06/26/dalam-3.png?format=100w" />
<link rel="canonical" href="http://vaccination.uonbi.ac.ke/$folderName" />
<meta property="og:site_name" content="$folderName" />
<meta property="og:title" content="$titleContent" />
<meta property="og:url" content="http://vaccination.uonbi.ac.ke/$folderName" />
<meta property="og:type" content="product" />
<meta property="og:description" content="$articleContent" />
<meta property="og:image" content="http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w" />
<meta property="og:image:width" content="720" />
<meta property="og:image:height" content="802" />
<meta property="product:price:amount" content="10000.00" />
<meta property="product:price:currency" content="IDR" />
<meta property="product:availability" content="instock" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="language" content="ID">
<meta name="copyright" content="$folderName">
<meta name="author" content="$folderName">
<meta name="distribution" content="global">
<meta name="publisher" content="$folderName">
<meta name="geo.placename" content="DKI Jakarta">
<meta name="geo.country" content="ID">
<meta name="geo.region" content="ID" />
<meta name="tgn.nation" content="Indonesia">
<meta property="og:locale" content="id_ID" />
<link rel="amphtml" href="https://pub-7fa86dfebd7e473195b6af440be8865e.r2.dev/proyectocorrupcion.ugr.es.html">
<meta itemprop="name" content="$titleContent" />
<meta itemprop="url" content="http://vaccination.uonbi.ac.ke/$folderName" />
<meta itemprop="description" content="$articleContent" />
<meta itemprop="thumbnailUrl" content="http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w" />
<link rel="image_src" href="http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w" />
<meta itemprop="image" content="http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w" />
<meta name="twitter:title" content="$titleContent" />
<meta name="twitter:image" content="http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w" />
<meta name="twitter:url" content="http://vaccination.uonbi.ac.ke/$folderName" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="$articleContent" />
<meta name="description" content="$articleContent" />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/8XHhSPXOemtseCqthncAVmCE4TXMgevBp8gk_Wd4WcSfeljgfFHN4UJLFRbh52jhWDjh5Aj352IDFDbhwcscwDiKZc9X52MujUGMJyBEiA4TdevlihmKOWFGjAszikJQZ14ydclC-AtlZhNX-e8ROWmkikJZ-YiXOAB8ieoyOAmtiY4yOAFzdcs8d1F8ZfG4fHgmIMMjgfMfH6qJ_hwbMs62JMJ7fbR3jUMgeMb6MKG4fVBRIMIjgPMfH6qJvcwbMs6YJMJ7f6KYN3IbMs6FJMJ7fbRXjUMgeMt6MKG4fVZRIMIjIPMfH6GJvdqfIMJjgfMfqMYeczkXg6.js"></script>
<script type="text/javascript">
  try {
Typekit.load();
  } catch (e) {}
</script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
<script type="text/javascript">
  SQUARESPACE_ROLLUPS = {};
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-0bf461f6eb21bfb32439-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-15305921bb94c505cd92-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-0f51b06fac4ba1f7c845-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-fa44ea4258bc102e15e6-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-7eeaf0d114c6eedbda30-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-common');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-6cae96de8eb9dce4823b-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css">
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-ab6f2e960ac7d010803d-min.en-US.js"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');
</script>
<script>
  (function(rollups, name) {
if (!rollups[name]) {
  rollups[name] = {};
}
rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"];
  })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');
</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css">
<script data-name="static-context">
  Static = window.Static || {};
  Static.SQUARESPACE_CONTEXT = {
"betaFeatureFlags": ["crm_product_contacts_use_mfe", "commerce_etsy_product_import", "nested_categories", "hideable_header_footer", "toggle_preview_new_shortcut", "rte_refactor_release_a", "pages_panel_new_entry_point", "rte_text_justify_align", "fluid_engine_new_multiselect_actions", "i18n_beta_website_locales", "supports_versioned_template_assets", "website_form_improvements", "hideable_header_footer_for_courses", "content_ai_brand_identity", "customer_accounts_email_verification", "crm_redesign_phase_1", "shape_block", "seven_one_migration_updated_kb_links", "pdp_description_add_to_cart_tweaks", "hideable_header_footer_for_memberareas", "sticky_scroll", "commerce_subscription_renewal_notifications", "visitor_react_forms", "marketing_landing_page", "unify_edit_mode_p1_70", "member_areas_feature", "scripts_defer", "react_pages_panel", "accounting_orders_sync", "hideable_header_footer_for_videos", "campaigns_import_discounts", "rewrite_transactional_email_from_address", "override_block_styles", "commerce_etsy_shipping_import", "enable_css_variable_tweaks", "is_feature_gate_refresh_enabled", "new_stacked_index", "commerce_paywall_renewal_notifications", "gdpr_cookie_banner", "collection_typename_switching", "template_translation_english_fallbacks", "campaigns_discount_section_in_automations", "ai_seo_description", "emit_donation_events_to_census", "rte_text_highlights", "website_form_effects", "campaigns_thumbnail_layout", "pages_panel_v3_search_bar", "seven_one_migration_cover_pages", "campaigns_new_image_layout_picker", "campaigns_discount_section_in_blasts", "background_art_onboarding", "link_editor_redesign", "fluid_engine_default_mobile_order", "header_usability_improvements", "hide_header_footer_beta", "pdp_subs_otp_visitor_site", "pdp_subs_otp_buttons", "donations_refresh", "themes", "new_developer_flow", "fluid_engine", "donations_refresh_in_circle_labs", "nested_categories_migration_enabled", "unify_edit_mode_p1", "commerce_order_status_access", "unify_edit_mode_p2", "commerce_site_visitor_metrics", "commerce_clearpay", "fluid_engine_clean_up_grid_contextual_change", "campaigns_global_uc_ab", "customer_account_creation_recaptcha", "container_styles_improvements", "send_local_pickup_ready_email", "commsplat_form_file_upload", "summary_block_video_collections"],
"videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
"facebookAppId": "314192535267336",
"facebookApiVersion": "v6.0",
"rollups": {
  "squarespace-announcement-bar": {
"js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-3312060c9a7329a8fa7d-min.en-US.js"
  },
  "squarespace-audio-player": {
"css": "//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-859c0e1608740f52232b-min.en-US.js"
  },
  "squarespace-blog-collection-list": {
"css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-f179daf3c110a4b83377-min.en-US.js"
  },
  "squarespace-calendar-block-renderer": {
"css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-09aee617730e2e34aac4-min.en-US.js"
  },
  "squarespace-chartjs-helpers": {
"css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-165a5004bc0d6bfa2b43-min.en-US.js"
  },
  "squarespace-comments": {
"css": "//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/comments-02cc3212a83991669e33-min.en-US.js"
  },
  "squarespace-custom-css-popup": {
"css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-75139f89deb816b1fc85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-11837ce6f1cba5fb367a-min.en-US.js"
  },
  "squarespace-dialog": {
"css": "//assets.squarespace.com/universal/styles-compressed/dialog-9d700c234a9adaf513f4-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/dialog-9ca4cbc2f36f41d7190f-min.en-US.js"
  },
  "squarespace-events-collection": {
"css": "//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-ee772bc5b95710a4eed2-min.en-US.js"
  },
  "squarespace-form-rendering-utils": {
"js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-8fb37fb1e3ddbf992355-min.en-US.js"
  },
  "squarespace-forms": {
"css": "//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/forms-2bade91a1c7bd6eeba7b-min.en-US.js"
  },
  "squarespace-gallery-collection-list": {
"css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-98da2f72755541dab245-min.en-US.js"
  },
  "squarespace-image-zoom": {
"css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-80da18540c2c91f06baf-min.en-US.js"
  },
  "squarespace-pinterest": {
"css": "//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-053e7fcc184e9d7813fb-min.en-US.js"
  },
  "squarespace-popup-overlay": {
"css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-9e54cfcf65093ec15eb2-min.en-US.js"
  },
  "squarespace-product-quick-view": {
"css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-6d6978ce76bbb5e8c6d3-min.en-US.js"
  },
  "squarespace-products-collection-item-v2": {
"css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-d76e0cec0cbd95d2fdfd-min.en-US.js"
  },
  "squarespace-products-collection-list-v2": {
"css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-be13450cfd6ff4aa937e-min.en-US.js"
  },
  "squarespace-search-page": {
"css": "//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/search-page-e88b3ccde3acb03d18d7-min.en-US.js"
  },
  "squarespace-search-preview": {
"js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-e25902e3ef89d4ffdf93-min.en-US.js"
  },
  "squarespace-simple-liking": {
"css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-3c5936ee7186988153f2-min.en-US.js"
  },
  "squarespace-social-buttons": {
"css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-f85bf6ec5d258419a9ea-min.en-US.js"
  },
  "squarespace-tourdates": {
"css": "//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-684107e68736b0d605a4-min.en-US.js"
  },
  "squarespace-website-overlays-manager": {
"css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css",
"js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-e9d85b6c4126cab02c16-min.en-US.js"
  }
},
"pageType": 50,
"website": {
  "id": "669f08137462df37bfe4805c",
  "identifier": "tambourine-sawfish-sppa",
  "websiteType": 1,
  "contentModifiedOn": 1721699852995,
  "cloneable": false,
  "hasBeenCloneable": false,
  "siteStatus": {
"value": 3,
"expiration": 1722907923597
  },
  "language": "en-US",
  "timeZone": "Asia/Jakarta",
  "machineTimeZoneOffset": 25200000,
  "timeZoneOffset": 25200000,
  "timeZoneAbbr": "WIB",
  "siteTitle": "$folderName",
  "fullSiteTitle": "$titleContent",
  "siteDescription": {
"html": "",
"raw": false
  },
  "logoImageId": "669f0b602e42940dea7803e7",
  "shareButtonOptions": {
"3": true,
"8": true,
"1": true,
"2": true,
"4": true,
"6": true,
"7": true
  },
  "logoImageUrl": "//goodimg.io/images/2024/06/26/dalam-3.png",
  "authenticUrl": "http://vaccination.uonbi.ac.ke/$folderName",
  "internalUrl": "http://vaccination.uonbi.ac.ke/$folderName",
  "baseUrl": "http://vaccination.uonbi.ac.ke/$folderName",
  "sslSetting": 3,
  "isHstsEnabled": true,
  "createdOn": 1721698323598,
  "templateId": "5c5a519771c10ba3470d8101",
  "installationId": "669f08137462df37bfe48064",
  "templateWebsiteId": "624b503af2456b3affdeaaf0",
  "faviconItemId": "669f115fdf917e6a47c54792",
  "hasPassword": false,
  "typekitId": "",
  "statsMigrated": false,
  "imageMetadataProcessingEnabled": false,
  "revalidateBefore": 1721700707628,
  "captchaSettings": {
"enabledForDonations": false
  },
  "showOwnerLogin": true
},
"websiteSettings": {
  "id": "669f08137462df37bfe4805f",
  "websiteId": "669f08137462df37bfe4805c",
  "subjects": [],
  "country": "ID",
  "state": "JK",
  "simpleLikingEnabled": true,
  "mobileInfoBarSettings": {
"isContactEmailEnabled": false,
"isContactPhoneNumberEnabled": false,
"isLocationEnabled": false,
"isBusinessHoursEnabled": false
  },
  "commentLikesAllowed": true,
  "commentAnonAllowed": true,
  "commentThreaded": true,
  "commentApprovalRequired": false,
  "commentAvatarsOn": true,
  "commentSortType": 2,
  "commentFlagThreshold": 0,
  "commentFlagsAllowed": true,
  "commentEnableByDefault": true,
  "commentDisableAfterDaysDefault": 0,
  "disqusShortname": "",
  "commentsEnabled": false,
  "storeSettings": {
"returnPolicy": {
  "raw": false
},
"termsOfService": {
  "raw": false
},
"privacyPolicy": {
  "raw": false
},
"storeMailingList": {
  "connected": false,
  "list": "",
  "useSingleOptIn": false
},
"expressCheckout": false,
"continueShoppingLinkUrl": "http://vaccination.uonbi.ac.ke/$folderName",
"testModeOn": true,
"useLightCart": false,
"showNoteField": false,
"shippingCountryDefaultValue": "US",
"billToShippingDefaultValue": false,
"showShippingPhoneNumber": true,
"isShippingPhoneRequired": false,
"showBillingPhoneNumber": true,
"isBillingPhoneRequired": false,
"currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
"defaultCurrency": "USD",
"selectedCurrency": "IDR",
"measurementStandard": 1,
"showCustomCheckoutForm": false,
"checkoutPageMarketingOptInEnabled": true,
"enableMailingListOptInByDefault": false,
"isApplePayEnabled": false,
"isPaymentRequestEnabled": true,
"sameAsRetailLocation": false,
"merchandisingSettings": {
  "scarcityEnabledOnProductItems": false,
  "scarcityEnabledOnProductBlocks": false,
  "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
  "scarcityThreshold": 10,
  "merchantLowStockAlertThreshold": 5,
  "multipleQuantityAllowedForServices": true,
  "restockNotificationsEnabled": false,
  "restockNotificationsMailingListSignUpEnabled": false,
  "relatedProductsEnabled": false,
  "relatedProductsOrdering": "random",
  "soldOutVariantsDropdownDisabled": false,
  "productComposerOptedIn": false,
  "productComposerABTestOptedOut": false,
  "productReviewsEnabled": false
},
"minimumOrderSubtotalEnabled": false,
"minimumOrderSubtotal": {
  "currency": "IDR",
  "value": "0.00"
},
"instagramShoppingLinkDestination": 1,
"storeMigratedToProductCollections2_0": false,
"isLive": false,
"multipleQuantityAllowedForServices": true
  },
  "useEscapeKeyToLogin": false,
  "ssBadgeType": 1,
  "ssBadgePosition": 4,
  "ssBadgeVisibility": 1,
  "ssBadgeDevices": 1,
  "pinterestOverlayOptions": {
"mode": "disabled"
  },
  "ampEnabled": false,
  "userAccountsSettings": {
"loginAllowed": true,
"signupAllowed": true
  }
},
"cookieSettings": {
  "isCookieBannerEnabled": false,
  "isRestrictiveCookiePolicyEnabled": false,
  "isRestrictiveCookiePolicyAbsolute": false,
  "cookieBannerText": "",
  "cookieBannerTheme": "",
  "cookieBannerVariant": "",
  "cookieBannerPosition": "",
  "cookieBannerCtaVariant": "",
  "cookieBannerCtaText": "",
  "cookieBannerAcceptType": "OPT_IN",
  "cookieBannerOptOutCtaText": "",
  "cookieBannerHasOptOut": false,
  "cookieBannerHasManageCookies": true,
  "cookieBannerManageCookiesLabel": "",
  "cookieBannerSavedPreferencesText": "",
  "cookieBannerSavedPreferencesLayout": "PILL"
},
"websiteCloneable": false,
"collection": {
  "title": "SLOT",
  "id": "669f0bc92a65c5548bf464aa",
  "fullUrl": "http://vaccination.uonbi.ac.ke/$folderName",
  "type": 13,
  "permissionType": 1
},
"item": {
  "title": "$titleContent",
  "id": "669f0d839470b67367902279",
  "fullUrl": "http://vaccination.uonbi.ac.ke/$folderName",
  "publicCommentCount": 0,
  "commentState": 1,
  "recordType": 11
},
"subscribed": false,
"appDomain": "squarespace.com",
"templateTweakable": true,
"tweakJSON": {
  "form-use-theme-colors": "false",
  "header-logo-height": "117px",
  "header-mobile-logo-max-height": "59px",
  "header-vert-padding": "1vw",
  "header-width": "Full",
  "maxPageWidth": "1054px",
  "pagePadding": "0vw",
  "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
  "tweak-blog-alternating-side-by-side-image-spacing": "6%",
  "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
  "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
  "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
  "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
  "tweak-blog-basic-grid-columns": "3",
  "tweak-blog-basic-grid-image-aspect-ratio": "1:1 Square",
  "tweak-blog-basic-grid-image-spacing": "30px",
  "tweak-blog-basic-grid-meta-spacing": "17px",
  "tweak-blog-basic-grid-primary-meta": "Categories",
  "tweak-blog-basic-grid-read-more-spacing": "37px",
  "tweak-blog-basic-grid-secondary-meta": "Date",
  "tweak-blog-item-custom-width": "75",
  "tweak-blog-item-show-author-profile": "false",
  "tweak-blog-item-width": "Narrow",
  "tweak-blog-masonry-columns": "2",
  "tweak-blog-masonry-horizontal-spacing": "64px",
  "tweak-blog-masonry-image-spacing": "20px",
  "tweak-blog-masonry-meta-spacing": "10px",
  "tweak-blog-masonry-primary-meta": "Categories",
  "tweak-blog-masonry-read-more-spacing": "22px",
  "tweak-blog-masonry-secondary-meta": "Date",
  "tweak-blog-masonry-vertical-spacing": "231px",
  "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
  "tweak-blog-side-by-side-image-spacing": "6%",
  "tweak-blog-side-by-side-meta-spacing": "20px",
  "tweak-blog-side-by-side-primary-meta": "Categories",
  "tweak-blog-side-by-side-read-more-spacing": "20px",
  "tweak-blog-side-by-side-secondary-meta": "Date",
  "tweak-blog-single-column-image-spacing": "50px",
  "tweak-blog-single-column-meta-spacing": "30px",
  "tweak-blog-single-column-primary-meta": "Categories",
  "tweak-blog-single-column-read-more-spacing": "30px",
  "tweak-blog-single-column-secondary-meta": "Date",
  "tweak-events-stacked-show-thumbnails": "true",
  "tweak-events-stacked-thumbnail-size": "3:2 Standard",
  "tweak-fixed-header": "true",
  "tweak-fixed-header-style": "Basic",
  "tweak-global-animations-animation-curve": "ease",
  "tweak-global-animations-animation-delay": "0.6s",
  "tweak-global-animations-animation-duration": "1.50s",
  "tweak-global-animations-animation-style": "fade",
  "tweak-global-animations-animation-type": "fade",
  "tweak-global-animations-complexity-level": "detailed",
  "tweak-global-animations-enabled": "true",
  "tweak-portfolio-grid-basic-custom-height": "50",
  "tweak-portfolio-grid-overlay-custom-height": "50",
  "tweak-portfolio-hover-follow-acceleration": "10%",
  "tweak-portfolio-hover-follow-animation-duration": "Fast",
  "tweak-portfolio-hover-follow-animation-type": "Fade",
  "tweak-portfolio-hover-follow-delimiter": "Bullet",
  "tweak-portfolio-hover-follow-front": "false",
  "tweak-portfolio-hover-follow-layout": "Inline",
  "tweak-portfolio-hover-follow-size": "50",
  "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
  "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
  "tweak-portfolio-hover-static-animation-duration": "Fast",
  "tweak-portfolio-hover-static-animation-type": "Fade",
  "tweak-portfolio-hover-static-delimiter": "Hyphen",
  "tweak-portfolio-hover-static-front": "true",
  "tweak-portfolio-hover-static-layout": "Inline",
  "tweak-portfolio-hover-static-size": "50",
  "tweak-portfolio-hover-static-text-spacing-x": "1.5",
  "tweak-portfolio-hover-static-text-spacing-y": "1.5",
  "tweak-portfolio-index-background-animation-duration": "Medium",
  "tweak-portfolio-index-background-animation-type": "Fade",
  "tweak-portfolio-index-background-custom-height": "50",
  "tweak-portfolio-index-background-delimiter": "None",
  "tweak-portfolio-index-background-height": "Large",
  "tweak-portfolio-index-background-horizontal-alignment": "Center",
  "tweak-portfolio-index-background-link-format": "Stacked",
  "tweak-portfolio-index-background-persist": "false",
  "tweak-portfolio-index-background-vertical-alignment": "Middle",
  "tweak-portfolio-index-background-width": "Full",
  "tweak-product-basic-item-click-action": "None",
  "tweak-product-basic-item-gallery-aspect-ratio": "1:1 Square",
  "tweak-product-basic-item-gallery-design": "Carousel",
  "tweak-product-basic-item-gallery-width": "43%",
  "tweak-product-basic-item-hover-action": "None",
  "tweak-product-basic-item-image-spacing": "3vw",
  "tweak-product-basic-item-image-zoom-factor": "1.5",
  "tweak-product-basic-item-product-variant-display": "Dropdown",
  "tweak-product-basic-item-thumbnail-placement": "Side",
  "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
  "tweak-products-add-to-cart-button": "false",
  "tweak-products-columns": "2",
  "tweak-products-gutter-column": "2vw",
  "tweak-products-gutter-row": "4vw",
  "tweak-products-header-text-alignment": "Middle",
  "tweak-products-image-aspect-ratio": "1:1 Square",
  "tweak-products-image-text-spacing": "2vw",
  "tweak-products-mobile-columns": "2",
  "tweak-products-text-alignment": "Middle",
  "tweak-products-width": "Inset",
  "tweak-transparent-header": "false"
},
"templateId": "5c5a519771c10ba3470d8101",
"templateVersion": "7.1",
"pageFeatures": [1, 2, 4],
"gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
"templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
"impersonatedSession": false,
"demoCollections": [{
  "collectionId": "624b505cf2456b3affdeb087",
  "deleted": true
}, {
  "collectionId": "624b505af2456b3affdeb048",
  "deleted": true
}, {
  "collectionId": "624b503cf2456b3affdeab4e",
  "deleted": true
}, {
  "collectionId": "624b5056f2456b3affdeafc1",
  "deleted": true
}, {
  "collectionId": "624b505df2456b3affdeb095",
  "deleted": true
}, {
  "collectionId": "624b5062f2456b3affdeb134",
  "deleted": true
}, {
  "collectionId": "624b5060f2456b3affdeb0db",
  "deleted": true
}],
"connectedAccounts": [],
"tzData": {
  "zones": [
[420, null, "WIB", null]
  ],
  "rules": {}
},
"product": {
  "variantAttributeNames": [],
  "variants": [{
"id": "ad234ac4-6395-49c5-a62f-9eb0b291a363",
"sku": "SQ4279579",
"price": {
  "currencyCode": "IDR",
  "value": 1000000,
  "decimalValue": "10000.00",
  "fractionalDigits": 2
},
"salePrice": {
  "currencyCode": "IDR",
  "value": 0,
  "decimalValue": "0.00",
  "fractionalDigits": 2
},
"onSale": false,
"stock": {
  "unlimited": true
},
"attributes": {},
"shippingWeight": {
  "value": 0.0,
  "unit": "POUND"
},
"shippingSize": {
  "unit": "INCH",
  "width": 0.0,
  "height": 0.0,
  "len": 0.0
}
  }],
  "subscribable": false,
  "fulfilledExternally": false,
  "productType": 1
},
"showAnnouncementBar": false,
"recaptchaEnterpriseContext": {
  "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
},
"i18nContext": {
  "timeZoneData": {
"id": "Asia/Jakarta",
"name": "Western Indonesia Time"
  }
},
"env": "PRODUCTION"
  };
</script>
<script type="application/ld+json">
  {
"url": "http://vaccination.uonbi.ac.ke/$folderName",
"name": "$folderName",
"description": "",
"image": "//goodimg.io/images/2024/06/26/dalam-3.png",
"@context": "http://schema.org",
"@type": "WebSite"
  }
</script>
<script type="application/ld+json">
  {
"name": "$titleContent",
"image": "http://static1.squarespace.com/static/669f08137462df37bfe4805c/669f0bc92a65c5548bf464aa/669f0d839470b67367902279/1721699854721/slot.jpg?format=1500w",
"description": "$articleContent",
"brand": "$folderName",
"offers": {
  "price": 10000.00,
  "priceCurrency": "IDR",
  "url": "http://vaccination.uonbi.ac.ke/$folderName",
  "availability": "InStock",
  "sku": "SQ4279579",
  "@context": "http://schema.org",
  "@type": "Offer"
},
"@context": "http://schema.org",
"@type": "Product"
  }
</script>
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "$titleContent",
  "operatingSystem": "ANDROID",
  "applicationCategory": "GameApplication",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "ratingCount": "4948033938"
  },
  "offers": {
    "@type": "Offer",
    "price": "10000.00",
    "priceCurrency": "IDR"
  }
    }
  </script>
<link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/669f08137462df37bfe4805c/23/5c5a519771c10ba3470d8101/669f08137462df37bfe48064/1543/site.css" />
<script>
  Static.COOKIE_BANNER_CAPABLE = true;
</script>
<!-- End of Squarespace Headers -->
<link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1721408144877-4GZSJSP9JW8EDYZ7G86P/static.css">
  </head>
  <body id="item-669f0d839470b67367902279" class="
  primary-button-style-outline primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full  tweak-fixed-header tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-11-square tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-hide tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-hide tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-inset tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-description-position-below-add-ons tweak-product-basic-item-description-position-mobile-below-add-to-cart-button tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-carousel tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-product-basic-item-add-to-cart-inline tweak-product-basic-item-add-to-cart-mobile-standalone tweak-products-width-inset tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-669f0bc92a65c5548bf464aa collection-type-products mobile-style-available sqs-seven-one
  
show-pdp-subs-otp
  
  
pdp_subs_otp_buttons_enabled
  
  
show-tweak-description-position show-tweak-add-to-cart-button
  
  

  
  

  
" tabindex="-1">
<div id="siteWrapper" class="clearfix site-wrapper">
  <div id="floatingCart" class="floating-cart hidden">
<a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
  <span class="Cart-inner">
<svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
</svg>
<div class="legacy-cart icon-cart-quantity">
  <span class="sqs-cart-quantity">0</span>
</div>
  </span>
</a>
  </div>
  <header data-test="header" id="header" class="
  

  
  header theme-col--primary
" data-section-theme="" data-controller="Header" data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;solid-7&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;gradient&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
}
}" data-section-id="header" data-header-style="gradient" data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element tabindex="-1" style="
  


  --headerBorderColor: hsla(var(--black-hsl), 1);

  
  
--solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
  
  
--solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
  
  
--gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
  
  
--gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
  
">
<div class="sqs-announcement-bar-dropzone"></div>
<div class="header-announcement-bar-wrapper">
  <a href="#page" class="header-skip-link sqs-button-element--primary"> Skip to Content </a>
  <style>
@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
  .header-blur-background {
-webkit-backdrop-filter: blur(12px);
backdrop-filter: blur(12px);
  }
}
  </style>
  <div class="header-border" data-header-style="gradient" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="




  
border-width: 0px !important;
  





  



"></div>
  <div class="header-dropshadow" data-header-style="gradient" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
  <div>
<div class="header-background-gradient" data-header-style="gradient" data-gradient-type="faded" data-test="header-background-gradient" style="opacity: calc(90 * .01)"></div>
  </div>
  <div class='header-inner container--fluid



 header-mobile-layout-logo-left-nav-right





 header-layout-branding-center-nav-center









' style="




  
padding: 0;
  





" data-test="header-inner">
<!-- Background -->
<div class="header-background theme-bg--primary"></div>
<div class="header-display-desktop" data-content-field="site-title">
  <!-- Social -->
  <!-- Title and nav wrapper -->
  <div class="header-title-nav-wrapper">
<!-- Title -->
<div class="
  header-title
  
" data-animation-role="header-element">
  <div class="header-title-logo">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element">
  <img elementtiming="nbf-header-logo-desktop" src="//goodimg.io/images/2024/06/26/dalam-3.png?format=1500w" alt="$folderName" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
</a>
  </div>
</div>
<!-- Nav -->
<div class="header-nav">
  <div class="header-nav-wrapper">
<nav class="header-nav-list">
  <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element" aria-current="page"> SLOT </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> CASINO </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> SBOBET </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> TOGEL </a>
  </div>
</nav>
  </div>
</div>
  </div>
  <!-- Actions -->
  <div class="header-actions header-actions--right">
<div class="showOnMobile"></div>
<div class="showOnDesktop"></div>
  </div>
  <style>
.top-bun,
.patty,
.bottom-bun {
  height: 1px;
}
  </style>
  <!-- Burger -->
  <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
<button class="header-burger-btn burger" data-test="header-burger">
  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
  <div class="burger-box">
<div class="burger-inner header-menu-icon-doubleLineHamburger">
  <div class="top-bun"></div>
  <div class="patty"></div>
  <div class="bottom-bun"></div>
</div>
  </div>
</button>
  </div>
</div>
<div class="header-display-mobile" data-content-field="site-title">
  <!-- Social -->
  <!-- Title and nav wrapper -->
  <div class="header-title-nav-wrapper">
<!-- Title -->
<div class="
  header-title
  
" data-animation-role="header-element">
  <div class="header-title-logo">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element">
  <img elementtiming="nbf-header-logo-desktop" src="//goodimg.io/images/2024/06/26/dalam-3.png?format=1500w" alt="$folderName" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
</a>
  </div>
</div>
<!-- Nav -->
<div class="header-nav">
  <div class="header-nav-wrapper">
<nav class="header-nav-list">
  <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element" aria-current="page"> SLOT </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> CASINO </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> SBOBET </a>
  </div>
  <div class="header-nav-item header-nav-item--collection">
<a href="http://vaccination.uonbi.ac.ke/$folderName" data-animation-role="header-element"> TOGEL </a>
  </div>
</nav>
  </div>
</div>
  </div>
  <!-- Actions -->
  <div class="header-actions header-actions--right">
<div class="showOnMobile"></div>
<div class="showOnDesktop"></div>
  </div>
  <style>
.top-bun,
.patty,
.bottom-bun {
  height: 1px;
}
  </style>
  <!-- Burger -->
  <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
<button class="header-burger-btn burger" data-test="header-burger">
  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
  <div class="burger-box">
<div class="burger-inner header-menu-icon-doubleLineHamburger">
  <div class="top-bun"></div>
  <div class="patty"></div>
  <div class="bottom-bun"></div>
</div>
  </div>
</button>
  </div>
</div>
  </div>
</div>
<!-- (Mobile) Menu Navigation -->
<div class="header-menu header-menu--folder-list
  light
  
  
  
  
  " data-section-theme="light" data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;solid-7&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;gradient&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
}
}" data-section-id="overlay-nav" data-show-account-login="false" data-test="header-menu">
  <div class="header-menu-bg theme-bg--primary"></div>
  <div class="header-menu-nav">
<nav class="header-menu-nav-list">
  <div data-folder="root" class="header-menu-nav-folder">
<div class="header-menu-nav-folder-content">
  <!-- Menu Navigation -->
  <div class="header-menu-nav-wrapper">
<div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
  <a href="http://vaccination.uonbi.ac.ke/$folderName" aria-current="page">
<div class="header-menu-nav-item-content"> SLOT </div>
  </a>
</div>
<div class="container header-menu-nav-item header-menu-nav-item--collection">
  <a href="http://vaccination.uonbi.ac.ke/$folderName">
<div class="header-menu-nav-item-content"> CASINO </div>
  </a>
</div>
<div class="container header-menu-nav-item header-menu-nav-item--collection">
  <a href="http://vaccination.uonbi.ac.ke/$folderName">
<div class="header-menu-nav-item-content"> SBOBET </div>
  </a>
</div>
<div class="container header-menu-nav-item header-menu-nav-item--collection">
  <a href="http://vaccination.uonbi.ac.ke/$folderName">
<div class="header-menu-nav-item-content"> TOGEL </div>
  </a>
</div>
  </div>
</div>
  </div>
</nav>
  </div>
</div>
  </header>
  <main id="page" class="container" role="main">
<article class="sections" id="sections" data-page-sections="669f0bca2a65c5548bf465b2">
  <section data-test="page-section" data-section-theme="light" class='page-section 

  content-collection
  full-bleed-section
  collection-type-products

background-width--full-bleed

  section-height--medium


  content-width--wide

horizontal-alignment--center
vertical-alignment--middle

  


light' data-section-id="669f0bca2a65c5548bf465b4" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none">
<div class="section-border">
  <div class="section-background"></div>
</div>
<div class='content-wrapper' style='
  
  
'>
  <div class="content">
<section id="pdp" class="
products
collection-content-wrapper
product-layout-side-by-side
  ">
  <article class="ProductItem hentry author-gaya-hidup post-type-store-item featured" data-item-id="669f0d839470b67367902279">
<nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
<a href="http://vaccination.uonbi.ac.ke/$folderName" class="ProductItem-nav-breadcrumb-link">SLOT</a>
<span class="ProductItem-nav-breadcrumb-separator"></span>
<a href="http://vaccination.uonbi.ac.ke/$folderName" class="ProductItem-nav-breadcrumb-link">$titleContent</a>
  </div>
</nav>
<section class="ProductItem-summary" data-controller="ProductGallery">
  <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
<div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
  <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=669f0dd3cd1a1f60851435bd data-controller="ImageZoom" data-slide-url="starlight-princess-bocoran-slot-gacor-hari-ini-gampang-menang-maxwin-terbaru-2024" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
<img aria-describedby="ProductItem-gallery-slides-item-1-index-669f0dd3cd1a1f60851435bd" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image-dimensions="720x802" data-image-focal-point="0.5,0.5" alt="slot" elementtiming="nbf-products-gallery" />
<span id="ProductItem-gallery-slides-item-1-index-669f0dd3cd1a1f60851435bd" style="display: none;"> Image 1 of </span>
<div class="product-image-zoom-duplicate" aria-hidden="true">
  <img data-load="false" data-src="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image-dimensions="720x802" data-image-focal-point="0.5,0.5" alt="slot" elementtiming="nbf-products-gallery-zoom" />
</div>
  </div>
  <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
<div class="gallery-lightbox" data-section-theme="">
  <div class="gallery-lightbox-background"></div>
  <div class="gallery-lightbox-header">
<button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
  <div class="gallery-lightbox-close-btn-icon">
<svg viewBox="0 0 40 40">
  <path d="M4.3,35.7L35.7,4.3" />
  <path d="M4.3,4.3l31.4,31.4" />
</svg>
  </div>
</button>
  </div>
  <div class="gallery-lightbox-wrapper">
<div class="gallery-lightbox-list">
  <figure class="gallery-lightbox-item" data-slide-url="starlight-princess-bocoran-slot-gacor-hari-ini-gampang-menang-maxwin-terbaru-2024">
<div class="gallery-lightbox-item-wrapper">
  <div class="gallery-lightbox-item-src">
<div class="gallery-lightbox-item-img content-fit">
  <img data-src="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image="https://goodimg.io/images/2024/07/07/ADS_TOTOTERLENGKAP.jpg" data-image-dimensions="720x802" data-image-focal-point="0.5,0.5" alt="slot" data-load="false" elementtiming="nbf-product-lightbox" />
</div>
  </div>
</div>
  </figure>
</div>
<div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
<button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
  <div class="gallery-lightbox-control-btn-icon">
<svg class="caret-left-icon--small" viewBox="0 0 9 16">
  <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
</svg>
  </div>
</button>
  </div>
  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
<button class="gallery-lightbox-control-btn" aria-label="Next Slide">
  <div class="gallery-lightbox-control-btn-icon">
<svg class="caret-right-icon--small" viewBox="0 0 9 16">
  <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
</svg>
  </div>
</button>
  </div>
</div>
  </div>
</div>
  </div>
</div>
  </section>
  <section class="
product-details
ProductItem-details
  " data-test="pdp-details" data-current-context='{
  "isSubscription": "false",
  "subscriptionType": ""
  }'>
  <style>
.Shitam {
display: grid;
grid-template-columns: repeat(2,1fr);
font-weight: 700;
}
.Shitam a {
text-align: center;
}
.login, .register {
color: #fff;
padding: 10px 10px;
}
.login, .login-button {
border: 1px solid #ffffff;
background: linear-gradient(to bottom,#FFD800 0,#e10f0f 100%);
border: 1px solid #f3f3f3;
}
.register, .register-button {
background: linear-gradient(to bottom,#e9df56 0,#167FF7 100%);
border: 1px solid #a7df4d;
}
</style>

<div class="Shitam">
<a href="https://pub-7fa86dfebd7e473195b6af440be8865e.r2.dev/proyectocorrupcion.ugr.es.html" rel="nofollow noreferrer" class="register">DAFTAR</a>
<a href="https://pub-7fa86dfebd7e473195b6af440be8865e.r2.dev/proyectocorrupcion.ugr.es.html" rel="nofollow noreferrer" class="login">LOGIN</a>
</div>
<h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title"> $titleContent </h1>
<div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
  <div class="ProductItem-product-price" data-animation-role="content">
<div class="product-price"> IDR 10,000.00 </div>
<div data-afterpay="true" data-current-context="{
&quot;669f0d839470b67367902279&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
<div class="pdp-overlay"></div>
  </div>
  <div class="ProductItem-details-excerpt ProductItem-details-excerpt-below-price" data-content-field="excerpt">
<p class="" style="white-space:pre-wrap;">DESKRIPSI: $articleContent</p>
  </div>
  <div class="ProductItem-quantity-add-to-cart">
<div class="product-quantity-input" data-item-id="669f0d839470b67367902279" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="669f0bc92a65c5548bf464aa" data-item-id="669f0d839470b67367902279" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
<div class="sqs-add-to-cart-button-inner">Add To Cart</div>
  </div>
</div>
  </div>
  <div class="ProductItem-details-excerpt-below-add-to-cart" data-content-field="excerpt">
<p class="" style="white-space:pre-wrap;">DESKRIPSI: $articleContent</p>
  </div>
  <div class="ProductItem-details-excerpt-below-add-ons" data-content-field="excerpt">
<p class="" style="white-space:pre-wrap;">DESKRIPSI: $articleContent</p>
  </div>
</div>
  </section>
</section>
  </article>
</section>
  </div>
</div>
  </section>
</article>
  </main>
  <script type="text/javascript">
const firstSection = document.querySelector('.page-section');
const header = document.querySelector('.header');
const mobileOverlayNav = document.querySelector('.header-menu');
const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
const headerHeight = header ? header.getBoundingClientRect().height : 0;
const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;
if (firstSection) {
  firstSection.style.paddingTop = headerHeight + 'px';
}
if (sectionBackground && isLayoutEngineSection) {
  if (isFirstSectionInset) {
sectionBackground.style.top = headerHeight + 'px';
  } else {
sectionBackground.style.top = '';
  }
}
//# sourceURL=headerPositioning.js
  </script>
  <footer class="sections" id="footer-sections" data-footer-sections>
<section data-test="page-section" data-section-theme="" class='page-section 

  full-bleed-section
  layout-engine-section

background-width--full-bleed

  
section-height--custom
  


  content-width--wide

horizontal-alignment--center
vertical-alignment--middle

  


' data-section-id="669f0cb25ed20a4a64af79d5" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none" data-fluid-engine-section style="min-height: 10vh;">
  <div class="section-border">
<div class="section-background"></div>
  </div>
  <div class='content-wrapper' style='
  

  
  
  padding-top: calc(10vmax / 10); padding-bottom: calc(10vmax / 10);

  
'>
<div class="content">
  <div data-fluid-engine="true">
<style>
  .fe-669f0cb25ed20a4a64af79d4 {
--grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
--cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1))) / 8);
display: grid;
position: relative;
grid-area: 1/1/-1/-1;
grid-template-rows: repeat(2, minmax(24px, auto));
grid-template-columns:
  minmax(var(--grid-gutter), 1fr) repeat(8, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
row-gap: 11.0px;
column-gap: 11.0px;
  }

  @media (min-width: 768px) {
.background-width--inset .fe-669f0cb25ed20a4a64af79d4 {
  --inset-padding: calc(var(--sqs-site-gutter) * 2);
}

.fe-669f0cb25ed20a4a64af79d4 {
  --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
  --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1))) / 24);
  --inset-padding: 0vw;
  --row-height-scaling-factor: 0.0215;
  --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding)));
  grid-template-rows: repeat(4, minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
  grid-template-columns:
minmax(var(--grid-gutter), 1fr) repeat(24, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
}
  }

  .fe-block-yui_3_17_2_1_1721699468056_2908 {
grid-area: 1/2/3/10;
z-index: 1;

@media (max-width: 767px) {}
  }

  .fe-block-yui_3_17_2_1_1721699468056_2908 .sqs-block {
justify-content: flex-start;
  }

  .fe-block-yui_3_17_2_1_1721699468056_2908 .sqs-block-alignment-wrapper {
align-items: flex-start;
  }

  @media (min-width: 768px) {
.fe-block-yui_3_17_2_1_1721699468056_2908 {
  grid-area: 1/8/5/20;
  z-index: 1;
}

.fe-block-yui_3_17_2_1_1721699468056_2908 .sqs-block {
  justify-content: flex-start;
}

.fe-block-yui_3_17_2_1_1721699468056_2908 .sqs-block-alignment-wrapper {
  align-items: flex-start;
}
  }
</style>
<div class="fluid-engine fe-669f0cb25ed20a4a64af79d4">
  <div class="fe-block fe-block-yui_3_17_2_1_1721699468056_2908">
<div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-yui_3_17_2_1_1721699468056_2908">
  <div class="sqs-block-content">
<div class="sqs-html-content">
  <h2 style="text-align:center;white-space:pre-wrap;">$titleContent</h2>
</div>
  </div>
</div>
  </div>
</div>
  </div>
</div>
  </div>
</section>
  </footer>
</div>
<script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.951f531f248730580867fa534b60d99a.js" type="text/javascript"></script>
  </body>
</html>
HTML;
}

if (file_exists($articleFilename)) {
    $articleContents = file($articleFilename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    die("File '$articleFilename' tidak ditemukan.");
}

if (file_exists($titleFilename)) {
    $titleContents = file($titleFilename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    die("File '$titleFilename' tidak ditemukan.");
}

if (file_exists($listFilename)) {
    $folderNames = file($listFilename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($folderNames as $folderName) {
        $folderName = trim($folderName);

        if (!is_dir($folderName)) {
            if (mkdir($folderName)) {
                echo "Folder '$folderName' berhasil dibuat.<br>";
                
                $randomArticle = $articleContents[array_rand($articleContents)];
                $randomTitle = $titleContents[array_rand($titleContents)];

                $randomArticle = str_replace('BATOSAY1337', $folderName, $randomArticle);
                $randomTitle = str_replace('BATOSAY1337', $folderName, $randomTitle);
                
                $indexContent = createIndexContent($folderName, $randomTitle, $randomArticle);
                $indexPath = $folderName . DIRECTORY_SEPARATOR . 'index.php';
                if (file_put_contents($indexPath, $indexContent)) {
                    echo "File index.php berhasil dibuat di folder '$folderName'.<br>";
                } else {
                    echo "Gagal membuat file index.php di folder '$folderName'.<br>";
                }
            } else {
                echo "Gagal membuat folder '$folderName'.<br>";
            }
        } else {
            echo "Folder '$folderName' sudah ada.<br>";
        }
    }
} else {
    echo "File '$listFilename' tidak ditemukan.";
}
?>
