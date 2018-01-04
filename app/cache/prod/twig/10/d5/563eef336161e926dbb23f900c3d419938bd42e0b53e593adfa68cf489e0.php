<?php

/* InnovGroupBundle:Group:notifications.html.twig */
class __TwigTemplate_10d5563eef336161e926dbb23f900c3d419938bd42e0b53e593adfa68cf489e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <li id=\"header_notification_bar\" class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" href=\"#\"  style=\"font-size:17px\">

                    <i class=\"icon-bell-alt\"></i>
                    <span class=\"badge bg-warning\"  style=\"font-size:10px\">";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "notifsRecus")), "html", null, true);
        echo "</span>
                </a>
         
         
                <ul class=\"dropdown-menu extended notification\">
                    <div class=\"notify-arrow notify-arrow-yellow\"></div>
                    <li>
                        <p class=\"yellow\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.navbar.notification.header", twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "notifsRecus"))), "html", null, true);
        echo "</p>
                    </li>
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "notifsRecus")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 15
            echo "                    <li>
                        ";
            // line 16
            if (($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "typeNotif") == 1)) {
                // line 17
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_accepterDemandeGroupe", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "id"), "groupe_id" => $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "groupeNotif"), "id"))), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 18
                echo "        
                           <a href=\"#\">
                         ";
            }
            // line 21
            echo "                            <span class=\"label\">
                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\">                            
                            </span>
                                ";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "prenom") . " ") . $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "nom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "contenu")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "groupeNotif"), "nom"), "html", null, true);
            echo "
                                
                            <span class=\"small italic\">
                               <br> <i class= \"icon-time\"></i>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "dateNotif"), "d/m/Y - H:i:s"), "html", null, true);
            echo "
                            ";
            // line 28
            if (($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "typeNotif") == 1)) {
                // line 29
                echo "                            <button class=\"btn btn-xs btn-success \">  <i class=\"icon-long-arrow-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.notification.accepter_demande"), "html", null, true);
                echo "  </button> 
                                ";
            }
            // line 31
            echo "                            </span>
                        </a>
                    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                    <li>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("InnovGroup_voirToutesMesNotifs");
        echo "\"><i class=\" icon-long-arrow-right\"></i>  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.navbar.notification.footer"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
 </li>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  101 => 35,  80 => 27,  70 => 24,  63 => 22,  60 => 21,  55 => 18,  49 => 17,  47 => 16,  44 => 15,  40 => 14,  35 => 12,  25 => 5,  19 => 1,  1983 => 517,  1979 => 516,  1975 => 515,  1971 => 514,  1965 => 511,  1961 => 510,  1956 => 509,  1953 => 508,  1946 => 506,  1942 => 505,  1935 => 501,  1931 => 500,  1925 => 497,  1921 => 496,  1915 => 493,  1910 => 492,  1907 => 491,  1898 => 487,  1890 => 482,  1885 => 480,  1880 => 478,  1875 => 476,  1870 => 474,  1865 => 472,  1860 => 470,  1855 => 468,  1850 => 466,  1845 => 464,  1840 => 462,  1835 => 460,  1830 => 458,  1823 => 454,  1815 => 449,  1811 => 448,  1807 => 446,  1804 => 445,  1798 => 441,  1793 => 439,  1789 => 438,  1785 => 437,  1781 => 436,  1777 => 435,  1773 => 434,  1769 => 433,  1765 => 432,  1760 => 430,  1756 => 429,  1751 => 426,  1748 => 425,  1743 => 392,  1738 => 388,  1723 => 376,  1717 => 373,  1707 => 365,  1705 => 364,  1695 => 357,  1687 => 352,  1680 => 348,  1666 => 336,  1663 => 335,  1650 => 318,  1646 => 317,  1637 => 310,  1631 => 308,  1625 => 306,  1623 => 305,  1618 => 303,  1607 => 295,  1601 => 292,  1593 => 286,  1590 => 285,  1584 => 194,  1579 => 193,  1571 => 86,  1567 => 85,  1564 => 84,  1561 => 83,  1555 => 80,  1551 => 79,  1546 => 77,  1541 => 75,  1536 => 74,  1533 => 73,  1527 => 62,  1524 => 61,  1521 => 60,  1515 => 57,  1511 => 56,  1506 => 55,  1503 => 54,  1492 => 1310,  1488 => 1309,  1484 => 1308,  1480 => 1307,  1476 => 1306,  1472 => 1305,  1468 => 1304,  1464 => 1303,  1460 => 1302,  1456 => 1301,  1452 => 1300,  1448 => 1299,  1444 => 1298,  1440 => 1297,  1436 => 1296,  1432 => 1295,  1428 => 1294,  1424 => 1293,  1420 => 1292,  1415 => 1290,  1411 => 1289,  1407 => 1288,  1023 => 906,  1017 => 905,  1015 => 904,  1011 => 903,  1007 => 902,  1003 => 901,  999 => 900,  995 => 899,  991 => 898,  987 => 897,  983 => 896,  979 => 895,  975 => 894,  971 => 893,  967 => 892,  963 => 891,  959 => 890,  955 => 889,  950 => 888,  944 => 886,  942 => 885,  796 => 742,  759 => 708,  731 => 683,  704 => 659,  587 => 545,  564 => 524,  561 => 508,  558 => 491,  556 => 445,  552 => 443,  550 => 425,  542 => 420,  538 => 419,  534 => 418,  508 => 394,  506 => 392,  502 => 390,  500 => 388,  497 => 335,  494 => 334,  492 => 333,  484 => 327,  481 => 285,  479 => 284,  470 => 277,  460 => 272,  456 => 271,  450 => 270,  444 => 267,  434 => 260,  428 => 259,  422 => 255,  420 => 254,  410 => 249,  404 => 248,  398 => 247,  393 => 245,  387 => 244,  382 => 242,  378 => 241,  373 => 240,  370 => 239,  366 => 238,  361 => 236,  357 => 235,  353 => 234,  349 => 233,  346 => 232,  341 => 228,  333 => 225,  325 => 221,  317 => 217,  315 => 216,  311 => 214,  308 => 213,  306 => 212,  303 => 211,  299 => 209,  296 => 208,  294 => 207,  291 => 206,  288 => 205,  286 => 204,  279 => 199,  274 => 196,  272 => 193,  267 => 190,  264 => 189,  260 => 186,  252 => 180,  250 => 179,  245 => 176,  243 => 175,  234 => 171,  155 => 95,  151 => 94,  147 => 93,  143 => 92,  138 => 89,  136 => 83,  133 => 82,  131 => 73,  123 => 68,  119 => 67,  115 => 66,  111 => 64,  109 => 60,  106 => 59,  99 => 51,  89 => 35,  84 => 28,  79 => 29,  72 => 24,  65 => 20,  53 => 17,  42 => 9,  32 => 1,  104 => 54,  100 => 45,  95 => 43,  92 => 31,  86 => 29,  83 => 40,  81 => 37,  75 => 35,  69 => 33,  67 => 32,  64 => 31,  61 => 19,  57 => 18,  52 => 18,  45 => 14,  41 => 12,  39 => 11,  36 => 10,  31 => 7,  28 => 6,);
    }
}
