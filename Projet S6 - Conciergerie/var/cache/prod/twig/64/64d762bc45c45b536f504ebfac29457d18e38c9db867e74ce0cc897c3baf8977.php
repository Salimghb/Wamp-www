<?php

/* ConciergerieBundle:Admin:addBouquet.html.twig */
class __TwigTemplate_d62ddb1da8ee18f81dc475ad7af5a11c8b0869771a4b0aab1eb1a7c1b476e3dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "ConciergerieBundle:Admin:addBouquet.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <section class=\"container catalogue\">

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_addBouquet"), "attr" => array("class" => "")));
        echo "

    <div class=\"input-group col-xs-8\">
      ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelle", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Libellé"), "label" => "Libellé :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tarif", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Tarif en euros"), "label" => "Tarif mensuel :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "typesService", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Types de service mis à disposition :"));
        echo "
    </div>

    <p></p>
    <p>

      <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Valider\" />

      <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquets");
        echo "\" class=\"btn btn-warning\">

        Retour à la liste des bouquets

      </a>

    </p>
    
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Admin:addBouquet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  66 => 26,  55 => 18,  48 => 14,  41 => 10,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Admin:addBouquet.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Admin/addBouquet.html.twig");
    }
}
