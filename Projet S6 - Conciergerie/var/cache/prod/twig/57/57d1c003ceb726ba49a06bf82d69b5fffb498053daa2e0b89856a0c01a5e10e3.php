<?php

/* ConciergerieBundle:Admin:viewCommande.html.twig */
class __TwigTemplate_8e8f34589f900b87626b7d96276f75527a78e4a93be191bc65deb85022c24390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "ConciergerieBundle:Admin:viewCommande.html.twig", 1);
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
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Détails de la commande ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()), "html", null, true);
        echo "</h3>

      <p><b>Salarié demandeur : </b>";
        // line 12
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "salarie", array()), "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "salarie", array()), "nom", array())))), "html", null, true);
        echo "</p>
      <p><b>Entreprise responsable : </b><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprise", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "salarie", array()), "entreprise", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "salarie", array()), "entreprise", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</a></p>
      <p><b>Service commandé : </b>";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "service", array()), "libelle", array()))), "html", null, true);
        echo "</p>
      <p><b>Tarif : </b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "service", array()), "tarif", array()), "html", null, true);
        echo "€</p>
      <p><b>Commandé le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo " </b>à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "date", array()), "H:i:s"), "html", null, true);
        echo " </p>
      <p><b>Type du service : </b>";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "service", array()), "type", array()), "libelle", array()))), "html", null, true);
        echo "</p>
      <p><b>Informations complémentaires : </b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "complements", array()), "html", null, true);
        echo " </p>
      <p>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Supprimer la commande</button></a>

        <a href=\" ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commandes");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des commandes</button></a>
      </p>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Admin:viewCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  71 => 18,  67 => 17,  61 => 16,  57 => 15,  53 => 14,  47 => 13,  43 => 12,  38 => 10,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Admin:viewCommande.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Admin/viewCommande.html.twig");
    }
}
