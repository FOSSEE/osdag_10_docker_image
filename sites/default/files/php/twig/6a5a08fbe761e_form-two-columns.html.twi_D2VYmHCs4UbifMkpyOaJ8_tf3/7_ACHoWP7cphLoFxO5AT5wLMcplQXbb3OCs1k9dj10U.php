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

/* @claro/form/form-two-columns.html.twig */
class __TwigTemplate_389485233e733fc0131795ca42899dd1 extends Template
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
            'main' => [$this, 'block_main'],
            'secondary' => [$this, 'block_secondary'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"layout-form clearfix\">
  <div class=\"layout-region layout-region--main\">
    <div class=\"layout-region__content\">
      ";
        // line 4
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 6
        yield "    </div>
  </div>
  <div class=\"layout-region layout-region--secondary\">
    <div class=\"layout-region__content\">
      ";
        // line 10
        yield from $this->unwrap()->yieldBlock('secondary', $context, $blocks);
        // line 12
        yield "    </div>
  </div>
  <div class=\"layout-region layout-region--footer\">
    <div class=\"layout-region__content\">
      ";
        // line 16
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 18
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "      ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_secondary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "      ";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@claro/form/form-two-columns.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 17,  101 => 16,  96 => 11,  89 => 10,  84 => 5,  77 => 4,  69 => 18,  67 => 16,  61 => 12,  59 => 10,  53 => 6,  51 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@claro/form/form-two-columns.html.twig", "/var/www/html/core/themes/claro/templates/form/form-two-columns.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 4];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "block"],
                [],
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
