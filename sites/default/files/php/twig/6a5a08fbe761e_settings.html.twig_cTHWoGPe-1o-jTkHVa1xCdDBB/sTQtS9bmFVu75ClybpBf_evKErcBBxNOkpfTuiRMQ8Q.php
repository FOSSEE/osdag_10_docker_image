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

/* @nava/parts/settings.html.twig */
class __TwigTemplate_6d088bf60c6ec91896a3184c025eecd8 extends Template
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
        // line 1
        if ((($tmp = ($context["bootstrapicons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("nava/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        // line 4
        yield "<style>
.container {
  max-width: ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container_width"] ?? null), "html", null, true);
        yield "px;
}
";
        // line 8
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 9
            yield ".header .container {
  max-width: 100%;
}
";
        }
        // line 13
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 14
            yield ".highlighted .container,
.main-wrapper .container {
  max-width: 100%;
}
";
        }
        // line 19
        yield "
";
        // line 20
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 21
            yield ".footer .container {
  max-width: 100%;
}
";
        }
        // line 25
        if ((($tmp = ($context["highlight_author_comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield ".by-node-author {
  box-shadow: var(--shadow-secondary);
}
";
        }
        // line 30
        yield "</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bootstrapicons", "container_width", "header_width", "main_width", "footer_width", "highlight_author_comment"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@nava/parts/settings.html.twig";
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
        return array (  96 => 30,  90 => 26,  88 => 25,  82 => 21,  80 => 20,  77 => 19,  70 => 14,  68 => 13,  62 => 9,  60 => 8,  55 => 6,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@nava/parts/settings.html.twig", "/var/www/html/themes/contrib/nava/templates/parts/settings.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2];
        static $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [0 => "attach_library"],
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
