<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<section class="section-card bg-gradient">
    <div class="container">
        <div class="content-head">
			<?$APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"bredcrumb",
				Array(
					"PATH" => "",
					"SITE_ID" => "s1",
					"START_FROM" => "0"
				)
			);?>
            <div class="content-head__title">
                <h1 class="h1"><?=$APPLICATION->ShowTitle(false);?></h1>
            </div>
        </div>
				<?$ElementID = $APPLICATION->IncludeComponent(
				"bitrix:catalog.element",
				"",
				array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
					"META_KEYWORDS" => $arParams["DETAIL_META_KEYWORDS"],
					"META_DESCRIPTION" => $arParams["DETAIL_META_DESCRIPTION"],
					"BROWSER_TITLE" => $arParams["DETAIL_BROWSER_TITLE"],
					"BASKET_URL" => $arParams["BASKET_URL"],
					"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
					"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
					"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
					"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
					"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"SET_TITLE" => $arParams["SET_TITLE"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"PRICE_CODE" => $arParams["PRICE_CODE"],
					"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
					"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
					"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
					"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
					"USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
					"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
					"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
					"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
					"LINK_IBLOCK_TYPE" => $arParams["LINK_IBLOCK_TYPE"],
					"LINK_IBLOCK_ID" => $arParams["LINK_IBLOCK_ID"],
					"LINK_PROPERTY_SID" => $arParams["LINK_PROPERTY_SID"],
					"LINK_ELEMENTS_URL" => $arParams["LINK_ELEMENTS_URL"],
					"ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
					"SET_VIEWED_IN_COMPONENT" => "Y",

					"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
					"OFFERS_FIELD_CODE" => $arParams["DETAIL_OFFERS_FIELD_CODE"],
					"OFFERS_PROPERTY_CODE" => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
					"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
					"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
					"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
					"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],

					"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
					"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
					"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
					"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
					"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
					'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
					'CURRENCY_ID' => $arParams['CURRENCY_ID'],
					'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
					'USE_ELEMENT_COUNTER' => $arParams['USE_ELEMENT_COUNTER'],

					'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
					'LABEL_PROP' => $arParams['LABEL_PROP'],
					'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
					'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
					'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
					'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
					'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
					'SHOW_MAX_QUANTITY' => $arParams['DETAIL_SHOW_MAX_QUANTITY'],
					'MESS_BTN_BUY' => $arParams['MESS_BTN_BUY'],
					'MESS_BTN_ADD_TO_BASKET' => $arParams['MESS_BTN_ADD_TO_BASKET'],
					'MESS_BTN_SUBSCRIBE' => $arParams['MESS_BTN_SUBSCRIBE'],
					'MESS_BTN_COMPARE' => $arParams['MESS_BTN_COMPARE'],
					'MESS_NOT_AVAILABLE' => $arParams['MESS_NOT_AVAILABLE'],
					'USE_VOTE_RATING' => $arParams['DETAIL_USE_VOTE_RATING'],
					'VOTE_DISPLAY_AS_RATING' => (isset($arParams['DETAIL_VOTE_DISPLAY_AS_RATING']) ? $arParams['DETAIL_VOTE_DISPLAY_AS_RATING'] : ''),
					'USE_COMMENTS' => $arParams['DETAIL_USE_COMMENTS'],
					'BLOG_USE' => (isset($arParams['DETAIL_BLOG_USE']) ? $arParams['DETAIL_BLOG_USE'] : ''),
					'VK_USE' => (isset($arParams['DETAIL_VK_USE']) ? $arParams['DETAIL_VK_USE'] : ''),
					'VK_API_ID' => (isset($arParams['DETAIL_VK_API_ID']) ? $arParams['DETAIL_VK_API_ID'] : 'API_ID'),
					'FB_USE' => (isset($arParams['DETAIL_FB_USE']) ? $arParams['DETAIL_FB_USE'] : ''),
					'FB_APP_ID' => (isset($arParams['DETAIL_FB_APP_ID']) ? $arParams['DETAIL_FB_APP_ID'] : ''),
					'BRAND_USE' => (isset($arParams['DETAIL_BRAND_USE']) ? $arParams['DETAIL_BRAND_USE'] : 'N'),
					'BRAND_PROP_CODE' => (isset($arParams['DETAIL_BRAND_PROP_CODE']) ? $arParams['DETAIL_BRAND_PROP_CODE'] : ''),
					'DISPLAY_NAME' => (isset($arParams['DETAIL_DISPLAY_NAME']) ? $arParams['DETAIL_DISPLAY_NAME'] : ''),
					'ADD_DETAIL_TO_SLIDER' => (isset($arParams['DETAIL_ADD_DETAIL_TO_SLIDER']) ? $arParams['DETAIL_ADD_DETAIL_TO_SLIDER'] : ''),
					'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : '')
				),
				$component
			);?>
		<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.products.viewed", 
				"goods", 
				array(
					"ACTION_VARIABLE" => "action_cpv",
					"ADDITIONAL_PICT_PROP_11" => "-",
					"ADDITIONAL_PICT_PROP_4" => "-",
					"ADD_PROPERTIES_TO_BASKET" => "Y",
					"ADD_TO_BASKET_ACTION" => "ADD",
					"BASKET_URL" => "/personal/basket.php",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "3600",
					"CACHE_TYPE" => "A",
					"SHOW_PRODUCTS_".$arParams['IBLOCK_ID'] => "Y",
					"CART_PROPERTIES_11" => array(
						0 => "",
						1 => "",
					),
					"CART_PROPERTIES_4" => array(
					),
					"CONVERT_CURRENCY" => "N",
					"DEPTH" => "2",
					"DISPLAY_COMPARE" => "N",
					"ENLARGE_PRODUCT" => "PROP",
					"ENLARGE_PROP_4" => "-",
					"HIDE_NOT_AVAILABLE" => "N",
					"HIDE_NOT_AVAILABLE_OFFERS" => "N",
					"IBLOCK_ID" => "",
					"IBLOCK_MODE" => "multi",
					"IBLOCK_TYPE" => "catalog",
					"LABEL_PROP_4" => array(
					),
					"LABEL_PROP_POSITION" => "top-left",
					"MESS_BTN_ADD_TO_BASKET" => "В корзину",
					"MESS_BTN_BUY" => "Купить",
					"MESS_BTN_DETAIL" => "Подробнее",
					"MESS_BTN_SUBSCRIBE" => "Подписаться",
					"MESS_NOT_AVAILABLE" => "Нет в наличии",
					"OFFER_TREE_PROPS_11" => "",
					"PAGE_ELEMENT_COUNT" => "18",
					"PARTIAL_PRODUCT_PROPERTIES" => "N",
					"PRICE_CODE" => array(
						0 => "base",
					),
					"PRICE_VAT_INCLUDE" => "Y",
					"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
					"PRODUCT_ID_VARIABLE" => "id",
					"PRODUCT_PROPS_VARIABLE" => "prop",
					"PRODUCT_QUANTITY_VARIABLE" => "quantity",
					"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false}]",
					"PRODUCT_SUBSCRIPTION" => "Y",
					"PROPERTY_CODE_11" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE_19" => array(
					),
					"PROPERTY_CODE_4" => array(
					),
					"PROPERTY_CODE_MOBILE_4" => "",
					"SECTION_CODE" => "",
					"SECTION_ELEMENT_CODE" => "",
					"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
					"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
					"SHOW_CLOSE_POPUP" => "N",
					"SHOW_DISCOUNT_PERCENT" => "N",
					"SHOW_FROM_SECTION" => "N",
					"SHOW_MAX_QUANTITY" => "N",
					"SHOW_OLD_PRICE" => "N",
					"SHOW_PRICE_COUNT" => "1",
					"SHOW_PRODUCTS_4" => "N",
					"SHOW_SLIDER" => "Y",
					"SLIDER_INTERVAL" => "3000",
					"SLIDER_PROGRESS" => "N",
					"TEMPLATE_THEME" => "blue",
					"USE_ENHANCED_ECOMMERCE" => "N",
					"USE_PRICE_COUNT" => "N",
					"USE_PRODUCT_QUANTITY" => "N",
					"COMPONENT_TEMPLATE" => "goods",
					"LABEL_PROP_MOBILE_4" => ""
				),
				false
		);?>    
    </div>
</section>