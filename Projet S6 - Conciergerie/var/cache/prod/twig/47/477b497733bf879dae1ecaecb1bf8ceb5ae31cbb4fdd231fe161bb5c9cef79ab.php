<?php

/* @Conciergerie/Admin/viewPrestataire.html.twig */
class __TwigTemplate_b1f9a3e96275cd7745dab66ae4e0c0725e4edecfbb232bc3157a435f834a999d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/viewPrestataire.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Détails du prestataire ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "id", array()), "html", null, true);
        echo "</h3>
      
      <p><b>Raison Sociale : </b>";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "user", array()), "username", array()))), "html", null, true);
        echo "</p>
      <p><b>SIRET : </b>";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "siret", array()))), "html", null, true);
        echo "</p>
      <p><b>Responsable : </b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "responsable", array()), "html", null, true);
        echo "</p>
      <p><b>Téléphone : </b>+33";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "telephone", array()), "html", null, true);
        echo "</p>
      <p><b>Ville : </b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "adresse", array()), "ville", array()))), "html", null, true);
        echo " </p>
      <p><b>Liste des services proposés : </b> <br>
        ";
        // line 19
        if (twig_test_empty($this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "services", array()))) {
            // line 20
            echo "          Ce prestataire n'a encore proposé aucun service
        ";
        } else {
            // line 22
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 23
                echo "            - ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["service"], "libelle", array()))) . " au tarif de ") . $this->getAttribute($context["service"], "tarif", array())), "html", null, true);
                echo "€<br>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "        
      </p>
      <p>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deletePrestataire", array("id" => $this->getAttribute((isset($context["prestataire"]) ? $context["prestataire"] : null), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Supprimer le prestataire</button></a>
        
        <a href=\" ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_prestataires");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des prestataires</button></a>
      </p>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/viewPrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  92 => 29,  87 => 26,  84 => 25,  75 => 23,  70 => 22,  66 => 20,  64 => 19,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  38 => 11,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/viewPrestataire.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\viewPrestataire.html.twig");
    }
}
