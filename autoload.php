<?php

/**
 * Manually loading Elephant.IO
 *
 * !!!This file is for legacy projects only that do not use composer/PSR-4 auto-loading!!!
 *
 * Include statements are in order by files that should be included first.
 * Not tested, however should work as expected.
 */

include_once("src/Psr/Log/InvalidArgumentException.php");
include_once("src/Psr/Log/LoggerAwareInterface.php");
include_once("src/Psr/Log/LoggerAwareTrait.php");
include_once("src/Psr/Log/LoggerInterface.php");
include_once("src/Psr/Log/LoggerTrait.php");
include_once("src/Psr/Log/AbstractLogger.php");
include_once("src/Psr/Log/LogLevel.php");
include_once("src/Psr/Log/NullLogger.php");
include_once("src/Client.php");
include_once("src/EngineInterface.php");
include_once("src/AbstractPayload.php");
include_once("src/Engine/AbstractSocketIO.php");
include_once("src/Engine/SocketIO/Session.php");
include_once("src/Engine/SocketIO/Version1X.php");
include_once("src/Exception/MalformedUrlException.php");
include_once("src/Exception/ServerConnectionFailureException.php");
include_once("src/Exception/SocketException.php");
include_once("src/Exception/UnsupportedActionException.php");
include_once("src/Exception/UnsupportedTransportException.php");
include_once("src/Payload/Decoder.php");
include_once("src/Payload/Encoder.php");