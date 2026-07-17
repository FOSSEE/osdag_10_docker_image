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

/* themes/contrib/nava/templates/layout/page.html.twig */
class __TwigTemplate_00441d36be4eed5578c6af78c2155ef6 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield from $this->load("@nava/parts/header/header.html.twig", 34)->unwrap()->yield($context);
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "  ";
            yield from $this->load("@nava/parts/highlighted.html.twig", 36)->unwrap()->yield($context);
        }
        // line 38
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 43
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "          ";
            yield from $this->load("@nava/parts/content/content_top.html.twig", 44)->unwrap()->yield($context);
            // line 45
            yield "        ";
        }
        // line 46
        yield "        ";
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 46))) {
            // line 47
            yield "          ";
            yield from $this->load("@nava/parts/content/content_home.html.twig", 47)->unwrap()->yield($context);
            // line 48
            yield "        ";
        }
        // line 49
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 49), "html", null, true);
        yield "
        ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "          ";
            yield from $this->load("@nava/parts/content/content_bottom.html.twig", 51)->unwrap()->yield($context);
            // line 52
            yield "        ";
        }
        // line 53
        yield "      </main>
      ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "        ";
            yield from $this->load("@nava/parts/sidebar/sidebar-left.html.twig", 55)->unwrap()->yield($context);
            // line 56
            yield "      ";
        }
        // line 57
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "        ";
            yield from $this->load("@nava/parts/sidebar/sidebar-right.html.twig", 58)->unwrap()->yield($context);
            // line 59
            yield "      ";
        }
        // line 60
        yield "    </div> ";
        // line 61
        yield "  </div> ";
        // line 62
        yield "</div>";
        // line 63
        yield from $this->load("@nava/parts/footer/footer.html.twig", 63)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/nava/templates/layout/page.html.twig";
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
        return array (  114 => 63,  112 => 62,  110 => 61,  108 => 60,  105 => 59,  102 => 58,  99 => 57,  96 => 56,  93 => 55,  91 => 54,  88 => 53,  85 => 52,  82 => 51,  80 => 50,  75 => 49,  72 => 48,  69 => 47,  66 => 46,  63 => 45,  60 => 44,  57 => 43,  51 => 38,  47 => 36,  45 => 35,  43 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/nava/templates/layout/page.html.twig", "/var/www/html/themes/contrib/nava/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 34, "if" => 35];
        static $filters = ["escape" => 49];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "include", 1 => "if"],
                [0 => "escape"],
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
