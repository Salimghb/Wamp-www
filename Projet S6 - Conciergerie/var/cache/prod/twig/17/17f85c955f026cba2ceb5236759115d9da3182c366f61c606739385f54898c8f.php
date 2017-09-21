<?php

/* @Conciergerie/Admin/viewEntreprise.html.twig */
class __TwigTemplate_72ca0a4b5c78fed905564e4db7fa217b772e01e9cd21b3465e1e49114dcedd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/viewEntreprise.html.twig", 1);
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

      <h3>Détails de l'entreprise ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "id", array()), "html", null, true);
        echo "</h3>
      
      <p><b>Raison Sociale : </b>";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "user", array()), "username", array()))), "html", null, true);
        echo "</p>
      <p><b>SIRET : </b>";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "siret", array()))), "html", null, true);
        echo "</p>
      <p><b>Responsable : </b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "responsable", array()), "html", null, true);
        echo "</p>
      <p><b>Téléphone : </b>+33";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "telephone", array()), "html", null, true);
        echo "</p>
      <p><b>Ville : </b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "adresse", array()), "ville", array()))), "html", null, true);
        echo " </p>
      <p><b>Liste des abonnements : </b> <br>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "abonnements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 20
            echo "          - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnement", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "id", array()), "html", null, true);
            echo "</a><br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </p>
      <p><b>Liste des salariés : </b> <br>
        ";
        // line 24
        if (twig_test_empty($this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "salaries", array()))) {
            // line 25
            echo "          Cette entreprise ne compte pour le moment aucun salarié
        ";
        } else {
            // line 27
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "salaries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["salarie"]) {
                // line 28
                echo "            - ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["salarie"], "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["salarie"], "nom", array())))), "html", null, true);
                echo " 
            <br>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salarie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "      </p>
      <p>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteEntreprise", array("id" => $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : null), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Supprimer l'entreprise</button></a>

        <a href=\" ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprises");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des entreprises</button></a>
      </p>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/viewEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  111 => 34,  107 => 32,  104 => 31,  94 => 28,  89 => 27,  85 => 25,  83 => 24,  79 => 22,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  38 => 11,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/viewEntreprise.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\viewEntreprise.html.twig");
    }
}
