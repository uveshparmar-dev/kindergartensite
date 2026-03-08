<?php
class partial_Misc_FormError_523b087858fe6074 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'vh' => 
  array (
    0 => 'In2code\\Powermail\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        <nav class="powermail_message powermail_message_error" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'validationerror_container_label',
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8)]);

$output6 .= '">
            <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'validationerror_title',
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output6 .= '</h2>

            <ol>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array65 = [
'0' => $renderingContext->getVariableProvider()->getByPath('singleError.message'),
'1' => ' == \'spam_details\'',
];

$expression66 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'spam_details');};

$arguments67 = [
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                                    ';

$output17 .= '';

$output17 .= '';

$output17 .= '';

$output17 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'validationerror_spam',
];

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19)]);

$output17 .= ' ';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleError.arguments.spamfactor')]);

$output17 .= '

                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('singleError.message');
};
$output22 = '';

$output22 .= 'validationerror_';

$output22 .= $renderingContext->getVariableProvider()->getByPath('singleError.message');

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $output22,
];

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]);

$output17 .= '
                                ';
return $output17;
},
'__else' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                                    ';

$output23 .= '';

$output23 .= '';

$output23 .= '';

$output23 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments64 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'type',
];
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'type',
];

$array57 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments58, $renderingContext, $renderChildrenClosure59),
'1' => ' == \'check\'
                                            || ',
'2' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61),
'3' => ' == \'radio\'',
];

$expression62 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'check') || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 'radio'));};

$arguments63 = [
'__then' => function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                                                ';

$output27 .= '';

$output27 .= '';

$output27 .= '';

$output27 .= '
                                                <a href="#powermail_field_';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker')]);

$output27 .= '_1">
                                                    ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'title',
];

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29)]);

$output27 .= ':

                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'mandatory_text',
];

$array37 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39),
'1' => ' !== \'\'',
];

$expression40 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== '');};

$arguments41 = [
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                                                            ';

$output30 .= '';

$output30 .= '';

$output30 .= '';

$output30 .= '
                                                            ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'mandatory_text',
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output30 .= '
                                                        ';
return $output30;
},
'__else' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                                                            ';

$output33 .= '';

$output33 .= '';

$output33 .= '';

$output33 .= '
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('singleError.message');
};
$output36 = '';

$output36 .= 'validationerror_';

$output36 .= $renderingContext->getVariableProvider()->getByPath('singleError.message');

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $output36,
];

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output33 .= '
                                                        ';
return $output33;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output27 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments41, $renderingContext)
;

$output27 .= '
                                                </a>
                                            ';
return $output27;
},
'__else' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                                                <a href="#powermail_field_';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker')]);

$output42 .= '">
                                                    ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'title',
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44)]);

$output42 .= ':

                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'mandatory_text',
];

$array52 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54),
'1' => ' !== \'\'',
];

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== '');};

$arguments56 = [
'__then' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                                                            ';

$output45 .= '';

$output45 .= '';

$output45 .= '';

$output45 .= '
                                                            ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'marker' => $renderingContext->getVariableProvider()->getByPath('singleError.arguments.marker'),
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'mandatory_text',
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Getter\GetFieldPropertyFromMarkerAndFormViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47)]);

$output45 .= '
                                                        ';
return $output45;
},
'__else' => function() use ($renderingContext) {
$output48 = '';

$output48 .= '
                                                            ';

$output48 .= '';

$output48 .= '';

$output48 .= '';

$output48 .= '
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('singleError.message');
};
$output51 = '';

$output51 .= 'validationerror_';

$output51 .= $renderingContext->getVariableProvider()->getByPath('singleError.message');

$arguments49 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $output51,
];

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments49, $renderingContext, $renderChildrenClosure50)]);

$output48 .= '
                                                        ';
return $output48;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments56, $renderingContext)
;

$output42 .= '
                                                </a>
                                            ';
return $output42;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression62(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)),
    $renderingContext
),
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments63, $renderingContext)
;

$output26 .= '
                                    ';
return $output26;
},
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments64, $renderingContext)
;

$output23 .= '
                                ';
return $output23;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression66(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)),
    $renderingContext
),
];

$output16 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments67, $renderingContext)
;

$output16 .= '
                        </li>
                    ';
return $output16;
};

$arguments14 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('errors'),
'as' => 'singleError',
];

$output13 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$output13 .= '
                ';
return $output13;
};

$arguments11 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors'),
'as' => 'errors',
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output6 .= '
            </ol>
        </nav>
    ';
return $output6;
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments68, $renderingContext)
;

$output3 .= '
';
return $output3;
};

$arguments1 = [
'for' => '',
'as' => 'validationResults',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
';

    return $output0;
}

}

#