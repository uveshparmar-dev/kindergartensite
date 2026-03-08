<?php
class Consent_action_consent_1901b580483ebb9a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Default';
    }
    public function hasLayout(): bool {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'we' => 
  array (
    0 => 'Websedit\\WeCookieConsent\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * section content
 */
public function section_55f2b31a6acfaa64(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    return NULL;
}
/**
 * section HeaderAssets
 */
public function section_e80eaddf89a0fa9f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
				const storageName = \'';

$output8 .= $renderingContext->getVariableProvider()->getByPath('settings.klaro.storageName');

$output8 .= '\';
				const translatedButtonTextCookieSettings = \'';

$output8 .= $renderingContext->getVariableProvider()->getByPath('klaroConfig.translations.en.openConsent');

$output8 .= '\';
				const cookieSettingsImgPathDefault = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'base64' => false,
'src' => $renderingContext->getVariableProvider()->getByPath('settings.klaro.cookieSettingsImgPathDefault'),
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output8 .= '\';
				const cookieSettingsImgPathHover = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'base64' => false,
'src' => $renderingContext->getVariableProvider()->getByPath('settings.klaro.cookieSettingsImgPathHover'),
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output8 .= '\';
				const cookieIconPermanentlyAvailable = \'';

$output8 .= $renderingContext->getVariableProvider()->getByPath('settings.klaro.cookieIconPermanentlyAvailable');

$output8 .= '\';
				const cookieExpiresAfterDays = ';

$output8 .= $renderingContext->getVariableProvider()->getByPath('settings.klaro.cookieExpiresAfterDays');

$output8 .= ';
				let allServiceSettings = [];
				let consenTypeObj = {};
				let serviceSetting = {};
				let serviceName = {};
				let serviceIsTypeOfConsentMode = false;
			';
return $output8;
};

$arguments6 = [
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output5 .= '
		';
return $output5;
};

$array3 = [
'0' => 'true',
];

$expression4 = function($context) {return TRUE;};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'async' => NULL,
'defer' => NULL,
'nomodule' => NULL,
'useNonce' => false,
'inline' => false,
'identifier' => 'weCookieConsentHeaderScriptDefinition',
'priority' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$output18 = '';

$output18 .= 'Service/';

$output18 .= $renderingContext->getVariableProvider()->getByPath('service.provider');

$array19 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$array20 = [
'0' => 1,
];

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => $output18,
'section' => 'Header',
'arguments' => $array19,
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
		';
return $output15;
};

$arguments13 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('services'),
'as' => 'service',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output0 .= '
	';

    return $output0;
}
/**
 * section FooterAssets
 */
public function section_a3a12544cde13e83(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output22 = '';

$output22 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
			<script type="text/javascript">var klaroConfig = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper Websedit\WeCookieConsent\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('klaroConfig');
};

$arguments28 = [
'value' => NULL,
'forceObject' => false,
];

$arguments26 = [
'keepQuotes' => false,
'encoding' => NULL,
'value' => $renderingContext->getViewHelperInvoker()->invoke(Websedit\WeCookieConsent\ViewHelpers\Format\JsonViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29),
];
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output25 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27);

$output25 .= '</script>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};
$output35 = '';

$output35 .= 'Service/';

$output35 .= $renderingContext->getVariableProvider()->getByPath('service.provider');

$array36 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$array37 = [
'0' => 1,
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments33 = [
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => $output35,
'section' => 'Footer',
'arguments' => $array36,
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output32 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34);

$output32 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$array41 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$arguments39 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Klaro/Service',
'arguments' => $array41,
];

$output32 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments39, $renderingContext, $renderChildrenClosure40);

$output32 .= '
			';
return $output32;
};

$arguments30 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('services'),
'as' => 'service',
];

$output25 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output25 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.klaro.stylePrefix'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments50 = [
'__then' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
					<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'extensionName' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'Library/klaro/klaro.js',
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44)]);

$output42 .= '"></script>
				';
return $output42;
},
'__else' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
					<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'extensionName' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'Library/klaro/klaro-no-css.js',
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47)]);

$output45 .= '"></script>
				';
return $output45;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output25 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments50, $renderingContext)
;

$output25 .= '
		';
return $output25;
};

$arguments23 = [
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
	';

    return $output22;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output51 = '';

$output51 .= '
	';

$output51 .= '';

$output51 .= '

	';

$output51 .= '';

$output51 .= '

	';

$output51 .= '';

$output51 .= '

	';

$output51 .= '';

$output51 .= '
';

    return $output51;
}

}

#