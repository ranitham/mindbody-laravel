<?php

return [
  "debug" => env("MINDBODY_DEBUG", false),
  "site_id" => env("MINDBODY_SITEIDS"),
  "source_credentials" => [
    "username" => "_" . env("MINDBODY_SOURCENAME"),
    "password" => env("MINDBODY_SOURCEPASSWORD"),
  ],
  "source_name" => env("MINDBODY_SOURCENAME"),
  "apikey" => env("MINDBODY_APIKEY"),
];
