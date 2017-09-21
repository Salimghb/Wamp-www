<?php

/* ConciergerieBundle:Entreprise:monCompte.html.twig */
class __TwigTemplate_427f832c090dbc79c6e5dfcf0f785710352446770f6ad3ffefa48810b30d003d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:monCompte.html.twig", 1);
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
    <h2>Informations du compte</h2>
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
      <h2>Modification des informations</h2>
    </div>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "CompteModif"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "    <div class=\"alert alert-success\">
      ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_monCompte"), "attr" => array("class" => "")));
        echo "


    <div class=\"input-group col-xs-8\">
      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre adresse mail"), "label" => "Adresse mail :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Votre identifiant de connexion"), "label" => "Nom d'utilisateur :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre mot de passe (6 caractères minimum)"), "label" => "Nouveau mot de passe :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez votre mot de passe"), "label" => "Confirmation mot de passe :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "siret", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez les 10 chiffres de votre N° de SIRET"), "label" => "Numéro de SIRET :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "responsable", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom et prénom du responsable"), "label" => "NOM et Prénom du responsable :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <label>Adresse du entreprise :</label>
      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du responsable"), "label" => "Numéro de téléphone :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "site", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "URL du site de l'entreprise"), "label" => "Site internet :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <p>
        <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Valider les changements\" />
        <a href=\" ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeAbo");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à l'espace client</button></a>
      </p>
    </div>

    <br>

    <div class=\"alert alert-warning\">
      Revenir à l'espace client annulera tout changement.
    </div>

    ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:monCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 100,  184 => 90,  175 => 84,  168 => 80,  161 => 76,  154 => 72,  147 => 68,  140 => 64,  133 => 60,  126 => 56,  119 => 52,  111 => 47,  104 => 43,  97 => 39,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  66 => 22,  57 => 19,  54 => 18,  50 => 17,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:monCompte.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/monCompte.html.twig");
    }
}
