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

/* partials/_navbar.html.twig */
class __TwigTemplate_89b24d9999ef8540172526224884e160 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 1
        yield "<nav style=\"background-color: #87CEEB; padding: 10px;\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" style=\"color: white; text-decoration: none; margin-right: 15px;\">Products</a>
    <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
        yield "\" style=\"color: white; text-decoration: none; margin-right: 15px;\">Add Product</a>
    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" style=\"color: white; text-decoration: none;\">Logout</a>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  52 => 4,  48 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav style=\"background-color: #87CEEB; padding: 10px;\">
    <a href=\"{{ path('product_index') }}\" style=\"color: white; text-decoration: none; margin-right: 15px;\">Products</a>
    <a href=\"{{ path('product_new') }}\" style=\"color: white; text-decoration: none; margin-right: 15px;\">Add Product</a>
    <a href=\"{{ path('app_logout') }}\" style=\"color: white; text-decoration: none;\">Logout</a>
</nav>", "partials/_navbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/first_symfony/productMng/templates/partials/_navbar.html.twig");
    }
}
