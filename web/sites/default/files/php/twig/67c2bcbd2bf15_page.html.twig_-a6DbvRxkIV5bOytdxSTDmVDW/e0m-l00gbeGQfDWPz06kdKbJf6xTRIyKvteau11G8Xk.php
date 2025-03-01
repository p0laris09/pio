<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gen_pio_theme/templates/layouts/page.html.twig */
class __TwigTemplate_3d1b6923b7938a5846bc8ecc40430061 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 2, $this->source), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=\"";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 3, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 3, $this->source)), "html", null, true);
        yield "/assets/third_party/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 4, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source)), "html", null, true);
        yield "/assets/third_party/fontawesome/css/all.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
        yield "/assets/css/custom_styles.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        yield "/themes/custom/gen_pio_theme/css/theme_styles.css\">
    <script src=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        yield "/assets/third_party/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        yield "/assets/js/custom_scripts.js\"></script>
    
<head>
  <head-placeholder token=\"";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 11, $this->source), "html", null, true);
        yield "\">
    <title>";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 12, $this->source), " | "));
        yield "</title>
    ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head"] ?? null), 13, $this->source), "html", null, true);
        yield "
    ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["styles"] ?? null), 14, $this->source), "html", null, true);
        yield "
    ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scripts"] ?? null), 15, $this->source), "html", null, true);
        yield "
  </head>
<body";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        yield ">
  ";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 18, $this->source), "html", null, true);
        yield "

  <div id=\"page-wrapper\">
    <div id=\"page\">
      ";
        // line 23
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 23)) {
            // line 24
            yield "        <div class=\"main print_hide\">
        <div class=\"header\">
            <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"head-title\">
                ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 29)) {
                // line 30
                yield "                    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                yield "
                ";
            }
            // line 32
            yield "                <h1>
                    <small>";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "</small><br>
                    ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            yield "
                </h1>
                </div>
            </div>
            </div>
        </div>
        </div>
      ";
        } else {
            // line 42
            yield "      <div>No Navigation Block</div>
      ";
        }
        // line 44
        yield "
      ";
        // line 46
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 46)) {
            // line 47
            yield "      <div class=\"nav-ct\">
          <nav class=\"navbar navbar-expand-lg\">
              <div class=\"container-fluid\">
                  <button class=\"d-lg-none navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
                      aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <span></span>
                      <span></span>
                      <span></span>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
                      ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            yield "
                  </div>
              </div>
          </nav>
      </div>
      ";
        }
        // line 63
        yield "

      ";
        // line 66
        yield "      ";
        if (($context["breadcrumb"] ?? null)) {
            // line 67
            yield "        <div id=\"breadcrumb\">
          ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 68, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 71
        yield "
      ";
        // line 73
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        yield "

      ";
        // line 76
        yield "      <main id=\"content\" role=\"main\">
        <a id=\"main-content\"></a>
        ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        yield "
      </main>

      ";
        // line 82
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82)) {
            // line 83
            yield "        <aside id=\"sidebar-first\">
          ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 87
        yield "
      ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 88)) {
            // line 89
            yield "        <aside id=\"sidebar-second\">
          ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 93
        yield "
      ";
        // line 95
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 95)) {
            // line 96
            yield "        <footer id=\"footer\">
          ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            yield "
        </footer>
      ";
        }
        // line 100
        yield "
    </div>
  </div>

  ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 104, $this->source), "html", null, true);
        yield "
  ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scripts"] ?? null), 105, $this->source), "html", null, true);
        yield "
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "base_path", "directory", "placeholder_token", "head_title", "head", "styles", "scripts", "attributes", "page_top", "page", "content", "breadcrumb", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layouts/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  262 => 105,  258 => 104,  252 => 100,  246 => 97,  243 => 96,  240 => 95,  237 => 93,  231 => 90,  228 => 89,  226 => 88,  223 => 87,  217 => 84,  214 => 83,  211 => 82,  205 => 78,  201 => 76,  195 => 73,  192 => 71,  186 => 68,  183 => 67,  180 => 66,  176 => 63,  167 => 57,  155 => 47,  152 => 46,  149 => 44,  145 => 42,  134 => 34,  130 => 33,  127 => 32,  121 => 30,  119 => 29,  112 => 24,  109 => 23,  102 => 18,  98 => 17,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layouts/page.html.twig", "C:\\xampp\\htdocs\\pio\\web\\themes\\custom\\gen_pio_theme\\templates\\layouts\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 2, "safe_join" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'safe_join'],
                [],
                $this->source
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
