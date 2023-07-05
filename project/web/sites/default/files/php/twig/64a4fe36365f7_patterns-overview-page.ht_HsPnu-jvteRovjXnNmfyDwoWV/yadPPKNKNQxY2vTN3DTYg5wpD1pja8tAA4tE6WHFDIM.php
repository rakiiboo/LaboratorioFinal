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

/* modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-overview-page.html.twig */
class __TwigTemplate_1a80b4b4831cf5af7923471d67e8390f extends Template
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
        if ( !twig_test_empty(($context["patterns"] ?? null))) {
            // line 9
            echo "  <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Available patterns"));
            echo "</h2>

  ";
            // line 12
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patterns"] ?? null));
            foreach ($context['_seq'] as $context["group_name"] => $context["group_patterns"]) {
                // line 13
                echo "    ";
                if ((twig_length_filter($this->env, ($context["patterns"] ?? null)) > 1)) {
                    // line 14
                    echo "      <h3>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["group_name"], 14, $this->source), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 16
                echo "    <ul>
      ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group_patterns"]);
                foreach ($context['_seq'] as $context["pattern_name"] => $context["pattern"]) {
                    // line 18
                    echo "        <li>
          <a href=\"#";
                    // line 19
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["pattern_name"], 19, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pattern"], "label", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</a>
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pattern_name'], $context['pattern'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    </ul>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_patterns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
  <hr>

  ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patterns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group_patterns"]) {
                // line 28
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group_patterns"]);
                foreach ($context['_seq'] as $context["pattern_name"] => $context["pattern"]) {
                    // line 29
                    echo "      <div class=\"pattern-preview pattern-preview__";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pattern"], "definition", [], "any", false, false, true, 29), "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "\" id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["pattern_name"], 29, $this->source), "html", null, true);
                    echo "\">
        ";
                    // line 30
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pattern"], "meta", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "

        ";
                    // line 33
                    echo "        <fieldset class=\"pattern-preview__preview\">
          <legend>";
                    // line 34
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Preview"));
                    echo "</legend>
          ";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pattern"], "rendered", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "
        </fieldset>

        ";
                    // line 39
                    echo "        <p>
          <a href=\"";
                    // line 40
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ui_patterns.patterns.single", ["name" => $context["pattern_name"]]), "html", null, true);
                    echo "\" class=\"pattern-preview__view\">
            ";
                    // line 41
                    echo t("View @pattern.label as stand-alone", array("@pattern.label" => twig_get_attribute($this->env, $this->source, $context["pattern"], "label", [], "any", false, false, true, 41), ));
                    // line 42
                    echo "          </a>
        </p>
      </div>

      <hr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pattern_name'], $context['pattern'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_patterns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-overview-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  140 => 42,  138 => 41,  134 => 40,  131 => 39,  125 => 35,  121 => 34,  118 => 33,  113 => 30,  106 => 29,  101 => 28,  97 => 27,  92 => 24,  85 => 22,  74 => 19,  71 => 18,  67 => 17,  64 => 16,  58 => 14,  55 => 13,  50 => 12,  44 => 9,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-overview-page.html.twig", "/var/www/html/web/modules/contrib/ui_patterns/modules/ui_patterns_library/templates/patterns-overview-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "for" => 12, "trans" => 41);
        static $filters = array("t" => 9, "length" => 13, "escape" => 14);
        static $functions = array("url" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'trans'],
                ['t', 'length', 'escape'],
                ['url']
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
