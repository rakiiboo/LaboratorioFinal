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

/* modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-meta-information.html.twig */
class __TwigTemplate_17270ecad714e370a613b3782d154860 extends Template
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
        if ( !twig_test_empty(($context["pattern"] ?? null))) {
            // line 9
            echo "
  ";
            // line 11
            echo "  <h3 class=\"pattern-preview__label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pattern"] ?? null), "label", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</h3>
  <p class=\"pattern-preview__description\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pattern"] ?? null), "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</p>

  ";
            // line 15
            echo "  <table class=\"pattern-preview__fields\">
    <thead>
    <tr>
      <th>";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Field"));
            echo "</th>
      <th>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Label"));
            echo "</th>
      <th>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Type"));
            echo "</th>
      <th>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
            echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pattern"] ?? null), "fields", [], "any", false, false, true, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 26
                echo "      <tr>
        <td><code>";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</code></td>
        <td>";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</td>
        <td><code>";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</code></td>
        <td>";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "</td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </tbody>
  </table>

";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-meta-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  85 => 26,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 15,  52 => 12,  47 => 11,  44 => 9,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-meta-information.html.twig", "/var/www/html/web/modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-meta-information.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "for" => 25);
        static $filters = array("escape" => 11, "t" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
