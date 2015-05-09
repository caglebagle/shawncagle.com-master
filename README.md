Styling
=======

Naming Conventions
------------------
To maintain an easily stylable website with simple language, classes have been given "object-styled" names. In each `.scss` file you can find a map of all the classes for a given element, layed out as a tree which directly correlates to it's layout on the webpage.

###An example of the class naming convention and Layout Tree

```scss
/* Navigation Menu Style Tree
 * ------------------------------
 * nav
 *  ul.nav--list
 *    li.nav--list--item
 *      a
*/

// Classes are written in an object oriented fashion. parents and children are seperated by "--". EG: parent--child--child_of_child
```

In this example, `nav` is the parent element, `ul.nav--list` is a child of `nav`, `li.nav--list--item` is a child of `ul.nav--list` and so on.

To make things even easier to follow, classes are named after their parents so that the stylesheets are easily read and elements are easy to follow. Variables have been named in a similar fashion.

###An example of the Variable naming conventions

```scss
/*
 * Menu Specific Variables
 * ------------------------------
*/
$nav-width                       : (100% - $project_grid-width);

$nav--list-width                 : 85%;
$nav--list-height                : 50px;
$nav--list-line_height           : 25px;
$nav--list-padding_left          : 75px;
$nav--list-margin_top            : 75px;

$nav--list--item--a-padding_left : 15px;
$nav--list--item-hover_color     : $light_blue;
$nav--list--item-a-hover_color   : $white;
$nav--list--item-color           : $black;
$nav--list--item-transition      : all .5s;

// Variables are seperated by a single "-" and if need be are spaced using "_". EG: $parent--child-background_color: #000
```

Following this takes a bit more typing, but makes it much easier for any newcomers to the code to figure out where and how everything fits together.

File Layout
-----------
Most pieces of the layout are seperated into their own files prepended by a `_`. the `_` tells the scss compiler to not include it in a seperate `css` file to keep things cleaner. All styles are `@imported` to the `_style.scss` file which is in turn imported into the `main.scss` file.

Overrides
---------
While typically bad practice, occasionally a quick fix is called for, and overrides for all styles are easily applied in the `main.scss` file underneath the `@import`s. Overrides should be a ***Temporary*** measure, or the code can become quickly unmaintainable.

TODO
----
To make things a bit faster, and to keep my fingers happy, I'll probably create an `_aliases.scss` file where I can store shorthand versions of the class and variable names. **EG:** `$nav-l-i-pad_left`. At the moment, this is not a priority. ***Who needs fingers anyway?***


####Author: [Kristopher Watts](https://github.com/uncledozer)
####Website: [Webtastic-Development.net](http://webtastic-development.net)
####Email: kristopher.a.watts@gmail.com
####Date Authored: April 23, 2015
