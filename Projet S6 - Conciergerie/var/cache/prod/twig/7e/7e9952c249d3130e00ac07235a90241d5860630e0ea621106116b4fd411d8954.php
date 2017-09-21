<?php

/* @Conciergerie/Prestataire/monCompte.html.twig */
class __TwigTemplate_ec6d201a586b68768d2dee0ccc896b8a4f4edbf41fc273ef775f3dadca980520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "@Conciergerie/Prestataire/monCompte.html.twig", 1);
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
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Prestataire : Mon compte</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">
    <h2>Modification des informations</h2>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "    <div class=\"alert alert-success\">
      ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    <!-- Début du formulaire d'édition de compte prestataire -->

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_monCompte"), "attr" => array("class" => "Bloc_Inscription container")));
        echo "


    <div class=\"input-group col-xs-8\">
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre adresse mail"), "label" => "Adresse mail :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Votre identifiant de connexion"), "label" => "Nom d'utilisateur :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre mot de passe (6 caractères minimum)"), "label" => "Nouveau mot de passe :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez votre mot de passe"), "label" => "Confirmation mot de passe :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "siret", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez les 10 chiffres de votre N° de SIRET"), "label" => "Numéro de SIRET :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "responsable", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom et prénom du responsable"), "label" => "NOM et Prénom du responsable :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <label>Adresse du prestataire :</label>
      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du responsable"), "label" => "Numéro de téléphone :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "site", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "URL du site de l'entreprise"), "label" => "Site internet :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <input type=\"submit\" class=\"btn btn-primary sub-btn\" value=\"Valider les changements\" />
    </div>

    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/monCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 90,  174 => 83,  167 => 79,  160 => 75,  153 => 71,  146 => 67,  139 => 63,  132 => 59,  125 => 55,  118 => 51,  110 => 46,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  68 => 22,  63 => 19,  54 => 16,  51 => 15,  47 => 14,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/monCompte.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\monCompte.html.twig");
    }
}
