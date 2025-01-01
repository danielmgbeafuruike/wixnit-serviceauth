<?php

    namespace Wixnit\Serviceauth\enum;

    enum PlatformType : string
    {
        case APP = "app";
        case WEB = "web";
        case UNKNOWN = "unknown";
    }