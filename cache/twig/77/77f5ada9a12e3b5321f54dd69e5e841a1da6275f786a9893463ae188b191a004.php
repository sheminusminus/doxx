<?php

/* partials/github_link.html.twig */
class __TwigTemplate_902358194d5f27b3a73b981f3f9780ea843eb25ace7f566f8f9498624319ca8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a class=\"github-link\" href=\"";
        echo ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "tree", array()) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", array())), array("/user/" => "")));
        echo "\"><i class=\"fa fa-github-square\"></i> ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GITHUB_EDIT_THIS_PAGE");
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/github_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"github-link\" href=\"{{ theme_config.github.tree ~  ('/'~page.filePathClean)|replace({'/user/':''}) }}\"><i class=\"fa fa-github-square\"></i> {{ 'THEME_LEARN2_GITHUB_EDIT_THIS_PAGE'|t }}</a>
", "partials/github_link.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/partials/github_link.html.twig");
    }
}
