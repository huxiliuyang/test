<?php
namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;
use Symfony\Component\Routing\RouteCollection;

class Framework extends HttpKernel\HttpKernel
{
//    public function __construct(RouteCollection $routes)
//    {
//        $context = new Routing\RequestContext();
//        $matcher = new Routing\Matcher\UrlMatcher($routes, $context);
//        $resolver = new HttpKernel\Controller\ControllerResolver();
//
//        $dispatcher = new EventDispatcher();
//        $dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher));
//        $dispatcher->addSubscriber(new HttpKernel\EventListener\ResponseListener('UTF-8'));
//
//        parent::__construct($dispatcher, $resolver);
//    }
//    protected $matcher;
//    protected $resolver;
//    protected $dispatcher;
//
//    public function __construct(EventDispatcher $dispatcher, UrlMatcherInterface $matcher, ControllerResolverInterface $resolver)
//    {
//        $this->matcher = $matcher;
//        $this->resolver = $resolver;
//        $this->dispatcher = $dispatcher;
//    }
//
//    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
//    {
//        try {
//            $request->attributes->add($this->matcher->match($request->getPathInfo()));
//
//            $controller = $this->resolver->getController($request);
//            $arguments = $this->resolver->getArguments($request, $controller);
//
//            $response = call_user_func_array($controller, $arguments);
//        } catch (ResourceNotFoundException $e) {
//            $response = new Response('Not Found', 404);
//        } catch (\Exception $e) {
//            $response = new Response('An error occurred', 500);
//        }
//
//        // dispatch a response event
//        $this->dispatcher->dispatch('response', new ResponseEvent($response, $request));
//
//        return $response;
//    }
}