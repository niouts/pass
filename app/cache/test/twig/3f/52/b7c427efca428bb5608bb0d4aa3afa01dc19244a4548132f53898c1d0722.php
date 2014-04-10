<?php

/* NioutsMainBundle:Identifiant:lister.html.twig */
class __TwigTemplate_3f52b7c427efca428bb5608bb0d4aa3afa01dc19244a4548132f53898c1d0722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NioutsMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'js' => array($this, 'block_js'),
            'css' => array($this, 'block_css'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.titre"), "html", null, true);
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("js", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"/js/main/identifiant/lister.js\"></script>
";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"/css/main/identifiant/lister.css\" type=\"text/css\" />
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.titre"), "html", null, true);
        echo "</h2>

<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_accueil");
        echo "\" class=\"btnRetour\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.menu"), "html", null, true);
        echo "</a>
<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_identifiant");
        echo "\" class=\"btnAjouter\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.lien.ajouter"), "html", null, true);
        echo "</a>

";
        // line 21
        $this->env->loadTemplate("NioutsMainBundle:Common:formMessages.html.twig")->display($context);
        // line 22
        echo "
<div id=\"blocTableau\">
\t<table class=\"dataTable\">
    <thead>
\t\t<tr>
\t\t\t<th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.table.libelle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.table.actions"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>\t
\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 33
            echo "\t<tr>
\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "libelle"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_identifiant", array("id" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id"))), "html", null, true);
            echo "\" class=\"btnModifier\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.lien.modifier"), "html", null, true);
            echo "\"></a>&nbsp;
\t\t\t<a href=\"#\" class=\"btnSupprimer\" rel=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("identifiants.lien.supprimer"), "html", null, true);
            echo "\"></a>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t
\t</tbody>
\t</table>  
</div>\t

<form id=\"frmIdentifiants\" method=\"post\">
\t<input type=\"hidden\" name=\"typeAction\" id=\"action\" value=\"\">
\t<input type=\"hidden\" name=\"id\" id=\"id\" value=\"\">
</form>

";
    }

    public function getTemplateName()
    {
        return "NioutsMainBundle:Identifiant:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  90 => 27,  81 => 21,  114 => 31,  97 => 23,  65 => 11,  134 => 16,  110 => 50,  100 => 42,  84 => 40,  23 => 2,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 25,  71 => 19,  67 => 30,  63 => 10,  59 => 15,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 35,  68 => 18,  56 => 8,  87 => 19,  21 => 2,  26 => 2,  93 => 22,  88 => 6,  78 => 16,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 27,  136 => 56,  121 => 46,  117 => 44,  105 => 33,  91 => 27,  62 => 16,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 13,  69 => 25,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 30,  139 => 45,  131 => 40,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 34,  101 => 32,  98 => 31,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 11,  50 => 17,  43 => 8,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 28,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 52,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 34,  82 => 17,  80 => 19,  73 => 19,  64 => 29,  60 => 6,  57 => 14,  54 => 10,  51 => 12,  48 => 11,  45 => 6,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
