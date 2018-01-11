# CarMakes: Suggest Mode addon for Statamic 2.x
A custom addon for Statamic 2.x that uses the [Suggest fieldtype](https://docs.statamic.com/fieldtypes/suggest) to select from a list of auto manufacturers, useful for choosing a "make" of a car.

## Installing the Addon
Copy the `CarMakes` folder from the repo to the `site/addons` folder in your Statamic 2.x installation.

## Using the Suggest Mode
Once installed, modify a fieldset by using Statamic's Suggest fieldtype and setting the `mode` to `CarMakes` manually. This _cannot be done through the Control Panel_ and must be done by editing a YAML file in your `site/settings/fieldsets` folder.

```yaml
taxonomies:
  tags: true
title: Car
create_title: Add New Car
hide: true
fields:
  make:
    type: suggest
    display: Make
    instructions: The manufacturer of the vehicle (Audi, MINI, Chevrolet, etc.)
    mode: CarMakes
    max_items: 1
  model:
    type: text
    display: Model
    instructions: The specific model of the vehicle (S4, Cooper S, Malibu LT, etc.)
```

## Things To Do...
* Group manufacturers by country
* Sort manufacturers alphabetically
