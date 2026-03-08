<?php
class Default_action_WelcomeSection_4ee65c3e6fd4fd72 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<section id="about-us">
    <div class="container padding-medium pt-0">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="imageblock me-md-5">
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
'class' => 'img-fluid rounded-circle about-img',
'alt' => $renderingContext->getVariableProvider()->getByPath('file.description'),
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
'each' => $renderingContext->getVariableProvider()->getByPath('data.tx_mask_main'),
'as' => 'file',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="section-title">
                    <h2 class="display-4 mb-3">
                        ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_heading')]);

$output0 .= '
                    </h2>
                </div>
                <div class="about-description">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.tx_mask_input');
};

$arguments6 = [
'parseFuncTSPath' => 'lib.parseFunc_RTE',
'data' => NULL,
'current' => NULL,
'currentValueKey' => NULL,
'table' => '',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output0 .= '
                </div>
                <a class="btn btn-primary mt-3" href="#">
                    About Us
                </a>
            </div>
        </div>
    </div>
</section>';

    return $output0;
}

}

#