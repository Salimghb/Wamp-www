<?php

/* ConciergerieBundle:Prestataire:historique.html.twig */
class __TwigTemplate_6186d8cf2947fcaa9604fdb48e05ff153d4fe4b261e940a436795ed386f443ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "ConciergerieBundle:Prestataire:historique.html.twig", 1);
        $this->blocks = array(
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Prestataire:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid TitrePage\">
  <h2>Prestataire : Historique des prestations</h2>
</div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<section class=\"container catalogue\">

  <h2>Historique des prestations délivrées</h2>
  ";
        // line 14
        if (twig_test_empty((isset($context["CommandesValidePresta"]) ? $context["CommandesValidePresta"] : null))) {
            // line 15
            echo "    <p>Vous n'avez pas encore délivré de prestation. </p>
  ";
        } else {
            // line 17
            echo "    <table class=\"table table-bordered\">
          <tr>
            <td>Date :</td>
            <td>Service :</td>
            <td>Client :</td>
            <td>Montant :</td>
          </tr>
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["CommandesValidePresta"]) ? $context["CommandesValidePresta"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 25
                echo "        <tr>
          <td>le ";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </table>

  ";
        }
        // line 35
        echo "

</section>
";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Prestataire:historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  92 => 32,  83 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  53 => 17,  49 => 15,  47 => 14,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Prestataire:historique.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Prestataire/historique.html.twig");
    }
}
