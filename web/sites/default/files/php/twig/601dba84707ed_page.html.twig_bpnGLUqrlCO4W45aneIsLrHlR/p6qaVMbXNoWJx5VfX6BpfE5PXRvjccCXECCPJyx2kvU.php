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

/* themes/contrib/dxpr_theme/templates/page.html.twig */
class __TwigTemplate_f82446251a1cd7d385d38d0e803ab4fd0beceae17b6b95a412c73dd66716f70c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'secondary_header' => [$this, 'block_secondary_header'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/dxpr_theme/templates/page.html.twig"));

        // line 60
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 60), "getString", [], "method", false, false, true, 60) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "boxed_layout", [], "any", false, false, true, 60)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 61), "getString", [], "method", false, false, true, 61) == "boxed"))) {
            // line 62
            echo "<div class=\"dxpr-theme-boxed-container\">
";
        }
        // line 64
        echo "
";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 66)) {
            // line 67
            echo "  ";
            $this->displayBlock('secondary_header', $context, $blocks);
        }
        // line 82
        echo "
";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 84) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 84))) {
            // line 85
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 142
        echo "
<div class=\"wrap-containers\">

";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146)) {
            // line 147
            echo "  ";
            $this->displayBlock('highlighted', $context, $blocks);
        }
        // line 151
        echo "
";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 153) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 153), "page_title_home_hide", [], "any", false, false, true, 153) && ($context["is_front"] ?? null)))) {
            // line 154
            echo "
  ";
            // line 155
            $this->displayBlock('page_title', $context, $blocks);
        }
        // line 168
        echo "
";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 170)) {
            // line 171
            echo "  ";
            $this->displayBlock('content_top', $context, $blocks);
        }
        // line 184
        echo "
";
        // line 186
        $this->displayBlock('main', $context, $blocks);
        // line 263
        echo "
";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 265)) {
            // line 266
            echo "  ";
            $this->displayBlock('content_bottom', $context, $blocks);
        }
        // line 279
        echo "</div>

";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 282)) {
            // line 283
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 298
        echo "
";
        // line 299
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 299), "getString", [], "method", false, false, true, 299) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 299), "boxed_layout", [], "any", false, false, true, 299)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 300
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 300), "getString", [], "method", false, false, true, 300) == "boxed"))) {
            // line 301
            echo "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 67
    public function block_secondary_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secondary_header"));

        // line 68
        echo "    ";
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "full_width_containers", [], "any", false, false, true, 68), "cnt_secondary_header", [], "any", false, false, true, 68)) ? ("dxpr-theme-fluid") : ("container"));
        // line 69
        echo "    <header id=\"secondary-header\" class=\"dxpr-theme-secondary-header clearfix ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 69), "secondary_header_hide", [], "any", false, false, true, 69), 69, $this->source)), "html", null, true);
        echo "\" role=\"banner\">
      <div class=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 70, $this->source), "html", null, true);
        echo " secondary-header-container\">
        ";
        // line 71
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "full_width_containers", [], "any", false, false, true, 71), "cnt_secondary_header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 74
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
        ";
        // line 75
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "full_width_containers", [], "any", false, false, true, 75), "cnt_secondary_header", [], "any", false, false, true, 75)) {
            // line 76
            echo "          </div></div>
        ";
        }
        // line 78
        echo "      </div>
    </header>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 85
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 86
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 86), "header_position", [], "any", false, false, true, 86)) {
            // line 87
            echo "      ";
            // line 88
            $context["navbar_classes"] = [0 => "navbar dxpr-theme-header dxpr-theme-header--top", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 90
($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90), 90, $this->source))) : ("")), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 91
($context["theme"] ?? null), "settings", [], "any", false, false, true, 91), "header_side_align", [], "any", false, false, true, 91)];
            // line 94
            echo "    ";
        } else {
            // line 95
            echo "      ";
            // line 96
            $context["navbar_classes"] = [0 => "navbar dxpr-theme-header", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 98
($context["theme"] ?? null), "settings", [], "any", false, false, true, 98), "header_position", [], "any", false, false, true, 98)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 99
($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99), 99, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 100
($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100), 100, $this->source)))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101), 101, $this->source)))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 102
($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102), 102, $this->source)))) : ("")), 6 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 103
($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_fixed", [], "any", false, false, true, 103) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_sticky", [], "any", false, false, true, 103))) ? ("dxpr-theme-header--sticky") : ("")), 7 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 104
($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_fixed", [], "any", false, false, true, 104) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_sticky", [], "any", false, false, true, 104))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 107
            echo "    ";
        }
        // line 108
        echo "    ";
        $context["mark_menu"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 108), "mark_menu_with_children", [], "any", false, false, true, 108)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 109
        echo "    ";
        $context["navbar_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", [0 => "container"], "method", false, false, true, 109), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 109);
        // line 110
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_fixed", [], "any", false, false, true, 110) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_sticky", [], "any", false, false, true, 110))) {
            // line 111
            echo "      ";
            $context["navbar_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", [0 => "data-spy", 1 => "affix"], "method", false, false, true, 111), "setAttribute", [0 => "data-offset-top", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 111), "header_top_height_sticky_offset", [], "any", false, false, true, 111)], "method", false, false, true, 111);
            // line 112
            echo "    ";
        }
        // line 113
        echo "    ";
        $context["hamburger_menu"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) : ("three-dash"));
        // line 114
        echo "
    <header";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 115, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 116
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 116), "full_width_containers", [], "any", false, false, true, 116), "cnt_header_nav", [], "any", false, false, true, 116)) ? ("dxpr-theme-fluid") : ("container"));
        // line 117
        echo "      <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 117, $this->source), "html", null, true);
        echo " navbar-container\">
        ";
        // line 118
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 118), "full_width_containers", [], "any", false, false, true, 118), "cnt_header_nav", [], "any", false, false, true, 118)) {
            // line 119
            echo "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 121
        echo "        <div class=\"navbar-header\">
          ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
          ";
        // line 124
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 124)) {
            // line 125
            echo "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 125, $this->source), "html", null, true);
            echo "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 127
        echo "        </div>

        ";
        // line 130
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 130)) {
            // line 131
            echo "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 131, $this->source), "html", null, true);
            echo "\">
            ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
            </nav>
        ";
        }
        // line 135
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 135), "full_width_containers", [], "any", false, false, true, 135), "cnt_header_nav", [], "any", false, false, true, 135)) {
            // line 136
            echo "          </div></div>
        ";
        }
        // line 138
        echo "      </div>
    </header>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 147
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "highlighted"));

        // line 148
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 155
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 156
        echo "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 157
            echo "    ";
            $context["title_bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 157, $this->source)]);
            // line 158
            echo "    ";
            $context["page_title_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-bg-img" => ($context["title_bg_img_url"] ?? null)]);
            // line 159
            echo "  ";
        }
        // line 160
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 160, $this->source), "html", null, true);
        echo " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 161
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 161), "full_width_containers", [], "any", false, false, true, 161), "cnt_page_title", [], "any", false, false, true, 161)) ? ("dxpr-theme-fluid") : ("container"));
        // line 162
        echo "      <header role=\"banner\" id=\"page-title\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 162, $this->source), "html", null, true);
        echo " page-title-container\">
        ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
      </header>
    </div>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 171
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 172
        echo "    ";
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 172), "full_width_containers", [], "any", false, false, true, 172), "cnt_content_top", [], "any", false, false, true, 172)) ? ("dxpr-theme-fluid") : ("container"));
        // line 173
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 173, $this->source), "html", null, true);
        echo " content-top-container\">
      ";
        // line 174
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 174), "full_width_containers", [], "any", false, false, true, 174), "cnt_content_top", [], "any", false, false, true, 174)) {
            // line 175
            echo "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 177
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
        echo "
      ";
        // line 178
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 178), "full_width_containers", [], "any", false, false, true, 178), "cnt_content_top", [], "any", false, false, true, 178)) {
            // line 179
            echo "      </div></div>
      ";
        }
        // line 181
        echo "    </div>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 186
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 187
        echo "  ";
        $context["container"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 187), "full_width_containers", [], "any", false, false, true, 187), "cnt_content", [], "any", false, false, true, 187) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 188
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 188), "getString", [], "method", false, false, true, 188) == "dxpr-theme-util-full-width-content")) || (((        // line 189
($context["node"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 189), "full_width_content_types", [], "any", false, false, true, 189), twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 189), [], "any", false, false, true, 189)) &&  !twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 190
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 190), 190, $this->source))))) &&  !twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 191
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 191), 191, $this->source))))))) ? ("") : ("container"));
        // line 192
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 192, $this->source), "html", null, true);
        echo " js-quickedit-main-content clearfix\">
    ";
        // line 193
        if ((($context["container"] ?? null) != "")) {
            // line 194
            echo "    <div class=\"row\">
    ";
        }
        // line 196
        echo "      ";
        // line 197
        echo "      ";
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 197))))) {
            // line 198
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 203
            echo "      ";
        }
        // line 204
        echo "
      ";
        // line 206
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 206), "getString", [], "method", false, false, true, 206)) {
            // line 207
            echo "        ";
            // line 208
            $context["content_classes"] = [0 => (((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 209
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 209), 209, $this->source)))) && twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 209), 209, $this->source)))))) ? ("col-sm-6") : ("")), 1 => (((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 210
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 210), 210, $this->source)))) && twig_test_empty(twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 210), 210, $this->source))))))) ? ("col-sm-9") : ("")), 2 => (((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 211
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 211), 211, $this->source)))) && twig_test_empty(twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 211), 211, $this->source))))))) ? ("col-sm-9") : ("")), 3 => (((((            // line 212
($context["container"] ?? null) != "") && twig_test_empty(twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 212), 212, $this->source)))))) && twig_test_empty(twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212), 212, $this->source))))))) ? ("col-sm-12") : (""))];
            // line 215
            echo "      ";
        } else {
            // line 216
            echo "        ";
            $context["col"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 216), "getString", [], "method", false, false, true, 216);
            // line 217
            echo "        ";
            // line 218
            $context["content_classes"] = [0 => (((            // line 219
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), 1 => (((            // line 220
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), 2 => (((            // line 221
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), 3 => (((            // line 222
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 225
            echo "      ";
        }
        // line 226
        echo "
      <section";
        // line 227
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 227), 227, $this->source), "html", null, true);
        echo ">

        ";
        // line 230
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 231
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 234
            echo "        ";
        }
        // line 235
        echo "
        ";
        // line 237
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 237)) {
            // line 238
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        ";
        // line 244
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 248
        echo "      </section>

      ";
        // line 251
        echo "      ";
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 251))))) {
            // line 252
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 257
            echo "      ";
        }
        // line 258
        echo "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 259
            echo "    </div><!-- end .ow -->
    ";
        }
        // line 261
        echo "  </div><!-- end main-container -->
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 198
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 199
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
        echo "
          </aside>
        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 231
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_links"));

        // line 232
        echo "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 232, $this->source), "html", null, true);
        echo "</ul>
          ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 238
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "help"));

        // line 239
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
        echo "
          ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 244
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 245
        echo "          <a id=\"main-content\"></a>
          ";
        // line 246
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
        echo "
        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 252
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 253
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 254
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
        echo "
          </aside>
        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 266
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_bottom"));

        // line 267
        echo "    ";
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 267), "full_width_containers", [], "any", false, false, true, 267), "cnt_content_bottom", [], "any", false, false, true, 267)) ? ("dxpr-theme-fluid") : ("container"));
        // line 268
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 268, $this->source), "html", null, true);
        echo " content-bottom-container\">
      ";
        // line 269
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 269), "full_width_containers", [], "any", false, false, true, 269), "cnt_content_bottom", [], "any", false, false, true, 269)) {
            // line 270
            echo "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 272
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
        echo "
      ";
        // line 273
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 273), "full_width_containers", [], "any", false, false, true, 273), "cnt_content_bottom", [], "any", false, false, true, 273)) {
            // line 274
            echo "      </div></div>
      ";
        }
        // line 276
        echo "    </div>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 283
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 284
        echo "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 285
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 285), "full_width_containers", [], "any", false, false, true, 285), "cnt_footer", [], "any", false, false, true, 285)) ? ("dxpr-theme-fluid") : ("container"));
        // line 286
        echo "      <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 286, $this->source), "html", null, true);
        echo " footer-container\">
        ";
        // line 287
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 287), "full_width_containers", [], "any", false, false, true, 287), "cnt_footer", [], "any", false, false, true, 287)) {
            // line 288
            echo "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 290
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
        echo "
        ";
        // line 291
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 291), "full_width_containers", [], "any", false, false, true, 291), "cnt_footer", [], "any", false, false, true, 291)) {
            // line 292
            echo "        </div></div>
        ";
        }
        // line 294
        echo "      </div>
    </footer>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 294,  708 => 292,  706 => 291,  701 => 290,  697 => 288,  695 => 287,  690 => 286,  688 => 285,  685 => 284,  678 => 283,  670 => 276,  666 => 274,  664 => 273,  659 => 272,  655 => 270,  653 => 269,  648 => 268,  645 => 267,  638 => 266,  628 => 254,  625 => 253,  618 => 252,  609 => 246,  606 => 245,  599 => 244,  589 => 239,  582 => 238,  572 => 232,  565 => 231,  555 => 200,  552 => 199,  545 => 198,  537 => 261,  533 => 259,  530 => 258,  527 => 257,  524 => 252,  521 => 251,  517 => 248,  514 => 244,  511 => 242,  508 => 241,  505 => 238,  502 => 237,  499 => 235,  496 => 234,  493 => 231,  490 => 230,  485 => 227,  482 => 226,  479 => 225,  477 => 222,  476 => 221,  475 => 220,  474 => 219,  473 => 218,  471 => 217,  468 => 216,  465 => 215,  463 => 212,  462 => 211,  461 => 210,  460 => 209,  459 => 208,  457 => 207,  454 => 206,  451 => 204,  448 => 203,  445 => 198,  442 => 197,  440 => 196,  436 => 194,  434 => 193,  429 => 192,  427 => 191,  426 => 190,  425 => 189,  424 => 188,  422 => 187,  415 => 186,  407 => 181,  403 => 179,  401 => 178,  396 => 177,  392 => 175,  390 => 174,  385 => 173,  382 => 172,  375 => 171,  364 => 163,  359 => 162,  357 => 161,  352 => 160,  349 => 159,  346 => 158,  343 => 157,  340 => 156,  333 => 155,  323 => 148,  316 => 147,  307 => 138,  303 => 136,  300 => 135,  294 => 132,  289 => 131,  286 => 130,  282 => 127,  276 => 125,  273 => 124,  269 => 122,  266 => 121,  262 => 119,  260 => 118,  255 => 117,  253 => 116,  249 => 115,  246 => 114,  243 => 113,  240 => 112,  237 => 111,  234 => 110,  231 => 109,  228 => 108,  225 => 107,  223 => 104,  222 => 103,  221 => 102,  220 => 101,  219 => 100,  218 => 99,  217 => 98,  216 => 96,  214 => 95,  211 => 94,  209 => 91,  208 => 90,  207 => 88,  205 => 87,  202 => 86,  195 => 85,  186 => 78,  182 => 76,  180 => 75,  175 => 74,  171 => 72,  169 => 71,  165 => 70,  160 => 69,  157 => 68,  150 => 67,  141 => 301,  139 => 300,  138 => 299,  135 => 298,  131 => 283,  129 => 282,  125 => 279,  121 => 266,  119 => 265,  116 => 263,  114 => 186,  111 => 184,  107 => 171,  105 => 170,  102 => 168,  99 => 155,  96 => 154,  94 => 153,  91 => 151,  87 => 147,  85 => 146,  80 => 142,  76 => 85,  74 => 84,  71 => 82,  67 => 67,  65 => 66,  62 => 64,  58 => 62,  56 => 61,  55 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\portfolio\\web\\themes\\contrib\\dxpr_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60, "block" => 67, "set" => 68);
        static $filters = array("escape" => 69, "clean_class" => 69, "trim" => 190, "striptags" => 190, "render" => 190);
        static $functions = array("file_url" => 157, "create_attribute" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
                ['file_url', 'create_attribute']
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
