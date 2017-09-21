<?php

/* ConciergerieBundle::layout.html.twig */
class __TwigTemplate_3e633ef31736b11fd54f66c49431ea139f8af66543167834865e3d9922b09add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'redirectHome' => array($this, 'block_redirectHome'),
            'navbar' => array($this, 'block_navbar'),
            'user_info' => array($this, 'block_user_info'),
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang =\"fr\">
<head>

  <meta charset=\"utf-8\">
  <meta name=\"description\" content=\"Conciergerie d'entreprise : Vous êtes dirigeant d'entreprise ? Souscrivez à l'un de nos bouquets de services. Vos salariés pourront souscrire à ces services depuis notre site. Vous êtes prestataire ? Proposez vos services dans notre catalogue.\">
  <link rel=\"stylesheet\" href= \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  <title>
    ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "  </title>

</head>

<body>

  <section class=\"container-fluid header\">

    <div class=\"row\">

      <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-6 bloc_logo\">
        <a href= ";
        // line 24
        $this->displayBlock('redirectHome', $context, $blocks);
        echo "><img class=\"img-responsive logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
      </div>

      <div class=\"barre_nav col-lg-5\">

        ";
        // line 29
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "
      </div>


      <div class=\"user_info col-lg-4\">

        ";
        // line 63
        $this->displayBlock('user_info', $context, $blocks);
        // line 73
        echo "
      </div>

    </section>


    ";
        // line 79
        $this->displayBlock('TitrePage', $context, $blocks);
        // line 82
        echo "

    ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
    <footer class=\"footer\">
      <ul class=\"nav nav-pills\">
        <li role=\"presentation\"><a href=\"\">Copyright 2016 - Conciergerie d'entreprise</a></li>
        <li role=\"presentation\"><a href=\"\">Mentions légales</a></li>
        <li role=\"presentation\"><a href=\"\">Conditions d'utilisation</a></li>
        <li role=\"presentation\"><a href=\"\">Contactez-nous</a></li>
      </ul>
    </footer>
  </body>

  </html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "      Conciergerie d'entreprise : Une large gamme de services pour les salariés
    ";
    }

    // line 24
    public function block_redirectHome($context, array $blocks = array())
    {
        echo "\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_homepage");
        echo "\"";
    }

    // line 29
    public function block_navbar($context, array $blocks = array())
    {
        // line 30
        echo "
          <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_infosConciergerie");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Qui sommes nous ?</button></a>

          <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_services");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Nos services</button></a>

          <a href=\" ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_contact");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Nous contacter</button></a>

          <!-- Cette option de la navbar s'active uniquement quand un utilisateur est connecté et le redirige vers son espace client -->
          ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SALARIE")) {
            // line 39
            echo "
            <a href=\" ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie");
            echo " \"><button type=\"button\" class=\"btn btn-default\">Espace Client</button></a>

          ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
            // line 43
            echo "
            <a href=\" ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise");
            echo " \"><button type=\"button\" class=\"btn btn-default\">Espace Client</button></a>

          ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PRESTATAIRE")) {
            // line 47
            echo "
            <a href=\" ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire");
            echo " \"><button type=\"button\" class=\"btn btn-default\">Espace Client</button></a>

          ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "
            <a href=\" ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin");
            echo " \"><button type=\"button\" class=\"btn btn-default\">Administration</button></a>
          ";
        }
        // line 54
        echo "          <!-- Fin de l'option occasionnelle -->

        ";
    }

    // line 63
    public function block_user_info($context, array $blocks = array())
    {
        // line 64
        echo "          ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "            <div class=\"logged_block\">
              <b>Connecté en tant que ";
            // line 66
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()))), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
              </b>
            </div>
          ";
        } else {
            // line 70
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:loginBis"));
            echo "
          ";
        }
        // line 72
        echo "        ";
    }

    // line 79
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 80
        echo "
    ";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 85,  228 => 84,  223 => 80,  220 => 79,  216 => 72,  210 => 70,  201 => 66,  198 => 65,  195 => 64,  192 => 63,  186 => 54,  181 => 52,  178 => 51,  172 => 48,  169 => 47,  163 => 44,  160 => 43,  154 => 40,  151 => 39,  149 => 38,  143 => 35,  138 => 33,  133 => 31,  130 => 30,  127 => 29,  119 => 24,  114 => 11,  111 => 10,  95 => 87,  93 => 84,  89 => 82,  87 => 79,  79 => 73,  77 => 63,  69 => 57,  67 => 29,  57 => 24,  44 => 13,  42 => 10,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle::layout.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/layout.html.twig");
    }
}
