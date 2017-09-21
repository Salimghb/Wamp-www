<?php

/* @Conciergerie/Offline/preregister.html.twig */
class __TwigTemplate_f6bf756d20e1b4093920a3c2d9bb16c57695f07896a2259c2467cde66767784a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "@Conciergerie/Offline/preregister.html.twig", 1);
        $this->blocks = array(
            'user_info' => array($this, 'block_user_info'),
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
    public function block_user_info($context, array $blocks = array())
    {
    }

    // line 5
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container-fluid TitrePage\">
  <h2>Inscription : Choix du type d'utilisateur</h2>
</div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"container blocChoixRole\">

  <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register", array("role" => "Entreprise"));
        echo "\">
    <div class=\"ChoixRole col-lg-4\">
      <h2>Entreprise </h2>
      <p>Souscrivez à des bouquets de services auxquels vos salariés auront accès et simplifiez leur quotidien !</p>
    </div>
  </a>

  <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register", array("role" => "Prestataire"));
        echo "\">
    <div class=\"ChoixRole col-lg-4\">
      <h2>Prestataire</h2>
      <p>Proposez vos services sur notre site et faites vous rémunérer !</p>
    </div>
  </a>

  <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register", array("role" => "Salarie"));
        echo "\">
    <div class=\"ChoixRole col-lg-4\">
      <h2>Salarié </h2>
      <p>Commandez des services de qualité parmi le bouquet souscit par votre entreprise !</p>
    </div>
  </a>

</div>



";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Offline/preregister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  62 => 21,  52 => 14,  48 => 12,  45 => 11,  38 => 6,  35 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Offline/preregister.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Offline\\preregister.html.twig");
    }
}
