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

/* modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-variant-meta-information.html.twig */
class __TwigTemplate_3be8df20072996838733ac7b105da56e extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        if ( !twig_test_empty(($context["variant"] ?? null))) {
            // line 9
            echo "  <table class=\"pattern-preview__variants pattern-preview__variants--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
    <thead>
    <tr>
      <th>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Variant"));
            echo "</th>
      <th>";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
            echo "</th>
      <th>";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
            echo "</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "label", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</td>
      <td><code>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</code></td>
      <td>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</td>
    </tr>
    </tbody>
  </table>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-variant-meta-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  71 => 20,  67 => 19,  59 => 14,  55 => 13,  51 => 12,  44 => 9,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-variant-meta-information.html.twig", "/var/www/html/web/modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-variant-meta-information.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 9, "t" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
