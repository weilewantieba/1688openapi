<?php
namespace Keyi1688\com\alibaba\openapi\client\serialize;

interface Serializer
{
    public function supportedContentType();
    public function serialize($serializer);
}
