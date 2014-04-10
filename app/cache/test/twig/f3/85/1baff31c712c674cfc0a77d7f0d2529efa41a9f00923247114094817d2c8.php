<?php

/* ::layout.html.twig */
class __TwigTemplate_f3851baff31c712c674cfc0a77d7f0d2529efa41a9f00923247114094817d2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"), "html", null, true);
        echo "\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"content-type\" content=\"text/html\"> 
\t<meta name=\"application-name\" content=\"Pass\">
\t<meta name=\"author\" content=\"Nicolas DEWEZ\">
\t<meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.description"), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.keywords"), "html", null, true);
        echo "\">

\t<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" />
\t
\t<link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"/css/librairies/jquery.dataTables.css\" type=\"text/css\" />
\t";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "\t
\t
\t<!--[if lt IE 9]>
\t<script src=\"/js/librairies/html5shiv.js\"></script>
\t<script src=\"/js/librairies/IE9.js\"></script>
\t<![endif]-->
\t
\t<script type=\"text/javascript\" src=\"/js/librairies/jquery-1.10.2.min.js\"></script>
\t<script type=\"text/javascript\" src=\"/js/librairies/jquery.dataTables.min.js\"></script>
\t<script type=\"text/javascript\" src=\"/js/global.js\"></script>
\t";
        // line 27
        $this->displayBlock('js', $context, $blocks);
        // line 29
        echo "\t
\t<title>";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

<header>
\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_accueil");
        echo "\"><h1>Pass</h1></a>

\t<div id=\"headerBlocDroite\">
\t\t<p>
\t\t\t";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "_security_secured_area"), "method")) {
            // line 40
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nom"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "code"), "html", null, true);
            echo "\t\t\t
\t\t\t\t<a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("_logout");
            echo "\" id=\"deconnexion\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.deconnexion"), "html", null, true);
            echo "</a> 
\t\t\t";
        }
        // line 42
        echo "\t\t\t
\t\t</p>\t\t
\t</div>
\t
</header>

<div id=\"contenu\">
\t<div id=\"container\">
\t";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "\t</div>
\t
\t<input type=\"hidden\" id=\"confirmsupp\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.confirmsupp"), "html", null, true);
        echo "\">
</div>

<footer>
\tCopyright&copy; - ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.copyright"), "html", null, true);
        echo "
</footer>
</body>\t
</html>";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    // line 27
    public function block_js($context, array $blocks = array())
    {
        // line 28
        echo "\t";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "Pass";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 16,  110 => 50,  100 => 42,  84 => 40,  23 => 1,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 30,  63 => 15,  59 => 14,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 35,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 41,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 27,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 27,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 30,  139 => 45,  131 => 15,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 17,  43 => 8,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 28,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 52,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 39,  80 => 19,  73 => 19,  64 => 29,  60 => 6,  57 => 11,  54 => 10,  51 => 11,  48 => 15,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
