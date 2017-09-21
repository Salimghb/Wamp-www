<?php

/* @Conciergerie/Prestataire/index.html.twig */
class __TwigTemplate_ef0f428bad60094188eaf02f9c44f0f4b1678d12751d0b1d0dc7ffc1b05920b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "@Conciergerie/Prestataire/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire");
        echo "\"
";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_addService");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Proposer service</button></a>

  <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_listeServices");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Mes services</button></a>

  <a href=\" ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_historique");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Prestations validées</button></a>

  <a href=\" ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_monCompte");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mon compte</button></a>

";
    }

    // line 21
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 22
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Bienvenue sur votre espace Prestataire</h2>
  </div>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "  <section class=\"container catalogue\">
    <h3>Proposez vos services sur notre site et faites vous rémunérer ! </h3>
    <br>

    <div class=\"row\">
      <div class=\"col-md-6\">
        <h4><b>Pourquoi nous faire confiance ?</b></h4>
        <ul>
          <li><h4>Plus de 200 prestataires actifs sur le site en 2016</h4></li>
          <li><h4>Plus de 20 000€ de rémunération leurs ont été versés</h4></li>
          <li><h4>10 000 salariés inscrits et actifs sur le site</h4></li>
          <li><h4>Note moyenne attribuée aux prestataires : 4,9 / 5 </h4></li>
        </ul>
        <br><br><br>
      </div>

      <div class=\"col-md-4\">
        <img class=\"img-circle\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paletteservices.jpg"), "html", null, true);
        echo "\" alt=\"\">
      </div>
    </div>

    <h5>Chaque commande de l'un de vos services déclenche l'envoi d'une notification vous demandant de valider la commande vous est transmise. <br>Une fois cette commande validée, vous êtes mis en relation avec le salarié client et pouvez régler avec lui les modalités de livraison du service.</h5>

    <div class=\"input-group\">
      <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_addService");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Proposer un nouveau service </button></a>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  101 => 45,  82 => 28,  79 => 27,  72 => 22,  69 => 21,  62 => 16,  57 => 14,  52 => 12,  47 => 10,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/index.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\index.html.twig");
    }
}
