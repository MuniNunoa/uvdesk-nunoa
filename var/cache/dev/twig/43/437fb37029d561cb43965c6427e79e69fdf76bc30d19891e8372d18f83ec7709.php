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

/* @UVDeskSupportCenter/Knowledgebase/ticket.html.twig */
class __TwigTemplate_a5a55676c41cdb53a62a63e12e3677ec44f1edd4579078b1266412c0fa8d7b06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        // line 8
        $context["recaptchaDetail"] = twig_get_attribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 8, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 8);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaDescription", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaKeywords", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t</style>

\t";
        // line 26
        $context["isTicketViewPage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 26), "id", [], "any", true, true, false, 26)) ? (true) : (false));
        // line 27
        echo "\t

\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket Request"), "html", null, true);
        echo "</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        echo "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t";
        // line 36
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 41
            ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", true, true, false, 41)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true))) : (print ("")));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your name"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 51
            ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "from", [], "any", true, true, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "from", [], "any", false, false, false, 51), "html", null, true))) : (print ("")));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your email"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        echo "</option>

\t\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 64, $this->source); })()), "getTypes", [], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", true, true, false, 65) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 65))))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
        // line 77
        ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "subject", [], "any", true, true, false, 77)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 77, $this->source); })()), "subject", [], "any", false, false, false, 77), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">";
        // line 87
        ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "reply", [], "any", true, true, false, 87)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 87, $this->source); })()), "reply", [], "any", false, false, false, 87), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        // line 100
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 100, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 100, $this->source); })()), "isActive", [], "any", false, false, false, 100), true)))) {
            // line 101
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 102, $this->source); })()), "siteKey", [], "any", false, false, false, 102), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        ";
        } else {
            // line 105
            echo "                            <!-- Recaptcha will not support -->
                        ";
        }
        // line 107
        echo "
\t\t\t\t\t\t";
        // line 109
        echo "\t\t\t\t\t\t";
        $context["CustomerCustomFields"] = twig_get_attribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 109, $this->source); })()), "getCustomerCreateTicketCustomFieldSnippet", [], "method", false, false, false, 109);
        // line 110
        echo "\t\t\t\t\t\t";
        $context["removeMe"] = [];
        // line 111
        echo "\t\t\t\t\t\t";
        if ((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 111, $this->source); })())) {
            // line 112
            echo "\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 114))) ? ("dependent") : (""));
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 114));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    echo " dependency";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 114), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" style=\"position: relative; ";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 114))) ? ("display: none;") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for";
                // line 115
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 115) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 115)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 115), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                // line 116
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 116), "text"))) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"";
                    // line 118
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 118), "fieldtype", [], "array", true, true, false, 118)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 118), "fieldtype", [], "array", false, false, false, 118), "html", null, true))) : (print ("text")));
                    echo "\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 118), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 118)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 118) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 118)), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "value", [], "any", false, false, false, 118), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 121
$context["customField"], "fieldType", [], "any", false, false, false, 121), [0 => "date", 1 => "time", 2 => "datetime"])) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 123
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 123), "time"))) {
                        echo "time";
                    } else {
                        echo "calendar";
                    }
                    echo " uv-header-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 123), "html", null, true);
                    echo "\" type=\"text\" name=\"customFields[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 123), "html", null, true);
                    echo "]\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 123)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 123) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 123)), "html", null, true);
                    echo "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 125
$context["customField"], "fieldType", [], "any", false, false, false, 125), "textarea"))) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 127)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 127) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127)), "html", null, true);
                    echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 130
$context["customField"], "fieldType", [], "any", false, false, false, 130), [0 => "file"])) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 132), "html", null, true);
                    echo "]\" class=\"uv-field create-ticket\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 132)) ? ("required") : (""));
                    echo " id=\"for";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 132) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 132)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 135
$context["customField"], "fieldType", [], "any", false, false, false, 135), [0 => "select"])) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 136))) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[";
                        // line 138
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 138), "html", null, true);
                        echo "]\" class=\"uv-select create-ticket\" id=\"for";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 138) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 138)), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 138)) ? ("required") : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 139
                        echo "Select option";
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 140));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 141
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 141), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 141), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 147
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 147, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 147)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 147))]);
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 150
$context["customField"], "fieldType", [], "any", false, false, false, 150), [0 => "checkbox"])) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 151))) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 152));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[";
                            // line 156
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 156), "html", null, true);
                            echo "][]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 156), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 156) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 156)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 159
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 159) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 159)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 159), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 165
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 165, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 165)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 165))]);
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 168
$context["customField"], "fieldType", [], "any", false, false, false, 168), [0 => "radio"])) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 169))) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 170));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[";
                            // line 174
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 174), "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 174), "html", null, true);
                            echo "\" id=\"for";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 174) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 174)), "html", null, true);
                            echo "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 177
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 177) . twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 177)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 177), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        $context["removeMe"] = twig_array_merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 183, $this->source); })()), [0 => (("for" . twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 183)) . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 183))]);
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 187)) . "]"), [], "array", true, true, false, 187)) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 188, $this->source); })()), (("customFields[" . twig_get_attribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 188)) . "]"), [], "array", false, false, false, 188), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 194
        echo "
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t    ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 204, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 204)) {
            // line 205
            echo "            ";
            echo twig_include($this->env, $context, "@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig");
            echo " 
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 210
        echo "\t";
        $context["isTicketViewPage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 210), "id", [], "any", true, true, false, 210)) ? (true) : (false));
        // line 211
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

\t";
        // line 213
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 213, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 213, $this->source); })()), "isActive", [], "any", false, false, false, 213), true)))) {
            // line 214
            echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 216
        echo "
\t";
        // line 217
        echo twig_include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        echo "

\t<script type=\"text/javascript\">
\t";
        // line 220
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 220, $this->source); })()), "isfileExists", [0 => "apps/uvdesk/form-component"], "method", false, false, false, 220), false))) {
            // line 221
            echo "\tcustomFieldValidation = {};
\t";
        }
        // line 223
        echo "\t\t\$(function () {
\t\t\t";
        // line 224
        if (array_key_exists("removeMe", $context)) {
            // line 225
            echo "\t\t\t\t\$.each(";
            echo json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 225, $this->source); })()));
            echo ", function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t";
        }
        // line 229
        echo "\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});
        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});
        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});
\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t";
        // line 244
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 244, $this->source); })())) {
            // line 245
            echo "\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :
\t\t\t\t\t\t[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 252
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "'
\t\t\t\t\t\t},{
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "'
\t\t\t\t\t\t}],
\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "'
\t\t\t\t\t},
\t\t\t\t\t";
        // line 270
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 270, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 270, $this->source); })()), "isActive", [], "any", false, false, false, 270), true)))) {
            // line 271
            echo "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            echo "'
                        }
\t\t\t\t    ";
        }
        // line 281
        echo "\t\t\t\t}),
\t\t\t\turlRoot : \"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        echo "\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 287
        echo ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 287, $this->source); })())) : ("{}"));
        echo "');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanegd',
\t\t\t\t\t'change input[type=file]': 'formChanegd',
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 287,  813 => 282,  810 => 281,  804 => 278,  795 => 271,  793 => 270,  788 => 268,  781 => 264,  774 => 260,  770 => 258,  764 => 255,  758 => 252,  750 => 247,  746 => 245,  744 => 244,  727 => 229,  719 => 225,  717 => 224,  714 => 223,  710 => 221,  708 => 220,  702 => 217,  699 => 216,  695 => 214,  693 => 213,  687 => 211,  684 => 210,  674 => 209,  660 => 205,  658 => 204,  647 => 196,  643 => 194,  639 => 192,  632 => 190,  626 => 188,  623 => 187,  619 => 185,  616 => 184,  614 => 183,  611 => 182,  608 => 181,  596 => 177,  586 => 174,  581 => 171,  576 => 170,  573 => 169,  571 => 168,  568 => 167,  565 => 166,  563 => 165,  560 => 164,  557 => 163,  545 => 159,  535 => 156,  530 => 153,  525 => 152,  522 => 151,  520 => 150,  517 => 149,  514 => 148,  512 => 147,  509 => 146,  504 => 143,  493 => 141,  489 => 140,  485 => 139,  477 => 138,  474 => 137,  471 => 136,  469 => 135,  459 => 132,  456 => 131,  454 => 130,  444 => 127,  441 => 126,  439 => 125,  422 => 123,  419 => 122,  417 => 121,  403 => 118,  400 => 117,  398 => 116,  392 => 115,  375 => 114,  371 => 113,  368 => 112,  365 => 111,  362 => 110,  359 => 109,  356 => 107,  352 => 105,  346 => 102,  343 => 101,  341 => 100,  334 => 96,  324 => 89,  319 => 87,  314 => 85,  305 => 79,  300 => 77,  295 => 75,  286 => 69,  282 => 67,  269 => 65,  265 => 64,  260 => 62,  254 => 59,  250 => 57,  243 => 53,  238 => 51,  233 => 49,  224 => 43,  219 => 41,  214 => 39,  210 => 37,  208 => 36,  204 => 35,  198 => 32,  191 => 27,  189 => 26,  172 => 11,  162 => 10,  143 => 6,  124 => 5,  105 => 4,  86 => 3,  67 => 2,  56 => 1,  54 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}
{% block title %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}create.ticket.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}create.ticket.metaKeywords{% endtrans %}{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block body %}
\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t</style>

\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t

\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>{{ 'Create Ticket Request'|trans }}</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"{{ path('helpdesk_customer_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.name is defined ? post.name : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your name'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.from is defined ? post.from : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your email'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select type'|trans }}</option>

\t\t\t\t\t\t\t\t\t{% for type in ticket_service.getTypes() %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ type.id }}\" {{ post.type is defined and post.type == type.id ? 'selected' : '' }}>{{ type.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.subject is defined ? post.subject : '' }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">{{ post.reply is defined ? post.reply : '' }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        {% else %}
                            <!-- Recaptcha will not support -->
                        {% endif %}

\t\t\t\t\t\t{# CustomFields #}
\t\t\t\t\t\t{% set CustomerCustomFields = ticket_service.getCustomerCreateTicketCustomFieldSnippet() %}
\t\t\t\t\t\t{% set removeMe = [] %}
\t\t\t\t\t\t{% if CustomerCustomFields %}
\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t{% for key, customField in CustomerCustomFields %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
\t\t\t\t\t\t\t\t\t\t{% if customField.fieldType == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.value}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType == 'textarea' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['file'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['select'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select option' }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['checkbox'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['radio'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if formErrors['customFields['~customField.id~']'] is defined %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t    {% if user_service.isfileExists('apps/uvdesk/form-component') %}
            {{ include('@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig') }} 
        {% endif %}
{% endblock %}

{% block footer %}
\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t{{ parent() }}

\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

\t{{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

\t<script type=\"text/javascript\">
\t{% if user_service.isfileExists('apps/uvdesk/form-component') == false %}
\tcustomFieldValidation = {};
\t{% endif %}
\t\t\$(function () {
\t\t\t{% if(removeMe is defined) %}
\t\t\t\t\$.each({{ removeMe | json_encode |raw }}, function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t{% endif %}
\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});
        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});
        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});
\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :
\t\t\t\t\t\t[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},{
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '{{ \"Email address is invalid\"|trans }}'
\t\t\t\t\t\t}],
\t\t\t\t\t{% endif %}
\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if(grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
\t\t\t\t}),
\t\t\t\turlRoot : \"{{ path('helpdesk_customer_create_ticket') }}\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanegd',
\t\t\t\t\t'change input[type=file]': 'formChanegd',
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", "/home/users/vipin.shrivastava/www/html/uvdesk_new_18/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticket.html.twig");
    }
}
