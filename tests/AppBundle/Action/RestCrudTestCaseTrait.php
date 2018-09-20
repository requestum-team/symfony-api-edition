<?php

namespace Tests\AppBundle\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Trait RestCrudTestCaseTrait
 */
trait RestCrudTestCaseTrait
{
    protected $url;
    protected $findOneBy = [];

    protected $headers = [
        'Accept' => 'application/json',
        'HTTP_Authorization' => 'Bearer AccessToken_For_Client',
    ];

    /**
     * @param int|null $id
     * @param int $statusCode
     * @return mixed|string
     */
    public function getItem($id = null, $statusCode = Response::HTTP_OK)
    {
        $this->processParamWrapper($id);

        $this->getClient()->request(
            Request::METHOD_GET,
            $this->getResourceUrl().'/'.($id ?: $this->getExistedObjectId()),
            [],
            [],
            $this->headers
        );
        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        return $this->getJsonResponse();
    }

    /**
     * @param null $url
     * @param int $statusCode
     * @return mixed|string
     */
    public function getItemWithCriteria($url = null, $criteria = null, $statusCode = Response::HTTP_OK)
    {
        $this->getClient()->request(
            Request::METHOD_GET,
            $this->getResourceUrl($url).'/'.$this->getExistedObjectId($criteria),
            [],
            [],
            $this->headers
        );
        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        return $this->getJsonResponse();
    }

    /**
     * @param null $url
     * @param array $filters
     * @param int $statusCode
     * @param null $headers
     * @param array $contains
     *
     * @return mixed|string
     */
    public function getList(
        $url = null,
        $filters = [],
        $statusCode = Response::HTTP_OK,
        $headers = null,
        $contains = []
    ) {
        $headers = $headers ? $headers : $this->headers;
        $this->processParamWrappers($filters);
        $this->getClient()->request(Request::METHOD_GET, $this->getResourceUrl($url), $filters, [], $headers);
        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        foreach ((array)$contains as $token) {
            $this->assertContains($token, $this->getClient()->getResponse()->getContent());
        }
        $response = $this->getJsonResponse();

        return $response;
    }

    public static function assertListResult($result, $total, $onPage, $field, $value)
    {
        static::assertArrayHasKey('total', $result);
        static::assertArrayHasKey('entities', $result);
        static::assertEquals($total, $result['total']);
        static::assertCount($onPage, $result['entities']);
        static::assertEquals($value, $result['entities'][0][$field]);
    }

    /**
     * @param $data
     * @param null $url
     * @param int $statusCode
     * @param array $contains
     * @return mixed
     */
    public function createItem($data, $url = null, $statusCode = Response::HTTP_CREATED, $contains = [])
    {
        $this->getClient()->request(Request::METHOD_POST, $this->getResourceUrl($url), $data, [], $this->headers);
        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        foreach ((array)$contains as $token) {
            $this->assertContains($token, $this->getClient()->getResponse()->getContent());
        }

        return $this->getJsonResponse();
    }

    /**
     * @param array      $data
     * @param null|array $id
     * @param string     $url
     * @param int        $statusCode
     * @param array      $contains
     * @param string     $method
     *
     * @return mixed
     */
    public function updateItem(
        $data,
        $id = null,
        $url = null,
        $statusCode = Response::HTTP_OK,
        $contains = [],
        $method = Request::METHOD_PATCH
    ) {
        $this->processParamWrapper($id);
        $id = $id ?: $this->getExistedObjectId();

        $this->getClient()
            ->request($method, $this->getResourceUrl($url).'/'.$id, $data, [], $this->headers);

        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        foreach ((array)$contains as $token) {
            $this->assertContains($token, $this->getClient()->getResponse()->getContent());
        }

        return $this->getJsonResponse();
    }

    /**
     * @param array    $data
     * @param null|int $id
     * @param string   $url
     * @param int      $statusCode
     * @param array    $contains
     * @param string   $method
     *
     * @return mixed
     */
    public function transitItem(
        $data,
        $id = null,
        $url = null,
        $statusCode = Response::HTTP_OK,
        $contains = [],
        $method = Request::METHOD_PATCH
    ) {
        $id = $id ?: $this->getExistedObjectId();

        $this->getClient()
            ->request($method, $this->getResourceUrl($url)."/$id/transit", $data, [], $this->headers);

        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        foreach ((array)$contains as $token) {
            $this->assertContains($token, $this->getClient()->getResponse()->getContent());
        }

        return $this->getJsonResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem($id = null, $statusCode = Response::HTTP_NO_CONTENT)
    {
        $this->processParamWrapper($id);
        $id = $id ?: $this->getExistedObjectId();

        $this->getClient()->request(
            Request::METHOD_DELETE,
            $this->getResourceUrl().'/'.$id,
            [],
            [],
            $this->headers
        );
        $this->assertEquals($statusCode, $this->getClient()->getResponse()->getStatusCode());

        $result = $this->getContainer()->get('doctrine.orm.entity_manager')->find($this->getEntityName(), $id);

        if ($statusCode == Response::HTTP_NO_CONTENT) {
            $this->assertNull($result);
        } else {
            $this->assertNotNull($result);
        }

        return $this->getJsonResponse();
    }

    /**
     * Return name of model.
     *
     * @return string
     */
    abstract protected function getEntityName();

    /**
     * {@inheritdoc}
     */
    protected function getJsonResponse()
    {
        $content = $this->getClient()->getResponse()->getContent();

        if ($content) {
            static::assertJson($content);
            $content = json_decode($content, true);
        }

        return $content;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExistedObjectId($criteria = null)
    {
        $object = $this->getObjectOf($this->getEntityName(), $criteria);

        if (!method_exists($object, 'getId')) {
            static::fail('object doesn\'t have getId method');
        };

        return $object->getId();
    }

    /**
     * {@inheritdoc}
     */
    protected function getObjectOf($class, $criteria = null)
    {
        $criteria = $criteria ?: $this->findOneBy;

        $object = $this->getClient()->getContainer()->get('doctrine.orm.default_entity_manager')
            ->getRepository($class)
            ->findOneBy($criteria)
        ;

        if (!$object) {
            static::fail('test object not found');
        }

        return $object;
    }

    /**
     * @param null|string $url
     *
     * @return string
     */
    protected function getResourceUrl($url = null)
    {
        if (!$url) {
            return $this->url;
        }

        return $url;
    }

    /**
     * @param string $token
     * @return $this;
     */
    protected function setToken($token)
    {
        $this->headers['HTTP_Authorization'] = $token;

        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    protected function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    protected function processParamWrappers(array &$params)
    {
        array_walk_recursive($params, function (&$value) {
            $this->processParamWrapper($value);
        });
    }

    protected function processParamWrapper(&$value)
    {
        if (is_object($value) && $value instanceof ParamWrapper) {
            $entity = $this->getObjectOf($value->getClass(), $value->getCriteria());

            $value = PropertyAccess::createPropertyAccessorBuilder()
                ->enableExceptionOnInvalidIndex()
                ->getPropertyAccessor()
                ->getValue($entity, $value->getPath())
            ;
        }
    }
}
