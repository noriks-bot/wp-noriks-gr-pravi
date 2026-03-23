<?php
/**
 * Template Name: Vigo Checkout (Standalone)
 * Description: Pixel-perfect vigoshop.gr checkout replica - standalone HTML, no WP template.
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Output clean HTML directly - no wp_head(), no WP template
?>
<!DOCTYPE html>
<html lang="el" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="pingback" href="">
    <title>Checkout &#8211; Noriks</title>
<style>tr.cart-discount.coupon-get1free .amount{ display:none;}</style><meta name='robots' content='max-image-preview:large, noindex, follow' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	        <meta name="robots" content="noindex, nofollow"><link rel='dns-prefetch' href='//widget.trustpilot.com' />
<link rel='dns-prefetch' href='//static.klaviyo.com' />
<link rel='dns-prefetch' href='//js.braintreegateway.com' />
<meta name="title" content="Ολοκληρώστε την αγορά" />
<meta name="description" content="Ό,τι χρειάζεστε σε ένα μέρος. Εξερευνήστε μεγάλη ποικιλία προϊόντων στις χαμηλότερες τιμές. Κάντε κλικ τώρα και απολαύστε τις καλύτερες προσφορές!" />
<meta name="image" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png" />
<meta property="og:locale" content="hr" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Ολοκληρώστε την αγορά" />
<meta property="og:description" content="Ό,τι χρειάζεστε σε ένα μέρος. Εξερευνήστε μεγάλη ποικιλία προϊόντων στις χαμηλότερες τιμές. Κάντε κλικ τώρα και απολαύστε τις καλύτερες προσφορές!" />
<meta property="og:image" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png" />
<meta property="og:image:alt" content="Vigoshop - Ολοκληρώστε την αγορά" />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='select2-css' href='https://vigoshop.gr/app/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='brands-styles-css' href='https://vigoshop.gr/app/plugins/woocommerce/assets/css/brands.css' type='text/css' media='all' />
<link rel='stylesheet' id='hsplus-child-style-css' href='https://vigoshop.gr/app/themes/hsplus-child/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='app-css' href='https://vigoshop.gr/app/themes/hsplus/dist/app-bb7116ca22.css' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-style-css' href='https://vigoshop.gr/app/themes/hsplus/assets/plugins/swiper/swiper.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='app-extra-css' href='https://vigoshop.gr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css' type='text/css' media='all' />
<link rel='stylesheet' id='agent-kc-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/agent-kc/css/agent-kc-d24968c5d8.css' type='text/css' media='all' />
<link rel='stylesheet' id='cart-warranty-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/cart-warranty/css/cart-warranty-294993db14.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-extra-triggers-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-extra-triggers/css/checkout-extra-triggers-8a82c39c7f.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-validation-styles-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-checkout-hr-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-consent-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/cookie-consent/css/cookie-consent-0f1f70401c.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-payment-notice-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/custom-payment-notice/css/custom-payment-notice-0baf6bff40.css' type='text/css' media='all' />
<link rel='stylesheet' id='header-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/header/css/header-f98b75e0d2.css' type='text/css' media='all' />
<link rel='stylesheet' id='hide-payments-test-product-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/hide-payments-test-product/css/hide-payments-test-product-e46f2e914d.css' type='text/css' media='all' />
<link rel='stylesheet' id='general-shop-elements-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/homepage-shop-elements/css/general-shop-elements-a82fb8d5a2.css' type='text/css' media='all' />
<link rel='stylesheet' id='lazy-load-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/image-lazy-load/css/lazy-load-4b6eac4005.css' type='text/css' media='all' />
<link rel='stylesheet' id='payment-methods-fixes-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/payment-methods-fixes/css/payment-methods-fixes-75bc076f0b.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-page-courier-info-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/product-page-courier-info/css/product-page-courier-info-96801577cc.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-page-warranty-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/product-page-warranty/css/product-page-warranty-7d50f99458.css' type='text/css' media='all' />
<link rel='stylesheet' id='sv-wc-payment-gateway-payment-form-v5_15_10-css' href='https://vigoshop.gr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/css/frontend/sv-wc-payment-gateway-payment-form.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wc-braintree-css' href='https://vigoshop.gr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/assets/css/frontend/wc-braintree.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='video-in-product-gallery-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/video-in-product-gallery/css/video-in-product-gallery-89309214b3.css' type='text/css' media='all' />
<link rel='stylesheet' id='abandoned-cart-restore-addons-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/abandoned-cart-restore-addons/css/abandoned-cart-restore-addons-740a577066.css' type='text/css' media='all' />
<link rel='stylesheet' id='cart-item-restore-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/cart-item-restore/css/cart-item-restore-b6a0f18b47.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-order-review-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-order-review/css/checkout-order-review-17423b66f5.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-timer-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-timer/css/checkout-timer-73c98a5995.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-upsell-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css' type='text/css' media='all' />
<link rel='stylesheet' id='coupon-banner-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/coupon-banner/css/coupon-banner-d56e152358.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-cta-settings-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/custom-cta-settings/css/custom-cta-settings-0fd450b106.css' type='text/css' media='all' />
<link rel='stylesheet' id='email-checkbox-subscription-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/email-checkbox-subscription/css/email-checkbox-subscription-1def327263.css' type='text/css' media='all' />
<link rel='stylesheet' id='free-shipping-above-quantity-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/free-shipping-above-quantity/css/free-shipping-above-quantity-02588a20ff.css' type='text/css' media='all' />
<link rel='stylesheet' id='loader-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/loader/css/loader-c25fc35077.css' type='text/css' media='all' />
<link rel='stylesheet' id='notice-test-product-only-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/notice-test-product-only/css/notice-test-product-only-21c486c451.css' type='text/css' media='all' />
<link rel='stylesheet' id='order-received-popup-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/order-received-popup/css/order-received-popup-c97d38fd18.css' type='text/css' media='all' />
<link rel='stylesheet' id='parcel-pickup-hr-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/parcel-pickup/css/parcel-pickup-hr-8754cf5c08.css' type='text/css' media='all' />
<link rel='stylesheet' id='extra-shipping-method-buttons-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/parcel-pickup/css/extra-shipping-method-buttons-093d5c786e.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-products-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-products-2009e19a3b.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-special-offer-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-545e3ee266.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-special-offer-homepage-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-homepage-eca0ed3481.css' type='text/css' media='all' />
<link rel='stylesheet' id='shipping-method-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css' type='text/css' media='all' />
<link rel='stylesheet' id='terms-and-conditions-link-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css' type='text/css' media='all' />
<link rel='stylesheet' id='virtual-products-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/virtual-products/css/virtual-products-ff847d8762.css' type='text/css' media='all' />
<link rel='stylesheet' id='quantity-discount-price-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/quantity-discount-price/css/quantity-discount-price-86d6e7d23e.css' type='text/css' media='all' />
<link rel='stylesheet' id='hsplus-css' href='https://vigoshop.gr/app/plugins/mk-abandoned/public/css/hsplus-public.css' type='text/css' media='all' />
<script type="text/javascript" src="https://vigoshop.gr/wp/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
<script type="text/javascript" src="https://vigoshop.gr/app/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js" id="selectWoo-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://vigoshop.gr/wp/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://vigoshop.gr/wp/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="https://vigoshop.gr/app/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js" id="wc-jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://vigoshop.gr/app/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js" id="wc-js-cookie-js" data-wp-strategy="defer"></script>
<link rel="icon" href="https://vigoshop.gr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://vigoshop.gr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://vigoshop.gr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://vigoshop.gr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-270x270.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/favicon-128.png" sizes="128x128"/>
    <link rel="icon" type="image/png" href="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/favicon-196x196.png" sizes="196x196"/>
    <meta name="application-name" content="vigoshop"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="https://vigoshop.gr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png"/>
    </head>
<body class="wp-singular page-template-default page page-id-6 wp-theme-hsplus wp-child-theme-hsplus-child  theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-vigoshop" data-hswooplus="10.3.7"  >

<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
          <!--          --><!--          <div class="vigo-cart-header-banner">-->
<!--            <div class="vigo-cart-header" id="vigo-slick-header">-->
<!--              <div class="vigo-slick-slide vigo-slick-slide-first">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-return.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-safe.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-delivery.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-payment.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        -->            </div>
  <div class='flex flex--middle flex--apart flex--gaps'>  </div>
</header>
<main id="content" class="main">
        <div class="container container--l checkout-container">

  <article class="post-6 page type-page status-publish hentry">
    <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="woocommerce-notices-wrapper"></div><div class="container container--xs bg--white wc-checkout-wrap ">
<style>
  
  </style>


<div class="before_form container container--xs">

  <form name="checkout" method="post" class="checkout woocommerce-checkout"
        action="#" enctype="multipart/form-data" aria-label="Πληρωμή">

    
              <div class="col2-set" id="customer_details">
        <div class="col-1 clearfix">
          <div class="woocommerce-billing-fields">
  
    <h3 class="checkout-billing-title">Πληρωμή και Αποστολή</h3>

  
  
  <div class="woocommerce-billing-fields__field-wrapper">
    <p class="form-row form-row-first form-group col-xs-12 validate-required" id="billing_first_name_field" data-priority="30"><label for="billing_first_name" class="required_field">Όνομα&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_first_name" id="billing_first_name" placeholder="Όνομα"  value="" aria-required="true" maxlength="80" autocomplete="given-name" /></span></p><p class="form-row form-row-last form-group col-xs-12 validate-required" id="billing_last_name_field" data-priority="40"><label for="billing_last_name" class="required_field">Επώνυμο&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_last_name" id="billing_last_name" placeholder="Επώνυμο"  value="" aria-required="true" maxlength="80" autocomplete="family-name" /></span></p><div class="form-row form-row-wide col-xs-12">Εισαγάγετε τη διεύθυνση όπου θα βρίσκεστε <b>μεταξύ 8:00 και 16:00</b>.</div><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="required_field">Οδός&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_address_1" id="billing_address_1" placeholder="Οδός"  value="" aria-required="true" maxlength="80" autocomplete="address-line1" /></span></p><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required" id="billing_address_2_field" data-priority="60"><label for="billing_address_2" class="screen-reader-text required_field">Αριθμός&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_address_2" id="billing_address_2" placeholder="Αριθμός"  value="" autocomplete="address-line2" maxlength="80" aria-required="true" /></span></p><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required validate-postcode" id="billing_postcode_field" data-priority="70"><label for="billing_postcode" class="required_field">Ταχυδρομικός κώδικας&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text form-input" name="billing_postcode" id="billing_postcode" placeholder="Ταχυδρομικός κώδικας"  value="" aria-required="true" maxlength="30" autocomplete="postal-code" /></span></p><p class="form-row form-row-wide dropdown form-group form-group col-xs-12 validate-required" id="billing_city_field" data-priority=""><label for="billing_city" class="required_field">Πόλη&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><select name="billing_city" id="billing_city" class="select form-input" aria-required="true" data-allow_clear="true" data-placeholder="Επιλέξτε πόλη">
							<option value=""  selected='selected'>Επιλέξτε πόλη</option>
						</select></span></p><p class="form-row form-row-wide form-group col-xs-12 validate-required validate-phone" id="billing_phone_field" data-priority="10"><label for="billing_phone" class="required_field">Τηλέφωνο&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text form-input" name="billing_phone" id="billing_phone" placeholder="Αριθμός κινητού τηλεφώνου"  value="" maxlength="17" aria-required="true" autocomplete="tel" /></span></p><p class="form-row form-row-wide form-group col-xs-12 validate-email" id="billing_email_field" data-priority="20"><label for="billing_email" class="">Διεύθυνση email&nbsp;<span class="optional">(προαιρετικό)</span></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text form-input" name="billing_email" id="billing_email" placeholder="Διεύθυνση email"  value="" maxlength="80" autocomplete="email" /></span></p><p class="form-row form-row-wide address-field form-group col-xs-12 validate-state" id="billing_state_field" data-priority="80"><label for="billing_state" class="">Περιφέρεια&nbsp;<span class="optional">(προαιρετικό)</span></label><span class="woocommerce-input-wrapper"><select name="billing_state" id="billing_state" class="state_select form-input" autocomplete="address-level1" data-placeholder="Επιλέξτε περιφέρεια"  data-input-classes="form-input" data-label="Περιφέρεια">
						<option value="">Επιλέξτε επιλογή&hellip;</option><option value="GR-I">Αττική</option><option value="GR-B">Κεντρική Μακεδονία</option><option value="GR-A">Ανατολική Μακεδονία και Θράκη</option><option value="GR-C">Δυτική Μακεδονία</option><option value="GR-D">Ήπειρος</option><option value="GR-E">Θεσσαλία</option><option value="GR-F">Ιόνια Νησιά</option><option value="GR-G">Δυτική Ελλάδα</option><option value="GR-H">Στερεά Ελλάδα</option><option value="GR-J">Πελοπόννησος</option><option value="GR-K">Βόρειο Αιγαίο</option><option value="GR-L">Νότιο Αιγαίο</option><option value="GR-M">Κρήτη</option></select></span></p><p class="form-row form-row-wide address-field update_totals_on_change form-group col-xs-12 validate-required" id="billing_country_field" data-priority="90"><label for="billing_country" class="required_field">Χώρα / Περιοχή&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><strong>Ελλάδα</strong><input type="hidden" name="billing_country" id="billing_country" value="GR" aria-required="true" autocomplete="do-not-autofill" class="country_to_state" readonly="readonly" /></span></p><p class="form-row kl_newsletter_checkbox_field form-group col-xs-12" id="kl_newsletter_checkbox_field" data-priority=""><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="kl_newsletter_checkbox" id="kl_newsletter_checkbox" value="1" class="input-checkbox form-input"  /> Sign me up to receive email updates and news&nbsp;<span class="optional">(προαιρετικό)</span></label></span></p><p class="form-row form-row-wide hsplus-checkout-field hsplus-checkout-field--no-top-margin hsplus-checkout-field--hidden" id="hsplus_accepts_marketing_field" data-priority="11"><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="hsplus_accepts_marketing" id="hsplus_accepts_marketing" value="1" class="input-checkbox woocommerce-form__input woocommerce-form__input-checkbox hsplus-checkbox"  /> Sign up for exclusive offers and news via text messages&nbsp;<span class="optional">(προαιρετικό)</span></label></span></p>  </div>

  </div>

        </div>

        <div class="col-2">
          <div class="woocommerce-shipping-fields">
	</div>
<div class="woocommerce-additional-fields">
	
	
		
			<h3>Dodatne informacije</h3>

		
		<div class="woocommerce-additional-fields__field-wrapper">
							<p class="form-row notes form-group col-xs-12" id="order_comments_field" data-priority=""><label for="order_comments" class="">Σημειώσεις παραγγελίας&nbsp;<span class="optional">(προαιρετικό)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text form-input" id="order_comments" placeholder="Σημειώσεις για την παραγγελία σας.  "  rows="2" cols="5"maxlength="80"></textarea></span></p>					</div>

	
	<div id="custom_shipping">

        <h3>Αποστολή</h3>
    
        <ul class="shipping_method_custom">

                    <li class="standard-shipping shipping-tab">
                <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
                       value="standard" class="shipping_method shipping_method_field" type="radio">
                <label
                    for="shipping_method_0_standard_custom" class="checkedlabel">
                    <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994 -0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078 -0.137536 16.9909 -0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z" /></svg>                                        <div class="outer-wrapper">
                        <div class="inner-wrapper-dates">
                        <strong
                            class="hs-custom-date">Τετάρτη, 18.3. - Πέμπτη, 19.3.</strong>
                        </div>
                        <div class="inner-wrapper-img">
                                                        <span class="shipping_method_delivery_price tag tag--red">
                                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                            </span>
                                                        <span class="delivery_img"><img decoding="async" class="elta_courier standard" src="https://images.vigo-shop.com/general/curriers/home_small_paket24@2x.png"/></span>
                        </div>
                    </div>
                </label>
            </li>
            
    </ul>

        <div class="delivery-from-eu-warehouse">
        <img decoding="async" class="delivery-from-eu-warehouse__icon"
            src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg"><span
            class="delivery-from-eu-warehouse__text">Αποθήκη στην ΕΕ</span>
    </div>
    </div>
<div class="sup_outher_wrapper">

    <div class="surprise_upsells_wrapper">
                    <div class="vigo-surprise surprise_item product_457583 vigo-gift border border--yellow border--all-2 border-radius--m m-top--m " data-product_id = "457583">
                <div class="vigo-gift__tooltip">
                    <div class="flex flex--autosize flex--middle">
                        <div class="flex__item down_arrow "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.061,12.354a1.5,1.5,0,0,0-2.122,0L13.5,14.793V6a1.5,1.5,0,0,0-3,0v8.793L8.061,12.354a1.5,1.5,0,0,0-2.122,2.121l3.586,3.586a3.5,3.5,0,0,0,4.95,0l3.586-3.586A1.5,1.5,0,0,0,18.061,12.354Z"/></svg></div>
                        <div class="flex__item f--bold">  Προσθέστε στην παραγγελία</div>
                    </div>
                </div>
                <div class="flex sup_inner_wrapper">
                    <div>
                        <div class="surprise_product_click flex flex--wrap flex--autosize flex--gaps flex--middle">
                            <div>
                                <label for="surprise_item_upsell_0" class=""></label>
                                <input id="surprise_item_upsell_0" type="checkbox" class="checkbox-simple checkbox-simple--green val--bottom"  disabled/>
                            </div>
                            <div class="f--l f--bold surprise_title">Προϊόν έκπληξη</div>
                            <div class="tag_wrapper">
                                <div class="tag tag--red">
                                    <span class="woocommerce-Price-amount amount"><bdi>3,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                                </div>
                            </div>
                        </div>
                        <div class="f--m c--darkgray s-top--s">Αξίας μεταξύ 5 € και 15 €.</div>
                    </div>
                    <div class="vigo-checkout-gift__img">
                        <img decoding="async" class="img" src="https://images.vigo-shop.com/general/present_responsive.svg" alt="Gift icon">
                    </div>
                </div>
                <div class="c--darkgray remove_wrapper">
                    <div class="remove_surprise vigo-checkout-total__trash hide"><svg viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.4286 1.15398H15.4286C15.7429 1.15398 16 1.41215 16 1.7309V2.88474C16 3.20334 15.7442 3.46166 15.4286 3.46166H0.571429C0.255857 3.46166 0 3.20334 0 2.88474V1.7309C0 1.41222 0.255857 1.15398 0.571429 1.15398H4.57143L4.98536 0.318892C5.08214 0.123461 5.27996 0 5.49643 0H10.5039C10.7204 0 10.9183 0.123461 11.015 0.318892L11.4286 1.15398ZM1.14286 16.7308C1.14286 17.6863 1.91071 18.4615 2.85714 18.4615H13.1429C14.0893 18.4615 14.8571 17.6863 14.8571 16.7308V4.61549H1.14286V16.7308ZM10.8571 7.50009C10.8571 7.17917 11.1107 6.92317 11.4286 6.92317C11.7464 6.92317 12 7.18008 12 7.50009V15.5769C12 15.897 11.7455 16.1539 11.4286 16.1539C11.1116 16.1539 10.8571 15.897 10.8571 15.5769V7.50009ZM8 6.92317C7.68214 6.92317 7.42857 7.17917 7.42857 7.50009V15.5769C7.42857 15.897 7.68304 16.1539 8 16.1539C8.31696 16.1539 8.57143 15.897 8.57143 15.5769V7.50009C8.57143 7.18008 8.31786 6.92317 8 6.92317ZM4 7.50009C4 7.17917 4.25357 6.92317 4.57143 6.92317C4.88929 6.92317 5.14286 7.18008 5.14286 7.50009V15.5769C5.14286 15.8979 4.88929 16.1539 4.57143 16.1539C4.25357 16.1539 4 15.897 4 15.5769V7.50009Z" /></svg>                        <span>Ukloni</span></div>
                </div>

            </div>
        
    </div>
</div>

    <h3 class="payment-title">Τρόπος πληρωμής</h3>
    <div id="payment" class="woocommerce-checkout-payment">
			<ul class="wc_payment_methods payment_methods methods">
			<li class="wc_payment_method payment_method_cod">
  <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  checked='checked' data-order_button_text="" />

  <label for="payment_method_cod">
    Αντικαταβολή κατά την παραλαβή <span class="payment-fee-not-free"><span class="woocommerce-Price-amount amount">1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></span></span><div class="hs-checkout__payment-method-cod-icon-container">
        <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
    </div>  </label>
  </li>
<li class="wc_payment_method payment_method_braintree_credit_card">
  <input id="payment_method_braintree_credit_card" type="radio" class="input-radio" name="payment_method" value="braintree_credit_card"  data-order_button_text="Παραγγελία" />

  <label for="payment_method_braintree_credit_card">
    Πιστωτική κάρτα <span class="payment-fee-free">Δωρεάν</span><div class="sv-wc-payment-gateway-card-icons"><img decoding="async" src="https://vigoshop.gr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /><img decoding="async" src="https://vigoshop.gr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /><img decoding="async" src="https://vigoshop.gr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /></div>  </label>
      <div class="payment_box payment_method_braintree_credit_card" style="display:none;">
      <fieldset id="wc-braintree-credit-card-credit-card-form" aria-label="Πληροφορίες πληρωμής"><legend style="display:none;">Πληροφορίες πληρωμής</legend><div class="wc-braintree-credit-card-new-payment-method-form js-wc-braintree-credit-card-new-payment-method-form"><input type="hidden" name="wc-braintree-credit-card-card-type" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-enabled" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-verified" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-order-total" value="21.98" />		<input type="hidden" id="wc_braintree_credit_card_payment_nonce" name="wc_braintree_credit_card_payment_nonce" />
		<input type="hidden" id="wc-braintree-credit-card-device-data" name="wc_braintree_device_data" />
				<div class="form-row ">
			<label for="wc-braintree-credit-card-context-hosted"></label>
			<div id="wc-braintree-credit-card-context-hosted" class="" data-placeholder=""></div>
		</div>
				<div class="form-row form-row-wide wc-braintree-hosted-field-card-number-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-account-number-hosted">Broj kartice<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-account-number-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-account-number wc-braintree-hosted-field-card-number wc-braintree-hosted-field" data-placeholder="•••• •••• •••• ••••"></div>
		</div>
				<div class="form-row form-row-first wc-braintree-hosted-field-card-expiry-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-expiry-hosted">Datum isteka<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-expiry-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-expiry wc-braintree-hosted-field-card-expiry wc-braintree-hosted-field" data-placeholder="MM/GG"></div>
		</div>
				<div class="form-row form-row-last wc-braintree-hosted-field-card-csc-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-csc-hosted">CVV<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-csc-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-csc wc-braintree-hosted-field-card-csc wc-braintree-hosted-field" data-placeholder="CVV"></div>
		</div>
		<div class="clear"></div></div><!-- ./new-payment-method-form-div --></fieldset><style>
			#payment ul.payment_methods li label[for='payment_method_braintree_credit_card'] { display: flex; flex-wrap: wrap; row-gap: 10px; }
			#payment ul.payment_methods li label[for='payment_method_braintree_credit_card'] > img { margin-left: auto; }
		</style>    </div>
  </li>
<li class="wc_payment_method payment_method_braintree_paypal">
  <input id="payment_method_braintree_paypal" type="radio" class="input-radio" name="payment_method" value="braintree_paypal"  data-order_button_text="Παραγγελία" />

  <label for="payment_method_braintree_paypal">
    PayPal <span class="payment-fee-free">Δωρεάν</span><img decoding="async" src="https://images.vigo-shop.com/general/checkout/paypal/PayPal.svg" alt="PayPal">  </label>
      <div class="payment_box payment_method_braintree_paypal" style="display:none;">
      <fieldset id="wc-braintree-paypal-paypal-form" aria-label="Πληροφορίες πληρωμής"><legend style="display:none;">Πληροφορίες πληρωμής</legend><div class="wc-braintree-paypal-new-payment-method-form js-wc-braintree-paypal-new-payment-method-form">		<input type="hidden" id="wc_braintree_paypal_payment_nonce" name="wc_braintree_paypal_payment_nonce" />
		<input type="hidden" id="wc-braintree-paypal-device-data" name="wc_braintree_device_data" />
		<p class="form-row " id="wc-braintree-paypal-context_field" data-priority=""><span class="woocommerce-input-wrapper"><input type="hidden" class="input-hidden " name="wc-braintree-paypal-context" id="wc-braintree-paypal-context" value="shortcode"  /></span></p>
		
		<div id="wc_braintree_paypal_container" ></div>

		<input type="hidden" name="wc_braintree_paypal_amount" value="21.98" />
		<input type="hidden" name="wc_braintree_paypal_currency" value="EUR" />
		<input type="hidden" name="wc_braintree_paypal_locale" value="en_us" />

		<div class="clear"></div></div><!-- ./new-payment-method-form-div --></fieldset><style>
			#payment ul.payment_methods li label[for='payment_method_braintree_paypal'] { display: flex; flex-wrap: wrap; row-gap: 10px; }
			#payment ul.payment_methods li label[for='payment_method_braintree_paypal'] > img { margin-left: auto; }
		</style>    </div>
  </li>
		</ul>
		<div class="form-row place-order">
		<div class="woocommerce-terms-and-conditions-wrapper">
		
			</div>
	
		        <div id="hs-cod-checkout-prompt" style="display:none;">
            <div class="cod-prompt-text">Ολοκληρώστε την παραγγελία σας τώρα, <strong>πληρωμή με αντικαταβολή 🙂</strong></div>
            <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
        </div>


                <div id="hs-vat-tax-checkout-prompt">
            <span class="tax-and-vat-checkout-claims">Χωρίς επιπλέον τελωνειακά έξοδα</span>
            <span class="tax-and-vat-checkout-claims">Ο ΦΠΑ περιλαμβάνεται στην τιμή</span>
        </div>
        <div id="pdf">
    <div class="pdf-title-container">
        <h3 class="pdf-title">
            KUPITE E-KNJIGU<!--            <span class="green-label">-->
<!--                --><!--            </span>-->
        </h3>
    </div>
    <p class="pdf-description">Όταν αγοράζετε e-book, σας προσφέρουμε δωρεάν αποστολή.</p>

    <div id="pdf-grid">
        <div class="table-grid">
            <div class="cell-grid">
                <img decoding="async" class="pdf-image" src="https://images.vigo-shop.com/general/pdf_book.png">
            </div>
            <div id="pdf-select-true" class="cell-grid column-option top" >
                <input type="radio" id="ebook_true" name="ebook_offer" value="true" >
<!--                <div class="top-price-label">-->
<!--                    <span>--><!--</span>-->
<!--                </div>-->
                <label for="ebook_true">E-knjiga</label>
            </div>
            <div id="pdf-select-false" class="cell-grid column-selected top">
                <input type="radio" id="ebook_false"  name="ebook_offer" value="false" checked>
                <label for="ebook_false">Δεν θέλω e-book</label>
            </div>

            <div class="cell-grid">
                E-knjiga:
            </div>
            <div class="cell-grid column-option">
                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
            <div class="cell-grid column-selected">
                /
            </div>

            <div class="cell-grid">
                Αποστολή:
            </div>
            <div class="cell-grid column-option">
                Δωρεάν            </div>
            <div class="cell-grid column-selected">
                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
                        <div class="cell-grid">
                Συνολική παραγγελία:
            </div>
            <div class="cell-grid totals column-option bottom">
                <span class="totals"><span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
            </div>
            <div class="cell-grid column-selected bottom">
                <span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
        </div>
    </div>
    <p class="pdf-more-info">
        <img decoding="async" src="https://images.vigo-shop.com/general/checkout/pdf_info_icon.svg">
        <u>Περισσότερες πληροφορίες για το e-book</u>
    </p>
    <p class="pdf-more-info-description">
        Επιλέξτε το e-book μας και αποκτήστε πρόσβαση σε κόλπα που αλλάζουν τη ζωή, συμβουλές εξοικονόμησης και κορυφαίες ευκαιρίες. Εξοικονομείτε επίσης στα μεταφορικά!</p>
</div>


<h3 class="place-order-title" style="display: block;">Σύνοψη παραγγελίας</h3>
<div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table">
    <div class="grid m-top--s review-all-products-container">

        <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">
                            <div class="c--darkgray review-section-container">
                    <div class="review-product-info">
                        <div>
                            1x Nano sprej za popravak ogrebotina na automobilu | CAREASE                        </div>
                        <div class="review-product-info__attributes">
                                                                                </div>
                                            </div>
                    <div class="info-price">
                        <span class="review-sale-price"> <span class="woocommerce-Price-amount amount"><bdi>18,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>                    </div>
                    <div class="review-product-remove">
                                            </div>
                </div>

                            
            
            <!--  Shipping section-->
            <div class="c--darkgray review-section-container review-addons shipping_order_review">
                <div class="review-addons-title">
                    <div>
                        ΕΛΤΑ Courier                    </div>
                </div>

                                    <div class="review-addons-price review-sale-price"> <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                    </div>
                
                <div class="review-product-remove"></div>

            </div>
        </div>
    </div>

        <div class="vigo-checkout-total__sum flex flex--middle border_price">
        <div class="flex__item f--l">
            Σύνολο: <span class="f--bold price_total_wrapper"><span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>        </div>
    </div>
</div>

		
		
			</div>
</div>
</div>
        </div>
      </div>

      
    
    

    
        <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
            <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Παραγγελία" />Παραγγελία</button></div><div class="checkout-warranty flex flex--center flex--middle">
    <div class="flex__item--autosize checkout-warranty__icon">
       <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_gr.png">
    </div>
    <div class="flex__item--autosize f--m checkout-warranty__text">
        <strong>Αγοράστε χωρίς ανησυχία </strong><br>
        Επιστροφή χρημάτων εντός 90 ημερών    </div>
</div>

<div class="agreed_terms_txt">
    <span class="policy-agreement-obligation">Κάνοντας κλικ στο κουμπί <strong>Παραγγελία</strong> αποδέχομαι την παραγγελία με υποχρέωση πληρωμής.</span> <br>
            <div class="terms-checkbox-and-links">
            <label class="checkbox">
                <input type="checkbox" class="input-checkbox" name="agree_to_checkout_terms" id="agree_to_terms_checkbox" value="1">
            </label>
            Διάβασα και αποδέχομαι <a href="#" id="terms_conditions_link"> τους Γενικούς Όρους Πώλησης </a> i <a href="#" id="withdrawal_policy_link"> το δικαίωμα υπαναχώρησης </a>.        </div>
    </div>

<div id="terms-conditions-popup" class="checkout-popup" style="display: none;">
    <div class="checkout-popup-wrapper">
        <div id="terms-conditions-content">
            <h2 class="ql-align-justify"><strong>Γενικοί Όροι Συναλλαγών</strong></h2>
<p class="ql-align-justify"></p>
<p class="ql-align-justify"><a class="button" href="https://images.hs-plus.com/legal/terms-conditions/terms-conditions_Vigoshop_hr.pdf" style="background-color: lightgray"> Spremite i ispišite</a></p>
<p class="ql-align-justify">Dobro došli na ιστότοπο <a href="https://vigoshop.gr">vigoshop.gr</a> kojim upravlja εταιρεία HS plus d.o.o., Gmajna 8, SI-1236 Trzin (dalje u tekstu: εταιρεία).</p>
<p class="ql-align-justify">Ovi se Γενικοί Όροι συναλλαγών primjenjuju na sve aktivnosti omogućene u ηλεκτρονικoj κατάστημαi koja je dostupna na&nbsp;<a href="https://vigoshop.gr">vigoshop.gr</a> (dalje u tekstu: ιστότοπο). Γενικοί Όροι συναλλαγών υποχρέωσηjući su za sve χρήστηςe. Παρακαλούμε vas da ih διαβάσετε προσεκτικά. Ako se ne slažete s bilo kojim dijelom ovih Općih όρων συναλλαγών ili ako se u potpunosti ne slažete s njima, ne smijete upotrebljavati μας ιστότοπο i μας usluge. Γενικοί Όροι συναλλαγών predstavljaju valjani σύμβαση συνάπτεται μεταξύ vas i εταιρείας.</p>
<p class="ql-align-justify">Ιστότοπος dostupno je „takvo kakvo jest”, a εταιρεία ne pruža εγγύησης, ni neizravno ni izravno, koja se odnose na pravo vlasništva, marketing ili prikladnost za bilo koju svrhu προϊόνa koji su predstavljeni na web-mjestu.</p>
<p class="ql-align-justify">Vlasnik ιστότοπου postupat će s dužnom pažnjom kako bi pokušao osigurati da podaci navedeni na web-mjestu budu detaljni i ažurni. Istodobno, vlasnik ιστότοπου zadržava pravo izmijeniti sadržaj ιστότοπου ili ga prestati dopunjavati u bilo kojem στιγμή, bez prethodne najave. Osim toga, vlasnik ιστότοπου μπορεί izmijeniti usluge, προϊόνe, τιμές ili programe opisane na ovom web-mjestu u bilo kojem στιγμή i bez najave.</p>
<h2 class="ql-align-justify"><strong>1 DEFINICIJE</strong></h2>
<p class="ql-align-justify"><strong>Εταιρεία</strong>&nbsp;je εταιρεία HS plus d.o.o., Gmajna 8, SI-1236 Trzin koja je vlasnik ιστότοπου&nbsp;<a href="https://vigoshop.gr">vigoshop.gr</a>&nbsp;i upravlja njime.</p>
<p class="ql-align-justify"><strong>Ιστότοπος&nbsp;</strong>je ιστότοπο dostupno na&nbsp;<a href="https://vigoshop.gr">https://vigoshop.gr</a>, kojom upravlja εταιρεία, i u okviru koje djeluje ηλεκτρονικa κατάστημαa.</p>
<p class="ql-align-justify"><strong>Χρήστης</strong>&nbsp;je svaka φυσικό πρόσωπο koja se koristi ιστότοποm.</p>
<p class="ql-align-justify"><strong>Αγοραστής</strong>&nbsp;(ili&nbsp;<strong>„vi”</strong>&nbsp;) je svaka φυσικό πρόσωπο koja εκτελέσει αγορά u ηλεκτρονικoj κατάστημαi.</p>
<p class="ql-align-justify"><strong>Καταναλωτής</strong>&nbsp;je φυσικό πρόσωπο koja nabavlja ili upotrebljava robu i usluge u svrhe izvan opsega njegove profesionalne djelatnosti ili djelatnosti s ciljem ostvarenja dohotka. Za potrebe ovih Općih όρων συναλλαγών svi αγοραστές smatraju se i καταναλωτήςima.</p>
<p class="ql-align-justify"><strong>Πολιτική Απορρήτου</strong>&nbsp;έγγραφο je koji sadržava sve informacije o obradi προσωπικών δεδομένων koja se odvija u okviru ιστότοπου. Navedena Πολιτική Απορρήτου dostupna su&nbsp;<a href="https://vigoshop.gr/pravila-o-zastiti-privatnosti">ovdje</a>.</p>
<p class="ql-align-justify"><strong>Πολιτική Cookies</strong>&nbsp;έγγραφο je koji sadržava sve informacije o upotrebi cookies koja se odvija u okviru ιστότοπου. Navedena Πολιτική Cookies dostupna su&nbsp;<a href="https://vigoshop.gr/pravila-o-kolacicima">ovdje</a>.</p>
<h2 class="ql-align-justify"><strong>2. VIGOSHOP.HR INTERNETSKA TRGOVINA</strong></h2>
<p class="ql-align-justify">Γενικοίς Όρους συναλλαγών utvrđuje se rad ηλεκτρονικe κατάστημαe, definiraju prava i obveze χρήστηςa i ηλεκτρονικe κατάστημαe te uređuje poslovni odnos μεταξύ ηλεκτρονικe κατάστημαe i αγοραστή.&nbsp;Γενικοί Όροι συναλλαγών koji vrijede u στιγμή αγοράς (u στιγμή kada se vrši ηλεκτρονικa παραγγελία) υποχρέωσηjući su za αγοραστή. Svaki put kada se εκτελέσει παραγγελία, χρήστης će biti ενημερωμένος o Γενικοίς Όρους συναλλαγών. Εκτέλεσηem παραγγελίας χρήστης επιβεβαιώνει da je ενημερωμένος o ovim Γενικοίς Όρους συναλλαγών.</p>
<p class="ql-align-justify">Επιβεβαίωση Općih όρων συναλλαγών pri εκτέλεσηu παραγγελίας u μας ηλεκτρονικoj κατάστημαi predstavlja υποχρέωσηjući σύμβαση μεταξύ vas i εταιρείας. Παρακαλούμε vas da&nbsp;<strong>διαβάσετε προσεκτικά</strong>&nbsp;Γενικούς Όρους συναλλαγών&nbsp;<strong>πριν από την επιβεβαίωση παραγγελίας</strong>. Ako se ne slažete s našim Γενικοίς Όρους συναλλαγών, ne μπορείte upotrebljavati usluge koje pruža μας ηλεκτρονικa κατάστημαa. Επίσης, nije moguće djelomično se složiti s Γενικοίς Όρους συναλλαγών. Da biste dovršili αγορά, morate prihvatiti&nbsp;<strong>cjelokupne</strong>&nbsp;Γενικούς Όρους συναλλαγών koji su na snazi u στιγμή αγοράς.</p>
<h3 class="ql-align-justify"><strong>i. Upotreba ηλεκτρονικe κατάστημαe</strong></h3>
<p class="ql-align-justify">Εταιρεία upravlja ηλεκτρονικom κατάστημαom u skladu s Γενικοίς Όρους συναλλαγών. Internetska κατάστημαa dostupna je αγοραστέςma u svakom στιγμή, pri čemu εταιρεία zadržava pravo privremeno onemogućiti ili obustaviti ηλεκτρονικu κατάστημαu bez prethodne najave.</p>
<p class="ql-align-justify">Postoji mogućnost da će ηλεκτρονικa κατάστημαa biti privremeno nedostupna ili da privremeno δεν θα biti moguće εκτελέσειti πληρωμής zbog održavanja i ažuriranja ηλεκτρονικe κατάστημαe. Εταιρεία δεν θα biti odgovorna za štetu koju biste mogli pretrpjeti tijekom održavanja i/ili ažuriranja ηλεκτρονικe κατάστημαe.</p>
<h3 class="ql-align-justify"><strong>ii. Εκτέλεσηe παραγγελίας u ηλεκτρονικoj κατάστημαi</strong></h3>
<p class="ql-align-justify">Smatra se da je kupoprodajni σύμβαση μεταξύ dobavljača i αγοραστή συνάπτεται kad αγοραστής επιβεβαιώσει παραγγελία (αγοραστής dobiva poruku e-pošte s potvrdom statusa „Παραγγελία επιβεβαιωμένη”). Od tog su στιγμa sve τιμές i ostali όροι αγοράς fiksni i primjenjivi i za pružatelja usluge i za αγοραστή. Kupoprodajni σύμβαση učitava se na poslužitelj εταιρείας u elektroničkom obliku.</p>
<p class="ql-align-justify">
<p class="ql-align-justify">Postupak αγοράς:</p>
<ol>
<li class="ql-align-justify">korak: U ponudi dostupnoj u ηλεκτρονικoj κατάστημαi αγοραστής odabire željeni artikl i željenu količinu te επιβεβαιώνει svoj izbor pritiskom gumba „Προσθήκη u καλάθι”. Ako αγοραστής želi kupiti nekoliko διαφορετικih artikala, postupak treba ponoviti za svaki pojedinačni artikl. Nakon što αγοραστής završi postupak odabira προϊόνa, μπορεί nastaviti s postupkom αγοράς pritiskom gumba „Kreni na πληρωμή”.</li>
<li class="ql-align-justify">korak: U ovom koraku αγοραστής ispunjava obrazac sa svojim osobnim podacima potrebnima za παράδοσηu željene παραγγελίας. Nakon ispunjavanja obrasca, αγοραστής u ορισμένim slučajevima μπορεί odabrati μεταξύ nekoliko mogućnosti αποστολής i dodati druge προϊόνe ili usluge svojoj narudžbi. U ovom koraku αγοραστής je ενημερωμένος i o planiranom datumu παράδοσηe. Prije dovršenja παραγγελίας, αγοραστής ima mogućnost izbora μεταξύ διαφορετικih načina πληρωμής. Uzimajući u obzir odabrani izbor, konačni iznos koji treba platiti za παραγγελία izτιμολόγιοava se još jednom prije završetka αγοράς. Αγοραστής επιβεβαιώνει postupak αγοράς pritiskom gumba „Završi αγορά”. </li>
<li class="ql-align-justify">korak: Nakon završetka αγοράς, kupcu se na web-mjestu prikazuje poruka potvrde u kojoj se navodi da je παραγγελία uspješno poslana i prikazuju pojedinosti poslane παραγγελίας. Uz to, αγοραστής prima i potvrdnu poruku e-pošte na adresu e-pošte navedenu u 2. točki, pri čemu se u navedenoj potvrdnoj poruci e-pošte nalaze pregled παραγγελίας, upute za upotrebu naručenih προϊόνa i upute za υπαναχώρησηe od αγοράς ili podnošenje παράποναe ako αγοραστής nije zadovoljan προϊόνom ili ga više ne želi.</li>
</ol>
<p class="ql-align-justify">Svi podaci koje nam dostavite tijekom slanja παραγγελίας bit će obrađeni u skladu s Pravilima o zaštiti privatnosti koje μπορείte pronaći na dnu ιστότοπου.</p>
<p class="ql-align-justify">Σας ενημερώνουμε vas da će se vrijednost cjelokupne αγοράς, uključujući παράδοσηu ili druge troškove koji vrijede za αγορά, naplatiti nakon potvrde σαςe παραγγελίας. Ειδοποίησηit ćemo vas o svim dodatnim troškovima prije nego što εκτελέσειte αγορά. S odabranim načinom πληρωμής mogu biti povezati i dodatni troškovi.</p>
<p class="ql-align-justify">Μπορείte pratiti i upravljati svojom παραγγελία u RMA aplikaciji na ovoj poveznici <a href="https://rma.hs-plus.com/language/el/" rel="noopener noreferrer" target="_blank" style="background-color: rgb(248, 248, 248); color: rgba(var(--sk_highlight,18,100,163),1);">https://rma.hs-plus.com/language/el/</a>. Za pristup Vam je potreban broj παραγγελίας ili kod za praćenje te e-mail ili broj telefona koje ste unijeli u παραγγελίαςnicu prilikom αγοράς. U ovoj aplikaciji (ako παραγγελία još nije u pripremi) επίσης μπορείte otkazati παραγγελία, promijeniti sadržaj παραγγελίας, adresu, broj telefona, pratiti παραγγελία te επίσης pristupiti επιβεβαιώσει o plaćanju.</p>
<h3 class="ql-align-justify"><strong>iii. Τιμές, načini πληρωμής i promocije</strong></h3>
<p class="ql-align-justify"><strong>Τιμές</strong></p>
<p class="ql-align-justify">Sve τιμές navedene na web-mjestu izražene su u EUR i uključuju PDV.&nbsp;Τιμές se primjenjuju od στιγμa kada je παραγγελία izvršena. Ponuda vrijedi do opoziva.</p>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ:&nbsp;</strong>Ovo je λιανικa ηλεκτρονικa κατάστημαa čija su ciljana publika isključivo τελικ αγοραστές (B2C). Iz tog razloga na ovom web-mjestu ne omogućujemo B2B prodaju, a ne μπορείmo ponuditi ni mogućnost izdavanja τιμολόγιοa pravnim subjektima. To znači i da naknadne korekcije τιμολόγιοa (s fizičke na pravnu osobu) nisu moguće zato što se prodajna transakcija zaključuje isključivo s fizičkom osobom.</p>
<p class="ql-align-justify">Ako želite uspostaviti B2B odnos s našom tvrtkom i kupiti veće količine naših προϊόνa (cijelo pakiranje / karton), μπορείte se obratiti μας κατάστημαi na veliko na&nbsp;<a href="/cdn-cgi/l/email-protection#51336333113922213d24227f2238"><span class="__cf_email__" data-cfemail="b2d080d0f2dac1c2dec7c19cc1db">[email&#160;protected]</span></a>.</p>
<p class="ql-align-justify"><strong>Načini πληρωμής</strong></p>
<p class="ql-align-justify">U μας ηλεκτρονικoj κατάστημαi μπορείte upotrebljavati επόμενe načine πληρωμής:</p>
<ul>
<li class="ql-align-justify">Πληρωμή pouzećem – αγοραστής plaća τιμολόγιο gotovinom ili kreditnom karticom dostavnom kuriru koji robu isporučuje na adresu αγοραστή;</li>
<li class="ql-align-justify">Πληρωμή kreditnom karticom;</li>
<li class="ql-align-justify">Πληρωμή preko PayPala.</li>
</ul>
<p class="ql-align-justify">Εταιρεία zadržava pravo provjere odabranog načina πληρωμής s pomoću provjere autentičnosti. Nadalje, zadržavamo pravo daljnje provjere odabranog načina πληρωμής tražeći da nam pošaljete dokaz o uplati.&nbsp;</p>
<p class="ql-align-justify">Upoznati ste s činjenicom da morate platiti cjelokupan iznos παραγγελίας (uključujući sve troškove povezane s transakcijom i παράδοσηom) u skladu s odabranim načinom πληρωμής. Jamčite da imate sposobnost i pravo izvršavati transakcije s pomoću kreditne kartice ili bilo kojeg drugog odabranog načina πληρωμής.</p>
<p class="ql-align-justify"><strong>Promocije</strong></p>
<p class="ql-align-justify">Ιστότοπος nudi i popuste i druge promocije kojima se snižavaju τιμές προϊόνa (dalje u tekstu: promocije). Svaka promocija nudi se po sniženoj cijeni za ορισμένo (ograničeno) razdoblje utvrđeno za svaku pojedinačnu promociju. Snižena τιμή odnosi se na sve αγοράς izvršene tijekom trajanja promocije.</p>
<p class="ql-align-justify">Želimo vas upozoriti da su ορισμένe promocije ograničene samo na nove χρήστηςe koji još uvijek nisu εκτελέσειli αγορά u μας ηλεκτρονικoj κατάστημαi. U tom se slučaju navedena promocija ne odnosi na postojeće χρήστηςe. Svaki pokušaj upotrebe takvih promocija bit će odmah blokiran, a adrese e-pošte upotrebljavane za izvršenje spomenute zlouporabe bit će izbrisane bez prethodne najave. Popusti i druge promocije obično nisu kumulativni, osim ako se u okviru svake pojedinačne promocije izričito ne navodi drugačije.</p>
<h3 class="ql-align-justify"><strong>iv. Troškovi i dostava robe</strong></h3>
<p class="ql-align-justify">U τιμές nisu uključeni troškovi αποστολής. Troškove αποστολής μπορείte pronaći u ηλεκτρονικoj κατάστημαi, gdje επίσης imate mogućnost odabira načina αποστολής. Naša εταιρεία nudi dva načina αποστολής: standardna i brza. Ključna razlika μεταξύ ove dvije metode αποστολής jest u tome što se s παραγγελίαma za ekspresnu αποστολή postupa, i one se pakiraju, s većim prioritetom.&nbsp;&nbsp;Prije odabira željenog načina αποστολής, provjerite τιμή navedenu pored svakog pojedinačnog izbora. Tijekom podnošenja παραγγελίας vidjet ćete pregled τιμή koji se sastoji od troškova αγοράς, troškova αποστολής i ukupnih troškova.</p>
<p class="ql-align-justify">Ako odaberete πληρωμή pouzećem, kurirska služba naplatit će naknadu za αποστολή paketa izτιμολόγιοatu tijekom podnošenja παραγγελίας.&nbsp;Ako odlučite platiti kreditnom karticom ili putem PayPala, navedeni trošak δεν θα vam biti naplaćen.</p>
<p class="ql-align-justify">Προϊόνi koje ste naručili dostavit će se na adresu koju ste unijeli kao adresu za αποστολή na μαςm web-mjestu.</p>
<p class="ql-align-justify">Predviđeni rok αποστολής dostupan je kupcu nakon predaje παραγγελίας. Εταιρεία zadržava pravo produžiti rok αποστολής u slučaju povećane potražnje ili kašnjenja usluge αποστολής. Dostave se uglavnom izvršavaju prije podneva. Ako tijekom αποστολής ne μπορείte prihvatiti paket, kurirska služba pokušat će se dogovoriti s kupcem o novom načinu i mjestu αποστολής.</p>
<p class="ql-align-justify">Ako kurir za αποστολή ne uspije kontaktirati αγοραστή, slijedi drugi pokušaj αποστολής paketa επόμενi radni dan. Ako i drugi pokušaj αποστολής ne uspije, paket i njegov sadržaj vraćaju se pošiljatelju.</p>
<p class="ql-align-justify">Iznos plaćen za neuspješno isporučene i unaprijed plaćene παραγγελίας automatski se vraća u roku od 8 (osam) radnih dana skladišta koje bilježi επιστροφή paketa ili εταιρείας koja utvrdi da paket nije uspješno isporučen.</p>
<p class="ql-align-justify"><strong>Sigurnosna upozorenja za upotrebu svih προϊόνa</strong></p>
<p class="ql-align-justify">Upotreba προϊόνa iz μας ηλεκτρονικe κατάστημαe μπορεί predstavljati ορισμένi κίνδυνο για τη ζωή και την υγεία. Morate izričito επιβεβαιώσειti da razumijete da uporaba navedenih προϊόνa predstavlja takav rizik koji u potpunosti prihvaćate. Παραγγελίαvanjem i/ili upotrebom spomenutih προϊόνa επιβεβαιώνειte da ste upoznati s navedenim rizicima koji mogu uključivati rizik od bolesti, ozljeda, invaliditeta ili smrti. Morate preuzeti punu odgovornost za sve posljedice koje bi mogle nastati naručivanjem i/ili upotrebom προϊόνa.</p>
<p class="ql-align-justify">Prije upotrebe bilo kojeg προϊόνa morate pročitati upute za upotrebu.</p>
<p class="ql-align-justify">Prije upotrebe svaki προϊόν mora biti testiran na siguran način. Ako niste potpuno sigurni kako testirati προϊόν, ljubazno vas παρακαλούμε da ga ne upotrebljavate, da nas o tome ειδοποίησηite ili ga vratite.</p>
<p class="ql-align-justify">Εταιρεία ne preuzima nikakvu odgovornost za neizravnu ili izravnu štetu nastalu upotrebom προϊόνa naručenih na web-mjestu, bez obzira je li αγοραστής ili treća strana προϊόνe upotrebljavao ispravno ili neispravno. Ovo izuzeće primjenjuje se u najvećoj mogućoj mjeri dopuštenoj zakonodavstvom.</p>
<p class="ql-align-justify">U slučaju zahtjeva za naknadu štete podnesenog protiv εταιρείας, εταιρεία ograničava svoju odgovornost za štete na trostruku tržišnu τιμή προϊόνa.</p>
<p class="ql-align-justify">Nastojimo pružiti što detaljnije i preciznije opise προϊόνa i fotografije. Ipak, ne μπορείmo jamčiti da su svi podaci o προϊόνu i njihove fotografije potpuno točni. Budući da se ορισμένi προϊόνi mogu nabaviti kod διαφορετικih dobavljača, moguća su manja odstupanja u pakiranju ili izgledu προϊόνa. Spomenuta odstupanja ni na koji način ne utječu na kvalitetu ili funkcionalnost προϊόνa.&nbsp;&nbsp;</p>
<h3 class="ql-align-justify"><strong>v. Pravo na υπαναχώρησηe od Ugovora</strong></h3>
<p class="ql-align-justify">Αγοραστής koji εκτελέσει αγορά u μας ηλεκτρονικoj κατάστημαi ima pravo odustati od Ugovora. Navedeno υπαναχώρησηe od Ugovora μπορεί se izjaviti εντός 90 ημερών od datuma παράδοσηe παραγγελίας, a tvrtku o tome obavještava dostavna služba.&nbsp;Αγοραστής ne mora navesti razlog svoje odluke. Navedeno το δικαίωμα υπαναχώρησης od Ugovora primjenjuje se samo na kupce koji su fizičke osobe i koji robu i usluge stječu ili upotrebljavaju izvan svoje profesionalne djelatnosti ili djelatnosti s ciljem ostvarenja dohotka.&nbsp;</p>
<p class="ql-align-justify">Smatra se da je izjava o υπαναχώρησηu izdana pravodobno ako je podnesena u roku za υπαναχώρησηe od Ugovora. Izjavu o υπαναχώρησηu μπορείte dostaviti na unaprijed dogovorenom obrascu ili nam je μπορείte poslati e-poštom.&nbsp;Obrazac μπορείte pronaći na kartici „Pravo na υπαναχώρησηe od αγοράς” pri dnu ιστότοπου. Teret dokazivanja koji se odnosi na ostvarivanje prava na υπαναχώρησηe iz ovog članka snosi καταναλωτής.</p>
<p class="ql-align-justify"><strong>Odustajanjem od Ugovora αγοραστής μπορεί steći επιστροφή novca ili zamijeniti προϊόν, ali ne μπορεί iskoristiti kredit!</strong></p>
<p class="ql-align-justify">Nakon predaje izjave o υπαναχώρησηu, svoje προϊόνe morate vratiti εντός 14 ημερών od datuma izjave o υπαναχώρησηu. Στείλτε τα εμπορεύματα στη διεύθυνσή μας: <strong>HS PLUS d.o.o., Poštanska ulica 25, 10410 Velika Gorica</strong>.&nbsp;Smatra se da je roba pravovremeno vraćena ako je pošaljete prije isteka roka za επιστροφή u trajanju od 90 dana.&nbsp;Morate vratiti neizmijenjenu količinu neoštećenih προϊόνa, zapakiranih u αρχική συσκευασία ili ambalažu koja προϊόνe štiti na isti način kao i originalna ambalaža. Ne μπορείte vratiti oštećene προϊόνe, προϊόνe u izmijenjenoj količini ili προϊόνe upakirane u neprikladnu ambalažu. Παρακαλούμε vratite artikle kao paketnu αποστολήu, a ne kao pismo, osiguravajući da je paket označen kodom za odustanak od αγοράς, koji ćete dobiti tijekom postupka.Ako paket nije pravilno označen (poslan bez koda za odustanak od αγοράς), to μπορεί značajno produžiti vrijeme potrebno za obradu σαςeg zahtjeva. U slučaju υπαναχώρησηa od σύμβασηa, podmirit ćete samo troškove επιστροφήa robe, s tim da se navedeni troškovi ne mogu nadoknaditi.</p>
<p class="ql-align-justify">Ako ste već platili naručenu robu, odmah ćemo, ili najkasnije u roku od 8 radnih dana od slanja paketa na μας adresu, nadoknaditi sve zaprimljene uplate i uplate koje ste εκτελέσειli u vezi s παραγγελία. Smatra se da je paket poslan na μας adresu kada ga μας skladište evidentira kao vraćeni paket. Zadržavamo pravo zadržati primljenu uplatu do επιστροφήa προϊόνa koji su predmet υπαναχώρησηa od σύμβασηa.</p>
<p class="ql-align-justify">Zaprimljene uplate nadoknadit ćemo istim sredstvima πληρωμής koja ste upotrebljavali tijekom αγοράς. U slučaju πληρωμής pouzećem nabavna τιμή vratit će na broj tekućeg τιμολόγιοa koji ste naveli u svom obrascu.</p>
<p class="ql-align-justify">Εξαίρεση od prava na υπαναχώρηση</p>
<p class="ql-align-justify">Iskorištavanje prava na υπαναχώρησηe isključeno je za επόμενe σύμβασηe:</p>
<ul>
<li class="ql-align-justify">σύμβασηi o isporuci robe izrađeni prema specifikacijama καταναλωτήςa ili jasno personalizirani;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi robom koji se mogu pogoršati ili brzo isteći;</li>
<li class="ql-align-justify">σύμβασηi o nabavi novina, periodike ili časopisa, osim σύμβασηa o pretplati na ove publikacije;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koju je καταναλωτής otpečatio nakon παράδοσηe i koja se ne μπορεί vratiti iz higijenskih ili zdravstvenih razloga (na primjer: kozmetika, sredstva za čišćenje, paste za poliranje i kupaći kostim, donje rublje, čarape)</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koja se nakon παράδοσηe i po svojoj prirodi nerazdvojno miješaju s drugim artiklima; (na primjer: set/kit, svi προϊόνi iz Mystery box -a, oba προϊόνa iz ponude 1+1 besplatno, bilo koji POKLON);</li>
<li class="ql-align-justify">σύμβασηi o isporuci audio ili video zapisa ili τιμολόγιοalnog softvera ako ih je καταναλωτής otpečatio nakon παράδοσηe;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi alkoholnim pićima čija se παράδοσηa odgađa nakon trideset dana i čija vrijednost dogovorena pri sklapanju σύμβασηa ovisi o fluktuacijama na tržištu na koje profesionalci ne mogu utjecati;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe ili usluga, čija τιμή ovisi o fluktuacijama na financijskom tržištu na koje profesionalci ne mogu utjecati i do kojih će vjerojatno doći tijekom razdoblja υπαναχώρησηa;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga u potpunosti izvršeni prije isteka roka za υπαναχώρησηe i čije je εκτέλεσηe započelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe; (na primjer: provizija za πληρωμή po pouzeću, brza dostava, osiguranje paketa);</li>
<li class="ql-align-justify">σύμβασηi o radovima na održavanju ili popravcima koji se moraju hitno εκτελέσειti u καταναλωτήςevoj kući i izričito to zatražiti, u granicama rezervnih dijelova i radova koji su strogo potrebni za reagiranje u hitnim slučajevima;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga smještaja, prijevoza, ugostiteljstva i razonode, koji se moraju pružati ορισμένog datuma ili s ορισμένom učestalošću;</li>
<li class="ql-align-justify">σύμβασηi o isporuci digitalnog sadržaja koji nisu isporučeni na materijalnom mediju, čije je εκτέλεσηe počelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe (na primjer: preuzeti digitalni sadržaji, e-knjige).</li>
</ul>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: </strong>Ako dobrovoljno vratite προϊόν za koji nije moguće odstupanje od αγοράς,&nbsp;nakon perioda za επιστροφή od 90 dana, nakon 14 dana od ειδοποίησηi o odstupanju od αγοράς, koji nije kupljen u μας κατάστημαi Takav Vam προϊόν μπορείmo vratiti natrag isključivo uz naplatu 10 EUR što predstavlja trošak obrade neopravdane παράποναe. Προϊόν koji nije preuzet bit će uništen nakon 2 mjeseca.</p>
<h3 class="ql-align-justify"><strong>vi. Παράποναe</strong></h3>
<p class="ql-align-justify">Ako otkrijete da σας προϊόν ne radi ispravno ili ste dobili neprimjeren ili oštećen προϊόν, na raspolaganju su vam επόμενe mogućnosti:</p>
<ul>
<li class="ql-align-justify">provedba εγγύησης αποστολής,</li>
<li class="ql-align-justify">provedba εγγύησης na tehničke προϊόνe i</li>
<li class="ql-align-justify">podnošenje παράποναe προϊόνa.</li>
</ul>
<p class="ql-align-justify"><strong>a) Εγγύηση παράδοσηe</strong></p>
<ol>
<li class="ql-align-justify">Dajemo dodatno εγγύηση za besprijekornu παράδοσηu koje se μπορεί primijeniti&nbsp;<strong>u roku od 48 sati nakon primitka προϊόνa</strong>.</li>
<li class="ql-align-justify">Ako su σαςi προϊόνi oštećeni tijekom transporta ili nisu u skladu s σαςom παραγγελία, ljubazno vas παρακαλούμε da nam prijavite grešku u roku od 48 sati od παράδοσηe. Pošaljite nam poruku e-pošte koja sadrži fotografiju pakiranja (naljepnica mora biti jasno istaknuta na fotografiji) i primljenog προϊόνa koji jasno ukazuje na oštećeno područje.</li>
<li class="ql-align-justify">Dat ćemo prednost rješavanju σαςeg zahtjeva u najkraćem mogućem roku i pružit ćemo vam zamjenski προϊόν.</li>
<li class="ql-align-justify">Ako je zahtjev poslan prekasno, riješit će se kao παράποναa προϊόνa.</li>
</ol>
<p class="ql-align-justify"></p>
<p class="ql-align-justify"><strong>b) Εγγύηση na tehničke προϊόνe</strong></p>
<p class="ql-align-justify">Za ορισμένe προϊόνe u μας ponudi primjenjuje se jamstveno razdoblje od 24 mjeseci. Εγγύηση se μπορεί primijeniti samo za tehničke προϊόνe i električne uređaje iz μας ponude. Jamstveno razdoblje od 24 mjeseci započinje na dan primitka robe. Svoje εγγύηση μπορείte ostvariti u skladu Zakonom o zaštiti καταναλωτήςa, na temelju τιμολόγιοa koji predstavlja επιβεβαίωση o jamstvu.</p>
<p class="ql-align-justify">Εταιρεία zadržava pravo odbiti εγγύηση ako uz zahtjev nije priložen τιμολόγιο ili ako τιμολόγιο nije čitljiv ili na drugi način nedostaje.</p>
<p class="ql-align-justify">Εγγύηση se ne primjenjuje ako:</p>
<ul>
<li class="ql-align-justify">je προϊόν fizički oštećen;</li>
<li class="ql-align-justify">προϊόν pokazuje znakove trošenja zbog uobičajene upotrebe;</li>
<li class="ql-align-justify">προϊόν predstavlja nedostatke koji su nastali kao rezultat nepravilne, neprikladne ili neoprezne upotrebe προϊόνa.</li>
</ul>
<p class="ql-align-justify">Προϊόνi za koje želite iskoristiti εγγύηση moraju se ispitati, zbog čega vas παρακαλούμε da svome zahtjevu za εγγύησηm priložite fotografije ili video isječke koji prikazuju nedostatak. Ako je potrebno, zamolit ćemo vas da nam vratite προϊόν kako bismo ga mogli ispitati.</p>
<p class="ql-align-justify">Ako odobrimo σας zahtjev za εγγύησηm, pružit ćemo vam novi προϊόν. Imate pravo zatražiti i popravak svojeg προϊόνa, ali morate biti svjesni činjenice da je razdoblje popravka duže od razdoblja παράδοσηe novog προϊόνa. Ako popravak traje više od 45 dana, σας će προϊόν biti zamijenjen novim. Ako se novi προϊόν ne μπορεί dostaviti, vratit ćemo vam τιμή προϊόνa u cijelosti.</p>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći na kartici „Zamjena u jamstvu” pri dnu ιστότοπου.</p>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Εταιρεία HS Plus prihvatit će επιστροφή samo onih paketa koji sadržavaju προϊόνe kupljene na web-mjestu. Svi paketi koje pošalje pojedinac, a koji ne sadržavaju προϊόνe kupljene u μας εταιρεία, vratit će se pošiljatelju o njegovom trošku.</strong></p>
<p class="ql-align-justify">&nbsp;</p>
<p class="ql-align-justify"><strong>c) Παράποναa προϊόνa zbog materijalnih nedostataka</strong></p>
<ol>
<li class="ql-align-justify">Ako προϊόν ne radi ispravno, pošaljite nam poruku e-pošte na <a href="/cdn-cgi/l/email-protection#c0a9aea6af80b6a9a7afb3a8afb0eea8b2"><span class="__cf_email__" data-cfemail="a9c0c7cfc6e9dfc0cec6dac1c6d987c1db">[email&#160;protected]</span></a> i pomoći ćemo pružanjem potrebnog objašnjenja. Na taj ćete način spriječiti bilo kakvu potencijalnu zlouporabu προϊόνa i štetu na samom προϊόνu, kao i bilo kakve ozljede sebe ili drugih.</li>
<li class="ql-align-justify">Ako σας προϊόν ne radi, μπορείte podnijeti παράποναu navodeći materijalne nedostatke na προϊόνu. Slučajevi koji se smatraju materijalnim nedostacima na προϊόνu navedeni su u odjeljku vii. ovih Općih όρων συναλλαγών. Materijalne nedostatke μπορείte primijeniti samo ako su navedeni nedostaci već postojali u στιγμή αγοράς, ali su otkriveni kasnije.</li>
<li class="ql-align-justify">Ako σας προϊόν ne radi zbog materijalnog nedostatka, παρακαλούμε vas da nedostatak prijavite odmah nakon što ga otkrijete, ali ni u kojem slučaju kasnije od dva mjeseca od dana kada ste taj nedostatak otkrili. Pošaljite nam poruku e-pošte s fotografijom ili video isječkom s prikazom neispravnog προϊόνa, na temelju kojeg se nedvosmisleno μπορεί utvrditi da προϊόν ne radi. Ako je potrebno, zamolit ćemo vas da nam vratite predmetni προϊόν kako bismo ga mogli ispitati i utvrditi nedostatak προϊόνa.</li>
<li class="ql-align-justify">Nećemo moći razmotriti σαςu παράποναu za προϊόνe koji su oštećeni zbog nepravilne ili neprikladne upotrebe ili poμαςnja koje nije strogo neophodno za utvrđivanje prirode, svojstva i funkcioniranja robe. Ako želite επιστροφή predmetnog προϊόνa nakon odbijanja σαςe παράποναe, poslat ćemo vam ga zajedno s τιμολόγιοom za troškove povezane s παράδοσηom navedenog προϊόνa.</li>
<li class="ql-align-justify">Εταιρεία je odgovorna za nedostatke u izradi προϊόνa koji se pojave kroz 2 godine nakon παράδοσηe. Εταιρεία je dužna odgovoriti na prigovor u roku od 3 radna dana.</li>
<li class="ql-align-justify">Ako izvršavate nalog o materijalnom nedostatku, dostupne su vam επόμενe mogućnosti:</li>
</ol>
<ul>
<li class="ql-align-justify">zamjena προϊόνa,</li>
<li class="ql-align-justify">επιστροφή kupoprodajne τιμές,</li>
<li class="ql-align-justify">otklanjanje nedostatka προϊόνa ili</li>
<li class="ql-align-justify">proporcionalni επιστροφή kupoprodajne τιμές.</li>
</ul>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći u kartici „Pritužbe i sporovi” na dnu ιστότοπου.</p>
<h3 class="ql-align-justify"><strong>vii. Materijalni nedostatak</strong></h3>
<p class="ql-align-justify">Materijalni nedostatak μπορεί se primijeniti u επόμενim slučajevima:</p>
<ul>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike potrebne za njegovu uobičajenu upotrebu ili za stavljanje na tržište;</li>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike potrebne za ορισμένu upotrebu za koju je αγοραστής kupio προϊόν, a koje su prodavatelju bile poznate ili su prodavatelju trebale biti poznate;</li>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike i kvalitete koje su izričito ili implicitno dogovorene ili propisane;</li>
<li class="ql-align-justify">ako je prodavatelj kupcu dostavio προϊόν koji nije u skladu s uzorkom ili modelom προϊόνa, osim ako uzorak ili model προϊόνa nisu prikazani samo u informativne svrhe.</li>
</ul>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći u kartici „Pritužbe i sporovi” na dnu ιστότοπου.</p>
<p class="ql-align-justify">Εταιρεία je odgovorna za nedostatke u izradi προϊόνa koji se pojave kroz 2 godine nakon παράδοσηe. Εταιρεία je dužna odgovoriti na prigovor u roku od 3 radna dana.</p>
<h3 class="ql-align-justify"><strong>viii. Dostupnost informacija</strong></h3>
<p class="ql-align-justify">Pružatelj se υποχρέωσηje da će kupcu uvijek pružiti επόμενe informacije:</p>
<ul>
<li class="ql-align-justify">identitet εταιρείας (naziv i registrirana adresa εταιρείας, matični broj),</li>
<li class="ql-align-justify">podatke za kontakt koji χρήστηςu omogućuju brzu i učinkovitu komunikaciju s pružateljem (e-pošta, automatska sekretarica),</li>
<li class="ql-align-justify">bitne karakteristike robe ili usluga (uključujući usluge nakon prodaje i εγγύησης),</li>
<li class="ql-align-justify">konačnu τιμή robe ili usluga, uključujući poreze, ili način izτιμολόγιοa τιμές ako se zbog prirode robe ili usluge konačna τιμή ne μπορεί izτιμολόγιοati unaprijed,</li>
<li class="ql-align-justify">dostupnost προϊόνa (svi προϊόνi ili usluge ponuđeni na web-mjestu trebali bi biti dostupni u razumnom roku),</li>
<li class="ql-align-justify">όρους πληρωμής, όρους παράδοσηe προϊόνa ili όρους za izvršenje usluge (način αποστολής, lokacija i rok),</li>
<li class="ql-align-justify">informacije o svim potencijalnim troškovima prijevoza, αποστολής ili slanja, ili upozorenje da takvi troškovi mogu nastati ako se ne mogu izτιμολόγιοati unaprijed,</li>
<li class="ql-align-justify">vremenski rok ponude,</li>
<li class="ql-align-justify">όρους, rokove i postupke u slučaju υπαναχώρησηa od Ugovora i podatke o troškovima επιστροφήa robe (ako postoje),</li>
<li class="ql-align-justify">objašnjenje postupka koji treba poduzeti u slučaju παράποναe, uključujući sve podatke o kontaktnoj osobi ili korisničkoj službi,</li>
<li class="ql-align-justify">svijest o odgovornosti u slučaju materijalnih nedostataka,</li>
<li class="ql-align-justify">mogućnost i όρους usluga nakon prodaje i dobrovoljnog εγγύησης, ako je potrebno.</li>
<li class="ql-align-justify">Pri pripremi ιστότοπου μπορεί doći do ορισμένih pogrešaka. Budući da ne μπορείmo utjecati na te pogreške, ne snosimo odgovornost za njih. U slučaju većih odstupanja u pogledu τιμή ili tehničkih svojstava προϊόνa, ειδοποίησηit ćemo vas o tome kada εκτελέσειte παραγγελία.</li>
</ul>
<h3 class="ql-align-justify"><strong>ix. Podaci o registraciji, naziv registra, registarski broj:</strong></h3>
<p class="ql-align-justify">Naziv εταιρείας: HS PLUS, κατάστημαa in storitve d.o.o.</p>
<p class="ql-align-justify">Sjedište: Gmajna 8, Trzin, SI-1236 Trzin</p>
<p class="ql-align-justify">Αριθμός μητρώου εταιρείας: 6579639000</p>
<p class="ql-align-justify">PDV ID: SI15553442</p>
<p class="ql-align-justify">Porezni obveznik: DA</p>
<p class="ql-align-justify">Datum upisa u registar: 28/03/2014</p>
<p class="ql-align-justify">Standardna klasifikacija djelatnosti G47.910 – Trgovina na malo preko pošte ili interneta</p>
<h3 class="ql-align-justify"><strong>x. Izvansudsko rješavanje sporova i drugi pravni lijekovi</strong></h3>
<p class="ql-align-justify">Εταιρεία se trudi sve sporove riješiti na sporazuman način. Ako takvo rješavanje sporova nije moguće, sud u Ljubljani bit će nadležan za rješavanje navedenih sporova.</p>
<h3 class="ql-align-justify"><strong>xi. Platforma za rješavanje sporova</strong></h3>
<p class="ql-align-justify">U skladu s pravnim standardima, εταιρεία HS plus d.o.o. ne priznaje nijednog pružatelja usluga izvansudskog rješavanja καταναλωτήςkih sporova kao pružatelja koji je ovlašten rješavati καταναλωτήςke sporove koje καταναλωτήςi mogu pokrenuti na temelju izvansudske nagodbe Zakona o καταναλωτήςkim sporovima.</p>
<p class="ql-align-justify">Platforma za rješavanje sporova dostupna je na stranici&nbsp;<a href="https://ec.europa.eu/consumers/odr/">http://ec.europa.eu/consumers/odr/</a>.</p>
<p class="ql-align-justify">Više informacija o platformi za rješavanje sporova potražite na <a href="https://ec.europa.eu/commission/presscorner/detail/hr/MEMO_13_193">ec.europa.eu</a>.</p>
<p class="ql-align-justify">
<h2 class="ql-align-justify"><strong>3. KOMUNIKACIJA</strong></h2>
<p class="ql-align-justify">Εταιρεία će se obratiti χρήστηςu samo s pomoću daljinske komunikacije ako je to potrebno za εκτέλεσηe παραγγελίας.</p>
<p class="ql-align-justify">Εταιρεία pruža usluge podrške svojim korisnicima na <a href="/cdn-cgi/l/email-protection#ff96919990bf899698908c97908fd1978d"><span class="__cf_email__" data-cfemail="4f262129200f392628203c27203f61273d">[email&#160;protected]</span></a>.</p>
<p class="ql-align-justify">Međutim, korisnicima se μπορείmo obratiti i u komercijalne svrhe ako nam za to daju svoju privolu ili ako su već obavili αγορά u μας ηλεκτρονικoj κατάστημαi, pri čemu će navedena komunikacija:</p>
<ul>
<li class="ql-align-justify">biti jasno i nedvosmisleno označena kao reklamna poruka,</li>
<li class="ql-align-justify">jasno prikazivati pošiljatelja,</li>
<li class="ql-align-justify">jasno označiti razne promocije i druge tehnike marketinga kao takve.</li>
</ul>
<p class="ql-align-justify">Više informacija u vezi s komunikacijom potražite u našim Pravilima o zaštiti privatnosti i Pravilima o cookieima.</p>
<h2 class="ql-align-justify"><strong>4. INTELEKTUALNO VLASNIŠTVO</strong></h2>
<p class="ql-align-justify">Svi podaci, slike i tekstovi, kao i bilo koji drugi materijali (npr. video sadržaji, grafikoni, skice itd.) na μαςm web-mjestu zaštićeni su autorskim pravima i/ili zakonom o intelektualnom vlasništvu.</p>
<p class="ql-align-justify">Kupnjom προϊόνa ili upotrebom ιστότοπου, χρήστης δεν θα steći autorska prava, imovinska prava ili prava intelektualnog vlasništva za προϊόνe i/ili ιστότοπο. Χρήστης μπορεί upotrebljavati materijale samo u svoje nekomercijalne svrhe.</p>
<h2 class="ql-align-justify"><strong>5. IZJAVA O ODRICANJU ODGOVORNOSTI</strong></h2>
<p class="ql-align-justify">Imajući na umu izjave o odricanju odgovornosti navedene u ovim Γενικοίς Όρους συναλλαγών, εταιρεία pruža επόμενa ograničenja:</p>
<p class="ql-align-justify">Ako odlučite upotrebljavati μας ηλεκτρονικu κατάστημαu i/ili μας ιστότοπο, pristajete na to dobrovoljno i stoga preuzimate sve rizike. Ιστότοπος i κατάστημαa pružaju se „takvi kakvi jesu”, bez ikakvih neizravnih ili izravnih jamstava. Sve izjave o odricanju odgovornosti navedene u ovom poglavlju ili na drugim mjestima u ovim Γενικοίς Όρους συναλλαγών vrijede u najvećoj mjeri dopuštenoj zakonom.</p>
<p class="ql-align-justify">Εταιρεία ne jamči rad ιστότοπου i njegovih funkcija te ne jamči da će ιστότοπο raditi bez pogrešaka, virusa ili zlonamjernog softvera sličnog virusu. Uz to, εταιρεία ne jamči da su podaci objavljeni na web-mjestu točni i sveobuhvatni. Εταιρεία δεν θα biti odgovorna za bilo kakvu štetu, uključujući, ali ne ograničavajući se na: izravnu, neizravnu ili posljedičnu štetu koja nastane ili se pojavi uslijed upotrebe ιστότοπου.&nbsp;</p>
<p class="ql-align-justify">Ako se odlučite za upotrebu ηλεκτρονικe κατάστημαe i εκτελέσειte πληρωμή u μας ηλεκτρονικoj κατάστημαi, izričito se slažete da je upotrebljavate na vlastitu odgovornost i da ćete sami snositi sve rizike koji se odnose na πληρωμή u μας ηλεκτρονικoj κατάστημαi, uključujući, ali ne ograničavajući se na neuspjela πληρωμής od strane χρήστηςa, pogreške u plaćanju i pogreške επιστροφήa u slučaju παράποναe. Ova se izjava o odricanju odgovornosti primjenjuje u najvećoj mjeri dopuštenoj zakonom. Εταιρεία δεν θα biti odgovorna za bilo kakvu štetu koja bi mogla nastati u vezi s upotrebom ιστότοπου i/ili προϊόνa dostupnih u μας ηλεκτρονικoj κατάστημαi.</p>
<h2 class="ql-align-justify"><strong>6. ZAVRŠNE ODREDBE</strong></h2>
<p class="ql-align-justify"><strong>Sklapanje σύμβασηa</strong>&nbsp;Zajedno s naručivanjem usluga na web-mjestu, kao i na svim podstranicama ovog ιστότοπου, ovi Γενικοί Όροι συναλλαγών imaju karakter σύμβασηa συνάπτεταιog μεταξύ αγοραστή i εταιρείας.</p>
<p class="ql-align-justify"><strong>Odvojivost odredbi</strong>&nbsp;Ako se bilo koja od odredbi ovih Općih όρων συναλλαγών pokaže (u cijelosti ili djelomično) nezakonitom ili ništavnom na bilo koji drugi način, navedena će se odredba smatrati (u cijelosti ili djelomično) izbrisanom, dok se preostali Γενικοί Όροι συναλλαγών i dalje primjenjuju.</p>
<p class="ql-align-justify"><strong>Puna pravna sposobnost</strong>&nbsp;Χρήστης jamči da ima potpunu sposobnost za preuzimanje prava i υποχρέωση koje proizlaze iz ovih Općih όρων συναλλαγών. Time jamčite da vam nije potreban pristanak ili odobrenje bilo koje treće strane da biste ispunili svoje obveze koje proizlaze iz ovih Općih όρων συναλλαγών.</p>
<p class="ql-align-justify"><strong>Poznavanje Općih όρων συναλλαγών</strong>&nbsp;Ovime jamčite da ste pročitali i da ste u potpunosti upoznati s ovim Γενικοίς Όρους συναλλαγών prije nego što ih prihvatite, osobito kada je riječ o utvrđenim izjavama o odricanju odgovornosti.</p>
<p class="ql-align-justify"><strong>Zakon koji se primjenjuje na ove Γενικούς Όρους συναλλαγών</strong>&nbsp;Na ove se Γενικούς Όρους συναλλαγών primjenjuje zakonodavstvo Republike Slovenije. Svi sporovi koji proizlaze iz ovih Općih όρων συναλλαγών u nadležnosti su sudova u Republici Sloveniji.</p>
<p class="ql-align-justify"><strong>Izmjene ovih Općih όρων συναλλαγών</strong>&nbsp;Nemate pravo mijenjati bilo koju odredbu navedenu u ovim Γενικοίς Όρους συναλλαγών ili se odricati (u cijelosti ili djelomično) valjanosti bilo koje od navedenih odredbi. Εταιρεία ima pravo izmijeniti ove Γενικούς Όρους συναλλαγών u bilo kojem στιγμή. Sve izmjene bit će objavljene na web-mjestu. Ako i dalje upotrebljavate ιστότοπο, smatrat će se da se slažete s izmjenama na snazi u relevantno vrijeme. Ako se ne slažete s izmjenama, imate pravo odustati od Ugovora.</p>
<p class="ql-align-justify"><strong>Cjelokupnost σύμβασηa</strong>&nbsp;Ovi Γενικοί Όροι συναλλαγών predstavljaju cjelokupnost sporazuma koji se primjenjuje μεταξύ σύμβασηnih strana. Svi potencijalni prethodni pisani ili usmeni sporazumi ili pregovori bit će u potpunosti zamijenjeni ovim Γενικοίς Όρους συναλλαγών.</p>
<p class="ql-align-justify"><strong>Γλωσσικές εκδόσεις&nbsp;</strong>Ovi su Γενικοί Όροι συναλλαγών bili izrađeni na slovenskom jeziku. Svaka izmjena ovih Općih όρων συναλλαγών na bilo kojem drugom jeziku pripremljena je kako bi se omogućio lakši pristup Γενικοίς Όρους συναλλαγών. Ovim se slažete i u potpunosti razumijete da će slovenska verzija imati prednost u slučaju bilo kakvih sporova.</p>
<p class="ql-align-justify"><strong>Ερμηνεία όρων</strong>&nbsp;Definicije pojmova upotrebljavanih u ovim Γενικοίς Όρους συναλλαγών navedene su na početku ovih Općih όρων συναλλαγών.</p>
<p class="ql-align-justify"><strong>HS PLUS&nbsp;d.o.o.&nbsp;&nbsp;</strong>Gmajna 8&nbsp;/&nbsp;SI-1236 Trzin&nbsp;/&nbsp;Slovenija&nbsp;/&nbsp;&nbsp;<a href="/cdn-cgi/l/email-protection#89e0e7efe6c9ffe0eee6fae1e6f9a7e1fb"><span class="__cf_email__" data-cfemail="f1989f979eb18798969e82999e81df9983">[email&#160;protected]</span></a></p>
<p class="ql-align-justify">Tijelo za registraciju: Okružni sud u Ljubljani&nbsp;/&nbsp;Temeljni kapital: 7 500 EUR&nbsp;/&nbsp;IBAN SI56 2900&nbsp;0005&nbsp;2694&nbsp;428&nbsp;/&nbsp;PDV ID: 15553442&nbsp;/&nbsp;Αριθμός μητρώου εταιρείας: 6579639000</p>
</div>
        <img decoding="async" id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
    </div>
</div>

<div id="withdrawal-policy-popup" class="checkout-popup" style="display: none;">
    <div class="checkout-popup-wrapper">
        <div id="withdrawal-policy-content">
            <h2 class="ql-align-justify"><strong>PRAVO NA ODUSTAJANJE OD KUPNJE</strong></h2>
<p class="ql-align-justify">Od αγοράς μπορείte odustati u roku&nbsp;<strong>od 90 dana od παράδοσηe, </strong>bez navođenja razloga. Morate vratiti προϊόν na μας adresu da biste mogli zatražiti zamjenu za drugi προϊόν ili επιστροφή novca za προϊόν. Rok za υπαναχώρησηe od αγοράς istječe 90 dana nakon kada vi ili treća strana koju ste odredili, a koja nije prevoznik, fizički preuzmu robu.</p>
<p class="ql-align-justify"><strong>Προϊόν koji želite vratiti mora biti neoštećen, ako je razumno moguće u originalnoj i neoštećenoj ambalaži sa svom isporučenom opremom. </strong>U slučaju da se προϊόν ili αρχική συσκευασία oštete ili pretjerano koriste, κατάστημαa ima pravo naplatiti odbitak pri επιστροφήu kupovne vrijednosti προϊόνa.</p>
<p class="ql-align-justify"><strong>U roku 90 dana od παράδοσηe μπορείte ispuniti</strong>&nbsp;obrazac na poveznici za zamjenu προϊόνa&nbsp;ili&nbsp;επιστροφή novca<strong>&nbsp;ILI&nbsp;</strong>μπορείte nas ειδοποίησηiti e-poštom o namjeri da odustajete od αγοράς.</p>
<p class="ql-align-justify">U slučaju zamjene προϊόνa ili επιστροφήa novca ispunite: <a href="https://rma.hs-plus.com/language/el/">LINK</a></p>
<p>Odmah nakon podnošenja obrasca, primit ćete kod za otkazivanje putem e-pošte kako biste επιβεβαιώσειli svoj zahtjev. Ovaj kod mora biti napisan na paketu zajedno s σαςim podacima.</p>
<p class="ql-align-justify">Ako ne primite kod za otkazivanje nakon podnošenja obrasca, παρακαλούμε kontaktirajte nas putem e-pošte.</p>
<p class="ql-align-justify">Επίσης μπορείte koristiti obrazac eurposkog modela za odstupanje od αγοράς, kojem μπορείte pristupiti na επόμενem linku <strong><a href="https://images.hs-plus.com/shared/pdf/0ccf93b329048_HR_UNIVERSAL_FORM.pdf">OBRAZAC</a></strong>. U tom slučaju isprintajte obrazac, ispunite podatke koji nedostaju i stavite potpisan έγγραφο u paket koji se vraća. OPREZ: Korištenje ovog obrazca ipak nije obavezno i μπορεί produžiti vrijeme obrade σαςeg zahtjeva jer će se paket vratiti bez παράποναskog koda što će zahtjevati ručnu obradu.</p>
<p class="ql-align-justify"><strong>Prije slanja paketa, provjerite επιβεβαίωση παραγγελίας ili τιμολόγιο koji ste dobili e-poštom u vrijeme παραγγελίας, da budete sigurni da ste kupili προϊόν na μας ηλεκτρονικoj stranici i provjerite naš spisak προϊόνa za koje nije moguća παράποναa.</strong>&nbsp;U slučaju da isporučite προϊόν koji nije naš ili<strong>&nbsp;nije legitiman za υπαναχώρηση,</strong> ne odgovaramo za Σαςu grešku i δεν θαmo vratiti προϊόν, odnosno δεν θαmo τιμολόγιοati troškove.</p>
<p class="ql-align-justify">Imate <strong>14 dana</strong> od podnošenja zahtjeva da nam pošaljete paket s Hrvatskom poštom na μας adresu:</p>
<p class="ql-align-justify"><strong>HS PLUS d.o.o.,</strong></p>
<p class="ql-align-justify"><strong>Poštanska ulica 25,</strong></p>
<p class="ql-align-justify"><strong>10410 Velika Gorica</strong></p>
<p class="ql-align-justify"><strong>Ελλάδα</strong></p>
<p class="ql-align-justify">Σας συμβουλεύουμε vam da paket pošaljete συστημένom poštom s potvrdom αποστολήe, kako bi bilo moguće riješiti σας prigovor čak i u slučaju gubitka paketa na temelju potvrde o isporuci putem broja za praćenje.</p>
<p class="ql-align-justify"><strong>Trošak αποστολής je na strani pošiljatelja, ne prihvaćamo αποστολήe sa otkupninom.</strong></p>
<p class="ql-align-justify"><strong>Čim παράποναska služba primi Σας paket</strong>, novi προϊόν šalje se u zamjenu ili se otkupnina vraća na Σας tekući τιμολόγιο u roku od 8 radnih dana. Vratit ćemo iznos za vraćene προϊόνe i troškove najjeftinijeg rješenja αποστολής (standardna naknada za αποστολή). Prioritetno rukovanje, osiguranje paketa i πληρωμή pouzećem predstavljaju dodatni trošak koji se μπορεί izbjeći, a usluga se izvršava samo na poseban zahtjev klijenta. Prilagođeni troškovi δεν θα biti vraćeni. U slučaju υπαναχώρησηa od αγοράς, αγοραστής snosi troškove επιστροφήne αποστολής, tako da se επίσης ne vraćaju troškovi επιστροφήne αποστολής προϊόνa.</p>
<p class="ql-align-justify"><strong>Εξαίρεση od prava na υπαναχώρηση</strong></p>
<p class="ql-align-justify">Iskorištavanje prava na υπαναχώρησηe isključeno je za επόμενe σύμβασηe:</p>
<ul>
<li class="ql-align-justify">σύμβασηi o isporuci robe izrađeni prema specifikacijama καταναλωτήςa ili jasno personalizirani;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi robom koji se mogu pogoršati ili brzo isteći;</li>
<li class="ql-align-justify">σύμβασηi o nabavi novina, periodike ili časopisa, osim σύμβασηa o pretplati na ove publikacije;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koju je καταναλωτής otpečatio nakon παράδοσηe i koja se ne μπορεί vratiti iz higijenskih ili zdravstvenih razloga (na primjer: kozmetika, sredstva za čišćenje, paste za poliranje i kupaći kostim, donje rublje, čarape)</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koja se nakon παράδοσηe i po svojoj prirodi nerazdvojno miješaju s drugim artiklima; (na primjer: set/kit, svi προϊόνi iz Mystery box -a, oba προϊόνa iz ponude 1+1 besplatno, bilo koji POKLON)</li>
<li class="ql-align-justify">σύμβασηi o isporuci audio ili video zapisa ili τιμολόγιοalnog softvera ako ih je καταναλωτής otpečatio nakon παράδοσηe;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi alkoholnim pićima čija se παράδοσηa odgađa nakon trideset dana i čija vrijednost dogovorena pri sklapanju σύμβασηa ovisi o fluktuacijama na tržištu na koje profesionalci ne mogu utjecati;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe ili usluga, čija τιμή ovisi o fluktuacijama na financijskom tržištu na koje profesionalci ne mogu utjecati i do kojih će vjerojatno doći tijekom razdoblja υπαναχώρησηa;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga u potpunosti izvršeni prije isteka roka za υπαναχώρησηe i čije je εκτέλεσηe započelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe; (na primjer: provizija za πληρωμή po pouzeću, brza dostava, osiguranje paketa)</li>
<li class="ql-align-justify">σύμβασηi o radovima na održavanju ili popravcima koji se moraju hitno εκτελέσειti u καταναλωτήςevoj kući i izričito to zatražiti, u granicama rezervnih dijelova i radova koji su strogo potrebni za reagiranje u hitnim slučajevima;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga smještaja, prijevoza, ugostiteljstva i razonode, koji se moraju pružati ορισμένog datuma ili s ορισμένom učestalošću;</li>
<li class="ql-align-justify">σύμβασηi o isporuci digitalnog sadržaja koji nisu isporučeni na materijalnom mediju, čije je εκτέλεσηe počelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe. (na primjer: preuzeti digitalni sadržaji, e-knjige)</li>
</ul>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: </strong>Ako dobrovoljno vratite προϊόν za koji nije moguće odstupanje od αγοράς,&nbsp;nakon perioda za επιστροφή od 90 dana, nakon 14 dana od ειδοποίησηi o odstupanju od αγοράς, koji nije kupljen u μας κατάστημαi Takav Vam προϊόν μπορείmo vratiti natrag isključivo uz naplatu 10 EUR što predstavlja trošak obrade neopravdane παράποναe. Προϊόν koji nije preuzet bit će uništen nakon 2 mjeseca.</p>
<p class="ql-align-justify"><strong>POZITIVNO ĆE BITI RJEŠENI SAMO ZAHTJEVI KOJI ISPUNJAVAJU SVE NAVEDENE UVJETE.</strong></p>
<p class="ql-align-justify">Više o Γενικοίς Όρους i politici cookies μπορείte pročitati na poveznicama pri dnu stranice.</p>
</div>
        <img decoding="async" id="close_withdrawal_policy" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
    </div>
</div>
        <div id="custom_mailing_checkout_field">
            <p class="form-row email_opt_in" id="email_opt_in_field" data-priority="15"><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="email_opt_in" id="email_opt_in" value="1" class="input-checkbox "  /> Da, želim prvi/a saznati za trenutne akcije. <span id="mailing_read_more_link" style="text-decoration: underline">Više informacija</span>&nbsp;<span class="optional">(προαιρετικό)</span></label></span></p>        </div>
        <div id="checkout-popup">
            <div class="checkout-popup-wrapper">
                <img decoding="async" class="img-info" src="https://images.vigo-shop.com/general/vigoshop_info.svg">
                <span>HSplus d.o.o. μπορεί UPOTREBLJAVATI osobne podatke koji su poslani (uključujući povijest αγοράς i σαςe postavke) za prilagođenu komunikaciju putem SMS poruka, telefonskih poziva, tiskanih kataloga i/ili e-pošte u vezi s προϊόνima, posebnim ponudama, istraživanjima, promocijama, događajima i ostalim komunikacijama. U svakom στιγμή μπορείte povući svoju suglasnost za primanje e-pošte pritiskanjem veze za odjavu pretplate u svakoj poruci e-pošte. Dodatne informacije, uključujući informacije o ostvarivanju σαςih prava u vezi s osobnim podacima koje smo prikupili, potražite u                     <span id="terms-conditions-content_email-checkbox">
                        UVJETIMA I ODREDBAMA                    </span>.
                        <div class="terms-conditions-content_email" style="display: none;">
                            <h2 class="ql-align-justify"><strong>Γενικοί Όροι Συναλλαγών</strong></h2>
<p class="ql-align-justify"></p>
<p class="ql-align-justify"><a class="button" href="https://images.hs-plus.com/legal/terms-conditions/terms-conditions_Vigoshop_hr.pdf" style="background-color: lightgray"> Spremite i ispišite</a></p>
<p class="ql-align-justify">Dobro došli na ιστότοπο <a href="https://vigoshop.gr">vigoshop.gr</a> kojim upravlja εταιρεία HS plus d.o.o., Gmajna 8, SI-1236 Trzin (dalje u tekstu: εταιρεία).</p>
<p class="ql-align-justify">Ovi se Γενικοί Όροι συναλλαγών primjenjuju na sve aktivnosti omogućene u ηλεκτρονικoj κατάστημαi koja je dostupna na&nbsp;<a href="https://vigoshop.gr">vigoshop.gr</a> (dalje u tekstu: ιστότοπο). Γενικοί Όροι συναλλαγών υποχρέωσηjući su za sve χρήστηςe. Παρακαλούμε vas da ih διαβάσετε προσεκτικά. Ako se ne slažete s bilo kojim dijelom ovih Općih όρων συναλλαγών ili ako se u potpunosti ne slažete s njima, ne smijete upotrebljavati μας ιστότοπο i μας usluge. Γενικοί Όροι συναλλαγών predstavljaju valjani σύμβαση συνάπτεται μεταξύ vas i εταιρείας.</p>
<p class="ql-align-justify">Ιστότοπος dostupno je „takvo kakvo jest”, a εταιρεία ne pruža εγγύησης, ni neizravno ni izravno, koja se odnose na pravo vlasništva, marketing ili prikladnost za bilo koju svrhu προϊόνa koji su predstavljeni na web-mjestu.</p>
<p class="ql-align-justify">Vlasnik ιστότοπου postupat će s dužnom pažnjom kako bi pokušao osigurati da podaci navedeni na web-mjestu budu detaljni i ažurni. Istodobno, vlasnik ιστότοπου zadržava pravo izmijeniti sadržaj ιστότοπου ili ga prestati dopunjavati u bilo kojem στιγμή, bez prethodne najave. Osim toga, vlasnik ιστότοπου μπορεί izmijeniti usluge, προϊόνe, τιμές ili programe opisane na ovom web-mjestu u bilo kojem στιγμή i bez najave.</p>
<h2 class="ql-align-justify"><strong>1 DEFINICIJE</strong></h2>
<p class="ql-align-justify"><strong>Εταιρεία</strong>&nbsp;je εταιρεία HS plus d.o.o., Gmajna 8, SI-1236 Trzin koja je vlasnik ιστότοπου&nbsp;<a href="https://vigoshop.gr">vigoshop.gr</a>&nbsp;i upravlja njime.</p>
<p class="ql-align-justify"><strong>Ιστότοπος&nbsp;</strong>je ιστότοπο dostupno na&nbsp;<a href="https://vigoshop.gr">https://vigoshop.gr</a>, kojom upravlja εταιρεία, i u okviru koje djeluje ηλεκτρονικa κατάστημαa.</p>
<p class="ql-align-justify"><strong>Χρήστης</strong>&nbsp;je svaka φυσικό πρόσωπο koja se koristi ιστότοποm.</p>
<p class="ql-align-justify"><strong>Αγοραστής</strong>&nbsp;(ili&nbsp;<strong>„vi”</strong>&nbsp;) je svaka φυσικό πρόσωπο koja εκτελέσει αγορά u ηλεκτρονικoj κατάστημαi.</p>
<p class="ql-align-justify"><strong>Καταναλωτής</strong>&nbsp;je φυσικό πρόσωπο koja nabavlja ili upotrebljava robu i usluge u svrhe izvan opsega njegove profesionalne djelatnosti ili djelatnosti s ciljem ostvarenja dohotka. Za potrebe ovih Općih όρων συναλλαγών svi αγοραστές smatraju se i καταναλωτήςima.</p>
<p class="ql-align-justify"><strong>Πολιτική Απορρήτου</strong>&nbsp;έγγραφο je koji sadržava sve informacije o obradi προσωπικών δεδομένων koja se odvija u okviru ιστότοπου. Navedena Πολιτική Απορρήτου dostupna su&nbsp;<a href="https://vigoshop.gr/pravila-o-zastiti-privatnosti">ovdje</a>.</p>
<p class="ql-align-justify"><strong>Πολιτική Cookies</strong>&nbsp;έγγραφο je koji sadržava sve informacije o upotrebi cookies koja se odvija u okviru ιστότοπου. Navedena Πολιτική Cookies dostupna su&nbsp;<a href="https://vigoshop.gr/pravila-o-kolacicima">ovdje</a>.</p>
<h2 class="ql-align-justify"><strong>2. VIGOSHOP.HR INTERNETSKA TRGOVINA</strong></h2>
<p class="ql-align-justify">Γενικοίς Όρους συναλλαγών utvrđuje se rad ηλεκτρονικe κατάστημαe, definiraju prava i obveze χρήστηςa i ηλεκτρονικe κατάστημαe te uređuje poslovni odnos μεταξύ ηλεκτρονικe κατάστημαe i αγοραστή.&nbsp;Γενικοί Όροι συναλλαγών koji vrijede u στιγμή αγοράς (u στιγμή kada se vrši ηλεκτρονικa παραγγελία) υποχρέωσηjući su za αγοραστή. Svaki put kada se εκτελέσει παραγγελία, χρήστης će biti ενημερωμένος o Γενικοίς Όρους συναλλαγών. Εκτέλεσηem παραγγελίας χρήστης επιβεβαιώνει da je ενημερωμένος o ovim Γενικοίς Όρους συναλλαγών.</p>
<p class="ql-align-justify">Επιβεβαίωση Općih όρων συναλλαγών pri εκτέλεσηu παραγγελίας u μας ηλεκτρονικoj κατάστημαi predstavlja υποχρέωσηjući σύμβαση μεταξύ vas i εταιρείας. Παρακαλούμε vas da&nbsp;<strong>διαβάσετε προσεκτικά</strong>&nbsp;Γενικούς Όρους συναλλαγών&nbsp;<strong>πριν από την επιβεβαίωση παραγγελίας</strong>. Ako se ne slažete s našim Γενικοίς Όρους συναλλαγών, ne μπορείte upotrebljavati usluge koje pruža μας ηλεκτρονικa κατάστημαa. Επίσης, nije moguće djelomično se složiti s Γενικοίς Όρους συναλλαγών. Da biste dovršili αγορά, morate prihvatiti&nbsp;<strong>cjelokupne</strong>&nbsp;Γενικούς Όρους συναλλαγών koji su na snazi u στιγμή αγοράς.</p>
<h3 class="ql-align-justify"><strong>i. Upotreba ηλεκτρονικe κατάστημαe</strong></h3>
<p class="ql-align-justify">Εταιρεία upravlja ηλεκτρονικom κατάστημαom u skladu s Γενικοίς Όρους συναλλαγών. Internetska κατάστημαa dostupna je αγοραστέςma u svakom στιγμή, pri čemu εταιρεία zadržava pravo privremeno onemogućiti ili obustaviti ηλεκτρονικu κατάστημαu bez prethodne najave.</p>
<p class="ql-align-justify">Postoji mogućnost da će ηλεκτρονικa κατάστημαa biti privremeno nedostupna ili da privremeno δεν θα biti moguće εκτελέσειti πληρωμής zbog održavanja i ažuriranja ηλεκτρονικe κατάστημαe. Εταιρεία δεν θα biti odgovorna za štetu koju biste mogli pretrpjeti tijekom održavanja i/ili ažuriranja ηλεκτρονικe κατάστημαe.</p>
<h3 class="ql-align-justify"><strong>ii. Εκτέλεσηe παραγγελίας u ηλεκτρονικoj κατάστημαi</strong></h3>
<p class="ql-align-justify">Smatra se da je kupoprodajni σύμβαση μεταξύ dobavljača i αγοραστή συνάπτεται kad αγοραστής επιβεβαιώσει παραγγελία (αγοραστής dobiva poruku e-pošte s potvrdom statusa „Παραγγελία επιβεβαιωμένη”). Od tog su στιγμa sve τιμές i ostali όροι αγοράς fiksni i primjenjivi i za pružatelja usluge i za αγοραστή. Kupoprodajni σύμβαση učitava se na poslužitelj εταιρείας u elektroničkom obliku.</p>
<p class="ql-align-justify">
<p class="ql-align-justify">Postupak αγοράς:</p>
<ol>
<li class="ql-align-justify">korak: U ponudi dostupnoj u ηλεκτρονικoj κατάστημαi αγοραστής odabire željeni artikl i željenu količinu te επιβεβαιώνει svoj izbor pritiskom gumba „Προσθήκη u καλάθι”. Ako αγοραστής želi kupiti nekoliko διαφορετικih artikala, postupak treba ponoviti za svaki pojedinačni artikl. Nakon što αγοραστής završi postupak odabira προϊόνa, μπορεί nastaviti s postupkom αγοράς pritiskom gumba „Kreni na πληρωμή”.</li>
<li class="ql-align-justify">korak: U ovom koraku αγοραστής ispunjava obrazac sa svojim osobnim podacima potrebnima za παράδοσηu željene παραγγελίας. Nakon ispunjavanja obrasca, αγοραστής u ορισμένim slučajevima μπορεί odabrati μεταξύ nekoliko mogućnosti αποστολής i dodati druge προϊόνe ili usluge svojoj narudžbi. U ovom koraku αγοραστής je ενημερωμένος i o planiranom datumu παράδοσηe. Prije dovršenja παραγγελίας, αγοραστής ima mogućnost izbora μεταξύ διαφορετικih načina πληρωμής. Uzimajući u obzir odabrani izbor, konačni iznos koji treba platiti za παραγγελία izτιμολόγιοava se još jednom prije završetka αγοράς. Αγοραστής επιβεβαιώνει postupak αγοράς pritiskom gumba „Završi αγορά”. </li>
<li class="ql-align-justify">korak: Nakon završetka αγοράς, kupcu se na web-mjestu prikazuje poruka potvrde u kojoj se navodi da je παραγγελία uspješno poslana i prikazuju pojedinosti poslane παραγγελίας. Uz to, αγοραστής prima i potvrdnu poruku e-pošte na adresu e-pošte navedenu u 2. točki, pri čemu se u navedenoj potvrdnoj poruci e-pošte nalaze pregled παραγγελίας, upute za upotrebu naručenih προϊόνa i upute za υπαναχώρησηe od αγοράς ili podnošenje παράποναe ako αγοραστής nije zadovoljan προϊόνom ili ga više ne želi.</li>
</ol>
<p class="ql-align-justify">Svi podaci koje nam dostavite tijekom slanja παραγγελίας bit će obrađeni u skladu s Pravilima o zaštiti privatnosti koje μπορείte pronaći na dnu ιστότοπου.</p>
<p class="ql-align-justify">Σας ενημερώνουμε vas da će se vrijednost cjelokupne αγοράς, uključujući παράδοσηu ili druge troškove koji vrijede za αγορά, naplatiti nakon potvrde σαςe παραγγελίας. Ειδοποίησηit ćemo vas o svim dodatnim troškovima prije nego što εκτελέσειte αγορά. S odabranim načinom πληρωμής mogu biti povezati i dodatni troškovi.</p>
<p class="ql-align-justify">Μπορείte pratiti i upravljati svojom παραγγελία u RMA aplikaciji na ovoj poveznici <a href="https://rma.hs-plus.com/language/el/" rel="noopener noreferrer" target="_blank" style="background-color: rgb(248, 248, 248); color: rgba(var(--sk_highlight,18,100,163),1);">https://rma.hs-plus.com/language/el/</a>. Za pristup Vam je potreban broj παραγγελίας ili kod za praćenje te e-mail ili broj telefona koje ste unijeli u παραγγελίαςnicu prilikom αγοράς. U ovoj aplikaciji (ako παραγγελία još nije u pripremi) επίσης μπορείte otkazati παραγγελία, promijeniti sadržaj παραγγελίας, adresu, broj telefona, pratiti παραγγελία te επίσης pristupiti επιβεβαιώσει o plaćanju.</p>
<h3 class="ql-align-justify"><strong>iii. Τιμές, načini πληρωμής i promocije</strong></h3>
<p class="ql-align-justify"><strong>Τιμές</strong></p>
<p class="ql-align-justify">Sve τιμές navedene na web-mjestu izražene su u EUR i uključuju PDV.&nbsp;Τιμές se primjenjuju od στιγμa kada je παραγγελία izvršena. Ponuda vrijedi do opoziva.</p>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ:&nbsp;</strong>Ovo je λιανικa ηλεκτρονικa κατάστημαa čija su ciljana publika isključivo τελικ αγοραστές (B2C). Iz tog razloga na ovom web-mjestu ne omogućujemo B2B prodaju, a ne μπορείmo ponuditi ni mogućnost izdavanja τιμολόγιοa pravnim subjektima. To znači i da naknadne korekcije τιμολόγιοa (s fizičke na pravnu osobu) nisu moguće zato što se prodajna transakcija zaključuje isključivo s fizičkom osobom.</p>
<p class="ql-align-justify">Ako želite uspostaviti B2B odnos s našom tvrtkom i kupiti veće količine naših προϊόνa (cijelo pakiranje / karton), μπορείte se obratiti μας κατάστημαi na veliko na&nbsp;<a href="/cdn-cgi/l/email-protection#2a4818486a42595a465f59045943"><span class="__cf_email__" data-cfemail="27451545674f54574b525409544e">[email&#160;protected]</span></a>.</p>
<p class="ql-align-justify"><strong>Načini πληρωμής</strong></p>
<p class="ql-align-justify">U μας ηλεκτρονικoj κατάστημαi μπορείte upotrebljavati επόμενe načine πληρωμής:</p>
<ul>
<li class="ql-align-justify">Πληρωμή pouzećem – αγοραστής plaća τιμολόγιο gotovinom ili kreditnom karticom dostavnom kuriru koji robu isporučuje na adresu αγοραστή;</li>
<li class="ql-align-justify">Πληρωμή kreditnom karticom;</li>
<li class="ql-align-justify">Πληρωμή preko PayPala.</li>
</ul>
<p class="ql-align-justify">Εταιρεία zadržava pravo provjere odabranog načina πληρωμής s pomoću provjere autentičnosti. Nadalje, zadržavamo pravo daljnje provjere odabranog načina πληρωμής tražeći da nam pošaljete dokaz o uplati.&nbsp;</p>
<p class="ql-align-justify">Upoznati ste s činjenicom da morate platiti cjelokupan iznos παραγγελίας (uključujući sve troškove povezane s transakcijom i παράδοσηom) u skladu s odabranim načinom πληρωμής. Jamčite da imate sposobnost i pravo izvršavati transakcije s pomoću kreditne kartice ili bilo kojeg drugog odabranog načina πληρωμής.</p>
<p class="ql-align-justify"><strong>Promocije</strong></p>
<p class="ql-align-justify">Ιστότοπος nudi i popuste i druge promocije kojima se snižavaju τιμές προϊόνa (dalje u tekstu: promocije). Svaka promocija nudi se po sniženoj cijeni za ορισμένo (ograničeno) razdoblje utvrđeno za svaku pojedinačnu promociju. Snižena τιμή odnosi se na sve αγοράς izvršene tijekom trajanja promocije.</p>
<p class="ql-align-justify">Želimo vas upozoriti da su ορισμένe promocije ograničene samo na nove χρήστηςe koji još uvijek nisu εκτελέσειli αγορά u μας ηλεκτρονικoj κατάστημαi. U tom se slučaju navedena promocija ne odnosi na postojeće χρήστηςe. Svaki pokušaj upotrebe takvih promocija bit će odmah blokiran, a adrese e-pošte upotrebljavane za izvršenje spomenute zlouporabe bit će izbrisane bez prethodne najave. Popusti i druge promocije obično nisu kumulativni, osim ako se u okviru svake pojedinačne promocije izričito ne navodi drugačije.</p>
<h3 class="ql-align-justify"><strong>iv. Troškovi i dostava robe</strong></h3>
<p class="ql-align-justify">U τιμές nisu uključeni troškovi αποστολής. Troškove αποστολής μπορείte pronaći u ηλεκτρονικoj κατάστημαi, gdje επίσης imate mogućnost odabira načina αποστολής. Naša εταιρεία nudi dva načina αποστολής: standardna i brza. Ključna razlika μεταξύ ove dvije metode αποστολής jest u tome što se s παραγγελίαma za ekspresnu αποστολή postupa, i one se pakiraju, s većim prioritetom.&nbsp;&nbsp;Prije odabira željenog načina αποστολής, provjerite τιμή navedenu pored svakog pojedinačnog izbora. Tijekom podnošenja παραγγελίας vidjet ćete pregled τιμή koji se sastoji od troškova αγοράς, troškova αποστολής i ukupnih troškova.</p>
<p class="ql-align-justify">Ako odaberete πληρωμή pouzećem, kurirska služba naplatit će naknadu za αποστολή paketa izτιμολόγιοatu tijekom podnošenja παραγγελίας.&nbsp;Ako odlučite platiti kreditnom karticom ili putem PayPala, navedeni trošak δεν θα vam biti naplaćen.</p>
<p class="ql-align-justify">Προϊόνi koje ste naručili dostavit će se na adresu koju ste unijeli kao adresu za αποστολή na μαςm web-mjestu.</p>
<p class="ql-align-justify">Predviđeni rok αποστολής dostupan je kupcu nakon predaje παραγγελίας. Εταιρεία zadržava pravo produžiti rok αποστολής u slučaju povećane potražnje ili kašnjenja usluge αποστολής. Dostave se uglavnom izvršavaju prije podneva. Ako tijekom αποστολής ne μπορείte prihvatiti paket, kurirska služba pokušat će se dogovoriti s kupcem o novom načinu i mjestu αποστολής.</p>
<p class="ql-align-justify">Ako kurir za αποστολή ne uspije kontaktirati αγοραστή, slijedi drugi pokušaj αποστολής paketa επόμενi radni dan. Ako i drugi pokušaj αποστολής ne uspije, paket i njegov sadržaj vraćaju se pošiljatelju.</p>
<p class="ql-align-justify">Iznos plaćen za neuspješno isporučene i unaprijed plaćene παραγγελίας automatski se vraća u roku od 8 (osam) radnih dana skladišta koje bilježi επιστροφή paketa ili εταιρείας koja utvrdi da paket nije uspješno isporučen.</p>
<p class="ql-align-justify"><strong>Sigurnosna upozorenja za upotrebu svih προϊόνa</strong></p>
<p class="ql-align-justify">Upotreba προϊόνa iz μας ηλεκτρονικe κατάστημαe μπορεί predstavljati ορισμένi κίνδυνο για τη ζωή και την υγεία. Morate izričito επιβεβαιώσειti da razumijete da uporaba navedenih προϊόνa predstavlja takav rizik koji u potpunosti prihvaćate. Παραγγελίαvanjem i/ili upotrebom spomenutih προϊόνa επιβεβαιώνειte da ste upoznati s navedenim rizicima koji mogu uključivati rizik od bolesti, ozljeda, invaliditeta ili smrti. Morate preuzeti punu odgovornost za sve posljedice koje bi mogle nastati naručivanjem i/ili upotrebom προϊόνa.</p>
<p class="ql-align-justify">Prije upotrebe bilo kojeg προϊόνa morate pročitati upute za upotrebu.</p>
<p class="ql-align-justify">Prije upotrebe svaki προϊόν mora biti testiran na siguran način. Ako niste potpuno sigurni kako testirati προϊόν, ljubazno vas παρακαλούμε da ga ne upotrebljavate, da nas o tome ειδοποίησηite ili ga vratite.</p>
<p class="ql-align-justify">Εταιρεία ne preuzima nikakvu odgovornost za neizravnu ili izravnu štetu nastalu upotrebom προϊόνa naručenih na web-mjestu, bez obzira je li αγοραστής ili treća strana προϊόνe upotrebljavao ispravno ili neispravno. Ovo izuzeće primjenjuje se u najvećoj mogućoj mjeri dopuštenoj zakonodavstvom.</p>
<p class="ql-align-justify">U slučaju zahtjeva za naknadu štete podnesenog protiv εταιρείας, εταιρεία ograničava svoju odgovornost za štete na trostruku tržišnu τιμή προϊόνa.</p>
<p class="ql-align-justify">Nastojimo pružiti što detaljnije i preciznije opise προϊόνa i fotografije. Ipak, ne μπορείmo jamčiti da su svi podaci o προϊόνu i njihove fotografije potpuno točni. Budući da se ορισμένi προϊόνi mogu nabaviti kod διαφορετικih dobavljača, moguća su manja odstupanja u pakiranju ili izgledu προϊόνa. Spomenuta odstupanja ni na koji način ne utječu na kvalitetu ili funkcionalnost προϊόνa.&nbsp;&nbsp;</p>
<h3 class="ql-align-justify"><strong>v. Pravo na υπαναχώρησηe od Ugovora</strong></h3>
<p class="ql-align-justify">Αγοραστής koji εκτελέσει αγορά u μας ηλεκτρονικoj κατάστημαi ima pravo odustati od Ugovora. Navedeno υπαναχώρησηe od Ugovora μπορεί se izjaviti εντός 90 ημερών od datuma παράδοσηe παραγγελίας, a tvrtku o tome obavještava dostavna služba.&nbsp;Αγοραστής ne mora navesti razlog svoje odluke. Navedeno το δικαίωμα υπαναχώρησης od Ugovora primjenjuje se samo na kupce koji su fizičke osobe i koji robu i usluge stječu ili upotrebljavaju izvan svoje profesionalne djelatnosti ili djelatnosti s ciljem ostvarenja dohotka.&nbsp;</p>
<p class="ql-align-justify">Smatra se da je izjava o υπαναχώρησηu izdana pravodobno ako je podnesena u roku za υπαναχώρησηe od Ugovora. Izjavu o υπαναχώρησηu μπορείte dostaviti na unaprijed dogovorenom obrascu ili nam je μπορείte poslati e-poštom.&nbsp;Obrazac μπορείte pronaći na kartici „Pravo na υπαναχώρησηe od αγοράς” pri dnu ιστότοπου. Teret dokazivanja koji se odnosi na ostvarivanje prava na υπαναχώρησηe iz ovog članka snosi καταναλωτής.</p>
<p class="ql-align-justify"><strong>Odustajanjem od Ugovora αγοραστής μπορεί steći επιστροφή novca ili zamijeniti προϊόν, ali ne μπορεί iskoristiti kredit!</strong></p>
<p class="ql-align-justify">Nakon predaje izjave o υπαναχώρησηu, svoje προϊόνe morate vratiti εντός 14 ημερών od datuma izjave o υπαναχώρησηu. Στείλτε τα εμπορεύματα στη διεύθυνσή μας: <strong>HS PLUS d.o.o., Poštanska ulica 25, 10410 Velika Gorica</strong>.&nbsp;Smatra se da je roba pravovremeno vraćena ako je pošaljete prije isteka roka za επιστροφή u trajanju od 90 dana.&nbsp;Morate vratiti neizmijenjenu količinu neoštećenih προϊόνa, zapakiranih u αρχική συσκευασία ili ambalažu koja προϊόνe štiti na isti način kao i originalna ambalaža. Ne μπορείte vratiti oštećene προϊόνe, προϊόνe u izmijenjenoj količini ili προϊόνe upakirane u neprikladnu ambalažu. Παρακαλούμε vratite artikle kao paketnu αποστολήu, a ne kao pismo, osiguravajući da je paket označen kodom za odustanak od αγοράς, koji ćete dobiti tijekom postupka.Ako paket nije pravilno označen (poslan bez koda za odustanak od αγοράς), to μπορεί značajno produžiti vrijeme potrebno za obradu σαςeg zahtjeva. U slučaju υπαναχώρησηa od σύμβασηa, podmirit ćete samo troškove επιστροφήa robe, s tim da se navedeni troškovi ne mogu nadoknaditi.</p>
<p class="ql-align-justify">Ako ste već platili naručenu robu, odmah ćemo, ili najkasnije u roku od 8 radnih dana od slanja paketa na μας adresu, nadoknaditi sve zaprimljene uplate i uplate koje ste εκτελέσειli u vezi s παραγγελία. Smatra se da je paket poslan na μας adresu kada ga μας skladište evidentira kao vraćeni paket. Zadržavamo pravo zadržati primljenu uplatu do επιστροφήa προϊόνa koji su predmet υπαναχώρησηa od σύμβασηa.</p>
<p class="ql-align-justify">Zaprimljene uplate nadoknadit ćemo istim sredstvima πληρωμής koja ste upotrebljavali tijekom αγοράς. U slučaju πληρωμής pouzećem nabavna τιμή vratit će na broj tekućeg τιμολόγιοa koji ste naveli u svom obrascu.</p>
<p class="ql-align-justify">Εξαίρεση od prava na υπαναχώρηση</p>
<p class="ql-align-justify">Iskorištavanje prava na υπαναχώρησηe isključeno je za επόμενe σύμβασηe:</p>
<ul>
<li class="ql-align-justify">σύμβασηi o isporuci robe izrađeni prema specifikacijama καταναλωτήςa ili jasno personalizirani;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi robom koji se mogu pogoršati ili brzo isteći;</li>
<li class="ql-align-justify">σύμβασηi o nabavi novina, periodike ili časopisa, osim σύμβασηa o pretplati na ove publikacije;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koju je καταναλωτής otpečatio nakon παράδοσηe i koja se ne μπορεί vratiti iz higijenskih ili zdravstvenih razloga (na primjer: kozmetika, sredstva za čišćenje, paste za poliranje i kupaći kostim, donje rublje, čarape)</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe koja se nakon παράδοσηe i po svojoj prirodi nerazdvojno miješaju s drugim artiklima; (na primjer: set/kit, svi προϊόνi iz Mystery box -a, oba προϊόνa iz ponude 1+1 besplatno, bilo koji POKLON);</li>
<li class="ql-align-justify">σύμβασηi o isporuci audio ili video zapisa ili τιμολόγιοalnog softvera ako ih je καταναλωτής otpečatio nakon παράδοσηe;</li>
<li class="ql-align-justify">σύμβασηi o opskrbi alkoholnim pićima čija se παράδοσηa odgađa nakon trideset dana i čija vrijednost dogovorena pri sklapanju σύμβασηa ovisi o fluktuacijama na tržištu na koje profesionalci ne mogu utjecati;</li>
<li class="ql-align-justify">σύμβασηi o isporuci robe ili usluga, čija τιμή ovisi o fluktuacijama na financijskom tržištu na koje profesionalci ne mogu utjecati i do kojih će vjerojatno doći tijekom razdoblja υπαναχώρησηa;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga u potpunosti izvršeni prije isteka roka za υπαναχώρησηe i čije je εκτέλεσηe započelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe; (na primjer: provizija za πληρωμή po pouzeću, brza dostava, osiguranje paketa);</li>
<li class="ql-align-justify">σύμβασηi o radovima na održavanju ili popravcima koji se moraju hitno εκτελέσειti u καταναλωτήςevoj kući i izričito to zatražiti, u granicama rezervnih dijelova i radova koji su strogo potrebni za reagiranje u hitnim slučajevima;</li>
<li class="ql-align-justify">σύμβασηi o pružanju usluga smještaja, prijevoza, ugostiteljstva i razonode, koji se moraju pružati ορισμένog datuma ili s ορισμένom učestalošću;</li>
<li class="ql-align-justify">σύμβασηi o isporuci digitalnog sadržaja koji nisu isporučeni na materijalnom mediju, čije je εκτέλεσηe počelo nakon izričitog prethodnog pristanka καταναλωτήςa i izričitog odricanja od prava na υπαναχώρησηe (na primjer: preuzeti digitalni sadržaji, e-knjige).</li>
</ul>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: </strong>Ako dobrovoljno vratite προϊόν za koji nije moguće odstupanje od αγοράς,&nbsp;nakon perioda za επιστροφή od 90 dana, nakon 14 dana od ειδοποίησηi o odstupanju od αγοράς, koji nije kupljen u μας κατάστημαi Takav Vam προϊόν μπορείmo vratiti natrag isključivo uz naplatu 10 EUR što predstavlja trošak obrade neopravdane παράποναe. Προϊόν koji nije preuzet bit će uništen nakon 2 mjeseca.</p>
<h3 class="ql-align-justify"><strong>vi. Παράποναe</strong></h3>
<p class="ql-align-justify">Ako otkrijete da σας προϊόν ne radi ispravno ili ste dobili neprimjeren ili oštećen προϊόν, na raspolaganju su vam επόμενe mogućnosti:</p>
<ul>
<li class="ql-align-justify">provedba εγγύησης αποστολής,</li>
<li class="ql-align-justify">provedba εγγύησης na tehničke προϊόνe i</li>
<li class="ql-align-justify">podnošenje παράποναe προϊόνa.</li>
</ul>
<p class="ql-align-justify"><strong>a) Εγγύηση παράδοσηe</strong></p>
<ol>
<li class="ql-align-justify">Dajemo dodatno εγγύηση za besprijekornu παράδοσηu koje se μπορεί primijeniti&nbsp;<strong>u roku od 48 sati nakon primitka προϊόνa</strong>.</li>
<li class="ql-align-justify">Ako su σαςi προϊόνi oštećeni tijekom transporta ili nisu u skladu s σαςom παραγγελία, ljubazno vas παρακαλούμε da nam prijavite grešku u roku od 48 sati od παράδοσηe. Pošaljite nam poruku e-pošte koja sadrži fotografiju pakiranja (naljepnica mora biti jasno istaknuta na fotografiji) i primljenog προϊόνa koji jasno ukazuje na oštećeno područje.</li>
<li class="ql-align-justify">Dat ćemo prednost rješavanju σαςeg zahtjeva u najkraćem mogućem roku i pružit ćemo vam zamjenski προϊόν.</li>
<li class="ql-align-justify">Ako je zahtjev poslan prekasno, riješit će se kao παράποναa προϊόνa.</li>
</ol>
<p class="ql-align-justify"></p>
<p class="ql-align-justify"><strong>b) Εγγύηση na tehničke προϊόνe</strong></p>
<p class="ql-align-justify">Za ορισμένe προϊόνe u μας ponudi primjenjuje se jamstveno razdoblje od 24 mjeseci. Εγγύηση se μπορεί primijeniti samo za tehničke προϊόνe i električne uređaje iz μας ponude. Jamstveno razdoblje od 24 mjeseci započinje na dan primitka robe. Svoje εγγύηση μπορείte ostvariti u skladu Zakonom o zaštiti καταναλωτήςa, na temelju τιμολόγιοa koji predstavlja επιβεβαίωση o jamstvu.</p>
<p class="ql-align-justify">Εταιρεία zadržava pravo odbiti εγγύηση ako uz zahtjev nije priložen τιμολόγιο ili ako τιμολόγιο nije čitljiv ili na drugi način nedostaje.</p>
<p class="ql-align-justify">Εγγύηση se ne primjenjuje ako:</p>
<ul>
<li class="ql-align-justify">je προϊόν fizički oštećen;</li>
<li class="ql-align-justify">προϊόν pokazuje znakove trošenja zbog uobičajene upotrebe;</li>
<li class="ql-align-justify">προϊόν predstavlja nedostatke koji su nastali kao rezultat nepravilne, neprikladne ili neoprezne upotrebe προϊόνa.</li>
</ul>
<p class="ql-align-justify">Προϊόνi za koje želite iskoristiti εγγύηση moraju se ispitati, zbog čega vas παρακαλούμε da svome zahtjevu za εγγύησηm priložite fotografije ili video isječke koji prikazuju nedostatak. Ako je potrebno, zamolit ćemo vas da nam vratite προϊόν kako bismo ga mogli ispitati.</p>
<p class="ql-align-justify">Ako odobrimo σας zahtjev za εγγύησηm, pružit ćemo vam novi προϊόν. Imate pravo zatražiti i popravak svojeg προϊόνa, ali morate biti svjesni činjenice da je razdoblje popravka duže od razdoblja παράδοσηe novog προϊόνa. Ako popravak traje više od 45 dana, σας će προϊόν biti zamijenjen novim. Ako se novi προϊόν ne μπορεί dostaviti, vratit ćemo vam τιμή προϊόνa u cijelosti.</p>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći na kartici „Zamjena u jamstvu” pri dnu ιστότοπου.</p>
<p class="ql-align-justify"><strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Εταιρεία HS Plus prihvatit će επιστροφή samo onih paketa koji sadržavaju προϊόνe kupljene na web-mjestu. Svi paketi koje pošalje pojedinac, a koji ne sadržavaju προϊόνe kupljene u μας εταιρεία, vratit će se pošiljatelju o njegovom trošku.</strong></p>
<p class="ql-align-justify">&nbsp;</p>
<p class="ql-align-justify"><strong>c) Παράποναa προϊόνa zbog materijalnih nedostataka</strong></p>
<ol>
<li class="ql-align-justify">Ako προϊόν ne radi ispravno, pošaljite nam poruku e-pošte na <a href="/cdn-cgi/l/email-protection#f59c9b939ab5839c929a869d9a85db9d87"><span class="__cf_email__" data-cfemail="630a0d050c23150a040c100b0c134d0b11">[email&#160;protected]</span></a> i pomoći ćemo pružanjem potrebnog objašnjenja. Na taj ćete način spriječiti bilo kakvu potencijalnu zlouporabu προϊόνa i štetu na samom προϊόνu, kao i bilo kakve ozljede sebe ili drugih.</li>
<li class="ql-align-justify">Ako σας προϊόν ne radi, μπορείte podnijeti παράποναu navodeći materijalne nedostatke na προϊόνu. Slučajevi koji se smatraju materijalnim nedostacima na προϊόνu navedeni su u odjeljku vii. ovih Općih όρων συναλλαγών. Materijalne nedostatke μπορείte primijeniti samo ako su navedeni nedostaci već postojali u στιγμή αγοράς, ali su otkriveni kasnije.</li>
<li class="ql-align-justify">Ako σας προϊόν ne radi zbog materijalnog nedostatka, παρακαλούμε vas da nedostatak prijavite odmah nakon što ga otkrijete, ali ni u kojem slučaju kasnije od dva mjeseca od dana kada ste taj nedostatak otkrili. Pošaljite nam poruku e-pošte s fotografijom ili video isječkom s prikazom neispravnog προϊόνa, na temelju kojeg se nedvosmisleno μπορεί utvrditi da προϊόν ne radi. Ako je potrebno, zamolit ćemo vas da nam vratite predmetni προϊόν kako bismo ga mogli ispitati i utvrditi nedostatak προϊόνa.</li>
<li class="ql-align-justify">Nećemo moći razmotriti σαςu παράποναu za προϊόνe koji su oštećeni zbog nepravilne ili neprikladne upotrebe ili poμαςnja koje nije strogo neophodno za utvrđivanje prirode, svojstva i funkcioniranja robe. Ako želite επιστροφή predmetnog προϊόνa nakon odbijanja σαςe παράποναe, poslat ćemo vam ga zajedno s τιμολόγιοom za troškove povezane s παράδοσηom navedenog προϊόνa.</li>
<li class="ql-align-justify">Εταιρεία je odgovorna za nedostatke u izradi προϊόνa koji se pojave kroz 2 godine nakon παράδοσηe. Εταιρεία je dužna odgovoriti na prigovor u roku od 3 radna dana.</li>
<li class="ql-align-justify">Ako izvršavate nalog o materijalnom nedostatku, dostupne su vam επόμενe mogućnosti:</li>
</ol>
<ul>
<li class="ql-align-justify">zamjena προϊόνa,</li>
<li class="ql-align-justify">επιστροφή kupoprodajne τιμές,</li>
<li class="ql-align-justify">otklanjanje nedostatka προϊόνa ili</li>
<li class="ql-align-justify">proporcionalni επιστροφή kupoprodajne τιμές.</li>
</ul>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći u kartici „Pritužbe i sporovi” na dnu ιστότοπου.</p>
<h3 class="ql-align-justify"><strong>vii. Materijalni nedostatak</strong></h3>
<p class="ql-align-justify">Materijalni nedostatak μπορεί se primijeniti u επόμενim slučajevima:</p>
<ul>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike potrebne za njegovu uobičajenu upotrebu ili za stavljanje na tržište;</li>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike potrebne za ορισμένu upotrebu za koju je αγοραστής kupio προϊόν, a koje su prodavatelju bile poznate ili su prodavatelju trebale biti poznate;</li>
<li class="ql-align-justify">ako προϊόν ne sadrži karakteristike i kvalitete koje su izričito ili implicitno dogovorene ili propisane;</li>
<li class="ql-align-justify">ako je prodavatelj kupcu dostavio προϊόν koji nije u skladu s uzorkom ili modelom προϊόνa, osim ako uzorak ili model προϊόνa nisu prikazani samo u informativne svrhe.</li>
</ul>
<p class="ql-align-justify">Sažetak postupka μπορείte pronaći u kartici „Pritužbe i sporovi” na dnu ιστότοπου.</p>
<p class="ql-align-justify">Εταιρεία je odgovorna za nedostatke u izradi προϊόνa koji se pojave kroz 2 godine nakon παράδοσηe. Εταιρεία je dužna odgovoriti na prigovor u roku od 3 radna dana.</p>
<h3 class="ql-align-justify"><strong>viii. Dostupnost informacija</strong></h3>
<p class="ql-align-justify">Pružatelj se υποχρέωσηje da će kupcu uvijek pružiti επόμενe informacije:</p>
<ul>
<li class="ql-align-justify">identitet εταιρείας (naziv i registrirana adresa εταιρείας, matični broj),</li>
<li class="ql-align-justify">podatke za kontakt koji χρήστηςu omogućuju brzu i učinkovitu komunikaciju s pružateljem (e-pošta, automatska sekretarica),</li>
<li class="ql-align-justify">bitne karakteristike robe ili usluga (uključujući usluge nakon prodaje i εγγύησης),</li>
<li class="ql-align-justify">konačnu τιμή robe ili usluga, uključujući poreze, ili način izτιμολόγιοa τιμές ako se zbog prirode robe ili usluge konačna τιμή ne μπορεί izτιμολόγιοati unaprijed,</li>
<li class="ql-align-justify">dostupnost προϊόνa (svi προϊόνi ili usluge ponuđeni na web-mjestu trebali bi biti dostupni u razumnom roku),</li>
<li class="ql-align-justify">όρους πληρωμής, όρους παράδοσηe προϊόνa ili όρους za izvršenje usluge (način αποστολής, lokacija i rok),</li>
<li class="ql-align-justify">informacije o svim potencijalnim troškovima prijevoza, αποστολής ili slanja, ili upozorenje da takvi troškovi mogu nastati ako se ne mogu izτιμολόγιοati unaprijed,</li>
<li class="ql-align-justify">vremenski rok ponude,</li>
<li class="ql-align-justify">όρους, rokove i postupke u slučaju υπαναχώρησηa od Ugovora i podatke o troškovima επιστροφήa robe (ako postoje),</li>
<li class="ql-align-justify">objašnjenje postupka koji treba poduzeti u slučaju παράποναe, uključujući sve podatke o kontaktnoj osobi ili korisničkoj službi,</li>
<li class="ql-align-justify">svijest o odgovornosti u slučaju materijalnih nedostataka,</li>
<li class="ql-align-justify">mogućnost i όρους usluga nakon prodaje i dobrovoljnog εγγύησης, ako je potrebno.</li>
<li class="ql-align-justify">Pri pripremi ιστότοπου μπορεί doći do ορισμένih pogrešaka. Budući da ne μπορείmo utjecati na te pogreške, ne snosimo odgovornost za njih. U slučaju većih odstupanja u pogledu τιμή ili tehničkih svojstava προϊόνa, ειδοποίησηit ćemo vas o tome kada εκτελέσειte παραγγελία.</li>
</ul>
<h3 class="ql-align-justify"><strong>ix. Podaci o registraciji, naziv registra, registarski broj:</strong></h3>
<p class="ql-align-justify">Naziv εταιρείας: HS PLUS, κατάστημαa in storitve d.o.o.</p>
<p class="ql-align-justify">Sjedište: Gmajna 8, Trzin, SI-1236 Trzin</p>
<p class="ql-align-justify">Αριθμός μητρώου εταιρείας: 6579639000</p>
<p class="ql-align-justify">PDV ID: SI15553442</p>
<p class="ql-align-justify">Porezni obveznik: DA</p>
<p class="ql-align-justify">Datum upisa u registar: 28/03/2014</p>
<p class="ql-align-justify">Standardna klasifikacija djelatnosti G47.910 – Trgovina na malo preko pošte ili interneta</p>
<h3 class="ql-align-justify"><strong>x. Izvansudsko rješavanje sporova i drugi pravni lijekovi</strong></h3>
<p class="ql-align-justify">Εταιρεία se trudi sve sporove riješiti na sporazuman način. Ako takvo rješavanje sporova nije moguće, sud u Ljubljani bit će nadležan za rješavanje navedenih sporova.</p>
<h3 class="ql-align-justify"><strong>xi. Platforma za rješavanje sporova</strong></h3>
<p class="ql-align-justify">U skladu s pravnim standardima, εταιρεία HS plus d.o.o. ne priznaje nijednog pružatelja usluga izvansudskog rješavanja καταναλωτήςkih sporova kao pružatelja koji je ovlašten rješavati καταναλωτήςke sporove koje καταναλωτήςi mogu pokrenuti na temelju izvansudske nagodbe Zakona o καταναλωτήςkim sporovima.</p>
<p class="ql-align-justify">Platforma za rješavanje sporova dostupna je na stranici&nbsp;<a href="https://ec.europa.eu/consumers/odr/">http://ec.europa.eu/consumers/odr/</a>.</p>
<p class="ql-align-justify">Više informacija o platformi za rješavanje sporova potražite na <a href="https://ec.europa.eu/commission/presscorner/detail/hr/MEMO_13_193">ec.europa.eu</a>.</p>
<p class="ql-align-justify">
<h2 class="ql-align-justify"><strong>3. KOMUNIKACIJA</strong></h2>
<p class="ql-align-justify">Εταιρεία će se obratiti χρήστηςu samo s pomoću daljinske komunikacije ako je to potrebno za εκτέλεσηe παραγγελίας.</p>
<p class="ql-align-justify">Εταιρεία pruža usluge podrške svojim korisnicima na <a href="/cdn-cgi/l/email-protection#e38a8d858ca3958a848c908b8c93cd8b91"><span class="__cf_email__" data-cfemail="a7cec9c1c8e7d1cec0c8d4cfc8d789cfd5">[email&#160;protected]</span></a>.</p>
<p class="ql-align-justify">Međutim, korisnicima se μπορείmo obratiti i u komercijalne svrhe ako nam za to daju svoju privolu ili ako su već obavili αγορά u μας ηλεκτρονικoj κατάστημαi, pri čemu će navedena komunikacija:</p>
<ul>
<li class="ql-align-justify">biti jasno i nedvosmisleno označena kao reklamna poruka,</li>
<li class="ql-align-justify">jasno prikazivati pošiljatelja,</li>
<li class="ql-align-justify">jasno označiti razne promocije i druge tehnike marketinga kao takve.</li>
</ul>
<p class="ql-align-justify">Više informacija u vezi s komunikacijom potražite u našim Pravilima o zaštiti privatnosti i Pravilima o cookieima.</p>
<h2 class="ql-align-justify"><strong>4. INTELEKTUALNO VLASNIŠTVO</strong></h2>
<p class="ql-align-justify">Svi podaci, slike i tekstovi, kao i bilo koji drugi materijali (npr. video sadržaji, grafikoni, skice itd.) na μαςm web-mjestu zaštićeni su autorskim pravima i/ili zakonom o intelektualnom vlasništvu.</p>
<p class="ql-align-justify">Kupnjom προϊόνa ili upotrebom ιστότοπου, χρήστης δεν θα steći autorska prava, imovinska prava ili prava intelektualnog vlasništva za προϊόνe i/ili ιστότοπο. Χρήστης μπορεί upotrebljavati materijale samo u svoje nekomercijalne svrhe.</p>
<h2 class="ql-align-justify"><strong>5. IZJAVA O ODRICANJU ODGOVORNOSTI</strong></h2>
<p class="ql-align-justify">Imajući na umu izjave o odricanju odgovornosti navedene u ovim Γενικοίς Όρους συναλλαγών, εταιρεία pruža επόμενa ograničenja:</p>
<p class="ql-align-justify">Ako odlučite upotrebljavati μας ηλεκτρονικu κατάστημαu i/ili μας ιστότοπο, pristajete na to dobrovoljno i stoga preuzimate sve rizike. Ιστότοπος i κατάστημαa pružaju se „takvi kakvi jesu”, bez ikakvih neizravnih ili izravnih jamstava. Sve izjave o odricanju odgovornosti navedene u ovom poglavlju ili na drugim mjestima u ovim Γενικοίς Όρους συναλλαγών vrijede u najvećoj mjeri dopuštenoj zakonom.</p>
<p class="ql-align-justify">Εταιρεία ne jamči rad ιστότοπου i njegovih funkcija te ne jamči da će ιστότοπο raditi bez pogrešaka, virusa ili zlonamjernog softvera sličnog virusu. Uz to, εταιρεία ne jamči da su podaci objavljeni na web-mjestu točni i sveobuhvatni. Εταιρεία δεν θα biti odgovorna za bilo kakvu štetu, uključujući, ali ne ograničavajući se na: izravnu, neizravnu ili posljedičnu štetu koja nastane ili se pojavi uslijed upotrebe ιστότοπου.&nbsp;</p>
<p class="ql-align-justify">Ako se odlučite za upotrebu ηλεκτρονικe κατάστημαe i εκτελέσειte πληρωμή u μας ηλεκτρονικoj κατάστημαi, izričito se slažete da je upotrebljavate na vlastitu odgovornost i da ćete sami snositi sve rizike koji se odnose na πληρωμή u μας ηλεκτρονικoj κατάστημαi, uključujući, ali ne ograničavajući se na neuspjela πληρωμής od strane χρήστηςa, pogreške u plaćanju i pogreške επιστροφήa u slučaju παράποναe. Ova se izjava o odricanju odgovornosti primjenjuje u najvećoj mjeri dopuštenoj zakonom. Εταιρεία δεν θα biti odgovorna za bilo kakvu štetu koja bi mogla nastati u vezi s upotrebom ιστότοπου i/ili προϊόνa dostupnih u μας ηλεκτρονικoj κατάστημαi.</p>
<h2 class="ql-align-justify"><strong>6. ZAVRŠNE ODREDBE</strong></h2>
<p class="ql-align-justify"><strong>Sklapanje σύμβασηa</strong>&nbsp;Zajedno s naručivanjem usluga na web-mjestu, kao i na svim podstranicama ovog ιστότοπου, ovi Γενικοί Όροι συναλλαγών imaju karakter σύμβασηa συνάπτεταιog μεταξύ αγοραστή i εταιρείας.</p>
<p class="ql-align-justify"><strong>Odvojivost odredbi</strong>&nbsp;Ako se bilo koja od odredbi ovih Općih όρων συναλλαγών pokaže (u cijelosti ili djelomično) nezakonitom ili ništavnom na bilo koji drugi način, navedena će se odredba smatrati (u cijelosti ili djelomično) izbrisanom, dok se preostali Γενικοί Όροι συναλλαγών i dalje primjenjuju.</p>
<p class="ql-align-justify"><strong>Puna pravna sposobnost</strong>&nbsp;Χρήστης jamči da ima potpunu sposobnost za preuzimanje prava i υποχρέωση koje proizlaze iz ovih Općih όρων συναλλαγών. Time jamčite da vam nije potreban pristanak ili odobrenje bilo koje treće strane da biste ispunili svoje obveze koje proizlaze iz ovih Općih όρων συναλλαγών.</p>
<p class="ql-align-justify"><strong>Poznavanje Općih όρων συναλλαγών</strong>&nbsp;Ovime jamčite da ste pročitali i da ste u potpunosti upoznati s ovim Γενικοίς Όρους συναλλαγών prije nego što ih prihvatite, osobito kada je riječ o utvrđenim izjavama o odricanju odgovornosti.</p>
<p class="ql-align-justify"><strong>Zakon koji se primjenjuje na ove Γενικούς Όρους συναλλαγών</strong>&nbsp;Na ove se Γενικούς Όρους συναλλαγών primjenjuje zakonodavstvo Republike Slovenije. Svi sporovi koji proizlaze iz ovih Općih όρων συναλλαγών u nadležnosti su sudova u Republici Sloveniji.</p>
<p class="ql-align-justify"><strong>Izmjene ovih Općih όρων συναλλαγών</strong>&nbsp;Nemate pravo mijenjati bilo koju odredbu navedenu u ovim Γενικοίς Όρους συναλλαγών ili se odricati (u cijelosti ili djelomično) valjanosti bilo koje od navedenih odredbi. Εταιρεία ima pravo izmijeniti ove Γενικούς Όρους συναλλαγών u bilo kojem στιγμή. Sve izmjene bit će objavljene na web-mjestu. Ako i dalje upotrebljavate ιστότοπο, smatrat će se da se slažete s izmjenama na snazi u relevantno vrijeme. Ako se ne slažete s izmjenama, imate pravo odustati od Ugovora.</p>
<p class="ql-align-justify"><strong>Cjelokupnost σύμβασηa</strong>&nbsp;Ovi Γενικοί Όροι συναλλαγών predstavljaju cjelokupnost sporazuma koji se primjenjuje μεταξύ σύμβασηnih strana. Svi potencijalni prethodni pisani ili usmeni sporazumi ili pregovori bit će u potpunosti zamijenjeni ovim Γενικοίς Όρους συναλλαγών.</p>
<p class="ql-align-justify"><strong>Γλωσσικές εκδόσεις&nbsp;</strong>Ovi su Γενικοί Όροι συναλλαγών bili izrađeni na slovenskom jeziku. Svaka izmjena ovih Općih όρων συναλλαγών na bilo kojem drugom jeziku pripremljena je kako bi se omogućio lakši pristup Γενικοίς Όρους συναλλαγών. Ovim se slažete i u potpunosti razumijete da će slovenska verzija imati prednost u slučaju bilo kakvih sporova.</p>
<p class="ql-align-justify"><strong>Ερμηνεία όρων</strong>&nbsp;Definicije pojmova upotrebljavanih u ovim Γενικοίς Όρους συναλλαγών navedene su na početku ovih Općih όρων συναλλαγών.</p>
<p class="ql-align-justify"><strong>HS PLUS&nbsp;d.o.o.&nbsp;&nbsp;</strong>Gmajna 8&nbsp;/&nbsp;SI-1236 Trzin&nbsp;/&nbsp;Slovenija&nbsp;/&nbsp;&nbsp;<a href="/cdn-cgi/l/email-protection#d6bfb8b0b996a0bfb1b9a5beb9a6f8bea4"><span class="__cf_email__" data-cfemail="355c5b535a75435c525a465d5a451b5d47">[email&#160;protected]</span></a></p>
<p class="ql-align-justify">Tijelo za registraciju: Okružni sud u Ljubljani&nbsp;/&nbsp;Temeljni kapital: 7 500 EUR&nbsp;/&nbsp;IBAN SI56 2900&nbsp;0005&nbsp;2694&nbsp;428&nbsp;/&nbsp;PDV ID: 15553442&nbsp;/&nbsp;Αριθμός μητρώου εταιρείας: 6579639000</p>
</div>
                </span>
                <img decoding="async" id="close_ab_optin" src="https://images.vigo-shop.com/general/remove.png">
            </div>
        </div>
            </div>
    
  </form>
  </div>

</div>
      </article>

  </div>
</main>
<div class="footer-wrap">

    
<footer class="footer">
  <div class="general-sub-banner-wrapper">
    <div class="inner_wrapper">

        

        <div class="partial_inner_section">
            <img src="https://images.vigo-shop.com/general/banner_icons/delivery_icon.svg" alt="">
            <div class="text_wrapper">
                Dostavlja: ΕΛΤΑ Courier            </div>
        </div>

                    <div class="partial_inner_section">
                <img src="https://images.vigo-shop.com/general/banner_icons/COD_icon.svg" alt="">
                <div class="text_wrapper">Πληρωμή pouzećem</div>
            </div>
                <div class="partial_inner_section delivery-from-eu-warehouse ">
            <img class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg">
            <div class="text_wrapper delivery-from-eu-warehouse__text">Αποθήκη στην ΕΕ</div>
        </div>
            </div>
</div>
<div class="footer-payment bg--primary-dark c--white ">
    <div class="footer-payment__content container container--l">
        <div class="footer-mobile-payment hiddenOnDesktop">

            <div class="footer-mobile-payment__links">
                <div class="footer-mobile-payment__links-content  s-left--s s-right--s s-bottom--m opened">
                    <div class="footer-main__links">
                        <ul>
                                                            <li>
                                    <a href="https://vigoshop.gr/opci-όροι-συναλλαγών/"
                                       class="button button--link c--gray">Γενικοί Όροι Συναλλαγών</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/pravila-o-zastiti-privatnosti/"
                                       class="button button--link c--gray">Πολιτική Απορρήτου</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/pravila-o-kolacicima/"
                                       class="button button--link c--gray">Πολιτική Cookies</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/pravo-na-υπαναχώρησηe-od-αγοράς/"
                                       class="button button--link c--gray">Δικαίωμα υπαναχώρησης από αγορά</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/prituzbe-i-sporovi/"
                                       class="button button--link c--gray">Παράπονα και διαφορές</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/zamjena-u-jamstvu/"
                                       class="button button--link c--gray">Αντικατάσταση εντός εγγύησης</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.gr/informacije-o-εταιρεία/"
                                       class="button button--link c--gray">Informacije o εταιρεία</a>
                                </li>
                                                            <li>
                                    <a href="https://manuals.hs-plus.com/hr?brand=vigoshop"
                                       class="button button--link c--gray">Upute za upotrebu</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
                            <div class="footer-payment__top footer-payment__top--mobile hiddenOnDesktop s-top--m">
                    <a class="button button--link" id="scroll-to-top">
                        <div class="flex flex--autosize flex--middle flex--center">
                            <div class="flex__item back-top-icon"><svg viewBox="0 0 17 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" /></svg></div>
                            <div class="flex__item f--m c--lightgray scroll-to-top-text">Natrag na vrh</div>
                        </div>
                    </a>
                </div>
                    </div>
        <div class="flex flex--autosize flex--apart footer-payment--wrapper">
            <div class="flex__item col-md-5 footer-payment__first">
                <div class="flex flex--center flex--wrap flex--autosize flex--gaps flex--bottom">
                    <div class="smdWrapperTag"></div>                                       <div class="flex__item norton-security-logo">
                        <img src="https://images.vigo-shop.com/general/footer/norton_logo.svg">
                    </div>
                                        <div class="flex__item">
                        <div class="flex flex--autosize flex--bottom">
                            <div class="flex__item"><svg viewBox="0 0 13 17" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M10.9107 7.38848H11.6071C12.3761 7.38848 13 8.04356 13 8.85098V14.701C13 15.5084 12.3761 16.1635 11.6071 16.1635H1.39286C0.623884 16.1635 0 15.5084 0 14.701V8.85098C0 8.04356 0.623884 7.38848 1.39286 7.38848H2.08929V5.19473C2.08929 2.64145 4.0683 0.563477 6.5 0.563477C8.9317 0.563477 10.9107 2.64145 10.9107 5.19473V7.38848ZM4.41071 5.19473V7.38848H8.58928V5.19473C8.58928 3.98512 7.65201 3.00098 6.5 3.00098C5.34799 3.00098 4.41071 3.98512 4.41071 5.19473Z" fill="white"/>
            </svg></div>
                            <div
                                class="flex__item f--bold c--gray">100% sigurna kupnja</div>
                        </div>
                        <div
                            class="f--s c--gray">osigurano 256-bitnim šifriranjem</div>
                    </div>
                </div>
            </div>
                        <div class="flex__item col-md-3 footer-payment__top hiddenOnMobile">
                <a class="button button--link" id="scroll-to-top">
                    <div class="flex flex--autosize flex--middle">
                        <div class="flex__item"><svg viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" fill="#99A0A7"/></svg></div>
                        <div class="flex__item f--m c--lightgray">Natrag na vrh</div>
                    </div>
                </a>
            </div>
                                    <div class="flex__item col-md-4 footer-payment__badges">
                <div class="flex flex--center flex--wrap flex--middle">
                                                <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt="COD">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="Paypal">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro">
                            </div>
                                        </div>
                            </div>
                    </div>
    </div>
</div>
    <div class="footer-copyright bg--primary-dark c--white">
        <div class="footer-copyright__content">
            <div class="t--center f--s c--gray">Copyright © 2018 - 2026 -  ηλεκτρονικa κατάστημαa Vigoshop (HS plus d.o.o)</div>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
  </footer>
            <div class="hs_loader">
                <img src="https://images.vigo-shop.com/general/logo_loader_simple.svg">
            </div>
        <div id="contact-info-modal" class="mobile-notice-modal hidden">
    <div class="wrapper">
        <div class='mobile-notice-modal__content'>
                    <div class="modal-close">
                <img id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
            </div>
            <div class='mobile-notice-modal__head s-all--s'>
                <div class="f--l f--bold c--darkgray">Trebate li pomoć pri kupnji?</div>
                <div class="f--s c--gray">Za Vas smo dostupni svaki radni dan od <strong>07:00 - 19:00</strong>, a vikendom od <strong>08:00 - 18:00.</strong></div>
            </div>
                <div class="mobile-notice-modal__body">
            <div class="flex flex--vertical">
               
                                                    <div class="border border--top border--light"></div>
                    <a class="  flex__item t--no-decoration c--text s-all--s"
                       href="https://api.whatsapp.com/send?phone=+386 64 109 783&text=Pozdrav,%20zanimam%20se%20za%20kupovinu%20προϊόνa: (vigoshop)">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><linearGradient id="ge5urdfv4a" x1=".5" x2=".5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#66ff74"/><stop offset="1" stop-color="#00b822"/></linearGradient><clipPath id="1s5y4t255b"><path data-name="Rectangle 3641" style="fill:none" d="M0 0h17.171v17.296H0z"/></clipPath></defs><path data-name="Path 11937" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#00b822"/><g data-name="Group 10478"><g data-name="Group 10477" style="clip-path:url(#1s5y4t255b)" transform="translate(3.415 3)"><path data-name="Path 11934" d="M8.594 1.484a7.093 7.093 0 1 1-3.846 13.052.142.142 0 0 0-.114-.018l-1.128.3L2.1 15.2l.377-1.406.29-1.084a.142.142 0 0 0-.021-.118 7.091 7.091 0 0 1 5.848-11.1m0-1.492a8.577 8.577 0 0 0-7.443 12.84.142.142 0 0 1 .014.108l-.123.459-.377 1.406L0 17.3l2.483-.665 1.406-.377.526-.141a.142.142 0 0 1 .1.013A8.577 8.577 0 1 0 8.594 0" style="fill:#fff"/><path data-name="Path 11935" d="M52.9 55.99a1.835 1.835 0 0 1 .8-.027.4.4 0 0 1 .293.226c.324.688.431.961.663 1.486a.986.986 0 0 1-.233 1.118 12.15 12.15 0 0 0-.333.316c-.168.179.9 2.308 3.106 2.9a.276.276 0 0 0 .284-.092c.223-.271.438-.554.659-.828a.4.4 0 0 1 .459-.118c.732.286.942.448 1.675.734a.378.378 0 0 1 .284.386 1.781 1.781 0 0 1-1.2 1.845 2.723 2.723 0 0 1-.462.076c-2.867.179-6.64-2.839-7.028-5.7A2.291 2.291 0 0 1 52.9 55.99" transform="translate(-47.575 -51.327)" style="fill:#fff"/></g></g></svg></div>
                            <div
                                class="flex__item desktop_contact desktop_whatsapp_contact">Pošaljite nam Whatsapp poruku</div>
                            <div class="flex__item mobile_contact mobile_whatsapp_contact">
                                <strong>Whatsapp</strong></div>
                        </div>
                    </a>
                                                                    <div class="border border--top border--light"></div>
                    <a class="  flex__item t--no-decoration c--text s-all--s" href="tel:+385-1-3300-004">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path d="M18.298 13.0304L14.2715 11.3042C13.7973 11.0989 13.241 11.2374 12.9189 11.6374L11.2827 13.6346C8.71287 12.3729 6.62544 10.2833 5.36371 7.71585L7.36059 6.08161C7.75952 5.75577 7.89534 5.20253 7.69361 4.72829L5.96763 0.702075C5.74148 0.185903 5.18461 -0.0964881 4.63947 0.03005L0.8988 0.89281C0.369985 1.01341 0 1.47911 0 2.02312C0 11.3855 7.61494 19 16.9777 19C17.5221 19 17.9864 18.6301 18.1077 18.1012L18.9705 14.3608C19.0955 13.8171 18.8139 13.2531 18.298 13.0304Z"/></svg></div>
                            <div class="flex__item desktop_contact desktop_phone_contact">Za naručivanje nazovite: <span class="phone-padding-top"><strong>01 3300 004</strong></span></div>
                            <div class="flex__item mobile_contact mobile_phone_contact">
                                <strong>01 3300 004</strong></div>
                        </div>
                    </a>
                                <!--                ALL-14367 Remove contact support icon-->
<!--                -->                                <div class="border border--top border--light"></div>
                <a class="flex__item t--no-decoration c--text s-all--s" href="/cdn-cgi/l/email-protection#b4dddad2dbf4c2ddd3dbc7dcdbc49adcc6">
                    <div class="flex flex--autosize flex--gaps">
                        <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                        <div
                            class="flex__item"><strong><span class="__cf_email__" data-cfemail="89e0e7efe6c9ffe0eee6fae1e6f9a7e1fb">[email&#160;protected]</span></strong></div>
                    </div>
                </a>
            </div>
                        <!--                ALL-14367 Remove contact support icon-->
<!--            --><!--            <div class="border border--top border--light"></div>-->
<!--            <a class="flex__item t--no-decoration c--text s-all--s" href="--><!--">-->
<!--                <div class="flex flex--autosize flex--gaps">-->
<!--                    <div class="flex__item">--><!--</div>-->
<!--                    <div-->
<!--                        class="flex__item">--><!--</div>-->
<!--                </div>-->
<!--            </a>-->
        </div>
<!--    -->    </div>
</div>
    </div>
        <link rel='stylesheet' id='check-client-css' href='https://vigoshop.gr/app/plugins/core/resources/dist/css/check-client/css/check-client-8571deb0ef.css' type='text/css' media='all' />
</div>
</body>
</html>
