# Locations plugin

Easy to use system for managing company locations for October CMS


## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.Locations
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.Locations
```
___


## Using components

This plugin provides 5 components:
1. `Location`
2. `Locations`
3. `LocationSettings`
4. `Details`
5. `Phones`

All Components allow you to output information about your organization to your template.


### Location


This component allows you to output information from the backend to your Twig template to display a specific office of company by url. 
In this component supports the `slug` property, for part of the url.
To use the component, you must enter `:slug` in the page url when creating the page.
To display data on a page, the component has a function `get`:
* id
* meta_title
* meta_description
* meta_keywords
* name
* description
* country
* locality
* region
* street
* postal_code
* phones
* post_office_box
* fax
* geo_latitude
* geo_longitude
* opening_hours
* created_at
* updated_at
* sort_order
* deleted_at


``` Twig

[Location]
slug = {{ :slug }}
==

<h1>{{ Location.get.name }}</h1>
{% if Location.get.description %}
<p>{{ Location.get.description }}</p>
{% endif %}
<ul role="list" class="list">
<li>
  <p><strong>Address: </strong>{{ Location.get.postal_code }}, {{ Location.get.country }}, {{ Location.get.locality }}, {{ Location.get.region }}, {{ Location.get.street }}</p>
</li>
{% if Location.get.opening_hours %}
  <li>
    <p><strong>Working hours: </strong>{{ Location.get.opening_hours }}</p>
  </li>
{% endif %}
{% if Location.get.phone %}
  <li>
    <p><strong>Phone: </strong>{{ Location.get.phone }}</p>
  </li>
{% endif %}
{% for phone in Location.get.phones %}
  <li>
    <p>
      <strong>Phone: </strong><a href="tel:{{ phone.number }}">{{ phone.number }}</a> {% if phone.name %}({{ phone.name }}){% endif %}
    </p>
  </li>
{% endfor %}
{% if Location.get.fax %}
  <li>
    <p><strong>Fax: </strong>{{ Location.get.fax }}</p>
  </li>
{% endif %}
{% if Location.get.post_office_box %}
  <li>
    <p><strong>Post box: </strong>{{ Location.get.post_office_box }}</p>
  </li>
{% endif %}
```


### Locations

This component allows you to output location information
from the backend to your twig template in any form convenient for you.
In twig locations, you can output through a loop `for` and access any of their keys to get the value:
* id
* meta_title
* meta_description
* meta_keywords
* name
* description
* country
* locality
* region
* street
* postal_code
* phones
* post_office_box
* fax
* geo_latitude
* geo_longitude
* opening_hours
* created_at
* updated_at
* sort_order
* deleted_at


```Twig
[ Locations ]
==

{% for location in Locations.getAll %}
  <h1>{{ location.name }}</h1>
  <p><strong>Address: </strong>{{ Location.get.postal_code }}, {{ Location.get.country }}, {{ Location.get.locality }}, {{ Location.get.region }}, {{ Location.get.street }}</p>
{% endfor %}

```


### LocationSettings

This is a component of the plugin settings,
here you can set the settings of the main location:
logo, favicon, phone number, working hours and company address.

The public variable `settings` is used to access the settings properties.

```Twig

[LocationSettings]
==

<img src="{{ LocationSetting.settings.logo | media }}" atl="..." />
<h1>{{ LocationSetting.settings.name }}</h1>
<p>{{ LocationSetting.settings.description }}</p>

```

List of all settings fields:
* logo 
* favicon
* name
* description
* phone
* email
* country
* region
* locality
* street
* geo_latitude
* geo_longitude
* postal_code
* fax
* post_office_box
* opening_hours


### Details

This component allows you to output company details to your twig template from the administrative part of the site.

``` Twig
[Details]
==

<ul>
    {% for detail in Details.getAll %}
        <li>
            <strong>{{ detail.name }}</strong>: {{ detail.value }}
        </li>
    {% endfor %}
</ul
```

### Phones

This component allows you to display all the company's phones in your twig template from the administrative part of the site.

``` Twig
[Phones]

<ul>
    {% for phone in Phones.getAll %}
        <li>
            <strong>{{ phone.name }}</strong>: {{ phone.number }}
        </li>
    {% endfor %}
</ul>
```