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

/* themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig */
class __TwigTemplate_e4db8675ef89c3f5655f7faae7a3665059651c059ae07163f9ebe31c5a5f6b59 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig"));

        // line 45
        $context["classes"] = [0 => "panel", 1 => ((        // line 47
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null), 47, $this->source)))))];
        // line 50
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">

  ";
        // line 53
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 54
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 69
            echo "  ";
        }
        // line 70
        echo "
  ";
        // line 72
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
  ";
        // line 107
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 108
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 54
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heading"));

        // line 55
        echo "      <div class=\"panel-heading\">
        ";
        // line 57
        $context["heading_classes"] = [0 => "panel-title", 1 => ((        // line 59
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 62
        echo "        ";
        if (($context["collapsible"] ?? null)) {
            // line 63
            echo "          <a";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
            echo " href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 63, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 63, $this->source), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 65
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 65, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "    ";
        // line 74
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 76
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 77
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 78
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 79
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 82
        echo "    ";
        // line 83
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 85
($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 85) == "invisible"))) ? ("sr-only") : (""))];
        // line 88
        echo "
    ";
        // line 89
        if (($context["errors"] ?? null)) {
            // line 90
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 91, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 94
        echo "
    <div";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
        echo ">
      ";
        // line 96
        if ((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 96) == "before"))) {
            // line 97
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 97), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 99
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 99, $this->source), "html", null, true);
        echo "
      ";
        // line 100
        if (((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 100) == "after")) || (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 100) == "invisible"))) {
            // line 101
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 103
        echo "    </div>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 109
        echo "      ";
        // line 110
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 114
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 114, $this->source), "html", null, true);
        echo "</div>
    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 114,  215 => 110,  213 => 109,  206 => 108,  198 => 103,  190 => 101,  188 => 100,  183 => 99,  175 => 97,  173 => 96,  169 => 95,  166 => 94,  160 => 91,  157 => 90,  155 => 89,  152 => 88,  150 => 85,  149 => 83,  147 => 82,  145 => 79,  144 => 78,  143 => 77,  142 => 76,  141 => 74,  139 => 73,  132 => 72,  124 => 67,  116 => 65,  106 => 63,  103 => 62,  101 => 59,  100 => 57,  97 => 55,  90 => 54,  81 => 117,  78 => 116,  75 => 108,  72 => 107,  69 => 105,  66 => 72,  63 => 70,  60 => 69,  57 => 54,  54 => 53,  48 => 50,  46 => 47,  45 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig", "C:\\xampp\\htdocs\\portfolio\\web\\themes\\contrib\\bootstrap\\templates\\bootstrap\\bootstrap-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "if" => 53, "block" => 54);
        static $filters = array("clean_class" => 47, "escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
