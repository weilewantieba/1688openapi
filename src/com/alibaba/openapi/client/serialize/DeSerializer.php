<?php
namespace Keyi1688\com\alibaba\openapi\client\serialize;

interface DeSerializer
{
    public function supportedContentType();
    public function deSerialize($deSerializer, $resultType, $charSet);
    public function buildException($deSerializer, $resultType, $charSet);
}
