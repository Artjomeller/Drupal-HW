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

/* modules/custom/praktikatoo_summary/templates/praktikatoo-summary.html.twig */
class __TwigTemplate_506a7b8d552aa03745f3f484a2d80197 extends Template
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
        yield "<div class=\"praktikatoo-summary\">
  <h2>Praktikatöö Kokkuvõte</h2>

  <div class=\"summary-item\">
    <strong>Aeg lahendamiseks:</strong> ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["aeg"] ?? null), 5, $this->source), "html", null, true);
        yield "
  </div>

  <div class=\"summary-item\">
    <strong>Varasem Drupal kogemus:</strong> ";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["kogemus"] ?? null), 9, $this->source), "html", null, true);
        yield "
  </div>

  <div class=\"summary-item\">
    <strong>Kõige keerulisem osa:</strong> ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["keerulisim"] ?? null), 13, $this->source), "html", null, true);
        yield "
  </div>

  <div class=\"summary-item\">
    <strong>Õppimised:</strong> ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["oppimised"] ?? null), 17, $this->source), "html", null, true);
        yield "
  </div>

  <div class=\"summary-item\">
    <strong>Üleandmise kuupäev:</strong> ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["kuupaev"] ?? null), 21, $this->source), "html", null, true);
        yield "
  </div>
</div>

<style>
.praktikatoo-summary {
  max-width: 800px;
  margin: 20px auto;
  padding: 30px;
  border: 2px solid #0074bd;
  border-radius: 10px;
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.praktikatoo-summary h2 {
  color: #0074bd;
  text-align: center;
  margin-bottom: 30px;
  font-size: 2rem;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

.summary-item {
  margin-bottom: 20px;
  padding: 15px;
  background: white;
  border-left: 5px solid #0074bd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.summary-item strong {
  color: #0074bd;
  font-weight: 600;
}
</style>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["aeg", "kogemus", "keerulisim", "oppimised", "kuupaev"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/praktikatoo_summary/templates/praktikatoo-summary.html.twig";
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
        return array (  78 => 21,  71 => 17,  64 => 13,  57 => 9,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/praktikatoo_summary/templates/praktikatoo-summary.html.twig", "/opt/drupal/web/modules/custom/praktikatoo_summary/templates/praktikatoo-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
