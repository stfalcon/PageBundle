Getting Started With PageBundle
==================================

Simple small bundle for simple site pages

## Prerequisites

This version of the bundle requires:

1. Symfony >= 2.0
2. LiipFunctionalTestBundle for testing
3. DoctrineFixturesBundle for fixtures
4. SonataAdminBundle for administering

## Installation

Installation is a quick 4 step process:

1. Add PageBundle in your composer.json
2. Enable the Bundle
3. Import PageBundle routing
4. Update your database schema

### Step 1: Add PageBundle in your composer.json

```js
{
    "require": {
        "stfalcon/page-bundle": "*"
    }
}
```

### Step 2: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Stfalcon\Bundle\PageBundle\StfalconPageBundle(),
    );
}
```

### Step 3: Import PageBundle routing

Now that you have installed and activated the bundle, all that is left to do is
import the PageBundle routing.

In YAML:

``` yaml
# app/config/routing.yml
StfalconPageBundle:
    resource: "@StfalconPageBundle/Controller/"
    type:     annotation
    prefix:   /
```

### Step 4: Update your database schema

Now that the bundle is configured, the last thing you need to do is update your
database schema because you have added a new entity, the `Page`.

Run the following command.

``` bash
$ php app/console doctrine:schema:update --force
```

Now that you have completed the installation and configuration of the PageBundle!