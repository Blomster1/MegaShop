<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // s4tabitay_vitrine_homepage
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 's4tabitay_vitrine_homepage')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\DefaultController::indexAction',  'name' => 'Visiteur',));
        }

        // s4tabitay_vitrine_mentions
        if ($pathinfo === '/mentions') {
            return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\DefaultController::mentionsAction',  '_route' => 's4tabitay_vitrine_mentions',);
        }

        // s4tabitay_vitrine_catalogue
        if ($pathinfo === '/catalogue') {
            return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\DefaultController::catalogueAction',  '_route' => 's4tabitay_vitrine_catalogue',);
        }

        // s4tabitay_vitrine_articleParCategorie
        if (0 === strpos($pathinfo, '/ArticleParCategorie') && preg_match('#^/ArticleParCategorie/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 's4tabitay_vitrine_articleParCategorie')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\DefaultController::articleParCategorieAction',));
        }

        // s4tabitay_vitrine_panier
        if (rtrim($pathinfo, '/') === '/contenuPanier') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 's4tabitay_vitrine_panier');
            }

            return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\PanierController::contenuPanierAction',  '_route' => 's4tabitay_vitrine_panier',);
        }

        if (0 === strpos($pathinfo, '/ajouterArticle')) {
            // s4tabitay_vitrine_addArticle
            if (preg_match('#^/ajouterArticle/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 's4tabitay_vitrine_addArticle');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 's4tabitay_vitrine_addArticle')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\PanierController::ajouterUnArticleAction',  'quantity' => 1,));
            }

            // s4tabitay_vitrine_addArticles
            if (0 === strpos($pathinfo, '/ajouterArticles') && preg_match('#^/ajouterArticles/(?P<id>[^/]++)(?:/(?P<quantity>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 's4tabitay_vitrine_addArticles')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\PanierController::ajouterArticlesAction',  'quantity' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/v')) {
            // s4tabitay_vitrine_empty
            if (rtrim($pathinfo, '/') === '/viderPanier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 's4tabitay_vitrine_empty');
                }

                return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\PanierController::viderPanierAction',  '_route' => 's4tabitay_vitrine_empty',);
            }

            // s4tabitay_vitrine_validatioPanier
            if (rtrim($pathinfo, '/') === '/validationPanier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 's4tabitay_vitrine_validatioPanier');
                }

                return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\PanierController::validationPanierAction',  '_route' => 's4tabitay_vitrine_validatioPanier',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // category_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_category_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'category_index');
            }

            return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
        }
        not_category_index:

        // category_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_category_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\CategoryController::showAction',));
        }
        not_category_show:

        // category_new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_category_new;
            }

            return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
        }
        not_category_new:

        // category_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_category_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\CategoryController::editAction',));
        }
        not_category_edit:

        // category_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_category_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\CategoryController::deleteAction',));
        }
        not_category_delete:

        if (0 === strpos($pathinfo, '/client')) {
            // client_index
            if (rtrim($pathinfo, '/') === '/client') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_client_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client_index');
                }

                return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\ClientController::indexAction',  '_route' => 'client_index',);
            }
            not_client_index:

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_client_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\ClientController::showAction',));
            }
            not_client_show:

            // client_new
            if ($pathinfo === '/client/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_client_new;
                }

                return array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }
            not_client_new:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_client_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\ClientController::editAction',));
            }
            not_client_edit:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 's4tabitay\\VitrineBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
