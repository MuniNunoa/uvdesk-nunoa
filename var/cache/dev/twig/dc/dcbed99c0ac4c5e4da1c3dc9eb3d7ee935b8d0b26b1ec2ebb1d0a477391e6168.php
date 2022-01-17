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

/* @UVDeskCoreFramework/Snippets/createMemberTicket.html.twig */
class __TwigTemplate_0e81467e1a5cd0cc787d842ef6de8000d5a06084c352056ad20d8e4d8a19f44a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        // line 1
        $context["isTicketViewPage"] = (0 === twig_compare("helpdesk_member_ticket", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1)));
        // line 2
        echo "
<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            ";
        // line 9
        echo "            ";
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "                ";
            // line 11
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer full name"), "html", null, true);
            echo "</span>
                </div>

                ";
            // line 20
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer email address"), "html", null, true);
            echo "</span>
                </div>
            ";
        } else {
            // line 28
            echo "                ";
            // line 29
            echo "                <span class=\"uv-field-info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket will be created with current ticket's customer"), "html", null, true);
            echo "</span>
            ";
        }
        // line 31
        echo "
            ";
        // line 33
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        echo "</option>

                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketTypeCollection"]) || array_key_exists("ticketTypeCollection", $context) ? $context["ticketTypeCollection"] : (function () { throw new RuntimeError('Variable "ticketTypeCollection" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 40
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </select>
                </div>
                <span class=\"uv-field-info\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 48
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 58
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" class=\"uv-field create-ticket\" type=\"text\"></textarea>
                </div>
                
                <span class=\"uv-field-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 68
        echo "            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
                </label>
            </div>

            ";
        // line 75
        echo "            ";
        $context["removeMe"] = [];
        // line 76
        echo "            ";
        if ((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "                <div class=\"custom-fields clearfix\">
                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 79
                echo "                        <div class=\"uv-element-block input-group ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 79))) ? ("dependent") : (""));
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    echo " dependency";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 79), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" style=\"position: relative; ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 79))) ? ("display: none;") : (""));
                echo "\">
                            <label class=\"uv-field-label\" for=\"for";
                // line 80
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 80) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 80)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 80), "html", null, true);
                echo "</label>
                            ";
                // line 81
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 81), "text"))) {
                    // line 82
                    echo "                                <div class=\"uv-field-block\">
                                    <input type=\"";
                    // line 83
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 83), "fieldtype", [], "array", true, true, false, 83)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 83), "fieldtype", [], "array", false, false, false, 83), "html", null, true))) : (print ("text")));
                    echo "\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 83), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 83)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 83) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 83)), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "value", [], "any", false, false, false, 83), "html", null, true);
                    echo "\">
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 86
$context["customField"], "fieldType", [], "any", false, false, false, 86), [0 => "date", 1 => "time", 2 => "datetime"])) {
                    // line 87
                    echo "                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 88
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 88), "time"))) {
                        echo "time";
                    } else {
                        echo "calendar";
                    }
                    echo " uv-header-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 88), "html", null, true);
                    echo "\" type=\"text\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "]\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 88)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 88) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 88)), "html", null, true);
                    echo "\" value=\"\">
                                </div>
                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 90
$context["customField"], "fieldType", [], "any", false, false, false, 90), "textarea"))) {
                    // line 91
                    echo "                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 92)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 92) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 92)), "html", null, true);
                    echo "\"></textarea>
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 95
$context["customField"], "fieldType", [], "any", false, false, false, 95), [0 => "file"])) {
                    // line 96
                    echo "                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 97), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 97)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 97) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 97)), "html", null, true);
                    echo "\">
                                </div>

                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 100
$context["customField"], "fieldType", [], "any", false, false, false, 100), [0 => "select"])) {
                    // line 101
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 101))) {
                        // line 102
                        echo "                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[";
                        // line 103
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 103), "html", null, true);
                        echo "]\" class=\"uv-select create-ticket\" id=\"for";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 103) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 103)), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 103)) ? ("required") : (""));
                        echo ">
                                            <option value=\"\">";
                        // line 104
                        echo "Select option";
                        echo "</option>
                                            ";
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 105));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 106
                            echo "                                                <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 106), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 106), "html", null, true);
                            echo "</option>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                                        </select>
                                    </div>
                                ";
                    } else {
                        // line 111
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 112
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 112, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 112)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 112))]);
                        // line 113
                        echo "                                ";
                    }
                    // line 114
                    echo "
                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 115
$context["customField"], "fieldType", [], "any", false, false, false, 115), [0 => "checkbox"])) {
                    // line 116
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 116))) {
                        // line 117
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 117));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 118
                            echo "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[";
                            // line 121
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 121), "html", null, true);
                            echo "][]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 121), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 121) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 121)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 124
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 124) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 124)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 124), "html", null, true);
                            echo "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 128
                        echo "                                ";
                    } else {
                        // line 129
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 130
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 130, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 130)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 130))]);
                        // line 131
                        echo "                                ";
                    }
                    // line 132
                    echo "
                            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 133
$context["customField"], "fieldType", [], "any", false, false, false, 133), [0 => "radio"])) {
                    // line 134
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 134))) {
                        // line 135
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 135));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 136
                            echo "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[";
                            // line 139
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 139), "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 139), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 139) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 139)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 142
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 142) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 142)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 142), "html", null, true);
                            echo "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 146
                        echo "                                ";
                    } else {
                        // line 147
                        echo "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 148
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 148, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 148)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 148))]);
                        // line 149
                        echo "                                ";
                    }
                    // line 150
                    echo "
                            ";
                }
                // line 152
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 152)) . "]"), [], "array", true, true, false, 152)) {
                    // line 153
                    echo "                                <div class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 153, $this->source); })()), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 153)) . "]"), [], "array", false, false, false, 153), "html", null, true);
                    echo "</div>
                            ";
                }
                // line 155
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                </div>
            ";
        }
        // line 159
        echo "
            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>

";
        // line 167
        if ( !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "attributes", [], "any", false, false, false, 167), "get", [0 => "_route"], "method", false, false, false, 167), [0 => "helpdesk_member_ticket"])) {
            // line 168
            echo "    ";
            echo twig_include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
            echo "
";
        }
        // line 170
        echo "
";
        // line 171
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 171, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 171)) {
            // line 172
            echo "<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if(ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            filesize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if(filesize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        ";
            // line 252
            if ((array_key_exists("headerCustomFields", $context) && (isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 252, $this->source); })()))) {
                // line 253
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 253, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 254
                    echo "                ";
                    $context["fieldtype"] = (((0 !== twig_compare("text", twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 254)))) ? (twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 254)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 254), "fieldtype", [], "array", true, true, false, 254)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 254), "fieldtype", [], "array", false, false, false, 254)) : ("text"))));
                    // line 255
                    echo "                    customFieldValidation['customFields[' + ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 255), "html", null, true);
                    echo " + ']'] = [
                    ";
                    // line 256
                    if (( !(twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 256, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 256))) && twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 256))) {
                        // line 257
                        echo "                        {
                        fn : customHandler,
                        msg : '";
                        // line 259
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        echo "'
                    },
                    ";
                    }
                    // line 262
                    echo "                    ";
                    if ((0 === twig_compare("number", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 262, $this->source); })())))) {
                        // line 263
                        echo "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 265
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 267
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 267), "minNo", [], "array", false, false, false, 267)) {
                            echo " 
                            {
                                minOrEmpty: ";
                            // line 269
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 269), "minNo", [], "array", false, false, false, 269), "html", null, true);
                            echo ",
                                msg: '";
                            // line 270
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 270), "minNo", [], "array", false, false, false, 270)]), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 273
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 273), "maxNo", [], "array", false, false, false, 273)) {
                            echo " 
                        {
                            maxOrEmpty: ";
                            // line 275
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 275), "maxNo", [], "array", false, false, false, 275), "html", null, true);
                            echo ",
                            msg: '";
                            // line 276
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 276), "maxNo", [], "array", false, false, false, 276)]), "html", null, true);
                            echo "',
                        },
                        ";
                        }
                        // line 279
                        echo "                    ";
                    } elseif ((0 === twig_compare("email", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 279, $this->source); })())))) {
                        // line 280
                        echo "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 282
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 284
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 284), "allowedDomain", [], "array", false, false, false, 284)) {
                            // line 285
                            echo "                            {
                                checkAllowedDomain: \"";
                            // line 286
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 286), "allowedDomain", [], "array", false, false, false, 286), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 287
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 290
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 290), "restrictedDomain", [], "array", false, false, false, 290)) {
                            // line 291
                            echo "                            {
                                checkRestrictedDomain: \"";
                            // line 292
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 292), "restrictedDomain", [], "array", false, false, false, 292), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 293
                            echo "Domain name should not be in restricted domains";
                            echo "',
                            } ,
                        ";
                        }
                        // line 296
                        echo "                    ";
                    } elseif ((0 === twig_compare("url", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 296, $this->source); })())))) {
                        // line 297
                        echo "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 299
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        echo "',
                        } ,
                    ";
                    } elseif ((0 === twig_compare("file",                     // line 301
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 301, $this->source); })())))) {
                        // line 302
                        echo "                        {
                            checkMaxFileSize: \"";
                        // line 303
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 303), "maxFileSize", [], "array", false, false, false, 303), "html", null, true);
                        echo "\",
                            msg: '";
                        // line 304
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 304), "maxFileSize", [], "array", false, false, false, 304)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 304), "maxFileSize", [], "array", false, false, false, 304)) : ("5120"))]), "html", null, true);
                        echo "',
                        } ,
                    ";
                    }
                    // line 307
                    echo "                    ";
                    if ((( !twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 307, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 307), "regex", [], "array", true, true, false, 307)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 307), "regex", [], "array", false, false, false, 307))) {
                        // line 308
                        echo "                        {
                            patternCheck: \"";
                        // line 309
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 309), "regex", [], "array", false, false, false, 309), "html", null, true);
                        echo "\",
                            msg: \"";
                        // line 310
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        echo "\",
                        } ,
                    ";
                    }
                    // line 313
                    echo "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo "        ";
            }
            // line 317
            echo "        ";
            if ((array_key_exists("CustomerCustomFields", $context) && (isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 317, $this->source); })()))) {
                // line 318
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 318, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 319
                    echo "                ";
                    $context["fieldtype"] = (((0 !== twig_compare("text", twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 319)))) ? (twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 319)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 319), "fieldtype", [], "array", true, true, false, 319)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 319), "fieldtype", [], "array", false, false, false, 319)) : ("text"))));
                    // line 320
                    echo "                    customFieldValidation['customFields[' + ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 320), "html", null, true);
                    echo " + ']'] = [
                    ";
                    // line 321
                    if (( !(twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 321, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 321))) && twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 321))) {
                        // line 322
                        echo "                        {
                        fn : customHandler,
                        msg : '";
                        // line 324
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        echo "'
                    },
                    ";
                    }
                    // line 327
                    echo "                    ";
                    if ((0 === twig_compare("number", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 327, $this->source); })())))) {
                        // line 328
                        echo "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 330
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 332
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 332), "minNo", [], "array", false, false, false, 332)) {
                            echo " 
                            {
                                minOrEmpty: ";
                            // line 334
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 334), "minNo", [], "array", false, false, false, 334), "html", null, true);
                            echo ",
                                msg: '";
                            // line 335
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 335), "minNo", [], "array", false, false, false, 335)]), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 338
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 338), "maxNo", [], "array", false, false, false, 338)) {
                            echo " 
                        {
                            maxOrEmpty: ";
                            // line 340
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 340), "maxNo", [], "array", false, false, false, 340), "html", null, true);
                            echo ",
                            msg: '";
                            // line 341
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 341), "maxNo", [], "array", false, false, false, 341)]), "html", null, true);
                            echo "',
                        },
                        ";
                        }
                        // line 344
                        echo "                    ";
                    } elseif ((0 === twig_compare("email", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 344, $this->source); })())))) {
                        // line 345
                        echo "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 347
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        echo "',
                        },
                        ";
                        // line 349
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 349), "allowedDomain", [], "array", false, false, false, 349)) {
                            // line 350
                            echo "                            {
                                checkAllowedDomain: \"";
                            // line 351
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 351), "allowedDomain", [], "array", false, false, false, 351), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 352
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            echo "',
                            },
                        ";
                        }
                        // line 355
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 355), "restrictedDomain", [], "array", false, false, false, 355)) {
                            // line 356
                            echo "                            {
                                checkRestrictedDomain: \"";
                            // line 357
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 357), "restrictedDomain", [], "array", false, false, false, 357), "html", null, true);
                            echo "\",
                                msg: '";
                            // line 358
                            echo "Domain name should not be in restricted domains";
                            echo "',
                            } ,
                        ";
                        }
                        // line 361
                        echo "                    ";
                    } elseif ((0 === twig_compare("url", (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 361, $this->source); })())))) {
                        // line 362
                        echo "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 364
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        echo "',
                        } ,
                    ";
                    } elseif ((0 === twig_compare("file",                     // line 366
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 366, $this->source); })())))) {
                        // line 367
                        echo "                        {
                            checkMaxFileSize: \"";
                        // line 368
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 368), "maxFileSize", [], "array", false, false, false, 368), "html", null, true);
                        echo "\",
                            msg: '";
                        // line 369
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 369), "maxFileSize", [], "array", false, false, false, 369)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 369), "maxFileSize", [], "array", false, false, false, 369)) : ("5120"))]), "html", null, true);
                        echo "',
                        } ,
                    ";
                    }
                    // line 372
                    echo "                    ";
                    if ((( !twig_in_filter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 372, $this->source); })()), [0 => "checkbox", 1 => "radio", 2 => "select"]) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 372), "regex", [], "array", true, true, false, 372)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 372), "regex", [], "array", false, false, false, 372))) {
                        // line 373
                        echo "                        {
                            patternCheck: \"";
                        // line 374
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 374), "regex", [], "array", false, false, false, 374), "html", null, true);
                        echo "\",
                            msg: \"";
                        // line 375
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        echo "\",
                        } ,
                    ";
                    }
                    // line 378
                    echo "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                echo "        ";
            }
            // line 382
            echo "    var validationParameters = true;
</script>
";
        }
        // line 385
        echo "
<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        ";
        // line 391
        if (array_key_exists("removeMe", $context)) {
            // line 392
            echo "            \$.each(";
            echo json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 392, $this->source); })()));
            echo ", function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        ";
        }
        // line 396
        echo "
        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                ";
        // line 413
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 413, $this->source); })())) {
            // line 414
            echo "                    'name' : {
                        required : true,
                        msg : \"";
            // line 416
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"";
            // line 421
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "\"
                    }],
                ";
        }
        // line 427
        echo "                'type' : {
                    required : true,
                    msg : \"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
                'subject' : {
                    required : true,
                    msg : \"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
                'reply' : {
                    required : true,
                    msg : \"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
            }),
            urlRoot : \"";
        // line 440
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\"
        });

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('";
        // line 448
        echo ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 448, $this->source); })())) : ("{}"));
        echo "');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 448,  1004 => 440,  998 => 437,  991 => 433,  984 => 429,  980 => 427,  974 => 424,  968 => 421,  960 => 416,  956 => 414,  954 => 413,  935 => 396,  927 => 392,  925 => 391,  917 => 385,  912 => 382,  909 => 381,  901 => 378,  895 => 375,  891 => 374,  888 => 373,  885 => 372,  879 => 369,  875 => 368,  872 => 367,  870 => 366,  865 => 364,  861 => 362,  858 => 361,  852 => 358,  848 => 357,  845 => 356,  842 => 355,  836 => 352,  832 => 351,  829 => 350,  827 => 349,  822 => 347,  818 => 345,  815 => 344,  809 => 341,  805 => 340,  799 => 338,  793 => 335,  789 => 334,  784 => 332,  779 => 330,  775 => 328,  772 => 327,  766 => 324,  762 => 322,  760 => 321,  755 => 320,  752 => 319,  747 => 318,  744 => 317,  741 => 316,  733 => 313,  727 => 310,  723 => 309,  720 => 308,  717 => 307,  711 => 304,  707 => 303,  704 => 302,  702 => 301,  697 => 299,  693 => 297,  690 => 296,  684 => 293,  680 => 292,  677 => 291,  674 => 290,  668 => 287,  664 => 286,  661 => 285,  659 => 284,  654 => 282,  650 => 280,  647 => 279,  641 => 276,  637 => 275,  631 => 273,  625 => 270,  621 => 269,  616 => 267,  611 => 265,  607 => 263,  604 => 262,  598 => 259,  594 => 257,  592 => 256,  587 => 255,  584 => 254,  579 => 253,  577 => 252,  495 => 172,  493 => 171,  490 => 170,  484 => 168,  482 => 167,  473 => 161,  469 => 159,  465 => 157,  458 => 155,  452 => 153,  449 => 152,  445 => 150,  442 => 149,  440 => 148,  437 => 147,  434 => 146,  422 => 142,  412 => 139,  407 => 136,  402 => 135,  399 => 134,  397 => 133,  394 => 132,  391 => 131,  389 => 130,  386 => 129,  383 => 128,  371 => 124,  361 => 121,  356 => 118,  351 => 117,  348 => 116,  346 => 115,  343 => 114,  340 => 113,  338 => 112,  335 => 111,  330 => 108,  319 => 106,  315 => 105,  311 => 104,  303 => 103,  300 => 102,  297 => 101,  295 => 100,  285 => 97,  282 => 96,  280 => 95,  270 => 92,  267 => 91,  265 => 90,  248 => 88,  245 => 87,  243 => 86,  229 => 83,  226 => 82,  224 => 81,  218 => 80,  201 => 79,  197 => 78,  194 => 77,  191 => 76,  188 => 75,  181 => 70,  177 => 68,  171 => 64,  163 => 59,  160 => 58,  154 => 54,  146 => 49,  143 => 48,  137 => 44,  133 => 42,  122 => 40,  118 => 39,  113 => 37,  107 => 34,  104 => 33,  101 => 31,  95 => 29,  93 => 28,  87 => 25,  80 => 21,  77 => 20,  71 => 16,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isTicketViewPage = ('helpdesk_member_ticket' == app.request.attributes.get('_route')) %}

<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"{{ path('helpdesk_member_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            {# Customer Details #}
            {% if not isTicketViewPage %}
                {# Name #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer full name'|trans }}</span>
                </div>

                {# Email #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer email address'|trans }}</span>
                </div>
            {% else %}
                {# Retrieve customer details from the current ticket being visited #}
                <span class=\"uv-field-info\">{{ \"Ticket will be created with current ticket's customer\"|trans }}</span>
            {% endif %}

            {# Ticket Type #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">{{ 'Select type'|trans }}</option>

                        {% for type in ticketTypeCollection %}
                            <option value=\"{{ type.id }}\">{{ type.description }}</option>
                        {% endfor %}
                    </select>
                </div>
                <span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
            </div>

            {# Ticket Subject #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
            </div>

            {# Ticket Message #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" class=\"uv-field create-ticket\" type=\"text\"></textarea>
                </div>
                
                <span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
            </div>

            {# Ticket Attachment #}
            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                </label>
            </div>

            {# CustomFields #}
            {% set removeMe = [] %}
            {% if headerCustomFields %}
                <div class=\"custom-fields clearfix\">
                    {% for key, customField in headerCustomFields %}
                        <div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
                            <label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
                            {% if customField.fieldType == 'text' %}
                                <div class=\"uv-field-block\">
                                    <input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.value}}\">
                                </div>

                            {% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
                                </div>
                            {% elseif customField.fieldType == 'textarea' %}
                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
                                </div>

                            {% elseif customField.fieldType in ['file'] %}
                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
                                </div>

                            {% elseif customField.fieldType in ['select'] %}
                                {% if customField.customFieldValues is not empty %}
                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
                                            <option value=\"\">{{ 'Select option' }}</option>
                                            {% for customFieldValues in customField.customFieldValues %}
                                                <option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['checkbox'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['radio'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% endif %}
                            {% if formErrors['customFields['~customField.id~']'] is defined %}
                                <div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
            </div>
        </form>
    </div>
</div>

{% if not(app.request.attributes.get('_route') in ['helpdesk_member_ticket']) %}
    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
{% endif %}

{% if user_service.isfileExists('apps/uvdesk/form-component') %}
<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if(ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if(!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if(customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if(!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            filesize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if(filesize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        {% if headerCustomFields is defined and headerCustomFields %}
            {% for customField in headerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ? : \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
        {% if CustomerCustomFields is defined and CustomerCustomFields %}
            {% for customField in CustomerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ? : \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
    var validationParameters = true;
</script>
{% endif %}

<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        {% if(removeMe is defined) %}
            \$.each({{ removeMe | json_encode |raw }}, function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        {% endif %}

        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                {% if not isTicketViewPage %}
                    'name' : {
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"{{ 'Email address is invalid'|trans }}\"
                    }],
                {% endif %}
                'type' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'subject' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'reply' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
            }),
            urlRoot : \"{{ path('helpdesk_member_create_ticket') }}\"
        });

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig", "/home/users/vipin.shrivastava/www/html/uvdesk_new_18/vendor/uvdesk/core-framework/Resources/views/Snippets/createMemberTicket.html.twig");
    }
}
