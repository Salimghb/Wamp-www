<?php

/* ConciergerieBundle:Entreprise:addSalarie.html.twig */
class __TwigTemplate_06a767d2292554c92be3010133fb83b466b246dd2c95a123b9cc58a9374f7a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:addSalarie.html.twig", 1);
        $this->blocks = array(
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Entreprise:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Espace de gestion des salariés</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">
    <div class=\"row\">
      <h2>Ajout de salarié</h2>
    </div>
    
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_addSalarie"), "attr" => array("class" => "")));
        echo "

    <div class=\"input-group col-xs-8\">
      ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salaries", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Séléctionnez des salariés à ajouter à votre liste :"));
        echo "
    </div>
    <br>
    <div class=\"alert alert-warning\">
      Les salariés ajoutés pourront profiter des services inclus dans vos abonnements.
    </div>

    <p>

      <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Valider\" />

      <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeSalaries");
        echo "\" class=\"btn btn-warning\">

        Retour à la liste des salariés

      </a>

    </p>
    
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:addSalarie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 38,  69 => 30,  55 => 19,  49 => 16,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:addSalarie.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/addSalarie.html.twig");
    }
}
