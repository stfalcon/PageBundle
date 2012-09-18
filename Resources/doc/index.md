Getting Started With PageBundle
==================================

Simple small bundle for simple site pages

## Prerequisites

This version of the bundle requires:

1. Symfony >= 2.1
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
    prefix:   /page
```
[Routing in SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle/blob/master/Resources/doc/reference/getting_started.rst#step-1-define-sonataadminbundle-routes)

### Step 4: Update your database schema

Now that the bundle is configured, the last thing you need to do is update your
database schema because you have added a new entity, the `Page`.

Run the following command.

``` bash
$ php app/console doctrine:schema:update --force
```

### Step 5: Create layout template for the PageBundle

Create a main layout `layout.html.twig` in the `app/Resources/views/` directory with the following contents:

```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

        {# Metadata from the StfalconPageBundle #}
        {% set _meta_keywords = block('meta_keywords') %}
        {% set _meta_description = block('meta_description') %}
        {% if _meta_keywords is not empty %}<meta name="keyword" content="{{ _meta_keywords }}">{% endif %}
        {% if _meta_description is not empty %}<meta name="description" content="{{ _meta_description }}">{% endif %}

    </head>
    <body>
        {% block content %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
```

Now that you have completed the installation and configuration of the PageBundle!