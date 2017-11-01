<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use AppBundle\Entity\File;
use Oneup\UploaderBundle\Uploader\Response\AbstractResponse;

/**
 * Class UploadListener
 *
 * @package AppBundle\EventListener
 */
class UploadListener
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * UploadListener constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param PostPersistEvent $event
     *
     * @return mixed
     */
    public function onUpload(PostPersistEvent $event)
    {
        /** @var AbstractResponse $response */
        $response = $event->getResponse();

        $data = $event->getFile();

        $fileObject = new File();

        $fileObject->setName($data->getFilename())
            ->setPath($data->getRealPath())
            ->setContext(File::CONTEXT_PAGE)
            ->setContentType($data->getMimeType())
            ->setSize($data->getSize());

        $this->em->persist($fileObject);
        $this->em->flush();

        $response->offsetSet('id', $fileObject->getId());
        $response->offsetSet('name', $fileObject->getName());
        $response->offsetSet('context', $fileObject->getContext());
        $response->offsetSet('contentType', $fileObject->getContentType());
        $response->offsetSet('path', $fileObject->getPath());
        $response->offsetSet('size', $fileObject->getSize());
        $response->offsetSet('createdAt', $fileObject->getCreatedAt());
        $response->offsetSet('updatedAt', $fileObject->getUpdatedAt());

        return $response;
    }
}