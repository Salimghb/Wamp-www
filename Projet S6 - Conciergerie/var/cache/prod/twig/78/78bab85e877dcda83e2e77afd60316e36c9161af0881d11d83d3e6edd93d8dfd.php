<?php

/* @Conciergerie/Salarie/index.html.twig */
class __TwigTemplate_8d89b5e12800630f9ab5cb70e6c57f267308b72d135845ecd78195b31385bace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "@Conciergerie/Salarie/index.html.twig", 1);
        $this->blocks = array(
            'redirectHome' => array($this, 'block_redirectHome'),
            'navbar' => array($this, 'block_navbar'),
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_redirectHome($context, array $blocks = array())
    {
        // line 4
        echo "  \" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie");
        echo "\"
";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "

  <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Catalogue</button></a>


  <a href=\" ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_listeCommandes");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mes commandes</button></a>


  <a href=\" ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_monEntreprise");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mon entreprise</button></a>


  <a href=\" ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_monCompte");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mon compte</button></a>

";
    }

    // line 25
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 26
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Bienvenue sur votre espace Salarié</h2>
  </div>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "  <section class=\"container catalogue\">
    ";
        // line 33
        if (twig_test_empty((isset($context["listeServices"]) ? $context["listeServices"] : null))) {
            // line 34
            echo "      <h3>Oups... Vous n'avez pour l'instant accès à aucun service.</h3>
      <div class=\"alert alert-warning\">
        <h5>
          <b>Votre entreprise vous a-t-elle bien ajouté(e) à sa liste de salariés ? </b><br>
          Si oui, il est possible que son abonnement à l'un de nos bouquets soit terminé.
        </h5>
      </div>

    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeServices"]) ? $context["listeServices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 45
            echo "      <div class=\"col-lg-4 col-sm-6 col-xs-6 service\">
        <h3>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "</p>
        <p><b>Popularité :</b>  <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_service", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "nbCommentaires", array()), "html", null, true);
            echo " avis</a> </p>
        <p><b>Tarif :</b> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "tarif", array()), "html", null, true);
            echo " €</p>
        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_commande", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\">Commander</button></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Salarie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  130 => 50,  126 => 49,  120 => 48,  116 => 47,  112 => 46,  109 => 45,  105 => 44,  102 => 43,  91 => 34,  89 => 33,  86 => 32,  83 => 31,  76 => 26,  73 => 25,  66 => 20,  60 => 17,  54 => 14,  48 => 11,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Salarie/index.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Salarie\\index.html.twig");
    }
}
