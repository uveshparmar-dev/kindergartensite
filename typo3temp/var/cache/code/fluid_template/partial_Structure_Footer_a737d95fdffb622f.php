<?php
class partial_Structure_Footer_a737d95fdffb622f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

<footer class="site-footer">
    <div class="container text-center padding-normal">
        <div class="footer-row">

            <!-- FOOTER CONTENT (colPos 10) -->
           
                <div class="footer-col content-block copyright footer-info-block">
                    
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'colPos' => 10,
];

$arguments1 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContentSlide',
'data' => $array3,
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
                 
                </div>
            </div>

        </div>
    </div>
</footer>
';

    return $output0;
}

}

#