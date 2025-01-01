<?php

    namespace Wixnit\Serviceauth\enum;

    enum OSType : string
    {
        case IOS = "ios";
        case ANDROID = "android";
        case MAC = "macos";
        case WINDOWS = "windows";
        case FUCHSIA = "fuchsia";
        case LINUX = "linux";
        case BLACKBERRY = "blackberry";
        case PLAYBOOK = "playbook";
        case UNKNOWN = "unknown";
    }