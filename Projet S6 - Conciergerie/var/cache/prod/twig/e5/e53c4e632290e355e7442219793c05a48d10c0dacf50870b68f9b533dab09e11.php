<?php

/* @Conciergerie/Entreprise/viewSalarie.html.twig */
class __TwigTemplate_57866a378b82ab76841caf816929679b9a7fd96cb0add8bf7cba71732d13d2ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "@Conciergerie/Entreprise/viewSalarie.html.twig", 1);
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

    // line 3
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Bienvenue sur votre espace Entreprise</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">
      <h3>Détails du salarié ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "id", array()), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"row\">

      <p><b>Nom :</b> ";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "nom", array())), "html", null, true);
        echo "</p>
      <p><b>Prenom :</b> ";
        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "prenom", array()))), "html", null, true);
        echo "</p>

      ";
        // line 22
        if (($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "sexe", array()) == "H")) {
            // line 23
            echo "        <p><b>Sexe :</b> Homme</p>
      ";
        } else {
            // line 25
            echo "        <p><b>Sexe :</b> Femme</p>
      ";
        }
        // line 27
        echo "
      <p><b>Date de naissance :</b> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "dateNaissance", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p><b>Ville :</b> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "adresse", array()), "ville", array()), "html", null, true);
        echo "</p>

      <p>
        <a href=\" ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_deleteSalarie", array("id" => $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "id", array()))), "html", null, true);
        echo " \"><button type=\"button\" class=\"btn btn-danger\">Supprimer le salarié</button></a>

        <a href=\" ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeSalaries");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des salariés</button></a>
      </p>

    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Entreprise/viewSalarie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  88 => 32,  82 => 29,  78 => 28,  75 => 27,  71 => 25,  67 => 23,  65 => 22,  60 => 20,  56 => 19,  48 => 14,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Entreprise/viewSalarie.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Entreprise\\viewSalarie.html.twig");
    }
}
