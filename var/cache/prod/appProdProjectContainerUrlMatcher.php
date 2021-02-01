<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/author')) {
            // author_index
            if ('/author' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\AuthorController::indexAction',  '_route' => 'author_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_author_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'author_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_author_index;
                }

                return $ret;
            }
            not_author_index:

            // author_new
            if ('/author/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\AuthorController::newAction',  '_route' => 'author_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_author_new;
                }

                return $ret;
            }
            not_author_new:

            // author_edit
            if (preg_match('#^/author/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'author_edit']), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_author_edit;
                }

                return $ret;
            }
            not_author_edit:

            // author_delete
            if (preg_match('#^/author/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'author_delete']), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_author_delete;
                }

                return $ret;
            }
            not_author_delete:

        }

        elseif (0 === strpos($pathinfo, '/book')) {
            // book_index
            if ('/book' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\BookController::indexAction',  '_route' => 'book_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_book_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'book_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_book_index;
                }

                return $ret;
            }
            not_book_index:

            // book_new
            if ('/book/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\BookController::newAction',  '_route' => 'book_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_book_new;
                }

                return $ret;
            }
            not_book_new:

            // book_show
            if (preg_match('#^/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_show']), array (  '_controller' => 'AppBundle\\Controller\\BookController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_book_show;
                }

                return $ret;
            }
            not_book_show:

            // book_edit
            if (preg_match('#^/book/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_edit']), array (  '_controller' => 'AppBundle\\Controller\\BookController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_book_edit;
                }

                return $ret;
            }
            not_book_edit:

            // book_delete
            if (preg_match('#^/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_delete']), array (  '_controller' => 'AppBundle\\Controller\\BookController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_book_delete;
                }

                return $ret;
            }
            not_book_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
