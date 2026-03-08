<?php
class Default_action_UpcomingEvents_f28b8a56bb01b31c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '<section id="events">
    <div class="container padding-medium">
        <div class="row flex-md-row-reverse align-items-center">

            <!-- RIGHT SIDE : IMAGE -->
            <div class="col-md-6">
                <div class="imageblock">
                    <div class="animated-border">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'additionalConfig' => [],
'width' => NULL,
'height' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'class' => 'img-fluid rounded-circle',
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output3 .= '
                        ';
return $output3;
};

$arguments1 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('data.tx_mask_event'),
'as' => 'file',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
                    </div>
                </div>
            </div>

            <!-- LEFT SIDE : EVENTS LIST -->
            <div class="col-md-6 pe-lg-5 mt-5 mt-md-0">

                <!-- Title -->
                <div class="section-title">
                    <h2 class="display-4 mb-5">
                        ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_title')]);

$output0 .= '
                    </h2>
                </div>

                <!-- Events Loop -->
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '

                    <div class="border rounded-3 px-4 py-2 mb-3 me-lg-5 event-box">
                        <div class="row">

                            <!-- Day + Month -->
                            <div class="col-2 ps-3">
                                <h2 class="m-0 lh-sm event-title">
                                    ';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_day')]);

$output8 .= '
                                </h2>
                                <p class="m-0">
                                    ';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_month')]);

$output8 .= '
                                </p>
                            </div>

                            <!-- Title + Time + Arrow -->
                            <div class="col-10 d-flex justify-content-between align-items-center">

                                <!-- Title + Time -->
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                                    <div>
                                        <h2 class="m-0 lh-sm event-title">
                                            ';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_title')]);

$output11 .= '
                                        </h2>
                                        <p class="m-0">
                                            ';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_time')]);

$output11 .= '
                                        </p>
                                    </div>
                                ';
return $output11;
};

$arguments9 = [
'target' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_link'),
'class' => 'hover-color',
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output8 .= '

                                <!-- Arrow from MASK -->
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_arrow'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'additionalConfig' => [],
'height' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
'file' => $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_arrow.0'),
'width' => 25,
'class' => 'event-arrow',
];

$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19);

$output17 .= '
                                    ';
return $output17;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments20, $renderingContext)
;

$output14 .= '
                                ';
return $output14;
};

$arguments12 = [
'target' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_link'),
'class' => 'arrow-link',
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);

$output8 .= '

                            </div>

                        </div>
                    </div>

                ';
return $output8;
};

$arguments6 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('data.tx_mask_content'),
'as' => 'data_item',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output0 .= '

            </div>
        </div>
    </div>
</section>
';

    return $output0;
}

}

#