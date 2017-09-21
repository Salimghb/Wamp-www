<?php

/* ConciergerieBundle:Entreprise:salaries.html.twig */
class __TwigTemplate_2f684cbac14be9ed34b0af1fd17e5085216ef618bddb146248b4ffc80f2db7d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:salaries.html.twig", 1);
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
    <h2>Bienvenue sur votre espace Entreprise</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  
  <section class=\"container catalogue\">

    <div class=\"row\">
      <h2>Liste de vos salariés :</h2>
    </div>

    <div class=\"row\">

      ";
        // line 20
        if (twig_test_empty((isset($context["listeSalaries"]) ? $context["listeSalaries"] : null))) {
            // line 21
            echo "
        <h4> Votre entreprise ne compte encore aucun salarié! </h4>

      ";
        } else {
            // line 25
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Salarié</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
          </tr>

          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeSalaries"]) ? $context["listeSalaries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["salarie"]) {
                // line 36
                echo "
            <tr>
              <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_viewSalarie", array("id" => $this->getAttribute($context["salarie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["salarie"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["salarie"], "nom", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["salarie"], "prenom", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["salarie"], "dateNaissance", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salarie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        </table>

      ";
        }
        // line 49
        echo "
      <a href=\" ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_addSalarie");
        echo " \"><button type=\"button\" class=\"btn btn-success\">Ajouter des salariés</button></a>

    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:salaries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  111 => 49,  105 => 45,  95 => 41,  91 => 40,  87 => 39,  81 => 38,  77 => 36,  73 => 35,  61 => 25,  55 => 21,  53 => 20,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:salaries.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/salaries.html.twig");
    }
}
