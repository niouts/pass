<?php

/* NioutsMainBundle:Identifiant:editer.html.twig */
class __TwigTemplate_6cffe335368c0e69b699c0f14d732933c6f54b67eeda35fd87054f6f88359080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NioutsMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NioutsMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        if ((isset($context["editer"]) ? $context["editer"] : $this->getContext($context, "editer"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiant.titre.modifier"), "html", null, true);
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiant.titre.ajouter"), "html", null, true);
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>";
        if ((isset($context["editer"]) ? $context["editer"] : $this->getContext($context, "editer"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiant.titre.modifier"), "html", null, true);
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiant.titre.ajouter"), "html", null, true);
        }
        echo "</h2>

<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_identifiants");
        echo "\" class=\"btnRetour\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.retour"), "html", null, true);
        echo "</a>

";
        // line 10
        $this->env->loadTemplate("NioutsMainBundle:Common:formMessages.html.twig")->display($context);
        // line 11
        echo "
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t<div class=\"formLigne\">
\t\t<div class=\"formLabel\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'label');
        echo "</div>
\t\t<div class=\"formSaisie\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'widget');
        echo "</div>
\t</div>
\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'errors');
        echo "\t
\t
\t<div class=\"formLigneHaute\">
\t\t<div class=\"formLabel\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'label');
        echo "</div>
\t\t<div class=\"formSaisie texte\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget');
        echo "</div>
\t</div>
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'errors');
        echo "\t
\t
\t<div class=\"formLigneBouton\">
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'widget');
        echo "
\t</div>\t
\t
";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "NioutsMainBundle:Identifiant:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  97 => 23,  65 => 11,  134 => 16,  110 => 50,  100 => 42,  84 => 40,  23 => 2,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 25,  71 => 19,  67 => 30,  63 => 10,  59 => 14,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 35,  68 => 12,  56 => 8,  87 => 19,  21 => 2,  26 => 2,  93 => 22,  88 => 6,  78 => 16,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 27,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 27,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 13,  69 => 25,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 30,  139 => 45,  131 => 15,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 28,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 25,  66 => 15,  55 => 15,  52 => 21,  50 => 17,  43 => 8,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 28,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 52,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 34,  82 => 17,  80 => 19,  73 => 19,  64 => 29,  60 => 6,  57 => 14,  54 => 10,  51 => 12,  48 => 11,  45 => 6,  42 => 5,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
